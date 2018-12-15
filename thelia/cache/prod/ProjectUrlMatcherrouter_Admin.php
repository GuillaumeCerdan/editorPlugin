<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * ProjectUrlMatcherrouter_Admin.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ProjectUrlMatcherrouter_Admin extends Symfony\Component\Routing\Matcher\UrlMatcher
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

        if (0 === strpos($pathinfo, '/admin')) {
            // admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'Thelia\\Controller\\Admin\\AdminController::indexAction',  'not-logged' => '1',  '_route' => 'admin',);
            }

            // admin.home.view
            if ($pathinfo === '/admin/home') {
                return array (  '_controller' => 'Thelia\\Controller\\Admin\\HomeController::defaultAction',  '_route' => 'admin.home.view',);
            }

            if (0 === strpos($pathinfo, '/admin/lo')) {
                // admin.login
                if ($pathinfo === '/admin/login') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\SessionController::showLoginAction',  'not-logged' => '1',  '_route' => 'admin.login',);
                }

                // admin.lost-password
                if ($pathinfo === '/admin/lost-password') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\SessionController::showLostPasswordAction',  'not-logged' => '1',  '_route' => 'admin.lost-password',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/password-create')) {
                if (0 === strpos($pathinfo, '/admin/password-create-request')) {
                    // admin.password-create
                    if ($pathinfo === '/admin/password-create-request') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\SessionController::passwordCreateRequestAction',  'not-logged' => '1',  '_route' => 'admin.password-create',);
                    }

                    // admin.password-create-success
                    if ($pathinfo === '/admin/password-create-request-success') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\SessionController::passwordCreateRequestSuccessAction',  'not-logged' => '1',  '_route' => 'admin.password-create-success',);
                    }

                }

                // admin.password-create-form
                if (preg_match('#^/admin/password\\-create/(?P<token>.*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.password-create-form')), array (  '_controller' => 'Thelia\\Controller\\Admin\\SessionController::displayCreateFormAction',  'not-logged' => '1',));
                }

                // admin.password-renewed
                if ($pathinfo === '/admin/password-created') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\SessionController::passwordCreatedAction',  'not-logged' => '1',  '_route' => 'admin.password-renewed',);
                }

                // admin.password-renewed-success
                if ($pathinfo === '/admin/password-create-success') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\SessionController::passwordCreatedSuccessAction',  'not-logged' => '1',  '_route' => 'admin.password-renewed-success',);
                }

            }

            // admin.set-email-address
            if ($pathinfo === '/admin/set-email-address') {
                return array (  '_controller' => 'Thelia\\Controller\\Admin\\AdministratorController::setEmailAction',  '_route' => 'admin.set-email-address',);
            }

            // admin.logout
            if ($pathinfo === '/admin/logout') {
                return array (  '_controller' => 'Thelia\\Controller\\Admin\\SessionController::checkLogoutAction',  '_route' => 'admin.logout',);
            }

            if (0 === strpos($pathinfo, '/admin/c')) {
                // admin.checklogin
                if ($pathinfo === '/admin/checklogin') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\SessionController::checkLoginAction',  'not-logged' => '1',  '_route' => 'admin.checklogin',);
                }

                // admin.catalog
                if ($pathinfo === '/admin/catalog') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\CategoryController::defaultAction',  '_route' => 'admin.catalog',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/image/type')) {
                // admin.image.save-ajax
                if (preg_match('#^/admin/image/type/(?P<parentType>.*)/(?P<parentId>\\d+)/save\\-ajax$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.image.save-ajax')), array (  '_controller' => 'Thelia\\Controller\\Admin\\FileController::saveImageAjaxAction',));
                }

                // admin.image.form-ajax
                if (preg_match('#^/admin/image/type/(?P<parentType>.*)/(?P<parentId>\\d+)/form\\-ajax$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.image.form-ajax')), array (  '_controller' => 'Thelia\\Controller\\Admin\\FileController::getImageFormAjaxAction',));
                }

                // admin.image.list-ajax
                if (preg_match('#^/admin/image/type/(?P<parentType>.*)/(?P<parentId>\\d+)/list\\-ajax$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.image.list-ajax')), array (  '_controller' => 'Thelia\\Controller\\Admin\\FileController::getImageListAjaxAction',));
                }

                // admin.image.update-position
                if (preg_match('#^/admin/image/type/(?P<parentType>.*)/(?P<parentId>\\d+)/update\\-position$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.image.update-position')), array (  '_controller' => 'Thelia\\Controller\\Admin\\FileController::updateImagePositionAction',));
                }

                // admin.image.toggle.process
                if (preg_match('#^/admin/image/type/(?P<parentType>.*)/(?P<documentId>\\d+)/toggle$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.image.toggle.process')), array (  '_controller' => 'Thelia\\Controller\\Admin\\FileController::toggleVisibilityImageAction',));
                }

                // admin.image.update.view
                if (preg_match('#^/admin/image/type/(?P<parentType>.*)/(?P<imageId>\\d+)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_adminimageupdateview;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.image.update.view')), array (  '_controller' => 'Thelia\\Controller\\Admin\\FileController::viewImageAction',));
                }
                not_adminimageupdateview:

                // admin.image.update.process
                if (preg_match('#^/admin/image/type/(?P<parentType>.*)/(?P<imageId>\\d+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_adminimageupdateprocess;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.image.update.process')), array (  '_controller' => 'Thelia\\Controller\\Admin\\FileController::updateImageAction',));
                }
                not_adminimageupdateprocess:

                // admin.image.delete
                if (preg_match('#^/admin/image/type/(?P<parentType>.*)/delete/(?P<imageId>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.image.delete')), array (  '_controller' => 'Thelia\\Controller\\Admin\\FileController::deleteImageAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/document/type')) {
                // admin.document.save-ajax
                if (preg_match('#^/admin/document/type/(?P<parentType>.*)/(?P<parentId>\\d+)/save\\-ajax$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.document.save-ajax')), array (  '_controller' => 'Thelia\\Controller\\Admin\\FileController::saveDocumentAjaxAction',));
                }

                // admin.document.form-ajax
                if (preg_match('#^/admin/document/type/(?P<parentType>.*)/(?P<parentId>\\d+)/form\\-ajax$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.document.form-ajax')), array (  '_controller' => 'Thelia\\Controller\\Admin\\FileController::getDocumentFormAjaxAction',));
                }

                // admin.document.list-ajax
                if (preg_match('#^/admin/document/type/(?P<parentType>.*)/(?P<parentId>\\d+)/list\\-ajax$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.document.list-ajax')), array (  '_controller' => 'Thelia\\Controller\\Admin\\FileController::getDocumentListAjaxAction',));
                }

                // admin.document.update-position
                if (preg_match('#^/admin/document/type/(?P<parentType>.*)/(?P<parentId>\\d+)/update\\-position$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.document.update-position')), array (  '_controller' => 'Thelia\\Controller\\Admin\\FileController::updateDocumentPositionAction',));
                }

                // admin.document.toggle.process
                if (preg_match('#^/admin/document/type/(?P<parentType>.*)/(?P<documentId>\\d+)/toggle$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.document.toggle.process')), array (  '_controller' => 'Thelia\\Controller\\Admin\\FileController::toggleVisibilityDocumentAction',));
                }

                // admin.document.update.view
                if (preg_match('#^/admin/document/type/(?P<parentType>.*)/(?P<documentId>\\d+)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admindocumentupdateview;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.document.update.view')), array (  '_controller' => 'Thelia\\Controller\\Admin\\FileController::viewDocumentAction',));
                }
                not_admindocumentupdateview:

                // admin.document.update.process
                if (preg_match('#^/admin/document/type/(?P<parentType>.*)/(?P<documentId>\\d+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admindocumentupdateprocess;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.document.update.process')), array (  '_controller' => 'Thelia\\Controller\\Admin\\FileController::updateDocumentAction',));
                }
                not_admindocumentupdateprocess:

                // admin.document.delete
                if (preg_match('#^/admin/document/type/(?P<parentType>.*)/delete/(?P<documentId>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.document.delete')), array (  '_controller' => 'Thelia\\Controller\\Admin\\FileController::deleteDocumentAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/customer')) {
                // admin.customers
                if ($pathinfo === '/admin/customers') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\CustomerController::defaultAction',  '_route' => 'admin.customers',);
                }

                // admin.customer.update.view
                if ($pathinfo === '/admin/customer/update') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\CustomerController::updateAction',  '_route' => 'admin.customer.update.view',);
                }

                // admin.customer.update.process
                if ($pathinfo === '/admin/customer/save') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\CustomerController::processUpdateAction',  '_route' => 'admin.customer.update.process',);
                }

                // admin.customer.delete
                if ($pathinfo === '/admin/customer/delete') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\CustomerController::deleteAction',  '_route' => 'admin.customer.delete',);
                }

                // admin.customer.create
                if ($pathinfo === '/admin/customer/create') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\CustomerController::createAction',  '_route' => 'admin.customer.create',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/address')) {
                // admin.address.delete
                if ($pathinfo === '/admin/address/delete') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_adminaddressdelete;
                    }

                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\AddressController::deleteAction',  '_route' => 'admin.address.delete',);
                }
                not_adminaddressdelete:

                // admin.address.makeItDefault
                if ($pathinfo === '/admin/address/use') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_adminaddressmakeItDefault;
                    }

                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\AddressController::useAddressAction',  '_route' => 'admin.address.makeItDefault',);
                }
                not_adminaddressmakeItDefault:

                // admin.address.create
                if ($pathinfo === '/admin/address/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_adminaddresscreate;
                    }

                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\AddressController::createAction',  '_route' => 'admin.address.create',);
                }
                not_adminaddresscreate:

                // admin.address.update.view
                if ($pathinfo === '/admin/address/update') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\AddressController::updateAction',  '_route' => 'admin.address.update.view',);
                }

                // admin.address.save
                if ($pathinfo === '/admin/address/save') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\AddressController::processUpdateAction',  '_route' => 'admin.address.save',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/order')) {
                // admin.order.list
                if ($pathinfo === '/admin/orders') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\OrderController::indexAction',  '_route' => 'admin.order.list',);
                }

                if (0 === strpos($pathinfo, '/admin/order/update')) {
                    // admin.order.update.view
                    if (preg_match('#^/admin/order/update/(?P<order_id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.order.update.view')), array (  '_controller' => 'Thelia\\Controller\\Admin\\OrderController::viewAction',));
                    }

                    // admin.order.list.update.status
                    if ($pathinfo === '/admin/order/update/status') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\OrderController::updateStatus',  '_route' => 'admin.order.list.update.status',);
                    }

                    // admin.order.update.status
                    if (preg_match('#^/admin/order/update/(?P<order_id>[^/]++)/status$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.order.update.status')), array (  '_controller' => 'Thelia\\Controller\\Admin\\OrderController::updateStatus',));
                    }

                    // admin.order.update.deliveryRef
                    if (preg_match('#^/admin/order/update/(?P<order_id>[^/]++)/delivery\\-ref$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.order.update.deliveryRef')), array (  '_controller' => 'Thelia\\Controller\\Admin\\OrderController::updateDeliveryRef',));
                    }

                    // admin.order.update.address
                    if (preg_match('#^/admin/order/update/(?P<order_id>[^/]++)/address$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.order.update.address')), array (  '_controller' => 'Thelia\\Controller\\Admin\\OrderController::updateAddress',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/order/pdf')) {
                    // admin.order.pdf.invoice
                    if (0 === strpos($pathinfo, '/admin/order/pdf/invoice') && preg_match('#^/admin/order/pdf/invoice/(?P<order_id>\\d+)(?:/(?P<browser>[0|1]))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.order.pdf.invoice')), array (  '_controller' => 'Thelia\\Controller\\Admin\\OrderController::generateInvoicePdf',  'browser' => '0',));
                    }

                    // admin.order.pdf.delivery
                    if (0 === strpos($pathinfo, '/admin/order/pdf/delivery') && preg_match('#^/admin/order/pdf/delivery/(?P<order_id>\\d+)(?:/(?P<browser>[0|1]))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.order.pdf.delivery')), array (  '_controller' => 'Thelia\\Controller\\Admin\\OrderController::generateDeliveryPdf',  'browser' => '0',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/c')) {
                if (0 === strpos($pathinfo, '/admin/configuration/order-status')) {
                    // admin.order-status.default
                    if ($pathinfo === '/admin/configuration/order-status') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\OrderStatusController::defaultAction',  '_route' => 'admin.order-status.default',);
                    }

                    // admin.order-status.create
                    if ($pathinfo === '/admin/configuration/order-status/create') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\OrderStatusController::createAction',  '_route' => 'admin.order-status.create',);
                    }

                    // admin.order-status.update
                    if (0 === strpos($pathinfo, '/admin/configuration/order-status/update') && preg_match('#^/admin/configuration/order\\-status/update/(?P<order_status_id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.order-status.update')), array (  '_controller' => 'Thelia\\Controller\\Admin\\OrderStatusController::updateAction',));
                    }

                    // admin.order-status.save
                    if (0 === strpos($pathinfo, '/admin/configuration/order-status/save') && preg_match('#^/admin/configuration/order\\-status/save/(?P<order_status_id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.order-status.save')), array (  '_controller' => 'Thelia\\Controller\\Admin\\OrderStatusController::processUpdateAction',));
                    }

                    // admin.order-status.delete
                    if ($pathinfo === '/admin/configuration/order-status/delete') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\OrderStatusController::deleteAction',  '_route' => 'admin.order-status.delete',);
                    }

                    // admin.order-status.update-position
                    if ($pathinfo === '/admin/configuration/order-status/update-position') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\OrderStatusController::updatePositionAction',  '_route' => 'admin.order-status.update-position',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/categor')) {
                    if (0 === strpos($pathinfo, '/admin/categories')) {
                        // admin.categories.default
                        if ($pathinfo === '/admin/categories') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\CategoryController::defaultAction',  '_route' => 'admin.categories.default',);
                        }

                        // admin.categories.create
                        if ($pathinfo === '/admin/categories/create') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\CategoryController::createAction',  '_route' => 'admin.categories.create',);
                        }

                        // admin.categories.update
                        if ($pathinfo === '/admin/categories/update') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\CategoryController::updateAction',  '_route' => 'admin.categories.update',);
                        }

                        if (0 === strpos($pathinfo, '/admin/categories/s')) {
                            // admin.categories.save
                            if ($pathinfo === '/admin/categories/save') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\CategoryController::processUpdateAction',  '_route' => 'admin.categories.save',);
                            }

                            // admin.categories.seo.save
                            if ($pathinfo === '/admin/categories/seo/save') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\CategoryController::processUpdateSeoAction',  '_route' => 'admin.categories.seo.save',);
                            }

                        }

                        // admin.categories.set-default
                        if ($pathinfo === '/admin/categories/toggle-online') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\CategoryController::setToggleVisibilityAction',  '_route' => 'admin.categories.set-default',);
                        }

                        // admin.categories.delete
                        if ($pathinfo === '/admin/categories/delete') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\CategoryController::deleteAction',  '_route' => 'admin.categories.delete',);
                        }

                        // admin.categories.update-position
                        if ($pathinfo === '/admin/categories/update-position') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\CategoryController::updatePositionAction',  '_route' => 'admin.categories.update-position',);
                        }

                        if (0 === strpos($pathinfo, '/admin/categories/related-')) {
                            // admin.categories.related-content.add
                            if ($pathinfo === '/admin/categories/related-content/add') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\CategoryController::addRelatedContentAction',  '_route' => 'admin.categories.related-content.add',);
                            }

                            // admin.categories.related-picture.add
                            if ($pathinfo === '/admin/categories/related-picture/add') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\CategoryController::addRelatedPictureAction',  '_route' => 'admin.categories.related-picture.add',);
                            }

                            // admin.categories.related-content.delete
                            if ($pathinfo === '/admin/categories/related-content/delete') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\CategoryController::deleteRelatedContentAction',  '_route' => 'admin.categories.related-content.delete',);
                            }

                        }

                    }

                    // admin.category.available-related-content
                    if (0 === strpos($pathinfo, '/admin/category') && preg_match('#^/admin/category/(?P<categoryId>[^/]++)/available\\-related\\-content/(?P<folderId>[^/\\.]++)\\.(?P<_format>xml|json)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admincategoryavailablerelatedcontent;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.category.available-related-content')), array (  '_controller' => 'Thelia\\Controller\\Admin\\CategoryController::getAvailableRelatedContentAction',));
                    }
                    not_admincategoryavailablerelatedcontent:

                }

            }

            if (0 === strpos($pathinfo, '/admin/product')) {
                if (0 === strpos($pathinfo, '/admin/products')) {
                    // admin.products.default
                    if ($pathinfo === '/admin/products') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::defaultAction',  '_route' => 'admin.products.default',);
                    }

                    if (0 === strpos($pathinfo, '/admin/products/c')) {
                        // admin.products.create
                        if ($pathinfo === '/admin/products/create') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::createAction',  '_route' => 'admin.products.create',);
                        }

                        // admin.products.clone
                        if ($pathinfo === '/admin/products/clone') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::cloneAction',  '_route' => 'admin.products.clone',);
                        }

                    }

                    // admin.products.update
                    if ($pathinfo === '/admin/products/update') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::updateAction',  '_route' => 'admin.products.update',);
                    }

                    if (0 === strpos($pathinfo, '/admin/products/s')) {
                        // admin.products.save
                        if ($pathinfo === '/admin/products/save') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::processUpdateAction',  '_route' => 'admin.products.save',);
                        }

                        // admin.products.seo.save
                        if ($pathinfo === '/admin/products/seo/save') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::processUpdateSeoAction',  '_route' => 'admin.products.seo.save',);
                        }

                    }

                    // admin.products.set-default
                    if ($pathinfo === '/admin/products/toggle-online') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::setToggleVisibilityAction',  '_route' => 'admin.products.set-default',);
                    }

                    // admin.products.delete
                    if ($pathinfo === '/admin/products/delete') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::deleteAction',  '_route' => 'admin.products.delete',);
                    }

                    // admin.products.update-position
                    if ($pathinfo === '/admin/products/update-position') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::updatePositionAction',  '_route' => 'admin.products.update-position',);
                    }

                    // admin.products.related.tab
                    if ($pathinfo === '/admin/products/related/tab') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::loadRelatedAjaxTabAction',  '_route' => 'admin.products.related.tab',);
                    }

                    if (0 === strpos($pathinfo, '/admin/products/c')) {
                        if (0 === strpos($pathinfo, '/admin/products/category')) {
                            // admin.products.additional-category.add
                            if ($pathinfo === '/admin/products/category/add') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::addAdditionalCategoryAction',  '_route' => 'admin.products.additional-category.add',);
                            }

                            // admin.products.additional-category.delete
                            if ($pathinfo === '/admin/products/category/delete') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::deleteAdditionalCategoryAction',  '_route' => 'admin.products.additional-category.delete',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/products/content')) {
                            // admin.products.related-content.add
                            if ($pathinfo === '/admin/products/content/add') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::addRelatedContentAction',  '_route' => 'admin.products.related-content.add',);
                            }

                            // admin.products.related-content.delete
                            if ($pathinfo === '/admin/products/content/delete') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::deleteRelatedContentAction',  '_route' => 'admin.products.related-content.delete',);
                            }

                        }

                    }

                }

                // admin.product.available-related-content
                if (preg_match('#^/admin/product/(?P<productId>[^/]++)/available\\-content/(?P<folderId>[^/\\.]++)\\.(?P<_format>xml|json)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_adminproductavailablerelatedcontent;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.product.available-related-content')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::getAvailableRelatedContentAction',));
                }
                not_adminproductavailablerelatedcontent:

                // admin.product.update-content-position
                if ($pathinfo === '/admin/product/update-content-position') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::updateContentPositionAction',  '_route' => 'admin.product.update-content-position',);
                }

                if (0 === strpos($pathinfo, '/admin/product/calculate-')) {
                    // admin.product.calculate-price
                    if ($pathinfo === '/admin/product/calculate-price') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::priceCalculator',  '_route' => 'admin.product.calculate-price',);
                    }

                    // admin.product.calculate-raw-price
                    if ($pathinfo === '/admin/product/calculate-raw-price') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::calculatePrice',  '_route' => 'admin.product.calculate-raw-price',);
                    }

                }

                // admin.product.load-converted-prices
                if ($pathinfo === '/admin/product/load-converted-prices') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::loadConvertedPrices',  '_route' => 'admin.product.load-converted-prices',);
                }

                if (0 === strpos($pathinfo, '/admin/products/accessory')) {
                    // admin.products.accessories.add
                    if ($pathinfo === '/admin/products/accessory/add') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::addAccessoryAction',  '_route' => 'admin.products.accessories.add',);
                    }

                    // admin.products.accessories.delete
                    if ($pathinfo === '/admin/products/accessory/delete') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::deleteAccessoryAction',  '_route' => 'admin.products.accessories.delete',);
                    }

                }

                // admin.product.accessories-content
                if (preg_match('#^/admin/product/(?P<productId>[^/]++)/available\\-accessories/(?P<categoryId>[^/\\.]++)\\.(?P<_format>xml|json)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_adminproductaccessoriescontent;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.product.accessories-content')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::getAvailableAccessoriesAction',));
                }
                not_adminproductaccessoriescontent:

                // admin.product.update-accessory-position
                if ($pathinfo === '/admin/product/update-accessory-position') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::updateAccessoryPositionAction',  '_route' => 'admin.product.update-accessory-position',);
                }

                // admin.products.attributes.tab
                if ($pathinfo === '/admin/products/attributes/tab') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::loadAttributesAjaxTabAction',  '_route' => 'admin.products.attributes.tab',);
                }

                // admin.products.set-product-template
                if (preg_match('#^/admin/product/(?P<productId>[^/]++)/set\\-product\\-template$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.products.set-product-template')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::setProductTemplateAction',));
                }

                // admin.products.update-attributes-and-features
                if (preg_match('#^/admin/product/(?P<productId>[^/]++)/update\\-attributes\\-and\\-features$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.products.update-attributes-and-features')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::updateAttributesAndFeaturesAction',));
                }

                // admin.product.attribute-values
                if (preg_match('#^/admin/product/(?P<productId>[^/]++)/attribute\\-values/(?P<attributeId>[^/\\.]++)\\.(?P<_format>xml|json)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_adminproductattributevalues;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.product.attribute-values')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::getAttributeValuesAction',));
                }
                not_adminproductattributevalues:

                // admin.product.add-attribute-value-to-combination
                if (preg_match('#^/admin/product/(?P<productId>[^/]++)/add\\-attribute\\-value\\-to\\-combination/(?P<attributeAvId>[^/]++)/(?P<combination>[^/\\.]++)\\.(?P<_format>xml|json)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_adminproductaddattributevaluetocombination;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.product.add-attribute-value-to-combination')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::addAttributeValueToCombinationAction',));
                }
                not_adminproductaddattributevaluetocombination:

                if (0 === strpos($pathinfo, '/admin/product/combination')) {
                    // admin.product.combination.add
                    if ($pathinfo === '/admin/product/combination/add') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::addProductSaleElementAction',  '_route' => 'admin.product.combination.add',);
                    }

                    // admin.product.combination.delete
                    if ($pathinfo === '/admin/product/combination/delete') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::deleteProductSaleElementAction',  '_route' => 'admin.product.combination.delete',);
                    }

                    // admin.product.combination.update
                    if ($pathinfo === '/admin/product/combinations/update') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::updateProductSaleElementsAction',  '_route' => 'admin.product.combination.update',);
                    }

                    // admin.product.combination.build
                    if ($pathinfo === '/admin/product/combination/build') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::buildCombinationsAction',  '_route' => 'admin.product.combination.build',);
                    }

                }

                // admin.product.combination.defaut-price.update
                if ($pathinfo === '/admin/product/default-price/update') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::updateProductDefaultSaleElementAction',  '_route' => 'admin.product.combination.defaut-price.update',);
                }

                if (0 === strpos($pathinfo, '/admin/product_sale_elements')) {
                    // admin.product_sale_elements.document_image_assoc
                    if (preg_match('#^/admin/product_sale_elements/(?P<pseId>\\d+)/(?P<type>.+)/(?P<typeId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_adminproduct_sale_elementsdocument_image_assoc;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.product_sale_elements.document_image_assoc')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::productSaleElementsProductImageDocumentAssociation',));
                    }
                    not_adminproduct_sale_elementsdocument_image_assoc:

                    // admin.product_sale_elements.document_image_assoc.get_assoc
                    if (0 === strpos($pathinfo, '/admin/product_sale_elements/ajax') && preg_match('#^/admin/product_sale_elements/ajax/(?P<type>.+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_adminproduct_sale_elementsdocument_image_assocget_assoc;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.product_sale_elements.document_image_assoc.get_assoc')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::getAjaxProductSaleElementsImagesDocuments',));
                    }
                    not_adminproduct_sale_elementsdocument_image_assocget_assoc:

                }

                // admin.product.virtual_documents
                if (0 === strpos($pathinfo, '/admin/product/virtual-documents') && preg_match('#^/admin/product/virtual\\-documents/(?P<productId>\\d+)/(?P<pseId>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_adminproductvirtual_documents;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.product.virtual_documents')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ProductController::getVirtualDocumentListAjaxAction',));
                }
                not_adminproductvirtual_documents:

            }

            if (0 === strpos($pathinfo, '/admin/folders')) {
                // admin.folders.default
                if ($pathinfo === '/admin/folders') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\FolderController::defaultAction',  '_route' => 'admin.folders.default',);
                }

                // admin.folders.create
                if ($pathinfo === '/admin/folders/create') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\FolderController::createAction',  '_route' => 'admin.folders.create',);
                }

                // admin.folders.update
                if (0 === strpos($pathinfo, '/admin/folders/update') && preg_match('#^/admin/folders/update/(?P<folder_id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.folders.update')), array (  '_controller' => 'Thelia\\Controller\\Admin\\FolderController::updateAction',));
                }

                // admin.folders.toggle-online
                if ($pathinfo === '/admin/folders/toggle-online') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\FolderController::setToggleVisibilityAction',  '_route' => 'admin.folders.toggle-online',);
                }

                if (0 === strpos($pathinfo, '/admin/folders/s')) {
                    // admin.folders.save
                    if ($pathinfo === '/admin/folders/save') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\FolderController::processUpdateAction',  '_route' => 'admin.folders.save',);
                    }

                    // admin.folders.seo.save
                    if ($pathinfo === '/admin/folders/seo/save') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\FolderController::processUpdateSeoAction',  '_route' => 'admin.folders.seo.save',);
                    }

                }

                // admin.folders.delete
                if ($pathinfo === '/admin/folders/delete') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\FolderController::deleteAction',  '_route' => 'admin.folders.delete',);
                }

                // admin.folders.update-position
                if ($pathinfo === '/admin/folders/update-position') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\FolderController::updatePositionAction',  '_route' => 'admin.folders.update-position',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/co')) {
                if (0 === strpos($pathinfo, '/admin/content')) {
                    // admin.content.create
                    if ($pathinfo === '/admin/content/create') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ContentController::createAction',  '_route' => 'admin.content.create',);
                    }

                    // admin.content.update
                    if (0 === strpos($pathinfo, '/admin/content/update') && preg_match('#^/admin/content/update/(?P<content_id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.content.update')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ContentController::updateAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/content/s')) {
                        // admin.content.save
                        if ($pathinfo === '/admin/content/save') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\ContentController::processUpdateAction',  '_route' => 'admin.content.save',);
                        }

                        // admin.content.seo.save
                        if ($pathinfo === '/admin/content/seo/save') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\ContentController::processUpdateSeoAction',  '_route' => 'admin.content.seo.save',);
                        }

                    }

                    // admin.content.update-position
                    if ($pathinfo === '/admin/content/update-position') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ContentController::updatePositionAction',  '_route' => 'admin.content.update-position',);
                    }

                    // admin.content.toggle-online
                    if ($pathinfo === '/admin/content/toggle-online') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ContentController::setToggleVisibilityAction',  '_route' => 'admin.content.toggle-online',);
                    }

                    // admin.content.delete
                    if ($pathinfo === '/admin/content/delete') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ContentController::deleteAction',  '_route' => 'admin.content.delete',);
                    }

                    if (0 === strpos($pathinfo, '/admin/content/folder')) {
                        // admin.content.additional-folder.add
                        if ($pathinfo === '/admin/content/folder/add') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\ContentController::addAdditionalFolderAction',  '_route' => 'admin.content.additional-folder.add',);
                        }

                        // admin.content.additional-folder.delete
                        if ($pathinfo === '/admin/content/folder/delete') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\ContentController::removeAdditionalFolderAction',  '_route' => 'admin.content.additional-folder.delete',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/coupon')) {
                    // admin.coupon.list
                    if ($pathinfo === '/admin/coupon') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\CouponController::browseAction',  '_route' => 'admin.coupon.list',);
                    }

                    // admin.coupon.create
                    if ($pathinfo === '/admin/coupon/create') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\CouponController::createAction',  '_route' => 'admin.coupon.create',);
                    }

                    // admin.coupon.update
                    if (0 === strpos($pathinfo, '/admin/coupon/update') && preg_match('#^/admin/coupon/update/(?P<couponId>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.coupon.update')), array (  '_controller' => 'Thelia\\Controller\\Admin\\CouponController::updateAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/coupon/d')) {
                        // admin.coupon.delete
                        if ($pathinfo === '/admin/coupon/delete') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\CouponController::deleteAction',  '_route' => 'admin.coupon.delete',);
                        }

                        if (0 === strpos($pathinfo, '/admin/coupon/draw')) {
                            // admin.coupon.draw.inputs.ajax
                            if (0 === strpos($pathinfo, '/admin/coupon/draw/inputs') && preg_match('#^/admin/coupon/draw/inputs/(?P<couponServiceId>.*)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.coupon.draw.inputs.ajax')), array (  '_controller' => 'Thelia\\Controller\\Admin\\CouponController::getBackOfficeInputsAjaxAction',));
                            }

                            // admin.coupon.draw.condition.summaries.ajax
                            if (0 === strpos($pathinfo, '/admin/coupon/draw/conditionsSummaries') && preg_match('#^/admin/coupon/draw/conditionsSummaries/(?P<couponId>\\d+)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.coupon.draw.condition.summaries.ajax')), array (  '_controller' => 'Thelia\\Controller\\Admin\\CouponController::getBackOfficeConditionSummariesAjaxAction',));
                            }

                            // admin.coupon.draw.condition.read.inputs.ajax
                            if (0 === strpos($pathinfo, '/admin/coupon/draw/read/conditionInputs') && preg_match('#^/admin/coupon/draw/read/conditionInputs/(?P<conditionId>.*)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.coupon.draw.condition.read.inputs.ajax')), array (  '_controller' => 'Thelia\\Controller\\Admin\\CouponController::getConditionEmptyInputAjaxAction',));
                            }

                            // admin.coupon.draw.condition.update.inputs.ajax
                            if (0 === strpos($pathinfo, '/admin/coupon/draw/update/conditionInputs') && preg_match('#^/admin/coupon/draw/update/conditionInputs/(?P<couponId>\\d+)/(?P<conditionIndex>\\d+)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.coupon.draw.condition.update.inputs.ajax')), array (  '_controller' => 'Thelia\\Controller\\Admin\\CouponController::getConditionToUpdateInputAjaxAction',));
                            }

                        }

                    }

                    // admin.coupon.condition.save
                    if (preg_match('#^/admin/coupon/(?P<couponId>\\d+)/condition/save$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admincouponconditionsave;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.coupon.condition.save')), array (  '_controller' => 'Thelia\\Controller\\Admin\\CouponController::saveConditionsAction',));
                    }
                    not_admincouponconditionsave:

                    // admin.coupon.condition.delete
                    if (preg_match('#^/admin/coupon/(?P<couponId>\\d+)/condition/delete/(?P<conditionIndex>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.coupon.condition.delete')), array (  '_controller' => 'Thelia\\Controller\\Admin\\CouponController::deleteConditionsAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/configuration')) {
                    // admin.configuration.index
                    if ($pathinfo === '/admin/configuration') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ConfigurationController::indexAction',  '_route' => 'admin.configuration.index',);
                    }

                    if (0 === strpos($pathinfo, '/admin/configuration/variables')) {
                        // admin.configuration.variables.default
                        if ($pathinfo === '/admin/configuration/variables') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\ConfigController::defaultAction',  '_route' => 'admin.configuration.variables.default',);
                        }

                        // admin.configuration.variables.update-values
                        if ($pathinfo === '/admin/configuration/variables/update-values') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\ConfigController::changeValuesAction',  '_route' => 'admin.configuration.variables.update-values',);
                        }

                        // admin.configuration.variables.create
                        if ($pathinfo === '/admin/configuration/variables/create') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\ConfigController::createAction',  '_route' => 'admin.configuration.variables.create',);
                        }

                        // admin.configuration.variables.update
                        if ($pathinfo === '/admin/configuration/variables/update') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\ConfigController::updateAction',  '_route' => 'admin.configuration.variables.update',);
                        }

                        // admin.configuration.variables.save
                        if ($pathinfo === '/admin/configuration/variables/save') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\ConfigController::processUpdateAction',  '_route' => 'admin.configuration.variables.save',);
                        }

                        // admin.configuration.variables.delete
                        if ($pathinfo === '/admin/configuration/variables/delete') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\ConfigController::deleteAction',  '_route' => 'admin.configuration.variables.delete',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/configuration/s')) {
                        if (0 === strpos($pathinfo, '/admin/configuration/store')) {
                            // admin.configuration.store.default
                            if ($pathinfo === '/admin/configuration/store') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\ConfigStoreController::defaultAction',  '_route' => 'admin.configuration.store.default',);
                            }

                            // admin.configuration.store.save
                            if ($pathinfo === '/admin/configuration/store/save') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\ConfigStoreController::saveAction',  '_route' => 'admin.configuration.store.save',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/configuration/system-logs')) {
                            // admin.configuration.system-logs.default
                            if ($pathinfo === '/admin/configuration/system-logs') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\SystemLogController::defaultAction',  '_route' => 'admin.configuration.system-logs.default',);
                            }

                            // admin.configuration.system-logs.save
                            if ($pathinfo === '/admin/configuration/system-logs/save') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\SystemLogController::saveAction',  '_route' => 'admin.configuration.system-logs.save',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/configuration/messages')) {
                        // admin.configuration.messages.default
                        if ($pathinfo === '/admin/configuration/messages') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\MessageController::defaultAction',  '_route' => 'admin.configuration.messages.default',);
                        }

                        // admin.configuration.messages.create
                        if ($pathinfo === '/admin/configuration/messages/create') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\MessageController::createAction',  '_route' => 'admin.configuration.messages.create',);
                        }

                        // admin.configuration.messages.update
                        if ($pathinfo === '/admin/configuration/messages/update') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\MessageController::updateAction',  '_route' => 'admin.configuration.messages.update',);
                        }

                        // admin.configuration.messages.save
                        if ($pathinfo === '/admin/configuration/messages/save') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\MessageController::processUpdateAction',  '_route' => 'admin.configuration.messages.save',);
                        }

                        // admin.configuration.messages.delete
                        if ($pathinfo === '/admin/configuration/messages/delete') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\MessageController::deleteAction',  '_route' => 'admin.configuration.messages.delete',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/configuration/currencies')) {
                        // admin.configuration.currencies.default
                        if ($pathinfo === '/admin/configuration/currencies') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\CurrencyController::defaultAction',  '_route' => 'admin.configuration.currencies.default',);
                        }

                        // admin.configuration.currencies.create
                        if ($pathinfo === '/admin/configuration/currencies/create') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\CurrencyController::createAction',  '_route' => 'admin.configuration.currencies.create',);
                        }

                        // admin.configuration.currencies.update
                        if ($pathinfo === '/admin/configuration/currencies/update') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\CurrencyController::updateAction',  '_route' => 'admin.configuration.currencies.update',);
                        }

                        if (0 === strpos($pathinfo, '/admin/configuration/currencies/s')) {
                            // admin.configuration.currencies.save
                            if ($pathinfo === '/admin/configuration/currencies/save') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\CurrencyController::processUpdateAction',  '_route' => 'admin.configuration.currencies.save',);
                            }

                            if (0 === strpos($pathinfo, '/admin/configuration/currencies/set-')) {
                                // admin.configuration.currencies.set-default
                                if ($pathinfo === '/admin/configuration/currencies/set-default') {
                                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\CurrencyController::setDefaultAction',  '_route' => 'admin.configuration.currencies.set-default',);
                                }

                                // admin.configuration.currencies.set-visible
                                if ($pathinfo === '/admin/configuration/currencies/set-visible') {
                                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\CurrencyController::setVisibleAction',  '_route' => 'admin.configuration.currencies.set-visible',);
                                }

                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/configuration/currencies/update-')) {
                            // admin.configuration.currencies.update-position
                            if ($pathinfo === '/admin/configuration/currencies/update-position') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\CurrencyController::updatePositionAction',  '_route' => 'admin.configuration.currencies.update-position',);
                            }

                            // admin.configuration.currencies.update-rates
                            if ($pathinfo === '/admin/configuration/currencies/update-rates') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\CurrencyController::updateRatesAction',  '_route' => 'admin.configuration.currencies.update-rates',);
                            }

                        }

                        // admin.configuration.currencies.delete
                        if ($pathinfo === '/admin/configuration/currencies/delete') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\CurrencyController::deleteAction',  '_route' => 'admin.configuration.currencies.delete',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/configuration/templates')) {
                        // admin.configuration.templates.default
                        if ($pathinfo === '/admin/configuration/templates') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\TemplateController::defaultAction',  '_route' => 'admin.configuration.templates.default',);
                        }

                        // admin.configuration.templates.create
                        if ($pathinfo === '/admin/configuration/templates/create') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\TemplateController::createAction',  '_route' => 'admin.configuration.templates.create',);
                        }

                        // admin.configuration.templates.update
                        if ($pathinfo === '/admin/configuration/templates/update') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\TemplateController::updateAction',  '_route' => 'admin.configuration.templates.update',);
                        }

                        // admin.configuration.templates.save
                        if ($pathinfo === '/admin/configuration/templates/save') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\TemplateController::processUpdateAction',  '_route' => 'admin.configuration.templates.save',);
                        }

                        if (0 === strpos($pathinfo, '/admin/configuration/templates/d')) {
                            // admin.configuration.templates.delete
                            if ($pathinfo === '/admin/configuration/templates/delete') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\TemplateController::deleteAction',  '_route' => 'admin.configuration.templates.delete',);
                            }

                            // admin.configuration.templates.duplicate
                            if ($pathinfo === '/admin/configuration/templates/duplicate') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\TemplateController::duplicateAction',  '_route' => 'admin.configuration.templates.duplicate',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/configuration/templates/features')) {
                            // admin.configuration.templates.features.list
                            if ($pathinfo === '/admin/configuration/templates/features/list') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\TemplateController::getAjaxFeaturesAction',  '_route' => 'admin.configuration.templates.features.list',);
                            }

                            // admin.configuration.templates.features.add
                            if ($pathinfo === '/admin/configuration/templates/features/add') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\TemplateController::addFeatureAction',  '_route' => 'admin.configuration.templates.features.add',);
                            }

                            // admin.configuration.templates.features.delete
                            if ($pathinfo === '/admin/configuration/templates/features/delete') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\TemplateController::deleteFeatureAction',  '_route' => 'admin.configuration.templates.features.delete',);
                            }

                        }

                    }

                }

            }

            // admin.configuration.templates.attributes.update-feature-position
            if ($pathinfo === '/admin/template/update-feature-position') {
                return array (  '_controller' => 'Thelia\\Controller\\Admin\\TemplateController::updateFeaturePositionAction',  '_route' => 'admin.configuration.templates.attributes.update-feature-position',);
            }

            if (0 === strpos($pathinfo, '/admin/configuration/templates/attributes')) {
                // admin.configuration.templates.attributes.list
                if ($pathinfo === '/admin/configuration/templates/attributes/list') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\TemplateController::getAjaxAttributesAction',  '_route' => 'admin.configuration.templates.attributes.list',);
                }

                // admin.configuration.templates.attributes.add
                if ($pathinfo === '/admin/configuration/templates/attributes/add') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\TemplateController::addAttributeAction',  '_route' => 'admin.configuration.templates.attributes.add',);
                }

                // admin.configuration.templates.attributes.delete
                if ($pathinfo === '/admin/configuration/templates/attributes/delete') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\TemplateController::deleteAttributeAction',  '_route' => 'admin.configuration.templates.attributes.delete',);
                }

            }

            // admin.configuration.templates.attributes.update-attribute-position
            if ($pathinfo === '/admin/template/update-attribute-position') {
                return array (  '_controller' => 'Thelia\\Controller\\Admin\\TemplateController::updateAttributePositionAction',  '_route' => 'admin.configuration.templates.attributes.update-attribute-position',);
            }

            if (0 === strpos($pathinfo, '/admin/configuration')) {
                if (0 === strpos($pathinfo, '/admin/configuration/attributes')) {
                    // admin.configuration.attributes.default
                    if ($pathinfo === '/admin/configuration/attributes') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\AttributeController::defaultAction',  '_route' => 'admin.configuration.attributes.default',);
                    }

                    // admin.configuration.attributes.create
                    if ($pathinfo === '/admin/configuration/attributes/create') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\AttributeController::createAction',  '_route' => 'admin.configuration.attributes.create',);
                    }

                    // admin.configuration.attributes.update
                    if ($pathinfo === '/admin/configuration/attributes/update') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\AttributeController::updateAction',  '_route' => 'admin.configuration.attributes.update',);
                    }

                    // admin.configuration.attributes.save
                    if ($pathinfo === '/admin/configuration/attributes/save') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\AttributeController::processUpdateAction',  '_route' => 'admin.configuration.attributes.save',);
                    }

                    // admin.configuration.attributes.delete
                    if ($pathinfo === '/admin/configuration/attributes/delete') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\AttributeController::deleteAction',  '_route' => 'admin.configuration.attributes.delete',);
                    }

                    // admin.configuration.attributes.update-position
                    if ($pathinfo === '/admin/configuration/attributes/update-position') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\AttributeController::updatePositionAction',  '_route' => 'admin.configuration.attributes.update-position',);
                    }

                    // admin.configuration.attributes.rem-from-all
                    if ($pathinfo === '/admin/configuration/attributes/remove-from-all-templates') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\AttributeController::removeFromAllTemplates',  '_route' => 'admin.configuration.attributes.rem-from-all',);
                    }

                    // admin.configuration.attributes.add-to-all
                    if ($pathinfo === '/admin/configuration/attributes/add-to-all-templates') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\AttributeController::addToAllTemplates',  '_route' => 'admin.configuration.attributes.add-to-all',);
                    }

                    if (0 === strpos($pathinfo, '/admin/configuration/attributes-av')) {
                        // admin.configuration.attributes-av.create
                        if ($pathinfo === '/admin/configuration/attributes-av/create') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\AttributeAvController::createAction',  '_route' => 'admin.configuration.attributes-av.create',);
                        }

                        // admin.configuration.attributes-av.update
                        if ($pathinfo === '/admin/configuration/attributes-av/update') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\AttributeAvController::updateAction',  '_route' => 'admin.configuration.attributes-av.update',);
                        }

                        // admin.configuration.attributes-av.save
                        if ($pathinfo === '/admin/configuration/attributes-av/save') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\AttributeAvController::processUpdateAction',  '_route' => 'admin.configuration.attributes-av.save',);
                        }

                        // admin.configuration.attributes-av.delete
                        if ($pathinfo === '/admin/configuration/attributes-av/delete') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\AttributeAvController::deleteAction',  '_route' => 'admin.configuration.attributes-av.delete',);
                        }

                        // admin.configuration.attributes-av.update-position
                        if ($pathinfo === '/admin/configuration/attributes-av/update-position') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\AttributeAvController::updatePositionAction',  '_route' => 'admin.configuration.attributes-av.update-position',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/configuration/shipping_')) {
                    if (0 === strpos($pathinfo, '/admin/configuration/shipping_zones')) {
                        // admin.configuration.shipping-zones.default
                        if ($pathinfo === '/admin/configuration/shipping_zones') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\ShippingZoneController::indexAction',  '_route' => 'admin.configuration.shipping-zones.default',);
                        }

                        // admin.configuration.shipping-zones.update.view
                        if (0 === strpos($pathinfo, '/admin/configuration/shipping_zones/update') && preg_match('#^/admin/configuration/shipping_zones/update/(?P<delivery_module_id>\\d+)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_adminconfigurationshippingzonesupdateview;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.configuration.shipping-zones.update.view')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ShippingZoneController::updateAction',));
                        }
                        not_adminconfigurationshippingzonesupdateview:

                        if (0 === strpos($pathinfo, '/admin/configuration/shipping_zones/area')) {
                            // admin.configuration.shipping-zones.area.add
                            if ($pathinfo === '/admin/configuration/shipping_zones/area/add') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_adminconfigurationshippingzonesareaadd;
                                }

                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\ShippingZoneController::addArea',  '_route' => 'admin.configuration.shipping-zones.area.add',);
                            }
                            not_adminconfigurationshippingzonesareaadd:

                            // admin.configuration.shipping-zones.area.remove
                            if ($pathinfo === '/admin/configuration/shipping_zones/area/remove') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\ShippingZoneController::removeArea',  '_route' => 'admin.configuration.shipping-zones.area.remove',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/configuration/shipping_configuration')) {
                        // admin.configuration.shipping-configuration.default
                        if ($pathinfo === '/admin/configuration/shipping_configuration') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\AreaController::defaultAction',  '_route' => 'admin.configuration.shipping-configuration.default',);
                        }

                        // admin.configuration.shipping-configuration.update.view
                        if (0 === strpos($pathinfo, '/admin/configuration/shipping_configuration/update') && preg_match('#^/admin/configuration/shipping_configuration/update/(?P<area_id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.configuration.shipping-configuration.update.view')), array (  '_controller' => 'Thelia\\Controller\\Admin\\AreaController::updateAction',));
                        }

                        // admin.configuration.shipping-configuration.save
                        if (0 === strpos($pathinfo, '/admin/configuration/shipping_configuration/save') && preg_match('#^/admin/configuration/shipping_configuration/save/(?P<area_id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.configuration.shipping-configuration.save')), array (  '_controller' => 'Thelia\\Controller\\Admin\\AreaController::processUpdateAction',));
                        }

                        // admin.configuration.shipping-configuration.delete
                        if ($pathinfo === '/admin/configuration/shipping_configuration/delete') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\AreaController::deleteAction',  '_route' => 'admin.configuration.shipping-configuration.delete',);
                        }

                        // admin.configuration.shipping-configuration.create
                        if ($pathinfo === '/admin/configuration/shipping_configuration/create') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\AreaController::createAction',  '_route' => 'admin.configuration.shipping-configuration.create',);
                        }

                        // admin.configuration.shipping-configuration.update.postage
                        if (0 === strpos($pathinfo, '/admin/configuration/shipping_configuration/update_postage') && preg_match('#^/admin/configuration/shipping_configuration/update_postage/(?P<area_id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.configuration.shipping-configuration.update.postage')), array (  '_controller' => 'Thelia\\Controller\\Admin\\AreaController::updatePostageAction',));
                        }

                        if (0 === strpos($pathinfo, '/admin/configuration/shipping_configuration/countr')) {
                            if (0 === strpos($pathinfo, '/admin/configuration/shipping_configuration/country')) {
                                // admin.configuration.shipping-configuration.country.add
                                if ($pathinfo === '/admin/configuration/shipping_configuration/country/add') {
                                    if ($this->context->getMethod() != 'POST') {
                                        $allow[] = 'POST';
                                        goto not_adminconfigurationshippingconfigurationcountryadd;
                                    }

                                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\AreaController::addCountry',  '_route' => 'admin.configuration.shipping-configuration.country.add',);
                                }
                                not_adminconfigurationshippingconfigurationcountryadd:

                                // admin.configuration.shipping-configuration.country.remove
                                if ($pathinfo === '/admin/configuration/shipping_configuration/country/remove') {
                                    if ($this->context->getMethod() != 'POST') {
                                        $allow[] = 'POST';
                                        goto not_adminconfigurationshippingconfigurationcountryremove;
                                    }

                                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\AreaController::removeCountry',  '_route' => 'admin.configuration.shipping-configuration.country.remove',);
                                }
                                not_adminconfigurationshippingconfigurationcountryremove:

                            }

                            // admin.configuration.shipping-configuration.countries.remove
                            if ($pathinfo === '/admin/configuration/shipping_configuration/countries/remove') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_adminconfigurationshippingconfigurationcountriesremove;
                                }

                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\AreaController::removeCountries',  '_route' => 'admin.configuration.shipping-configuration.countries.remove',);
                            }
                            not_adminconfigurationshippingconfigurationcountriesremove:

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/configuration/countr')) {
                    if (0 === strpos($pathinfo, '/admin/configuration/countries')) {
                        // admin.configuration.countries.default
                        if ($pathinfo === '/admin/configuration/countries') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\CountryController::defaultAction',  '_route' => 'admin.configuration.countries.default',);
                        }

                        // admin.configuration.countries.create
                        if ($pathinfo === '/admin/configuration/countries/create') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\CountryController::createAction',  '_route' => 'admin.configuration.countries.create',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/configuration/country')) {
                        // admin.configuration.countries.update
                        if (0 === strpos($pathinfo, '/admin/configuration/country/update') && preg_match('#^/admin/configuration/country/update/(?P<country_id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.configuration.countries.update')), array (  '_controller' => 'Thelia\\Controller\\Admin\\CountryController::updateAction',));
                        }

                        // admin.configuration.countries.save
                        if (0 === strpos($pathinfo, '/admin/configuration/country/save') && preg_match('#^/admin/configuration/country/save/(?P<country_id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.configuration.countries.save')), array (  '_controller' => 'Thelia\\Controller\\Admin\\CountryController::processUpdateAction',));
                        }

                    }

                    // admin.configuration.countries.delete
                    if ($pathinfo === '/admin/configuration/countries/delete') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\CountryController::deleteAction',  '_route' => 'admin.configuration.countries.delete',);
                    }

                    if (0 === strpos($pathinfo, '/admin/configuration/country/toggle')) {
                        // admin.configuration.countries.toggle-default
                        if ($pathinfo === '/admin/configuration/country/toggleDefault') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\CountryController::toggleDefaultAction',  '_route' => 'admin.configuration.countries.toggle-default',);
                        }

                        // admin.configuration.countries.toggle-online
                        if ($pathinfo === '/admin/configuration/country/toggle-online') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\CountryController::setToggleVisibilityAction',  '_route' => 'admin.configuration.countries.toggle-online',);
                        }

                    }

                    // admin.configuration.countries.data
                    if ($pathinfo === '/admin/configuration/countries/data') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\CountryController::getDataAction',  '_route' => 'admin.configuration.countries.data',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/configuration/state')) {
                    if (0 === strpos($pathinfo, '/admin/configuration/states')) {
                        // admin.configuration.states.default
                        if ($pathinfo === '/admin/configuration/states') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\StateController::defaultAction',  '_route' => 'admin.configuration.states.default',);
                        }

                        // admin.configuration.states.create
                        if ($pathinfo === '/admin/configuration/states/create') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\StateController::createAction',  '_route' => 'admin.configuration.states.create',);
                        }

                    }

                    // admin.configuration.states.update
                    if (0 === strpos($pathinfo, '/admin/configuration/state/update') && preg_match('#^/admin/configuration/state/update/(?P<state_id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.configuration.states.update')), array (  '_controller' => 'Thelia\\Controller\\Admin\\StateController::updateAction',));
                    }

                    // admin.configuration.states.save
                    if (0 === strpos($pathinfo, '/admin/configuration/state/save') && preg_match('#^/admin/configuration/state/save/(?P<state_id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.configuration.states.save')), array (  '_controller' => 'Thelia\\Controller\\Admin\\StateController::processUpdateAction',));
                    }

                    // admin.configuration.states.delete
                    if ($pathinfo === '/admin/configuration/states/delete') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\StateController::deleteAction',  '_route' => 'admin.configuration.states.delete',);
                    }

                    // admin.configuration.states.toggle-online
                    if ($pathinfo === '/admin/configuration/state/toggle-online') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\StateController::setToggleVisibilityAction',  '_route' => 'admin.configuration.states.toggle-online',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/configuration/profiles')) {
                    // admin.configuration.profiles.list
                    if ($pathinfo === '/admin/configuration/profiles') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProfileController::defaultAction',  '_route' => 'admin.configuration.profiles.list',);
                    }

                    // admin.configuration.profiles.update
                    if (0 === strpos($pathinfo, '/admin/configuration/profiles/update') && preg_match('#^/admin/configuration/profiles/update/(?P<profile_id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.configuration.profiles.update')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ProfileController::updateAction',));
                    }

                    // admin.configuration.profiles.add
                    if ($pathinfo === '/admin/configuration/profiles/add') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProfileController::createAction',  '_route' => 'admin.configuration.profiles.add',);
                    }

                    if (0 === strpos($pathinfo, '/admin/configuration/profiles/save')) {
                        // admin.configuration.profiles.save
                        if ($pathinfo === '/admin/configuration/profiles/save') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProfileController::processUpdateAction',  '_route' => 'admin.configuration.profiles.save',);
                        }

                        // admin.configuration.profiles.saveResourceAccess
                        if ($pathinfo === '/admin/configuration/profiles/saveResourceAccess') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProfileController::processUpdateResourceAccess',  '_route' => 'admin.configuration.profiles.saveResourceAccess',);
                        }

                        // admin.configuration.profiles.saveModuleAccess
                        if ($pathinfo === '/admin/configuration/profiles/saveModuleAccess') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProfileController::processUpdateModuleAccess',  '_route' => 'admin.configuration.profiles.saveModuleAccess',);
                        }

                    }

                    // admin.configuration.profiles.delete
                    if ($pathinfo === '/admin/configuration/profiles/delete') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ProfileController::deleteAction',  '_route' => 'admin.configuration.profiles.delete',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/configuration/administrators')) {
                    // admin.configuration.administrators.view
                    if ($pathinfo === '/admin/configuration/administrators') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\AdministratorController::defaultAction',  '_route' => 'admin.configuration.administrators.view',);
                    }

                    // admin.configuration.administrators.view-profile
                    if ($pathinfo === '/admin/configuration/administrators/view') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\AdministratorController::viewAction',  '_route' => 'admin.configuration.administrators.view-profile',);
                    }

                    // admin.configuration.administrators.add
                    if ($pathinfo === '/admin/configuration/administrators/add') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\AdministratorController::createAction',  '_route' => 'admin.configuration.administrators.add',);
                    }

                    // admin.configuration.administrators.save
                    if ($pathinfo === '/admin/configuration/administrators/save') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\AdministratorController::processUpdateAction',  '_route' => 'admin.configuration.administrators.save',);
                    }

                    // admin.configuration.administrators.delete
                    if ($pathinfo === '/admin/configuration/administrators/delete') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\AdministratorController::deleteAction',  '_route' => 'admin.configuration.administrators.delete',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/configuration/mailingSystem')) {
                    // admin.configuration.mailing-system.view
                    if ($pathinfo === '/admin/configuration/mailingSystem') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\MailingSystemController::defaultAction',  '_route' => 'admin.configuration.mailing-system.view',);
                    }

                    // admin.configuration.mailing-system.save
                    if ($pathinfo === '/admin/configuration/mailingSystem/save') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\MailingSystemController::updateAction',  '_route' => 'admin.configuration.mailing-system.save',);
                    }

                    // admin.configuration.mailing-system.test
                    if ($pathinfo === '/admin/configuration/mailingSystem/test') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\MailingSystemController::testAction',  '_route' => 'admin.configuration.mailing-system.test',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/configuration/adminLogs')) {
                    // admin.configuration.admin-logs.view
                    if ($pathinfo === '/admin/configuration/adminLogs') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\AdminLogsController::defaultAction',  '_route' => 'admin.configuration.admin-logs.view',);
                    }

                    // admin.configuration.admin-logs.logger
                    if ($pathinfo === '/admin/configuration/adminLogs/logger') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\AdminLogsController::loadLoggerAjaxAction',  '_route' => 'admin.configuration.admin-logs.logger',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/configuration/features')) {
                    // admin.configuration.features.default
                    if ($pathinfo === '/admin/configuration/features') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\FeatureController::defaultAction',  '_route' => 'admin.configuration.features.default',);
                    }

                    // admin.configuration.features.create
                    if ($pathinfo === '/admin/configuration/features/create') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\FeatureController::createAction',  '_route' => 'admin.configuration.features.create',);
                    }

                    // admin.configuration.features.update
                    if ($pathinfo === '/admin/configuration/features/update') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\FeatureController::updateAction',  '_route' => 'admin.configuration.features.update',);
                    }

                    // admin.configuration.features.save
                    if ($pathinfo === '/admin/configuration/features/save') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\FeatureController::processUpdateAction',  '_route' => 'admin.configuration.features.save',);
                    }

                    // admin.configuration.features.delete
                    if ($pathinfo === '/admin/configuration/features/delete') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\FeatureController::deleteAction',  '_route' => 'admin.configuration.features.delete',);
                    }

                    // admin.configuration.features.update-position
                    if ($pathinfo === '/admin/configuration/features/update-position') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\FeatureController::updatePositionAction',  '_route' => 'admin.configuration.features.update-position',);
                    }

                    // admin.configuration.features.rem-from-all
                    if ($pathinfo === '/admin/configuration/features/remove-from-all-templates') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\FeatureController::removeFromAllTemplates',  '_route' => 'admin.configuration.features.rem-from-all',);
                    }

                    // admin.configuration.features.add-to-all
                    if ($pathinfo === '/admin/configuration/features/add-to-all-templates') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\FeatureController::addToAllTemplates',  '_route' => 'admin.configuration.features.add-to-all',);
                    }

                    if (0 === strpos($pathinfo, '/admin/configuration/features-av')) {
                        // admin.configuration.features-av.create
                        if ($pathinfo === '/admin/configuration/features-av/create') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\FeatureAvController::createAction',  '_route' => 'admin.configuration.features-av.create',);
                        }

                        // admin.configuration.features-av.update
                        if ($pathinfo === '/admin/configuration/features-av/update') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\FeatureAvController::updateAction',  '_route' => 'admin.configuration.features-av.update',);
                        }

                        // admin.configuration.features-av.save
                        if ($pathinfo === '/admin/configuration/features-av/save') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\FeatureAvController::processUpdateAction',  '_route' => 'admin.configuration.features-av.save',);
                        }

                        // admin.configuration.features-av.delete
                        if ($pathinfo === '/admin/configuration/features-av/delete') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\FeatureAvController::deleteAction',  '_route' => 'admin.configuration.features-av.delete',);
                        }

                        // admin.configuration.features-av.update-position
                        if ($pathinfo === '/admin/configuration/features-av/update-position') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\FeatureAvController::updatePositionAction',  '_route' => 'admin.configuration.features-av.update-position',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/configuration/a')) {
                    if (0 === strpos($pathinfo, '/admin/configuration/advanced')) {
                        // admin.configuration.advanced
                        if ($pathinfo === '/admin/configuration/advanced') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\AdvancedConfigurationController::defaultAction',  '_route' => 'admin.configuration.advanced',);
                        }

                        if (0 === strpos($pathinfo, '/admin/configuration/advanced/flush-')) {
                            // admin.configuration.advanced.flush-cache
                            if ($pathinfo === '/admin/configuration/advanced/flush-cache') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\AdvancedConfigurationController::flushCacheAction',  '_route' => 'admin.configuration.advanced.flush-cache',);
                            }

                            // admin.configuration.advanced.flush-assets
                            if ($pathinfo === '/admin/configuration/advanced/flush-assets') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\AdvancedConfigurationController::flushAssetsAction',  '_route' => 'admin.configuration.advanced.flush-assets',);
                            }

                            // admin.configuration.advanced.flush-images-and-documents
                            if ($pathinfo === '/admin/configuration/advanced/flush-images-and-documents') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\AdvancedConfigurationController::flushImagesAndDocumentsAction',  '_route' => 'admin.configuration.advanced.flush-images-and-documents',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/configuration/api')) {
                        // admin.configuration.api
                        if ($pathinfo === '/admin/configuration/api') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_adminconfigurationapi;
                            }

                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\ApiController::indexAction',  '_route' => 'admin.configuration.api',);
                        }
                        not_adminconfigurationapi:

                        // admin.configuration.api.create
                        if ($pathinfo === '/admin/configuration/api') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_adminconfigurationapicreate;
                            }

                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\ApiController::createAction',  '_route' => 'admin.configuration.api.create',);
                        }
                        not_adminconfigurationapicreate:

                        // admin.configuration.api.downloadSecure
                        if (0 === strpos($pathinfo, '/admin/configuration/api/secure_key') && preg_match('#^/admin/configuration/api/secure_key/(?P<api_id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.configuration.api.downloadSecure')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ApiController::downloadAction',));
                        }

                        // admin.configuration.api.delete
                        if ($pathinfo === '/admin/configuration/api/delete') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\ApiController::deleteAction',  '_route' => 'admin.configuration.api.delete',);
                        }

                        if (0 === strpos($pathinfo, '/admin/configuration/api/update')) {
                            // admin.configuration.api.update
                            if (preg_match('#^/admin/configuration/api/update/(?P<api_id>[^/]++)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_adminconfigurationapiupdate;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.configuration.api.update')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ApiController::updateAction',));
                            }
                            not_adminconfigurationapiupdate:

                            // admin.configuration.api.update.process
                            if (preg_match('#^/admin/configuration/api/update/(?P<api_id>[^/]++)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_adminconfigurationapiupdateprocess;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.configuration.api.update.process')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ApiController::processUpdateAction',));
                            }
                            not_adminconfigurationapiupdateprocess:

                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/module')) {
                // admin.module
                if ($pathinfo === '/admin/modules') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\ModuleController::indexAction',  '_route' => 'admin.module',);
                }

                // admin.module.update
                if (0 === strpos($pathinfo, '/admin/module/update') && preg_match('#^/admin/module/update/(?P<module_id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.module.update')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ModuleController::updateAction',));
                }

                // admin.module.save
                if ($pathinfo === '/admin/module/save') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\ModuleController::processUpdateAction',  '_route' => 'admin.module.save',);
                }

                // admin.module.toggle-activation
                if (0 === strpos($pathinfo, '/admin/module/toggle-activation') && preg_match('#^/admin/module/toggle\\-activation/(?P<module_id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.module.toggle-activation')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ModuleController::toggleActivationAction',));
                }

                // admin.module.delete
                if ($pathinfo === '/admin/module/delete') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\ModuleController::deleteAction',  '_route' => 'admin.module.delete',);
                }

                // admin.module.update-position
                if ($pathinfo === '/admin/module/update-position') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\ModuleController::updatePositionAction',  '_route' => 'admin.module.update-position',);
                }

                if (0 === strpos($pathinfo, '/admin/module/in')) {
                    // admin.module.install
                    if ($pathinfo === '/admin/module/install') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_adminmoduleinstall;
                        }

                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ModuleController::installAction',  '_route' => 'admin.module.install',);
                    }
                    not_adminmoduleinstall:

                    // admin.module.information
                    if (0 === strpos($pathinfo, '/admin/module/information') && preg_match('#^/admin/module/information/(?P<module_id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.module.information')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ModuleController::informationAction',));
                    }

                }

                // admin.module.documentation
                if (0 === strpos($pathinfo, '/admin/module/documentation') && preg_match('#^/admin/module/documentation/(?P<module_id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.module.documentation')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ModuleController::documentationAction',));
                }

                // admin.module.configure
                if (preg_match('#^/admin/module/(?P<module_code>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.module.configure')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ModuleController::configureAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/hook')) {
                if (0 === strpos($pathinfo, '/admin/hooks')) {
                    // admin.hook
                    if ($pathinfo === '/admin/hooks') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\HookController::indexAction',  '_route' => 'admin.hook',);
                    }

                    if (0 === strpos($pathinfo, '/admin/hooks/discover')) {
                        // admin.hook.discover
                        if ($pathinfo === '/admin/hooks/discover') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\HookController::discoverAction',  '_route' => 'admin.hook.discover',);
                        }

                        // admin.hook.discover.save
                        if ($pathinfo === '/admin/hooks/discover/save') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\HookController::discoverSaveAction',  '_route' => 'admin.hook.discover.save',);
                        }

                    }

                    // admin.hook.create
                    if ($pathinfo === '/admin/hooks/create') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\HookController::createAction',  '_route' => 'admin.hook.create',);
                    }

                }

                // admin.hook.update
                if (0 === strpos($pathinfo, '/admin/hook/update') && preg_match('#^/admin/hook/update/(?P<hook_id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.hook.update')), array (  '_controller' => 'Thelia\\Controller\\Admin\\HookController::updateAction',));
                }

                // admin.hook.save
                if (0 === strpos($pathinfo, '/admin/hook/save') && preg_match('#^/admin/hook/save/(?P<hook_id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.hook.save')), array (  '_controller' => 'Thelia\\Controller\\Admin\\HookController::processUpdateAction',));
                }

                // admin.hook.delete
                if ($pathinfo === '/admin/hooks/delete') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\HookController::deleteAction',  '_route' => 'admin.hook.delete',);
                }

                if (0 === strpos($pathinfo, '/admin/hook/toggle-')) {
                    // admin.hook.toggle-activation
                    if ($pathinfo === '/admin/hook/toggle-activation') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\HookController::toggleActivationAction',  '_route' => 'admin.hook.toggle-activation',);
                    }

                    // admin.hook.toggle-native
                    if ($pathinfo === '/admin/hook/toggle-native') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\HookController::toggleNativeAction',  '_route' => 'admin.hook.toggle-native',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/module-hook')) {
                if (0 === strpos($pathinfo, '/admin/module-hooks')) {
                    // admin.module-hook
                    if ($pathinfo === '/admin/module-hooks') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ModuleHookController::indexAction',  '_route' => 'admin.module-hook',);
                    }

                    // admin.module-hook.create
                    if ($pathinfo === '/admin/module-hooks/create') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ModuleHookController::createAction',  '_route' => 'admin.module-hook.create',);
                    }

                }

                // admin.module-hook.update
                if (0 === strpos($pathinfo, '/admin/module-hook/update') && preg_match('#^/admin/module\\-hook/update/(?P<module_hook_id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.module-hook.update')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ModuleHookController::updateAction',));
                }

                // admin.module-hook.save
                if (0 === strpos($pathinfo, '/admin/module-hook/save') && preg_match('#^/admin/module\\-hook/save/(?P<module_hook_id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.module-hook.save')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ModuleHookController::processUpdateAction',));
                }

                if (0 === strpos($pathinfo, '/admin/module-hooks')) {
                    // admin.module-hook.delete
                    if ($pathinfo === '/admin/module-hooks/delete') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ModuleHookController::deleteAction',  '_route' => 'admin.module-hook.delete',);
                    }

                    // admin.module-hook.toggle-activation
                    if (0 === strpos($pathinfo, '/admin/module-hooks/toggle-activation') && preg_match('#^/admin/module\\-hooks/toggle\\-activation/(?P<module_hook_id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.module-hook.toggle-activation')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ModuleHookController::toggleActivationAction',));
                    }

                    // admin.module-hook.update-position
                    if ($pathinfo === '/admin/module-hooks/update-position') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\ModuleHookController::updatePositionAction',  '_route' => 'admin.module-hook.update-position',);
                    }

                    if (0 === strpos($pathinfo, '/admin/module-hooks/get-module-hook-')) {
                        // admin.module-hook.get-module-hook-classnames
                        if (0 === strpos($pathinfo, '/admin/module-hooks/get-module-hook-classnames') && preg_match('#^/admin/module\\-hooks/get\\-module\\-hook\\-classnames/(?P<moduleId>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.module-hook.get-module-hook-classnames')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ModuleHookController::getModuleHookClassnames',));
                        }

                        // admin.module-hook.get-module-hook-methods
                        if (0 === strpos($pathinfo, '/admin/module-hooks/get-module-hook-methods') && preg_match('#^/admin/module\\-hooks/get\\-module\\-hook\\-methods/(?P<moduleId>[^/]++)/(?P<className>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.module-hook.get-module-hook-methods')), array (  '_controller' => 'Thelia\\Controller\\Admin\\ModuleHookController::getModuleHookMethods',));
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/configuration')) {
                if (0 === strpos($pathinfo, '/admin/configuration/taxes')) {
                    // admin.configuration.taxes.update
                    if (0 === strpos($pathinfo, '/admin/configuration/taxes/update') && preg_match('#^/admin/configuration/taxes/update/(?P<tax_id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.configuration.taxes.update')), array (  '_controller' => 'Thelia\\Controller\\Admin\\TaxController::updateAction',));
                    }

                    // admin.configuration.taxes.add
                    if ($pathinfo === '/admin/configuration/taxes/add') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\TaxController::createAction',  '_route' => 'admin.configuration.taxes.add',);
                    }

                    // admin.configuration.taxes.save
                    if ($pathinfo === '/admin/configuration/taxes/save') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\TaxController::processUpdateAction',  '_route' => 'admin.configuration.taxes.save',);
                    }

                    // admin.configuration.taxes.delete
                    if ($pathinfo === '/admin/configuration/taxes/delete') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\TaxController::deleteAction',  '_route' => 'admin.configuration.taxes.delete',);
                    }

                    if (0 === strpos($pathinfo, '/admin/configuration/taxes_rules')) {
                        // admin.configuration.taxes-rules.list
                        if ($pathinfo === '/admin/configuration/taxes_rules') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\TaxRuleController::defaultAction',  '_route' => 'admin.configuration.taxes-rules.list',);
                        }

                        // admin.configuration.taxes-rules.update
                        if (0 === strpos($pathinfo, '/admin/configuration/taxes_rules/update') && preg_match('#^/admin/configuration/taxes_rules/update/(?P<tax_rule_id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.configuration.taxes-rules.update')), array (  '_controller' => 'Thelia\\Controller\\Admin\\TaxRuleController::updateAction',));
                        }

                        // admin.configuration.taxes-rules.add
                        if ($pathinfo === '/admin/configuration/taxes_rules/add') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\TaxRuleController::createAction',  '_route' => 'admin.configuration.taxes-rules.add',);
                        }

                        if (0 === strpos($pathinfo, '/admin/configuration/taxes_rules/save')) {
                            // admin.configuration.taxes-rules.save
                            if ($pathinfo === '/admin/configuration/taxes_rules/save') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\TaxRuleController::processUpdateAction',  '_route' => 'admin.configuration.taxes-rules.save',);
                            }

                            // admin.configuration.taxes-rules.saveTaxes
                            if ($pathinfo === '/admin/configuration/taxes_rules/saveTaxes') {
                                return array (  '_controller' => 'Thelia\\Controller\\Admin\\TaxRuleController::processUpdateTaxesAction',  '_route' => 'admin.configuration.taxes-rules.saveTaxes',);
                            }

                        }

                        // admin.configuration.taxes-rules.delete
                        if ($pathinfo === '/admin/configuration/taxes_rules/delete') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\TaxRuleController::deleteAction',  '_route' => 'admin.configuration.taxes-rules.delete',);
                        }

                        // admin.configuration.taxes-rules.set-default
                        if (0 === strpos($pathinfo, '/admin/configuration/taxes_rules/update/set_default') && preg_match('#^/admin/configuration/taxes_rules/update/set_default/(?P<tax_rule_id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.configuration.taxes-rules.set-default')), array (  '_controller' => 'Thelia\\Controller\\Admin\\TaxRuleController::setDefaultAction',));
                        }

                        // admin.configuration.taxes-rules.get
                        if (0 === strpos($pathinfo, '/admin/configuration/taxes_rules/specs') && preg_match('#^/admin/configuration/taxes_rules/specs/(?P<tax_rule_id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.configuration.taxes-rules.get')), array (  '_controller' => 'Thelia\\Controller\\Admin\\TaxRuleController::specsAction',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/configuration/languages')) {
                    // admin.configuration.languages
                    if ($pathinfo === '/admin/configuration/languages') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\LangController::defaultAction',  '_route' => 'admin.configuration.languages',);
                    }

                    // admin.configuration.languages.update
                    if (0 === strpos($pathinfo, '/admin/configuration/languages/update') && preg_match('#^/admin/configuration/languages/update/(?P<lang_id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.configuration.languages.update')), array (  '_controller' => 'Thelia\\Controller\\Admin\\LangController::updateAction',));
                    }

                    // admin.configuration.languages.update.process
                    if (0 === strpos($pathinfo, '/admin/configuration/languages/save') && preg_match('#^/admin/configuration/languages/save/(?P<lang_id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.configuration.languages.update.process')), array (  '_controller' => 'Thelia\\Controller\\Admin\\LangController::processUpdateAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/configuration/languages/toggle')) {
                        // admin.configuration.languages.toggleDefault
                        if (0 === strpos($pathinfo, '/admin/configuration/languages/toggleDefault') && preg_match('#^/admin/configuration/languages/toggleDefault/(?P<lang_id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.configuration.languages.toggleDefault')), array (  '_controller' => 'Thelia\\Controller\\Admin\\LangController::toggleDefaultAction',));
                        }

                        // admin.configuration.languages.toggleActive
                        if (0 === strpos($pathinfo, '/admin/configuration/languages/toggleActive') && preg_match('#^/admin/configuration/languages/toggleActive/(?P<lang_id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.configuration.languages.toggleActive')), array (  '_controller' => 'Thelia\\Controller\\Admin\\LangController::toggleActiveAction',));
                        }

                        // admin.configuration.languages.toggleVisible
                        if (0 === strpos($pathinfo, '/admin/configuration/languages/toggleVisible') && preg_match('#^/admin/configuration/languages/toggleVisible/(?P<lang_id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.configuration.languages.toggleVisible')), array (  '_controller' => 'Thelia\\Controller\\Admin\\LangController::toggleVisibleAction',));
                        }

                    }

                    // admin.configuration.languages.add
                    if ($pathinfo === '/admin/configuration/languages/add') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\LangController::addAction',  '_route' => 'admin.configuration.languages.add',);
                    }

                    if (0 === strpos($pathinfo, '/admin/configuration/languages/de')) {
                        // admin.configuration.languages.delete
                        if ($pathinfo === '/admin/configuration/languages/delete') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\LangController::deleteAction',  '_route' => 'admin.configuration.languages.delete',);
                        }

                        // admin.configuration.languages.defaultBehavior
                        if ($pathinfo === '/admin/configuration/languages/defaultBehavior') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\LangController::defaultBehaviorAction',  '_route' => 'admin.configuration.languages.defaultBehavior',);
                        }

                    }

                    // admin.configuration.languages.updateUrl
                    if ($pathinfo === '/admin/configuration/languages/updateUrl') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\LangController::domainAction',  '_route' => 'admin.configuration.languages.updateUrl',);
                    }

                    if (0 === strpos($pathinfo, '/admin/configuration/languages/domain')) {
                        // admin.configuration.languages.domain.activation
                        if ($pathinfo === '/admin/configuration/languages/domain/activate') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\LangController::activateDomainAction',  '_route' => 'admin.configuration.languages.domain.activation',);
                        }

                        // admin.configuration.languages.domain.deactivation
                        if ($pathinfo === '/admin/configuration/languages/domain/deactivate') {
                            return array (  '_controller' => 'Thelia\\Controller\\Admin\\LangController::deactivateDomainAction',  '_route' => 'admin.configuration.languages.domain.deactivation',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/configuration/translations')) {
                    // admin.configuration.translations
                    if ($pathinfo === '/admin/configuration/translations') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\TranslationsController::defaultAction',  '_route' => 'admin.configuration.translations',);
                    }

                    // admin.configuration.translations.update
                    if ($pathinfo === '/admin/configuration/translations/update') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\TranslationsController::updateAction',  '_route' => 'admin.configuration.translations.update',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/brand')) {
                // admin.brand.default
                if ($pathinfo === '/admin/brand') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\BrandController::defaultAction',  '_route' => 'admin.brand.default',);
                }

                // admin.brand.create
                if ($pathinfo === '/admin/brand/create') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\BrandController::createAction',  '_route' => 'admin.brand.create',);
                }

                // admin.brand.update
                if (0 === strpos($pathinfo, '/admin/brand/update') && preg_match('#^/admin/brand/update/(?P<brand_id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.brand.update')), array (  '_controller' => 'Thelia\\Controller\\Admin\\BrandController::updateAction',));
                }

                if (0 === strpos($pathinfo, '/admin/brand/s')) {
                    // admin.brand.save
                    if (0 === strpos($pathinfo, '/admin/brand/save') && preg_match('#^/admin/brand/save/(?P<brand_id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.brand.save')), array (  '_controller' => 'Thelia\\Controller\\Admin\\BrandController::processUpdateAction',));
                    }

                    // admin.brand.seo.save
                    if ($pathinfo === '/admin/brand/seo/save') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\BrandController::processUpdateSeoAction',  '_route' => 'admin.brand.seo.save',);
                    }

                }

                // admin.brand.toggle-online
                if ($pathinfo === '/admin/brand/toggle-online') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\BrandController::setToggleVisibilityAction',  '_route' => 'admin.brand.toggle-online',);
                }

                // admin.brand.update-position
                if ($pathinfo === '/admin/brand/update-position') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\BrandController::updatePositionAction',  '_route' => 'admin.brand.update-position',);
                }

                // admin.brand.delete
                if ($pathinfo === '/admin/brand/delete') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\BrandController::deleteAction',  '_route' => 'admin.brand.delete',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/export')) {
                // export.list
                if ($pathinfo === '/admin/export') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_exportlist;
                    }

                    return array (  '_controller' => 'Thelia:Admin\\Export:index',  '_route' => 'export.list',);
                }
                not_exportlist:

                if (0 === strpos($pathinfo, '/admin/export/position')) {
                    // export.position
                    if ($pathinfo === '/admin/export/position') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_exportposition;
                        }

                        return array (  '_controller' => 'Thelia:Admin\\Export:changeExportPosition',  '_route' => 'export.position',);
                    }
                    not_exportposition:

                    // export.category.position
                    if ($pathinfo === '/admin/export/position/category') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_exportcategoryposition;
                        }

                        return array (  '_controller' => 'Thelia:Admin\\Export:changeCategoryPosition',  '_route' => 'export.category.position',);
                    }
                    not_exportcategoryposition:

                }

                // export.view
                if (preg_match('#^/admin/export/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_exportview;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'export.view')), array (  '_controller' => 'Thelia:Admin\\Export:configure',));
                }
                not_exportview:

                // export.process
                if (preg_match('#^/admin/export/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_exportprocess;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'export.process')), array (  '_controller' => 'Thelia:Admin\\Export:export',));
                }
                not_exportprocess:

            }

            if (0 === strpos($pathinfo, '/admin/import')) {
                // import.list
                if ($pathinfo === '/admin/import') {
                    return array (  '_controller' => 'Thelia:Admin\\Import:index',  '_route' => 'import.list',);
                }

                if (0 === strpos($pathinfo, '/admin/import/position')) {
                    // import.position
                    if ($pathinfo === '/admin/import/position') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_importposition;
                        }

                        return array (  '_controller' => 'Thelia:Admin\\Import:changeImportPosition',  '_route' => 'import.position',);
                    }
                    not_importposition:

                    // import.category.position
                    if ($pathinfo === '/admin/import/position/category') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_importcategoryposition;
                        }

                        return array (  '_controller' => 'Thelia:Admin\\Import:changeCategoryPosition',  '_route' => 'import.category.position',);
                    }
                    not_importcategoryposition:

                }

                // import.view
                if (preg_match('#^/admin/import/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_importview;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'import.view')), array (  '_controller' => 'Thelia:Admin\\Import:configure',));
                }
                not_importview:

                // import.process
                if (preg_match('#^/admin/import/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_importprocess;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'import.process')), array (  '_controller' => 'Thelia:Admin\\Import:import',));
                }
                not_importprocess:

            }

            if (0 === strpos($pathinfo, '/admin/sale')) {
                if (0 === strpos($pathinfo, '/admin/sales')) {
                    // admin.sale.default
                    if ($pathinfo === '/admin/sales') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\SaleController::defaultAction',  '_route' => 'admin.sale.default',);
                    }

                    // admin.sale.reset
                    if ($pathinfo === '/admin/sales/reset') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\SaleController::resetSaleStatus',  '_route' => 'admin.sale.reset',);
                    }

                    // admin.sale.check-activation
                    if ($pathinfo === '/admin/sales/check-activation') {
                        return array (  '_controller' => 'Thelia\\Controller\\Admin\\SaleController::checkSalesActivationStatus',  '_route' => 'admin.sale.check-activation',);
                    }

                }

                // admin.sale.create
                if ($pathinfo === '/admin/sale/create') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\SaleController::createAction',  '_route' => 'admin.sale.create',);
                }

                // admin.sale.update
                if (0 === strpos($pathinfo, '/admin/sale/update') && preg_match('#^/admin/sale/update/(?P<sale_id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.sale.update')), array (  '_controller' => 'Thelia\\Controller\\Admin\\SaleController::updateAction',));
                }

                // admin.sale.save
                if (0 === strpos($pathinfo, '/admin/sale/save') && preg_match('#^/admin/sale/save/(?P<sale_id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.sale.save')), array (  '_controller' => 'Thelia\\Controller\\Admin\\SaleController::processUpdateAction',));
                }

                // admin.sale.delete
                if ($pathinfo === '/admin/sale/delete') {
                    return array (  '_controller' => 'Thelia\\Controller\\Admin\\SaleController::deleteAction',  '_route' => 'admin.sale.delete',);
                }

                if (0 === strpos($pathinfo, '/admin/sale/update-product-')) {
                    // admin.sale.update.product.list
                    if (0 === strpos($pathinfo, '/admin/sale/update-product-list') && preg_match('#^/admin/sale/update\\-product\\-list/(?P<sale_id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.sale.update.product.list')), array (  '_controller' => 'Thelia\\Controller\\Admin\\SaleController::updateProductList',));
                    }

                    // admin.sale.update.product.attribute.list
                    if (0 === strpos($pathinfo, '/admin/sale/update-product-attribute-list') && preg_match('#^/admin/sale/update\\-product\\-attribute\\-list/(?P<sale_id>\\d+)/(?P<product_id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.sale.update.product.attribute.list')), array (  '_controller' => 'Thelia\\Controller\\Admin\\SaleController::updateProductAttributes',));
                    }

                }

                // admin.sale.toggleActivity
                if (0 === strpos($pathinfo, '/admin/sale/toggle-activity') && preg_match('#^/admin/sale/toggle\\-activity/(?P<sale_id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.sale.toggleActivity')), array (  '_controller' => 'Thelia\\Controller\\Admin\\SaleController::toggleActivity',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/message')) {
                if (0 === strpos($pathinfo, '/admin/message/preview')) {
                    // admin.email.preview_html
                    if (preg_match('#^/admin/message/preview/(?P<messageId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_adminemailpreview_html;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.email.preview_html')), array (  '_controller' => 'Thelia:Admin\\Message:previewAsHtml',));
                    }
                    not_adminemailpreview_html:

                    // admin.email.preview_text
                    if (0 === strpos($pathinfo, '/admin/message/preview/text') && preg_match('#^/admin/message/preview/text/(?P<messageId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_adminemailpreview_text;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.email.preview_text')), array (  '_controller' => 'Thelia:Admin\\Message:previewAsText',));
                    }
                    not_adminemailpreview_text:

                }

                // admin.email.test_send
                if (0 === strpos($pathinfo, '/admin/message/send') && preg_match('#^/admin/message/send/(?P<messageId>\\d+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_adminemailtest_send;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.email.test_send')), array (  '_controller' => 'Thelia:Admin\\Message:sendSampleByEmail',));
                }
                not_adminemailtest_send:

            }

            // admin.processTemplate
            if (preg_match('#^/admin/(?P<template>.*)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.processTemplate')), array (  '_controller' => 'Thelia\\Controller\\Admin\\AdminController::processTemplateAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
