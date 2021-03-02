<?php


$home = "../";

if (is_dir($home)) {
    if ($type = opendir($home)) {
        while (($file = readdir($type)) !==false) {
            echo "fichier : $file : type : " . filetype($home . $file). "<br/>";
        }
    }
    closedir($type);
}
