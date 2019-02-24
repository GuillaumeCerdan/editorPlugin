<?php

    if(isset($_POST['insideCode'])) {
        $insideCode = $_POST['insideCode'];
        $file = 'C:\wamp64\www\editorPlugin\wordpress\wp-content\plugins\editor\js\editor.js';
        file_put_contents($file, $insideCode);
    }

?>