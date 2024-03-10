<?php

use Model\Conn;


include '../Model/ModelConnexion.php';
include '../Model/ConnexionBDD.php';
include '../Model/ModelModifierProfilPerso.php';
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
            header('location: ../View/ViewAdminMain.php');
        }
    } else {
        echo "Ancien mot de passe incorrect.";
    }
}


