<?php
/*************************************************************************************/

namespace RedcatEditor;

use Propel\Runtime\Connection\ConnectionInterface;
use Thelia\Module\BaseModule;

class RedcatEditor extends BaseModule
{

    const MESSAGE_DOMAIN = "redcateditor";
    public static function getScriptPath()
    {
        return __DIR__.DS."templates".DS."frontOffice".DS."default".DS.
            "redcat".DS."assets".DS."js".DS."script.js";
    }

}
