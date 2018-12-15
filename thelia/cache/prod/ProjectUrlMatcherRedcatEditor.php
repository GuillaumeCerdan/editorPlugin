<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * ProjectUrlMatcherRedcatEditor.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ProjectUrlMatcherRedcatEditor extends Symfony\Component\Routing\Matcher\UrlMatcher
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

        if (0 === strpos($pathinfo, '/admin/redcat')) {
            // redcateditor.save
            if ($pathinfo === '/admin/redcat/save') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_redcateditorsave;
                }

                return array (  '_controller' => 'RedcatEditor:RedcatEditor:save',  '_route' => 'redcateditor.save',);
            }
            not_redcateditorsave:

            // redcateditor.read
            if ($pathinfo === '/admin/redcat/read') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_redcateditorread;
                }

                return array (  '_controller' => 'RedcatEditor:RedcatEditor:read',  '_route' => 'redcateditor.read',);
            }
            not_redcateditorread:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
