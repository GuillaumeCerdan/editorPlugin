<?php /* Smarty version Smarty-3.1.20, created on 2018-12-16 16:47:53
         compiled from "C:\wamp64\www\editorPlugin\thelia\local\modules\HookCart\templates\frontOffice\default\mini-cart.html" */ ?>
<?php /*%%SmartyHeaderCode:185485c1681b97a20c3-09413350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88533354efb90c870b99a7e1f71f80fb9f23f2ee' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\local\\modules\\HookCart\\templates\\frontOffice\\default\\mini-cart.html',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185485c1681b97a20c3-09413350',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PRODUCT_SALE_ELEMENTS_ID' => 0,
    'PRODUCT_IMAGE_ID' => 0,
    'PRODUCT_ID' => 0,
    'IMAGE_URL' => 0,
    'TITLE' => 0,
    'IS_PROMO' => 0,
    'PROMO_TAXED_PRICE' => 0,
    'TOTAL_PROMO_TAXED_PRICE' => 0,
    'TAXED_PRICE' => 0,
    'TOTAL_TAXED_PRICE' => 0,
    'QUANTITY' => 0,
    'real_price' => 0,
    'total_price' => 0,
    'real_total_price' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c1681b97c6802_16614682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1681b97c6802_16614682')) {function content_5c1681b97c6802_16614682($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"cartloop")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"cartloop"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <li class="dropdown pull-right cart-not-empty cart-container">
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/cart"),$_smarty_tpl);?>
" rel="nofollow" class="cart">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Cart",'d'=>"hookcart.fo.default"),$_smarty_tpl);?>
 <span class="badge"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cart'][0][0]->cartDataAccess(array('attr'=>"count_item"),$_smarty_tpl);?>
</span>
        </a>
        <div class="dropdown-menu cart-content">
            <form id="form-cart-mini" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/order/delivery"),$_smarty_tpl);?>
" method="post">
                <table class="table table-cart-mini">
                    <colgroup>
                        <col width="70">
                        <col>
                        <col width="100">
                    </colgroup>
                    <tbody>
                    <?php $_smarty_tpl->tpl_vars["total_price"] = new Smarty_variable(0, null, 0);?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"cart",'name'=>"cartloop")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"cart",'name'=>"cartloop"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <tr>
                        <td class="image">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"pse-first-image")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"pse-first-image"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"product-sale-elements-image",'name'=>"pse-first-image",'product_sale_elements_id'=>$_smarty_tpl->tpl_vars['PRODUCT_SALE_ELEMENTS_ID']->value,'limit'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"product-sale-elements-image",'name'=>"pse-first-image",'product_sale_elements_id'=>$_smarty_tpl->tpl_vars['PRODUCT_SALE_ELEMENTS_ID']->value,'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"image",'name'=>"product-image",'id'=>$_smarty_tpl->tpl_vars['PRODUCT_IMAGE_ID']->value,'product'=>$_smarty_tpl->tpl_vars['PRODUCT_ID']->value,'limit'=>"1",'width'=>"118",'height'=>"60")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"image",'name'=>"product-image",'id'=>$_smarty_tpl->tpl_vars['PRODUCT_IMAGE_ID']->value,'product'=>$_smarty_tpl->tpl_vars['PRODUCT_ID']->value,'limit'=>"1",'width'=>"118",'height'=>"60"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <?php $_smarty_tpl->tpl_vars["product_image_url"] = new Smarty_variable($_smarty_tpl->tpl_vars['IMAGE_URL']->value, null, 0);?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_URL']->value;?>
" alt="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
">
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"image",'name'=>"product-image",'id'=>$_smarty_tpl->tpl_vars['PRODUCT_IMAGE_ID']->value,'product'=>$_smarty_tpl->tpl_vars['PRODUCT_ID']->value,'limit'=>"1",'width'=>"118",'height'=>"60"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"product-sale-elements-image",'name'=>"pse-first-image",'product_sale_elements_id'=>$_smarty_tpl->tpl_vars['PRODUCT_SALE_ELEMENTS_ID']->value,'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"pse-first-image"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"pse-first-image")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"pse-first-image"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"image",'name'=>"product-image",'product'=>$_smarty_tpl->tpl_vars['PRODUCT_ID']->value,'limit'=>"1",'width'=>"118",'height'=>"60")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"image",'name'=>"product-image",'product'=>$_smarty_tpl->tpl_vars['PRODUCT_ID']->value,'limit'=>"1",'width'=>"118",'height'=>"60"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_URL']->value;?>
" alt="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
">
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"image",'name'=>"product-image",'product'=>$_smarty_tpl->tpl_vars['PRODUCT_ID']->value,'limit'=>"1",'width'=>"118",'height'=>"60"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"pse-first-image"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </td>
                        <td class="product">
                            <h3 class="name" style="margin:0">
                                <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>

                            </h3>
                            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['token_url'][0][0]->generateUrlWithToken(array('path'=>"/cart/delete/".((string)$_smarty_tpl->tpl_vars['ITEM_ID']->value)),$_smarty_tpl);?>
" class="btn btn-remove" data-tip="tooltip" data-title="Delete" data-original-title=""><i class="fa fa-trash"></i> <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Remove",'d'=>"hookcart.fo.default"),$_smarty_tpl);?>
</span></a>
                        </td>
                        <td class="unitprice text-center">
                            <?php if ($_smarty_tpl->tpl_vars['IS_PROMO']->value==1) {?>
                                <?php $_smarty_tpl->tpl_vars["real_price"] = new Smarty_variable($_smarty_tpl->tpl_vars['PROMO_TAXED_PRICE']->value, null, 0);?>
                                <?php $_smarty_tpl->tpl_vars["real_total_price"] = new Smarty_variable($_smarty_tpl->tpl_vars['TOTAL_PROMO_TAXED_PRICE']->value, null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars["real_price"] = new Smarty_variable($_smarty_tpl->tpl_vars['TAXED_PRICE']->value, null, 0);?>
                                <?php $_smarty_tpl->tpl_vars["real_total_price"] = new Smarty_variable($_smarty_tpl->tpl_vars['TOTAL_TAXED_PRICE']->value, null, 0);?>
                            <?php }?>
                            <span class="qty"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['QUANTITY']->value,$_smarty_tpl);?>
</span> X <span class="price" style="font-size:1em;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_smarty_tpl->tpl_vars['real_price']->value),$_smarty_tpl);?>
</span>
                            <?php $_smarty_tpl->tpl_vars["total_price"] = new Smarty_variable($_smarty_tpl->tpl_vars['total_price']->value+$_smarty_tpl->tpl_vars['real_total_price']->value, null, 0);?>
                        </td>
                    </tr>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"cart",'name'=>"cartloop"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="2" class="empty">
                            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/cart"),$_smarty_tpl);?>
" role="button" class="btn btn-default btn-sm"><i class="fa fa-eye"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"View Cart",'d'=>"hookcart.fo.default"),$_smarty_tpl);?>
</a>
                            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/order/delivery"),$_smarty_tpl);?>
" role="button" class="btn btn-primary btn-sm"><i class="fa fa-chevron-right"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Checkout",'d'=>"hookcart.fo.default"),$_smarty_tpl);?>
</a>
                            
                        </td>
                        <td class="total">
                            <div class="total-price">
                                <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_smarty_tpl->tpl_vars['total_price']->value),$_smarty_tpl);?>
</span>
                            </div>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </form>
        </div>
    </li>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"cartloop"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"cartloop")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"cartloop"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <li class="dropdown pull-right  cart-container">
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/cart"),$_smarty_tpl);?>
" rel="nofollow" class="cart">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Cart",'d'=>"hookcart.fo.default"),$_smarty_tpl);?>
 <span class="badge">0</span>
        </a>
        <div class="dropdown-menu cart-content">
            <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"You have no items in your shopping cart.",'d'=>"hookcart.fo.default"),$_smarty_tpl);?>
</p>
        </div>
    </li>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"cartloop"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
