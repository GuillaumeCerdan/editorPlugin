<?php /* Smarty version Smarty-3.1.20, created on 2019-01-26 17:00:31
         compiled from "C:\wamp64\www\editorPlugin\thelia\templates\backOffice\default\home.html" */ ?>
<?php /*%%SmartyHeaderCode:181765c4c922f2ffb91-94078998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ae6f1860c92f992a34c128aa4d5ce0a80dcc5ba' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\templates\\backOffice\\default\\home.html',
      1 => 1504456426,
      2 => 'file',
    ),
    '29a482bca58f79cf88b7540ed01fd17bf74e6e8c' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\templates\\backOffice\\default\\admin-layout.tpl',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181765c4c922f2ffb91-94078998',
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
  'unifunc' => 'content_5c4c922f399678_50073376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4c922f399678_50073376')) {function content_5c4c922f399678_50073376($_smarty_tpl) {?>


    <?php ob_start();?><?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['check_auth'][0][0]->checkAuthFunction(array('role'=>"ADMIN",'resource'=>$_tmp1,'module'=>$_tmp2,'access'=>$_tmp3,'login_tpl'=>"/admin/login"),$_smarty_tpl);?>




    <?php $_smarty_tpl->tpl_vars['admin_current_location'] = new Smarty_variable('home', null, 0);?>



<?php  $_config = new Smarty_Internal_Config('variables.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['declare_assets'][0][0]->declareAssets(array('directory'=>'assets'),$_smarty_tpl);?>



<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['default_translation_domain'][0][0]->setDefaultTranslationDomain(array('domain'=>'bo.default'),$_smarty_tpl);?>


<!DOCTYPE html>
<html lang="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['lang_code']->value,$_smarty_tpl);?>
">
<head>
    <meta charset="utf-8">

    <title><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Back-office home'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Thelia Back Office'),$_smarty_tpl);?>
</title>

    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->functionImage(array('file'=>'assets/img/favicon.ico'),$_smarty_tpl);?>
" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    

    

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stylesheet'][0][0]->functionStylesheet(array('file'=>'assets/css/styles.css'),$_smarty_tpl);?>
">

    
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stylesheet'][0][0]->functionStylesheet(array('file'=>'assets/js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css'),$_smarty_tpl);?>
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
                        <h1 class="page-header"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Back-office home'),$_smarty_tpl);?>
</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                
                
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.before-content",'location'=>"before_content"),$_smarty_tpl);?>

                
                <div class="row">
                    
    <div class="homepage">
        <div id="wrapper" class="container">

            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"home.top",'location'=>"home_top"),$_smarty_tpl);?>


            <div class="row">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hookblock', array('name'=>"home.block",'fields'=>"id,title,content,class")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"home.block",'fields'=>"id,title,content,class"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('forhook', array('rel'=>"home.block")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"home.block"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="<?php if ($_smarty_tpl->tpl_vars['class']->value) {?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['class']->value,$_smarty_tpl);?>
<?php } else { ?>col-md-4<?php }?>">
                    <div <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl);?>
"<?php }?> class="general-block-decorator">
                        <?php if ($_smarty_tpl->tpl_vars['title']->value) {?><div class="title title-without-tabs"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['title']->value,$_smarty_tpl);?>
</div><?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                    </div>
                </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"home.block"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"home.block",'fields'=>"id,title,content,class"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>

			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"home.bottom",'location'=>"home_bottom"),$_smarty_tpl);?>

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


    
<script>
jQuery(function($){
    // Get the latest Thelia version
    $.ajax({
        url: "https://thelia.net/version.php",
        beforeSend: function (jqXHR) {
            jqXHR.setRequestHeader("Thelia-Version", "<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['THELIA_VERSION']->value,$_smarty_tpl);?>
");
        },
        crossDomain: true
    }).done(function(data) {
        $('#latest-thelia-version').text(data);
    }).fail(function() {
        $('#latest-thelia-version').text("Unavailable");
    });
});
</script>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/main.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/main.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/main.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>'main.footer-js','location'=>"footer_js"),$_smarty_tpl);?>


    
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"home.js",'location'=>"home-js"),$_smarty_tpl);?>


    </body>
</html>
<?php }} ?>
