<?php
namespace SingleCartProduct\EventListeners;

use SingleCartProduct\SingleCartProduct;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Thelia\Core\Event\TheliaEvents;
use Thelia\Model\CartItemQuery;
use Thelia\Core\Event\Cart\CartEvent;

class ListenerManager implements EventSubscriberInterface
{ 

    public function addItemCart(CartEvent $event)
    {
        $cart = $event->getCart();

        CartItemQuery::create()
            ->filterByCartId($cart->getId())
            ->delete();
        $cart->clearCartItems();
    }

    public static function getSubscribedEvents()
    {
        return [
            TheliaEvents::CART_ADDITEM => ['addItemCart', 129],
        ];
    }
}