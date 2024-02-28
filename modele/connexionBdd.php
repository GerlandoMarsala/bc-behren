<?php

//modele/connexionbdd.php
$username = 'root';
$mdp = '';
try {
    $pdo = new PDO('mysql:host=localhost;dbname=boxingclubbehren', $username, $mdp);
    // echo 'connexion réussie';
}catch(PDOException $e){
    echo $e->getMessage();
    die();
}
?>