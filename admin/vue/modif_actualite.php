<?php
// session_start();
require '../../modele/connexionBdd.php';
require '../modele/fonctions.php';

$idActualite = $_GET['id_actualite'];
// checker si l'id n'est pas NULL 
$actualite = getActualiteById($pdo, $idActualite);
// il faut checker si on a bien reçu des données, si on en a pas reçu soit rediriger le user vers une autre page, soit mettre un msg d'erreur
// faire une simple redirection (sécurité).

?>

<div class="containerAdminHome">
    <div class="logo-bc-behren">

    </div>

    <div>
        <h1 class="text-center my-2"></h1>
        <h1 class="titlePage"><span class="colorTitleB">M</span>ODIFIER ACTUALITÉ</h1>
        <div class="borderTitlePage"></div>
    </div>
    <div class="container my-3">

        <form method="post" action="../controller/traitement_modif_actualite.php" enctype="multipart/form-data">
            <!--  ID ACTUALITE   -->
            <input type="number" name="id_actualite" value="<?php echo htmlspecialchars($idActualite, ENT_QUOTES, 'UTF-8'); ?>" hidden="true">
            <!--  ID IMAGES   -->
            <input type="number" name="id_images" value="<?php echo htmlspecialchars($actualite['id_images'], ENT_QUOTES, 'UTF-8'); ?>" hidden="true">
            <!--  NOM ACTUALITE  -->
            <div class="mb-3"><label for="exampleFormControlInput1">Nom de l'actualité</label><input class="form-control" value="<?php echo htmlspecialchars($actualite['nom_actualite'], ENT_QUOTES, 'UTF-8'); ?>" id="exampleFormControlInput1" name="nomActualite" type="text" placeholder="Titre"></div>
            <div class="mb-3">
                <div class="mb-0"><label for="exampleFormControlTextarea1">Description de l'actualité</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"><?php echo htmlspecialchars($actualite['description'], ENT_QUOTES, 'UTF-8'); ?></textarea>
                </div>

            </div>
            <div class="mb-3">
                <!-- <label for="exampleFormControlSelect2">Example multiple select</label> -->
                <label for="start">Start date:</label>
                <!-- <input type="date" id="start" name="date" value="2018-07-22" min="2018-01-01" /> -->
                <input class="form-control" value="<?php echo htmlspecialchars($actualite['date_actualite'], ENT_QUOTES, 'UTF-8'); ?>" type="date" name="date">

            </div>
            <div class="mb-3">
                <?php
                if ($actualite['nom_images'] != NULL) {
                ?>

                    <img src="<?php echo htmlspecialchars($actualite['nom_images'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
                <?php } ?>

            </div>
            <div class="text-center py-2">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupFile01">Ajouter ou modifier une image</label>
                    <input type="file" value="" name="photos" class="form-control" id="inputGroupFile01">
                </div>
                <button class="buttonActu" type="submit" class="buttonActu2">Valider</button>
            </div>

        </form>

    </div>