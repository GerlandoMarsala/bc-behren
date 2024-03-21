<div class="containerAdminHome">
    <div class="logo-bc-behren">

    </div>

    <div>
        <h1 class="text-center my-2"></h1>
        <h1 class="titlePage"><span class="colorTitleB">S</span>UPPRIMER COMPETITEUR</h1>
        <div class="borderTitlePage"></div>
    </div>
    <div class="container my-3">

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
            echo "Votre competiteur a été supprimé !";
        }

        ?>

    </div>