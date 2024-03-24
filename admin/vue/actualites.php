<?php
// session_start();
require '../../modele/connexionBdd.php';
require '../modele/fonctions.php';


$listeActualites = getAllActualites($pdo);

?>

<div class="containerAdminHome">
   

    <div>
        <h1 class="text-center my-5"></h1>
        <h1 class="titlePage"><span class="colorTitleB">A</span>CTUALITÉS</h1>
        <div class="borderTitlePage"></div>
    </div>
    <p class="text-center py-3">Espace ADMIN, ici vous pouvez ajouter, modifier, ou supprimer une actualité.</h2>

    <div class="text-center mb-5">
        <button class="buttonAjouter">
            <a href="index.php?page=3" class="buttonAjouter2">Ajouter une actualité</a>
        </button>
    </div>

    <div class="container">
        <table class="table align-middle mb-0 bg-white mt-5">
            <thead class="bg-light">
                <tr class="border text-center">
                    <th class="bg-dark text-white">#</th>
                    <th class="bg-dark text-white">Image</th>
                    <th class="bg-dark text-white">Nom de l'actualité</th>
                    <th class="bg-dark text-white">Description</th>
                    <th class="text-start bg-dark text-white">Date de l'actualité</th>
                    <th class="bg-dark text-white">Modifier</th>
                    <th class="bg-dark text-white">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listeActualites as $actualite) { ?>
                    <tr class="border text-center">
                        <td>
                            <div class="ms-3">
                                <p class="fw-bold mb-1"><?php echo $actualite['id_actualite']; ?></p>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="<?php echo '../../public/assets/img/' .  htmlspecialchars($actualite['nom_images'], ENT_QUOTES, 'UTF-8'); ?>" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1"><?php echo htmlspecialchars($actualite['nom_actualite'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </td>

                        <td>
                            <p class="text-mute mb-0"><?php echo htmlspecialchars($actualite['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </td>
                        <td>
                            <p><?php echo htmlspecialchars($actualite['date_actualite'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </td>
                        <td>
                            <a href="index.php?page=4&id_actualite=<?php echo htmlspecialchars($actualite['id_actualite'], ENT_QUOTES, 'UTF-8'); ?>"><i class="fa-solid fa-pen text-dark"></i>
                        </td>
                        <td>
                            <a href="../controller/traitement_supp_actualite.php?id_actualite=<?php echo htmlspecialchars($actualite['id_actualite'], ENT_QUOTES, 'UTF-8'); ?>"><i class="fa-solid fa-trash text-dark"></i>
                        </td>
                    </tr>


                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</div>