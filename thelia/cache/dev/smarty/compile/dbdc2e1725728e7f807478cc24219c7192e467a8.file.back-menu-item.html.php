<?php /* Smarty version Smarty-3.1.20, created on 2018-12-13 19:49:03
         compiled from "C:\wamp64\www\thelia\local\modules\IntelliJ\templates\backOffice\default\back-menu-item.html" */ ?>
<?php /*%%SmartyHeaderCode:297055c12b5777d89f4-79903656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbdc2e1725728e7f807478cc24219c7192e467a8' => 
    array (
      0 => 'C:\\wamp64\\www\\thelia\\local\\modules\\IntelliJ\\templates\\backOffice\\default\\back-menu-item.html',
      1 => 1544730535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297055c12b5777d89f4-79903656',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c12b5777e7728_51392481',
  'variables' => 
  array (
    'admin_current_location' => 0,
    'id' => 0,
    'class' => 0,
    'url' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c12b5777e7728_51392481')) {function content_5c12b5777e7728_51392481($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"menu-auth-intellij",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.intellij",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"menu-auth-intellij",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.intellij",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('ifhook', array('rel'=>"main.top-menu-intellij")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"main.top-menu-intellij"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hookblock', array('name'=>"main.top-menu-intellij",'fields'=>"id,class,url,title")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"main.top-menu-intellij",'fields'=>"id,class,url,title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li class="<?php if ($_smarty_tpl->tpl_vars['admin_current_location']->value=='intellij') {?>active<?php }?>" id="config_menu">
            <a title="IntelliJ" href="#collapse-intellij" <?php if ($_smarty_tpl->tpl_vars['admin_current_location']->value=='intellij') {?>class="open"<?php }?>>
                <span class="icon-tools"></span>
                <span class="item-text">IntelliJ<span class="caret"></span></span>
            </a>

            <ul id="collapse-intellij" class="collapse <?php if ($_smarty_tpl->tpl_vars['admin_current_location']->value=='intellij') {?>in<?php }?>" role="menu">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('forhook', array('rel'=>"main.top-menu-intellij")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"main.top-menu-intellij"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li role="menuitem">
                        <a <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl);?>
" <?php }?> class="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['class']->value,$_smarty_tpl);?>
" data-target="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['url']->value,$_smarty_tpl);?>
" href="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['url']->value,$_smarty_tpl);?>
">
                            <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['title']->value,$_smarty_tpl);?>

                        </a>
                    </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"main.top-menu-intellij"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </li>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"main.top-menu-intellij",'fields'=>"id,class,url,title"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"main.top-menu-intellij"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('elsehook', array('rel'=>"main.top-menu-intellij")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"main.top-menu-intellij"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <li class="<?php if ($_smarty_tpl->tpl_vars['admin_current_location']->value=='intellij') {?>active<?php }?>" id="config_menu">
        <a title="IntelliJ" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/intellij'),$_smarty_tpl);?>
">
            <span class="icon-tools"></span>
            <span class="item-text">IntelliJ</span>
        </a>
    </li>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"main.top-menu-intellij"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"menu-auth-intellij",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.intellij",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
