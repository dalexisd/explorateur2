<?php


if(isset($_POST) && !empty($_POST['path'])){
    $path = $_POST['path'];
    getFiles($path);
}




function getFiles ($home){


        if (is_dir($home)) {
            if ($type = opendir($home)) {
                while (($file = readdir($type)) !==false) {

                    if (filetype($home . $file)== "dir"){
                    echo "<div class='folder'><i class='fas fa-folder-open fa-2x'></i> . '$file.'</div>";
                    }
                    else {
                    echo "<div class='file'><i class='fas fa-file fa-2x'></i> . '$file.'</div>"; 
                    }
                }
            }
            
        
            closedir($type);

                }}