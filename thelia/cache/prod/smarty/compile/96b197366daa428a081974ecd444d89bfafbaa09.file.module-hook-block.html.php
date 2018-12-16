<?php /* Smarty version Smarty-3.1.20, created on 2018-12-16 16:47:47
         compiled from "C:\wamp64\www\editorPlugin\thelia\templates\backOffice\default\includes\module-hook-block.html" */ ?>
<?php /*%%SmartyHeaderCode:6355c1681b3a5e565-83877227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96b197366daa428a081974ecd444d89bfafbaa09' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\templates\\backOffice\\default\\includes\\module-hook-block.html',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6355c1681b3a5e565-83877227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hook_id' => 0,
    'lang_id' => 0,
    'MODULE_ACTIVE' => 0,
    'HOOK_ACTIVE' => 0,
    'ACTIVE' => 0,
    'visible' => 0,
    'MODULE_ID' => 0,
    'ID' => 0,
    'MODULE_TITLE' => 0,
    'MODULE_CODE' => 0,
    'by_module' => 0,
    'TITLE' => 0,
    'POSITION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c1681b3a84e57_76170943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1681b3a84e57_76170943')) {function content_5c1681b3a84e57_76170943($_smarty_tpl) {?><div class="hook-modules table-responsive">
    <table class="table table-striped table-condensed table-left-aligned">
        <thead>
            <tr>
                <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'ID'),$_smarty_tpl);?>
</th>
                <th> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Module name'),$_smarty_tpl);?>
</th>
                <th> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Module code'),$_smarty_tpl);?>
</th>
                <th class="text-center"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Enable/Disable'),$_smarty_tpl);?>
</th>
                <th class="text-center"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Position'),$_smarty_tpl);?>
</th>
                <th class="text-center"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Action'),$_smarty_tpl);?>
</th>
            </tr>
        </thead>
        <tbody>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"module_hook",'name'=>"hook.".((string)$_smarty_tpl->tpl_vars['hook_id']->value),'hook'=>((string)$_smarty_tpl->tpl_vars['hook_id']->value),'backend_context'=>1,'lang'=>$_smarty_tpl->tpl_vars['lang_id']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"module_hook",'name'=>"hook.".((string)$_smarty_tpl->tpl_vars['hook_id']->value),'hook'=>((string)$_smarty_tpl->tpl_vars['hook_id']->value),'backend_context'=>1,'lang'=>$_smarty_tpl->tpl_vars['lang_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['MODULE_ACTIVE']->value&&$_smarty_tpl->tpl_vars['HOOK_ACTIVE']->value) {?><?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value) {?><?php echo "1";?><?php } else { ?><?php echo "0";?><?php }?><?php } else { ?><?php echo "0";?><?php }?><?php $_tmp20=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["visible"] = new Smarty_variable($_tmp20, null, 0);?>
            <tr class="hook-module <?php if (!$_smarty_tpl->tpl_vars['MODULE_ACTIVE']->value) {?>inactive<?php }?>"
                data-visible="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['visible']->value,$_smarty_tpl);?>
"
                data-active="<?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value) {?>1<?php } else { ?>0<?php }?>"
                data-hook-active="<?php if ($_smarty_tpl->tpl_vars['HOOK_ACTIVE']->value) {?>1<?php } else { ?>0<?php }?>"
                data-module-active="<?php if ($_smarty_tpl->tpl_vars['MODULE_ACTIVE']->value) {?>1<?php } else { ?>0<?php }?>"
                data-module-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['MODULE_ID']->value,$_smarty_tpl);?>
"
                >
                <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
</td>
                <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['MODULE_TITLE']->value,$_smarty_tpl);?>
</td>
                <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['MODULE_CODE']->value,$_smarty_tpl);?>
</td>
                <td class="text-center">
                    <?php if (!$_smarty_tpl->tpl_vars['by_module']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['MODULE_ACTIVE']->value&&$_smarty_tpl->tpl_vars['HOOK_ACTIVE']->value&&!$_smarty_tpl->tpl_vars['by_module']->value) {?>
                        <div class="make-switch switch-small module-hook-activation" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" data-on="success" data-off="danger" data-on-label="<i class='glyphicon glyphicon-ok-circle'></i>" data-off-label="<i class='glyphicon glyphicon-remove-circle'></i>">
                            <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value) {?>checked<?php }?>>
                        </div>
                        <noscript>
                            <?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value) {?>
                            <a title="<?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
<?php $_tmp21=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Deactivate hook",'title'=>$_tmp21),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/module-hooks/toggle-activation/%id",'id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"deactivation"),$_smarty_tpl);?>
</a>
                            <?php } else { ?>
                            <a title="<?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
<?php $_tmp22=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"activate hook",'title'=>$_tmp22),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/module-hooks/toggle-activation/%id",'id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"activation"),$_smarty_tpl);?>
</a>
                            <?php }?>
                        </noscript>
                        <?php } else { ?>
                            <i class='glyphicon glyphicon-remove-circle'> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"deactivated"),$_smarty_tpl);?>

                        <?php }?>
                    <?php } else { ?>
                        -
                    <?php }?>
                </td>
                <td class="text-center">
                    <?php if (!$_smarty_tpl->tpl_vars['by_module']->value) {?>
                        <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"admin/module-hooks/update-position"),$_smarty_tpl);?>
<?php $_tmp23=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_position_block'][0][0]->generatePositionChangeBlock(array('resource'=>"admin.hooks",'access'=>"UPDATE",'path'=>$_tmp23,'url_parameter'=>"module_hook_id",'in_place_edit_class'=>"moduleHookPositionChange",'position'=>$_smarty_tpl->tpl_vars['POSITION']->value,'id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>

                    <?php } else { ?>
                    -
                    <?php }?>
                </td>
                <td class="actions">
                    <div class="btn-toolbar btn toolbar-primary">
                        <span class="glyphicon glyphicon-cog"></span>
                    </div>
                    <div class="toolbar-options hidden">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.module-hook",'access'=>"UPDATE")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.module-hook",'access'=>"UPDATE"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <a class="module-hook-change" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Change this hook'),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/module-hook/update/%id",'id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.module-hook",'access'=>"UPDATE"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_delete",'role'=>"ADMIN",'resource'=>"admin.module-hook",'access'=>"DELETE")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_delete",'role'=>"ADMIN",'resource'=>"admin.module-hook",'access'=>"DELETE"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <a class="module-hook-delete" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Delete this hook'),$_smarty_tpl);?>
" href="#delete_module_dialog" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" data-toggle="modal">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_delete",'role'=>"ADMIN",'resource'=>"admin.module-hook",'access'=>"DELETE"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                </td>
            </tr>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"module_hook",'name'=>"hook.".((string)$_smarty_tpl->tpl_vars['hook_id']->value),'hook'=>((string)$_smarty_tpl->tpl_vars['hook_id']->value),'backend_context'=>1,'lang'=>$_smarty_tpl->tpl_vars['lang_id']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"hook.".((string)$_smarty_tpl->tpl_vars['hook_id']->value))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"hook.".((string)$_smarty_tpl->tpl_vars['hook_id']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <tr>
                <td colspan="5">No modules hooked here</td>
            </tr>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"hook.".((string)$_smarty_tpl->tpl_vars['hook_id']->value)), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </tbody>
    </table>
</div>
<?php }} ?>
