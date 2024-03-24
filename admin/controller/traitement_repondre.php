<?php
// session_start();
require '../../modele/connexionBdd.php';
require '../modele/fonctions.php';

if(!empty($_POST)){
    if(
        isset($_POST['id_messages'], $_POST['email'], $_POST['message'])
        && !empty($_POST['id_messages']) &&  !empty($_POST['email']) && !empty($_POST['message'])
    ){
        $response = updateRepondreMsg($pdo, 1, $_POST['id_messages']);
    }
}