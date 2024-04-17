function validateForm() {
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var formation = document.getElementById("formation-select").value;
    var email = document.getElementById("email").value;
    var mdp = document.getElementById("mdp").value;

    // Vérifier si les champs sont vides
    var isValid = true;
    if (nom.trim() === "") {
        document.getElementById("nom").style = 'border: solid red 3px';
        isValid = false;
    }
    if (prenom.trim() === "") {
        document.getElementById("prenom").style = 'border: solid red 3px';
        isValid = false;
    }
    if (formation === "") {
        document.getElementById("formation").style = 'border: solid red 3px';
        isValid = false;
    }
    if (email.trim() === "") {
        document.getElementById("email").style = 'border: solid red 3px';
        isValid = false;
    }
    if (mdp.trim() === "") {
        document.getElementById("mdp").style = 'border: solid red 3px';
        isValid = false;
    }

    if (!isValid) {
        document.querySelector('.erreur-message').innerText = 'Veuillez remplir les champs en rouge';
    }

    return isValid;
}