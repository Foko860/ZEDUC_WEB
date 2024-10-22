document.addEventListener("DOMContentLoaded", () => {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartCount = document.getElementById('cart-count');
    const totalPrice = document.getElementById('total-price');
    const cartItems = document.getElementById('items');

    // Mettre à jour le nombre d'articles dans le panier
    const updateCartCount = () => {
        const itemCount = cart.reduce((sum, product) => sum + product.quantity, 0);
        cartCount.textContent = itemCount;
    };

    // Mettre à jour le prix total du panier
    const updateTotalPrice = () => {
        const total = cart.reduce((sum, product) => sum + (product.price * product.quantity), 0);
        totalPrice.textContent = total.toFixed(2);
    };

    // Afficher les articles du panier
    const renderCartItems = () => {
        cartItems.innerHTML = ''; // Réinitialise l'affichage des articles du panier
        cart.forEach((product, index) => {
            const item = document.createElement('div');
            item.classList.add('cart-item');
            item.innerHTML = `
                <p>${product.name} - ${product.price}€</p>
                <p>Quantité : ${product.quantity}</p>
                <button class="decrease" data-index="${index}">-</button>
                <button class="increase" data-index="${index}">+</button>
                <button class="remove" data-index="${index}">Supprimer</button>
            `;
            cartItems.appendChild(item);
        });

        // Attacher les événements aux boutons (incrémentation, décrémentation, suppression)
        document.querySelectorAll('.decrease').forEach(button => {
            button.addEventListener('click', (e) => {
                const index = e.target.dataset.index;
                if (cart[index].quantity > 1) {
                    cart[index].quantity--;
                } else {
                    cart.splice(index, 1); // Si la quantité atteint 0, supprimer l'article
                }
                saveCart();
                renderCartItems();
                updateCartCount();
                updateTotalPrice();
            });
        });

        document.querySelectorAll('.increase').forEach(button => {
            button.addEventListener('click', (e) => {
                const index = e.target.dataset.index;
                cart[index].quantity++;
                saveCart();
                renderCartItems();
                updateCartCount();
                updateTotalPrice();
            });
        });

        document.querySelectorAll('.remove').forEach(button => {
            button.addEventListener('click', (e) => {
                const index = e.target.dataset.index;
                cart.splice(index, 1);
                saveCart();
                renderCartItems();
                updateCartCount();
                updateTotalPrice();
            });
        });
    };

    // Sauvegarder le panier dans le localStorage
    const saveCart = () => {
        localStorage.setItem('cart', JSON.stringify(cart));
    };

    // Ajouter un produit au panier
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', (e) => {
            const id = e.target.dataset.id;
            const name = e.target.dataset.name;
            const price = parseFloat(e.target.dataset.price);
            const existingProductIndex = cart.findIndex(product => product.id === id);

            if (existingProductIndex !== -1) {
                // Si le produit est déjà dans le panier, on incrémente sa quantité
                cart[existingProductIndex].quantity++;
            } else {
                // Sinon, on ajoute le produit avec une quantité initiale de 1
                cart.push({ id, name, price, quantity: 1 });
            }

            saveCart();
            renderCartItems();
            updateCartCount();
            updateTotalPrice();
        });
    });

    // Afficher ou cacher le panier
    document.getElementById('view-cart').addEventListener('click', () => {
        const cartSection = document.getElementById('cart-items');
        cartSection.style.display = cartSection.style.display === 'none' ? 'block' : 'none';
    });

    // Initialiser l'affichage du panier
    renderCartItems();
    updateCartCount();
    updateTotalPrice();
});

document.addEventListener("DOMContentLoaded", () => {
    const cartPanel = document.getElementById('cart-panel');
    const viewCartButton = document.getElementById('view-cart');
    const closeCartButton = document.getElementById('close-cart');

    // Fonction pour ouvrir le panneau du panier
    viewCartButton.addEventListener('click', (e) => {
        e.preventDefault(); // Empêche le rechargement de la page
        cartPanel.classList.add('open'); // Ajoute la classe pour ouvrir le panneau
    });

    // Fonction pour fermer le panneau du panier
    closeCartButton.addEventListener('click', () => {
        cartPanel.classList.remove('open'); // Enlève la classe pour fermer le panneau
    });
});
