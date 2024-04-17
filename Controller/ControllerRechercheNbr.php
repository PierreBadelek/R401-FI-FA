<?php

use Model\Connexion\Conn;

error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 0);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

ob_start();

$root = basename($_SERVER['DOCUMENT_ROOT']);

include_once $_SERVER['DOCUMENT_ROOT'].'/Model/Connexion/ConnexionBDD.php';
include $_SERVER['DOCUMENT_ROOT'].'/Model/ModelRechercheNbr.php';

$conn = Conn::getInstance();

// Vérifier si la connexion à la base de données est réussie
$nbrEtu = selectNbrEtu($conn);
$nbrEntreprise = selectNbrEntreprise($conn);
$nbrPersonnel = selectNbrPersonnel($conn);
$nbrOffre = selectNbrOffre($conn);

?>