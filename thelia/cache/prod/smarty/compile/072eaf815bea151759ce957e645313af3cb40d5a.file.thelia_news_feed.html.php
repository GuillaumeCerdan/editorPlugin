<?php /* Smarty version Smarty-3.1.20, created on 2018-12-15 11:57:52
         compiled from "C:\wamp64\www\editorPlugin\thelia\local\modules\HookAdminHome\templates\backOffice\default\ajax\thelia_news_feed.html" */ ?>
<?php /*%%SmartyHeaderCode:89815c14ec40cb7d35-98587186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '072eaf815bea151759ce957e645313af3cb40d5a' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\local\\modules\\HookAdminHome\\templates\\backOffice\\default\\ajax\\thelia_news_feed.html',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89815c14ec40cb7d35-98587186',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_code' => 0,
    'LOOP_COUNT' => 0,
    'TITLE' => 0,
    'DATE' => 0,
    'DESCRIPTION' => 0,
    'URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c14ec40d9a313_40762801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c14ec40d9a313_40762801')) {function content_5c14ec40d9a313_40762801($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp64\\www\\editorPlugin\\thelia\\core\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php';
?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['default_translation_domain'][0][0]->setDefaultTranslationDomain(array('domain'=>'hookadminhome.bo.default'),$_smarty_tpl);?>


<div class="panel-group" id="accordion">
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"feed",'name'=>"thelia_feeds",'url'=>"http://thelia.net/feeds/?lang=".((string)$_smarty_tpl->tpl_vars['lang_code']->value),'limit'=>"3")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"feed",'name'=>"thelia_feeds",'url'=>"http://thelia.net/feeds/?lang=".((string)$_smarty_tpl->tpl_vars['lang_code']->value),'limit'=>"3"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['LOOP_COUNT']->value,$_smarty_tpl);?>
">
						<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['TITLE']->value);?>
 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->formatDate(array('timestamp'=>$_smarty_tpl->tpl_vars['DATE']->value,'output'=>'date'),$_smarty_tpl);?>

					</a>
				</h3>
			</div>
			<div id="collapse-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['LOOP_COUNT']->value,$_smarty_tpl);?>
" class="panel-collapse collapse <?php if ($_smarty_tpl->tpl_vars['LOOP_COUNT']->value==1) {?>in<?php }?>">
				<div class="panel-body">
					
         			<p><?php echo smarty_modifier_truncate(mb_convert_encoding(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['DESCRIPTION']->value), 'UTF-8', 'HTML-ENTITIES'),250,"...",true);?>
</p>
				</div>
				<div class="panel-footer">
					<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
" target="_blank" class="btn btn-defaut btn-primary"><span class="glyphicon glyphicon-book"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Read more'),$_smarty_tpl);?>
</a>
				</div>
			</div>
		</div>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"feed",'name'=>"thelia_feeds",'url'=>"http://thelia.net/feeds/?lang=".((string)$_smarty_tpl->tpl_vars['lang_code']->value),'limit'=>"3"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>
