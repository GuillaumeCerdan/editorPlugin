<?php /* Smarty version Smarty-3.1.20, created on 2019-01-26 17:00:32
         compiled from "C:\wamp64\www\editorPlugin\thelia\local\modules\HookAdminHome\templates\backOffice\default\block-statistics.html" */ ?>
<?php /*%%SmartyHeaderCode:302945c4c92305794d3-38899884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67c20b5e18b4b5fddd91bce7cac4f1daba60f5d9' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\local\\modules\\HookAdminHome\\templates\\backOffice\\default\\block-statistics.html',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302945c4c92305794d3-38899884',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c4c9230581552_81844388',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4c9230581552_81844388')) {function content_5c4c9230581552_81844388($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'resource'=>"admin.order",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'resource'=>"admin.order",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  <div class="general-block-decorator dashboard">

    <div class="title title-without-tabs clearfix">
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Dashboard','d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>

      <div class="col-sm-2 input-group pull-right">
        <span id="span-calendar" class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
        <input type="text" class="form-control" id="date-picker">
        <span class="input-group-btn">
            <button type="button" class="form-control btn btn-default js-stats-refresh" data-month-offset="0"><span class="glyphicon glyphicon-refresh"></span></button>
        </span>
      </div>
    </div>

    <div class="text-center clearfix">
      <div class="btn-group">
        <button type="button" class="btn btn-default active" data-toggle="jqplot" data-target="sales"><span class="glyphicon glyphicon-euro"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Sales",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</button>
        <button type="button" class="btn btn-primary" data-toggle="jqplot" data-target="registration"><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"New customers",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</button>
        <button type="button" class="btn btn-success" data-toggle="jqplot" data-target="orders"><span class="glyphicon glyphicon-shopping-cart"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Orders",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</button>
        <button type="button" class="btn btn-info" data-toggle="jqplot" data-target="first-orders"><span class="glyphicon glyphicon-thumbs-up"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"First orders",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</button>
        <button type="button" class="btn btn-danger" data-toggle="jqplot" data-target="aborted-orders"><span class="glyphicon glyphicon-thumbs-down"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Aborted orders",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</button>
      </div>
    </div>

    <hr/>

    <div class="jqplot-content">
      <div id="jqplot"></div>
    </div>

  </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'resource'=>"admin.order",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
