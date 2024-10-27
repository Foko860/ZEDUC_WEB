document.getElementById('loginForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const idEmploye = document.getElementById('id_Employe').value;
    const nom = document.getElementById('nom').value;

    fetch('/login-employe', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ id_Employe: idEmploye, nom: nom })
    })
    .then(response => {
        // Vérifiez si la réponse est correcte
        if (!response.ok) {
            throw new Error('Network response was not ok: ' + response.statusText);
        }
        return response.json(); // Retourne la réponse JSON
    })
    .then(data => {
        console.log('Données reçues:', data); // Affiche les données reçues dans la console
        if (data.message === 'Connexion réussie !') {
            alert('Connexion réussie');
            window.location.href = '/reclamations'; // Redirection
        } else {
            alert('Employé non trouvé. Veuillez vérifier les informations.');
        }
    })
    .catch(error => console.error('Erreur:', error));
});