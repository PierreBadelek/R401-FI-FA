<?php
session_start();
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$root = basename($_SERVER['DOCUMENT_ROOT']);

if (isset($_POST['deco'])){

    // Détruire la session
    session_unset();
    session_destroy();

    $chemin = '/'.$root.'/View/Connexion/ViewAvConnexion.html';
    header('Location: '. $chemin);
    exit;

}

if (isset($_POST['compte'])){
    $chemin = '/'.$root.'/Controller/Personnel/ControllerModifierProfilPerso.php';
    header('Location: '. $chemin);
    exit;

}

ob_end_flush();
