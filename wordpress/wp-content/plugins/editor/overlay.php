<?php

    //Récupère le code du fichier au refresh
    $file = plugin_dir_url( __FILE__ ).'js/editor.js';
    $previousCode = file_get_contents($file);

    //CSS link
    $css_setup = '<link rel="stylesheet" type="text/css" href="'.plugin_dir_url( __FILE__ ).'css/redcat.css" media="all"/>';

    //UI + editor
    $html_setup = ' <h1 class="mrg-bottom-25">Redcat Editor</h1>
                    <div id="editor">'.$previousCode.'</div>
                    <a class="save_btn pointer">Sauvegarder</a>
                    <button class="click">CSS</button>';

    //JS links
    $js_setup = '<script src="'.plugin_dir_url( __FILE__ ).'ace/ace.js" type="text/javascript" charset="utf-8"></script>
                <script src="'.plugin_dir_url( __FILE__ ).'js/function.js" type="text/javascript" charset="utf-8"></script>';


    echo($css_setup);
    echo($html_setup);
    echo($js_setup);

?>