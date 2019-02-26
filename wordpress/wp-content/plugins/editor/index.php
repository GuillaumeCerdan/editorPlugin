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
    $file = 'C:\wamp64\www\editorPlugin\wordpress\wp-content\plugins\editor\js\editor.js';
    $previousCode = file_get_contents($file);


    $css_setup = '<link rel="stylesheet" type="text/css" href="http://localhost/editorPlugin/wordpress/wp-content/plugins/editor/css/redcat.css" media="all"/>';

    $html_setup = ' <h1 class="mrg-bottom-25">Redcat Editor</h1>
                    <div id="editor">'.$previousCode.'</div>
                    <a class="save_btn pointer">Sauvegarder</a>
                    <button class="click">CSS</button>';

    $js_setup = '<script src="http://localhost/editorPlugin/wordpress/wp-content/plugins/editor/ace/ace.js" type="text/javascript" charset="utf-8"></script>
                <script src="http://localhost/editorPlugin/wordpress/wp-content/plugins/editor/js/function.js" type="text/javascript" charset="utf-8"></script>';


    echo($css_setup);
    echo($html_setup);
    echo($js_setup);
    
}
 
// Hook the 'wp_footer' action hook, add the function named 'mfp_Add_Text' to it
//add_action("wp_footer", "mfp_Add_Text");
 
// Define 'mfp_Add_Text'
/*function mfp_Add_Text()
{
  echo "<p style='color: black;'>After the footer is loaded, my text is added!</p>";
}*/


