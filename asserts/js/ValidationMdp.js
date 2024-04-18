function validerFormulaire() {
    var mdp = document.getElementById("mdp").value;
    var mdpVerif = document.getElementById("mdpVerif").value;
    document.getElementById("mdpError").style.color = 'red';

    if (mdp.trim() === "" || mdpVerif.trim() === "") {
        document.getElementById("mdpError").textContent = "Veuillez remplir tous les champs.";
        return false;
    }

    if (mdp !== mdpVerif) {
        document.getElementById("mdpError").textContent = "Les mots de passe ne correspondent pas.";
        return false;
    }

    if (mdp.length < 8 || mdpVerif.length < 8) {
        document.getElementById("mdpError").textContent = "Les mots de passe doivent avoir au moins 8 caractères.";
        return false;
    }


    return true;
}
