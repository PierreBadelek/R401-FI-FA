<?php
include "../Controller/ControllerVerificationDroit.php"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Entreprises</title>
    <link rel="stylesheet" type="text/css" href="../asserts/css/adminMenu.css">
    <link rel="stylesheet" type="text/css" href="../asserts/css/AffichageEntreprise.css">
    <script src="../asserts/js/TousEntreprise.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="icon" href="../asserts/img/logo.png" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="../asserts/css/Cloche.css">
    <script src="../asserts/js/script.js"></script>
    <script src="../asserts/js/AdminMain.js"></script>

</head>
<body class="body">


<header class="header">
    <div class="logo-container">
        <img src="../asserts/img/logo.png" class="logo">
    </div>

    <div class="menu-container">
        <nav>
            <form method="post" action="../Controller/ControllerBtnDeco.php">
                <ul class="vertical-menu">
                    <li>
                        <button type="button" onclick="window.location.href ='ViewAdminMain.php'" name="accueil" value="Accueil" class="btnCreation">  Accueil </button>
                    </li>
                    <li>
                        <button type="button" onclick="window.location.href ='ViewAdminEtu.php'" name="etudiant" value="Etudiant" class="btnCreation"> Etudiant </button>
                    </li>
                    <li>
                        <button type="button" onclick="window.location.href ='ViewAdminEntreprise.php'" name="entreprise" value="Entreprise" class="btnCreation"> Entreprise </button>
                    </li>
                    <li>
                        <button type="button" onclick="window.location.href ='ViewAdminAdministration.php'" name="adminitrsation" class="btnCreation"> Administration </button>
                    </li>
                    <li>
                        <a href="../english/View/ViewAdminMainEn.php"> <img src="../asserts/img/traduction.png" alt="Icone de traduction" class="traduction" id="trad"></a>
                    </li>
                    <li id="account-photo">
                        <img id="photo" src="../asserts/img/utilisateur.png" alt="Image de l'utilisateur" class="utilisateur">
                        <div id="account-dropdown">
                            <form method="post" action="../Controller/ControllerBtnDeco.php">
                                <input class="" name="compte" type="submit" value="Mon compte">
                                <input class="" name="deco" type="submit" value="Se déconnecter">
                            </form>

                        </div>
                    </li>
                    <li>
                        <div class="notification">
                            <div class="icon-bell" onclick="toggleNotifications()">
                                <span class="badge" id="notificationBadge"> </span>
                            </div>
                        </div>
                        <div class="burger-menu" id="burgerMenu" style="display: none;">
                            <button type="button" id="validationButton" class="validationButton" onclick="fermerNotifications()">Fermer</button>

                            <div class="millieu">
                                <button type="button" id="showUnreadButton">Notifications non lues</button>
                                <button type="button" id="showReadButton">Notifications lues</button>
                            </div>

                            <div>
                                <h2 id="hnonlu">Notifications non lues</h2>
                                <ul id="unreadNotificationList" ></ul>

                            </div>
                            <div>
                                <h2 id="hlu">Notifications lues</h2>
                                <ul id="readNotificationList"></ul>
                            </div>

                            <button type="button" id="validationButton" class="validationButton" ">Valider</button>

                        </div>
                    </li>
                </ul>
            </form>
        </nav>
    </div>


    <form method="post" action="../Controller/ControllerBtnDeco.php">
        <ul class="vertical-menu-burger">
            <li>
                <a href="../english/View/ViewAdminMainEn.php"> <img src="../asserts/img/traduction.png" alt="Icone de traduction" class="traduction" id="trad"></a>
            </li>

            <li id="account-photo2">
                <img id="photo2" src="../asserts/img/utilisateur.png" alt="Image de l'utilisateur" class="utilisateur">
                <div id="account-dropdown2">
                    <form method="post" action="../Controller/ControllerBtnDeco.php">
                        <input class="" name="compte" type="submit" value="Mon compte">
                        <input class="" name="deco" type="submit" value="Se déconnecter">
                    </form>

                </div>
            </li>
            <li>
                <div class="notification">
                    <div class="icon-bell" onclick="toggleNotifications()">
                        <span class="badge" id="notificationBadge"> </span>
                    </div>
                </div>
                <div class="burger-menu" id="burgerMenu2" style="display: none;">
                    <button type="button" id="validationButton" class="validationButton" onclick="fermerNotifications()">Fermer</button>

                    <div class="millieu">
                        <button type="button" id="showUnreadButton">Notifications non lues</button>
                        <button type="button" id="showReadButton">Notifications lues</button>
                    </div>

                    <div>
                        <h2 id="hnonlu">Notifications non lues</h2>
                        <ul id="unreadNotificationList" ></ul>

                    </div>
                    <div>
                        <h2 id="hlu">Notifications lues</h2>
                        <ul id="readNotificationList"></ul>
                    </div>

                    <button type="button" id="validationButton" class="validationButton" ">Valider</button>

                </div>
            </li>
        </ul>
    </form>


    <div class="menu-toggle" id="menu-toggle">
        <div class="menu-icon">&#9776;</div>
        <ul class="menu">
            <li>
                <button type="button" onclick="window.location.href ='ViewAdminMain.php'" name="accueil" value="Accueil" class="btnCreation">  Accueil </button>
            </li>
            <li>
                <button type="button" onclick="window.location.href ='ViewAdminEtu.php'" name="etudiant" value="Etudiant" class="btnCreation"> Etudiant </button>
            </li>
            <li>
                <button type="button" onclick="window.location.href ='ViewAdminEntreprise.php'" name="entreprise" value="Entreprise" class="btnCreation"> Entreprise </button>
            </li>
            <li>
                <button type="button" onclick="window.location.href ='ViewAdminAdministration.php'" name="adminitrsation" class="btnCreation"> Administration </button>
            </li>
        </ul>
    </div>

</header>


<div class="boutons">
    <input type="button" onclick="window.location.href = 'View<?php echo $_SESSION['role']; ?>Main.php'" name="Retour" value="Retour" id="btnRetour">
    <input type="button" onclick="window.location.href ='View<?php echo $_SESSION['role']; ?>Entreprise.php'" value="Rechercher des entreprises" id="btnRechercherEntreprise">
</div>
<div class="page" id="entreprises-container"></div>
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
                <li><button type="button" onclick="window.location.href ='View<?php echo $_SESSION['role']; ?>Main.php'" name="accueil" value="Accueil" class="btnCreation">Accueil</button><li>';
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
