<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * ProjectUrlMatcherrouter_Api.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ProjectUrlMatcherrouter_Api extends Symfony\Component\Routing\Matcher\UrlMatcher
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

        if (0 === strpos($pathinfo, '/api')) {
            // api.test
            if ($pathinfo === '/api') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_apitest;
                }

                return array (  '_controller' => 'Thelia:Api\\Index:index',  'not-logged' => '1',  '_route' => 'api.test',);
            }
            not_apitest:

            if (0 === strpos($pathinfo, '/api/customers')) {
                // api.customer.list
                if ($pathinfo === '/api/customers') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_apicustomerlist;
                    }

                    return array (  '_controller' => 'Thelia:Api\\Customer:list',  '_route' => 'api.customer.list',);
                }
                not_apicustomerlist:

                // api.customer.get
                if (preg_match('#^/api/customers/(?P<entityId>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_apicustomerget;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.customer.get')), array (  '_controller' => 'Thelia:Api\\Customer:get',));
                }
                not_apicustomerget:

                // api.customer.create
                if ($pathinfo === '/api/customers') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_apicustomercreate;
                    }

                    return array (  '_controller' => 'Thelia:Api\\Customer:create',  '_route' => 'api.customer.create',);
                }
                not_apicustomercreate:

                // api.customer.update
                if ($pathinfo === '/api/customers') {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_apicustomerupdate;
                    }

                    return array (  '_controller' => 'Thelia:Api\\Customer:update',  '_route' => 'api.customer.update',);
                }
                not_apicustomerupdate:

                // api.customer.delete
                if (preg_match('#^/api/customers/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_apicustomerdelete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.customer.delete')), array (  '_controller' => 'Thelia:Api\\Customer:delete',));
                }
                not_apicustomerdelete:

                // api.customer.checkLogin
                if ($pathinfo === '/api/customers/checkLogin') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_apicustomercheckLogin;
                    }

                    return array (  '_controller' => 'Thelia:Api\\Customer:checkLogin',  '_route' => 'api.customer.checkLogin',);
                }
                not_apicustomercheckLogin:

            }

            if (0 === strpos($pathinfo, '/api/title')) {
                // api.title.list
                if ($pathinfo === '/api/title') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_apititlelist;
                    }

                    return array (  '_controller' => 'Thelia:Api\\Title:list',  '_route' => 'api.title.list',);
                }
                not_apititlelist:

                // api.title.create
                if ($pathinfo === '/api/title') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_apititlecreate;
                    }

                    return array (  '_controller' => 'Thelia:Api\\Title:create',  '_route' => 'api.title.create',);
                }
                not_apititlecreate:

                // api.title.update
                if ($pathinfo === '/api/title') {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_apititleupdate;
                    }

                    return array (  '_controller' => 'Thelia:Api\\Title:update',  '_route' => 'api.title.update',);
                }
                not_apititleupdate:

                // api.title.get
                if (preg_match('#^/api/title/(?P<entityId>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_apititleget;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.title.get')), array (  '_controller' => 'Thelia:Api\\Title:get',));
                }
                not_apititleget:

                // api.title.delete
                if (preg_match('#^/api/title/(?P<entityId>\\d+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_apititledelete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.title.delete')), array (  '_controller' => 'Thelia:Api\\Title:delete',));
                }
                not_apititledelete:

            }

            if (0 === strpos($pathinfo, '/api/p')) {
                if (0 === strpos($pathinfo, '/api/products')) {
                    // api.product.list
                    if ($pathinfo === '/api/products') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_apiproductlist;
                        }

                        return array (  '_controller' => 'Thelia:Api\\Product:list',  '_route' => 'api.product.list',);
                    }
                    not_apiproductlist:

                    // api.product.get
                    if (preg_match('#^/api/products/(?P<productId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_apiproductget;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.product.get')), array (  '_controller' => 'Thelia:Api\\Product:getProduct',));
                    }
                    not_apiproductget:

                    // api.product.update
                    if (preg_match('#^/api/products/(?P<productId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_apiproductupdate;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.product.update')), array (  '_controller' => 'Thelia:Api\\Product:update',));
                    }
                    not_apiproductupdate:

                    // api.product.create
                    if ($pathinfo === '/api/products') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_apiproductcreate;
                        }

                        return array (  '_controller' => 'Thelia:Api\\Product:create',  '_route' => 'api.product.create',);
                    }
                    not_apiproductcreate:

                    // api.product.delete
                    if (preg_match('#^/api/products/(?P<productId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_apiproductdelete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.product.delete')), array (  '_controller' => 'Thelia:Api\\Product:delete',));
                    }
                    not_apiproductdelete:

                    // api.product.image.list
                    if (preg_match('#^/api/products/(?P<entityId>\\d+)/images$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_apiproductimagelist;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.product.image.list')), array (  '_controller' => 'Thelia:Api\\Image:list',  'entity' => 'Product',));
                    }
                    not_apiproductimagelist:

                    // api.product.image.get
                    if (preg_match('#^/api/products/(?P<entityId>\\d+)/images/(?P<imageId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_apiproductimageget;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.product.image.get')), array (  '_controller' => 'Thelia:Api\\Image:getImage',  'entity' => 'Product',));
                    }
                    not_apiproductimageget:

                    // api.product.image.update
                    if (preg_match('#^/api/products/(?P<entityId>\\d+)/images/(?P<imageId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_apiproductimageupdate;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.product.image.update')), array (  '_controller' => 'Thelia:Api\\Image:updateImage',  'entity' => 'Product',));
                    }
                    not_apiproductimageupdate:

                    // api.product.image.delete
                    if (preg_match('#^/api/products/(?P<entityId>\\d+)/images/(?P<imageId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_apiproductimagedelete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.product.image.delete')), array (  '_controller' => 'Thelia:Api\\Image:deleteImage',  'entity' => 'Product',));
                    }
                    not_apiproductimagedelete:

                    // api.product.image.create
                    if (preg_match('#^/api/products/(?P<entityId>\\d+)/images$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_apiproductimagecreate;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.product.image.create')), array (  '_controller' => 'Thelia:Api\\Image:createImage',  'entity' => 'Product',));
                    }
                    not_apiproductimagecreate:

                }

                if (0 === strpos($pathinfo, '/api/pse')) {
                    // api.product.pse.list
                    if (0 === strpos($pathinfo, '/api/pse/product') && preg_match('#^/api/pse/product/(?P<productId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_apiproductpselist;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.product.pse.list')), array (  '_controller' => 'Thelia:Api\\ProductSaleElements:list',));
                    }
                    not_apiproductpselist:

                    // api.product.pse.get
                    if (preg_match('#^/api/pse/(?P<pseId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_apiproductpseget;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.product.pse.get')), array (  '_controller' => 'Thelia:Api\\ProductSaleElements:getPse',));
                    }
                    not_apiproductpseget:

                    // api.product.pse.delete
                    if (preg_match('#^/api/pse/(?P<pseId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_apiproductpsedelete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.product.pse.delete')), array (  '_controller' => 'Thelia:Api\\ProductSaleElements:delete',));
                    }
                    not_apiproductpsedelete:

                    // api.product.pse.create
                    if ($pathinfo === '/api/pse') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_apiproductpsecreate;
                        }

                        return array (  '_controller' => 'Thelia:Api\\ProductSaleElements:create',  '_route' => 'api.product.pse.create',);
                    }
                    not_apiproductpsecreate:

                    // api.product.pse.update
                    if (preg_match('#^/api/pse(?:/(?P<pseId>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_apiproductpseupdate;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.product.pse.update')), array (  '_controller' => 'Thelia:Api\\ProductSaleElements:update',  'pseId' => '\\d+',));
                    }
                    not_apiproductpseupdate:

                }

            }

            if (0 === strpos($pathinfo, '/api/categories')) {
                // api.category.list
                if ($pathinfo === '/api/categories') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_apicategorylist;
                    }

                    return array (  '_controller' => 'Thelia:Api\\Category:list',  '_route' => 'api.category.list',);
                }
                not_apicategorylist:

                // api.category.get
                if (preg_match('#^/api/categories/(?P<entityId>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_apicategoryget;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.category.get')), array (  '_controller' => 'Thelia:Api\\Category:get',));
                }
                not_apicategoryget:

                // api.category.create
                if ($pathinfo === '/api/categories') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_apicategorycreate;
                    }

                    return array (  '_controller' => 'Thelia:Api\\Category:create',  '_route' => 'api.category.create',);
                }
                not_apicategorycreate:

                // api.category.update
                if ($pathinfo === '/api/categories') {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_apicategoryupdate;
                    }

                    return array (  '_controller' => 'Thelia:Api\\Category:update',  '_route' => 'api.category.update',);
                }
                not_apicategoryupdate:

                // api.category.delete
                if (preg_match('#^/api/categories/(?P<entityId>\\d+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_apicategorydelete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.category.delete')), array (  '_controller' => 'Thelia:Api\\Category:delete',));
                }
                not_apicategorydelete:

            }

            if (0 === strpos($pathinfo, '/api/tax-rules')) {
                // api.tax-rule.list
                if ($pathinfo === '/api/tax-rules') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_apitaxrulelist;
                    }

                    return array (  '_controller' => 'Thelia:Api\\TaxRule:list',  '_route' => 'api.tax-rule.list',);
                }
                not_apitaxrulelist:

                // api.tax-rule.get
                if (preg_match('#^/api/tax\\-rules/(?P<entityId>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_apitaxruleget;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.tax-rule.get')), array (  '_controller' => 'Thelia:Api\\TaxRule:get',));
                }
                not_apitaxruleget:

                // api.tax-rule.create
                if ($pathinfo === '/api/tax-rules') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_apitaxrulecreate;
                    }

                    return array (  '_controller' => 'Thelia:Api\\TaxRule:create',  '_route' => 'api.tax-rule.create',);
                }
                not_apitaxrulecreate:

                // api.tax-rule.update
                if ($pathinfo === '/api/tax-rules') {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_apitaxruleupdate;
                    }

                    return array (  '_controller' => 'Thelia:Api\\TaxRule:update',  '_route' => 'api.tax-rule.update',);
                }
                not_apitaxruleupdate:

                // api.tax-rule.delete
                if (preg_match('#^/api/tax\\-rules/(?P<entityId>\\d+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_apitaxruledelete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.tax-rule.delete')), array (  '_controller' => 'Thelia:Api\\TaxRule:delete',));
                }
                not_apitaxruledelete:

            }

            if (0 === strpos($pathinfo, '/api/attribute-avs')) {
                // api.attribute-av.list
                if ($pathinfo === '/api/attribute-avs') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_apiattributeavlist;
                    }

                    return array (  '_controller' => 'Thelia:Api\\AttributeAv:list',  '_route' => 'api.attribute-av.list',);
                }
                not_apiattributeavlist:

                // api.attribute-av.get
                if (preg_match('#^/api/attribute\\-avs/(?P<entityId>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_apiattributeavget;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.attribute-av.get')), array (  '_controller' => 'Thelia:Api\\AttributeAv:get',));
                }
                not_apiattributeavget:

            }

            if (0 === strpos($pathinfo, '/api/countries')) {
                // api.country.list
                if ($pathinfo === '/api/countries') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_apicountrylist;
                    }

                    return array (  '_controller' => 'Thelia:Api\\Country:list',  '_route' => 'api.country.list',);
                }
                not_apicountrylist:

                // api.country.get
                if (preg_match('#^/api/countries/(?P<entityId>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_apicountryget;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.country.get')), array (  '_controller' => 'Thelia:Api\\Country:get',));
                }
                not_apicountryget:

            }

            if (0 === strpos($pathinfo, '/api/taxes')) {
                // api.taxes.list
                if ($pathinfo === '/api/taxes') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_apitaxeslist;
                    }

                    return array (  '_controller' => 'Thelia:Api\\Tax:list',  '_route' => 'api.taxes.list',);
                }
                not_apitaxeslist:

                // api.taxes.get
                if (preg_match('#^/api/taxes/(?P<entityId>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_apitaxesget;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.taxes.get')), array (  '_controller' => 'Thelia:Api\\Tax:get',));
                }
                not_apitaxesget:

            }

            if (0 === strpos($pathinfo, '/api/languages')) {
                // api.language.list
                if ($pathinfo === '/api/languages') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_apilanguagelist;
                    }

                    return array (  '_controller' => 'Thelia:Api\\Lang:list',  '_route' => 'api.language.list',);
                }
                not_apilanguagelist:

                // api.language.get
                if (preg_match('#^/api/languages/(?P<entityId>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_apilanguageget;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.language.get')), array (  '_controller' => 'Thelia:Api\\Lang:get',));
                }
                not_apilanguageget:

            }

            if (0 === strpos($pathinfo, '/api/brands')) {
                // api.brand.list
                if ($pathinfo === '/api/brands') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_apibrandlist;
                    }

                    return array (  '_controller' => 'Thelia:Api\\Brand:list',  '_route' => 'api.brand.list',);
                }
                not_apibrandlist:

                // api.brand.get
                if (preg_match('#^/api/brands/(?P<entityId>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_apibrandget;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.brand.get')), array (  '_controller' => 'Thelia:Api\\Brand:get',));
                }
                not_apibrandget:

            }

            if (0 === strpos($pathinfo, '/api/currencies')) {
                // api.currency.list
                if ($pathinfo === '/api/currencies') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_apicurrencylist;
                    }

                    return array (  '_controller' => 'Thelia:Api\\Currency:list',  '_route' => 'api.currency.list',);
                }
                not_apicurrencylist:

                // api.currency.get
                if (preg_match('#^/api/currencies/(?P<entityId>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_apicurrencyget;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api.currency.get')), array (  '_controller' => 'Thelia:Api\\Currency:get',));
                }
                not_apicurrencyget:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
