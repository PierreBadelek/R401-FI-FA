<?php

use Model\Connexion\Conn;

error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../../Model/Etudiant/ModelMdpEtu.php';
include '../../Model/Connexion/ConnexionBDD.php';


$conn = Conn::getInstance();
$email = $_COOKIE["mailEtu"];

if ($_POST['token'] && $_COOKIE['token']) {
    $token = $_POST['token'];
    if (isset($_POST['Valider'])) {
        $mdp = $_POST['mdp'];
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        mdpEtu($conn,$token,$mdp);
        session_start();
        $_SESSION["Etu"] = true;
        header('location: ../View/Connexion/ViewConnexion.html');
    }
} else {
    // Gestion des erreurs si le token est manquant
    echo "Le lien de réinitialisation du mot de passe est incorrect ou a expiré.";
    suppEtu($conn,$email);
    header('location: ../../View/ViewNouvCompte.php');
    exit;
}