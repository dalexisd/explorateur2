<?php


($_POST['folder']);



function getfiles ($home){


        if (is_dir($home)) {
            if ($type = opendir($home)) {
                while (($file = readdir($type)) !==false) {
                    echo "  " . "$file." . filetype($home . $file) . "  ";
                    if (filetype($home . $file)== "dir"){
                    echo '<i class="fas fa-folder-open fa-2x folder"></i>';
                    }
                    else {
                    echo '<i class="fas fa-file fa-2x"></i> ';  
                    }
                }
            }
            
        
            closedir($type);

                }}