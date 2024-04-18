<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oubli Mot De Passe</title>
    <link rel="icon" href="../../asserts/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../../asserts/css/OubliMDP.css">
    <script src="../../asserts/js/ValidationMdp.js"></script>
</head>
<body>
<form action="../../Controller/Connexion/ControllerReinistialiserMDP.php" method="POST" onsubmit="return validerFormulaire();">
    <ul>
        <li>
            <label for="code">Mot de passe:</label>
            <input type="password" id="mdp" name="mdp">
        </li>

        <li>
            <label for="mdpVerif">Confirmation du mot de passe:</label>
            <input type="password" id="mdpVerif" name="mdpVerif"> <br> <br>
            <span class="error" id="mdpError"></span>
        </li>

    </ul>

    <div class="button">
        <button type="submit" id="confirmationCode" name="confirmationCode">Valider</button>
    </div>
</form>
</body>
</html>
