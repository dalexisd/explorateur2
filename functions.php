<?php


if(isset($_POST) && !empty($_POST['path'])){
    $path = $_POST['path'];
    getFiles($path);
}



function getFiles ($home){


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