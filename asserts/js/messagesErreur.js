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
        document.querySelector('.nom-rectangle').style = 'border: solid red 3px';
        erreur = true;
    }

    if (prenom === '') {
        document.querySelector('.prenom-rectangle').style = 'border: solid red 3px';
        erreur = true;
    }

    if (email === '') {
        document.querySelector('.mail-rectangle').style = 'border: solid red 3px';
        erreur = true;
    }

    if (mdp === '') {
        document.querySelector('.mdp-rectangle').style = 'border: solid red 3px';
        erreur = true;
    }

    if (adresse === '') {
        document.querySelector('.adresse-rectangle').style = 'border: solid red 3px';
        erreur = true;
    }

    if (ville === '') {
        document.querySelector('.ville-rectangle').style = 'border: solid red 3px';
        erreur = true;
    }

    if (cp === '') {
        document.querySelector('.cp-rectangle').style = 'border: solid red 3px';
        erreur = true;
    }

    if (date === '') {
        document.querySelector('.date-rectangle').style = 'border: solid red 3px';
        erreur = true;
    }

    if (anneeetude === '') {
        document.querySelector('.anneeetude-rectangle').style = 'border: solid red 3px';
        erreur = true;
    }

    if (ine === '') {
        document.querySelector('.ine-rectangle').style = 'border: solid red 3px';
        erreur = true;
    }

    if (!erreur) {
        event.target.closest("form").submit();
    }
    else{
        document.querySelector('.erreur-message').innerText = 'Veuillez remplir les champs en rouge';
    }
}