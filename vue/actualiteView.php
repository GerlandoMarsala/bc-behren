<!-- Vue d'une actualité -->
<?php
// session_start();

require '../modele/connexionBdd.php';
require '../modele/fonctions.php';

$idActualite = $_GET['idActualite'];
$actualites = getActualite($pdo, $idActualite);
$imagesActu = getImagesActu($pdo, $idActualite);


?>



<div class="containerActualites">
    <h1 class="titlePage"><span class="colorTitleB">A</span>CTUALITÉ</h1>
    <div class="borderTitlePage"></div>
    <br>
    <div>

       

        <div class="containerBackground">
            <div data-aos="fade-up" data-aos-duration="1500">
                <h2 data-aos="fade-up" data-aos-duration="1500" class="text-center my-3 titleStyle"><?php echo htmlspecialchars($actualites['nom_actualite'], ENT_QUOTES, 'UTF-8'); ?></h2>


                <div class="containerParagrapheActualites">
                    <p class="card-text text-start"><small><?php echo htmlspecialchars($actualites['date_actualite'], ENT_QUOTES, 'UTF-8'); ?></small></p>

                    <p class="paragrapheJustify"><?php echo htmlspecialchars($actualites['description'], ENT_QUOTES, 'UTF-8'); ?></p>

                    <div class="containerCardActualites">
                        <div class="card mb-3 cardDesign">
                            <?php
                            
                             foreach ($imagesActu as $imageActu) {
                                 
                            
                              
                            if (isset($imageActu['nom_images'])) {
                                echo'image recupppppp';
                            ?>
                             
                        
                                <img src="../public/assets/img/1710847787.jpg" alt="">
                            <?php } else {
                                echo'image non récuppppp';
                            }
                             } ?>
                            
                            <div class="card-body">
                                <p class="card-text secondTitleActu">Retour à l'entrainement pour les compétiteurs du BC Behren</p>
                            </div>
                        </div>
                    </div>
                    <div class="containerParagrapheActualites">
                        <h2 class="text-center py-5 titleStyle">La saison 2023-2024</h2>
                        <p class="paragrapheJustify">Le Boxing Club Behren de retour a l'entrainement pour la saison 2023-2024. Les échéances arrivent pour les compétiteurs. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi maxime cum hic aliquam suscipit est eius soluta mollitia, ipsam illo, inventore veniam eaque! Culpa quidem repellendus officiis placeat ipsa a qui sint sapiente voluptas? Rerum quaerat sunt, necessitatibus saepe veniam quasi eveniet sapiente deleniti sint eaque quae? Ipsam quas harum dicta incidunt? Debitis, reprehenderit. Quos voluptate, dolorem maiores minima laborum illo neque perspiciatis laboriosam eveniet tempore quibusdam consequatur est magnam atque sed recusandae harum modi doloremque enim illum molestias praesentium? Nemo mollitia beatae alias iusto sapiente quibusdam maxime enim, id earum quis accusantium cupiditate autem commodi, animi non? Fugit, iusto.</p>
                    </div>


                </div>
                <div>
                    &copy; BOXING CLUB BEHREN - Tous droits réservés.
                </div>
            </div>
        </div>