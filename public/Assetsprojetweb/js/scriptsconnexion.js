document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche la soumission normale du formulaire

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Effectuer la requête de connexion
    fetch('connexion', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'), // Inclure le token CSRF
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            email: email,
            password: password
        })
    })
    .then(response => {
        if (response.ok) {
            // Si la connexion réussie, rediriger vers le tableau de bord
            window.location.href = '/dashboard'; // Changez cela selon votre logique après une connexion réussie
        } else {
            // Gérer les erreurs
            return response.text(); // Récupérer le contenu de la réponse
        }
    })
    .then(data => {
        // Afficher les messages d'erreur ou gérer le contenu de la réponse
        console.error(data); // Afficher les erreurs dans la console
        alert('Erreur : ' + data); // Affichez le message d'erreur à l'utilisateur
    })
    .catch(error => console.error('Erreur:', error));
});