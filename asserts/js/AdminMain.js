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


document.addEventListener("DOMContentLoaded", function () {
    var photo = document.getElementById("photo");
    var photo2 = document.getElementById("photo2");
    var dropdown = document.getElementById("account-dropdown");
    var dropdown2 = document.getElementById("account-dropdown2");

    photo.addEventListener("click", function (event) {
        event.stopPropagation();
        dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
    });
    photo2.addEventListener("click", function (event) {
        event.stopPropagation();
        dropdown2.style.display = (dropdown2.style.display === "block") ? "none" : "block";
    });

    // Ajout d'un écouteur d'événements sur le document pour fermer le menu s'il est ouvert et que l'on clique en dehors
    document.addEventListener("click", function (event) {
        if (dropdown.style.display === "block" && !event.target.closest('#account-photo')) {
            dropdown.style.display = "none";
        }
        if (dropdown2.style.display === "block" && !event.target.closest('#account-photo2')) {
            dropdown2.style.display = "none";
        }
    });
});


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

