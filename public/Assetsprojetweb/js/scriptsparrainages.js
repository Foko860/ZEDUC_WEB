document.addEventListener('DOMContentLoaded', function () {
    // Simulation d'un lien de parrainage
    const parrainageLink = "https://zeduc-space.com/register?ref=CODE1234"; // Lien dynamique basé sur l'utilisateur

    // Bouton "Partager mon lien"
    document.querySelector('.btn-block').addEventListener('click', function () {
        // Copier le lien dans le presse-papier
        navigator.clipboard.writeText(parrainageLink).then(function () {
            alert("Lien de parrainage copié : " + parrainageLink);
        }, function (err) {
            console.error('Erreur lors de la copie : ', err);
        });
    });

    // Simulation de récupération des points de fidélité de l'utilisateur
    const pointsFidelite = 150; // Exemple de points stockés côté serveur

    document.querySelector('.btn-block:nth-child(2)').addEventListener('click', function () {
        alert("Vous avez " + pointsFidelite + " points de fidélité.");
    });
});
