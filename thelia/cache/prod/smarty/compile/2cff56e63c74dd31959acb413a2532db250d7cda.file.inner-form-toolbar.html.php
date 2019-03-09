<?php /* Smarty version Smarty-3.1.20, created on 2019-01-26 17:01:19
         compiled from "C:\wamp64\www\editorPlugin\thelia\templates\backOffice\default\includes\inner-form-toolbar.html" */ ?>
<?php /*%%SmartyHeaderCode:35185c4c925f90bb25-57331616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cff56e63c74dd31959acb413a2532db250d7cda' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\templates\\backOffice\\default\\includes\\inner-form-toolbar.html',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35185c4c925f90bb25-57331616',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_bottom' => 0,
    'hide_flags' => 0,
    'ID' => 0,
    'edit_language_id' => 0,
    'current_tab' => 0,
    'page_url' => 0,
    'current_url' => 0,
    'lang_url' => 0,
    'TITLE' => 0,
    'show_currencies' => 0,
    'edit_currency_id' => 0,
    'product_id' => 0,
    'NAME' => 0,
    'SYMBOL' => 0,
    'hide_submit_buttons' => 0,
    'hide_save_buttons' => 0,
    'hide_save_and_close_button' => 0,
    'close_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c4c925f942082_26445506',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4c925f942082_26445506')) {function content_5c4c925f942082_26445506($_smarty_tpl) {?>

<div class="row inner-toolbar<?php if ($_smarty_tpl->tpl_vars['page_bottom']->value) {?> inner-toolbar-bottom<?php }?>">
    <div class="col-md-3 inner-actions">
    <?php if ($_smarty_tpl->tpl_vars['hide_flags']->value!=true) {?>
		<ul class="nav nav-pills">
		    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"lang_list",'type'=>"lang",'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"lang_list",'type'=>"lang",'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		    <li <?php if ($_smarty_tpl->tpl_vars['ID']->value==$_smarty_tpl->tpl_vars['edit_language_id']->value) {?>class="active"<?php }?>>
                <?php if ($_smarty_tpl->tpl_vars['current_tab']->value) {?>
                    <?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['current_url']->value : $tmp);?>
<?php $_tmp12=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>$_tmp12,'edit_language_id'=>$_smarty_tpl->tpl_vars['ID']->value,'current_tab'=>$_smarty_tpl->tpl_vars['current_tab']->value),$_smarty_tpl);?>
<?php $_tmp13=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['lang_url'] = new Smarty_variable($_tmp13, null, 0);?>
                <?php } else { ?>
                    <?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['current_url']->value : $tmp);?>
<?php $_tmp14=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>$_tmp14,'edit_language_id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
<?php $_tmp15=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['lang_url'] = new Smarty_variable($_tmp15, null, 0);?>
                <?php }?>
		        <a class="language-change-button" data-language-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->tpl_vars['lang_url']->value;?>
" title="<?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
<?php $_tmp16=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Edit information in %lng','lng'=>$_tmp16),$_smarty_tpl);?>
">
		            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->functionImage(array('file'=>"assets/img/flags/".((string)$_smarty_tpl->tpl_vars['CODE']->value).".png"),$_smarty_tpl);?>
" alt=$TITLE />
		        </a>
		    </li>
		    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"lang_list",'type'=>"lang",'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

  		</ul>
    <?php }?>
    </div>

    <div class="col-md-3 inner-actions">
    <?php if ($_smarty_tpl->tpl_vars['show_currencies']->value==true) {?>
        <div class="row">
            <div class="col-md-12">
                <div class="button-group">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"currency_list",'type'=>"currency",'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"currency_list",'type'=>"currency",'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <a class="btn btn-sm <?php if ($_smarty_tpl->tpl_vars['ID']->value==$_smarty_tpl->tpl_vars['edit_currency_id']->value) {?>btn-primary<?php } else { ?>btn-default<?php }?>" href="<?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['current_url']->value : $tmp);?>
<?php $_tmp17=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('noamp'=>1,'path'=>$_tmp17,'edit_currency_id'=>$_smarty_tpl->tpl_vars['ID']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'current_tab'=>'prices'),$_smarty_tpl);?>
" title="<?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['NAME']->value,$_smarty_tpl);?>
<?php $_tmp18=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Edit prices in %curr','curr'=>$_tmp18),$_smarty_tpl);?>
">
                            <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['SYMBOL']->value,$_smarty_tpl);?>

                        </a>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"currency_list",'type'=>"currency",'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </div>
        </div>
    <?php }?>
    </div>

    <div class="col-md-6 inner-actions text-right">
         <?php if ($_smarty_tpl->tpl_vars['hide_submit_buttons']->value!=true) {?>
            <?php if ($_smarty_tpl->tpl_vars['hide_save_buttons']->value!=true) {?>
                <button type="submit" name="save_mode" value="stay" class="form-submit-button btn btn-sm btn-default btn-success" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Save'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Save'),$_smarty_tpl);?>
 <span class="glyphicon glyphicon-ok"></span></button>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['hide_save_and_close_button']->value!=true) {?>
                <button type="submit" name="save_mode" value="close" class="form-submit-button btn btn-sm btn-default btn-info" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Save and close'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Save and close'),$_smarty_tpl);?>
 <span class="glyphicon glyphicon-remove"></span></button>
            <?php }?>
         <?php }?>
         <?php if (!empty($_smarty_tpl->tpl_vars['close_url']->value)) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['close_url']->value;?>
" class="page-close-button btn btn-sm btn-default"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Close'),$_smarty_tpl);?>
 <span class="glyphicon glyphicon-remove"></span></a>
         <?php }?>
    </div>
</div>
<?php }} ?>
