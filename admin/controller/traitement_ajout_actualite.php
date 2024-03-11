<?php

require '../modele/fonctions.php';
require '../../modele/connexionBdd.php';

$nomActualite = $_POST['nomActualite'];
$description = $_POST['description'];
$date = $_POST['date'];
// $file = $_POST['file'];




// echo"test";
if (!empty($_POST)) {


    if (
        isset($_POST['nomActualite'], $_POST['description'], $_POST['date'])
        && !empty($_POST['nomActualite']) && !empty($_POST['description']) && !empty($_POST['date'])
    ) {

        insertActualite($pdo, $nomActualite, $description, $date);

        header('Location:../public/index.php?success=actualiteCree');
    } else {

        header('Location:../public/index.php?page=2erreur=formulaireIncomplet');
    }
}
