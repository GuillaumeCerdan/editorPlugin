<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * ProjectUrlMatcherrouter_Front.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ProjectUrlMatcherrouter_Front extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/ajax')) {
            // ajax.mini-cart
            if ($pathinfo === '/ajax/mini-cart') {
                return array (  '_controller' => 'Thelia\\Controller\\Front\\DefaultController::noAction',  '_view' => 'includes/mini-cart',  '_route' => 'ajax.mini-cart',);
            }

            // ajax.addCartMessage
            if ($pathinfo === '/ajax/addCartMessage') {
                return array (  '_controller' => 'Thelia\\Controller\\Front\\DefaultController::noAction',  '_view' => 'includes/addedToCart',  '_route' => 'ajax.addCartMessage',);
            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // customer.create.view
            if ($pathinfo === '/register') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_customercreateview;
                }

                return array (  '_controller' => 'Front\\Controller\\CustomerController::viewRegisterAction',  '_route' => 'customer.create.view',);
            }
            not_customercreateview:

            // customer.create.process
            if ($pathinfo === '/register') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_customercreateprocess;
                }

                return array (  '_controller' => 'Front\\Controller\\CustomerController::createAction',  '_view' => 'register',  '_route' => 'customer.create.process',);
            }
            not_customercreateprocess:

        }

        if (0 === strpos($pathinfo, '/login')) {
            // customer.login.view
            if ($pathinfo === '/login') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_customerloginview;
                }

                return array (  '_controller' => 'Front\\Controller\\CustomerController::viewLoginAction',  '_route' => 'customer.login.view',);
            }
            not_customerloginview:

            // customer.login.process
            if ($pathinfo === '/login') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_customerloginprocess;
                }

                return array (  '_controller' => 'Front\\Controller\\CustomerController::loginAction',  '_view' => 'login',  '_route' => 'customer.login.process',);
            }
            not_customerloginprocess:

        }

        if (0 === strpos($pathinfo, '/password')) {
            // customer.password.retrieve.process
            if ($pathinfo === '/password') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_customerpasswordretrieveprocess;
                }

                return array (  '_controller' => 'Front\\Controller\\CustomerController::newPasswordAction',  '_view' => 'password',  '_route' => 'customer.password.retrieve.process',);
            }
            not_customerpasswordretrieveprocess:

            // customer.password.retrieve.sent
            if ($pathinfo === '/password-sent') {
                return array (  '_controller' => 'Front\\Controller\\CustomerController::newPasswordSentAction',  '_view' => 'password',  '_route' => 'customer.password.retrieve.sent',);
            }

        }

        // customer.logout.process
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'Front\\Controller\\CustomerController::logoutAction',  '_route' => 'customer.logout.process',);
        }

        // customer.confirm.token
        if (0 === strpos($pathinfo, '/customer/confirm') && preg_match('#^/customer/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer.confirm.token')), array (  '_controller' => 'Front\\Controller\\CustomerController::confirmCustomerAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/account')) {
                // customer.home
                if ($pathinfo === '/account') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_customerhome;
                    }

                    return array (  '_controller' => 'Thelia\\Controller\\Front\\DefaultController::noAction',  '_view' => 'account',  '_route' => 'customer.home',);
                }
                not_customerhome:

                if (0 === strpos($pathinfo, '/account/update')) {
                    // customer.update.view
                    if ($pathinfo === '/account/update') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_customerupdateview;
                        }

                        return array (  '_controller' => 'Front\\Controller\\CustomerController::viewAction',  '_view' => 'account-update',  '_route' => 'customer.update.view',);
                    }
                    not_customerupdateview:

                    // customer.update.process
                    if ($pathinfo === '/account/update') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_customerupdateprocess;
                        }

                        return array (  '_controller' => 'Front\\Controller\\CustomerController::updateAction',  '_view' => 'account-update',  '_route' => 'customer.update.process',);
                    }
                    not_customerupdateprocess:

                }

                if (0 === strpos($pathinfo, '/account/password')) {
                    // customer.password.change.process
                    if ($pathinfo === '/account/password') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_customerpasswordchangeprocess;
                        }

                        return array (  '_controller' => 'Front\\Controller\\CustomerController::updatePasswordAction',  '_view' => 'account-password',  '_route' => 'customer.password.change.process',);
                    }
                    not_customerpasswordchangeprocess:

                    // customer.password.change.view
                    if ($pathinfo === '/account/password') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_customerpasswordchangeview;
                        }

                        return array (  '_controller' => 'Thelia\\Controller\\Front\\DefaultController::noAction',  '_view' => 'account-password',  '_route' => 'customer.password.change.view',);
                    }
                    not_customerpasswordchangeview:

                }

                if (0 === strpos($pathinfo, '/account/order')) {
                    // customer.order
                    if (preg_match('#^/account/order/(?P<order_id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer.order')), array (  '_controller' => 'Front\\Controller\\OrderController::viewAction',));
                    }

                    if (0 === strpos($pathinfo, '/account/order/pdf')) {
                        // customer.order.pdf.delivery
                        if (0 === strpos($pathinfo, '/account/order/pdf/delivery') && preg_match('#^/account/order/pdf/delivery/(?P<order_id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer.order.pdf.delivery')), array (  '_controller' => 'Front\\Controller\\OrderController::generateDeliveryPdf',));
                        }

                        // customer.order.pdf.invoice
                        if (0 === strpos($pathinfo, '/account/order/pdf/invoice') && preg_match('#^/account/order/pdf/invoice/(?P<order_id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer.order.pdf.invoice')), array (  '_controller' => 'Front\\Controller\\OrderController::generateInvoicePdf',));
                        }

                    }

                }

                // customer.order.product.download
                if (0 === strpos($pathinfo, '/account/download') && preg_match('#^/account/download/(?P<order_product_id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer.order.product.download')), array (  '_controller' => 'Front\\Controller\\OrderController::downloadVirtualProduct',));
                }

            }

            if (0 === strpos($pathinfo, '/address')) {
                if (0 === strpos($pathinfo, '/address/create')) {
                    // address.create.view
                    if ($pathinfo === '/address/create') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_addresscreateview;
                        }

                        return array (  '_controller' => 'Thelia\\Controller\\Front\\DefaultController::noAction',  '_view' => 'address',  '_route' => 'address.create.view',);
                    }
                    not_addresscreateview:

                    // address.create
                    if ($pathinfo === '/address/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_addresscreate;
                        }

                        return array (  '_controller' => 'Front\\Controller\\AddressController::createAction',  '_view' => 'address',  '_route' => 'address.create',);
                    }
                    not_addresscreate:

                }

                if (0 === strpos($pathinfo, '/address/update')) {
                    // address.edit
                    if (preg_match('#^/address/update/(?P<address_id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_addressedit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'address.edit')), array (  '_controller' => 'Front\\Controller\\AddressController::updateViewAction',  '_view' => 'address-update',));
                    }
                    not_addressedit:

                    // address.update
                    if (preg_match('#^/address/update/(?P<address_id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_addressupdate;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'address.update')), array (  '_controller' => 'Front\\Controller\\AddressController::processUpdateAction',  '_view' => 'address-update',));
                    }
                    not_addressupdate:

                }

                // address.delete
                if (0 === strpos($pathinfo, '/address/delete') && preg_match('#^/address/delete/(?P<address_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'address.delete')), array (  '_controller' => 'Front\\Controller\\AddressController::deleteAction',  '_view' => 'account',));
                }

                // address.generateModal
                if (0 === strpos($pathinfo, '/address/modal') && preg_match('#^/address/modal/(?P<address_id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_addressgenerateModal;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'address.generateModal')), array (  '_controller' => 'Front\\Controller\\AddressController::generateModalAction',  '_view' => 'modal-address',));
                }
                not_addressgenerateModal:

                // address.make.default
                if (0 === strpos($pathinfo, '/address/default') && preg_match('#^/address/default/(?P<addressId>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_addressmakedefault;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'address.make.default')), array (  '_controller' => 'Front:Address:makeAddressDefault',));
                }
                not_addressmakedefault:

            }

        }

        if (0 === strpos($pathinfo, '/cart')) {
            // cart.view
            if ($pathinfo === '/cart') {
                return array (  '_controller' => 'Thelia\\Controller\\Front\\DefaultController::noAction',  '_view' => 'cart',  '_route' => 'cart.view',);
            }

            // cart.add.process
            if ($pathinfo === '/cart/add') {
                return array (  '_controller' => 'Front\\Controller\\CartController::addItem',  '_route' => 'cart.add.process',);
            }

            // cart.delete.process
            if (0 === strpos($pathinfo, '/cart/delete') && preg_match('#^/cart/delete/(?P<cart_item>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cart.delete.process')), array (  '_controller' => 'Front\\Controller\\CartController::deleteItem',  '_view' => 'cart',));
            }

            // cart.update.quantity
            if ($pathinfo === '/cart/update') {
                return array (  '_controller' => 'Front\\Controller\\CartController::changeItem',  '_view' => 'cart',  '_route' => 'cart.update.quantity',);
            }

            // cart.update.country
            if ($pathinfo === '/cart/country') {
                return array (  '_controller' => 'Front\\Controller\\CartController::changeCountry',  '_view' => 'cart',  '_route' => 'cart.update.country',);
            }

        }

        if (0 === strpos($pathinfo, '/order')) {
            if (0 === strpos($pathinfo, '/order/delivery')) {
                // order.delivery.process
                if ($pathinfo === '/order/delivery') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_orderdeliveryprocess;
                    }

                    return array (  '_controller' => 'Front\\Controller\\OrderController::deliver',  '_view' => 'order-delivery',  '_route' => 'order.delivery.process',);
                }
                not_orderdeliveryprocess:

                // order.delivery
                if ($pathinfo === '/order/delivery') {
                    return array (  '_controller' => 'Front\\Controller\\OrderController::deliverView',  '_view' => 'order-delivery',  '_route' => 'order.delivery',);
                }

                // admin.delivery.ajax-module-list
                if ($pathinfo === '/order/deliveryModuleList') {
                    return array (  '_controller' => 'Front\\Controller\\OrderController::getDeliveryModuleListAjaxAction',  '_route' => 'admin.delivery.ajax-module-list',);
                }

            }

            if (0 === strpos($pathinfo, '/order/invoice')) {
                // order.invoice.process
                if ($pathinfo === '/order/invoice') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_orderinvoiceprocess;
                    }

                    return array (  '_controller' => 'Front\\Controller\\OrderController::invoice',  '_view' => 'order-invoice',  '_route' => 'order.invoice.process',);
                }
                not_orderinvoiceprocess:

                // order.invoice
                if ($pathinfo === '/order/invoice') {
                    return array (  '_controller' => 'Thelia\\Controller\\Front\\DefaultController::noAction',  '_view' => 'order-invoice',  '_route' => 'order.invoice',);
                }

            }

            if (0 === strpos($pathinfo, '/order/c')) {
                // order.coupon.process
                if ($pathinfo === '/order/coupon') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ordercouponprocess;
                    }

                    return array (  '_controller' => 'Front\\Controller\\CouponController::consumeAction',  '_view' => 'order-invoice',  '_route' => 'order.coupon.process',);
                }
                not_ordercouponprocess:

                // order.coupon.clear
                if ($pathinfo === '/order/clear-coupons') {
                    return array (  '_controller' => 'Front\\Controller\\CouponController::clearAllCouponsAction',  '_view' => 'order-invoice',  '_route' => 'order.coupon.clear',);
                }

            }

            if (0 === strpos($pathinfo, '/order/p')) {
                // order.payment.process
                if ($pathinfo === '/order/pay') {
                    return array (  '_controller' => 'Front\\Controller\\OrderController::pay',  '_route' => 'order.payment.process',);
                }

                // order.placed
                if (0 === strpos($pathinfo, '/order/placed') && preg_match('#^/order/placed/(?P<order_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'order.placed')), array (  '_controller' => 'Front\\Controller\\OrderController::orderPlaced',  '_view' => 'order-placed',));
                }

            }

            // order.failed
            if (0 === strpos($pathinfo, '/order/failed') && preg_match('#^/order/failed/(?P<order_id>[^/]++)/(?P<message>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'order.failed')), array (  '_controller' => 'Front\\Controller\\OrderController::orderFailed',  '_view' => 'order-failed',));
            }

        }

        if (0 === strpos($pathinfo, '/contact')) {
            // contact.send
            if ($pathinfo === '/contact') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_contactsend;
                }

                return array (  '_controller' => 'Front\\Controller\\ContactController::sendAction',  '_view' => 'contact',  '_route' => 'contact.send',);
            }
            not_contactsend:

            // contact.success
            if ($pathinfo === '/contact/success') {
                return array (  '_controller' => 'Thelia\\Controller\\Front\\DefaultController::noAction',  '_view' => 'contact-success',  '_route' => 'contact.success',);
            }

        }

        if (0 === strpos($pathinfo, '/newsletter')) {
            // newsletter.process
            if ($pathinfo === '/newsletter') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_newsletterprocess;
                }

                return array (  '_controller' => 'Front\\Controller\\NewsletterController::subscribeAction',  '_view' => 'newsletter',  '_route' => 'newsletter.process',);
            }
            not_newsletterprocess:

            // newsletter.unsubscribe
            if ($pathinfo === '/newsletter-unsubscribe') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_newsletterunsubscribe;
                }

                return array (  '_controller' => 'Front\\Controller\\NewsletterController::unsubscribeAction',  '_view' => 'newsletter-unsubscribe',  '_route' => 'newsletter.unsubscribe',);
            }
            not_newsletterunsubscribe:

        }

        // sitemap.process
        if ($pathinfo === '/sitemap') {
            return array (  '_controller' => 'Front\\Controller\\SitemapController::generateAction',  '_route' => 'sitemap.process',);
        }

        // feed.process
        if (0 === strpos($pathinfo, '/feed') && preg_match('#^/feed(?:/(?P<context>[^/]++)(?:/(?P<lang>[^/]++)(?:/(?P<id>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'feed.process')), array (  '_controller' => 'Front\\Controller\\FeedController::generateAction',  'context' => 'catalog',  'lang' => '',  'id' => '',));
        }

        // empty
        if ($pathinfo === '/empty') {
            return array (  '_controller' => 'Thelia\\Controller\\Front\\DefaultController::emptyRoute',  '_route' => 'empty',);
        }

        // default
        if (preg_match('#^/(?P<_view>(?!admin|api)[^/]+)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'default')), array (  '_controller' => 'Thelia\\Controller\\Front\\DefaultController::noAction',  '_view' => 'index',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
