<?php /* Smarty version Smarty-3.1.20, created on 2019-01-26 17:02:34
         compiled from "C:\wamp64\www\editorPlugin\thelia\local\modules\HookProductsNew\templates\frontOffice\default\home-body.html" */ ?>
<?php /*%%SmartyHeaderCode:197985c4c92aa13d357-91392778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc0c380277ef9bf479bc6be9bff3b25a05cab351' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\local\\modules\\HookProductsNew\\templates\\frontOffice\\default\\home-body.html',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197985c4c92aa13d357-91392778',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ID' => 0,
    'TITLE' => 0,
    'product_id' => 0,
    'URL' => 0,
    'IMAGE_URL' => 0,
    'LOOP_COUNT' => 0,
    'CHAPO' => 0,
    'DEFAULT_CATEGORY' => 0,
    'BEST_TAXED_PRICE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c4c92aa1652e2_67306192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4c92aa1652e2_67306192')) {function content_5c4c92aa1652e2_67306192($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"product_new")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"product_new"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<section id="products-new">
    <div class="products-heading">
        <h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Latest",'d'=>"hookproductsnew.fo.default"),$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/view_all",'type'=>"new"),$_smarty_tpl);?>
" class="btn-all"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"+ View All",'d'=>"hookproductsnew.fo.default"),$_smarty_tpl);?>
</a></h2>
    </div>
    <div class="products-content">
        <ul class="list-unstyled products-grid row">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"product_new",'type'=>"product",'limit'=>"4",'new'=>"yes")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product_new",'type'=>"product",'limit'=>"4",'new'=>"yes"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li class="item col-md-3 col-sm-4">
                <article itemscope itemtype="http://schema.org/Product">
                    <!-- Use the meta tag to specify content that is not visible on the page in any way -->
                    <?php $_smarty_tpl->tpl_vars['product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['ID']->value, null, 0);?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"brand.feature",'type'=>"feature",'product'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'title'=>"brand")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"brand.feature",'type'=>"feature",'product'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'title'=>"brand"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"brand.value",'type'=>"feature_value",'feature'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'product'=>((string)$_smarty_tpl->tpl_vars['product_id']->value))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"brand.value",'type'=>"feature_value",'feature'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'product'=>((string)$_smarty_tpl->tpl_vars['product_id']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <meta itemprop="brand" content="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
">
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"brand.value",'type'=>"feature_value",'feature'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'product'=>((string)$_smarty_tpl->tpl_vars['product_id']->value)), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"brand.feature",'type'=>"feature",'product'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'title'=>"brand"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"brand.feature",'type'=>"feature",'product'=>$_smarty_tpl->tpl_vars['ID']->value,'title'=>"isbn")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"brand.feature",'type'=>"feature",'product'=>$_smarty_tpl->tpl_vars['ID']->value,'title'=>"isbn"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"brand.value",'type'=>"feature_value",'feature'=>$_smarty_tpl->tpl_vars['ID']->value,'product'=>$_smarty_tpl->tpl_vars['product_id']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"brand.value",'type'=>"feature_value",'feature'=>$_smarty_tpl->tpl_vars['ID']->value,'product'=>$_smarty_tpl->tpl_vars['product_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <meta itemprop="productID" content="isbn:<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
">
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"brand.value",'type'=>"feature_value",'feature'=>$_smarty_tpl->tpl_vars['ID']->value,'product'=>$_smarty_tpl->tpl_vars['product_id']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"brand.feature",'type'=>"feature",'product'=>$_smarty_tpl->tpl_vars['ID']->value,'title'=>"isbn"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    <a href="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['URL']->value,$_smarty_tpl);?>
" itemprop="url" tabindex="-1" class="product-image overlay">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"image_product_new")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"image_product_new"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <img itemprop="image" class="img-responsive center-block"
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"image_product_new",'type'=>"image",'limit'=>"1",'product'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'force_return'=>"true",'width'=>"280",'height'=>"196",'resize_mode'=>"borders")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"image_product_new",'type'=>"image",'limit'=>"1",'product'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'force_return'=>"true",'width'=>"280",'height'=>"196",'resize_mode'=>"borders"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['IMAGE_URL']->value,$_smarty_tpl);?>
"
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"image_product_new",'type'=>"image",'limit'=>"1",'product'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'force_return'=>"true",'width'=>"280",'height'=>"196",'resize_mode'=>"borders"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        alt="Product #<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['LOOP_COUNT']->value,$_smarty_tpl);?>
" >
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"image_product_new"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"image_product_new")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"image_product_new"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <img itemprop="image" class="img-responsive center-block" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->functionImage(array('file'=>'assets/dist/img/280x196.png'),$_smarty_tpl);?>
" alt="Product #<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['LOOP_COUNT']->value,$_smarty_tpl);?>
">
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"image_product_new"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </a>

                    <a href="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['URL']->value,$_smarty_tpl);?>
" class="product-info">
                        <h3 class="name"><span itemprop="name"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</span></h3>
                        <div class="short-description" itemprop="description"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['CHAPO']->value,$_smarty_tpl);?>
</div>

                        <div class="product-price">
                            <div class="price-container" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"category",'name'=>"category_tag",'id'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"category",'name'=>"category_tag",'id'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <meta itemprop="category" content="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
">
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"category",'name'=>"category_tag",'id'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                <meta itemprop="itemCondition" itemscope itemtype="http://schema.org/NewCondition">
                                <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currency'][0][0]->currencyDataAccess(array('attr'=>"code"),$_smarty_tpl);?>
">
                                <link itemprop="availability" href="http://schema.org/InStock" content="in_stock" />
                                <span class="regular-price"><span itemprop="price" class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_smarty_tpl->tpl_vars['BEST_TAXED_PRICE']->value),$_smarty_tpl);?>
</span></span>
                            </div>
                        </div>
                    </a>
                </article><!-- /product -->
            </li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product_new",'type'=>"product",'limit'=>"4",'new'=>"yes"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
    </div>
</section><!-- #products-new -->
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"product_new"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
