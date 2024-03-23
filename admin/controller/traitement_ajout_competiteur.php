<?php

session_start();
require '../modele/fonctions.php';
require '../../modele/connexionBdd.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$categorie = $_POST['categorie'];
$poids = $_POST['poids'];
// Ajout d'un ternaire pour gérer la checkbox pro, car si elle n'est pas cochée, nous ne récupérons pas la donnée. 1 = TRUE, 0 = FALSE
$pro = isset($_POST['pro']) ? 1 : 0;

if (!empty($_POST)) {
    if (!empty($_FILES['photos']['name'])) {
        if (insertFiles()) {
            insertCompetiteur($pdo, $nom, $prenom, $pro, $categorie, $poids);
            $idCompetiteur = $pdo->lastInsertId();
            createResultat($pdo, $idCompetiteur);
            $image = 'bcb-logo.jpeg';
            createImageWithCompetitor($pdo, $nomImage, $idCompetiteur);
        } else {
            insertCompetiteur($pdo, $nom, $prenom, $pro, $categorie, $poids);
            $idCompetiteur = $pdo->lastInsertId();
            createResultat($pdo, $idCompetiteur);
            $image = 'bcb-logo.jpeg';
            createImageWithCompetitor($pdo, $image, $idCompetiteur);
        }
    } else {
        insertCompetiteur($pdo, $nom, $prenom, $pro, $categorie, $poids);
        $idCompetiteur = $pdo->lastInsertId();
        createResultat($pdo, $idCompetiteur);
        $image = 'bcb-logo.jpeg';
        createImageWithCompetitor($pdo, $image, $idCompetiteur);
    } 
    header('Location:../public/index.php?page=6');
}


function insertFiles()
{
    // variable global pour accéder a la variable chemin via ma fonction.
    global $nomImage;
    $extension_upload = pathinfo($_FILES['photos']['name'], PATHINFO_EXTENSION); // récup de l'extension
    $extensions_valides = array('jpeg', 'JPEG', 'jpg', 'JPG', 'png', 'PNG'); // Les extensions acceptées
    if (in_array($extension_upload, $extensions_valides)) { // si l'extension est bonne
        $dossier = '../../public/assets/img'; // transfert ce dossier dans le dossier images
        $time = time(); // variable time pour permettre de renommer le fichier en temps exmeple "489468165.png"
        $nomImage = $time . '.' . $extension_upload;
        $chemin = $dossier . "/" . $nomImage;

        return move_uploaded_file($_FILES['photos']['tmp_name'], $chemin);
    }
}

function insertCompetiteur($pdo, $nom, $prenom, $pro, $categorie, $poids)
{
    if (
        isset($_POST['nom'], $_POST['prenom'], $_POST['categorie'], $_POST['poids'])
        && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['categorie'] && !empty($_POST['poids']))
    ) {
        // insérer le competiteur
        createCompetiteur($pdo, $nom, $prenom, $pro, $categorie, $poids);
    }
}
