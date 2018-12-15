<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * ProjectUrlMatcherHookAdminHome.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ProjectUrlMatcherHookAdminHome extends Symfony\Component\Routing\Matcher\UrlMatcher
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
            if (0 === strpos($pathinfo, '/admin/home')) {
                // admin.home.stats
                if ($pathinfo === '/admin/home/stats') {
                    return array (  '_controller' => 'HookAdminHome\\Controller\\HomeController::loadStatsAjaxAction',  '_route' => 'admin.home.stats',);
                }

                // admin.home.month.sales.block
                if (0 === strpos($pathinfo, '/admin/home/month-sales-block') && preg_match('#^/admin/home/month\\-sales\\-block/(?P<month>\\d+)/(?P<year>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.home.month.sales.block')), array (  '_controller' => 'HookAdminHome\\Controller\\HomeController::blockMonthSalesStatistics',));
                }

            }

            // admin.news-feed
            if ($pathinfo === '/admin/ajax/thelia_news_feed') {
                return array (  '_controller' => 'HookAdminHome\\Controller\\HomeController::processTemplateAction',  'template' => 'ajax/thelia_news_feed',  'not-logged' => '1',  '_route' => 'admin.news-feed',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
