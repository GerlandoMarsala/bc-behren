<?php

//modele/connexionbdd.php
$username = 'root';
$mdp = 'root';
try {
    $pdo = new PDO('mysql:host=localhost;dbname=bc-behren', $username, $mdp);
    // echo 'connexion réussie';
} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}
