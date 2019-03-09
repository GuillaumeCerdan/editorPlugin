<?php /* Smarty version Smarty-3.1.20, created on 2019-01-26 16:57:09
         compiled from "C:\wamp64\www\editorPlugin\thelia\local\modules\HookNewsletter\templates\frontOffice\default\main-footer-body.html" */ ?>
<?php /*%%SmartyHeaderCode:71615c4c9165300877-25421014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9375a51bad747b771e073176996b9879928b5990' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\local\\modules\\HookNewsletter\\templates\\frontOffice\\default\\main-footer-body.html',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71615c4c9165300877-25421014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label_attr' => 0,
    'name' => 0,
    'required' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c4c916530bab7_80293313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4c916530bab7_80293313')) {function content_5c4c916530bab7_80293313($_smarty_tpl) {?><p id="newsletter-describe"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Sign up to receive our latest news.",'d'=>"hooknewsletter.fo.default"),$_smarty_tpl);?>
</p>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"thelia.front.newsletter")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.front.newsletter"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<form id="form-newsletter-mini" class="form-inline" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/newsletter"),$_smarty_tpl);?>
" method="post">
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_hidden_fields'][0][0]->renderHiddenFormField(array(),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('field'=>"email")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('field'=>"email"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="form-group">
    <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
-mini" class="sr-only"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Email address",'d'=>"hooknewsletter.fo.default"),$_smarty_tpl);?>
</label>
    <input type="email" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
-mini" class="form-control" maxlength="255" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Your email address",'d'=>"hooknewsletter.fo.default"),$_smarty_tpl);?>
" aria-describedby="newsletter-describe" <?php if ($_smarty_tpl->tpl_vars['required']->value) {?> aria-required="true" required<?php }?> autocomplete="off">
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('field'=>"email"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<button type="submit" class="btn btn-subscribe btn-primary"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Subscribe",'d'=>"hooknewsletter.fo.default"),$_smarty_tpl);?>
</button>
</form>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.front.newsletter"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
