<?php /* Smarty version Smarty-3.1.20, created on 2018-12-15 13:07:17
         compiled from "C:\wamp64\www\editorPlugin\thelia\local\modules\HookSearch\templates\frontOffice\default\main-navbar-secondary.html" */ ?>
<?php /*%%SmartyHeaderCode:136375c14fc8553d548-11486543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f78ce74fd7d6deb65ad0cf60d1d13b4ffe887e44' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\local\\modules\\HookSearch\\templates\\frontOffice\\default\\main-navbar-secondary.html',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136375c14fc8553d548-11486543',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c14fc85544c92_15081553',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c14fc85544c92_15081553')) {function content_5c14fc85544c92_15081553($_smarty_tpl) {?><div class="search-container navbar-form navbar-left">
    <form id="form-search" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/search"),$_smarty_tpl);?>
" method="get" role="search" aria-labelledby="search-label">
        <label id="search-label" class="sr-only" for="q"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Search a product",'d'=>"hooksearch.fo.default"),$_smarty_tpl);?>
</label>
        <input type="search" name="q" id="q" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Search...",'d'=>"hooksearch.fo.default"),$_smarty_tpl);?>
" class="form-control" autocomplete="off" aria-required="true" required pattern=".{2,}" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Minimum 2 characters.",'d'=>"hooksearch.fo.default"),$_smarty_tpl);?>
">
        
    </form>
</div><?php }} ?>
