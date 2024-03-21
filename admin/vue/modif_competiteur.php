<?php

require '../../modele/connexionBdd.php';
require '../modele/fonctions.php';

$idCompetiteur = $_GET['id_competiteur'];

$competiteur = getCompetitorById($pdo, $idCompetiteur);

//echo $competiteur['id_resultat'];
//var_dump($competiteur);
?>


<div class="containerAdminHome">
    <div class="logo-bc-behren"></div>

    <div>
        <h1 class="text-center my-2"></h1>
        <h1 class="titlePage"><span class="colorTitleB">M</span>ODIFIER Competiteur</h1>
        <div class="borderTitlePage"></div>
    </div>
    <div class="container my-3">

        <form method="post" action="../controller/traitement_modif_competiteur.php" enctype="multipart/form-data">
            <!--  ID ACTUALITE   -->
            <input type="number" name="id_competiteur"
                   value="<?php echo htmlspecialchars($idCompetiteur, ENT_QUOTES, 'UTF-8'); ?>" hidden="true">
            <!--  ID IMAGES   -->
            <input type="number" name="id_images"
                   value="<?php echo htmlspecialchars($competiteur['id_images'], ENT_QUOTES, 'UTF-8'); ?>"
                   hidden="true">
            <!--  ID RESULTAT   -->
            <input type="number" name="id_resultat"
                   value="<?php echo htmlspecialchars($competiteur['id_resultat'], ENT_QUOTES, 'UTF-8'); ?>"
                   hidden="true">
            <!--  NOM Competiteur  -->
            <div class="mb-3">
                <label for="nom">Nom du compétiteur</label>
                <input
                        class="form-control"
                        value="<?php echo htmlspecialchars($competiteur['nom'], ENT_QUOTES, 'UTF-8'); ?>"
                        id="nom" name="nom" type="text" placeholder="Nom">
            </div>
            <!--  Prénom Competiteur  -->
            <div class="mb-3">
                <div class="mb-0"><label for="prenom">Prénom du compétiteur</label>
                    <input
                            class="form-control"
                            value="<?php echo htmlspecialchars($competiteur['prenom'], ENT_QUOTES, 'UTF-8'); ?>"
                            id="prenom" name="prenom" type="text" placeholder="Prénom">
                </div>
            </div>
            <!--  Catégorie Competiteur  -->
            <div class="mb-3">
                <div class="mb-0"><label for="categorie">Catégorie</label>
                    <input
                            class="form-control"
                            value="<?php echo htmlspecialchars($competiteur['categorie'], ENT_QUOTES, 'UTF-8'); ?>"
                            id="categorie" name="categorie" type="text" placeholder="Catégorie">
                </div>
            </div>
            <!--  Poids Competiteur  -->
            <div class="mb-3">
                <div class="mb-0"><label for="poids">Poids</label>
                    <input
                            class="form-control"
                            value="<?php echo htmlspecialchars($competiteur['poids'], ENT_QUOTES, 'UTF-8'); ?>"
                            id="poids" name="poids" type="number" placeholder="Catégorie">
                </div>
            </div>
            <!--  Pro  -->
            <div class="mb-3">
                <label for="pro"> Pro</label>
                <input id="pro"
                       name="pro"
                       type="checkbox"
                    <?php
                    if ($competiteur['pro'] == 1) {
                        echo "checked";
                    }
                    ?>
                       placeholder="...">
            </div>
            <div class="mb-3">
                <?php
                if ($competiteur['nom_images'] != NULL) {
                    ?>

                    <img src="<?php echo htmlspecialchars($competiteur['nom_images'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
                <?php } ?>

            </div>
            <div class="row">
                <div class="col">
                    <!--  Victoire  -->
                    <div class="mb-3">
                        <div class="mb-0"><label for="victoire">Victoire</label>
                            <input
                                    class="form-control"
                                    value="<?php echo htmlspecialchars($competiteur['victoire'], ENT_QUOTES, 'UTF-8'); ?>"
                                    id="victoire" name="victoire" type="number" placeholder="Victoire">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!--  Défaite  -->
                    <div class="mb-3">
                        <div class="mb-0"><label for="defaite">Défaite</label>
                            <input
                                    class="form-control"
                                    value="<?php echo htmlspecialchars($competiteur['defaite'], ENT_QUOTES, 'UTF-8'); ?>"
                                    id="defaite" name="defaite" type="number" placeholder="Défaite">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!--  Défaite  -->
                    <div class="mb-3">
                        <div class="mb-0"><label for="combat_nul">Combat nul</label>
                            <input
                                    class="form-control"
                                    value="<?php echo htmlspecialchars($competiteur['combat_nul'], ENT_QUOTES, 'UTF-8'); ?>"
                                    id="combat_nul" name="combat_nul" type="number" placeholder="Combat nul">
                        </div>
                    </div>
                </div>
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

