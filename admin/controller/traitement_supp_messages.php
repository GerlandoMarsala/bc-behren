<?php

require '../modele/fonctions.php';
require '../../modele/connexionBdd.php';

if(isset($_GET['id_message'])){
    $idMessage = $_GET['id_message'];
    supprimerMessage($pdo, $idMessage);
}

header('location:../public/index.php?page=5');
