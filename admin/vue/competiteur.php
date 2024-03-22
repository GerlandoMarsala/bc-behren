<?php
// session_start();
require '../../modele/connexionBdd.php';
require '../modele/fonctions.php';


$listeCompetiteurs = getAllCompetitor($pdo);


?>

<div class="containerAdminHome">
    <div class="logo-bc-behren">

    </div>

    <div>
        <h1 class="text-center my-5"></h1>
        <h1 class="titlePage"><span class="colorTitleB">C</span>OMPÉTITEURS</h1>
        <div class="borderTitlePage"></div>
    </div>
    <p class="text-center py-3">Espace ADMIN, ici vous pouvez ajouter, modifier ou supprimer un compétiteur</h2>
    <div class="text-center">
        <button class="buttonAjouter">
            <a href="index.php?page=7" class="buttonAjouter2">Ajouter un compétiteur</a>
        </button>
    </div>


    <div class="container">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Amateur ou Pro</th>
                <th>Victoire</th>
                <th>Défaite</th>
                <th>Nul</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($listeCompetiteurs as $competieur) { ?>
                <tr>
                    <td>
                        <div class="ms-3">
                            <p class="fw-bold mb-1">
                                <?php echo $competieur['id_competiteur']; ?>
                            </p>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="<?php echo '../../public/assets/img/' . htmlspecialchars($competieur['nom_images'], ENT_QUOTES, 'UTF-8'); ?>"
                                 alt="" style="width: 45px; height: 45px" class="rounded-circle"/>
                        </div>
                    </td>
                    <td>
                        <div class="ms-3">
                            <p class="fw-bold mb-1"><?php echo $competieur['nom']; ?></p>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1"><?php echo htmlspecialchars($competieur['prenom'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </td>

                    <td>
                        <p class="text-mute mb-0"><?php echo htmlspecialchars($competieur['pro'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </td>
                    <td>
                        <p><?php echo htmlspecialchars($competieur['victoire'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </td>
                    <td>
                        <p><?php echo htmlspecialchars($competieur['defaite'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </td>
                    <td>
                        <p><?php echo htmlspecialchars($competieur['combat_nul'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </td>
                    <td>
                        <a href="index.php?page=8&id_competiteur=<?php echo htmlspecialchars($competieur['id_competiteur'], ENT_QUOTES, 'UTF-8'); ?>"><i
                                    class="fa-solid fa-pen text-dark"></i>
                    </td>
                    <td>
                        <a href="index.php?page=9&id_competiteur=<?php echo htmlspecialchars($competieur['id_competiteur'], ENT_QUOTES, 'UTF-8'); ?>"><i
                                    class="fa-solid fa-trash text-dark"></i>
                    </td>
                </tr>


                <?php
            }
            ?>
            </tbody>
        </table>
    </div>

</div>