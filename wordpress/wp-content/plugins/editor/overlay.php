<?php

    //CSS link
    $css_setup = '<link rel="stylesheet" type="text/css" href="'.plugin_dir_url( __FILE__ ).'css/redcat.css" media="all"/>';

    //UI + editor
    $title = ' <h1 class="mrg-bottom-25">Redcat Editor</h1>';

    $editor = '<div id="editor"></div>
               <a class="save_btn pointer">Sauvegarder</a>
               <a class="click_css btn">CSS</a>
               <a class="click_js btn">JS</a>';

    //$overlayFiles = include('overlayController.php');
    $hiddendata = include('hiddenData.php');
    //JS links
    $js_setup = '<script src="'.plugin_dir_url( __FILE__ ).'ace/ace.js" type="text/javascript" charset="utf-8"></script>
                <script src="'.plugin_dir_url( __FILE__ ).'js/function.js" type="text/javascript" charset="utf-8"></script>';


    echo($css_setup);
    echo($title);
    echo($hiddendata);
    echo($editor);
    echo($js_setup);

?>