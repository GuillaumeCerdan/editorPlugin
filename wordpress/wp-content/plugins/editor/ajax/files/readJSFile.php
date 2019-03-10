<?php

        $path = dirname(__FILE__) . '\..\..\generatedFiles\\';

        $files = scandir($path);
        $files = array_slice($files, 2);

        $data = array(); 


        foreach ($files as $file) {
            if(strpos($file, '.js')) {
                $code = file_get_contents(dirname(__FILE__).'\..\..\generatedFiles\\'.$file);
                array_push($data, $code);
            }
            /*elseif(strpos($file, '.css')) {
                $code = file_get_contents(dirname(__FILE__).'\..\..\generatedFiles\\'.$file);
                array_push($data, $code);
            }*/
            
        }
        return $data;

?>