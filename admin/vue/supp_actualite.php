<div class="containerAdminHome">
    <div class="logo-bc-behren">

    </div>

    <div>
        <h1 class="text-center my-2"></h1>
        <h1 class="titlePage"><span class="colorTitleB">S</span>UPPRIMER ACTUALITÉ</h1>
        <div class="borderTitlePage"></div>
    </div>
    <div class="container my-3">

        <?php
        session_start();
        require '../modele/fonctions.php';
        require '../../modele/connexionBdd.php';

        $idActualite = $_GET['id_actualite'];

        if (isset($_GET['id_actualite']) && !empty($_GET['id_actualite'])) {

            //supprimer les lignes correspondante aux jointures
            deleteImage($pdo, $idActualite);
            //une fois que la suppression est faite pour toutes les autre jointure, on peut supprimer la ligne de la table principale : actualite
            deleteActualite($pdo, $idActualite);
            echo "Votre actualité a été supprimé !";
        }

        ?>

    </div>