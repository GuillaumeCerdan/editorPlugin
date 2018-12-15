<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * ProjectUrlMatcherHookAnalytics.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ProjectUrlMatcherHookAnalytics extends Symfony\Component\Routing\Matcher\UrlMatcher
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

        // hookanalytics.configuration
        if ($pathinfo === '/admin/module/hookanalytics/save') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_hookanalyticsconfiguration;
            }

            return array (  '_controller' => 'HookAnalytics\\Controller\\Configuration::saveAction',  '_route' => 'hookanalytics.configuration',);
        }
        not_hookanalyticsconfiguration:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
