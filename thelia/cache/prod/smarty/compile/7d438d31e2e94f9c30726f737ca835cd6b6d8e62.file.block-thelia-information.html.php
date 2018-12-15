<?php /* Smarty version Smarty-3.1.20, created on 2018-12-15 11:57:51
         compiled from "C:\wamp64\www\editorPlugin\thelia\local\modules\HookAdminHome\templates\backOffice\default\block-thelia-information.html" */ ?>
<?php /*%%SmartyHeaderCode:264975c14ec3ff22396-28454002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d438d31e2e94f9c30726f737ca835cd6b6d8e62' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\local\\modules\\HookAdminHome\\templates\\backOffice\\default\\block-thelia-information.html',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '264975c14ec3ff22396-28454002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'THELIA_VERSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c14ec3ff3c408_88733728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c14ec3ff3c408_88733728')) {function content_5c14ec3ff3c408_88733728($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'module'=>"HookAdminHome",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'module'=>"HookAdminHome",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="table-responsive">
  <table class="table table-striped">
    <tbody>
    <tr>
      <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Current version",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</th>
      <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['THELIA_VERSION']->value,$_smarty_tpl);?>
</td>
    </tr>
    <tr>
      <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Latest version available"),$_smarty_tpl);?>
</th>
      <td><a href="http://thelia.net/#download" id="latest-thelia-version"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Loading...",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</a></td>
    </tr>
    <tr>
      <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"News"),$_smarty_tpl);?>
</th>
      <td><a href="http://thelia.net/blog" target="_blank"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Click here",'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</a></td>
    </tr>
    </tbody>
  </table>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_view",'role'=>"ADMIN",'module'=>"HookAdminHome",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
