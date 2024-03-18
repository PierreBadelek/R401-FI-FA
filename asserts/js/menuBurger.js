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