<?php /* Smarty version Smarty-3.1.20, created on 2019-01-26 17:00:43
         compiled from "ecc9f6dcb85b5d0eece147e1722533253cf07f16" */ ?>
<?php /*%%SmartyHeaderCode:61605c4c923bf1d1f3-69801881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecc9f6dcb85b5d0eece147e1722533253cf07f16' => 
    array (
      0 => 'ecc9f6dcb85b5d0eece147e1722533253cf07f16',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '61605c4c923bf1d1f3-69801881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'field_value' => 0,
    'type' => 0,
    'content' => 0,
    'attributes' => 0,
    'error' => 0,
    'label' => 0,
    'required' => 0,
    'show_label' => 0,
    'field_name' => 0,
    'message' => 0,
    'label_attr' => 0,
    'multiple' => 0,
    'choices' => 0,
    'choice' => 0,
    'SYMBOL' => 0,
    'text_types' => 0,
    'thelia_types' => 0,
    'attr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c4c923c034a61_25900744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4c923c034a61_25900744')) {function content_5c4c923c034a61_25900744($_smarty_tpl) {?>


<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'attributes', null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("forms/".((string)$_smarty_tpl->tpl_vars['field_template']->value)."/form-field-attributes-renderer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php if (($_smarty_tpl->tpl_vars['value']->value==''||$_smarty_tpl->tpl_vars['value']->value==null)&&isset($_smarty_tpl->tpl_vars['field_value']->value)&&$_smarty_tpl->tpl_vars['field_value']->value!==''&&$_smarty_tpl->tpl_vars['field_value']->value!==null) {?>
    <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['field_value']->value, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['type']->value=='hidden') {?>

    <?php if ($_smarty_tpl->tpl_vars['content']->value=='') {?>
        <input type="hidden" <?php echo $_smarty_tpl->tpl_vars['attributes']->value;?>
 />
    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php }?>

<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='checkbox') {?>

    <div class="checkbox <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
        <label>
            <?php if ($_smarty_tpl->tpl_vars['content']->value=='') {?>
                <input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['attributes']->value;?>
>
                <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['required']->value) {?> <span class="required">*</span><?php }?>
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['show_label']->value) {?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_error', array('field'=>$_smarty_tpl->tpl_vars['field_name']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_error'][0][0]->formError(array('field'=>$_smarty_tpl->tpl_vars['field_name']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <br />
                    <span class="error"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['message']->value,$_smarty_tpl);?>
</span>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_error'][0][0]->formError(array('field'=>$_smarty_tpl->tpl_vars['field_name']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php }?>
        </label>

        <?php if ($_smarty_tpl->tpl_vars['show_label']->value&&!empty($_smarty_tpl->tpl_vars['label_attr']->value['help'])) {?>
            <span class="help-block"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['help'],$_smarty_tpl);?>
</span>
        <?php }?>
    </div>

<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='radio') {?>

    <div class="radio <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
        <label>
            <?php if ($_smarty_tpl->tpl_vars['content']->value=='') {?>
                <input type="radio" <?php echo $_smarty_tpl->tpl_vars['attributes']->value;?>
>
                <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['required']->value) {?> <span class="required">*</span><?php }?>
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['show_label']->value) {?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_error', array('field'=>$_smarty_tpl->tpl_vars['field_name']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_error'][0][0]->formError(array('field'=>$_smarty_tpl->tpl_vars['field_name']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <br />
                    <span class="error"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['message']->value,$_smarty_tpl);?>
</span>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_error'][0][0]->formError(array('field'=>$_smarty_tpl->tpl_vars['field_name']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php }?>
        </label>

        <?php if ($_smarty_tpl->tpl_vars['show_label']->value&&!empty($_smarty_tpl->tpl_vars['label_attr']->value['help'])) {?>
            <span class="help-block"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['help'],$_smarty_tpl);?>
</span>
        <?php }?>
    </div>

<?php } else { ?>

    <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">

        <?php if ($_smarty_tpl->tpl_vars['show_label']->value) {?>
            <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label">
                <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['required']->value) {?> <span class="required">*</span><?php }?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_error', array('field'=>$_smarty_tpl->tpl_vars['field_name']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_error'][0][0]->formError(array('field'=>$_smarty_tpl->tpl_vars['field_name']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <br />
                    <span class="error"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['message']->value,$_smarty_tpl);?>
</span>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_error'][0][0]->formError(array('field'=>$_smarty_tpl->tpl_vars['field_name']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </label>

            <?php if ($_smarty_tpl->tpl_vars['multiple']->value&&$_smarty_tpl->tpl_vars['show_label']->value) {?>
                <span class="label-help-block"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Use Ctrl+click to select (or deselect) more that one item'),$_smarty_tpl);?>
</span>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['content']->value=='') {?>

            <?php if ($_smarty_tpl->tpl_vars['type']->value=='choice') {?>

                <select <?php echo $_smarty_tpl->tpl_vars['attributes']->value;?>
>
                    <?php  $_smarty_tpl->tpl_vars['choice'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['choice']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['choices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['choice']->key => $_smarty_tpl->tpl_vars['choice']->value) {
$_smarty_tpl->tpl_vars['choice']->_loop = true;
?>
                    <option value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['choice']->value->value,$_smarty_tpl);?>
" <?php if ((is_array($_smarty_tpl->tpl_vars['value']->value)&&in_array($_smarty_tpl->tpl_vars['choice']->value->value,$_smarty_tpl->tpl_vars['value']->value))||$_smarty_tpl->tpl_vars['choice']->value->value==$_smarty_tpl->tpl_vars['value']->value) {?>selected="selected"<?php }?>><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['choice']->value->label,$_smarty_tpl);?>
</option>
                    <?php } ?>
                </select>

            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='textarea') {?>

                <textarea <?php echo $_smarty_tpl->tpl_vars['attributes']->value;?>
><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
</textarea>

            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='money') {?>

                <div class="input-group">
                    <input type="number" step="any" <?php echo $_smarty_tpl->tpl_vars['attributes']->value;?>
 />
                    <span class="input-group-addon"><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"input.addon",'type'=>"currency",'default_only'=>"true")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"input.addon",'type'=>"currency",'default_only'=>"true"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['SYMBOL']->value,$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"input.addon",'type'=>"currency",'default_only'=>"true"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                </div>

            <?php } else { ?>

                <?php $_smarty_tpl->tpl_vars['text_types'] = new Smarty_variable(array('text','password','number','integer','time','date','datetime','email','url','file'), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['thelia_types'] = new Smarty_variable(array('country_id','currency_id','customer_id','customer_title_id','lang_id','category_id','product_id','product_sale_elements_id','folder_id','content_id','tax_id','tax_rule_id'), null, 0);?>

                <?php if (in_array($_smarty_tpl->tpl_vars['type']->value,$_smarty_tpl->tpl_vars['text_types']->value)) {?>
                    <?php if ($_smarty_tpl->tpl_vars['type']->value=='integer') {?><?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable('number', null, 0);?><?php }?>

                    <input type="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['type']->value,$_smarty_tpl);?>
" <?php echo $_smarty_tpl->tpl_vars['attributes']->value;?>
 />
                <?php } elseif (in_array($_smarty_tpl->tpl_vars['type']->value,$_smarty_tpl->tpl_vars['thelia_types']->value)) {?>
                    <?php if ($_smarty_tpl->tpl_vars['attr']->value&&empty($_smarty_tpl->tpl_vars['attr']->value['autocomplete'])) {?>
                    <input type="number" <?php echo $_smarty_tpl->tpl_vars['attributes']->value;?>
 />
                    <?php } else { ?>
                        
                        <input type="hidden" <?php echo $_smarty_tpl->tpl_vars['attributes']->value;?>
 />
                        <input type="text" data-widget="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['type']->value,$_smarty_tpl);?>
" data-rel="#<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="form-control" />
                    <?php }?>
                <?php } else { ?>
                    <div class="alert alert-danger"><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['type']->value,$_smarty_tpl);?>
<?php $_tmp21=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Unsupported field type '%type' in form-field.html",'type'=>$_tmp21),$_smarty_tpl);?>
</div>
                <?php }?>

            <?php }?>
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['show_label']->value&&!empty($_smarty_tpl->tpl_vars['label_attr']->value['help'])) {?>
            <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['label_attr']->value['help'];?>
</span>
        <?php }?>
    </div>
<?php }?>
<?php }} ?>
