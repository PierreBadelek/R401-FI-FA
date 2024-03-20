<?php
$root = basename($_SERVER['DOCUMENT_ROOT']);
?>

<link rel="stylesheet" href="/<?php echo $root ?>/asserts/css/header.css">

<header class="header">
    <div class="logo-container">
        <img src="/<?php echo $root ?>/asserts/img/logo.png" class="logo">
    </div>

    <div class="menu-container">
        <nav>
            <form method="post" action="/<?php echo $root ?>/Controller/Connexion/ControllerBtnDeco.php">
                <ul class="vertical-menu">
                    <li>
                        <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Main/ViewAdminMain.php'" name="accueil" value="Accueil" class="btnCreation">  Accueil </button>
                    </li>
                    <li>
                        <div class="dropdown">
                            <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Etudiant/ViewAdminEtu.php'" name="etudiant" value="Etudiant" class="btnCreation">Etudiant</button>
                            <div class="dropdown-content">
                                <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Etudiant/ViewAjoutEtudiant.php'" name="etudiant" value="Etudiant" class="item">Créer un étudiant</button>
                                <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Etudiant/ViewAdminEtu.php'" name="etudiant" value="Etudiant" class="item">Rechercher un étudiant</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Entreprise/ViewAdminEntreprise.php'" name="entreprise" value="Entreprise" class="btnCreation">Entreprise</button>
                            <div class="dropdown-content">
                                <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Entreprise/ViewAjoutEntreprise.php'" name="entreprise" value="Entreprise" class="item">Créer une entreprise</button>
                                <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Entreprise/ViewAdminEntreprise.php'" name="entreprise" value="Entreprise" class="item">Rechercher une entreprise</button>

                                <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Offre/ViewAjoutOffre.php'" name="Offre" value="Offre" class="item">Créer une offre</button>
                                <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Entreprise/ViewAdminEntreprise.php'" name="Offre" value="Offre" class="item">Rechercher une offre</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Personnel/ViewAdminAdministration.php'" name="adminitrsation" value="adminitrsation" class="btnCreation">Administration</button>
                            <div class="dropdown-content">
                                <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Personnel/ViewAjoutAdministration.php'" name="adminitrsation" value="adminitrsation" class="item">Créer un membre du personnel</button>
                                <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Personnel/ViewAdminAdministration.php'" name="adminitrsation" value="adminitrsation" class="item">Voir les membres du personnel</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/<?php echo $root ?>/english/View/ViewAdminMainEn.php"> <img src="/<?php echo $root ?>/asserts/img/traduction.png" alt="Icone de traduction" class="traduction" id="trad"></a>
                    </li>
                    <li id="account-photo">
                        <img id="photo" src="/<?php echo $root ?>/asserts/img/utilisateur.png" alt="Image de l'utilisateur" class="utilisateur">
                        <div id="account-dropdown">
                            <form method="post" action="/<?php echo $root ?>/Controller/Connexion/ControllerBtnDeco.php">
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


    <div class="menu-container2">
        <form method="post" action="/<?php echo $root ?>/Controller/Connexion/ControllerBtnDeco.php">
            <ul class="vertical-menu-burger">
                <li>
                    <a href="/<?php echo $root ?>/english/View/ViewAdminMainEn.php"> <img src="/<?php echo $root ?>/asserts/img/traduction.png" alt="Icone de traduction" class="traduction" id="trad"></a>
                </li>

                <li id="account-photo2">
                    <img id="photo2" src="/<?php echo $root ?>/asserts/img/utilisateur.png" alt="Image de l'utilisateur" class="utilisateur">
                    <div id="account-dropdown2">
                        <form method="post" action="/<?php echo $root ?>/Controller/Connexion/ControllerBtnDeco.php">
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
                    <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Main/ViewAdminMain.php'" name="accueil" value="Accueil" class="btnCreation">  Accueil </button>
                </li>
                <li>
                    <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View//Etudiant/ViewAdminEtu.php'" name="etudiant" value="Etudiant" class="btnCreation"> Etudiant </button>
                    <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Etudiant/ViewAjoutEtudiant.php'" name="etudiant" value="Etudiant" class="sousBtnCreation">Créer un étudiant</button>
                    <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Etudiant/ViewAdminEtu.php'" name="etudiant" value="Etudiant"  class="sousBtnCreation">Rechercher un étudiant</button>
                </li>
                <li>
                    <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Entreprise/ViewAdminEntreprise.php'" name="entreprise" value="Entreprise" class="btnCreation"> Entreprise </button>
                    <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Entreprise/ViewAjoutEntreprise.php'" name="entreprise" value="Entreprise" class="sousBtnCreation">Créer une entreprise</button>
                    <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Entreprise/ViewAdminEntreprise.php'" name="entreprise" value="Entreprise" class="sousBtnCreation">Rechercher une entreprise</button>

                    <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Offre/ViewAjoutOffre.php'" name="Offre" value="Offre" class="sousBtnCreation">Créer une offre</button>
                    <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Entreprise/ViewAdminEntreprise.php'" name="Offre" value="Offre" class="sousBtnCreation">Rechercher une offre</button>
                </li>
                <li>
                    <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Personnel/ViewAdminAdministration.php'" name="adminitrsation" class="btnCreation"> Administration </button>
                    <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Personnel/ViewAjoutAdministration.php'" name="adminitrsation" value="adminitrsation" class="sousBtnCreation">Créer un membre du personnel</button>
                    <button type="button" onclick="window.location.href ='/<?php echo $root ?>/View/Personnel/ViewAdminAdministration.php'" name="adminitrsation" value="adminitrsation" class="sousBtnCreation">Voir les membres du personnel</button>
                </li>
            </ul>
        </div>
    </div>

    <script src="/<?php echo $root ?>/asserts/js/script.js" defer></script>
    <script src="/<?php echo $root ?>/asserts/js/header.js" defer></script>
    <link rel="icon" href="/<?php echo $root ?>/asserts/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/<?php echo $root ?>/asserts/css/Cloche.css">

</header>