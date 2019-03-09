<?php /* Smarty version Smarty-3.1.20, created on 2019-01-26 17:00:32
         compiled from "C:\wamp64\www\editorPlugin\thelia\local\modules\HookAdminHome\templates\backOffice\default\block-month-sales-statistics.html" */ ?>
<?php /*%%SmartyHeaderCode:234925c4c9230848260-55385396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '135d64692350c6b7140071374701d261a53d6829' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\local\\modules\\HookAdminHome\\templates\\backOffice\\default\\block-month-sales-statistics.html',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234925c4c9230848260-55385396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SYMBOL' => 0,
    'startDate' => 0,
    'prevMonthStartDate' => 0,
    'prevMonthEndDate' => 0,
    'endDate' => 0,
    'defaultCurrency' => 0,
    'salesNoShipping' => 0,
    'orderCount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c4c9230862687_70132734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4c9230862687_70132734')) {function content_5c4c9230862687_70132734($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"currency",'name'=>"default-currency",'default_only'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"default-currency",'default_only'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->tpl_vars['defaultCurrency'] = new Smarty_variable($_smarty_tpl->tpl_vars['SYMBOL']->value, null, 0);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"default-currency",'default_only'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (empty($_smarty_tpl->tpl_vars['startDate']->value)) {?><?php $_smarty_tpl->tpl_vars['startDate'] = new Smarty_variable('this_month', null, 0);?><?php }?>
<?php if (empty($_smarty_tpl->tpl_vars['startDate']->value)) {?><?php $_smarty_tpl->tpl_vars['startDate'] = new Smarty_variable('this_month', null, 0);?><?php }?>

<?php if (empty($_smarty_tpl->tpl_vars['prevMonthStartDate']->value)) {?><?php $_smarty_tpl->tpl_vars['prevMonthStartDate'] = new Smarty_variable('last_month', null, 0);?><?php }?>
<?php if (empty($_smarty_tpl->tpl_vars['prevMonthEndDate']->value)) {?><?php $_smarty_tpl->tpl_vars['prevMonthEndDate'] = new Smarty_variable('last_month', null, 0);?><?php }?>

<div class="table-responsive">
    <table class="table table-striped">
        <tbody>
        <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Overall sales",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
            <td><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"sales",'startDate'=>$_smarty_tpl->tpl_vars['startDate']->value,'endDate'=>$_smarty_tpl->tpl_vars['endDate']->value),$_smarty_tpl);?>
<?php $_tmp20=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_tmp20,'symbol'=>$_smarty_tpl->tpl_vars['defaultCurrency']->value),$_smarty_tpl);?>
</td>
        </tr>
        <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Sales excluding shipping",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
            <td>
                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"sales",'startDate'=>$_smarty_tpl->tpl_vars['startDate']->value,'endDate'=>$_smarty_tpl->tpl_vars['endDate']->value,'includeShipping'=>"false"),$_smarty_tpl);?>
<?php $_tmp21=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['salesNoShipping'] = new Smarty_variable($_tmp21, null, 0);?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_smarty_tpl->tpl_vars['salesNoShipping']->value,'symbol'=>$_smarty_tpl->tpl_vars['defaultCurrency']->value),$_smarty_tpl);?>

            </td>
        </tr>
        <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Previous month sales",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
            <td><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"sales",'startDate'=>$_smarty_tpl->tpl_vars['prevMonthStartDate']->value,'endDate'=>$_smarty_tpl->tpl_vars['prevMonthEndDate']->value),$_smarty_tpl);?>
<?php $_tmp22=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_tmp22,'symbol'=>$_smarty_tpl->tpl_vars['defaultCurrency']->value),$_smarty_tpl);?>
</td>
        </tr>
        <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Orders",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
            <td>
                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"orders",'startDate'=>$_smarty_tpl->tpl_vars['startDate']->value,'endDate'=>$_smarty_tpl->tpl_vars['endDate']->value),$_smarty_tpl);?>
<?php $_tmp23=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['orderCount'] = new Smarty_variable($_tmp23, null, 0);?>
                <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['orderCount']->value,$_smarty_tpl);?>

            </td>
        </tr>
        <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Average cart",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['orderCount']->value==0) {?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>0,'symbol'=>$_smarty_tpl->tpl_vars['defaultCurrency']->value),$_smarty_tpl);?>

                <?php } else { ?>
                    <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(round(($_smarty_tpl->tpl_vars['salesNoShipping']->value/$_smarty_tpl->tpl_vars['orderCount']->value),"2"),$_smarty_tpl);?>
<?php $_tmp24=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_tmp24,'symbol'=>$_smarty_tpl->tpl_vars['defaultCurrency']->value),$_smarty_tpl);?>

                <?php }?>
            </td>
        </tr>
        </tbody>
    </table>
</div><?php }} ?>
