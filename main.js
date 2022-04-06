formInscription = document.getElementById("testPopUpInscription");

btnInscription = document.getElementById("btnInscription");

btnInscription.addEventListener('click', function () {
    formInscription.classList.toggle("cachee");
});


function validationInscription() {
    let mdp = document.getElementById('mdp');
    let mdpConfirmation = document.getElementById('mdpConfirm');
    let mail = document.getElementById('mail');
    let dateNaissance = document.getElementById('dateNaissance');
    let ajd = Date.now();

    if (mdp.value !== mdpConfirmation.value) {
        alert("Attention, les mots de passe ne correspondent pas !");
        return false;
    }
    else if (!mail.value.includes("@", ".")) {
        alert("Attention, votre mail n'est pas valide :");
        return false;
    }
    else if (dateNaissance.value > ajd) {
        alert("Vous devez absolument être né pour vous inscrire, petit malin ! ");
        return false;
        // NE FONCTIONNE PAS, à faire, mieux.
    }

}