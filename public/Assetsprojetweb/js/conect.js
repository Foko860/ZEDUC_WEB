// Attend que le DOM soit chargé
document.addEventListener("DOMContentLoaded", function() {

    // Sélectionne les éléments nécessaires
    const editButton = document.querySelector(".edit-button");
    const profileForm = document.querySelector(".profile-form");
    const saveButton = document.querySelector(".save-button");

    // Masque le formulaire de profil par défaut
    profileForm.style.display = "none";

    // Lorsque l'utilisateur clique sur "modifier profil", bascule la visibilité du formulaire
    editButton.addEventListener("click", function() {
        profileForm.classList.toggle("visible");

        // Change le texte du bouton
        if (profileForm.classList.contains("visible")) {
            profileForm.style.display = "block";
            editButton.textContent = "Annuler";
        } else {
            profileForm.style.display = "none";
            editButton.textContent = "Modifier Profil";
        }
    });

    // Validation du formulaire lors de la soumission
    profileForm.addEventListener("submit", function(event) {
        event.preventDefault(); // Empêche le rafraîchissement de la page

        // Récupère les valeurs des champs du formulaire
        const pseudo = document.getElementById("pseudo").value;
        const email = document.getElementById("email").value;
        const phone = document.getElementById("phone").value;
        const address = document.getElementById("address").value;

        // Validation basique
        if (!pseudo || !email || !phone || !address) {
            alert("Tous les champs doivent être remplis !");
            return;
        }

        if (!validateEmail(email)) {
            alert("Veuillez entrer une adresse e-mail valide.");
            return;
        }

        if (!validatePhone(phone)) {
            alert("Veuillez entrer un numéro de téléphone valide.");
            return;
        }

        // Simule l'enregistrement des données
        alert("Les informations ont été enregistrées avec succès !");
        profileForm.style.display = "none";
        editButton.textContent = "Modifier Profil";
    });

    // Fonction de validation de l'email
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    // Fonction de validation du numéro de téléphone
    function validatePhone(phone) {
        const re = /^[0-9]{10}$/;
        return re.test(phone);
    }

    // Optionnel : permet à l'utilisateur de modifier l'avatar en cliquant dessus
    const profileAvatar = document.querySelector(".profile-avatar");
    profileAvatar.addEventListener("click", function() {
        alert("Fonctionnalité à venir : téléchargez ou modifiez votre avatar !");
    });

});
