<?php
        session_start();
        require '../modele/fonctions.php';
        require '../../modele/connexionBdd.php';

        $idCompetiteur = $_GET['id_competiteur'];

        if (isset($_GET['id_competiteur']) && !empty($_GET['id_competiteur'])) {


            //supprimer les lignes correspondante aux jointures
            deleteImagesWithCompetitor($pdo, $idCompetiteur);
            //une fois que la suppression est faite pour toutes les autre jointure, on peut supprimer la ligne de la table principale : actualite
            deleteResultat($pdo, $idCompetiteur);
            deleteCompetitor($pdo, $idCompetiteur);
            header('location:../public/index.php?page=6');
            // echo "Votre competiteur a été supprimé !";
        }

        ?>