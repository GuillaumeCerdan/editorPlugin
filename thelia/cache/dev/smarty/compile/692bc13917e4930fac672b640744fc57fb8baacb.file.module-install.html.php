<?php /* Smarty version Smarty-3.1.20, created on 2018-12-13 19:39:35
         compiled from "C:\wamp64\www\thelia\templates\backOffice\default\includes\module-install.html" */ ?>
<?php /*%%SmartyHeaderCode:220305c12b5778d0e09-39653456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '692bc13917e4930fac672b640744fc57fb8baacb' => 
    array (
      0 => 'C:\\wamp64\\www\\thelia\\templates\\backOffice\\default\\includes\\module-install.html',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '220305c12b5778d0e09-39653456',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'MESSAGE' => 0,
    'form_error' => 0,
    'form_error_message' => 0,
    'error' => 0,
    'label_attr' => 0,
    'label' => 0,
    'required' => 0,
    'value' => 0,
    'visible' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c12b5778ea132_63813216',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c12b5778ea132_63813216')) {function content_5c12b5778ea132_63813216($_smarty_tpl) {?><div class="col-md-6 install-module-col">
    <div class="general-block-decorator">

        <div class="title title-without-tabs">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Install or update a module'),$_smarty_tpl);?>

        </div>

        <div class="form-container">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"thelia.admin.module.install")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.admin.module.install"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <form method="POST" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/module/install'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_enctype'][0][0]->formEnctype(array(),$_smarty_tpl);?>
 id="module-install">
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_hidden_fields'][0][0]->renderHiddenFormField(array(),$_smarty_tpl);?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('field'=>'success_url')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('field'=>'success_url'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/module'),$_smarty_tpl);?>
" />
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('field'=>'success_url'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('flash', array('type'=>"module-installed")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['flash'][0][0]->getFlashMessage(array('type'=>"module-installed"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="alert alert-success"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['MESSAGE']->value,$_smarty_tpl);?>
</div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['flash'][0][0]->getFlashMessage(array('type'=>"module-installed"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php if ($_smarty_tpl->tpl_vars['form_error']->value) {?><div class="alert alert-danger"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['form_error_message']->value,$_smarty_tpl);?>
</div><?php }?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('field'=>'module')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('field'=>'module'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                    <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['required']->value) {?> <span class="required">*</span><?php }?> :
                        <span class="label-help-block"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Your module should be packaged in a zip file."),$_smarty_tpl);?>
</span>
                    </label>
                    <div class="input-group">
                        <input type="file" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>required="required"<?php }?> name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Module file'),$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Module file'),$_smarty_tpl);?>
" class="form-control">
                        <span class="input-group-btn">
                            <input type="submit" class="form-submit-button btn btn-sm btn-success" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Install !"),$_smarty_tpl);?>
" >
                        </span>
                    </div>
                </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('field'=>'module'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            </form>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.admin.module.install"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    </div>
</div>

<div class="col-md-6 install-module-col">
    <div class="general-block-decorator">

        <div class="title title-without-tabs">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Search a module"),$_smarty_tpl);?>

        </div>


        <div class="row">
            <div class="col-md-7">
                <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Discover all our modules on <a href='http://thelia.net/modules' target='_blank'>Thelia Modules</a> !"),$_smarty_tpl);?>
</p>
                <form action="http://thelia.net/modules/search" method="get" target="_blank">
                    <div class="input-group">
                        <input type="text" class="form-control" id="q" name="q" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Search on Thelia Modules'),$_smarty_tpl);?>
">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="col-md-5">
                <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Display protected modules ?"),$_smarty_tpl);?>
</p>
                <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"admin/modules"),$_smarty_tpl);?>
" method="post">
                    <?php $_smarty_tpl->tpl_vars['visible'] = new Smarty_variable((($tmp = @$_POST['visible'])===null||$tmp==='' ? '0' : $tmp), null, 0);?>
                    <div class="input-group">
                        <select name="hidden" class="form-control">
                            <option value="0"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'No'),$_smarty_tpl);?>
</option>
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['visible']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Yes'),$_smarty_tpl);?>
</option>
                        </select>
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php }} ?>
