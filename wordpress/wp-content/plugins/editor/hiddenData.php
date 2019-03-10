<?php

    $path = __DIR__ .'\generatedFiles\\';
    $files = scandir($path);
    $files = array_slice($files, 2);

    $codejs = '';
    $codecss = '';

    foreach ($files as $file) {
        if(strpos($file, '.js')) {
            $codejs .= file_get_contents($path.$file).'OTHER FILE';
        }
        elseif(strpos($file, '.css')) {
            $codecss .= file_get_contents($path.$file).'OTHER FILE';
        }
    }

    echo('<p class="redcat-hidden-data-js dispnone">'.$codejs.'</p>');
    echo('<p class="redcat-hidden-data-css dispnone">'.$codecss.'</p>');

?>