<?php

use Model\Connexion\Conn;

error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../../Model/Connexion/ConnexionBDD.php';
include '../../Model/Etudiant/ModelModifierProfilEtu.php';

$conn = Conn::getInstance();

$root = $_SERVER['DOCUMENT_ROOT'];

$id = $_GET['ine'];
$etu = selectEtudiantIne($conn, $id);

$root = basename($_SERVER['DOCUMENT_ROOT']);
$chemin = "/".$root."/Controller/Etudiant/ControllerModifierProfilEtu.php?ine=$id";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nouveau_nom'];
    $prenom = $_POST['nouveau_prenom'];
    $adresse = $_POST['nouvelle_adresse'];
    $ville = $_POST['nouvelle_ville'];
    $codePostal = $_POST['nouveau_cp'];
    $anneeEtude = $_POST['nouvelle_anneeEtude'];
    $formation = $_POST['nouvelle_formation'];
    $email = $_POST['nouvel_email'];
    $typeentreprise = $_POST['nouveau_typeentreprise'];
    $typemission = $_POST['nouveau_typemission'];
    $mobile = $_POST['mobile'];

    updateEtu($conn, $nom, $prenom, $adresse, $ville, $codePostal, $anneeEtude, $formation, $email, $id);

    // Rediriger l'utilisateur vers la page de profil de l'étudiant mis à jour
    header("Location: " . $chemin);
    exit;
}

include("../../View/Etudiant/ViewModifierProfilEtu.php");
