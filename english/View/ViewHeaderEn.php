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
                        <button type="button" onclick="window.location.href ='/<?php echo $root ?>/english/View/ViewAdminMainEn.php'" name="accueil" value="Accueil" class="btnCreation">  Homepage </button>
                    </li>
                    <li>
                        <div class="dropdown">
                            <button type="button" onclick="window.location.href ='/<?php echo $root ?>/english/View/ViewAdminEtuEn.php'" name="etudiant" value="Etudiant" class="btnCreation">Student</button>
                            <div class="dropdown-content">
                                <button type="button" name="etudiant" value="Etudiant" class="item">Add a student</button>
                                <button type="button" onclick="window.location.href ='/<?php echo $root ?>/english/View/ViewAdminEtuEn.php'" name="etudiant" value="Etudiant" class="item">Research a student</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <button type="button" onclick="window.location.href ='/<?php echo $root ?>/english/View/ViewAdminEntrepriseEn.php'" name="entreprise" value="Entreprise" class="btnCreation">Company</button>
                            <div class="dropdown-content">
                                <button type="button" onclick="window.location.href ='/<?php echo $root ?>english/View/ViewAdminEntrepriseEn.php'" name="entreprise" value="Entreprise" class="item">Add a company</button>
                                <button type="button" name="entreprise" value="Entreprise" class="item">Research a company</button>

                                <button type="button"name="Offre" value="Offre" class="item">Add an offer</button>
                                <button type="button" onclick="window.location.href ='/<?php echo $root ?>english/View/ViewAdminEntrepriseEn.php'" name="Offre" value="Offre" class="item">Research an offer</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <button type="button" name="adminitrsation" value="adminitrsation" class="btnCreation">Administration</button>
                            <div class="dropdown-content">
                                <button type="button" name="adminitrsation" value="adminitrsation" class="item">Add a staff member</button>
                                <button type="button" name="adminitrsation" value="adminitrsation" class="item">Research a staff member</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/<?php echo $root ?>/english/View/ViewAdminMainEn.php"> <img src="/<?php echo $root ?>/asserts/img/traduction.png" alt="Translation icon" class="traduction" id="trad"></a>
                    </li>
                    <li id="account-photo">
                        <img id="photo" src="/<?php echo $root ?>/asserts/img/utilisateur.png" alt="User image" class="utilisateur">
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
                            <button type="button" id="validationButton" class="validationButton" onclick="fermerNotifications()">Close</button>

                            <div class="millieu">
                                <button type="button" id="showUnreadButton">Unread notifications</button>
                                <button type="button" id="showReadButton">Read notifications</button>
                            </div>

                            <div>
                                <h2 id="hnonlu">Unread notifications</h2>
                                <ul id="unreadNotificationList" ></ul>

                            </div>
                            <div>
                                <h2 id="hlu">Read notifications</h2>
                                <ul id="readNotificationList"></ul>
                            </div>

                            <button type="button" id="validationButton" class="validationButton" ">Submit</button>

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
                        <button type="button" id="validationButton" class="validationButton" onclick="fermerNotifications()">Close</button>

                        <div class="millieu">
                            <button type="button" id="showUnreadButton">Unread notifications</button>
                            <button type="button" id="showReadButton">Read notifications</button>
                        </div>

                        <div>
                            <h2 id="hnonlu">Unread notifications</h2>
                            <ul id="unreadNotificationList" ></ul>

                        </div>
                        <div>
                            <h2 id="hlu">Read notifications</h2>
                            <ul id="readNotificationList"></ul>
                        </div>

                        <button type="button" id="validationButton" class="validationButton" ">Submit</button>

                    </div>
                </li>
            </ul>
        </form>


        <div class="menu-toggle" id="menu-toggle">
            <div class="menu-icon">&#9776;</div>
            <ul class="menu">
                <li>
                    <button type="button" onclick="window.location.href ='/<?php echo $root ?>english/View/ViewAdminMainEn.php'" name="accueil" value="Accueil" class="btnCreation">  Homepage </button>
                </li>
                <li>
                    <button type="button" onclick="window.location.href ='/<?php echo $root ?>/english/View/ViewAdminEtuEn.php'" name="etudiant" value="Etudiant" class="btnCreation"> Student </button>
                    <button type="button" name="etudiant" value="Etudiant" class="sousBtnCreation">Add a student</button>
                    <button type="button" onclick="window.location.href ='/<?php echo $root ?>/english/View/ViewAdminEtuEn.php'" name="etudiant" value="Etudiant"  class="sousBtnCreation">Research a student</button>
                </li>
                <li>
                    <button type="button" onclick="window.location.href ='/<?php echo $root ?>/english/View/ViewAdminEntrepriseEn.php'" name="entreprise" value="Entreprise" class="btnCreation"> Company </button>
                    <button type="button" name="entreprise" value="Entreprise" class="sousBtnCreation">Add a company</button>
                    <button type="button" onclick="window.location.href ='/<?php echo $root ?>/english/View/ViewAdminEntrepriseEn.php'" name="entreprise" value="Entreprise" class="sousBtnCreation">Research a company</button>

                    <button type="button" name="Offre" value="Offre" class="sousBtnCreation">Add an offer</button>
                    <button type="button" onclick="window.location.href ='/<?php echo $root ?>/english/View/ViewAdminEntrepriseEn.php'" name="Offre" value="Offre" class="sousBtnCreation">Research an offer</button>
                </li>
                <li>
                    <button type="button" name="adminitrsation" class="btnCreation"> Administration </button>
                    <button type="button" name="adminitrsation" value="adminitrsation" class="sousBtnCreation">Add a staff member</button>
                    <button type="button" name="adminitrsation" value="adminitrsation" class="sousBtnCreation">Research a staff member</button>
                </li>
            </ul>
        </div>
    </div>

    <script src="/<?php echo $root ?>/asserts/js/script.js" defer></script>
    <script src="/<?php echo $root ?>/asserts/js/header.js" defer></script>
    <link rel="icon" href="/<?php echo $root ?>/asserts/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/<?php echo $root ?>/asserts/css/Cloche.css">
    <script src="/<?php echo $root ?>/asserts/js/script.js"></script>

</header>