<?php /* Smarty version Smarty-3.1.20, created on 2018-12-15 11:57:52
         compiled from "C:\wamp64\www\editorPlugin\thelia\local\modules\HookAdminHome\templates\backOffice\default\block-news-js.html" */ ?>
<?php /*%%SmartyHeaderCode:93195c14ec404da526-68368160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '540ee41757aff104b9c5d1b1402e41c2ffb15f3d' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\local\\modules\\HookAdminHome\\templates\\backOffice\\default\\block-news-js.html',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93195c14ec404da526-68368160',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c14ec404fe107_35112261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c14ec404fe107_35112261')) {function content_5c14ec404fe107_35112261($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'module'=>"HookAdminHome",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'module'=>"HookAdminHome",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<script>
    (function ($) {
        $(".feed-list").load("<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_viewurl'][0][0]->generateAdminViewUrlFunction(array('view'=>'ajax/thelia_news_feed'),$_smarty_tpl);?>
");
    }(jQuery));
</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'module'=>"HookAdminHome",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
