document.addEventListener("DOMContentLoaded", function() {
    var codeError = document.getElementById("codeError");
    var codeInput = document.getElementById("code");



    function showError(element, message) {
    element.textContent = message;
    element.style.color = "red";
}
    function clearError(element) {
        element.textContent = "";
    }

    codeInput.addEventListener("input", function() {
        clearError(codeError);
    });

    document.getElementById('confirmation').addEventListener("click", function(event) {
        event.preventDefault();
        clearError(codeError);
        var codeValue = codeInput.value.trim();
        if (!codeValue) {
            showError(codeError, "Veuillez remplir tous les champs.");
            return;
        }

fetch("../Controller/Connexion/ControllerVerifCode.php", {
    method: "POST",
    body: JSON.stringify({
    }),
    headers: {
        "Content-Type": "application/json"
    }
})
    .then(response => response.json())
    .then(data => {
        console.log(data, codeInput.value)
        if (data === codeInput.value) {
            this.form.submit()
        } else {
            showError(codeError,'Code incorrect.');
        }
    })
    .catch(error => {
        console.error("Erreur lors de la soumission du formulaire:", error);
        alert("Une erreur est survenue lors de la soumission du formulaire. Veuillez réessayer.");
    });
});
});