<?php include '../../Controller/ControllerVerificationDroit.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>OffreEntreprise</title>
    <link rel="stylesheet" type="text/css" href="../../asserts/css/adminEntreprise.css">
    <script src="../../asserts/js/AdminEntreprise.js"></script>
    <script src="../../asserts/js/rechercheOffre.js"></script>
    <script src="../../asserts/js/rechercherEntreprise.js"></script>
    <link rel="icon" href="../../asserts/img/logo.png" type="image/x-icon">
    <script src="../../asserts/js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="../../asserts/css/Cloche.css">
</head>
<body class="body">


<?php include("../Main/ViewHeader.php"); ?>

<div class="body-container">


    <div class="rectangle-mid">
        <form action="" method="post">
            <button name="btnAjoutEntreprise" onclick="window.location.href ='ViewAjoutEntreprise.php'" class="btnAjoutEntreprise" type="button">Ajouter une entreprise</button>
            <button name="btnAjoutOffre" onclick="window.location.href ='../Offre/ViewDemandeAjoutOffre.php'" class="btnAjoutOffre" type="button">Ajouter une offre</button>
        </form>

        <form method="post" action="">
            <input type="button" value="Afficher les Offres" name="btnAfficherOffre" class="btnAfficherOffre" onclick="afficherOffres()">
            <input type="button" value="Afficher les Entreprises" name="btnAfficherEntreprise" class="btnAfficherEntreprise" onclick="afficherEntreprises()">
        </form>

        <ul id="donneesOffre" class="affichOffre">
            <form id="rechercheOffre">
                <label for="nomCheckbox">
                    <input type="checkbox" id="nomCheckbox"> Nom
                </label>
                <label for="domaineCheckbox">
                    <input type="checkbox" id="domaineCheckbox"> Domaine
                </label>
                <label for="missionCheckbox">
                    <input type="checkbox" id="missionCheckbox"> Missions
                </label>
                <label for="nbEtudiantCheckbox">
                    <input type="checkbox" id="nbEtudiantCheckbox"> Nombre d'étudiants recherché
                </label>
                <label for="parcoursCheckbox">
                    <input type="checkbox" id="parcoursCheckbox"> Parcours
                </label>

                <br>
                <div id="nomDiv" style="display: none">
                    <input type="text" name="nom" id="nom" placeholder="Nom">
                </div>
                <div id="domaineDiv" style="display: none">
                    <input type="text" name="domaine" id="domaine" placeholder="Domaine">
                </div>
                <div id="missionDiv" style="display: none">
                    <input type="text" name="mission" id="mission" placeholder="Missions">
                </div>
                <div id="nbEtudiantDiv" style="display: none">
                    <input type="number" name="nbEtudiant" id="nbEtudiant" placeholder="Nombre d'étudiants">
                </div>
                <div id="parcoursDiv" style="display: none">
                    <input type="text" name="parcours" id="parcours" placeholder="Parcours">
                </div>

                <input type="hidden" name="selectedOffer" id="selectedOffer" value="">
                <input type="button" value="Rechercher une offre" onclick="rechercherOffres()" class="rechercheOffre">
            </form>

            <ul id="resultatsOffre" class="result">
            </ul>

            <script src="../../asserts/js/rechercheOffre.js"></script>
        </ul>

        <ul id="donneesEntreprise" class="affichEntreprise">
            <form id="rechercheEntreprise">
                <label for="nomEntrepriseCheckbox">
                    <input type="checkbox" id="nomEntrepriseCheckbox"> Nom
                </label>
                <label for="villeCheckbox">
                    <input type="checkbox" id="villeCheckbox"> Ville
                </label>
                <label for="codepostalCheckbox">
                    <input type="checkbox" id="codepostalCheckbox"> Code Postal
                </label>
                <label for="adresseCheckbox">
                    <input type="checkbox" id="adresseCheckbox"> Adresse
                </label>
                <label for="secteurActiviteCheckbox">
                    <input type="checkbox" id="secteurActiviteCheckbox"> Secteur d'activité
                </label>
                <label for="emailCheckbox">
                    <input type="checkbox" id="emailCheckbox"> Adresse email
                </label>
                <label for="numtelCheckbox">
                    <input type="checkbox" id="numtelCheckbox"> Numéro de téléphone
                </label>


                <br>

                <div id="nomEntrepriseDiv" style="display: none">
                    <input type="text" name="nomEntreprise" id="nomEntreprise" placeholder="Nom">
                </div>
                <div id="villeDiv" style="display: none">
                    <input type="text" name="ville" id="ville" placeholder="Ville">
                </div>
                <div id="codepostalDiv" style="display: none">
                    <input type="text" name="codepostal" id="codepostal" placeholder="Code Postal">
                </div>
                <div id="adresseDiv" style="display: none">
                    <input type="text" name="adresse" id="adresse" placeholder="Adresse">
                </div>
                <div id="secteurActiviteDiv" style="display: none">
                    <input type="text" name="secteurActivite" id="secteurActivite" placeholder="Secteur d'activité">
                </div>
                <div id="emailDiv" style="display: none">
                    <input type="email" name="email" id="email" placeholder="Adresse email">
                </div>
                <div id="numtelDiv" style="display: none">
                    <input type="text" name="numtel" id="numtel" placeholder="Numéro de téléphone">
                </div>

                <input type="button" value="Rechercher une entreprise" onclick="rechercherEntreprises()" class="rechercheEntreprise">
            </form>

            <ul id="resultatsEntreprise" class="result">
            </ul>

            <script src="../../asserts/js/rechercherEntreprise.js"></script>
        </ul>

    </div>
</div>

<script>
    window.addEventListener('load', function () {
        <?php
        // Vérifiez la session pour afficher la popup
        session_start();
        if (isset($_SESSION['afficher_popup']) && $_SESSION['afficher_popup'] === true) {
            echo 'afficherPopup();';
            // Réinitialisez l'indicateur pour qu'il ne s'affiche qu'une fois.
            $_SESSION['afficher_popup'] = false;
        }
        ?>
    });
</script>

<?php include("../Main/ViewFooter.php"); ?>

</body>

</html>