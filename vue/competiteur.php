<!-- Présentation des compétiteur -->

<?php
// session_start();

require '../modele/connexionBdd.php';
require '../modele/fonctions.php';

$listCompetitor = getAllCompetitor($pdo);

?>


<div class="containerPresentationClub">
    <h1 class="titlePage"><span class="colorTitleB">C</span>OMPÉTITEURS</h1>
    <div class="borderTitlePage"></div>


    <h2 class="text-center py-5 titleStyle">AMATEURS</h2>
    <div class="containerPresentationCompetiteur container">
        <?php foreach ($listCompetitor as $competiteur) { ?>
            <div class="row alignRow policeCompetiteur">
                <div data-aos="fade-down-right" data-aos-duration="1500"
                     class="cardTeam col-lg-6 col-md-6 col-sm-12 p-0">
                    <div class="containerCardImg">
                        <div class="cardImg">
                            <img src="../public/assets/img/<?php echo htmlspecialchars($competiteur['nom_images'], ENT_QUOTES, 'UTF-8'); ?>"
                                 class="card-img-top" style="width: 100%;"
                                 alt="Sunset Over the Sea"/>
                            <div class="text">
                                <h2 class="name border-bottom">
                                    <?php echo htmlspecialchars($competiteur['nom'], ENT_QUOTES, 'UTF-8') . " " . htmlspecialchars($competiteur['prenom'], ENT_QUOTES, 'UTF-8'); ?>
                                </h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p>Palmares</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p>
                                            <?php echo htmlspecialchars($competiteur['victoire'], ENT_QUOTES, 'UTF-8'); ?>
                                            v/ <?php echo htmlspecialchars($competiteur['combat_nul'], ENT_QUOTES, 'UTF-8'); ?>
                                            n/ <?php echo htmlspecialchars($competiteur['defaite'], ENT_QUOTES, 'UTF-8'); ?>
                                            d
                                        </p>
                                    </div>
                                </div>
                                <div class="row bg-white text-black border-bottom">
                                    <div class="col-lg-6">
                                        <p><?php echo htmlspecialchars($competiteur['categorie'], ENT_QUOTES, 'UTF-8'); ?>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p>+ <?php echo htmlspecialchars($competiteur['poids'], ENT_QUOTES, 'UTF-8'); ?>
                                            kg</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>


    </div>

<?php