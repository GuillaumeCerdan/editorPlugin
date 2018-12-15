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

        // redcateditor.save
        if ($pathinfo === '/admin/redcat/save') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_redcateditorsave;
            }

            return array (  '_controller' => 'RedcatEditor:RedcatEditor:save',  '_route' => 'redcateditor.save',);
        }
        not_redcateditorsave:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
