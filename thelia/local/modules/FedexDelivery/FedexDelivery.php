<?php
/*************************************************************************************/
/*      This file is part of the Thelia package.                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*      email : dev@thelia.net                                                       */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace FedexDelivery;

use Propel\Runtime\Connection\ConnectionInterface;
use Thelia\Core\Translation\Translator;
use Thelia\Module\AbstractDeliveryModule;
use Thelia\Core\HttpFoundation\Response;
use Thelia\Core\HttpFoundation\Request;
use Thelia\Core\HttpKernel\HttpCache\HttpCache;
use Thelia\Api\Client\Client;
use Thelia\Install\Database;
use Thelia\Log\Tlog;
use Thelia\Model\Address;
use Thelia\Model\AddressQuery;
use Thelia\Model\AreaDeliveryModuleQuery;
use Thelia\Model\Base\CurrencyQuery;
use Thelia\Model\Country;
use Thelia\Model\CountryAreaQuery;
use Thelia\Model\Currency;
use Thelia\Model\LangQuery;
use Thelia\Model\Message;
use Thelia\Model\MessageQuery;
use Thelia\Model\OrderPostage;
use Thelia\Module\BaseModule;
use Thelia\Module\DeliveryModuleInterface;
use Thelia\Module\Exception\DeliveryException;


class FedexDelivery extends AbstractDeliveryModule
{ 

    /** @var string */
    const DOMAIN_NAME = 'fedexdelivery';
    public $resultArray;

    public function preActivation(ConnectionInterface $con = null)
    {
        if (! $this->getConfigValue('is_initialized', false)) {
            $database = new Database($con);
            $database->insertSql(null, array(__DIR__ . '/Config/thelia.sql'));
            $this->setConfigValue('is_initialized', true);
        }
        return true;

    }

    public function postActivation(ConnectionInterface $con = null)
    {
        $this->initializeMessage();
    }

    protected function initializeMessage()
    {
        // create new message
        if (null === MessageQuery::create()->findOneByName('mail_fedex_delivery_confirmation')) {
            $message = new Message();
            $message
                ->setName('mail_fedex_delivery_confirmation')
                ->setHtmlTemplateFileName('mail-fedex-delivery-confirmation.html')
                ->setHtmlLayoutFileName('')
                ->setTextTemplateFileName('mail-fedex-delivery-confirmation.txt')
                ->setTextLayoutFileName('')
                ->setSecured(0);


            $languages = LangQuery::create()->find();

            foreach ($languages as $language) {
                $locale = $language->getLocale();

                $message->setLocale($locale);
                $message->setSubject(
                    'Fedex Delivery : shipping tracking'
                );
                $message->setTitle(
                    'Fedex Delivery shipping message'
                );
            }

            $message->save();
        }

          if (null === MessageQuery::create()->findOneByName('mail_fedex_delivery_notification')) {
            $message = new Message();
            $message
                ->setName('mail_fedex_delivery_notification')
                ->setHtmlTemplateFileName('mail-fedex-delivery-notification.html')
                ->setHtmlLayoutFileName('')
                ->setTextTemplateFileName('mail-fedex-delivery-notification.txt')
                ->setTextLayoutFileName('')
                ->setSecured(0);


            $languages = LangQuery::create()->find();

            foreach ($languages as $language) {
                $locale = $language->getLocale();

                $message->setLocale($locale);
                $message->setSubject(
                    '{$order_ref} Fedex Delivery : shipping tracking'
                );
                $message->setTitle(
                    '{$order_ref} Fedex Delivery shipping message'
                );
            }

            $message->save();
        }
    }

    public function isValidDelivery(Country $country)
    {
        ini_set('default_socket_timeout', 60); // 1 minute
        ini_set("soap.wsdl_cache_enabled", "0");
        require_once('fedex-common.php');
        error_log("fedex valide delivery pass");
        $path_to_wsdl = "RateService_v22.wsdl";
        $client = new \SoapClient($path_to_wsdl, array('trace' => true, "connection_timeout" => 60)); 
        try {
            if(setEndpoint('changeEndpoint')){
                $newLocation = $client->__setLocation(setEndpoint('endpoint'));
            }
            $response = $client->getRates($this->initRequest());
            error_log("go");
            if ($response -> HighestSeverity != 'FAILURE' && $response -> HighestSeverity != 'ERROR'){
                $rateReply = $response -> RateReplyDetails;
                //AMOUT
                if($rateReply->RatedShipmentDetails && is_array($rateReply->RatedShipmentDetails)){
			        $amount = number_format($rateReply->RatedShipmentDetails[0]->ShipmentRateDetail->TotalNetCharge->Amount,2,".",",");
                }elseif($rateReply->RatedShipmentDetails && ! is_array($rateReply->RatedShipmentDetails)){
                    $amount = number_format($rateReply->RatedShipmentDetails->ShipmentRateDetail->TotalNetCharge->Amount,2,".",",");
                }
                //DELIVERY DATE
                if(array_key_exists('DeliveryTimestamp',$rateReply)){
        	        $deliveryDate = $rateReply->DeliveryTimestamp;
                }else if(array_key_exists('TransitTime',$rateReply)){
        	        $deliveryDate = $rateReply->TransitTime;
                }else {
        	        $deliveryDate ='';
                }
                $this->resultArray = array('result' => true, 'deliverydate' => $deliveryDate, 'deliveryprice' => $amount);
                writeToLog($client);
                return true;
            }
            else{
                $this->resultArray = array('result' => false);
                writeToLog($client);
                return false;
            }
        }catch (SoapFault $exception) {
            $this->resultArray = array('result' => false);
            writeToLog($client);
            return false;
        }


    }


    public function getPostage(Country $country)
    {
        $resultIsValide = $this->resultArray;
        if ($resultIsValide['result'] != true) {
            throw new DeliveryException(
                "This module cannot be used on the current cart."
            );
        }
        $this->DeliveryDate_fedex = $resultIsValide['deliverydate'];
        return $resultIsValide['deliveryprice'];
    }

    public function getDeliveryDate(){
        return $this->DeliveryDate_fedex;
    }


    //Preparation de la requete
    public function initRequest()
    {
        $this->deliveryAddress = self::getCartDeliveryAddress($this->getRequest());
        $this->poids = $this->getRequest()->getSession()->getSessionCart($this->getDispatcher())->getWeight();


        $request['WebAuthenticationDetail'] = array(
            'ParentCredential' => array(
                'Key' => getProperty('parentkey'),
                'Password' => getProperty('parentpassword')
            ),
            'UserCredential' => array(
                'Key' => getProperty('key'), 
                'Password' => getProperty('password')
            )
        ); 
        $request['ClientDetail'] = array(
            'AccountNumber' => getProperty('shipaccount'), 
            'MeterNumber' => getProperty('meter')
        );
        $request['TransactionDetail'] = array('CustomerTransactionId' => ' *** Rate Request using PHP ***');
        $request['Version'] = array(
            'ServiceId' => 'crs', 
            'Major' => '22', 
            'Intermediate' => '0', 
            'Minor' => '0'
        );
        $request['ReturnTransitAndCommit'] = true;
        $request['RequestedShipment']['DropoffType'] = 'REGULAR_PICKUP'; // valid values REGULAR_PICKUP, REQUEST_COURIER, ...
        $request['RequestedShipment']['ShipTimestamp'] = date('c');
        $request['RequestedShipment']['ServiceType'] = 'INTERNATIONAL_PRIORITY'; // valid values STANDARD_OVERNIGHT, PRIORITY_OVERNIGHT, FEDEX_GROUND, ...
        $request['RequestedShipment']['PackagingType'] = 'FEDEX_BOX'; // valid values FEDEX_BOX, FEDEX_PAK, FEDEX_TUBE, YOUR_PACKAGING, ...
        $request['RequestedShipment']['TotalInsuredValue']=array(
            'Ammount'=> $this->getRequest()->getSession()->getSessionCart($this->getDispatcher())->getTotalAmount(), //PRIX TOTAL PANIER 
            'Currency'=>'USD'
        );
        $request['RequestedShipment']['Shipper'] = addShipper();
        $request['RequestedShipment']['Recipient'] = addRecipient($this->deliveryAddress);
        $request['RequestedShipment']['ShippingChargesPayment'] = addShippingChargesPayment();
        $request['RequestedShipment']['PackageCount'] = '1'; //VOIR AVEC HERBLIN
        $request['RequestedShipment']['RequestedPackageLineItems'] = addPackageLineItem1($this->poids);

        return $request;

    }

    public static function getCartDeliveryAddress(Request $request)
    {
        $address = null;
        $session = $request->getSession();
        if (null !== $customer = $session->getCustomerUser()) {
            if (null !== $session->getOrder()
                && null !== $session->getOrder()->getChoosenDeliveryAddress()
                && null !== $currentDeliveryAddress = AddressQuery::create()->findPk($session->getOrder()->getChoosenDeliveryAddress())
            ) {
                $address = $currentDeliveryAddress;
            } else {
                $address = $customer->getDefaultAddress();
            }
        }
        return $address;
    }


}
