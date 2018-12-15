<?php /* Smarty version Smarty-3.1.20, created on 2018-12-15 16:01:06
         compiled from "C:\wamp64\www\editorPlugin\thelia\local\modules\HookNavigation\templates\frontOffice\default\main-footer-bottom.html" */ ?>
<?php /*%%SmartyHeaderCode:198965c1525429d0da2-86832623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e15e3ad7d830a23897281f32f20057f708d7f2d' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\local\\modules\\HookNavigation\\templates\\frontOffice\\default\\main-footer-bottom.html',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198965c1525429d0da2-86832623',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bottomFolderId' => 0,
    'URL' => 0,
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c1525429d5c63_81636719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1525429d5c63_81636719')) {function content_5c1525429d5c63_81636719($_smarty_tpl) {?><nav class="nav-footer" role="navigation">
    <ul class="list-unstyled list-inline">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"footer_links",'type'=>"content",'folder'=>$_smarty_tpl->tpl_vars['bottomFolderId']->value,'limit'=>4)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"footer_links",'type'=>"content",'folder'=>$_smarty_tpl->tpl_vars['bottomFolderId']->value,'limit'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li><a href="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['URL']->value,$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</a></li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"footer_links",'type'=>"content",'folder'=>$_smarty_tpl->tpl_vars['bottomFolderId']->value,'limit'=>4), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
</nav><?php }} ?>
