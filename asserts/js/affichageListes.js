// Écouteur d'événements pour le chargement du document
document.addEventListener('DOMContentLoaded', function () {
    // Appel de la fonction pour afficher les étudiants lors du chargement initial
    loadStudents();

    // Appel de la fonction pour afficher les offres lors du chargement initial
    loadOffers();

    loadCompanies();

});

// Fonction pour charger les étudiants via AJAX
function loadStudents() {
    $.ajax({
        url: '../../Model/ModelAfficherEtuMain.php',
        type: 'GET',
        dataType: 'html',
        data: {
            page: 1
        },
        success: function (result) {
            // Met à jour le contenu du conteneur des étudiants
            $('#etudiants-container').html(result);
        },
        error: function (error) {
            console.error('Erreur lors du chargement des étudiants :', error);
        }
    });
}

// Fonction pour charger les offres via AJAX
function loadOffers() {
    $.ajax({
        url: '../../Model/ModelAffichageOffreMain.php',
        type: 'GET',
        dataType: 'html',
        data: {
            page: 1
        },
        success: function (result) {
            // Met à jour le contenu du conteneur des offres
            $('#offres-container').html(result);
        },
        error: function (error) {
            console.error('Erreur lors du chargement des offres :', error);
        }
    });
}

// Fonction pour charger les entreprises via AJAX
function loadCompanies() {
    $.ajax({
        url: '../../Model/ModelAfficherEntrepriseMain.php',
        type: 'GET',
        dataType: 'html',
        data: {
            page: 1
        },
        success: function (result) {
            // Met à jour le contenu du conteneur des entreprises
            $('#entreprises-container').html(result);
        },
        error: function (error) {
            console.error('Erreur lors du chargement des entreprises :', error);
        }
    });
}



function redirectWithAjax(url) {
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'html',
        success: function () {
            // Redirection après le succès de la requête AJAX
            window.location.replace(url);
        },
        error: function (error) {
            console.error('Erreur AJAX :', error);
        }
    });
}


document.addEventListener("DOMContentLoaded", function () {
    // Ajoutez un écouteur d'événements au bouton "Afficher Plus" des offres
    document.getElementById('afficherOffres').addEventListener('click', function () {
        var urlOffres = '../Offre/ViewAfficherPlusOffre.php';
        redirectWithAjax(urlOffres);
    });

    document.getElementById('afficherEtudiants').addEventListener('click', function () {
        var urlOffres = '../Etudiant/ViewAfficherPlusEtu.php';
        redirectWithAjax(urlOffres);
    });

    document.getElementById('afficherEntreprises').addEventListener('click', function () {
        var urlOffres = '../Entreprise/ViewAfficherPlusEntreprise.php';
        redirectWithAjax(urlOffres);
    });

    document.getElementById('redirigerVersAjoutEntreprise').addEventListener('click', function () {
        var urlOffres = '../Entreprise/ViewAjoutEntreprise.php';
        redirectWithAjax(urlOffres);
    });
});