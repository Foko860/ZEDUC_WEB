document.getElementById('projet').addEventListener('submit', function(event) {
    // Empêcher le rechargement de la page lors de la soumission du formulaire
    event.preventDefault();

    // Récupérer les valeurs des champs
    const idCommand = document.getElementById('IdCommand').value;
    const nomEtudiant = document.getElementById('nom').value;
    const date = document.getElementById('date').value;
    const autre = document.getElementById('Autre').value;

    // Récupérer les valeurs des cases à cocher sélectionnées
    const interests = [];
    document.querySelectorAll('input[name="interest"]:checked').forEach((checkbox) => {
      interests.push(checkbox.value);
    });

 //verification des informations relevées (ou les traiter comme souhaité)
    console.log('Id Command:', idCommand);
    console.log('Nom Etudiant:', nomEtudiant);
    console.log('Date:', date);
    console.log('Problèmes signalés:', interests);
    console.log('Autres:', autre);

    // Afficher une alerte indiquant que le formulaire a été envoyé
    alert('Votre formulaire a bien été envoyé !\n' +
          'Id Command: ' + idCommand + '\n' +
          'Nom Etudiant: ' + nomEtudiant + '\n' +
          'Date: ' + date + '\n' +
          'Problèmes signalés: ' + (interests.length ? interests.join(', ') : 'Aucun') + '\n' +
          'Autres remarques: ' + autre);

    // Tu peux maintenant envoyer ces données vers ton back-end ou les traiter ici
  });