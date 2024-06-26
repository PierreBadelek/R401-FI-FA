<?php
include '../../Controller/ControllerVerificationDroit.php';
include "../../Controller/ControllerRechercheNbr.php" ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="../../asserts/css/adminMenu.css">
    <link rel="stylesheet" type="text/css" href="../../asserts/css/ajoutEtudiant.css">
    <link rel="stylesheet" type="text/css" href="../../asserts/css/demandeAjoutOffre.css">
    <link rel="stylesheet" type="text/css" href="../../asserts/css/AffichageEtudiant.css">
    <link rel="stylesheet" type="text/css" href="../../asserts/css/AffichageOffre.css">
    <link rel="stylesheet" type="text/css" href="../../asserts/css/AjoutPersonnel.css">
    <link rel="stylesheet" type="text/css" href="../../asserts/css/AffichageEntreprise.css">
    <link rel="stylesheet" type="text/css" href="../../asserts/css/Cloche.css">
    <script src="../../asserts/js/script.js"></script>
    <link rel="icon" href="../../asserts/img/logo.png" type="image/x-icon">

    <script src="../../asserts/js/AdminMain.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../../asserts/js/affichageListes.js" defer></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('AjEtu').addEventListener('click', function () {
                openPopup('popUpEtu');
            });
        });
    </script>
</head>
<body class="body">



<div id="popUpEtu" class="popupEtu">

    <div class="popup-content" id="formulaireAjoutEtudiant">


        <form action="../../Controller/Etudiant/ControllerAjoutEtudiant.php" method="post" >
            <ul>
                <li>
                    <label for="nom">Nom:</label>
                    <input type="text" id="nom" name="nom" class="input" />
                </li>
                <li>
                    <label for="prenom">Prénom:</label>
                    <input type="text" id="prenom" name="prenom" class="input" />
                </li>
                <li>
                    <label for="dateDeNaissance">Date de naissance:</label>
                    <input type="date" id="dateDeNaissance" name="dateDeNaissance" class="input" />
                </li>
                <li>
                    <label for="adresse">Adresse:</label>
                    <input type="text" id="adresse" name="adresse" class="input" />
                </li>
                <li>
                    <label for="ville">Ville:</label>
                    <input type="text" id="ville" name="ville" class="input" />
                </li>
                <li>
                    <label for="codePostal">Code postal:</label>
                    <input type="number" id="codePostal" name="codePostal" class="input" />
                </li>
                <li>
                    <label for="ine">INE:</label>
                    <input type="text" id="ine" name="ine" class="input"/>
                </li>
                <li>
                    <label for="anneeEtude">Année d'étude:</label>
                    <input type="number" id="anneeEtude" name="anneeEtude" class="input" />
                </li>
                <li>
                    <label for="formation">Formation:</label>
                    <select name="formation" id="formation" class="input">
                        <option value="BUT Info Parcours A">BUT Info Parcours A</option>
                        <option value="BUT Info Parcours B">BUT Info Parcours B</option>
                    </select>
                </li>
                <li>
                    <label for="mission">Type de mission:</label>
                    <input type="text" id="mission" name="mission" class="input" />
                </li>
                <li>
                    <label for="entreprise">Type d'entreprise:</label>
                    <input type="text" id="entreprise" name="entreprise" class="input" />
                </li>
                <li>
                    <label for="mobile">
                        Mobilité:
                        <select name="mobile" id="mobile">
                            <option value="10">10km</option>
                            <option value="50">50km</option>
                            <option value="100">100km</option>
                            <option value="500">500km</option>
                            <option value="1000">1000km</option>
                            <option value="99999">International</option>
                        </select>
                    </label>
                </li>
                <li>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="input" />
                </li>
                <li>
                    <label for="mdp">Mot de passe:</label>
                    <input type="password" id="mdp" name="mdp" class="input"/>
                </li>
            </ul>

            <div class="button">
                <button type="submit" id="ajoutEtudiant" name="ajoutEtudiant">Valider</button>
            </div>
        </form>

        <span class="close" onclick="closePopup('popUpEtu')">&times;</span>
    </div>
</div>


<?php include("ViewHeader.php"); ?>


<div class="body-container">

    <div class="rectangle-haut">
        <div class="image-box">
            <img class="banniere" src="../../asserts/img/banniere.png" alt="Bannière">
        </div>
        <div class="all-text">
            <div class="rectangle-info">
                <div class="info-box">
                    <h3 class="nbrEtu">Nombre d'étudiants</h3>
                    <?php
                    if (isset($nbrEtu)) {
                        echo "<h3 class='resNbrEtu'>" . $nbrEtu . "</h3>";
                    } else {
                        echo "<h3 class='nbr'>Erreur: Nombre non défini</h3>";
                    }
                    ?>
                </div>
            </div>
            <div class="rectangle-info">
                <div class="info-box">
                    <h3 class="nbrEnt">Nombre d'entreprises</h3>
                    <?php
                    if (isset($nbrEntreprise)) {
                        echo "<h3 class='resNbrEtu'>" . $nbrEntreprise . "</h3>";
                    } else {
                        echo "<h3 class='nbr'>Erreur: Nombre non défini</h3>";
                    }
                    ?>
                </div>
            </div>
            <div class="rectangle-info">
                <div class="info-box">
                    <h3 class="nbrOff">Nombre d'offres</h3>
                    <?php
                    if (isset($nbrOffre)) {
                        echo "<h3 class='resNbrEtu'>" . $nbrOffre . "</h3>";
                    } else {
                        echo "<h3 class='nbr'>Erreur: Nombre non défini</h3>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="titreAppli">
            <h3 class="title">Bienvenue sur le Gestionnaire des Apprentis</h3>
        </div>
    </div>



    <section class="section-mid">

        <div class="rectangle">

            <h3 class="titreAjout">Ajouter un étudiant</h3>
            <input class="AjRapide" type="button" value="Ajouter" id="AjEtu">

        </div>

    </section>

    <div class="main-rectangle">
        <div class="ajouter-recent">Ajouté récemment</div>
        <div class="other-rectangles">
            <div class="sub-rectangle">
                <h3 class="texteInRect">Etudiant</h3>
                <div class="inner-rectangle" id="etudiants-container"></div>
                <input class="btnAfficherPlus" type="button" value="Afficher Plus" id="afficherEtudiants">
            </div>
            <div class="sub-rectangle">
                <h3 class="texteInRect">Offre</h3>
                <div class="inner-rectangle" id="offres-container"></div>
                <input class="btnAfficherPlus" type="button" value="Afficher Plus" id="afficherOffres">
            </div>
            <div class="sub-rectangle">
                <h3 class="texteInRect">Entreprise</h3>
                <div class="inner-rectangle" id="entreprises-container"></div>
                <input class="btnAfficherPlus" type="button" value="Afficher Plus" id="afficherEntreprises">
            </div>
        </div>
    </div>

    <?php include("ViewFooter.php"); ?>

</div>
</body>


</html>
