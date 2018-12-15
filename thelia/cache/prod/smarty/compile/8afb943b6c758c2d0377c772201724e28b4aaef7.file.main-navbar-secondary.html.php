<?php /* Smarty version Smarty-3.1.20, created on 2018-12-15 13:07:17
         compiled from "C:\wamp64\www\editorPlugin\thelia\local\modules\HookCurrency\templates\frontOffice\default\main-navbar-secondary.html" */ ?>
<?php /*%%SmartyHeaderCode:270555c14fc853d8498-80013613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8afb943b6c758c2d0377c772201724e28b4aaef7' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\local\\modules\\HookCurrency\\templates\\frontOffice\\default\\main-navbar-secondary.html',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270555c14fc853d8498-80013613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ISOCODE' => 0,
    'SYMBOL' => 0,
    'NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c14fc853e0145_19395279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c14fc853e0145_19395279')) {function content_5c14fc853e0145_19395279($_smarty_tpl) {?><ul class="nav navbar-nav navbar-currency navbar-left">
    <li class="dropdown">
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/currency"),$_smarty_tpl);?>
" class="language-label dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currency'][0][0]->currencyDataAccess(array('attr'=>"code"),$_smarty_tpl);?>
</a>
        <ul class="dropdown-menu">
            <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currency'][0][0]->currencyDataAccess(array('attr'=>"id"),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"currency",'name'=>"currency_available",'exclude'=>$_tmp9)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"currency_available",'exclude'=>$_tmp9), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li><a href="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['navigate'][0][0]->navigateToUrlFunction(array('to'=>"current"),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ISOCODE']->value,$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>$_tmp10,'currency'=>$_tmp11),$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['SYMBOL']->value,$_smarty_tpl);?>
 - <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['NAME']->value,$_smarty_tpl);?>
</a></li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"currency_available",'exclude'=>$_tmp9), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
    </li>
</ul><?php }} ?>
