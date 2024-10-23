// Attacher un événement "submit" au formulaire
document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêcher l'envoi automatique du formulaire

    // Récupérer les valeurs des champs du formulaire
    const studentName = document.getElementById('studentName').value.trim();
    const contact = document.getElementById('contact').value.trim();
    const location = document.getElementById('location').value.trim();

    // Vérifier qu'une méthode de paiement a été sélectionnée
    const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked');

    // Vérifier que tous les champs sont remplis
    if (!studentName || !contact || !location) {
        alert('Veuillez remplir tous les champs.');
        return;
    }

    // Vérifier qu'une méthode de paiement est sélectionnée
    if (!paymentMethod) {
        alert('Veuillez sélectionner un mode de paiement.');
        return;
    }

    // Si tout est correct, afficher un message de confirmation
    alert(`Merci pour votre commande, ${studentName} !\nMode de paiement sélectionné: ${paymentMethod.value}`);

    // Vous pouvez ajouter un code ici pour envoyer le formulaire si nécessaire
    // Par exemple, vous pourriez envoyer les données via AJAX à un serveur
});
