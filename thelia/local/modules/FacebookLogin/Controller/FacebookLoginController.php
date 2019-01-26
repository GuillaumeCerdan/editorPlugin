<?php

namespace FacebookLogin\Controller;
use FacebookLogin\FacebookLogin;
use Thelia\Controller\Admin\BaseAdminController;
use Thelia\Core\Event\Cache\CacheEvent;
use Thelia\Core\Event\TheliaEvents;
use Thelia\Core\HttpFoundation\Response;
use Thelia\Core\Event\Customer\CustomerLoginEvent;
use Thelia\Model\CustomerQuery;
use Propel\Runtime\ActiveQuery\Criteria;
use Thelia\Model\Customer;
use Thelia\Model\Address;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\HttpFoundation\Request;
use Thelia\Core\Translation\Translator;


class FacebookLoginController extends BaseAdminController 
{   


    public function loginAction(){

        $request = $this->getRequest();
        $accessToken = $request->request->get('fb_token');


        $fbresp = FacebookLogin::facebookProcess($accessToken);

        if($fbresp == false){
            return JsonResponse::create([
                "success" => false,
            ]);
        }else{
            $this->createOrLoginUser($fbresp);
        }
        
        $json_data = [
            "success" => true,
        ];
        return JsonResponse::create($json_data);
    }  


    public function createOrLoginUser($email){
        $customer = CustomerQuery::create()->findOneByEmail($email);

        if($customer != null){
            $this->dispatch(
                TheliaEvents::CUSTOMER_LOGIN,
                new CustomerLoginEvent($customer)
            );
        }else{

            $customer = new Customer();
            $customer->setTitleId(1);
            $customer->setLangId(1);
            $customer->setFirstname("Arthur");
            $customer->setLastname("Cascales");
            $customer->setEmail($email);
            $customer->setPassword($this->generatePassword());
            $customer->setRef($this->generateRef());

            $address = new Address();

            $address
                ->setLabel(Translator::getInstance()->trans("Main address"))
                ->setTitleId(1)
                ->setFirstname("Arthur")
                ->setLastname("Cascales")
                ->setAddress1("Mon adresse")
                ->setZipcode("83210")
                ->setCity("Cuers")
                ->setCountryId(64)
                ->setIsDefault(1)
                ;

            $customer->addAddress($address);

            $customer->save();

            if($customer != null){
                $this->dispatch(
                    TheliaEvents::CUSTOMER_LOGIN,
                    new CustomerLoginEvent($customer)
                );
            }
        }
    }


    public function generateRef()
    {
        $lastCustomer = CustomerQuery::create()
            ->orderById(Criteria::DESC)
            ->findOne()
        ;

        $id = 1;
        if (null !== $lastCustomer) {
            $id = $lastCustomer->getId() + 1;
        }

        return sprintf('CUS%s', str_pad($id, 12, 0, STR_PAD_LEFT));
    }


    public function generatePassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }

}