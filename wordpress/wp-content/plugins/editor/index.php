<?php
/*
Plugin Name: Redcat Editor
Description: The first Wordpress smart editor that includes IntelliSense, coloring and more !
Author: Guillaume CERDAN
*/



// Link JS script
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
function enqueue_scripts() {
  wp_enqueue_script('js', plugin_dir_url( __FILE__ ) . 'js/editor.js', array('jquery'));
}

function init_editor() {
    include('overlay.php');
}

include('redcatInitialization.php');


// Hook the 'wp_footer' action hook, add the function named 'mfp_Add_Text' to it
//add_action("wp_footer", "mfp_Add_Text");
 
// Define 'mfp_Add_Text'
/*function mfp_Add_Text()
{
  echo "<p style='color: black;'>After the footer is loaded, my text is added!</p>";
}*/


