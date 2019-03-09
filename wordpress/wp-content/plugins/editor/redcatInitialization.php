<?php

    //Setup menu
    add_action('admin_menu','setup_menu');  
    function setup_menu(){
        add_menu_page('Redcat Editor', 'Redcat Editor', 'manage_options', 'redcat-editor', 'init_editor');
    }

    //Setup admin top bar
    add_action('admin_bar_menu', 'modify_admin_bar');
    function modify_admin_bar($wp_admin_bar) {
        $wp_admin_bar->add_menu(array(
            'id' => 'directLink',
            'title' => __('<p style="color: #c91f37; font-weight: 500;">Redcat Editor</p>'),
            'href' => admin_url().'admin.php?page=redcat-editor',
            'meta'  => array(
                'target'=> '_blank',
                'title' => __('Redcat Editor'),
            ),
        ));
    }

?>