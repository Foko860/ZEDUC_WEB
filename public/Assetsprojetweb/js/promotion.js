document.addEventListener("DOMContentLoaded", function () {
    const addPromotionButton = document.querySelector(".promotion-placeholder button");
    const historyContainer = document.querySelector(".promotion-history");

    // Tableau pour stocker les promotions
    let promotions = [];

    // Fonction pour ajouter une nouvelle promotion
    function ajouterPromotion() {
        const newPromotion = prompt("Veuillez entrer les détails de la nouvelle promotion :");

        if (newPromotion) {
            // Ajout de la nouvelle promotion au tableau
            promotions.push(newPromotion);

            // Mise à jour de l'historique des promotions
            updateHistorique();
        } else {
            alert("Aucune promotion ajoutée.");
        }
    }

    // Fonction pour mettre à jour l'affichage de l'historique des promotions
    function updateHistorique() {
        const historyItems = document.querySelectorAll(".history-item");
        historyItems.forEach(item => item.remove()); // Supprime l'historique existant

        promotions.forEach(promotion => {
            const historyItem = document.createElement("div");
            historyItem.classList.add("history-item");
            historyItem.textContent = promotion;
            historyContainer.appendChild(historyItem);
        });
    }

    // Événement pour le bouton "Ajouter une Promotion"
    addPromotionButton.addEventListener("click", ajouterPromotion);
});
