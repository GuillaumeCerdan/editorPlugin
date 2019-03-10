<?php

    if(isset($_POST['insideCode'])) {
        $insideCode = $_POST['insideCode'];
        if (isset($_POST['mode'])) {
            if ($_POST['mode'] == 'javascript') {
                $file = dirname(__FILE__).'\..\..\generatedFiles\editor.js';
                file_put_contents($file, $insideCode);
            }
            elseif($_POST['mode'] == 'css') {
                $file = dirname(__FILE__).'\..\..\generatedFiles\editor.css';
                file_put_contents($file, $insideCode);
            }
        }
        
        
    }

?>