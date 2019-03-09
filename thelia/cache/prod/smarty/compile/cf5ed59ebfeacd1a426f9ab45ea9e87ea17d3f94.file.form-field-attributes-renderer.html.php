<?php /* Smarty version Smarty-3.1.20, created on 2019-01-26 17:00:44
         compiled from "C:\wamp64\www\editorPlugin\thelia\templates\backOffice\default\forms\standard\form-field-attributes-renderer.html" */ ?>
<?php /*%%SmartyHeaderCode:202335c4c923c401774-52062153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf5ed59ebfeacd1a426f9ab45ea9e87ea17d3f94' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\templates\\backOffice\\default\\forms\\standard\\form-field-attributes-renderer.html',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202335c4c923c401774-52062153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'checked' => 0,
    'field_value' => 0,
    'value' => 0,
    'label_attr' => 0,
    'form' => 0,
    'field_name' => 0,
    'value_key' => 0,
    'field_no_standard_classes' => 0,
    'disabled' => 0,
    'read_only' => 0,
    'max_length' => 0,
    'required' => 0,
    'name' => 0,
    'attr' => 0,
    'field_extra_class' => 0,
    'sDisabled' => 0,
    'sReadonly' => 0,
    'sRequired' => 0,
    'standardClass' => 0,
    'multiple' => 0,
    'attr_list' => 0,
    'sMaxLength' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c4c923c453fc8_02946664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4c923c453fc8_02946664')) {function content_5c4c923c453fc8_02946664($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['type']->value=='checkbox'||$_smarty_tpl->tpl_vars['type']->value=='radio') {?><?php if (($_smarty_tpl->tpl_vars['checked']->value==''||$_smarty_tpl->tpl_vars['checked']->value==null)&&isset($_smarty_tpl->tpl_vars['field_value']->value)&&$_smarty_tpl->tpl_vars['field_value']->value!==''&&$_smarty_tpl->tpl_vars['field_value']->value!==null) {?><?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable($_smarty_tpl->tpl_vars['field_value']->value!=0, null, 0);?><?php }?><?php } else { ?><?php if (($_smarty_tpl->tpl_vars['value']->value==''||$_smarty_tpl->tpl_vars['value']->value==null)&&isset($_smarty_tpl->tpl_vars['field_value']->value)&&$_smarty_tpl->tpl_vars['field_value']->value!==''&&$_smarty_tpl->tpl_vars['field_value']->value!==null) {?><?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['field_value']->value, null, 0);?><?php }?><?php }?><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
<?php $_tmp22=ob_get_clean();?><?php if (empty($_tmp22)) {?><?php $_smarty_tpl->createLocalArrayVariable('label_attr', null, 0);
$_smarty_tpl->tpl_vars['label_attr']->value['for'] = ((string)$_smarty_tpl->tpl_vars['form']->value->getName())."-id-".((string)$_smarty_tpl->tpl_vars['field_name']->value);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['value_key']->value)) {?><?php $_smarty_tpl->createLocalArrayVariable('label_attr', null, 0);
$_smarty_tpl->tpl_vars['label_attr']->value['for'] = ((string)$_smarty_tpl->tpl_vars['label_attr']->value['for'])."_".((string)$_smarty_tpl->tpl_vars['value_key']->value);?><?php }?><?php if ($_smarty_tpl->tpl_vars['field_no_standard_classes']->value) {?><?php $_smarty_tpl->tpl_vars['standardClass'] = new Smarty_variable('', null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['standardClass'] = new Smarty_variable('form-control', null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?><?php $_smarty_tpl->tpl_vars['sDisabled'] = new Smarty_variable('disabled', null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['read_only']->value) {?><?php $_smarty_tpl->tpl_vars['sRead_only'] = new Smarty_variable('readonly', null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['max_length']->value) {?><?php $_smarty_tpl->tpl_vars['sMaxLength'] = new Smarty_variable("maxlength=\"".((string)$_smarty_tpl->tpl_vars['max_length']->value)."\"", null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['required']->value) {?><?php $_smarty_tpl->tpl_vars['sRequired'] = new Smarty_variable('aria-required="true" required', null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['type']->value=='hidden') {?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['attr']->value,$_smarty_tpl);?>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='checkbox'||$_smarty_tpl->tpl_vars['type']->value=='radio') {?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['field_extra_class']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['checked']->value) {?>checked="checked"<?php }?> <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['sDisabled']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['sReadonly']->value,$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['sRequired']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['attr']->value;?>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='choice') {?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['standardClass']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['field_extra_class']->value,$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>multiple<?php }?> <?php if ($_smarty_tpl->tpl_vars['attr_list']->value['size']) {?>size="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['attr_list']->value['size'],$_smarty_tpl);?>
"<?php }?> <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['sDisabled']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['sReadonly']->value,$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['sRequired']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['attr']->value;?>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='collection') {?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
[]" class="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['standardClass']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['field_extra_class']->value,$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>multiple<?php }?> <?php if ($_smarty_tpl->tpl_vars['attr_list']->value['size']) {?>size="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['attr_list']->value['size'],$_smarty_tpl);?>
"<?php }?> <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['sDisabled']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['sReadonly']->value,$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['sRequired']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['attr']->value;?>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='textarea') {?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['standardClass']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['field_extra_class']->value,$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['attr_list']->value['rows']) {?>rows="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['attr_list']->value['rows'],$_smarty_tpl);?>
"<?php }?> <?php echo $_smarty_tpl->tpl_vars['sMaxLength']->value;?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['sDisabled']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['sReadonly']->value,$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['sRequired']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['attr']->value;?>
<?php } else { ?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" class="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['standardClass']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['field_extra_class']->value,$_smarty_tpl);?>
" <?php echo $_smarty_tpl->tpl_vars['sMaxLength']->value;?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['sDisabled']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['sReadonly']->value,$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['sRequired']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['attr']->value;?>
<?php }?><?php }} ?>
