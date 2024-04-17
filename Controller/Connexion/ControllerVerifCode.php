<?php
session_start();
use Model\Connexion\Conn;

include '../../Model/Connexion/ConnexionBDD.php';
include '../../Model/Connexion/ModelReinitialiserMdp.php';
include '../../Model/Notification/ModelMail.php';
include '../../Model/Etudiant/ModelInscriptionEtu.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$db = Conn::GetInstance();

$errors = [];



if (isset($_POST['code']) ) {
    if ($_POST['code'] ==  $_SESSION['code']){
        header('location: ../../View/Connexion/ViewOubliMotDePasseCode.php');
    } ;
} else {
    echo json_encode($_SESSION['code']);
}







?>
