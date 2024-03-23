<!-- Actualités du club -->
<?php
// session_start();

require '../modele/connexionBdd.php';
require '../modele/fonctions.php';


$listeActualites = getAllActualites($pdo);

?>








<main class="container">

    <section class="py-5 text-center container">
        <div class="row py-lg-5">

            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="titlePage"><span class="colorTitleB">A</span>CTUALITÉS</h1>

            </div>
            <p class="lead text-body-secondary">Bienvenue sur notre page "Actualités" ! Ici, vous retrouverez les informations du moment : compétitions, événements passionnants, et tout ce qui anime la vie de notre club. Cette page sera régulièrement mise à jour pour vous tenir informé(e) de tout ce qui se passe chez nous.</p>
            <h2 class="titlePageActu">DÉCOUVREZ LES DERNIÈRES NOUVELLES DU CLUB !</h2>
        </div>
    </section>








    <div class="row mb-2">
        <?php foreach ($listeActualites as $actualite) { ?>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4  h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <!-- <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong> -->
                        <h3><?php echo htmlspecialchars($actualite['nom_actualite'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <div class="mb-1 text-body-secondary"><i class="far fa-clock pe-2"></i><?php echo htmlspecialchars($actualite['date_actualite'], ENT_QUOTES, 'UTF-8'); ?></div>
                        <div class="mt-5">
                        <button type="button" class="btn  btn-outline-dark"><a class="linkActu" href="index.php?page=11&idActualite=<?php echo htmlspecialchars($actualite['id_actualite'], ENT_QUOTES, 'UTF-8'); ?>">Voir l'actualité</a></button>
                        </div>        
                    </div>
                    <div class="col-auto mx-auto">
                        <img class="bd-placeholder-im"  src="../public/assets/img/<?php  echo htmlspecialchars($actualite['nom_images'], ENT_QUOTES, 'UTF-8'); ?>" width="250" height="250" role="img">
                    </div>
                </div>
            </div>
            
        <?php
        }
        ?>
    </div>
</main>