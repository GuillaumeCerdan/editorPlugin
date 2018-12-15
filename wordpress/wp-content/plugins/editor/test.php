<?php
/*
Plugin Name: Getup Editor
Description: The first Wordpress smart editor that includes IntelliSense, coloring and more !
Author: [Getup] Guillaume
*/

add_action('admin_menu','test_plugin_setup_menu');  
function test_plugin_setup_menu(){
    add_menu_page('Getup Editor', 'Getup Editor', 'manage_options', 'test-plugin', 'init_editor');
}
function init_editor(){
    $insideCode = "
    function code() { 
        console.log('Now it is your turn !);  
    }";
    /* CSS for the editor */
    echo'<style>#editor {
            position: relative;
            top: 150px;
            right: 0;
            bottom: 0;
            left: 0;
            width: 95%!important;
            height: 85vh!important;
        }</style>';

    /* HTML for the editor */
    echo'<div id="editor">
        '.$insideCode.'
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.2/ace.js" type="text/javascript" charset="utf-8"></script>
        <script>
            var editor = ace.edit("editor");
            editor.setTheme("ace/theme/dracula");
            editor.setFontSize("15px");

            // pass options to ace.edit
            ace.edit(editor, {
                mode: "ace/mode/javascript",
                selectionStyle: "text"
            })

            // use setOptions method to set several options at once
            editor.setOptions({
                autoScrollEditorIntoView: true,
                copyWithEmptySelection: true,
                highlightActiveLine: true,
                highlightGutterLine: true,
                cursorStyle: "smooth",
                enableMultiselect: true,
                animatedScroll: true
            });

            // use setOptions method
            editor.setOption("mergeUndoDeltas", "always");

            </script>';

    echo '<h2><a href="https://ace.c9.io/#nav=howto"/>Doc settings Ace</a></h2>';
    echo '<h2><a href="https://github.com/ajaxorg/ace"/>Leur github</a></h2>';
    echo '<h2><a href="https://github.com/ajaxorg/ace/wiki/Default-Keyboard-Shortcuts"/>Shortcuts par défaut</a></h2>';
}
 
// Hook the 'wp_footer' action hook, add the function named 'mfp_Add_Text' to it
//add_action("wp_footer", "mfp_Add_Text");
 
// Define 'mfp_Add_Text'
/*function mfp_Add_Text()
{
  echo "<p style='color: black;'>After the footer is loaded, my text is added!</p>";
}*/


