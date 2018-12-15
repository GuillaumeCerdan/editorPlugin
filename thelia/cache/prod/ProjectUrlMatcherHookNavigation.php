<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * ProjectUrlMatcherHookNavigation.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ProjectUrlMatcherHookNavigation extends Symfony\Component\Routing\Matcher\UrlMatcher
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

        if (0 === strpos($pathinfo, '/admin/module/HookNavigation')) {
            // hooknavigation.configuration.default
            if ($pathinfo === '/admin/module/HookNavigation') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_hooknavigationconfigurationdefault;
                }

                return array (  '_controller' => 'HookNavigation:HookNavigationConfig:default',  '_route' => 'hooknavigation.configuration.default',);
            }
            not_hooknavigationconfigurationdefault:

            // hooknavigation.configuration.save
            if ($pathinfo === '/admin/module/HookNavigation') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_hooknavigationconfigurationsave;
                }

                return array (  '_controller' => 'HookNavigation:HookNavigationConfig:save',  '_route' => 'hooknavigation.configuration.save',);
            }
            not_hooknavigationconfigurationsave:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
