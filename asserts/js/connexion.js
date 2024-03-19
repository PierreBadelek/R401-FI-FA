// Affichage des messages d'erreur
document.getElementById('btnConnexion').addEventListener('click', function(event) {
    var email = document.getElementById('email').value.trim();
    var mdp = document.getElementById('mdp').value.trim();

    if (email === '' || mdp === '') {
        event.preventDefault(); // Empêche l'envoi du formulaire
        alert('Tous les champs doivent être remplis.');
    }
});

// Récupérer l'élément pour afficher le message d'erreur
var errorMessage = document.getElementById("error-message");

// Vérifier si l'authentification a échoué (par exemple, via un paramètre GET)
var urlParams = new URLSearchParams(window.location.search);
if (urlParams.has("error")) {
    // Afficher le message d'erreur approprié
    errorMessage.textContent = "Adresse e-mail ou mot de passe incorrect";
}
