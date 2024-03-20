<!-- Actualités du club -->
<?php
// session_start();

require '../modele/connexionBdd.php';
require '../modele/fonctions.php';


$listeActualites = getAllActualites($pdo);

?>



<div class="containerActualites">
    <h1 class="titlePage"><span class="colorTitleB">A</span>CTUALITÉS</h1>
    <div class="borderTitlePage"></div>
    <br>
    <div>


        <div class="containerBackground">
            <div data-aos="fade-up" data-aos-duration="1500">



                <div class="containerParagrapheActualites">

                    <p class="paragrapheJustify">Bienvenue sur notre page "Actualités" ! Ici, vous retrouverez les informations du moment : compétitions, événements passionnants, et tout ce qui anime la vie de notre club. Cette page sera régulièrement mise à jour pour vous tenir informé(e) de tout ce qui se passe chez nous.</p>
                </div>
            </div>
        </div>

        <div class="backgroundTitle">
            <h2 class="text-center py-5 titleStyleActu">Découvrez les dernières nouvelles du club !</h2>
        </div>


    </div>

</div>



<div class="container">
    <div class="row">
        <?php foreach ($listeActualites as $actualite) { ?>
            <div class="col-4 py-5">
                <div class="d-flex align-items-center justify-content-center">

                    <div class="card">
                        <div class="card-body d-flex flex-row">
                            <img src="../public/assets/img/bcb-logo.jpeg" class="rounded-circle me-3" height="50px" width="50px" alt="avatar" />
                            <div>
                                <h5 class="card-title font-weight-bold mb-2 nameActu"><?php echo htmlspecialchars($actualite['nom_actualite'], ENT_QUOTES, 'UTF-8'); ?></h5>
                                <p class="card-text">
                                    <?php echo htmlspecialchars($actualite['description'], ENT_QUOTES, 'UTF-8'); ?>
                                </p>
                                <p class="card-text"><i class="far fa-clock pe-2"></i><?php echo htmlspecialchars($actualite['date_actualite'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                        </div>
                        <div class="bg-image hover-overlay ripple rounded-0">
                            <img src="../public/assets/img/<?php echo htmlspecialchars($actualite['nom_images'], ENT_QUOTES, 'UTF-8'); ?>" alt="" class="img-fluid">
                            <?php
                            if ($actualite['nom_images'] != NULL) {
                            ?>

                                <img src="<?php echo htmlspecialchars($actualite['nom_images'], ENT_QUOTES, 'UTF-8'); ?>" alt="" class="">
                            <?php } ?>
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body paraActu">

                            <div class="d-flex justify-content-between">

                                <a href="index.php?page=11&idActualite=<?php echo htmlspecialchars($actualite['id_actualite'], ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-link link-danger p-md-1 my-1" role="button">Voir l'actualité</a>
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