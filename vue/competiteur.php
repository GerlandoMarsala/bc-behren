<!-- Présentation des compétiteur -->

<?php
// session_start();

require '../modele/connexionBdd.php';
require '../modele/fonctions.php';

$listCompetitor = getAllCompetitor($pdo);

?>
<main>
    <section class="mt-5 text-center container">
        <div class="row py-lg-5">

            <div class="col-lg-6 col-md-8 mx-auto mt-3">
                <h1 class="titlePage"><span class="colorTitleB">C</span>OMPÉTITEURS</h1>

            </div>
            <p class="lead text-body-secondary">Bienvenue sur notre page "Actualités" ! Ici, vous retrouverez les informations du moment : compétitions, événements passionnants, et tout ce qui anime la vie de notre club. Cette page sera régulièrement mise à jour pour vous tenir informé(e) de tout ce qui se passe chez nous.</p>
            <h2 class="titlePageActu">DÉCOUVREZ LES DERNIÈRES NOUVELLES DU CLUB !</h2>
        </div>
    </section>
    <div class="album py-3 bg-body-tertiary">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 policeCompetiteur">
                <?php foreach ($listCompetitor as $competiteur) { ?>
                    <div class="col">
                        <div class="card shadow-sm" data-aos="fade-up" data-aos-duration="1500">
                            <img src="../public/assets/img/<?php echo htmlspecialchars($competiteur['nom_images'], ENT_QUOTES, 'UTF-8'); ?>" class="card-img-top" style="width: 100%;" alt="Sunset Over the Sea" />
                            </svg>
                            <div class="card-body cardCompetiteur">
                                <h3 class="text-center"><?php echo htmlspecialchars($competiteur['nom'], ENT_QUOTES, 'UTF-8') . " " . htmlspecialchars($competiteur['prenom'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <div class="row text-center">
                                    <div class="col-lg-6">
                                        <p class="styleDescriptionBoxer">Palmares</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="styleDescriptionBoxer"><?php echo htmlspecialchars($competiteur['categorie'], ENT_QUOTES, 'UTF-8'); ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-lg-6">
                                        <p class="styleDescriptionBoxer">
                                            <?php echo htmlspecialchars($competiteur['victoire'], ENT_QUOTES, 'UTF-8'); ?>
                                            V/<?php echo htmlspecialchars($competiteur['combat_nul'], ENT_QUOTES, 'UTF-8'); ?>
                                            N/<?php echo htmlspecialchars($competiteur['defaite'], ENT_QUOTES, 'UTF-8'); ?>
                                            D
                                        </p>
                                    </div>
                                    <div class="col-lg-6">

                                        <p class="styleDescriptionBoxer">+ <?php echo htmlspecialchars($competiteur['poids'], ENT_QUOTES, 'UTF-8'); ?>
                                            KG</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

</main>