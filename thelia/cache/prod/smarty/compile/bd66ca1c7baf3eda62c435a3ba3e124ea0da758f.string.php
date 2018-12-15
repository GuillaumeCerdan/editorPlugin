<?php /* Smarty version Smarty-3.1.20, created on 2018-12-15 12:12:29
         compiled from "bd66ca1c7baf3eda62c435a3ba3e124ea0da758f" */ ?>
<?php /*%%SmartyHeaderCode:275225c14efad019d12-69350090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd66ca1c7baf3eda62c435a3ba3e124ea0da758f' => 
    array (
      0 => 'bd66ca1c7baf3eda62c435a3ba3e124ea0da758f',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '275225c14efad019d12-69350090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin_utilities_sort_direction' => 0,
    'admin_utilities_sorting_url' => 0,
    'admin_utilities_header_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c14efad01d818_67358184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c14efad01d818_67358184')) {function content_5c14efad01d818_67358184($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['admin_utilities_sort_direction']->value=='up') {?>
    <i class="glyphicon glyphicon-chevron-up"></i>
<?php } elseif ($_smarty_tpl->tpl_vars['admin_utilities_sort_direction']->value=='down') {?>
    <i class="glyphicon glyphicon-chevron-down"></i>
<?php }?>
<a href="<?php echo $_smarty_tpl->tpl_vars['admin_utilities_sorting_url']->value;?>
" class="u-sort-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['admin_utilities_sort_direction']->value,$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['admin_utilities_header_text']->value,$_smarty_tpl);?>
</a><?php }} ?>
