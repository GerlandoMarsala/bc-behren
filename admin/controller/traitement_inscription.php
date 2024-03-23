<?php
// session_start();
require '../modele/fonctions.php';
require '../../modele/connexionBdd.php';

$nom = 'm';
$prenom = 'g';
$email = 'g@test.fr';
$password = 'test';



        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        insertUser($pdo, $nom, $prenom, $email, $hashPassword);
        // echo'test';
    









