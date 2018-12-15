<?php /* Smarty version Smarty-3.1.20, created on 2018-12-15 11:57:51
         compiled from "C:\wamp64\www\editorPlugin\thelia\local\modules\HookAdminHome\templates\backOffice\default\block-sales-statistics.html" */ ?>
<?php /*%%SmartyHeaderCode:185225c14ec3f88a7b1-41122036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a1d3a271eafdab0214f2786f88f6db0369d54ee' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\local\\modules\\HookAdminHome\\templates\\backOffice\\default\\block-sales-statistics.html',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185225c14ec3f88a7b1-41122036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SYMBOL' => 0,
    'defaultCurrency' => 0,
    'salesNoShipping' => 0,
    'orderCount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c14ec3f8cec83_43678681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c14ec3f8cec83_43678681')) {function content_5c14ec3f8cec83_43678681($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'resource'=>"admin.order",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'resource'=>"admin.order",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <ul class="nav nav-tabs nav-justified">
        <li class="active"><a href="#statjour" id="statjour_label"
                              data-toggle="tab"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Today",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</a></li>
        <li><a href="#statmois" id="statmois_label"
               data-toggle="tab"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"This month",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</a></li>
        <li><a href="#statannee" id="statannee_label"
               data-toggle="tab"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"This year",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</a></li>
    </ul>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"currency",'name'=>"default-currency",'default_only'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"default-currency",'default_only'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->tpl_vars['defaultCurrency'] = new Smarty_variable($_smarty_tpl->tpl_vars['SYMBOL']->value, null, 0);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"default-currency",'default_only'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <div class="tab-content">
        <div class="tab-pane fade active in" id="statjour">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Overall sales",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
                        <td><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"sales",'startDate'=>"today",'endDate'=>"today"),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_tmp10,'symbol'=>$_smarty_tpl->tpl_vars['defaultCurrency']->value),$_smarty_tpl);?>
</td>
                    </tr>
                    <tr>
                        <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Sales excluding shipping",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
                        <td>
                            <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"sales",'startDate'=>"today",'endDate'=>"today",'includeShipping'=>"false"),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['salesNoShipping'] = new Smarty_variable($_tmp11, null, 0);?>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_smarty_tpl->tpl_vars['salesNoShipping']->value,'symbol'=>$_smarty_tpl->tpl_vars['defaultCurrency']->value),$_smarty_tpl);?>

                        </td>
                    </tr>
                    <tr>
                        <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Yesterday sales",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
                        <td><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"sales",'startDate'=>"yesterday",'endDate'=>"yesterday"),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_tmp12,'symbol'=>$_smarty_tpl->tpl_vars['defaultCurrency']->value),$_smarty_tpl);?>
</td>
                    </tr>
                    <tr>
                        <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Orders",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
                        <td>
                            <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"orders",'startDate'=>"today",'endDate'=>"today"),$_smarty_tpl);?>
<?php $_tmp13=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['orderCount'] = new Smarty_variable($_tmp13, null, 0);?>
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
<?php $_tmp14=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_tmp14,'symbol'=>$_smarty_tpl->tpl_vars['defaultCurrency']->value),$_smarty_tpl);?>

                            <?php }?>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="tab-pane fade" id="statmois">
            <?php echo $_smarty_tpl->getSubTemplate ("block-month-sales-statistics.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>

        <div class="tab-pane fade" id="statannee">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Overall sales",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
                        <td><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"sales",'startDate'=>"this_year",'endDate'=>"this_year"),$_smarty_tpl);?>
<?php $_tmp15=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_tmp15,'symbol'=>$_smarty_tpl->tpl_vars['defaultCurrency']->value),$_smarty_tpl);?>
</td>
                    </tr>
                    <tr>
                        <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Sales excluding shipping",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
                        <td>
                            <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"sales",'startDate'=>"this_year",'endDate'=>"this_year",'includeShipping'=>"false"),$_smarty_tpl);?>
<?php $_tmp16=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['salesNoShipping'] = new Smarty_variable($_tmp16, null, 0);?>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_smarty_tpl->tpl_vars['salesNoShipping']->value,'symbol'=>$_smarty_tpl->tpl_vars['defaultCurrency']->value),$_smarty_tpl);?>

                        </td>
                    </tr>
                    <tr>
                        <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Previous year sales",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
                        <td><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"sales",'startDate'=>"last_year",'endDate'=>"last_year"),$_smarty_tpl);?>
<?php $_tmp17=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_tmp17,'symbol'=>$_smarty_tpl->tpl_vars['defaultCurrency']->value),$_smarty_tpl);?>
</td>
                    </tr>
                    <tr>
                        <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Orders",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
                        <td>
                            <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stats'][0][0]->statsAccess(array('key'=>"orders",'startDate'=>"this_year",'endDate'=>"this_year"),$_smarty_tpl);?>
<?php $_tmp18=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['orderCount'] = new Smarty_variable($_tmp18, null, 0);?>
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
<?php $_tmp19=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_tmp19,'symbol'=>$_smarty_tpl->tpl_vars['defaultCurrency']->value),$_smarty_tpl);?>

                            <?php }?>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'resource'=>"admin.order",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
