<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oubli Mot De Passe</title>
    <link rel="icon" href="../../asserts/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../../asserts/css/OubliMDP.css">
</head>
<body>
<form action="../../Controller/Connexion/ControllerReinistialiserMDP.php" method="POST">
    <ul>
        <li>
            <label for="code">Code de confirmation:</label>
            <input type="text" id="code" name="code"> </li>
            <span class="error" id="codeError"></span>
            <script>
                document.getElementById("code").addEventListener("invalid", function(event) {
                    document.getElementById("codeError").textContent = "Ce champ est obligatoire.";
                });
            </script>

            <li>
            <label for="mdp">Nouveau mot de passe:</label>
            <input type="password" id="mdp" name="mdp"> </li>
            <span class="error" id="mdpError" ></span>
            <script>
                    document.getElementById("mdp").addEventListener("invalid", function(event) {
                    document.getElementById("mdpError").textContent = "Ce champ est obligatoire.";
                });
                </script>
        </li>

    </ul>

    <div class="button">
        <button type="submit" id="confirmationCode" name="confirmationCode">Valider</button>
    </div>
</form>
</body>
</html>