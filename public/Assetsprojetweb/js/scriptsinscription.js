// Récupère le formulaire d'inscription
const signupForm = document.getElementById('signupForm');

// Fonction de validation du formulaire
function validateForm() {
  // Récupère les valeurs des champs du formulaire
  const name = document.getElementById('name').value.trim();
  const email = document.getElementById('email').value.trim();
  const password = document.getElementById('password').value.trim();
 // const passwordConfirmation = document.getElementById('password_confirmation').value.trim();
  const numero = document.getElementById('numero').value.trim();
  const id_parrain = document.getElementById('id_parrain').value.trim();

  // Vérifie si les champs obligatoires sont remplis
  if (name === '' || email === '' || password === '' || numero === '') {
    alert('Veuillez remplir tous les champs obligatoires.');
    return false;
  }

  // Vérifie si le mot de passe fait au moins 6 caractères
  if (password.length < 6) {
    alert('Le mot de passe doit contenir au moins 6 caractères.');
    return false;
  }

  // Vérifie si le mot de passe et la confirmation correspondent
  /*if (password !== passwordConfirmation) {
    alert('Les mots de passe ne correspondent pas.');
    return false;
  }*/

  // Valide le format de l'e-mail
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    alert('Veuillez entrer une adresse e-mail valide.');
    return false;
  }

  // Si tout est validé, soumet le formulaire
  return true;
}

// Événement de soumission du formulaire
signupForm.addEventListener('submit', async (event) => {
  event.preventDefault(); // Empêche le comportement par défaut du formulaire

  if (validateForm()) {
    try {
      // Envoyez les données du formulaire au backend Laravel
      const response = await fetch('register', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json', // Important pour que Laravel sache que tu veux du JSON
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
          
        },
        body: JSON.stringify({
          name: document.getElementById('name').value,
          email: document.getElementById('email').value,
          password: document.getElementById('password').value,
          //password_confirmation: document.getElementById('password_confirmation').value,
          numero: document.getElementById('numero').value,
          id_parrain: document.getElementById('id_parrain').value,
        }),
      });

      console.log(response);

      if (response.ok) {
        // Inscription réussie
        const result = await response.json();
        console.log(result);
        alert(result.message); // Affiche le message de succès
        signupForm.reset(); // Réinitialise le formulaire
        //window.location.href = '/dashboard'; // Redirige vers le tableau de bord
      } else {
        // Gestion des erreurs de validation0
        console.log("bonsoir");
        const errors = await response.json();
        console.log("bonjour");
        displayErrors(errors.errors); // Affiche les erreurs
      }
    } catch (error) {
      console.error('Erreur lors de la soumission du formulaire :', error);
    }
  }
});

// Fonction pour afficher les messages d'erreur
function displayErrors(errors) {
  // Affichez les erreurs à l'utilisateur, par exemple dans une alerte
  const errorMessages = Object.values(errors).flat().join(', ');
  alert(`Erreurs : ${errorMessages}`); // Affiche les erreurs
}