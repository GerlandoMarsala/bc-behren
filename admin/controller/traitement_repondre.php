<?php
// session_start();
require '../../modele/connexionBdd.php';
require '../modele/fonctions.php';

$repondreMsg = repondreMsg($pdo,$idMessage);

if ($repondreMsg == 0){
    updateRepondreMsg($pdo, 1, $idMessage);
    header('location../public/index.php?page=5');
} else {
    header('location../public/index.php?page=5&erreur=MessageDejaRepondu');
}