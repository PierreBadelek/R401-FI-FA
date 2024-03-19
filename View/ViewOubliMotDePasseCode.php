<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Oubli Mot De Passe</title>
    <link rel="icon" href="../asserts/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../asserts/css/OubliMDP.css">
</head>
<body>

<form id="passwordResetForm" action="../Controller/ControllerReinistialiserMDP.php" method="POST">
    <ul>
        <li>
            <label for="mdp">Nouveau mot de passe:</label>
            <input type="password" id="mdp" name="mdp"> </li>
        </li>
        <li>
            <label for="mdpConfirmer">Confirmer nouveau mot de passe:</label>
            <input type="password" id="mdpConfirmer" name="mdpConfirmer"> </li>

        <span class="error" id="mdpError"></span>
        </li>
    </ul>

    <div class="button">
        <button type="submit" id="confirmationCode" name="confirmationCode">Valider</button>
    </div>
    <script src="../asserts/js/oublieMDp.js"></script>
</form>



</body>
</html>
