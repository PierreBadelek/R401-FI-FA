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
<footer class="footer">
    <div class="footer-content">
        <div class="footer-section about">
            <h2>À propos de nous</h2>
            <p>Le Gestionnaire des Apprentis est une plateforme dédiée à la gestion des étudiants, des offres et des entreprises pour les programmes d'apprentissage.</p>
        </div>

        <div class="footer-section contact">
            <h2>Contactez-nous</h2>
            <p>Email : communication@uphf.fr</p>
            <p> Université Polytechnique Hauts-de-France - Campus Mont Houy - 59313 Valenciennes Cedex 9 | +33 (0)3 27 51 12 34</p>
        </div>

        <div class="footer-section links">
            <h2>Liens rapides</h2>
            <ul>
                <li><button type="button" onclick="window.location.href ='View<?php echo $_SESSION['role']; ?>Main.php'" name="accueil" value="Accueil" class="btnCreation">Accueil</button><li>
                <li><button type="button" onclick="window.location.href ='View<?php echo $_SESSION['role']; ?>Etu.php'" name="etudiant" value="Etudiant" class="btnCreation">Etudiant</button></li>
                <li><button type="button" onclick="window.location.href ='View<?php echo $_SESSION['role']; ?>Entreprise.php'" name="entreprise" value="Entreprise" class="btnCreation">Entreprise</button></li>
                <?php
                if ($_SESSION['role'] === 'admin') {
                    echo '<li><button type="button" onclick="window.location.href =\'View' . $_SESSION['role'] . 'Administration.php\'" name="administration" value="Administration" class="btnCreation">Administration</button></li>';
                }
                ?>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2023 Gestionnaire des Apprentis | Tous droits réservés</p>
    </div>
</footer>

</html>
