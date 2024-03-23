<?php
session_start();
session_destroy();  // detruit la variable de $_SESSION['idUser]; permet la deconnexion car il ramène directement à la page de connexion.
header('Location:../public/index.php');
?>