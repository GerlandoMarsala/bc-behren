<!-- fonction pour insérer une nouvelle actualité dans la BdD via l'espace admin -->
<?php

function insertActualite($pdo, $nomActualite, $description, $date)
{
    $reqInsertActualite = $pdo->prepare('INSERT INTO actualite(nom_actualite, description, date_actualite, id_competition) VALUES(?,?,?,?)');
    $reqInsertActualite->execute([$nomActualite, $description, $date, NULL]);
}


// function getAllActualite($pdo)
// {
//     $reqInsertActualite = $pdo->prepare('SELECT * FROM actualite');
//     $reqInsertActualite->execute([]);
// }
