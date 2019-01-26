<?php /* Smarty version Smarty-3.1.20, created on 2019-01-26 10:48:45
         compiled from "C:\wamp64\www\editorPlugin\thelia\local\modules\HookContact\templates\frontOffice\default\main-footer-body.html" */ ?>
<?php /*%%SmartyHeaderCode:137385c4c3b0d3b9d26-96765323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e21a4b1ef8f5839446536e3951f9a5f07f82045d' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\local\\modules\\HookContact\\templates\\frontOffice\\default\\main-footer-body.html',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137385c4c3b0d3b9d26-96765323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store_name' => 0,
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c4c3b0d3c6a31_88090640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4c3b0d3c6a31_88090640')) {function content_5c4c3b0d3c6a31_88090640($_smarty_tpl) {?><div itemscope itemtype="http://schema.org/Organization">
    <meta itemprop="name" content="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['store_name']->value,$_smarty_tpl);?>
">
    <ul>
        <li class="contact-address">
            <address class="adr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span class="street-address" itemprop="streetAddress"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_address1"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_address2"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_address3"),$_smarty_tpl);?>
</span><br>
                <span class="postal-code" itemprop="postalCode"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_zipcode"),$_smarty_tpl);?>
</span>
                <span class="locality" itemprop="addressLocality">
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_city"),$_smarty_tpl);?>

                    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_country"),$_smarty_tpl);?>
<?php $_tmp15=ob_get_clean();?><?php if ($_tmp15) {?>
                        <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_country"),$_smarty_tpl);?>
<?php $_tmp16=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"country",'name'=>"address.country.title",'id'=>$_tmp16)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"country",'name'=>"address.country.title",'id'=>$_tmp16), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
, <span class="country-name"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</span><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"country",'name'=>"address.country.title",'id'=>$_tmp16), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php }?>
                </span>
            </address>
        </li>
        <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_phone"),$_smarty_tpl);?>
<?php $_tmp17=ob_get_clean();?><?php if ($_tmp17) {?>
        <li class="contact-phone">
            <a href="tel:<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_phone"),$_smarty_tpl);?>
" class="tel" itemprop="telephone"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_phone"),$_smarty_tpl);?>
</a>
        </li>
        <?php }?>
        <li class="contact-contact">
            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/contact'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Find us, Contact us",'d'=>"hookcontact.fo.default"),$_smarty_tpl);?>
</a>
        </li>
    </ul>
</div>
<?php }} ?>
