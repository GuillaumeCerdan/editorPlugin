<?php /* Smarty version Smarty-3.1.20, created on 2019-01-26 17:00:44
         compiled from "C:\wamp64\www\editorPlugin\thelia\templates\backOffice\default\includes\generic-create-dialog.html" */ ?>
<?php /*%%SmartyHeaderCode:274395c4c923cb13ce6-69689762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13d4d4c5d2b273884f84fbbc7cceef1cb005ed5c' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\templates\\backOffice\\default\\includes\\generic-create-dialog.html',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274395c4c923cb13ce6-69689762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_error_message' => 0,
    'dialog_id' => 0,
    'dialog_title' => 0,
    'form_action' => 0,
    'form_enctype' => 0,
    'form_attributes' => 0,
    'dialog_body' => 0,
    'dialog_cancel_label' => 0,
    'ok_button_id' => 0,
    'dialog_ok_label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c4c923cb225b5_39550072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4c923cb225b5_39550072')) {function content_5c4c923cb225b5_39550072($_smarty_tpl) {?>
<div class="modal fade <?php if (!empty($_smarty_tpl->tpl_vars['form_error_message']->value)) {?>modal-force-show<?php }?>" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['dialog_id']->value,$_smarty_tpl);?>
" tabindex="-1" <?php if (empty($_smarty_tpl->tpl_vars['form_error_message']->value)) {?>aria-hidden="true"<?php } else { ?>aria-hidden="false"<?php }?>>

    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3><?php echo $_smarty_tpl->tpl_vars['dialog_title']->value;?>
</h3>
            </div>

            <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['form_enctype']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['form_attributes']->value;?>
>

                <div class="modal-body">
                    <?php if (!empty($_smarty_tpl->tpl_vars['form_error_message']->value)) {?><div class="alert alert-danger" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['dialog_id']->value,$_smarty_tpl);?>
_error"><?php echo $_smarty_tpl->tpl_vars['form_error_message']->value;?>
</div><?php }?>

                    <?php echo $_smarty_tpl->tpl_vars['dialog_body']->value;?>

                </div>

	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span> <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Cancel'),$_smarty_tpl);?>
<?php $_tmp24=ob_get_clean();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape((($tmp = @$_smarty_tpl->tpl_vars['dialog_cancel_label']->value)===null||$tmp==='' ? $_tmp24 : $tmp),$_smarty_tpl);?>
</button>
                    <button <?php if (!empty($_smarty_tpl->tpl_vars['ok_button_id']->value)) {?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ok_button_id']->value,$_smarty_tpl);?>
"<?php }?> type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'OK'),$_smarty_tpl);?>
<?php $_tmp25=ob_get_clean();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape((($tmp = @$_smarty_tpl->tpl_vars['dialog_ok_label']->value)===null||$tmp==='' ? $_tmp25 : $tmp),$_smarty_tpl);?>
</button>
	            </div>

            </form>
        </div>
    </div>
</div>
<?php }} ?>
