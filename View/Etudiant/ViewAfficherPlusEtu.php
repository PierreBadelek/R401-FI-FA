<?php
include "../../Controller/ControllerVerificationDroit.php"
?>

<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Etudiants</title>
    <link rel="stylesheet" type="text/css" href="../../asserts/css/adminMenu.css">
    <link rel="stylesheet" type="text/css" href="../../asserts/css/AffichageEtudiant.css">
    <script src="../../asserts/js/TousEtu.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="icon" href="../../asserts/img/logo.png" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="../../asserts/css/Cloche.css">
    <script src="../../asserts/js/AdminMain.js"></script>
    <script src="../../asserts/js/script.js"></script>

</head>
<body class="body">

<?php include("../Main/ViewHeader.php"); ?>

<div class="boutons">
    <input type="button" onclick="window.location.href = '../Main/View<?php echo $_SESSION['role']; ?>Main.php'" name="Retour" value="Retour" id="btnRetour">
    <input type="button" onclick="window.location.href ='View<?php echo $_SESSION['role']; ?>Etu.php'" value="Rechercher des étudiants" id="btnRechercherEtu">
</div>
<div  id="etudiants-container" class="etudiants-container"></div>
</body>

<?php include("../Main/ViewFooter.php"); ?>

</html>
