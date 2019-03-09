<?php /* Smarty version Smarty-3.1.20, created on 2019-01-26 17:00:44
         compiled from "C:\wamp64\www\editorPlugin\thelia\templates\backOffice\default\includes\hook-edition.js.inc" */ ?>
<?php /*%%SmartyHeaderCode:211895c4c923cd71631-89954783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a0c3a61595e87fb714888eb9c6181bddd83d0ab' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\templates\\backOffice\\default\\includes\\hook-edition.js.inc',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211895c4c923cd71631-89954783',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c4c923cd799b1_08093919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4c923cd799b1_08093919')) {function content_5c4c923cd799b1_08093919($_smarty_tpl) {?>// Get module hook classnames when a module is selected in the creation dialog
$('#module_id').change(function(ev) {
    var $classnameSelect = $('#classname');

    $classnameSelect.html('<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Please wait, loading...'),$_smarty_tpl);?>
</option>').prop('disabled', true);

    var moduleId = $("#module_id").val();

    $.ajax({
        url : "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/module-hooks/get-module-hook-classnames"),$_smarty_tpl);?>
/" + moduleId,
        success : function(data) {
            $classnameSelect.empty();

            if (data.length == 0) {
                $classnameSelect.append(
                    '<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'This module cannot be placed in a hook'),$_smarty_tpl);?>
</option>'
            )
            } else {
                $(data).each(function(idx, item) {
                    $classnameSelect.empty().append(
                        '<option value="' + item + '">' + item + '</option>'
                    )
                });

                $classnameSelect.prop('disabled', false);

                // For initializing the selected option when editing a module hook
                if ('' != currentClassname) {
                    $classnameSelect.val(currentClassname);
                    currentClassname = '';
                }
            }

            // Get related methods
            $('#classname').change();
        },
        error : function() {
            alert("<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Sorry, an error occurred, please try again.'),$_smarty_tpl);?>
");
        }
    })
});


// Get module hook methods when a module is selected in the creation dialog
$('#classname').change(function(ev) {
    var $methodSelect = $('#method');

    var moduleId = $("#module_id").val();
    var classname = $("#classname").val();

    $methodSelect.prop('disabled', true);

    if ('' == classname) {
        $methodSelect.empty();
        return;
    }

    $methodSelect.html('<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Please wait, loading...'),$_smarty_tpl);?>
</option>');

    $.ajax({
        url : "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/module-hooks/get-module-hook-methods"),$_smarty_tpl);?>
/" + moduleId + '/' + classname,
        success : function(data) {
            $methodSelect.empty();

            if (data.length == 0) {
                $methodSelect.append(
                    '<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'This classname has no method'),$_smarty_tpl);?>
</option>'
            )
            } else {
                $(data).each(function(idx, item) {
                    $methodSelect.append(
                        '<option value="' + item + '">' + item + '</option>'
                    )
                });

                $methodSelect.prop('disabled', false);

                // For initializing the selected option when editing a module hook
                if ('' != currentMethod) {
                    $methodSelect.val(currentMethod);
                    currentMethod = '';
                }
            }
        },
        error : function() {
            alert("<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Sorry, an error occurred, please try again.'),$_smarty_tpl);?>
");
        }
    })
});
<?php }} ?>
