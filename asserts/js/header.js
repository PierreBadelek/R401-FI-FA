var menuToggle = document.getElementById('menu-toggle');

// Récupérer le menu
var menu = document.querySelector('.menu');

// Attacher un événement de clic au menu-toggle
menuToggle.addEventListener('click', function() {
    // Basculer la visibilité du menu lors du clic
    if (menu.style.display === 'none' || menu.style.display === '') {
        menu.style.display = 'block';
    } else {
        menu.style.display = 'none';
    }
});

// Cacher le menu lorsque l'utilisateur clique en dehors du menu
window.addEventListener('click', function(e) {
    if (!menuToggle.contains(e.target) && !menu.contains(e.target)) {
        menu.style.display = 'none';
    }
});

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
