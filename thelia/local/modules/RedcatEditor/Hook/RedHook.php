<?php
/*************************************************************************************/
/*      This file is part of the Thelia package.                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*      email : dev@thelia.net                                                       */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace RedcatEditor\Hook;

use Thelia\Core\Event\Hook\HookRenderEvent;
use Thelia\Core\Hook\BaseHook;

class RedHook extends BaseHook
{

    public function renderMenuItem(HookRenderEvent $event)
    {
        $event->add($this->render('back-menu-item.html'));
    }

    public function renderScriptLayout(HookRenderEvent $event)
    {
        $event->add($this->render('redcat-js.html'));
    }

}
