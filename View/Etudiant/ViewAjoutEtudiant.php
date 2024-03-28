<?php include '../../Controller/ControllerVerificationDroit.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajout Etudiant</title>
    <link rel="stylesheet" type="text/css" href="../../asserts/css/ajoutEtudiant.css">
    <link rel="icon" href="../../asserts/img/logo.png" type="image/x-icon">
    <script src="../../asserts/js/ajoutEtudiant.js"></script>
</head>
<body>

<button onclick="retourPage()" class="btnRetour">Retour</button>


<script>
    function retourPage() {
        window.history.back();
    }
</script>


<form action="../../Controller/Etudiant/ControllerAjoutEtudiant.php" method="post" id="formulaireAjoutEtudiant" onsubmit="return validateForm()">
    <h1 class="titre1"> Création d'un étudiant </h1>
    <h1 class="erreur-message"></h1>

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
</body>
<script src="../../asserts/js/ajoutEtudiant.js"></script>
</html>