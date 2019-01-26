<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * ProjectUrlMatcherFacebookLogin.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ProjectUrlMatcherFacebookLogin extends Symfony\Component\Routing\Matcher\UrlMatcher
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

        // facebooklogin.login
        if ($pathinfo === '/facebook/login') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_facebookloginlogin;
            }

            return array (  '_controller' => 'FacebookLogin:FacebookLogin:login',  '_route' => 'facebooklogin.login',);
        }
        not_facebookloginlogin:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
