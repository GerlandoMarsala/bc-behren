<?php

session_start();
require '../modele/fonctions.php';
require '../../modele/connexionBdd.php';

$idCompetiteur = $_POST['id_competiteur'];
$idImages = $_POST['id_images'];
$idResultat = $_POST['id_resultat'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$categorie = $_POST['categorie'];
$poids = $_POST['poids'];
// Ajout d'un ternaire pour gérer la checkbox pro, car si elle n'est pas cochée, nous ne récupérons pas la donnée. 1 = TRUE, 0 = FALSE
$pro = isset($_POST['pro']) ? 1 : 0;
$victoire = $_POST['victoire'];
$defaite = $_POST['defaite'];
$combatNul = $_POST['combat_nul'];


if (!empty($_POST)) {
    if (!empty($_FILES['photos']['name'])) {
        if (checkFilesCompetiteur()) {
            checkPostCompetiteur($pdo, $nom, $prenom, $pro, $categorie, $poids, $idCompetiteur);
            checkPostResultat($pdo, $victoire, $defaite, $combatNul, $idCompetiteur);
            updateImageWithCompetitor($pdo, $nomImage, $idCompetiteur);
        }
    } else {
        checkPostCompetiteur($pdo, $nom, $prenom, $pro, $categorie, $poids, $idCompetiteur);
        checkPostResultat($pdo, $victoire, $defaite, $combatNul, $idCompetiteur);
    }
}


function checkFilesCompetiteur()
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

function checkPostCompetiteur($pdo, $nom, $prenom, $pro, $categorie, $poids, $idCompetiteur)
{
    if (
        isset($_POST['nom'], $_POST['prenom'], $_POST['categorie'], $_POST['poids'])
        && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['categorie'] && !empty($_POST['poids']))
    ) {
        // insérer le competiteur
        updateCompetiteur($pdo, $nom, $prenom, $pro, $categorie, $poids, $idCompetiteur);
    }
}

function checkPostResultat($pdo, $victoire, $defaite, $combatNul, $idCompetiteur)
{
    if (
        isset($_POST['victoire'], $_POST['defaite'], $_POST['combat_nul'])
        && !empty($_POST['victoire']) && !empty($_POST['defaite']) && !empty($_POST['combat_nul'])
    ) {
        // insérer le competiteur
        updateResultat($pdo, $victoire, $defaite, $combatNul, $idCompetiteur);
    }
}



