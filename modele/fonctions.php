<?php

// fonction qui va nous permettre d'insérer les informations contact du user dans le formulaire de contact

function insertMsg($pdo, $date_creation, $nom, $prenom, $objet, $email, $msg)
{
    $reqInsertMsg = $pdo->prepare("INSERT INTO messages(date_creation, nom, prenom, objet, email, msg) VALUES(?,?,?,?,?,?)");
    $reqInsertMsg->execute([$date_creation, $nom, $prenom, $objet, $email, $msg]);
}

function getAllMsg($pdo)
{
    $reqRecupAllMsg = $pdo->prepare('SELECT * FROM messages');
    $reqRecupAllMsg->execute([]);
    $listeMsg = $reqRecupAllMsg->fetchAll();

    return $listeMsg;
}

// exemple fonction pour récup les actualités
// fonction pour récup les actualités
function getAllActualites($pdo)
{
    $reqInsertActualite = $pdo->prepare('SELECT * FROM actualite LEFT JOIN images ON actualite.id_actualite = images.id_actualite');
    $reqInsertActualite->execute([]);
    $listeActualites = $reqInsertActualite->fetchAll();

    return $listeActualites;
}

function getActualite($pdo, $idActualite)
{
    $reqInsertActualite = $pdo->prepare('SELECT * FROM actualite WHERE id_actualite = ?');
    $reqInsertActualite->execute([$idActualite]);
    $listeActualites = $reqInsertActualite->fetch();

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

function getImagesActu($pdo, $idActualite)
{
    $reqImageActu = $pdo->prepare('SELECT * FROM images WHERE id_actualite = ?');
    $reqImageActu->execute([$idActualite]);
    $imageActu = $reqImageActu->fetchAll();

    return $imageActu;
}


// fonction pour récup les actualités
function getAllCompetitor($pdo)
{
    $reqInsertCompetitor = $pdo->prepare(
        'SELECT *
        FROM competiteur
        LEFT JOIN images
        ON competiteur.id_competiteur = images.id_competiteur
        LEFT JOIN resultat
        ON competiteur.id_competiteur = resultat.id_competiteur;'
    );
    $reqInsertCompetitor->execute([]);
    $listeCompetitors = $reqInsertCompetitor->fetchAll();

    return $listeCompetitors;
}
