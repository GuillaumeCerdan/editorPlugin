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

namespace FedexDelivery\Action;

use FedexDelivery\FedexDelivery;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Thelia\Core\Event\Order\OrderEvent;
use Thelia\Core\Event\TheliaEvents;
use Thelia\Mailer\MailerFactory;


class SendMailAction implements EventSubscriberInterface
{

    protected $mailer;
    protected $module;

    public function __construct(MailerFactory $mailer)
    {
        $this->mailer = $mailer;
        $this->module = new FedexDelivery();
    }

    public function confirmation(OrderEvent $event)
    {
        error_log("confirmation");
        $order = $event->getOrder();
        if ($order->getDeliveryModuleId() == $this->module->getModuleModel()->getId()){
            if ($order->isPaid()) {
                $customer = $order->getCustomer();

                $trackingRef = $order->getDeliveryRef();
                $trackingUrl = 'https://www.fedex.com/apps/fedextrack/?action=track&trackingnumber=%tracking-number%';
                
                if (!empty($trackingUrl) && !empty($trackingRef)) {
                    $trackingUrl = str_replace('%tracking-number%', $trackingRef, $trackingUrl);
                } else {
                    $trackingUrl = null;
                }
                error_log("track : " . $trackingRef);

                $this->mailer->sendEmailToCustomer(
                    'mail_fedex_delivery_confirmation',
                    $customer,
                    [
                        'customer_id' => $customer->getId(),
                        'order_id' => $order->getId(),
                        'order_ref' => $order->getRef(),
                        'order_date' => $order->getCreatedAt(),
                        'update_date' => $order->getUpdatedAt(),
                        'tracking_url' => $trackingUrl
                    ]
                );
            }
        }
    }

    public function notification(OrderEvent $event)
    {
        error_log("notification");
        $order = $event->getOrder();

        if ($order->getDeliveryModuleId() == $this->module->getModuleModel()->getId()){
            if ($order->isPaid(true)) {

                $customer = $order->getCustomer();

                $trackingRef = $order->getDeliveryRef();
                $trackingUrl = "https://herbelin-shop.getup.agency/fedexlabel/".$trackingRef."_shipexpresslabel.pdf";


                $this->mailer->sendEmailToShopManagers(
                    'mail_fedex_delivery_notification',
                    $customer,
                    [
                        'customer_id' => $customer->getId(),
                        'order_id' => $order->getId(),
                        'order_ref' => $order->getRef(),
                        'order_date' => $order->getCreatedAt(),
                        'update_date' => $order->getUpdatedAt(),
                        'tracking_url' => $trackingUrl
                    ]
                );
        
            }
        }
        $this->confirmation($event);
    }

    
    public static function getSubscribedEvents()
    {
        return array(
            TheliaEvents::ORDER_UPDATE_STATUS => array("notification", 80)
        );
    }

}
