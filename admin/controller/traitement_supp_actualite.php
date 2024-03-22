<?php
session_start();
require '../modele/fonctions.php';
require '../../modele/connexionBdd.php';

$idActualite = $_GET['id_actualite'];


echo "fonctionneeee" . $idActualite;
if (isset($_GET['id_actualite']) && !empty($_GET['id_actualite'])) {

    //Première étape : supprimer les lignes correspondante aux jointures
    deleteImage($pdo, $idActualite);
    //Seconde étape : une fois que la suppression est faite pour toutes les autre jointure, on peut supprimer la ligne de la table principale : actualite
    deleteActualite($pdo, $idActualite);
    echo "supprimer :)";

}