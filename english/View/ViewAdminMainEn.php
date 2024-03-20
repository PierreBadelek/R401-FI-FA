<?php

use Model\Conn;

include "../../Controller/ControllerVerificationDroit.php";
include "../../Controller/ControllerRechercheNbr.php";
?>

<!DOCTYPE html>
<html lang="en">
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
    <link rel="icon" href="../../asserts/img/logo.png" type="image/x-icon">

    <script src="../../asserts/js/AdminMain.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="../../asserts/js/script.js"></script>


    <script>
        // Écouteur d'événements pour le bouton d'ouverture
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('AjEtu').addEventListener('click', function () {
                openPopup('popUpEtu');
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('AjOffre').addEventListener('click', function () {
                openPopup('popUpOffre');
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('AjPerso').addEventListener('click', function () {
                openPopup3();
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
                    <label for="nom">Name:</label>
                    <input type="text" id="nom" name="nom" class="input" />
                </li>
                <li>
                    <label for="prenom">First Name:</label>
                    <input type="text" id="prenom" name="prenom" class="input" />
                </li>
                <li>
                    <label for="dateDeNaissance">Birth Date:</label>
                    <input type="date" id="dateDeNaissance" name="dateDeNaissance" class="input" />
                </li>
                <li>
                    <label for="adresse">Address:</label>
                    <input type="text" id="adresse" name="adresse" class="input" />
                </li>
                <li>
                    <label for="ville">City:</label>
                    <input type="text" id="ville" name="ville" class="input" />
                </li>
                <li>
                    <label for="codePostal">Postal Code:</label>
                    <input type="number" id="codePostal" name="codePostal" class="input" />
                </li>
                <li>
                    <label for="ine">INE:</label>
                    <input type="text" id="ine" name="ine" class="input"/>
                </li>
                <li>
                    <label for="anneeEtude">Study Year:</label>
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
                    <label for="mission">Mission type:</label>
                    <input type="text" id="mission" name="mission" class="input" />
                </li>
                <li>
                    <label for="entreprise">Company Type:</label>
                    <input type="text" id="entreprise" name="entreprise" class="input" />
                </li>
                <li>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="input" />
                </li>
                <li>
                    <label for="mobile">
                        Mobility:
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
                    <label for="mdp">Password:</label>
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

<div id="popUpOffre" class="popupEtu">
    <div class="popup-content">

        <form action="../../Controller/Offre/ControllerAjouOffre.php" method="post" id="formulaire">

            <p>
                Offer name :
            </p>
            <label for="offre"></label><input type="text" name="Nom" id="offre">

            <p>
                Offer domain :
            </p>
            <label for="domaine"></label><input type="text" name="Domaine" id="domaine">

            <p>
                Mission :
            </p>
            <label for="mission"></label><textarea name="Mission" id="mission" class="zoneText"></textarea>

            <p>
                Number of students :
            </p>
            <label for="nbetudiant"></label><input type="text" name="NbEtudiant" id="nbetudiant"><br>

            <p id="message" class="error-message"></p>

            <p>Company :</p>
            <label for="entreprise"></label><select name="entreprise" id="entreprise">
                <?php
                include_once '../../Model/ConnexionBDD.php';
                $conn = Conn::getInstance();
                $sql = "SELECT identreprise, nom FROM entreprise";
                $result = $conn->query($sql);
                // Boucler à travers les résultats de la requête pour afficher les entreprises dans la liste déroulante
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $row['identreprise'] . "'>" . $row['nom'] . "</option>";
                }
                ?>
            </select><br>


            <button type="button" id="redirigerVersAjoutEntreprise" onclick="redirectEntreprise()">Company creation</button>

            <p>Other file(s) :</p>
            <input type="file" name="fichier" id="fichier"><br>
            <br>
            <p>
                Parcours :
            </p>
            <label for="parcours"></label>
            <select name="Parcours" id="parcours">
                <option value="GEII">GEII</option>
                <option value="GIM">GIM</option>
                <option value="GMP">GMP</option>
                <option value="GEA">GEA</option>
                <option value="TCV">TCV</option>
                <option value="QLIQ">QLIQ</option>
                <option value="TCc">TCc</option>
                <option value="INFO">INFO</option>
                <option value="Mph">Mph</option>
            </select><br>

            <label for="brouillon"></label><input type="checkbox" name="Brouillon" id="brouillon">
            <label>
                Save as scratch
            </label><br>

            <label for="visible"></label><input type="checkbox" name="Visible" id="visible">
            <label>
                Do you want the offer to be visible ?
            </label><br>

            <input type="submit" value="Save offer" id="enregistreroffre" name="EnregistrerOffre"><br>
        </form>

        <span class="close" onclick="closePopup2()">&times;</span>
    </div>
</div>

<div id="popUpPerso" class="popupEtu">
    <div class="popup-content">

        <form action="../../Controller/Personnel/ControllerAjoutAdministration.php" method="POST">
            <ul>
                <li>
                    <label for="nom">Name:</label>
                    <input type="text" id="nom" name="nom" />
                </li>
                <li>
                    <label for="prenom">First Name:</label>
                    <input type="text" id="prenom" name="prenom" />
                </li>
                <li>
                    <div class="formation-rectangle">

                        <select id="formation-select" name="formation">
                            <option value="GEII">GEII</option>
                            <option value="GIM">GIM</option>
                            <option value="GMP">GMP</option>
                            <option value="GEA">GEA</option>
                            <option value="TCV">TCV</option>
                            <option value="QLIQ">QLIQ</option>
                            <option value="TCc">TCc</option>
                            <option value="INFO">INFO</option>
                            <option value="Mph">Mph</option>
                        </select>

                    </div>
                </li>
                <li>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" />
                </li>
                <li>
                    <label for="mdp">Password:</label>
                    <input type="text" id="mdp" name="mdp" />
                </li>
                <li>
                    <div class="role-rectangle">

                        <select id="role-select" name="role">
                            <option value="admin">Administration</option>
                            <option value="rp">Head teacher</option>
                            <option value="cd">Development managers</option>
                            <option value="rs">Service responsable</option>
                            <option value="secretaire">Secretary</option>
                        </select>

                    </div>
                </li>
            </ul>

            <div class="button">
                <button type="submit" id="ajoutPersonnel" name="valider">Confirm</button>
            </div>
        </form>

        <span class="close" onclick="closePopup3()">&times;</span>
    </div>
</div>

<?php include("ViewHeaderEn.php"); ?>

<div class="body-container">

    <div class="rectangle-haut">
        <div class="image-box">
            <img class="banniere" src="../../asserts/img/banniere.png" alt="Banner">
        </div>
        <div class="all-text">
            <div class="rectangle-info">
                <div class="info-box">
                    <h3 class="nbrEtu">Number of students</h3>
                    <?php
                    if (isset($nbrEtu)) {
                        echo "<h3 class='resNbrEtu'>" . $nbrEtu . "</h3>";
                    } else {
                        echo "<h3 class='nbr'>Error: Undefined number</h3>";
                    }
                    ?>
                </div>
            </div>
            <div class="rectangle-info">
                <div class="info-box">
                    <h3 class="nbrEnt">Number of companies</h3>
                    <?php
                    if (isset($nbrEntreprise)) {
                        echo "<h3 class='resNbrEtu'>" . $nbrEntreprise . "</h3>";
                    } else {
                        echo "<h3 class='nbr'>Error: Undefined number</h3>";
                    }
                    ?>
                </div>
            </div>
            <div class="rectangle-info">
                <div class="info-box">
                    <h3 class="nbrOff">Number of offers</h3>
                    <?php
                    if (isset($nbrOffre)) {
                        echo "<h3 class='resNbrEtu'>" . $nbrOffre . "</h3>";
                    } else {
                        echo "<h3 class='nbr'>Error: Undefined number</h3>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="titreAppli">
            <h3 class="title">Welcome to the Apprentice Manager</h3>
        </div>
    </div>



    <section class="section-mid">

        <div class="rectangle">

            <h3 class="titreAjout">Add student</h3>
            <input class="AjRapide" type="button" value="Add" id="AjEtu">

        </div>
        <div class="rectangle">

            <h3 class="titreAjout">Add offer</h3>
            <input class="AjRapide" type="button" value="Add" id="AjOffre">

        </div>
        <div class="rectangle">

            <h3 class="titreAjout">Add staff</h3>
            <input class="AjRapide" type="button" value="Add" id="AjPerso">

        </div>

    </section>

    <div class="main-rectangle">
        <div class="ajouter-recent">Recently added</div>
        <div class="other-rectangles">
            <div class="sub-rectangle">
                <h3 class="texteInRect">Student</h3>
                <div class="inner-rectangle" id="etudiants-container"></div>
                <input class="btnAfficherPlus" type="button" value="Show More" id="afficherEtudiants">
            </div>
            <div class="sub-rectangle">
                <h3 class="texteInRect">Offer</h3>
                <div class="inner-rectangle" id="offres-container"></div>
                <input class="btnAfficherPlus" type="button" value="Show More" id="afficherOffres">
            </div>
            <div class="sub-rectangle">
                <h3 class="texteInRect">Company</h3>
                <div class="inner-rectangle" id="entreprises-container"></div>
                <input class="btnAfficherPlus" type="button" value="Show More" id="afficherEntreprises">
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h2>About us</h2>
                <p>The Apprentice Manager is a platform dedicated to the management of students, offers, and companies for apprentice programs.</p>
            </div>

            <div class="footer-section contact">
                <h2>Contact us</h2>
                <p>Email : communication@uphf.fr</p>
                <p> Université Polytechnique Hauts-de-France - Campus Mont Houy - 59313 Valenciennes Cedex 9 | +33 (0)3 27 51 12 34</p>
            </div>

            <div class="footer-section links">
                <h2>Quick links</h2>
                <ul>
                    <li><a href="ViewAdminMainEn.php">Homepage</a></li>
                    <li><a href="ViewAdminEtuEn.php">Students</a></li>
                    <li><a href="ViewAdminEntrepriseEn.php">Companies</a></li>
                    <li><a href="#">Administration</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2023 Apprentice Manager | All rights reserved</p>
        </div>
    </footer>

</div>
</body>



</html>
