<?php

    $path = __DIR__ .'\generatedFiles\\';
    $files = scandir($path);
    $files = array_slice($files, 2);

    $data = ''; 
    foreach ($files as $file) {
        $data .= '<div class="file">'.$file.'</div>';
    }

    echo($data);

?>