<?php

if (isset($_POST["connectionEtu"])) {

    header('Location: ../../View/Connexion/ViewConnexion.html');
    exit();

}
if (isset($_POST["creationEtu"])) {
    header('Location: ../../View/ViewNouvCompteAdmin.html');
    exit();

}
if(isset($_POST["connectionAdmin"])){

    header('Location: ../../View/Connexion/ViewConnexionAdmin.php');
    exit();
}
if(isset($_POST["btnRetour"])){

    header('Location: ../../Choix.php');
    exit();
}

