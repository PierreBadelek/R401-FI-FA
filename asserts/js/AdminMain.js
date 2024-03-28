// Fonction pour ouvrir la popup
function openPopup(popupId) {
    closeAllPopups(); // Ferme toutes les popups
    var popup = document.getElementById(popupId);
    if (popup) {
        popup.style.display = 'block';
    }
}

// Fonction pour fermer toutes les popups
function closeAllPopups() {
    closePopup('popUpEtu');
    closePopup('popUpOffre');
    closePopup3('popUpPerso');
}

// Fonction pour fermer la popup
function closePopup(popupId) {
    var popup = document.getElementById(popupId);
    if (popup) {
        popup.style.display = 'none';
    }
}

function closePopup2() {
    document.getElementById('popUpOffre').style.display = 'none';
}

// Fonction pour ouvrir la popup 3
function openPopup3() {
    closeAllPopups(); // Ferme toutes les popups
    document.getElementById('popUpPerso').style.display = 'block';
}

// Fonction pour fermer la popup 3
function closePopup3() {
    document.getElementById('popUpPerso').style.display = 'none';
}

// Affichage des messages d'erreur
document.getElementById('ajoutPersonnel').addEventListener('click', function(event) {
    event.preventDefault();
    var erreur = false;

    var nom = document.getElementById('nom-perso').value.trim();
    var prenom = document.getElementById('prenom-perso').value.trim();
    var email = document.getElementById('email-perso').value.trim();
    var mdp = document.getElementById('mdp-perso').value.trim();


    if (nom === '') {
        document.getElementById('nom-perso').style = 'border: solid red 3px';
        erreur = true;
    }

    if (prenom === '') {
        document.getElementById('prenom-perso').style = 'border: solid red 3px';
        erreur = true;
    }

    if (email === '') {
        document.getElementById('email-perso').style = 'border: solid red 3px';
        erreur = true;
    }

    if (mdp === '') {
        document.getElementById('mdp-perso').style = 'border: solid red 3px';
        erreur = true;
    }

    if (!erreur) {
        event.target.closest("form").submit();
    }
    else{
        document.querySelector('.erreur-message-perso').innerText = 'Veuillez remplir les champs en rouge';
    }
});

document.getElementById('enregistreroffre').addEventListener('click', function(event) {
    event.preventDefault();
    var erreur = false;

    var offre = document.getElementById('offre').value.trim();
    var domaine = document.getElementById('domaine-offre').value.trim();
    var mission = document.getElementById('mission-offre').value.trim();
    var nbetudiant = document.getElementById('nbetudiant').value.trim();



    if (offre === '') {
        document.getElementById('offre').style = 'border: solid red 3px';
        erreur = true;
    }

    if (domaine === '') {
        document.getElementById('domaine-offre').style = 'border: solid red 3px';
        erreur = true;
    }

    if (mission === '') {
        document.getElementById('mission-offre').style = 'border: solid red 3px';
        erreur = true;
    }

    if (nbetudiant === '') {
        document.getElementById('nbetudiant').style = 'border: solid red 3px';
        erreur = true;
    }

    if (!erreur) {
        event.target.closest("form").submit();
    }
    else{
        document.querySelector('.erreur-message-offre').innerText = 'Veuillez remplir les champs en rouge';
    }
});

document.getElementById('ajoutEtudiant').addEventListener('click', function(event) {
    event.preventDefault();
    var erreur = false;

    var nom = document.getElementById('nom').value.trim();
    var prenom = document.getElementById('prenom').value.trim();
    var dateDeNaissance = document.getElementById('dateDeNaissance').value.trim();
    var adresse = document.getElementById('adresse').value.trim();
    var ville = document.getElementById('ville').value.trim();
    var codePostal = document.getElementById('codePostal').value.trim();
    var ine = document.getElementById('ine').value.trim();
    var anneeEtude = document.getElementById('anneeEtude').value.trim();
    var email = document.getElementById('email').value.trim();

    if (nom === '') {
        document.getElementById('nom').style = 'border: solid red 3px';
        erreur = true;
    }

    if (prenom === '') {
        document.getElementById('prenom').style = 'border: solid red 3px';
        erreur = true;
    }

    if (dateDeNaissance === '') {
        document.getElementById('prenom').style = 'border: solid red 3px';
        erreur = true;
    }

    if (adresse === '') {
        document.getElementById('adresse').style = 'border: solid red 3px';
        erreur = true;
    }

    if (ville === '') {
        document.getElementById('ville').style = 'border: solid red 3px';
        erreur = true;
    }

    if (codePostal === '') {
        document.getElementById('codePostal').style = 'border: solid red 3px';
        erreur = true;
    }

    if (ine === '') {
        document.getElementById('ine').style = 'border: solid red 3px';
        erreur = true;
    }

    if (anneeEtude === '') {
        document.getElementById('anneeEtude').style = 'border: solid red 3px';
        erreur = true;
    }

    if (email === '') {
        document.getElementById('email').style = 'border: solid red 3px';
        erreur = true;
    }

    if (!erreur) {
        event.target.closest("form").submit();
    }
    else{
        document.querySelector('.erreur-message-etu').innerText = 'Veuillez remplir les champs en rouge';
    }
});


// Écouteur d'événements pour le bouton d'ouverture
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('AjEtu').addEventListener('click', function () {
        openPopup('popUpEtu');
    });

    document.getElementById('AjOffre').addEventListener('click', function () {
        openPopup('popUpOffre');
    });

    document.getElementById('AjPerso').addEventListener('click', function () {
        openPopup3('popUpPerso');
    });
});

// Vous pouvez également ajouter des écouteurs pour les boutons de fermeture
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('closeEtu').addEventListener('click', function () {
        closePopup('popUpEtu');
    });

    document.getElementById('closeOffre').addEventListener('click', function () {
        closePopup('popUpOffre');
    });

    document.getElementById('closePerso').addEventListener('click', function () {
        closePopup3();
    });

});

// AdminMain.js

// Écouteur d'événements pour le bouton d'ouverture
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('AjEtu').addEventListener('click', function () {
        openPopup('popUpEtu');
    });
});

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('AjOffre').addEventListener('click', function () {
        openPopup('popUpOffre');
    });
});

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('AjPerso').addEventListener('click', function () {
        openPopup3();
    });
});

function fermerNotifications() {
    document.getElementById('burgerMenu').style.display = 'none';
}

