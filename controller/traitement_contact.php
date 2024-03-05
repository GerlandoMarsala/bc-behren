<?php

session_start();


require "../modele/fonctions.php";
require "../modele/connexionBdd.php";


// dateTime Pour afficher la date et l'heure ou l'utilisateur nous envoie les informations.
date_default_timezone_set('Europe/Paris');
$date_creation = date('Y-m-d H:i:s');

$objet = htmlspecialchars($_POST['objet']);
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$email = htmlspecialchars($_POST['email']);
$msg = htmlspecialchars($_POST['msg']);






// echo"test";
if (!empty($_POST)) {



    if (
        isset($_POST['objet'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['msg'])
        && !empty($_POST['objet']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['msg'])
    ) {

        insertMsg($pdo, $date_creation, $nom, $prenom, $objet, $email, $msg);

        header('Location:../public/index.php?success=messageEnvoye');
    } else {

        header('Location:../public/index.php?page=2erreur=formulaireIncomplet');
    }
}
