<?php
// session_start();
require '../../modele/connexionBdd.php';
require '../modele/fonctions.php';


$listeActualites = getAllActualites($pdo);

?>

<div class="containerAdminHome">
    <div class="logo-bc-behren">

    </div>

    <div>
        <h1 class="text-center my-5"></h1>
        <h1 class="titlePage"><span class="colorTitleB">A</span>CTUALITÉS</h1>
        <div class="borderTitlePage"></div>
    </div>
    <p class="text-center py-3">Espace ADMIN, ici vous pouvez ajouter, modifier, ou supprimer une actualité.</h2>

    <div class="text-center py-5">
        <button>
            <a href="index.php?page=3">Ajouter une actualité</a>
        </button>
    </div>
    <table class="table">
        <thead>
            <tr>



                <!-- ICI CONTINUER, METTRE L'ACTU EN DYNAMIQUE DANS LE BACK OFFICE ET ENSUITE SUR LE SITE WEB -->
                <th scope="col">#</th>
                <th scope="col">Nom de l'actualité</th>
                <th scope="col">Description</th>
                <th scope="col">Date de l'actualité</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>

        </thead>
        <tbody>
            <?php foreach ($listeActualites as $actualite) {  ?>
                <tr>
                    <th scope="row"><?php  echo htmlspecialchars($actualite['id_actualite'], ENT_QUOTES, 'UTF-8'); ?></th>
                    <td><?php  echo htmlspecialchars($actualite['nom_actualite'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php  echo htmlspecialchars($actualite['date_actualite'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <!-- <td>Photos reprise.jpg</td> -->
                    <td><?php  echo htmlspecialchars($actualite['description'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><a href="index.php?page=4&id_actualite=<?php echo htmlspecialchars($actualite['id_actualite'], ENT_QUOTES,'UTF-8');?>"><i class="fa-solid fa-pen text-dark"></a></td>
                    <td><a href="index.php?page=5"><i class="fa-solid fa-trash text-dark"></a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>