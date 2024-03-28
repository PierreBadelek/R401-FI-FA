function validateForm() {
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var dateDeNaissance = document.getElementById("dateDeNaissance").value;
    var adresse = document.getElementById("adresse").value;
    var ville = document.getElementById("ville").value;
    var codePostal = document.getElementById("codePostal").value;
    var ine = document.getElementById("ine").value;
    var anneeEtude = document.getElementById("anneeEtude").value;
    var formation = document.getElementById("formation").value;
    var entreprise = document.getElementById("entreprise").value;
    var mission = document.getElementById("mission").value;
    var mobile = document.getElementById("mobile").value;
    var email = document.getElementById("email").value;
    var cv = document.getElementById("cv").value;


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
    if (dateDeNaissance.trim() === "") {
        document.getElementById("dateDeNaissance").style = 'border: solid red 3px';
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
    if (ine.trim() === "") {
        document.getElementById("ine").style = 'border: solid red 3px';
        isValid = false;
    }
    if (anneeEtude.trim() === "") {
        document.getElementById("anneeEtude").style = 'border: solid red 3px';
        isValid = false;
    }
    if (formation.trim() === "") {
        document.getElementById("formation").style = 'border: solid red 3px';
        isValid = false;
    }
    if (email.trim() === "") {
        document.getElementById("email").style = 'border: solid red 3px';
        isValid = false;
    }

    if (!isValid) {
        document.querySelector('.erreur-message').innerText = 'Veuillez remplir les champs en rouge';
    }

    return isValid;
}
