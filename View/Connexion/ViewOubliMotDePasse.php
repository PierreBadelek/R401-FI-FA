<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oubli Mot De Passe</title>
    <link rel="stylesheet" type="text/css" href="../../asserts/css/OubliMDP.css">
    <link rel="icon" href="../../asserts/img/logo.png" type="image/x-icon">
    <script>
        function verifierEmail() {
            var emailValeur = document.getElementById("email").value;
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(emailValeur)) {
                document.getElementById('error').textContent = 'Veuillez saisir une adresse e-mail valide.';
                document.getElementById('error').style.color = "red";
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<form action="../../Controller/Connexion/ControllerReinistialiserMDP.php" method="POST" onsubmit="return verifierEmail();">
    <ul>
        <li>
            <label for="email">Votre e-mail:</label>
            <input type="email" id="email" name="email" >
            <p id="error"></p>
        </li>
    </ul>

    <div class="button">
        <button type="submit" id="envoieCode" name="envoieCode">Recevoir le code</button>
    </div>
</form>
</body>
</html>
