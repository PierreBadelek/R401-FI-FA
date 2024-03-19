<?php include '../../Controller/ControllerVerificationDroit.php';
include "../../Controller/ControllerRechercheNbr.php" ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration</title>
    <link rel="stylesheet" type="text/css" href="../../asserts/css/adminAdministration.css">
    <link rel="icon" href="../../asserts/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../../asserts/css/Cloche.css">
    <script src="../../asserts/js/script.js"></script>
</head>
<body class="body">


<?php include("../Main/ViewHeader.php"); ?>


<div class="body-container">

    <h1 class="titlePrinci">Bienvenue dans le Gestion du Personnel</h1>

    <div class="rectangle-haut">
        <div class="all-text">
            <div class="rectangleNbr">
                <h3 class="nbrEtu">Nombre d'étudiant</h3>
                <?php
                if (isset($nbrEtu)) {
                    echo "<h3 class='resNbrEtu'>" . $nbrEtu . "</h3>";
                } else {
                    echo "<h3 class='nbr'>Erreur: Nombre non défini</h3>";
                }
                ?>
            </div>

            <div class="rectangleNbr">
                <h3 class="nbrEntreprise">Nombre d'entreprise</h3>
                <?php
                if (isset($nbrEntreprise)) {
                    echo "<h3 class='resNbrEtu'>" . $nbrEntreprise . "</h3>";
                } else {
                    echo "<h3 class='nbr'>Erreur: Nombre non défini</h3>";
                }
                ?>
            </div>

            <div class="rectangleNbr">
                <h3 class="nbrOff">Nombre d'offre</h3>
                <?php
                if (isset($nbrOffre)) {
                    echo "<h3 class='resNbrEtu'>" . $nbrOffre . "</h3>";
                } else {
                    echo "<h3 class='nbr'>Erreur: Nombre non défini</h3>";
                }
                ?>
            </div>

            <div class="rectangleNbr">
                <h3 class="nbrPers">Nombre de personnel</h3>
                <?php
                if (isset($nbrPersonnel)) {
                    echo "<h3 class='resNbrEtu'>" . $nbrPersonnel . "</h3>";
                } else {
                    echo "<h3 class='nbr'>Erreur: Nombre non défini</h3>";
                }
                ?>
            </div>
        </div>
    </div>


</div>

<div class="rectangle-mid">

    <div class="all-text2">

        <h3 class="titre">Equipe pédagogique</h3>



        <p class="description">Vous trouverez ici l’ensemble des personnes ayant un compte sur l’application. Ils sont triés par leur
            statut dans l’université.
        </p>

        <div class="all-text3">

            <h3 class="titre2">Compte de l'administration</h3>
            <form method="post" >

                <button type="button" onclick="window.location.href ='ViewAjoutAdministration.php'" name="btnAjoutAdministration" class="ajoutAdministration" > Ajouter Administration </button>

            </form>
            <p class="description2">Vous trouverez ici l’ensemble des comptes du personnel avec leurs rôles, leurs permissions, leurs adresses mail etc... </p>

            <div class="button-filtre">

                <button class="compteTous" id="tous">
                    Tous<span class="nbrPersonnel">(<?php
                        if (isset($nbrPersonnel)) {
                            echo $nbrPersonnel;
                        } else {
                            echo "Erreur: Nombre non défini";
                        }
                        ?>)</span>
                </button>
                <button class="nbSecretaire" id="secretaire">Secrétaire</button>
                <button class="nbCD" id="cd">Chargé de développement</button>
                <button class="nbRP" id="rp">Responsable pédagogique</button>

            </div>

            <table id="dataTable">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Formation</th>
                    <th>Rôle</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>

        </div>



    </div>

</div>

</div>

<script src="../../asserts/js/AdminAdminitration.js"></script>

<footer class="footer" id="footer">
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
                <li><a href="../Main/ViewAdminMain.php">Accueil</a></li>
                <li><a href="../Etudiant/ViewAdminEtu.php">Etudiant</a></li>
                <li><a href="../Entreprise/ViewAdminEntreprise.php">Entreprise</a></li>
                <li><a href="ViewAdminAdministration.php">Administration</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2023 Gestionnaire des Apprentis | Tous droits réservés</p>
    </div>
</footer>
</body>
</html>
