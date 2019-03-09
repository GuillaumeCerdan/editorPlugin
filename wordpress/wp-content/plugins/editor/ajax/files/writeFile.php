<?php

    if(isset($_POST['insideCode'])) {
        $insideCode = $_POST['insideCode'];
        $file = dirname(__FILE__).'\..\..\generatedFiles\editor.js';
        file_put_contents($file, $insideCode);
    }

?>