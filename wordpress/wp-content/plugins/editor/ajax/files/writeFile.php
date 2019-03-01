<?php

    if(isset($_POST['insideCode'])) {
        $insideCode = $_POST['insideCode'];
        $file = plugin_dir_url( __FILE__ ).'js/editor.js';
        // Marche pas
        // $file = dirname(__FILE__).'..\..\js\editor.js';
        file_put_contents($file, $insideCode);
    }

?>