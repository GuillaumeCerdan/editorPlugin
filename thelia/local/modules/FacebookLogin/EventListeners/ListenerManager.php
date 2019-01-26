<?php
namespace FacebookLogin\EventListeners;

use FacebookLogin\FacebookLogin;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Thelia\Core\Event\TheliaEvents;
use Thelia\Core\Event\ActionEvent;


class ListenerManager implements EventSubscriberInterface
{ 

    public function customerLogout(ActionEvent $event)
    {
        FacebookLogin::logout();
    }

    public static function getSubscribedEvents()
    {
        return [
            TheliaEvents::CUSTOMER_LOGOUT => ['customerLogout', 129],
        ];
    }
}