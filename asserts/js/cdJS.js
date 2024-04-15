var retourAdminButton = document.getElementById('retour-admin');
if (retourAdminButton) {
    retourAdminButton.addEventListener('click', function () {
        window.location.href = '../../View/Personnel/ViewAdminAdministration.php';
    });

    var utilisateurEstAdministrateur = true;
    if (utilisateurEstAdministrateur) {
        var boutonRetourDiv = document.getElementById('bouton-retour-admin');
        boutonRetourDiv.style.display = 'block';
    }
}