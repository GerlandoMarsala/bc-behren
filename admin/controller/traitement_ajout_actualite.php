<?php
session_start();
require '../modele/fonctions.php';
require '../../modele/connexionBdd.php';

$nomActualite = $_POST['nomActualite'];
$description = $_POST['description'];
$date = $_POST['date'];

if (!empty($_POST)) {
    // echo 'hello';
    if (!empty($_FILES['photos']['name'])) {
    
        if (insertFiles()) {
            insertActualite($pdo, $nomActualite, $description, $date);
            $idActualite = $pdo->lastInsertId();
            // $chemin correspond à $nomImage dans fonction.php
            createImage($pdo, $nom, $idActualite);
        }else{
            $image = 'bcb-logo.jpeg'; 
            
            insertActualite($pdo, $nomActualite, $description, $date);
            $idActualite = $pdo->lastInsertId();
            createImage($pdo, $image, $idActualite);
        }
    }else {

        insertActualite($pdo, $nomActualite, $description, $date);
        $idActualite = $pdo->lastInsertId();
        $image = 'bcb-logo.jpeg'; 
        createImage($pdo, $image, $idActualite);
        
    }
}
header('location:../public/index.php?page=2');



function insertFiles()
{
    // variable global pour accéder a la variable chemin via ma fonction.
    global $chemin, $nom;
    $extension_upload = pathinfo($_FILES['photos']['name'], PATHINFO_EXTENSION); // récup de l'extension
    $extensions_valides = array('jpeg', 'JPEG', 'jpg', 'JPG', 'png', 'PNG'); // Les extensions acceptées
    if (in_array($extension_upload, $extensions_valides)) { // si l'extension est bonne
        $dossier = '../../public/assets/img'; // transfert ce dossier dans le dossier images
        $time = time(); // variable time pour permettre de renommer le fichier en temps exmeple "489468165.png"
        $nom = $time . '.' . $extension_upload;
        $chemin = $dossier . "/" . $nom;

        return move_uploaded_file($_FILES['photos']['tmp_name'], $chemin);
    }
}

function insertActualite($pdo, $nomActualite, $description, $date)
{
    if (
        isset($_POST['nomActualite'], $_POST['description'], $_POST['date'])
        && !empty($_POST['nomActualite']) && !empty($_POST['description']) && !empty($_POST['date'])
    ) {
        // insérer l'actualité
       createActualite($pdo, $nomActualite, $description, $date);
    }
}
