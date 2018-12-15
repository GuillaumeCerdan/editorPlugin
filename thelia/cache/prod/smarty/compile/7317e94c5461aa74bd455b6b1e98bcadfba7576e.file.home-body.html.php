<?php /* Smarty version Smarty-3.1.20, created on 2018-12-15 15:32:14
         compiled from "C:\wamp64\www\editorPlugin\thelia\local\modules\HookProductsOffer\templates\frontOffice\default\home-body.html" */ ?>
<?php /*%%SmartyHeaderCode:272335c151e7e891330-01212542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7317e94c5461aa74bd455b6b1e98bcadfba7576e' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\local\\modules\\HookProductsOffer\\templates\\frontOffice\\default\\home-body.html',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272335c151e7e891330-01212542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ID' => 0,
    'SALE_LABEL' => 0,
    'CHAPO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c151e7e8a41f0_61327861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c151e7e8a41f0_61327861')) {function content_5c151e7e8a41f0_61327861($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"current-sales")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"current-sales"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <section id="products-offer" class="grid">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"current-sales",'type'=>"sale",'limit'=>"2")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"current-sales",'type'=>"sale",'limit'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <section id="product-sale-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
">
            <div class="products-heading">
                <h2><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['SALE_LABEL']->value,$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/sale",'sale'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
" class="btn-all"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"+ View All",'d'=>"hookproductsoffer.fo.default"),$_smarty_tpl);?>
</a></h2>
                <div class="short-description" itemprop="description"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['CHAPO']->value,$_smarty_tpl);?>
</div>
            </div>

            <div class="products-content">
                <ul class="products-grid list-unstyled row">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"products_in_sale",'type'=>"product",'limit'=>"4",'sale'=>$_smarty_tpl->tpl_vars['ID']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"products_in_sale",'type'=>"product",'limit'=>"4",'sale'=>$_smarty_tpl->tpl_vars['ID']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php echo $_smarty_tpl->getSubTemplate ("includes/single-product.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('colClass'=>"col-md-3 col-sm-4",'product_id'=>$_smarty_tpl->tpl_vars['ID']->value,'hasBtn'=>false,'hasDescription'=>false,'width'=>"218",'height'=>"146"), 0);?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"products_in_sale",'type'=>"product",'limit'=>"4",'sale'=>$_smarty_tpl->tpl_vars['ID']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
        </section><!-- #products-sale-XX -->
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"current-sales",'type'=>"sale",'limit'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </section>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"current-sales"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"current-sales")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"current-sales"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"product_promo")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"product_promo"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <section id="products-offer" class="grid">
        <div class="products-heading">
            <h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Offers",'d'=>"hookproductsoffer.fo.default"),$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/view_all",'type'=>"offers"),$_smarty_tpl);?>
" class="btn-all"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"+ View All",'d'=>"hookproductsoffer.fo.default"),$_smarty_tpl);?>
</a></h2>
        </div>

        <div class="products-content">
            <ul class="products-grid list-unstyled row">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"product_promo",'type'=>"product",'limit'=>"4",'promo'=>"yes")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product_promo",'type'=>"product",'limit'=>"4",'promo'=>"yes"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php echo $_smarty_tpl->getSubTemplate ("includes/single-product.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('colClass'=>"col-md-3 col-sm-4",'product_id'=>$_smarty_tpl->tpl_vars['ID']->value,'hasBtn'=>false,'hasDescription'=>false,'width'=>"218",'height'=>"146"), 0);?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product_promo",'type'=>"product",'limit'=>"4",'promo'=>"yes"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
    </section><!-- #products-offer -->
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"product_promo"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"current-sales"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
