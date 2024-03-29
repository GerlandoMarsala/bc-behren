<?php
// session_start();
require '../../modele/connexionBdd.php';
require '../modele/fonctions.php';


$listeCompetiteurs = getAllCompetitor($pdo);


?>

<div class="containerAdminHome">


    <div>
        <h1 class="text-center my-5"></h1>
        <h1 class="titlePage"><span class="colorTitleB">C</span>OMPÉTITEURS</h1>
        <div class="borderTitlePage"></div>
    </div>
    <p class="text-center py-3">Espace ADMIN, ici vous pouvez ajouter, modifier ou supprimer un compétiteur</h2>
    <div class="text-center mb-5">
        <button class="buttonAjouter">
            <a href="index.php?page=7" class="buttonAjouter2">Ajouter un compétiteur</a>
        </button>
    </div>


    <div class="container">
        <table class="table align-middle mb-0">
            <thead class="">
                <tr class="border text-center">
                    <th class="bg-dark text-white">#</th>
                    <th class="bg-dark text-white">Image</th>
                    <th class="bg-dark text-white">Nom</th>
                    <th class="bg-dark text-white">Prénom</th>
                    <th class="bg-dark text-white">Amateur/Pro</th>
                    <th class="bg-dark text-white">Victoire</th>
                    <th class="bg-dark text-white">Défaite</th>
                    <th class="bg-dark text-white">Nul</th>
                    <th class="bg-dark text-white">Modifier</th>
                    <th class="bg-dark text-white">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listeCompetiteurs as $competiteur) { ?>
                    <tr class="border text-center">
                        <td>
                            <div class="ms-3">
                                <p class="fw-bold mb-1">
                                    <?php echo $competiteur['id_competiteur']; ?>
                                </p>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="<?php echo '../../public/assets/img/' . htmlspecialchars($competiteur['nom_images'], ENT_QUOTES, 'UTF-8'); ?>" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                            </div>
                        </td>
                        <td>
                            <div class="ms-3">
                                <p class="fw-bold mb-1"><?php echo $competiteur['nom']; ?></p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1"><?php echo htmlspecialchars($competiteur['prenom'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </td>

                        <td>
                            <p class="text-mute mb-0">
                                <?php
                                if ($competiteur['pro']) {
                                    $rang = "Pro";
                                } else {
                                    $rang = "Amateur";
                                }

                                echo $rang; ?>
                            </p>
                        </td>
                        <td>
                            <p><?php echo htmlspecialchars($competiteur['victoire'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </td>
                        <td>
                            <p><?php echo htmlspecialchars($competiteur['defaite'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </td>
                        <td>
                            <p><?php echo htmlspecialchars($competiteur['combat_nul'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </td>
                        <td>
                            <a href="index.php?page=8&id_competiteur=<?php echo $competiteur['id_competiteur']; ?>"><i class="fa-solid fa-pen text-dark"></i>
                        </td>
                        <td>
                            <a href="../controller/traitement_supp_competiteur.php?id_competiteur=<?php echo $competiteur['id_competiteur']; ?>"><i class="fa-solid fa-trash text-dark"></i>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>