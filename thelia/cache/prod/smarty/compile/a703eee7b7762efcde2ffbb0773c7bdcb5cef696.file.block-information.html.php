<?php /* Smarty version Smarty-3.1.20, created on 2018-12-15 11:57:50
         compiled from "C:\wamp64\www\editorPlugin\thelia\local\modules\HookAdminHome\templates\backOffice\default\block-information.html" */ ?>
<?php /*%%SmartyHeaderCode:203485c14ec3ed41c67-90900198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a703eee7b7762efcde2ffbb0773c7bdcb5cef696' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\local\\modules\\HookAdminHome\\templates\\backOffice\\default\\block-information.html',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203485c14ec3ed41c67-90900198',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c14ec3eda0df5_70741203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c14ec3eda0df5_70741203')) {function content_5c14ec3eda0df5_70741203($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array("shop_information_block_content", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'resource'=>"admin.customer",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'resource'=>"admin.customer",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="stats col-md-2 col-xs-4">
            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/customers'),$_smarty_tpl);?>
">
                <h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['count'][0][0]->theliaCount(array('type'=>"customer",'current'=>"false",'backend_context'=>"1"),$_smarty_tpl);?>
</h2>
                <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Customers",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</p>
            </a>
        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'resource'=>"admin.customer",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'resource'=>"admin.category",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'resource'=>"admin.category",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="stats col-md-2 col-xs-4">
            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/catalog'),$_smarty_tpl);?>
">
                <h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['count'][0][0]->theliaCount(array('type'=>"category",'visible'=>"*",'backend_context'=>"1"),$_smarty_tpl);?>
</h2>
                <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Categories",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</p>
            </a>
        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'resource'=>"admin.category",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'resource'=>"admin.product",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'resource'=>"admin.product",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="stats col-md-2 col-xs-4">
            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/catalog'),$_smarty_tpl);?>
">
                <h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['count'][0][0]->theliaCount(array('type'=>"product",'visible'=>"*",'backend_context'=>"1"),$_smarty_tpl);?>
</h2>
                <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Products",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</p>
            </a>
        </div>
        <div class="stats col-md-2 col-xs-4">
            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/catalog'),$_smarty_tpl);?>
">
                <h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['count'][0][0]->theliaCount(array('type'=>"product",'visible'=>"true",'backend_context'=>"1"),$_smarty_tpl);?>
</h2>
                <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Online products",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</p>
            </a>
        </div>
        <div class="stats col-md-2 col-xs-4">
            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/catalog'),$_smarty_tpl);?>
">
                <h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['count'][0][0]->theliaCount(array('type'=>"product",'visible'=>"false",'backend_context'=>"1"),$_smarty_tpl);?>
</h2>
                <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Offline products",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</p>
            </a>
        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'resource'=>"admin.product",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'resource'=>"admin.order",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'resource'=>"admin.order",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="stats col-md-2 col-xs-4">
            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/orders'),$_smarty_tpl);?>
">
                <h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['count'][0][0]->theliaCount(array('type'=>"order",'status'=>"*",'customer'=>"*",'backend_context'=>"1"),$_smarty_tpl);?>
</h2>
                <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Orders",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</p>
            </a>
        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'resource'=>"admin.order",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (trim(Smarty::$_smarty_vars['capture']['shop_information_block_content'])!='') {?>
    <div class="general-block-decorator" id="block-information">
        <div class="row">
            <?php echo Smarty::$_smarty_vars['capture']['shop_information_block_content'];?>

        </div>
    </div>
<?php }?><?php }} ?>
