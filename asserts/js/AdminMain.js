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
    var nom = document.getElementById('nom').value.trim();
    var prenom = document.getElementById('prenom').value.trim();
    var email = document.getElementById('email').value.trim();
    var mdp = document.getElementById('mdp').value.trim();

    if (nom === '' || prenom === '' || email === '' || mdp === '') {
        event.preventDefault(); // Empêche l'envoi du formulaire
        alert('Tous les champs doivent être remplis.');
    }
});

document.getElementById('enregistreroffre').addEventListener('click', function(event) {
    var offre = document.getElementById('offre').value.trim();
    var domaine = document.getElementById('domaine').value.trim();
    var mission = document.getElementById('mission').value.trim();
    var nbetudiant = document.getElementById('nbetudiant').value.trim();

    if (offre === '' || domaine === '' || mission === '' || nbetudiant === '') {
        event.preventDefault(); // Empêche l'envoi du formulaire
        alert('Tous les champs doivent être remplis.');
    }
});

document.getElementById('ajoutEtudiant').addEventListener('click', function(event) {
    var nom = document.getElementById('nom').value.trim();
    var prenom = document.getElementById('prenom').value.trim();
    var dateDeNaissance = document.getElementById('dateDeNaissance').value.trim();
    var adresse = document.getElementById('adresse').value.trim();
    var ville = document.getElementById('ville').value.trim();
    var codePostal = document.getElementById('codePostal').value.trim();
    var ine = document.getElementById('ine').value.trim();
    var anneeEtude = document.getElementById('anneeEtude').value.trim();
    var email = document.getElementById('email').value.trim();

    if (nom === '' || prenom === '' || dateDeNaissance === '' || adresse === '' || ville === '' || codePostal === '' || ine === '' || anneeEtude === '' || email === '') {
        event.preventDefault(); // Empêche l'envoi du formulaire
        alert('Tous les champs doivent être remplis.');
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

