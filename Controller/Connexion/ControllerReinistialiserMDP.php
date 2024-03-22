<?php

use Model\Conn;

include '../../Model/ConnexionBDD.php';
include '../../Model/ModelReinitialiserMdp.php';
include '../../Model/ModelMail.php';
include '../../Model/ModelInscriptionEtu.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$db = Conn::GetInstance();
$code = generationToken();
$codeEtu = selectEtuCodeMail($db,$_POST['email'] );

if(isset($_POST["envoieCode"])){
envoieMail($_POST['email'],'supersae59@gmail.com','SAE', 'MDP', $code);
session_start();
$_SESSION['code'] = $code;
updateEtuCodeMail($db,$_POST['email'],$code);
setcookie("email", $_POST['email'], time() + 3600, "/");
    header('location: ../../View/ViewCode.html');}

if(isset($_POST["confirmationCode"])  ){
if ($_POST['code'] === $codeEtu['codemail']) {
$nouveauMDP = password_hash($_POST['mdp'],PASSWORD_DEFAULT);
reinitialiserMDP($db,$nouveauMDP,$_COOKIE['email']);
header('location: ../../View/ViewConnexion.php');
}else {
echo $codeEtu['codemail'];
}
}