<?php
// <!-- fonction pour insérer une nouvelle actualité dans la BdD via l'espace admin -->
function createActualite($pdo, $nomActualite, $description, $date)
{
    $reqInsertActualite = $pdo->prepare('INSERT INTO actualite(nom_actualite, description, date_actualite, id_competition) VALUES(?,?,?,?)');
    $reqInsertActualite->execute([$nomActualite, $description, $date, NULL]);

}

function createImage($pdo, $nomImage, $idActualite)
{
    $reqInsertActualite = $pdo->prepare('INSERT INTO images(nom_images, id_actualite) VALUES(?,?)');
    $reqInsertActualite->execute([$nomImage, $idActualite]);

}

// fonction qui me permet de récupérer les photos des actualités via une jointure entre la table actualites et la table images

// function recupImages($pdo, $idImages) {
//     $reqImages = $pdo->prepare('SELECT *
//     FROM images i, actualite a
//     WHERE i.id_images = a.id_images
//     $reqImages
//     ')
// }

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
    $reqRecupActualite = $pdo->prepare
    ('SELECT actualite.*, images.* 
    FROM actualite 
    LEFT JOIN images ON actualite.id_actualite = images.id_actualite
    WHERE actualite.id_actualite = ' . $idActualite);

    $reqRecupActualite->execute([$idActualite]);
    $actualite = $reqRecupActualite->fetch();

    return $actualite;
}

// fonction qui permet de mettre a jour une actualite 
function updateActualite($pdo, $nomActualite, $description, $date, $idActualite)
{
    $reqInsertActualite = $pdo->prepare('UPDATE actualite SET nom_actualite = ?, description = ?, id_competition = ? WHERE id_actualite = ?');
    $reqInsertActualite->execute([$nomActualite, $description, NULL, intval($idActualite)]);
}

// fonction qui permet de mettre a jour une image
function updateImage($pdo, $nomImage, $idActualite)
{
    $reqInsertActualite = $pdo->prepare('UPDATE images SET nom_images = ? WHERE id_actualite = ?');
    $reqInsertActualite->execute([$nomImage, $idActualite]);
}


function deleteActualite($pdo, $idActualite)
{
    $reqInsertActualite = $pdo->prepare('DELETE FROM actualite WHERE id_actualite = ?');
    $reqInsertActualite->execute([$idActualite]);
}

// fonction qui permet de mettre a jour une image
function deleteImage($pdo, $idActualite)
{
    $reqInsertActualite = $pdo->prepare('DELETE FROM images WHERE id_actualite = ?');
    $reqInsertActualite->execute([$idActualite]);
}











// inserer l'actualité dans la BdD, - FAIT
// récupérer l'id de l'actualité par tous les moyens, donc, - FAIT
// récupérer toutes les actualités, et donc récupérer la dernière actualité, et la on aura l'id de l'actualité - FAIT
// une fois qu'on aura cet id, on récupère le Path de l'image et on pourra insérer l'image - FAIT


// récup toutes les actus pour les afficher dans le tableau du back office et réussir a récupérer une actualité avec et sans image
// jointure a faire entre actu et image pour récup les actus avec une image et sans images, a faire pour les deux.
