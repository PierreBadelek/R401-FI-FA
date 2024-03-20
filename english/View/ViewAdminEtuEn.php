<?php
//include '../Controller/ControllerVerificationDroit.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../../asserts/css/adminEtu.css">
    <script src="../../asserts/js/rechercheEtu.js" defer></script>

</head>
<body class="body">

<?php include("ViewHeaderEn.php"); ?>

<div id="menuBurger" class="menu-burger">
    <div id="closeBtn" class="close-btn" onclick="fermerMenuBurger()">×</div>

    <div class="menu-content">
        <h2>Student informations</h2>
        <p><span id="infoNom"></span></p>
        <p><span id="infoPrenom"></span></p>
        <p><span id="infoIne"></span></p>
        <p><span id="infoDate"></span></p>
        <p><span id="infoAdresse"></span></p>
        <p><span id="infoVille"></span></p>
        <p><span id="infoCP"></span></p>
        <p><span id="infoAnnee"></span></p>
        <p><span id="infoFormation"></span></p>
        <p><span id="infoEmail"></span></p>
        <p><span id="infoActif"></span></p>

        <p><span id="infoTypeEntreprise"></span></p>
        <p><span id="infoTypeMission"></span></p>
        <p><span id="infoMobile"></span></p>


        <script src="../../asserts/js/rechercheEtu.js"></script>
        <button onclick="redirectModifierProfil()">Modify profile</button>
    </div>
</div>

<div class="body-container">

    <div class="rectangle-mid">
        <form method="post">
            <button name="btnAjoutEtu" onclick="window.location.href='ViewAjoutEtudiant.php'" class="btnAjoutEtu" type="button" >Add</button>
        </form>

        <form id="rechercheForm">
            <label for="nomCheckbox">
                <input type="checkbox" id="nomCheckbox"> Name
            </label>
            <label for="prenomCheckbox">
                <input type="checkbox" id="prenomCheckbox"> First Name
            </label>
            <label for="ineCheckbox">
                <input type="checkbox" id="ineCheckbox"> INE
            </label>
            <label for="codepostalCheckbox">
                <input type="checkbox" id="codepostalCheckbox"> Postal Code
            </label>
            <label for="formationCheckbox">
                <input type="checkbox" id="formationCheckbox"> Formation
            </label>
            <label for="anneeEtudeCheckbox">
                <input type="checkbox" id="anneeEtudeCheckbox"> Study Year
            </label>
            <label for="autresCheckbox">
                <input type="checkbox" id="autresCheckbox"> Others
            </label>



            <div id="nomDiv" style="display: none">
                <label for="nom"></label><input type="text" name="nom" id="nom" placeholder="Name">
            </div>
            <div id="prenomDiv" style="display: none">
                <label for="prenom"></label><input type="text" name="prenom" id="prenom" placeholder="First Name">
            </div>
            <div id="ineDiv" style="display: none">
                <label for="ine"></label><input type="text" name="ine" id="ine" placeholder="INE">
            </div>
            <div id="codepostalDiv" style="display: none">
                <label for="codepostal"></label><input type="number" name="codePostal" id="codePostal" placeholder="Postal Code">
            </div>
            <div id="formationDiv" style="display: none">
                <label for="formation"></label><input type="text" name="formation" id="formation" placeholder="Formation">
            </div>
            <div id="anneeEtudeDiv" style="display: none">
                <label for="anneeEtude"></label><input type="number" name="anneeEtude" id="anneeEtude" placeholder="Study Year">
            </div>
            <div id="autresDiv" style="display: none">
                <label for="email">
                    <input type="text" name="email" id="email" placeholder="Email Address">
                </label>
                <label for="adresse">
                    <input type="text" name="adresse" id="adresse" placeholder="Address">
                </label>
                <label for="ville">
                    <input type="text" name="ville" id="ville" placeholder="City">
                </label>
                <label for="typeEntreprise">
                    <input type="text" name="typeEntreprise" id="typeEntreprise" placeholder="Company Type">
                </label>
                <label for="typeMission">
                    <input type="text" name="typeMission" id="typeMission" placeholder="Missions Types">
                </label>
                <label for="mobileSelect">
                    Mobile:
                    <select id="mobileSelect">
                        <option value="0">Doesn't matter</option>
                        <option value="10">10km</option>
                        <option value="50">50km</option>
                        <option value="100">100km</option>
                        <option value="500">500km</option>
                        <option value="1000">1000km</option>
                        <option value="99999">International</option>
                    </select>
                </label>

                <label for="actifSelect">
                    Active:
                    <select id="actifSelect">
                        <option value="peuimporte">Doesn't matter</option>
                        <option value="oui">Yes</option>
                        <option value="non">No</option>
                    </select>
                </label>
            </div>

            <input type="button" value="Search a student" onclick="rechercherEtudiants()" class="btnRechercheEtu">
        </form>

        <table id="dataTable">
            <thead>
            <tr>
                <th class="colonne">Name</th>
                <th class="colonne">First Name</th>
                <th class="colonne">INE</th>
            </tr>
            </thead>
            <tbody></tbody>
        </table>

    </div>
</div>

<script src="../../asserts/js/rechercheEtu.js" defer></script>

</body>
</html>
