<?php
/*************************************************************************************/

namespace FacebookLogin;

use Propel\Runtime\Connection\ConnectionInterface;
use Thelia\Module\BaseModule;
require_once __DIR__ . '/Facebook/autoload.php';

class FacebookLogin extends BaseModule
{
    const MESSAGE_DOMAIN = "facebookLogin";

    private static function getFBConst (){
        $app_clientId = "371201160320541";
        $app_clientSecret = "73393528dba1ab8cd0ffb7afd1cb1fc1";
        return array("appId"=>$app_clientId, "appSecret"=>$app_clientSecret);
    }

    public static function getScriptPath()
    {
        return __DIR__.DS."templates".DS."frontOffice".DS."default".DS.
            "facebooklogin".DS."assets".DS."js".DS."script.js";
    }

    private static function getFB(){
        
        $fb = new \Facebook\Facebook([
            'app_id' => FacebookLogin::getFBConst()["appId"],
            'app_secret' => FacebookLogin::getFBConst()["appSecret"],
            'default_graph_version' => 'v2.10',
        ]);

        return $fb;
    }

    public static function logout(){
        $fb = FacebookLogin::getFB();
        $fb->getLogoutUrl();
    }

    public static function facebookProcess($accessToken){

        $fb = FacebookLogin::getFB();

        try{
            $oauth = $fb->getOAuth2Client();
            $meta = $oauth->debugToken($accessToken);
            $meta->validateAppId(FacebookLogin::getFBConst()["appId"]);

            if($meta->getIsValid()){
                $fb->setDefaultAccessToken($accessToken);

                $response = $fb->get('/me?fields=email');
                $userNode = $response->getGraphUser();

                $user_email = $userNode->getField('email');

                return $user_email;

            }else{
                return false;
            }

        } catch(Exception $e){
            return false;
        }
    }

}
