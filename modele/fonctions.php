<?php

// fonction qui va nous permettre d'insérer les informations contact du user dans le formulaire de contact

function insertMsg($pdo, $date_creation, $nom, $prenom, $objet, $email, $msg){
    $reqInsertMsg = $pdo->prepare("INSERT INTO message(date_creation, nom, prenom, objet, email, msg) VALUES(?,?,?,?,?,?)");
    $reqInsertMsg->execute([$date_creation, $nom, $prenom, $objet, $email, $msg]);
}

