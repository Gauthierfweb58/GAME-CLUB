

<?php 
/*if(!empty($_FILES) && array_key_exists('file', $_FILES) && !empty($_FILES['file']['name'])) {
    var_dump($_FILES);
}*/


var_dump($_FILES);
var_dump($_POST);
if(!empty($_FILES) && array_key_exists('file', $_FILES) && !empty($_FILES['file']['name'])) {
    if(move_uploaded_file($_FILES['file']['tmp_name'], "./data/".$_FILES['file']['name'])) {
        echo "Le fichier a été sauvegardé.";
    } else {
        echo "Erreur lors du téléchargement du fichier.";
    }
} else {
    echo "Vous devez envoyer un fichier.";
}




/*if(!empty($_FILES) && array_key_exists('file', $_FILES) && !empty($_FILES['file']['name'])) {
    echo "true";
} else {
    echo "false";
}*/
?>