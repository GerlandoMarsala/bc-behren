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

<div class="row">

</div>
<div class="containerBackground">

    <div class="row g-0 py-2">
        <?php foreach ($listeActualites as $actualite) { ?>
            <div class="cardStyleActu">

                <div class="card-image-container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024" stroke-width="0" fill="currentColor" stroke="currentColor" class="image-icon">
                        <!-- <img src="assets/img/galerie-bcb9.jpg" class="img-fluid rounded-start" alt="..."> -->
                        <?php
                        if ($actualite['nom_images'] != NULL) {
                        ?>

                            <img src="<?php echo htmlspecialchars($actualite['nom_images'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
                        <?php } ?>
                    </svg>
                </div>
                <p class="card-title"><?php echo htmlspecialchars($actualite['nom_actualite'], ENT_QUOTES, 'UTF-8'); ?></p>
                <p class="card-des">
                    <?php echo htmlspecialchars($actualite['description'], ENT_QUOTES, 'UTF-8'); ?>
                </p>
                <p class="card-text"><small><?php echo htmlspecialchars($actualite['date_actualite'], ENT_QUOTES, 'UTF-8'); ?></small></p>
                <div><button class="buttonActu"><a href="index.php?page=11" class="colorTextButton">Voir l'actualité</a></button></div>

            </div>
        <?php
        }
        ?>
    </div>
</div>
</div>
</div>