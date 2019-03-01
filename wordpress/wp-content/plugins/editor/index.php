<?php
/*
Plugin Name: Redcat Editor
Description: The first Wordpress smart editor that includes IntelliSense, coloring and more !
Author: [Getup] Guillaume
*/

add_action('admin_menu','test_plugin_setup_menu');  
function test_plugin_setup_menu(){
    add_menu_page('Redcat Editor', 'Getup Editor', 'manage_options', 'test-plugin', 'init_editor');
}

// Link JS script
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
function enqueue_scripts() {
  wp_enqueue_script('js', plugin_dir_url( __FILE__ ) . 'js/editor.js', array('jquery'));
}

function init_editor() {
    $file = plugin_dir_url( __FILE__ ).'js/editor.js';
    $previousCode = file_get_contents($file);


    $css_setup = '<link rel="stylesheet" type="text/css" href="'.plugin_dir_url( __FILE__ ).'css/redcat.css" media="all"/>';

    $html_setup = ' <h1 class="mrg-bottom-25">Redcat Editor</h1>
                    <div id="editor">'.$previousCode.'</div>
                    <a class="save_btn pointer">Sauvegarder</a>
                    <button class="click">CSS</button>';

    $js_setup = '<script src="'.plugin_dir_url( __FILE__ ).'ace/ace.js" type="text/javascript" charset="utf-8"></script>
                <script src="'.plugin_dir_url( __FILE__ ).'js/function.js" type="text/javascript" charset="utf-8"></script>';


    echo($css_setup);
    echo($html_setup);
    echo($js_setup);
    
}


add_action('admin_bar_menu', 'modify_admin_bar');
function modify_admin_bar($wp_admin_bar) {
  $wp_admin_bar->add_menu(array(
    'id' => 'directLink',
    'title' => __('Redcat Editor'),
    'href' => 'http://localhost/editorPlugin/wordpress/wp-admin/admin.php?page=test-plugin',
    'meta'  => array(
      'target'=> '_blank',
      'title' => __('Redcat Editor'),
    ),
  ));
}


// Hook the 'wp_footer' action hook, add the function named 'mfp_Add_Text' to it
//add_action("wp_footer", "mfp_Add_Text");
 
// Define 'mfp_Add_Text'
/*function mfp_Add_Text()
{
  echo "<p style='color: black;'>After the footer is loaded, my text is added!</p>";
}*/


