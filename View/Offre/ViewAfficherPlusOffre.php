<?php
include "../../Controller/ControllerVerificationDroit.php"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Offres</title>
    <link rel="stylesheet" type="text/css" href="../../asserts/css/adminMenu.css">
    <link rel="stylesheet" type="text/css" href="../../asserts/css/AffichageOffre.css">
    <script src="../../asserts/js/Offres.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="icon" href="../../asserts/img/logo.png" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="../../asserts/css/Cloche.css">
    <script src="../../asserts/js/script.js"></script>
    <script src="../../asserts/js/AdminMain.js"></script>

</head>
<body class="body">

<?php include("../Main/ViewHeader.php"); ?>

<div class="boutons">
    <input type="button" onclick="window.location.href = '../Main/View<?php echo $_SESSION['role']; ?>Main.php'" name="Retour" value="Retour" id="btnRetour">
    <input type="button" onclick="window.location.href ='../Entreprise/View<?php echo $_SESSION['role']; ?>Entreprise.php'" value="Rechercher des offres" id="btnRechercherOffre">
    <input type="button" onclick="window.location.href ='../test.php'" value="Elèves sélectionnés" id="btnRechercherOffre">
</div>
<div class="page" id="offres-container" style=""></div>
</body>

<?php include("../Main/ViewFooter.php"); ?>

</html>
