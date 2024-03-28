<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Principale</title>

    <link rel="stylesheet" type="text/css" href="../asserts/css/nouCompteEtu.css">
    <link rel="icon" href="../asserts/img/logo.png" type="image/x-icon">

</head>
<body class="body">

<script src="../asserts/js/messagesErreur.js" defer></script>

<header class="header">

    <button onclick="retourPage()" class="btnRetour">Retour</button>

    <h1 class="erreur-message"></h1>
    <div class="princi-rectangle">

        <form action="../Controller/Etudiant/ControllerInscriptionEtu.php" method="post">

            <div class="nom-rectangle rectangle">
                <input type="text" name="nom" class="input-nom input" placeholder="NOM*">
            </div>

            <div class="prenom-rectangle rectangle">

                <input type="text" name="prenom" class="input-prenom input" placeholder="Prenom*">
            </div>

            <div class="formation-rectangle rectangle">

                <select class="input" id="formation-select" name="formation">
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

            <div class="mail-rectangle rectangle">

                <input type="email" name="email" class="input-mail input" placeholder="Email*">
            </div>

            <div class="mdp-rectangle rectangle">

                <input type="password" name="mdp" class="input-mdp input" placeholder="Mot de Passe*">
            </div>

            <div class="adresse-rectangle rectangle">

                <input type="text" name="adresse" class="input-adresse input" placeholder="Adresse*">
            </div>

            <div class="ville-rectangle rectangle">

                <input type="text" name="ville" class="input-ville input" placeholder="Ville*">
            </div>

            <div class="cp-rectangle rectangle">

                <input type="text" name="cp" class="input-cp input" placeholder="Code Postal*">
            </div>

            <div class="date-rectangle rectangle">
                <input type="date" name="date" class="input-date input" placeholder="Date de naissance*">
            </div>

            <div class="anneeetude-rectangle rectangle">

                <input type="number" name="anneeetude" class="input-anneeetude input" placeholder="Année d'étude*">
            </div>

            <div class="ine-rectangle rectangle">

                <input type="text" name="ine" class="input-ine input" placeholder="INE*">
            </div>

            <div>
                <input type="submit" name="valider" id="valider" value="Création" class="btnCreation">
            </div>
        </form>
    </div>
    <p class="info">Si vous possédez déjà un compte veuillez vous connecter en appuyant ici :</p>
    <a href="Connexion/ViewConnexion.html" class="lien"><p class="lien-info">Connexion</p></a>
</header>
</body>
</html>