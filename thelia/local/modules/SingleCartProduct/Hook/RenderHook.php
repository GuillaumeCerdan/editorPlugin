<?php
namespace SingleCartProduct\Hook;

use Thelia\Core\Event\Hook\HookRenderEvent;
use Thelia\Core\Hook\BaseHook;

class RenderHook extends BaseHook
{
    
    public function renderJsLayout(HookRenderEvent $event)
    {
        $event->add($this->render('layoutinclude.html'));
    }

}
