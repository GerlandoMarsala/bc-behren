<?php
// session_start();
require '../../modele/connexionBdd.php';
require '../modele/fonctions.php';


// $listeMsg = getAllMsg($pdo);



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
                <?php foreach ($listeMsg as $msg) { ?>
                    <tr>
                        <td>
                            <div class="ms-3">
                                <p class="fw-bold mb-1"><?php echo $msg['id_competiteur']; ?></p>
                            </div>
                        </td>
                        <td>
                        <div class="ms-3">
                                <p class="fw-bold mb-1"><?php echo $msg['nom']; ?></p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1"><?php echo htmlspecialchars($msg['prenom'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </td>

                        <td>
                            <p class="text-mute mb-0"><?php echo htmlspecialchars($msg['pro'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </td>
                        <td>
                            <p><?php echo htmlspecialchars($msg['v'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </td>
                        <td>
                            <p><?php echo htmlspecialchars($msg['d'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </td>
                        <td>
                            <p><?php echo htmlspecialchars($msg['n'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </td>
                        <td>
                            <p><?php echo htmlspecialchars($msg['supprimer'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </td>
                        <td>
                            <a href="index.php?page=4&id_messages=<?php echo htmlspecialchars($msg['id_messages'], ENT_QUOTES, 'UTF-8'); ?>"><i class="fa-solid fa-pen text-dark"></i>
                        </td>
                        <td>
                            <a href="index.php?traitement_supp_messages.php&id_messages=<?php echo htmlspecialchars($msg['id_messages'], ENT_QUOTES, 'UTF-8'); ?>"><i class="fa-solid fa-trash text-dark"></i>
                        </td>
                    </tr>


                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</div>