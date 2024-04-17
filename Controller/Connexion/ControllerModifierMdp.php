<?php

use Model\Connexion\Conn;


include '../../Model/Connexion/ModelConnexion.php';
include '../../Model/Connexion/ConnexionBDD.php';
include '../../Model/Personnel/ModelModifierProfilPerso.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = Conn::getInstance();
$id = $_GET['id'];
$user = selectEmailMDPRoleAdminid($conn, $id);
$motDePasseNow = htmlspecialchars($_POST['mdpnow'], ENT_QUOTES, 'UTF-8');
$motDePasseAfter= htmlspecialchars($_POST['mdpafter'], ENT_QUOTES, 'UTF-8');


if ($user) {
    if (password_verify($motDePasseNow, $user['motdepasse'])) {
        if ($motDePasseNow===$motDePasseAfter ) {
            echo "Le nouveau mot de passe est identique à l'ancien.";
        } else {
            updateMpPerso($conn,  password_hash($motDePasseAfter, PASSWORD_DEFAULT), $id);
            header('location: ../../View/Main/ViewAdminMain.php');
        }
    } else {
        echo "Ancien mot de passe incorrect.";
    }
}


