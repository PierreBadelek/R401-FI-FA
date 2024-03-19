<?php

use Model\Conn;

include '../Model/ConnexionBDD.php';
include '../Model/ModelReinitialiserMdp.php';
include '../Model/ModelMail.php';
include '../Model/ModelInscriptionEtu.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$db = Conn::GetInstance();
$code = generationToken();



$errors = array();



if(isset($_POST["envoieCode"])){
    session_start();
    envoieMail($_POST['email'],'supersae59@gmail.com','SAE', 'MDP', $code);
    updateEtuCodeMail($db,$_POST['email'],$code);
    $_SESSION['code'] = $code ;
    setcookie("email", $_POST['email'], time() + 3600, "/");
    header('location: ../View/ViewCode.html');
    exit;
} else {
    $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
    reinitialiserMDP($db,$mdp,$_COOKIE['email']);
    header('location: ../View/ViewConnexion.html');
}





exit;
?>


