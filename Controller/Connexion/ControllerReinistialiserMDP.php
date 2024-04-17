<?php

use Model\Connexion\Conn;

include '../../Model/Connexion/ConnexionBDD.php';
include '../../Model/Connexion/ModelReinitialiserMdp.php';
include '../../Model/Notification/ModelMail.php';
include '../../Model/Etudiant/ModelInscriptionEtu.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$db = Conn::GetInstance();
$code = generationToken();
$codeEtu = selectEtuCodeMail($db,$_POST['email'] );

if(isset($_POST["envoieCode"])){
envoieMail($_POST['email'],'supersae59@gmail.com','SAE', 'MDP', $code);
updateEtuCodeMail($db,$_POST['email'],$code);
setcookie("email", $_POST['email'], time() + 3600, "/");}

if(isset($_POST["confirmationCode"])  ){
if ($_POST['code'] === $codeEtu['codemail']) {
$nouveauMDP = password_hash($_POST['mdp'],PASSWORD_DEFAULT);
reinitialiserMDP($db,$nouveauMDP,$_COOKIE['email']);
header('location: ../../View/Connexion/ViewConnexion.html');
}else {
echo $codeEtu['codemail'];
}
}