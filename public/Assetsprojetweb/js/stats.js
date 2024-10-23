// 1. Mise à jour de la classe 'active' dans la barre de navigation
document.querySelectorAll('.navbar a').forEach(link => {
    link.addEventListener('click', function() {
        document.querySelector('.navbar a.active').classList.remove('active');
        this.classList.add('active');
    });
});

// 2. Ajouter une nouvelle ligne dans les tableaux de statistiques
document.addEventListener('DOMContentLoaded', function() {
    // Sélection des tableaux
    const salesTable = document.querySelector('.statistics-section table:nth-of-type(1) tbody');
    const referralTable = document.querySelector('.statistics-section table:nth-of-type(2) tbody');

    // Boutons fictifs pour ajouter des lignes (tu peux les créer dans le HTML)
    const addSalesRowBtn = document.createElement('button');
    addSalesRowBtn.textContent = "Ajouter une ligne de vente";
    addSalesRowBtn.addEventListener('click', function() {
        const newRow = document.createElement('tr');
        for (let i = 0; i < 5; i++) {
            const td = document.createElement('td');
            newRow.appendChild(td);
        }
        salesTable.appendChild(newRow);
    });

    const addReferralRowBtn = document.createElement('button');
    addReferralRowBtn.textContent = "Ajouter une ligne de parrainage";
    addReferralRowBtn.addEventListener('click', function() {
        const newRow = document.createElement('tr');
        for (let i = 0; i < 3; i++) {
            const td = document.createElement('td');
            newRow.appendChild(td);
        }
        referralTable.appendChild(newRow);
    });

    // Ajout des boutons au DOM (tu peux choisir où les ajouter)
    document.body.appendChild(addSalesRowBtn);
    document.body.appendChild(addReferralRowBtn);
});

// 3. Effet de hover sur les icônes des réseaux sociaux
document.querySelectorAll('.socialIcons a').forEach(icon => {
    icon.addEventListener('mouseenter', function() {
        this.style.transform = 'scale(1.2)';
        this.style.transition = 'transform 0.2s';
    });
    icon.addEventListener('mouseleave', function() {
        this.style.transform = 'scale(1)';
    });
});

// 4. Mise à jour automatique de l'année du copyright
document.addEventListener('DOMContentLoaded', function() {
    const currentYear = new Date().getFullYear();
    document.querySelector('.footerBottom p').innerHTML = `Copyright &copy;${currentYear}; Designed by <span class="designer">Group6</span>`;
});
