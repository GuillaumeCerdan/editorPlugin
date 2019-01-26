<?php

namespace FedexDelivery\Action;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use FedexDelivery\FedexDelivery;
use Thelia\Core\Event\Order\OrderEvent;
use Thelia\Model\Order;
use Thelia\Core\Event\TheliaEvents;
use Thelia\Core\HttpFoundation\Request;
use Thelia\Model\AddressQuery;
use Thelia\Model\OrderAddressQuery;
use Thelia\Model\OrderPostage;
use FedexDelivery\Model;
use FedexDelivery\Model\FedexShip;
use Thelia\Model\Address;
use Thelia\Model\Map\OrderTableMap;
use Thelia\Model\Map\AddressTableMap;
use Propel\Runtime\Propel;
use Thelia\Controller\Front\BaseFrontController;
use Thelia\Core\HttpFoundation\Response;
use Thelia\Model\OrderQuery;
use Thelia\Model\OrderStatus;
use Thelia\Model\OrderStatusQuery;

class FedexDeliveryAction implements EventSubscriberInterface
{

    protected $module;

    public function __construct()
    {
        $this->module = new FedexDelivery();
    }

    public function createShip(OrderEvent $event)
    {
        $module = new FedexDelivery();
        $order = $event->getOrder();

        if ($order->getDeliveryModuleId() == $this->module->getModuleModel()->getId()) 
        {
            if(true/*$order->isPaid(true)*/)
            {
                error_log("isPaid");
                /*CREATE SHIPMENT*/
                require_once('fedex-common.php');
                ini_set("soap.wsdl_cache_enabled", "0");
                $path_to_wsdl = "ShipService_v21.wsdl";
                define('SHIP_LABEL', 'shipexpresslabel.pdf'); 
                define('SHIP_LABEL_PATH', "fedexlabel/"); 
                $client = new \SoapClient($path_to_wsdl, array('trace' => 1));

                if(setEndpoint('changeEndpoint')){
                    $newLocation = $client->__setLocation(setEndpoint('endpoint'));
                }


                    if(setEndpoint('changeEndpoint')){
                        $newLocation = $client->__setLocation(setEndpoint('endpoint'));
                    }

                    $response = $client->processShipment($this->initRequest($order)); // FedEx web service invocation

                    if ($response->HighestSeverity != 'FAILURE' && $response->HighestSeverity != 'ERROR'){
                        //printSuccess($client, $response);
                        $trackingID = $response->CompletedShipmentDetail->CompletedPackageDetails->TrackingIds->TrackingNumber;
                        $order->setDeliveryRef($trackingID);
                        // Create PNG or PDF label
                        // Set LabelSpecification.ImageType to 'PDF' for generating a PDF label
                        $fp = fopen(SHIP_LABEL_PATH . $trackingID .'_'.SHIP_LABEL, 'wb');   
                        fwrite($fp, ($response->CompletedShipmentDetail->CompletedPackageDetails->Label->Parts->Image));
                        fclose($fp);
               
                        //BDD SAVE
                        $fedex = new FedexShip();
                        $fedex->setClientId($order->getCustomerId());
                        $fedex->setClientDateOrder(date('c'));
                        $fedex->setOrderId($order->getRef());
                        $fedex->setFedexOrderId($trackingID);
                        $fedex->save();     
                    }else{
                        //ERREUR !!!
                        writeToLog($client);
                    }


            }
        }
    }

    public function initRequest(Order $order){

        $con = Propel::getConnection(
            OrderTableMap::DATABASE_NAME
        );
        $con->beginTransaction();
        $deliveryAddress = OrderAddressQuery::create()->findPk($order->getDeliveryOrderAddressId());
        $poids = $order->getWeight();
        $con->commit();
        
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
        $request['TransactionDetail'] = array('CustomerTransactionId' => '*** Express International Shipping Request using PHP ***');
        $request['Version'] = array(
            'ServiceId' => 'ship', 
            'Major' => '21', 
            'Intermediate' => '0', 
            'Minor' => '0'
        );
        $request['RequestedShipment'] = array(
            'ShipTimestamp' => date('c'),
            'DropoffType' => 'REGULAR_PICKUP', // valid values REGULAR_PICKUP, REQUEST_COURIER, DROP_BOX, BUSINESS_SERVICE_CENTER and STATION
            'ServiceType' => 'INTERNATIONAL_PRIORITY', // valid values STANDARD_OVERNIGHT, PRIORITY_OVERNIGHT, FEDEX_GROUND, ...
            'PackagingType' => 'YOUR_PACKAGING', // valid values FEDEX_BOX, FEDEX_PAK, FEDEX_TUBE, YOUR_PACKAGING, ...
            'Shipper' => addShipper(),
            'Recipient' => addRecipient($deliveryAddress),
            'ShippingChargesPayment' => addShippingChargesPayment(),
            'CustomsClearanceDetail' => addCustomClearanceDetail(),                                                                                                       
            'LabelSpecification' => addLabelSpecification(),
            'CustomerSpecifiedDetail' => array(
                'MaskedData'=> getProperty('shipaccount')
            ), 
            'PackageCount' => 1,
                'RequestedPackageLineItems' => array(
                '0' => addPackageLineItem1($poids)
            ),
            'CustomerReferences' => array(
                '0' => array(
                    'CustomerReferenceType' => 'CUSTOMER_REFERENCE', 
                    'Value' => 'TC007_07_PT1_ST01_PK01_SNDUS_RCPCA_POS'
                )
            )
        );
        return $request;
    }

    //THELIA EVENT
    public static function getSubscribedEvents()
    {
        return array(
            TheliaEvents::ORDER_UPDATE_STATUS  => array('createShip', 90)
        );
    }

}