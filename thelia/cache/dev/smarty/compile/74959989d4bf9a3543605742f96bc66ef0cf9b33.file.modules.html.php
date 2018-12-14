<?php /* Smarty version Smarty-3.1.20, created on 2018-12-13 19:39:34
         compiled from "C:\wamp64\www\thelia\templates\backOffice\default\modules.html" */ ?>
<?php /*%%SmartyHeaderCode:210835c12b576a2f342-12545884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74959989d4bf9a3543605742f96bc66ef0cf9b33' => 
    array (
      0 => 'C:\\wamp64\\www\\thelia\\templates\\backOffice\\default\\modules.html',
      1 => 1504456426,
      2 => 'file',
    ),
    'f19e9756bd14493997814a0c0ace662e10d854b8' => 
    array (
      0 => 'C:\\wamp64\\www\\thelia\\templates\\backOffice\\default\\admin-layout.tpl',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210835c12b576a2f342-12545884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_code' => 0,
    'asset_url' => 0,
    'THELIA_VERSION' => 0,
    'CODE' => 0,
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c12b576aec462_37014872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c12b576aec462_37014872')) {function content_5c12b576aec462_37014872($_smarty_tpl) {?>


    <?php ob_start();?>admin.module<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php $_tmp2=ob_get_clean();?><?php ob_start();?>view<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['check_auth'][0][0]->checkAuthFunction(array('role'=>"ADMIN",'resource'=>$_tmp1,'module'=>$_tmp2,'access'=>$_tmp3,'login_tpl'=>"/admin/login"),$_smarty_tpl);?>




    <?php $_smarty_tpl->tpl_vars['admin_current_location'] = new Smarty_variable('modules', null, 0);?>



<?php  $_config = new Smarty_Internal_Config('variables.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['declare_assets'][0][0]->declareAssets(array('directory'=>'assets'),$_smarty_tpl);?>



<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['default_translation_domain'][0][0]->setDefaultTranslationDomain(array('domain'=>'bo.default'),$_smarty_tpl);?>


<!DOCTYPE html>
<html lang="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['lang_code']->value,$_smarty_tpl);?>
">
<head>
    <meta charset="utf-8">

    <title><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Modules'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Thelia Back Office'),$_smarty_tpl);?>
</title>

    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->functionImage(array('file'=>'assets/img/favicon.ico'),$_smarty_tpl);?>
" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    

    

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stylesheet'][0][0]->functionStylesheet(array('file'=>'assets/css/styles.css'),$_smarty_tpl);?>
">

    

    

    

    

    

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.head-css",'location'=>"head_css"),$_smarty_tpl);?>


    
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/libs/respond.min.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/libs/respond.min.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/libs/respond.min.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <![endif]-->
</head>

<body>
    <div id="wrapper">
        
        
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"top-bar-auth",'type'=>"auth",'role'=>"ADMIN")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"top-bar-auth",'type'=>"auth",'role'=>"ADMIN"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


            

            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.before-topbar",'location'=>"before_topbar"),$_smarty_tpl);?>


            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/home'),$_smarty_tpl);?>
">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('images', array('file'=>'assets/img/logo-white.png')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['images'][0][0]->blockImages(array('file'=>'assets/img/logo-white.png'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <img src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Version %ver','ver'=>((string)$_smarty_tpl->tpl_vars['THELIA_VERSION']->value)),$_smarty_tpl);?>
">
                            <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Version %ver','ver'=>((string)$_smarty_tpl->tpl_vars['THELIA_VERSION']->value)),$_smarty_tpl);?>
</span>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['images'][0][0]->blockImages(array('file'=>'assets/img/logo-white.png'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">                
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.topbar-top"),$_smarty_tpl);?>

                    
                    <li>
                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['navigate'][0][0]->navigateToUrlFunction(array('to'=>"index"),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'View site'),$_smarty_tpl);?>
" target="_blank"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"View shop"),$_smarty_tpl);?>
</a>
                    </li>
                    <li class="dropdown">
                        <button class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin'][0][0]->adminDataAccess(array('attr'=>"firstname"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin'][0][0]->adminDataAccess(array('attr'=>"lastname"),$_smarty_tpl);?>

                            <span class="caret"></span>
                        </button>                        
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a class="profile" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'admin/configuration/administrators/view'),$_smarty_tpl);?>
"><span class="glyphicon glyphicon-edit"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Profil"),$_smarty_tpl);?>
</a></li>
                            <li><a class="logout" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'admin/logout'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Close administation session'),$_smarty_tpl);?>
"><span class="glyphicon glyphicon-off"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Logout"),$_smarty_tpl);?>
</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0][0]->langDataAccess(array('attr'=>'id'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"lang",'name'=>"ui-lang",'id'=>$_tmp4,'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"lang",'name'=>"ui-lang",'id'=>$_tmp4,'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <button class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->functionImage(array('file'=>"assets/img/flags/".((string)$_smarty_tpl->tpl_vars['CODE']->value).".png"),$_smarty_tpl);?>
" alt="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
" /> <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(ucfirst($_smarty_tpl->tpl_vars['CODE']->value),$_smarty_tpl);?>

                            <span class="caret"></span>
                        </button>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"lang",'name'=>"ui-lang",'id'=>$_tmp4,'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                        <ul class="dropdown-menu">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"lang",'name'=>"ui-lang",'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"lang",'name'=>"ui-lang",'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li><a href="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['navigate'][0][0]->navigateToUrlFunction(array('to'=>"current"),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['CODE']->value,$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>$_tmp5,'lang'=>$_tmp6),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->functionImage(array('file'=>"assets/img/flags/".((string)$_smarty_tpl->tpl_vars['CODE']->value).".png"),$_smarty_tpl);?>
" alt="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
" /> <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(ucfirst($_smarty_tpl->tpl_vars['CODE']->value),$_smarty_tpl);?>
</a></li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"lang",'name'=>"ui-lang",'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                         </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        
                        <?php echo $_smarty_tpl->getSubTemplate ("includes/main-menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.inside-topbar",'location'=>"inside_topbar"),$_smarty_tpl);?>

                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
                
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.after-topbar",'location'=>"after_topbar"),$_smarty_tpl);?>

            </nav>

            <div id="page-wrapper">                        
                
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Modules'),$_smarty_tpl);?>
</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                
                
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.before-content",'location'=>"before_content"),$_smarty_tpl);?>

                
                <div class="row">
                    
<div class="modules">

    <div id="wrapper" class="container">

        <div class="clearfix">
            <ul class="breadcrumb pull-left">
                <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/home'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Home"),$_smarty_tpl);?>
</a></li>
                <li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Modules"),$_smarty_tpl);?>
</li>
            </ul>

        </div>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"modules.top",'location'=>"modules_top"),$_smarty_tpl);?>


        <div class="row">

            <?php if ($_smarty_tpl->tpl_vars['module_errors']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("includes/module-errors.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_create",'role'=>"ADMIN",'resource'=>"admin.module",'access'=>"UPDATE")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_create",'role'=>"ADMIN",'resource'=>"admin.module",'access'=>"UPDATE"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo $_smarty_tpl->getSubTemplate ("includes/module-install.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_create",'role'=>"ADMIN",'resource'=>"admin.module",'access'=>"UPDATE"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <div class="col-md-12">
            <?php if ($_smarty_tpl->tpl_vars['error_message']->value) {?><div class="alert alert-danger"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['error_message']->value,$_smarty_tpl);?>
</div><?php }?>

            <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Delivery modules'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/module-block.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('module_type'=>"2",'caption_title'=>$_tmp7), 0);?>

            <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Payment modules'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/module-block.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('module_type'=>"3",'caption_title'=>$_tmp8), 0);?>

            <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Classic modules'),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/module-block.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('module_type'=>"1",'caption_title'=>$_tmp9), 0);?>


            </div>


            <div class="col-md-12">
                <div class="text-right">
                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/hooks'),$_smarty_tpl);?>
" class="btn btn-primary"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Manage hooks"),$_smarty_tpl);?>
 <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/module-hooks'),$_smarty_tpl);?>
" class="btn btn-primary"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Manage modules attachements"),$_smarty_tpl);?>
  <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
        </div>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"modules.bottom",'location'=>"modules_bottom"),$_smarty_tpl);?>


    </div>
</div>



<?php $_smarty_tpl->_capture_stack[0][] = array("delete_module_dialog", null, null); ob_start(); ?>
    <input type="hidden" name="module_id" id="delete_module_id" value="" />

    <div class="row">
        <div class="col-md-12">
		    <div class="form-group">
		        <div class="checkbox">
		            <label>
		                <input type="checkbox" name="delete-module-data" value="1">
		                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Delete also module data"),$_smarty_tpl);?>

		            </label>
		        </div>
		    </div>
		</div>
	</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Delete a module"),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Do you really want to delete this module ?"),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['token_url'][0][0]->generateUrlWithToken(array('path'=>'/admin/module/delete'),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php ob_start();?><?php echo Smarty::$_smarty_vars['capture']['delete_module_dialog'];?>
<?php $_tmp13=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/generic-confirm-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dialog_id'=>"delete_module_dialog",'dialog_title'=>$_tmp10,'dialog_message'=>$_tmp11,'form_action'=>$_tmp12,'form_content'=>$_tmp13), 0);?>


<div class="modal fade" id="module-failed" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"An error occured"),$_smarty_tpl);?>
</h3>
            </div>
            <div class="modal-body" id="module-failed-body">

            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="module-information" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 id="module-information-title"></h3>
            </div>

            <div class="modal-body" id="module-information-body">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Close'),$_smarty_tpl);?>
</button>
            </div>
        </div>
    </div>
</div>


                </div>
                
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.after-content",'location'=>"after_content"),$_smarty_tpl);?>
                
                
            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"top-bar-auth",'type'=>"auth",'role'=>"ADMIN"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.before-footer",'location'=>"before_footer"),$_smarty_tpl);?>


        <footer class="footer">
            <div class="text-center">
                <p class="text-center">&copy; Thelia <time datetime="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(date('Y-m-d'),$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(date('Y'),$_smarty_tpl);?>
</time>
                - <a href="http://www.openstudio.fr/" target="_blank"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Published by OpenStudio'),$_smarty_tpl);?>
</a>
                - <a href="http://thelia.net/forum" target="_blank"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Thelia support forum'),$_smarty_tpl);?>
</a>
                - <a href="http://thelia.net/modules" target="_blank"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Thelia contributions'),$_smarty_tpl);?>
</a>
                </p>

                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.in-footer",'location'=>"in_footer"),$_smarty_tpl);?>


            </div>
            <ul id="follow-us" class="list-unstyled list-inline">
                <li>
                    <a href="https://twitter.com/theliaecommerce" target="_blank">
                        <span class="icon-twitter"></span>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/theliaecommerce" target="_blank">
                        <span class="icon-facebook"></span>
                    </a>
                </li>
                <li>
                    <a href="https://github.com/thelia/thelia" target="_blank">
                        <span class="icon-github"></span>
                    </a>
                </li>
            </ul>
        </footer>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.after-footer",'location'=>"after_footer"),$_smarty_tpl);?>

    </div> <!-- #wrapper -->

	

	
    <script src="//code.jquery.com/jquery-2.0.3.min.js"></script>
    <script>
        if (typeof jQuery == 'undefined') {
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/libs/jquery.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/libs/jquery.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            document.write(unescape("%3Cscript src='<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
' %3E%3C/script%3E"));
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/libs/jquery.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        }
    </script>

	

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/bootstrap/bootstrap.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/bootstrap/bootstrap.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/bootstrap/bootstrap.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/libs/jquery.toolbar.min.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/libs/jquery.toolbar.min.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/libs/jquery.toolbar.min.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/libs/metis-menu.min.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/libs/metis-menu.min.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/libs/metis-menu.min.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/bootstrap-switch/bootstrap-switch.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/bootstrap-switch/bootstrap-switch.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/bootstrap-switch/bootstrap-switch.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/bootstrap-editable/bootstrap-editable.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/bootstrap-editable/bootstrap-editable.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/bootstrap-editable/bootstrap-editable.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <script>
        $(document).ready(function() {

            $("#module-install").on("submit", function(event) {
                var $loader = $('<div class="loader"></div>');
                $('body').append($loader);
                $loader.show();
            });

           var url_management = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/module/toggle-activation/"),$_smarty_tpl);?>
";
           $(".module-activation").on("switch-change", function(e, data){

               var checkbox = $(this);
        	   var module_id = checkbox.data('id');
        	   var is_checked = data.value;

               $('body').append('<div class="modal-backdrop fade in" id="loading-event"><div class="loading"></div></div>');
               $.ajax({
                    url: url_management+$(this).data('id')
               }).always(function(){
                   $("#loading-event").remove();
               }).done(function() {
            	   if (is_checked) {
                       $('.config-btn-' + module_id + ', .hook-btn-' + module_id)
                           .removeClass('disabled')
                           .removeClass('no-follow-link');
                   } else {
                       $('.config-btn-' + module_id + ', .hook-btn-' + module_id)
                           .addClass('disabled')
                           .addClass('no-follow-link');
                   }

               }).fail(function(jqXHR, textStatus, errorThrown){
                    checkbox.bootstrapSwitch('toggleState', true);
                    $('#module-failed-body').html(jqXHR.responseJSON.error);
                    $("#module-failed").modal("show");
               });

           });

           $(".module-delete-action").click(function(){
                $("#delete_module_id").val($(this).data("id"));
           });

           

           $('.modulePositionChange').editable({
               type        : 'text',
               title       : "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Enter new module position"),$_smarty_tpl);?>
",
               mode        : 'popup',
               inputclass  : 'input-mini',
               placement   : 'left',
               success     : function(response, newValue) {
                   // The URL template
                   var url = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('noamp'=>'1','path'=>'/admin/module/update-position','module_id'=>'__ID__','position'=>'__POS__'),$_smarty_tpl);?>
";

                   // Perform subtitutions
                   url = url.replace('__ID__', $(this).data('id'))
                   .replace('__POS__', newValue);

                   // Reload the page
                   location.href = url;
               }
           });

            

            $('.module-error-more').on('click', function(event){
                event.preventDefault();

                $(event.currentTarget).next('.more').toggleClass('hidden');
            });

            $('.module-information').click(function(event) {
                showModuleInformation(
                        '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/module/information/__ID__'),$_smarty_tpl);?>
'.replace('__ID__', $(this).data('id'))
                );

                event.preventDefault();
            });

            $('.module-documentation').click(function(event) {
                showModuleInformation(
                        '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/module/documentation/__ID__'),$_smarty_tpl);?>
'.replace('__ID__', $(this).data('id'))
                );

                event.preventDefault();
            });

            function showModuleInformation(url) {
                $('body').append('<div class="modal-backdrop fade in" id="loading-event"><div class="loading"></div></div>');

                $.ajax({
                    url: url
                }).always(function(){
                    $("#loading-event").remove();
                }).success(function(data) {
                    $('#module-information-title').html(data.title);
                    $('#module-information-body').html(data.body);
                    $("#module-information").modal("show");
                });
            }
        });
    </script>



    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/main.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/main.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/main.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>'main.footer-js','location'=>"footer_js"),$_smarty_tpl);?>


    
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"modules.js",'location'=>"modules-js"),$_smarty_tpl);?>


    </body>
</html>
<?php }} ?>
