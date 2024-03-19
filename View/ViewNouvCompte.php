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

<script>
    function retourPage() {
        window.history.back();
    }

    document.addEventListener("DOMContentLoaded", function() {
        var bouton = document.getElementById("valider");
        bouton.addEventListener("click", validerFormulaire);
    });

    function validerFormulaire(event) {
        event.preventDefault();

        var nom = document.querySelector('.input-nom').value;
        var prenom = document.querySelector('.input-prenom').value;
        var email = document.querySelector('.input-mail').value;
        var mdp = document.querySelector('.input-mdp').value;
        var adresse = document.querySelector('.input-adresse').value;
        var ville = document.querySelector('.input-ville').value;
        var cp = document.querySelector('.input-cp').value;
        var date = document.querySelector('.input-date').value;
        var anneeetude = document.querySelector('.input-anneeetude').value;
        var ine = document.querySelector('.input-ine').value;

        var erreur = false;

        if (nom === '') {
            document.querySelector('.erreur-nom').innerText = 'Veuillez entrer un nom.';
            erreur = true;
        } else {
            document.querySelector('.erreur-nom').innerText = '';
        }

        if (prenom === '') {
            document.querySelector('.erreur-prenom').innerText = 'Veuillez entrer un prénom.';
            erreur = true;
        } else {
            document.querySelector('.erreur-prenom').innerText = '';
        }

        if (email === '') {
            document.querySelector('.erreur-email').innerText = 'Veuillez entrer une adresse email.';
            erreur = true;
        } else {
            document.querySelector('.erreur-email').innerText = '';
        }

        if (mdp === '') {
            document.querySelector('.erreur-mdp').innerText = 'Veuillez entrer un mot de passe.';
            erreur = true;
        } else {
            document.querySelector('.erreur-mdp').innerText = '';
        }

        if (adresse === '') {
            document.querySelector('.erreur-adresse').innerText = 'Veuillez entrer une adresse.';
            erreur = true;
        } else {
            document.querySelector('.erreur-adresse').innerText = '';
        }

        if (ville === '') {
            document.querySelector('.erreur-ville').innerText = 'Veuillez entrer une ville.';
            erreur = true;
        } else {
            document.querySelector('.erreur-ville').innerText = '';
        }

        if (cp === '') {
            document.querySelector('.erreur-cp').innerText = 'Veuillez entrer un code postal.';
            erreur = true;
        } else {
            document.querySelector('.erreur-cp').innerText = '';
        }

        if (date === '') {
            document.querySelector('.erreur-date').innerText = 'Veuillez entrer une date de naissance.';
            erreur = true;
        } else {
            document.querySelector('.erreur-date').innerText = '';
        }

        if (anneeetude === '') {
            document.querySelector('.erreur-anneeetude').innerText = 'Veuillez entrer une année d étude.';
            erreur = true;
        } else {
            document.querySelector('.erreur-anneeetude').innerText = '';
        }

        if (ine === '') {
            document.querySelector('.erreur-ine').innerText = 'Veuillez entrer un INE.';
            erreur = true;
        } else {
            document.querySelector('.erreur-ine').innerText = '';
        }

        if (!erreur) {
            event.target.closest("form").submit();
        }
    }
</script>

<header class="header">

    <button onclick="retourPage()" class="btnRetour">Retour</button>

    <div class="princi-rectangle">

        <form action="../Controller/Etudiant/ControllerInscriptionEtu.php" method="post">
            <div class="nom-rectangle rectangle">

                <input type="text" name="nom" class="input-nom input" placeholder="NOM">
                <span class="erreur-nom erreur-message"></span>
            </div>

            <div class="prenom-rectangle rectangle">

                <input type="text" name="prenom" class="input-prenom input" placeholder="Prenom">
                <span class="erreur-prenom erreur-message"></span>
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

                <input type="email" name="email" class="input-mail input" placeholder="Email">
                <span class="erreur-email erreur-message"></span>
            </div>

            <div class="mdp-rectangle rectangle">

                <input type="password" name="mdp" class="input-mdp input" placeholder="Mot de Passe">
                <span class="erreur-mdp erreur-message"></span>
            </div>

            <div class="adresse-rectangle rectangle">

                <input type="text" name="adresse" class="input-adresse input" placeholder="Adresse">
                <span class="erreur-adresse erreur-message"></span>
            </div>

            <div class="ville-rectangle rectangle">

                <input type="text" name="ville" class="input-ville input" placeholder="Ville">
                <span class="erreur-ville erreur-message"></span>
            </div>

            <div class="cp-rectangle rectangle">

                <input type="text" name="cp" class="input-cp input" placeholder="Code Postal">
                <span class="erreur-cp erreur-message"></span>
            </div>

            <div class="date-rectangle rectangle">
                <input type="date" name="date" class="input-date input" placeholder="Date de naissance">
                <span class="erreur-date erreur-message"></span>
            </div>

            <div class="anneeetude-rectangle rectangle">

                <input type="number" name="anneeetude" class="input-anneeetude input" placeholder="Année d'étude">
                <span class="erreur-anneeetude erreur-message"></span>
            </div>

            <div class="ine-rectangle rectangle">

                <input type="text" name="ine" class="input-ine input" placeholder="INE">
                <span class="erreur-ine erreur-message"></span>
            </div>

            <div>
                <input type="submit" name="valider" id="valider" value="Création" class="btnCreation">
            </div>
        </form>
    </div>
    <p class="info">Si vous possédez déjà un compte veuillez vous connecter en appuyant ici :</p>
    <a href="ViewConnexion.html" class="lien"><p class="lien-info">Connexion</p></a>
</header>
</body>
</html>