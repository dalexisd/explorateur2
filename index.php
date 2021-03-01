<?php
include 'header.php';



if ($handle = opendir('/opt/lampp/htdocs')) {
    echo "Gestionnaire du dossier : $handle\n";
    echo "Entrées :\n";


include 'footer.php';
}

?>