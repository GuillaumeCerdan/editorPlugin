<?php /* Smarty version Smarty-3.1.20, created on 2019-01-26 17:00:43
         compiled from "8119b1d9cca5c6491b35e79a3285b5e9a78d5813" */ ?>
<?php /*%%SmartyHeaderCode:217155c4c923b688ec7-44131505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8119b1d9cca5c6491b35e79a3285b5e9a78d5813' => 
    array (
      0 => '8119b1d9cca5c6491b35e79a3285b5e9a78d5813',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '217155c4c923b688ec7-44131505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin_utilities_go_up_url' => 0,
    'admin_utilities_in_place_edit_class' => 0,
    'admin_utilities_object_id' => 0,
    'admin_utilities_current_position' => 0,
    'admin_utilities_go_down_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c4c923b68c111_63667408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4c923b68c111_63667408')) {function content_5c4c923b68c111_63667408($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['admin_utilities_go_up_url']->value;?>
" class="u-position-up"><i class="glyphicon glyphicon-arrow-up"></i></a>
<span class="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['admin_utilities_in_place_edit_class']->value,$_smarty_tpl);?>
" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['admin_utilities_object_id']->value,$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['admin_utilities_current_position']->value,$_smarty_tpl);?>
</span>
<a href="<?php echo $_smarty_tpl->tpl_vars['admin_utilities_go_down_url']->value;?>
" class="u-position-down"><i class="glyphicon glyphicon-arrow-down"></i></a><?php }} ?>
