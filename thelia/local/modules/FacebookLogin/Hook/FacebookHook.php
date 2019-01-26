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

namespace FacebookLogin\Hook;

use Thelia\Core\Event\Hook\HookRenderEvent;
use Thelia\Core\Hook\BaseHook;

class FacebookHook extends BaseHook
{

    public function renderLoginItem(HookRenderEvent $event)
    {
        $event->add($this->render('facebooklogin.html'));
    }
    
    public function renderScriptLogin(HookRenderEvent $event)
    {
        $event->add($this->render('logininclude.html'));
    }

}
