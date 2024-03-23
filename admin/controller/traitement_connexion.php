<?php
session_start();

require "../modele/fonctions.php";
require "../../modele/connexionBdd.php";

$email = $_POST ['email'];
$password = $_POST['password'];

// vérifier si le user existe
$userExist = verifUserExist($pdo, $email);

if ($userExist) {
    if (password_verify($password, $userExist['mdp_user'])) {

        $_SESSION['idUser'] = $userExist['id_user'];
        $_SESSION['role'] = $userExist['id_role'];
        // redirection vers accueil
        header('Location:../public/index.php?page=1');
    }else {
        // redirection vers index.php avec une erreur
        header('Location:../public/index.php?erreur=identifiants');
    }  
} else { // cas ou l'email et le mdp saisie n'est pas dans la BDD
        // redirection vers index.php avec une erreur
        header('Location:../public/index.php?erreur=identifiants');
}