document.addEventListener("DOMContentLoaded", function() {
    var mdpError = document.getElementById("mdpError");
    var mdpInput = document.getElementById("mdp");
    var mdpConfirmerInput = document.getElementById("mdpConfirmer");

    function showError(element, message) {
        element.textContent = message;
        element.style.color = "red";
    }

    function clearError(element) {
        element.textContent = "";
    }


    var passwordResetForm = document.getElementById("passwordResetForm");
    passwordResetForm.addEventListener("submit", function(event) {
        event.preventDefault();

        clearError(mdpError);

        var mdpValue = mdpInput.value.trim();
        var mdpConfirmerValue = mdpConfirmerInput.value.trim();

        if (!mdpValue || !mdpConfirmerValue) {
            showError(mdpError, "Veuillez remplir tous les champs.");
            return;
        }

        if (mdpValue !== mdpConfirmerValue ){
            showError(mdpError, "Les codes saissis sont différents.");
        } else {
            this.submit()
        }
    });
});
