<?php /* Smarty version Smarty-3.1.20, created on 2018-12-15 15:32:13
         compiled from "C:\wamp64\www\editorPlugin\thelia\local\modules\RedcatEditor\templates\frontOffice\default\redcat-js.html" */ ?>
<?php /*%%SmartyHeaderCode:298725c151e7df2f2f6-83276441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70804125d08f1dde2acea9a21316751974b035df' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\local\\modules\\RedcatEditor\\templates\\frontOffice\\default\\redcat-js.html',
      1 => 1544887611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298725c151e7df2f2f6-83276441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'asset_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c151e7df328a8_41534780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c151e7df328a8_41534780')) {function content_5c151e7df328a8_41534780($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>"redcat/assets/js/script.js",'source'=>"RedcatEditor")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>"redcat/assets/js/script.js",'source'=>"RedcatEditor"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>"redcat/assets/js/script.js",'source'=>"RedcatEditor"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>