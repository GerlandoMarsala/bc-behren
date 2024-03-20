<?php
// session_start();
require '../../modele/connexionBdd.php';
require '../modele/fonctions.php';


$listeMsg = getAllMsg($pdo);



?>

<div class="containerAdminHome">
    <div class="logo-bc-behren">

    </div>

    <div>
        <h1 class="text-center my-5"></h1>
        <h1 class="titlePage"><span class="colorTitleB">M</span>ESSAGES</h1>
        <div class="borderTitlePage"></div>
    </div>
    <p class="text-center py-3">Espace ADMIN, ici vous pouvez voir, traiter, supprimer un message</h2>



    <div class="container">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>#</th>
                    <th>Date Création</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Objet</th>
                    <th>Email</th>
                    <th>Messages</th>
                    <th>Traiter</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listeMsg as $msg) { ?>
                    <tr>
                        <td>
                            <div class="ms-3">
                                <p class="fw-bold mb-1"><?php echo $msg['id_messages']; ?></p>
                            </div>
                        </td>
                        <td>
                        <div class="ms-3">
                                <p class="fw-bold mb-1"><?php echo $msg['date_creation']; ?></p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1"><?php echo htmlspecialchars($msg['nom'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </td>

                        <td>
                            <p class="text-mute mb-0"><?php echo htmlspecialchars($msg['prenom'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </td>
                        <td>
                            <p><?php echo htmlspecialchars($msg['objet'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </td>
                        <td>
                            <p><?php echo htmlspecialchars($msg['email'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </td>
                        <td>
                            <p><?php echo htmlspecialchars($msg['msg'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </td>
                        <td>
                            <p><?php echo htmlspecialchars($msg['traite'], ENT_QUOTES, 'UTF-8'); ?></p>
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