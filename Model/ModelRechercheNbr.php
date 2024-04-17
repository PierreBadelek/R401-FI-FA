<?php

use Model\Connexion\Conn;

include_once '../Model/Connexion/ConnexionBDD.php';
$conn = Conn::getInstance();

function selectNbrEtu($conn) {
    $sql = "SELECT COUNT(*) FROM etudiant";
    $req = $conn->prepare($sql);
    $req->execute();
    return $req->fetchColumn();
}


function selectNbrEntreprise($conn){

    $sql = "SELECT COUNT(*) FROM entreprise";
    $req = $conn->prepare($sql);
    $req->execute();
    return $req->fetchColumn();

}

function selectNbrPersonnel($conn){

    $sql = "SELECT COUNT(*) FROM administration";
    $req = $conn->prepare($sql);
    $req->execute();
    return $req->fetchColumn();

}

function selectNbrOffre($conn){

    $sql = "SELECT COUNT(*) FROM offre WHERE visible = true";
    $req = $conn->prepare($sql);
    $req->execute();
    return $req->fetchColumn();

}


?>