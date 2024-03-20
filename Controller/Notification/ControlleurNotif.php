<?php

use Model\Connexion\Conn;

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "../../Model/Notification/ModelNotifation.php";
include "../../Model/Connexion/ConnexionBDD.php";

$conn = Conn::getInstance();

// Ajoutez un bloc try-catch pour capturer les erreurs
try {
    $nbnotif = nbnotif($conn);
    $notif = notif($conn);

    // Appel de la fonction verifdate
    verifdate($conn);

    semaineinsert($conn);
    sdf($conn);

    $response = [
        'nb' => $nbnotif,
        'notif' => $notif
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
