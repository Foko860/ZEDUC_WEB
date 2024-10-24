// Variables pour stocker les éléments du DOM
const searchInput = document.querySelector('.search-box input');
const categoryFilters = {
    plats: document.getElementById('plats-dropdown'),
    complements: document.getElementById('complements-dropdown'),
    boissons: document.getElementById('boissons-dropdown'),
    supplements: document.getElementById('supplements-dropdown')
};
const priceFilter = document.querySelector('.price-filter input');
const productCards = document.querySelectorAll('.product-card');

// Variables pour la fenêtre pop-up
const popup = document.getElementById('popup');
const popupProductName = document.getElementById('popup-product-name');
const popupProductPrice = document.getElementById('popup-product-price');
const addToCartBtn = document.getElementById('add-to-cart-btn');
const cancelBtn = document.getElementById('cancel-btn');
const cartList = document.getElementById('cart-list');
const cartContainer=document.getElementById('cart-container')

// Panier
let cart = [];

// Fonction pour ajouter un produit au panier
function addToCart(productName, productPrice, quantity) {
    const existingCartItem = cart.find(item => item.name === productName);

    if (existingCartItem) {
        existingCartItem.quantity += quantity; // Mettre à jour la quantité si l'article existe déjà
    } else {
        cart.push({ name: productName, price: productPrice, quantity: quantity });
    }

    displayCartItems();
}

// Fonction pour afficher les éléments du panier
function displayCartItems() {
    cartList.innerHTML = ''; // Vider la liste du panier

    cart.forEach((item, index) => {
        const li = document.createElement('li');
        li.innerHTML = `${item.name} - ${item.quantity} x ${item.price} 
        <button onclick="removeFromCart(${index})">Retirer</button>`;
        cartList.appendChild(li);
    });
}

// Fonction pour retirer un produit du panier
function removeFromCart(index) {
    cart.splice(index, 1); // Retirer l'article du tableau du panier
    displayCartItems(); // Rafraîchir l'affichage du panier
}

// Gérer l'affichage du panier au clic sur l'icône
cartIcon.addEventListener('click', () => {
    cartContainer.style.display = cartContainer.style.display === 'block' ? 'none' : 'block';
});


 // Fermer le panier si on clique n'importe où ailleurs sur la page
 document.addEventListener('click', function(event) {
    // Vérifier si le clic est à l'extérieur du panier
    if (!cartContainer.contains(event.target)) {
        cartContainer.style.display = 'none';
    }
});

// Gestion de la validation du panier
document.getElementById('validate-cart').addEventListener('click', () => {
    if (cart.length > 0) {
        alert('Commande validée !');
        cart = []; // Vider le panier après validation
        displayCartItems(); // Mettre à jour l'affichage du panier
    } else {
        alert('Votre panier est vide.');
    }
});

// Fonction pour filtrer les produits par nom (recherche)
function filterBySearch() {
    const searchText = searchInput.value.toLowerCase();

    productCards.forEach(card => {
        const productName = card.querySelector('h2').textContent.toLowerCase();
        if (productName.includes(searchText)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

// Gestion des filtres
searchInput.addEventListener('input', filterBySearch);

// Sélecteurs de quantité (incrémentation/décrémentation)
document.addEventListener('DOMContentLoaded', function() {
    const incrementButtons = document.querySelectorAll('.increment-btn');
    const decrementButtons = document.querySelectorAll('.decrement-btn');

    // Incrémenter la quantité
    incrementButtons.forEach(button => {
        button.addEventListener('click', function() {
            const input = this.parentNode.querySelector('.quantity-input');
            let currentValue = parseInt(input.value);
            input.value = currentValue + 1;
        });
    });

    // Décrémenter la quantité
    decrementButtons.forEach(button => {
        button.addEventListener('click', function() {
            const input = this.parentNode.querySelector('.quantity-input');
            let currentValue = parseInt(input.value);
            if (currentValue > 1) {
                input.value = currentValue - 1;
            }
        });
    });

    // Ajouter au panier avec la quantité sélectionnée
    const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
    
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productCard = this.closest('.product-card');
            const productName = productCard.querySelector('h3').innerText;
            const productPrice = productCard.querySelector('p').innerText;
            const quantity = parseInt(productCard.querySelector('.quantity-input').value);

            addToCart(productName, productPrice, quantity); // Ajouter au panier avec quantité
        });
    });
});

// Initialiser les filtres au chargement de la page
filterBySearch();
