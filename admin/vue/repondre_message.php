<?php

require '../../modele/connexionBdd.php';
require '../modele/fonctions.php';

$idMessage = $_GET['id_message'];

?>
<div class="containerAdminHome">


    <div>
        <h1 class="text-center my-2"></h1>
        <h1 class="titlePage"><span class="colorTitleB">R</span>ÉPONDRE MESSAGE</h1>
        <div class="borderTitlePage"></div>

        <div class="container">
        <form method="post" action="../controller/traitement_repondre.php">
        <input type="hidden" name="id_messages" value="<?php echo htmlspecialchars($idMessage, ENT_QUOTES, 'UTF-8'); ?>">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Adresse email</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>

            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-dark">Répondre</button>
            </div>
        </form>
        </div>

    </div>

    <!-- <a href="../controller/traitement_repondre.php?id_message=<?php //echo $msg['id_messages']; ?> -->