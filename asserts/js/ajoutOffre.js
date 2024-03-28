function validateForm() {
    var offre = document.getElementById("offre").value;
    var domaine = document.getElementById("domaine").value;
    var mission = document.getElementById("mission").value;
    var nbetudiant = document.getElementById("nbetudiant").value;
    var entreprise = document.getElementById("entreprise").value;
    var parcours = document.getElementById("parcours").value;

    // Vérifier si les champs sont vides
    var isValid = true;
    if (offre.trim() === "") {
        document.getElementById("offre").style = 'border: solid red 3px';
        isValid = false;
    }
    if (domaine.trim() === "") {
        document.getElementById("domaine").style = 'border: solid red 3px';
        isValid = false;
    }
    if (mission.trim() === "") {
        document.getElementById("mission").style = 'border: solid red 3px';
        isValid = false;
    }
    if (nbetudiant.trim() === "") {
        document.getElementById("nbetudiant").style = 'border: solid red 3px';
        isValid = false;
    }
    if (entreprise.trim() === "") {
        document.getElementById("entreprise").style = 'border: solid red 3px';
        isValid = false;
    }
    if (parcours.trim() === "") {
        document.getElementById("parcours").style = 'border: solid red 3px';
        isValid = false;
    }

    if (!isValid) {
        document.querySelector('.erreur-message').innerText = 'Veuillez remplir les champs en rouge';
    }

    return isValid;
}
