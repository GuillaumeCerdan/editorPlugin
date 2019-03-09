<?php /* Smarty version Smarty-3.1.20, created on 2019-01-26 16:57:09
         compiled from "C:\wamp64\www\editorPlugin\thelia\local\modules\FacebookLogin\templates\frontOffice\default\facebooklogin.html" */ ?>
<?php /*%%SmartyHeaderCode:115175c4c9165006ae2-68817285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6db40a57555037e7683130d520f1e5a850dc00b5' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\local\\modules\\FacebookLogin\\templates\\frontOffice\\default\\facebooklogin.html',
      1 => 1545569486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115175c4c9165006ae2-68817285',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c4c9165007de3_74248845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4c9165007de3_74248845')) {function content_5c4c9165007de3_74248845($_smarty_tpl) {?><div class="fb-login-button" data-scope="email,user_birthday,last_name"
 data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="false"></div>
 <a onclick="logout();">Logout</a> 

<div id="status">
</div><?php }} ?>
