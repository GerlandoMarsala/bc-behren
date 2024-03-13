<?php
session_start();
require '../modele/fonctions.php';
require '../../modele/connexionBdd.php';

$nomActualite = $_POST['nomActualite'];
$description = $_POST['description'];
$date = $_POST['date'];
$photos = $_POST['photos'];

$idActualite = $_POST['id_actualite'];

var_dump($_POST);
// echo"test";
if (!empty($_POST)) {
    // echo 'hello';
    if (!empty($_FILES['photos']['name'])) {
    
        if (checkFiles()) {
            checkPostActualite($pdo, $nomActualite, $description, $date, $idActualite);
            $idActualite = $pdo->lastInsertId();
            // $chemin correspond à $nomImage dans fonction.php
            updateImage($pdo, $nomImage, $idActualite);
        }
    } else {
        checkPostActualite($pdo, $nomActualite, $description, $date, $idActualite);
    }
}
function checkFiles()
{
    // variable global pour accéder a la variable chemin via ma fonction.
    global $chemin, $nom;
    $extension_upload = pathinfo($_FILES['photos']['name'], PATHINFO_EXTENSION); // récup de l'extension
    $extensions_valides = array('jpeg', 'JPEG', 'jpg', 'JPG', 'png', 'PNG'); // Les extensions acceptées
    if (in_array($extension_upload, $extensions_valides)) { // si l'extension est bonne
        $dossier = '../public/assets/img'; // transfert ce dossier dans le dossier images
        $time = time(); // variable time pour permettre de renommer le fichier en temps exmeple "489468165.png"
        $nom = $time . '.' . $extension_upload;
        $chemin = $dossier . "/" . $nom;

        return move_uploaded_file($_FILES['photos']['tmp_name'], $chemin);
    }
}

function checkPostActualite($pdo, $nomActualite, $description, $date, $idActualite)
{
    if (
        isset($_POST['nomActualite'], $_POST['description'], $_POST['date'], $_POST['id_actualite'])
        && !empty($_POST['nomActualite']) && !empty($_POST['description']) && !empty($_POST['date']) && !empty($_POST['id_actualite'])
    ) {
        // insérer l'actualité
        updateActualite($pdo, $nomActualite, $description, $date, $idActualite);
    }
}
