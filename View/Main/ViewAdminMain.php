<?php use Model\Connexion\Conn;

include '../../Controller/ControllerVerificationDroit.php';
include "../../Controller/ControllerRechercheNbr.php"
?>

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
    <link rel="icon" href="../../asserts/img/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="../../asserts/js/AdminMain.js" defer></script>
    <script src="../../asserts/js/affichageListes.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body class="body">

<div id="popUpEtu" class="popupEtu">

    <div class="popup-content" id="formulaireAjoutEtudiant">
        <form action="../../Controller/Etudiant/ControllerAjoutEtudiant.php" method="post" id="formulaireAjoutEtudiant">
            <h1 class="titre1"> Création d'un étudiant </h1>
            <ul>
                <li>
                    <label for="nom" class="label-text">Nom:</label>
                    <input type="text" id="nom" name="nom" class="input">
                </li>
                <li>
                    <label for="prenom" class="label-text">Prénom:</label>
                    <input type="text" id="prenom" name="prenom" class="input">
                </li>
                <li>
                    <label for="dateDeNaissance" class="label-text">Date de naissance:</label>
                    <input type="date" id="dateDeNaissance" name="dateDeNaissance" class="input">
                </li>
                <li>
                    <label for="adresse" class="label-text">Adresse:</label>
                    <input type="text" id="adresse" name="adresse" class="input">
                </li>
                <li>
                    <label for="ville" class="label-text">Ville:</label>
                    <input type="text" id="ville" name="ville" class="input">
                </li>
                <li>
                    <label for="codePostal" class="label-text">Code postal:</label>
                    <input type="number" id="codePostal" name="codePostal" class="input">
                </li>
                <li>
                    <label for="ine" class="label-text">INE:</label>
                    <input type="text" id="ine" name="ine" class="input">
                </li>
                <li>
                    <label for="anneeEtude" class="label-text">Année d'étude:</label>
                    <input type="number" id="anneeEtude" name="anneeEtude" class="input">
                </li>
                <li>
                    <label for="formation" class="label-text">Formation:</label>
                    <select name="formation" id="formation" class="input">
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
                </li>
                <li>
                    <label for="entreprise" class="label-text">Type d'entreprises recherchées:</label>
                    <input type="text" id="entreprise" name="entreprise" class="input">
                </li>
                <li>
                    <label for="mission" class="label-text">Type de missions recherchées:</label>
                    <input type="text" id="mission" name="mission" class="input">
                </li>
                <li>
                    <label for="mobile" class="label-text">Mobilité de l'étudiant:</label>
                    <select name="mobile" id="mobile" class="input">
                        <option value="10">10km</option>
                        <option value="50">50km</option>
                        <option value="100">100km</option>
                        <option value="500">500km</option>
                        <option value="1000">1000km</option>
                        <option value="99999">International</option>
                    </select>
                </li>
                <li>
                    <label for="email" class="label-text">Email:</label>
                    <input type="email" id="email" name="email" class="input">
                </li>
                <li>
                    <label for="cv" class="label-text">CV de l'étudiant:</label>
                    <input type="file" name="cv" id="cv" class="input">
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

        <form action="../../Controller/Offre/ControllerAjouOffre.php" method="post" id="formulaire" class="form-offre">
            <h1 class="titre1"> Création d'une offre </h1>
            <p class="label-text">
                Nom de l'offre :
            </p>
            <label for="offre"></label><input type="text" name="Nom" id="offre" class="input-field">

            <p class="label-text">
                Domaine de l'offre :
            </p>
            <label for="domaine"></label><input type="text" name="Domaine" id="domaine" class="input-field">

            <p class="label-text">
                Missions :
            </p>
            <label for="mission"></label><textarea name="Mission" id="mission" class="zoneText input-field"></textarea>

            <p class="label-text">
                Nombre d'étudiants :
            </p>
            <label for="nbetudiant"></label><input type="text" name="NbEtudiant" id="nbetudiant" class="input-field"><br>

            <p id="message" class="error-message"></p>

            <p class="label-text">Entreprise :</p>
            <label for="entreprise"></label><select name="entreprise" id="entreprise" class="select-field">
                <?php
                include_once '../../Model/Connexion/ConnexionBDD.php';
                $conn = Conn::getInstance();
                $sql = "SELECT identreprise, nom FROM entreprise";
                $result = $conn->query($sql);
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $row['identreprise'] . "'>" . $row['nom'] . "</option>";
                }
                ?>
            </select><br>

            <p class="label-text">
                Parcours :
            </p>
            <label for="parcours" ></label>
            <select name="Parcours" id="parcours"  class="select-field">
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

            <button type="button" id="redirigerVersAjoutEntreprise" class="btn-create-enterprise">Création d'une entreprise</button>

            <p class="label-text">Autre(s) fichier(s) :</p>
            <input type="file" name="fichier" id="fichier" class="file-input"><br>
            <br>

            <label for="brouillon"></label><input type="checkbox" name="Brouillon" id="brouillon" class="checkbox-input">
            <label for="brouillon" class="checkbox-label">
                Enregistrer en tant que brouillon
            </label><br>

            <label for="visible"></label><input type="checkbox" name="Visible" id="visible" class="checkbox-input">
            <label for="visible" class="checkbox-label">
                Voulez-vous que l'offre soit visible ?
            </label><br>

            <input type="submit" value="Enregistrer l'offre" id="enregistreroffre" name="EnregistrerOffre" class="submit-btn"><br>
        </form>

        <span class="close" onclick="closePopup2()">&times;</span>
    </div>
</div>

<div id="popUpPerso" class="popupEtu">
    <div class="popup-content">

        <form action="../../Controller/Personnel/ControllerAjoutAdministration.php" method="POST">
            <h1 class="titre1"> Création d'un membre du personnel </h1>
            <ul>
                <li>
                    <label for="nom" class="label-text">Nom:</label>
                    <input type="text" id="nom" name="nom"  class="input-field">
                </li>
                <li>
                    <label for="prenom" class="label-text">Prenom:</label>
                    <input type="text" id="prenom" name="prenom"  class="input-field">
                </li>
                <li>
                    <div class="formation-rectangle">
                        <label for="parcours" class="label-text">Formation :</label>
                        <select id="formation-select" name="formation" class="select-field">
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
                    <label for="email" class="label-text">Email:</label>
                    <input type="email" id="email" name="email"  class="input-field">
                </li>
                <li>
                    <label for="mdp" class="label-text">Mot de passe:</label>
                    <input type="password" id="mdp" name="mdp"  class="input-field">
                </li>
                <li>
                    <div class="role-rectangle">
                        <label for="role" class="label-text">Role :</label>
                        <select id="role-select" name="role" class="select-field">
                            <option value="admin">Administrateur</option>
                            <option value="rp">Responsable pédagogique</option>
                            <option value="cd">Chargés de développement</option>
                            <option value="rs">Responsable du service</option>
                            <option value="secretaire">Secrétaire</option>
                        </select>

                    </div>
                </li>
            </ul>

            <div class="button">
                <button type="submit" id="ajoutPersonnel" name="valider">Valider</button>
            </div>
        </form>

        <span class="close" onclick="closePopup3()">&times;</span>
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
                <div class="info-box"><a href="../Etudiant/ViewAfficherPlusEtu.php">
                    <h3 class="nbrEtu">Nombre d'étudiants</h3>
                    <?php
                    if (isset($nbrEtu)) {
                        echo "<h3 class='resNbrEtu'>" . $nbrEtu . "</h3>";
                    } else {
                        echo "<h3 class='nbr'>Erreur: Nombre non défini</h3>";
                    }
                    ?>
                    </a></div>
            </div>
            <div class="rectangle-info">
                <div class="info-box"><a href="../Entreprise/ViewAfficherPlusEntreprise.php">
                    <h3 class="nbrEnt">Nombre d'entreprises</h3>
                    <?php
                    if (isset($nbrEntreprise)) {
                        echo "<h3 class='resNbrEtu'>" . $nbrEntreprise . "</h3>";
                    } else {
                        echo "<h3 class='nbr'>Erreur: Nombre non défini</h3>";
                    }
                    ?>
                    </a></div>
            </div>
            <div class="rectangle-info">
                <div class="info-box"><a href="../Offre/ViewAfficherPlusOffre.php">
                    <h3 class="nbrOff">Nombre d'offres</h3>
                    <?php
                    if (isset($nbrOffre)) {
                        echo "<h3 class='resNbrEtu'>" . $nbrOffre . "</h3>";
                    } else {
                        echo "<h3 class='nbr'>Erreur: Nombre non défini</h3>";
                    }
                    ?>
                    </a></div>
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
        <div class="rectangle">

            <h3 class="titreAjout">Ajouter une offre</h3>
            <input class="AjRapide" type="button" value="Ajouter" id="AjOffre">

        </div>
        <div class="rectangle">

            <h3 class="titreAjout">Ajouter un personnel</h3>
            <input class="AjRapide" type="button" value="Ajouter" id="AjPerso">

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
                    <li><a href="ViewAdminMain.php">Accueil</a></li>
                    <li><a href="../Etudiant/ViewAdminEtu.php">Etudiant</a></li>
                    <li><a href="../Entreprise/ViewAdminEntreprise.php">Entreprise</a></li>
                    <li><a href="../Personnel/ViewAdminAdministration.php">Administration</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2023 Gestionnaire des Apprentis | Tous droits réservés</p>
        </div>
    </footer>

</div>
</body>


</html>
