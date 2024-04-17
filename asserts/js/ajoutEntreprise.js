function validateForm() {
    var nom = document.getElementById("nom").value;
    var adresse = document.getElementById("adresse").value;
    var ville = document.getElementById("ville").value;
    var codePostal = document.getElementById("codePostal").value;
    var num = document.getElementById("num").value;
    var email = document.getElementById("email").value;
    var secteur = document.getElementById("secteur").value;

    // Vérifier si les champs sont vides
    var isValid = true;

    if (nom.trim() === "") {
        document.getElementById("nom").style = 'border: solid red 3px';
        isValid = false;
    }
    if (adresse.trim() === "") {
        document.getElementById("adresse").style = 'border: solid red 3px';
        isValid = false;
    }
    if (ville.trim() === "") {
        document.getElementById("ville").style = 'border: solid red 3px';
        isValid = false;
    }
    if (codePostal.trim() === "") {
        document.getElementById("codePostal").style = 'border: solid red 3px';
        isValid = false;
    }
    if (num.trim() === "") {
        document.getElementById("num").style = 'border: solid red 3px';
        isValid = false;
    }
    if (email.trim() === "") {
        document.getElementById("email").style = 'border: solid red 3px';
        isValid = false;
    }
    if (secteur.trim() === "") {
        document.getElementById("secteur").style = 'border: solid red 3px';
        isValid = false;
    }

    if (!isValid) {
        document.querySelector('.erreur-message').innerText = 'Veuillez remplir les champs en rouge';
    }

    return isValid;
}