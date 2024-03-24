<?php
// session_start();
require '../../modele/connexionBdd.php';
require '../modele/fonctions.php';


$listeMsg = getAllMsg($pdo);

?>

<div class="containerAdminHome">


    <div>
        <h1 class="text-center my-5"></h1>
        <h1 class="titlePage"><span class="colorTitleB">M</span>ESSAGES</h1>
        <div class="borderTitlePage"></div>
    </div>
    <p class="text-center py-3">Espace ADMIN, ici vous pouvez voir, traiter, supprimer un message</p>



    <div class="container">
        <table class="table align-middle mb-0 bg-white mt-5">
            <thead class="bg-light">
                <tr class="border text-center">
                    <th class="bg-dark text-white">#</th>
                    <th class="bg-dark text-white">Date Création</th>
                    <th class="bg-dark text-white">Nom</th>
                    <th class="bg-dark text-white">Prénom</th>
                    <th class="bg-dark text-white">Objet</th>
                    <th class="bg-dark text-white">Email</th>
                    <th class="bg-dark text-white">Traiter</th>
                    <th class="bg-dark text-white">Voir plus</th>
                    <th class="bg-dark text-white">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listeMsg as $msg) { ?>
                    <tr class="border text-center">
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
                            <p>
                                <?php 
                                    if($msg['traite'] == 0){
                                        echo "Non";
                                    }else{
                                        echo "Oui";
                                    }
                                ?>
                            </p>
                        </td>
                        <td>
                            <i class="fa-solid fa-eye text-dark" data-bs-toggle="modal" data-bs-target="#msgModal-<?php echo $msg['id_messages']; ?>"></i>
                        </td>
                        <td>
                            <a href="../controller/traitement_supp_messages.php?id_message=<?php echo $msg['id_messages']; ?>"><i class="fa-solid fa-trash text-dark"></i>
                        </td>
                    </tr>
                    

                    <!-- Modal -->
                    <div class="modal fade" id="msgModal-<?php echo $msg['id_messages']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Message</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        <?php echo $msg['msg'] ?>
                                    </p>                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">
                                        <a href="../public/index.php?page=9&id_message=<?php echo $msg['id_messages']; ?>">Répondre</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                    ?>
            </tbody>
        </table>

    </div>
</div>