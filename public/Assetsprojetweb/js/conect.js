 // Wait for the DOM to load
document.addEventListener("DOMContentLoaded", function() {

    // Profile Edit Button Interaction
    const editButton = document.querySelector(".edit-button");
    const profileForm = document.querySelector(".profile-form");
    const saveButton = document.querySelector(".save-button");

    // By default, hide the profile form
    profileForm.style.display = "none";

    // When the user clicks on "modifier profil", toggle the visibility of the form
    editButton.addEventListener("click", function() {
        if (profileForm.style.display === "none") {
            profileForm.style.display = "block";
            editButton.textContent = "Annuler";
        } else {
            profileForm.style.display = "none";
            editButton.textContent = "Modifier Profil";
        }
    });

    // Form validation on submit
    profileForm.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form from refreshing the page

        // Get input values
        const pseudo = document.getElementById("pseudo").value;
        const email = document.getElementById("email").value;
        const phone = document.getElementById("phone").value;
        const address = document.getElementById("address").value;

        // Basic validation
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

        // Simulate saving the data
        alert("Les informations ont été enregistrées avec succès !");
        profileForm.style.display = "none";
        editButton.textContent = "Modifier Profil";
    });

    // Email validation function
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    // Phone validation function
    function validatePhone(phone) {
        const re = /^[0-9]{10}$/;  // Example for a 10-digit phone number
        return re.test(phone);
    }

    // Optional: Let users upload or change their avatar by clicking on the avatar section
    const profileAvatar = document.querySelector(".profile-avatar");
    profileAvatar.addEventListener("click", function() {
        alert("Fonctionnalité à venir: téléchargez ou modifiez votre avatar !");
    });

});
