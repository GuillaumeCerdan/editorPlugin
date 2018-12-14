<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * ProjectUrlMatcherHookSocial.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ProjectUrlMatcherHookSocial extends Symfony\Component\Routing\Matcher\UrlMatcher
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

        // hooksocial.configuration
        if ($pathinfo === '/admin/module/hooksocial/save') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_hooksocialconfiguration;
            }

            return array (  '_controller' => 'HookSocial\\Controller\\Configuration::saveAction',  '_route' => 'hooksocial.configuration',);
        }
        not_hooksocialconfiguration:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
