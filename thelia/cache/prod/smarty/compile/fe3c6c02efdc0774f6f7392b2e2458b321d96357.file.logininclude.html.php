<?php /* Smarty version Smarty-3.1.20, created on 2019-01-26 10:50:19
         compiled from "C:\wamp64\www\editorPlugin\thelia\local\modules\FacebookLogin\templates\frontOffice\default\logininclude.html" */ ?>
<?php /*%%SmartyHeaderCode:72925c4c3b6ba72b90-01292017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe3c6c02efdc0774f6f7392b2e2458b321d96357' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\local\\modules\\FacebookLogin\\templates\\frontOffice\\default\\logininclude.html',
      1 => 1545346149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72925c4c3b6ba72b90-01292017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'asset_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c4c3b6ba75b43_42319107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4c3b6ba75b43_42319107')) {function content_5c4c3b6ba75b43_42319107($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>"facebooklogin/assets/js/script.js",'source'=>"FacebookLogin")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>"facebooklogin/assets/js/script.js",'source'=>"FacebookLogin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>"facebooklogin/assets/js/script.js",'source'=>"FacebookLogin"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
