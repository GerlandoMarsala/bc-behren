<?php

// fonction qui va nous permettre d'insérer les informations contact du user dans le formulaire de contact

function insertMsg($pdo, $date_creation, $nom, $prenom, $objet, $email, $msg)
{
    $reqInsertMsg = $pdo->prepare("INSERT INTO messages(date_creation, nom, prenom, objet, email, msg) VALUES(?,?,?,?,?,?)");
    $reqInsertMsg->execute([$date_creation, $nom, $prenom, $objet, $email, $msg]);
}

// exemple fonction pour récup les actualités
function getAllActualites($pdo)
{
    $reqInsertActualite = $pdo->prepare('SELECT * FROM actualite');
    $reqInsertActualite->execute([]);
    $listeActualites = $reqInsertActualite->fetchAll();

    return $listeActualites;
}

// recuperer une actualite
// $idActualite parametres qui correspond a l'id que l'on à récupérer avec le GET dans l'URL
function getActualiteById($pdo, $idActualite)
{
    $reqRecupActualite = $pdo->prepare('SELECT actualite.*, images.* 
    FROM actualite 
    LEFT JOIN images ON actualite.id_actualite = images.id_actualite
    WHERE actualite.id_actualite = ' . $idActualite);

    $reqRecupActualite->execute([$idActualite]);
    $actualite = $reqRecupActualite->fetch();

    return $actualite;
}
