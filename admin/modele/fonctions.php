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

function createImageWithCompetitor($pdo, $nomImage, $idCompetiteur)
{
    $reqInsertActualite = $pdo->prepare('INSERT INTO images(nom_images, id_competiteur) VALUES(?,?)');
    $reqInsertActualite->execute([$nomImage, $idCompetiteur]);
}

// fonction pour récup les actualités
function getAllActualites($pdo)
{
    $reqInsertActualite = $pdo->prepare('SELECT * FROM actualite LEFT JOIN images ON actualite.id_actualite = images.id_actualite');
    $reqInsertActualite->execute([]);
    $listeActualites = $reqInsertActualite->fetchAll();

    return $listeActualites;
}

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

function updateImageWithCompetitor($pdo, $nomImage, $idCompetiteur)
{
    $reqInsertActualite = $pdo->prepare('UPDATE images SET nom_images = ? WHERE id_competiteur = ?');
    $reqInsertActualite->execute([$nomImage, $idCompetiteur]);
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

function getImagesActu($pdo, $idActualite)
{
    $reqImageActu = $pdo->prepare('SELECT * FROM images WHERE id_actualite = ?');
    $reqImageActu->execute([$idActualite]);
    $imageActu = $reqImageActu->fetchAll();

    return $imageActu;
}


// messages
function getAllMsg($pdo)
{
    $reqRecupAllMsg = $pdo->prepare('SELECT * FROM messages');
    $reqRecupAllMsg->execute([]);
    $listeMsg = $reqRecupAllMsg->fetchAll();

    return $listeMsg;
}

// competiteurs
function createCompetiteur($pdo, $nom, $prenom, $pro, $categorie, $poids)
{
    $reqInsertCompetiteur = $pdo->prepare('INSERT INTO competiteur(nom, prenom, pro, categorie, poids) VALUES(?,?,?, ?, ?)');
    $reqInsertCompetiteur->execute([$nom, $prenom, $pro, $categorie, $poids]);
}

function createResultat($pdo, $idCompetiteur)
{
    $reqInsertResultat = $pdo->prepare('INSERT INTO resultat(victoire, defaite, combat_nul, id_competiteur) VALUES(?,?,?,?)');
    $reqInsertResultat->execute([0, 0, 0, $idCompetiteur]);
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


function getCompetitorById($pdo, $idCompetiteur)
{

    $sql = 'SELECT competiteur.*, images.*, resultat.*
    FROM competiteur
    LEFT JOIN images
    ON competiteur.id_competiteur = images.id_competiteur
    LEFT JOIN resultat
    ON competiteur.id_competiteur = resultat.id_competiteur
    WHERE competiteur.id_competiteur = ?';

    $reqGetCompetitor = $pdo->prepare($sql);

    $reqGetCompetitor->execute([$idCompetiteur]);
    $competiteur = $reqGetCompetitor->fetch();

    return $competiteur;
}

function updateCompetiteur($pdo, $nom, $prenom, $pro, $categorie, $poids, $idCompetiteur)
{
    $reqUpdateCompetiteur = $pdo->prepare('UPDATE competiteur SET nom = ?, prenom = ?, pro = ? , categorie = ?, poids= ? WHERE id_competiteur = ?');
    $reqUpdateCompetiteur->execute([$nom, $prenom, $pro, $categorie, $poids, $idCompetiteur]);
}

function updateResultat($pdo, $victoire, $defaite, $combatNul, $idCompetiteur)
{
    
    $reqUpdateCompetiteur = $pdo->prepare('UPDATE resultat SET victoire = ?, defaite = ?, combat_nul = ? WHERE id_competiteur = ?');
    $reqUpdateCompetiteur->execute([$victoire, $defaite, $combatNul, $idCompetiteur]);
}

function deleteCompetitor($pdo, $idCompetiteur)
{
    $reqInsertActualite = $pdo->prepare('DELETE FROM competiteur WHERE id_competiteur = ?');
    $reqInsertActualite->execute([$idCompetiteur]);
}

function deleteImagesWithCompetitor($pdo, $idCompetiteur)
{
    $reqInsertActualite = $pdo->prepare('DELETE FROM images WHERE id_competiteur = ?');
    $reqInsertActualite->execute([$idCompetiteur]);
}

function deleteResultat($pdo, $idCompetiteur)
{
    $reqInsertActualite = $pdo->prepare('DELETE FROM resultat WHERE id_competiteur = ?');
    $reqInsertActualite->execute([$idCompetiteur]);
}

function supprimerMessage($pdo, $idMessage){
    $reqSupprMessage = $pdo->prepare('DELETE FROM messages WHERE id_messages = ?');
    $reqSupprMessage->execute([$idMessage]);
}


function repondreMsg ($pdo, $idMessage) {
    $reqInsertMsg = $pdo->prepare('SELECT traiter FROM messages WHERE id_messages = ?');
    $reqInsertMsg->execute([$idMessage]);
}

function updateRepondreMsg($pdo, $traite, $idMessage)
{
    $reqUpdateRepondreMsg = $pdo->prepare('UPDATE messages SET traite = ? WHERE id_messages = ?');
    $reqUpdateRepondreMsg->execute([$traite, $idMessage]);
}

// function pour insérer le useer dans la BDD
function insertUser($pdo, $nom, $prenom, $email, $hashPassword) {
    $reqInsertUser = $pdo->prepare('INSERT INTO users(nom_user, prenom_user, email_user, mdp_user, id_role) VALUES (?,?,?,?,?)');
    $reqInsertUser->execute([$nom, $prenom, $email, $hashPassword, 1]);
}

// function pour vérifier si un user existe dans la BDD grâce à l'email
// le point "?" est présent pour la protection à l'injection SQL
// On récupère des élements de la BdD avec la méthode fetch, dans ce cas précis, on récupère l'email.
function verifUserExist($pdo, $email) {
    $reqUserExist = $pdo->prepare('SELECT * FROM users WHERE email_user = ?');
    $reqUserExist->execute([$email]);
    $userExist = $reqUserExist->fetch();

    return $userExist;
}


// inserer l'actualité dans la BdD, - FAIT
// récupérer l'id de l'actualité par tous les moyens, donc, - FAIT
// récupérer toutes les actualités, et donc récupérer la dernière actualité, et la on aura l'id de l'actualité - FAIT
// une fois qu'on aura cet id, on récupère le Path de l'image et on pourra insérer l'image - FAIT


// récup toutes les actus pour les afficher dans le tableau du back office et réussir a récupérer une actualité avec et sans image
// jointure a faire entre actu et image pour récup les actus avec une image et sans images, a faire pour les deux.
