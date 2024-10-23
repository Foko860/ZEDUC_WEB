<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <title>Zeduc-Space Menu</title>

    <!-- Lien vers le fichier CSS avec l'helper Laravel asset() -->
    <link rel="stylesheet" href="{{ asset("Assetsprojetweb/css/Menu_page.css") }}">
    

    <!-- Lien vers les polices Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="{{ asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css")}}" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Timmana&display=swap')}}" rel="stylesheet">
    
    <!-- Lien vers le fichier CSS spécifique pour la page -->
</head>

<body>
    <!-- header -->
<header>
  <!-- Barre de navigation en haut -->
        <nav>
            <div class="logo">
                <img src="{{ asset('Assetsprojetweb/assets/icones/logo.svg')}}" alt="Zeduc-space-logo">
                
            </div>

            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a1 href="{{ route('menu') }}">Menu</a1></li>
                <li><a href="{{ route('parrainages.index') }}">Parrainage</a></li>
            </ul>
            
           <!-- Panier -->
<!-- Icône du panier -->
<div class="cart" id="cart-icon">
    <img src="{{ asset('Assetsprojetweb/assets/icones/sac.svg') }}" alt="cart">
</div>
        </nav>
    </header>
        <!-- Section menu avec les produits -->
        <section class="menu-section">
            <div class="container">
                <div class="product-grid">
                    <!-- Carte produit -->
                     <div class="product-card">
                        <img src="{{asset("Assetsprojetweb\images\imagesmenu\cassoulet.svg")}}" alt="Cassoulet">
                        <h3>CASSOULET</h3>
                        <P>1000 XAF</P>
                        <p>Découvrez des pluies de saveurs avec nos plats de cassoulets fait sur mésure pour aiguiller vos papilles gustatives.</p>
                        <!-- Sélecteur de quantité -->
                        <div class="quantity-selector">
                            <button class="quantity-btn decrement-btn">-</button>
                            <input type="number" class="quantity-input" value="1" min="1">
                            <button class="quantity-btn increment-btn">+</button>
                        </div>
                        <button class="add-to-cart-btn">Ajouter au panier</button>
                     </div>

                     <div class="product-card">
                        <img src="{{ asset('Assetsprojetweb/assets/images/ndolè.svg')}}" alt="Ndolè">
                        <h3>NDOLE</h3>
                        <P>1000 XAF</P>
                        <p>Le "Ndolè Royal" un met traditionnelle exquis qui fait battre des coeurs.</p>
                        <div class="quantity-selector">
                            <button class="quantity-btn decrement-btn">-</button>
                            <input type="number" class="quantity-input" value="1" min="1">
                            <button class="quantity-btn increment-btn">+</button>
                        </div>
                        <button class="add-to-cart-btn">Ajouter au panier</button>
                     </div>

                     <div class="product-card">
                        <img src="{{ asset('Assetsprojetweb/assets/images/poulet_dg.svg')}}" alt="Poulet DG">
                        <h3>POULET DG</h3>
                        <P>1500 XAF</P>
                        <p>Rien que pour des directeurs générales, le Poulet DG est repas d'envergure pour des personnes de caractères.</p>
                        <div class="quantity-selector">
                            <button class="quantity-btn decrement-btn">-</button>
                            <input type="number" class="quantity-input" value="1" min="1">
                            <button class="quantity-btn increment-btn">+</button>
                        </div>
                        <button class="add-to-cart-btn">Ajouter au panier</button>
                     </div>

                     <div class="product-card">
                        <img src="{{ asset('Assetsprojetweb/assets/images/okok.svg')}}" alt="Okok">
                        <h3>OKOK</h3>
                        <P>1000 XAF</P>
                        <p>Sous deux formes; découvrez le plats de nos capitales, fait comme à la maison avec tout l'amour.</p>
                        <div class="quantity-selector">
                            <button class="quantity-btn decrement-btn">-</button>
                            <input type="number" class="quantity-input" value="1" min="1">
                            <button class="quantity-btn increment-btn">+</button>
                        </div>
                        <button class="add-to-cart-btn">Ajouter au panier</button>
                     </div>

                     <div class="product-card">
                        <img src="{{ asset('Assetsprojetweb/assets/images/poulet_roti.svg')}}" alt="Poulet roti">
                        <h3>POULET ROTI</h3>
                        <P>1000 XAF</P>
                        <div class="quantity-selector">
                            <button class="quantity-btn decrement-btn">-</button>
                            <input type="number" class="quantity-input" value="1" min="1">
                            <button class="quantity-btn increment-btn">+</button>
                        </div>
                        <button class="add-to-cart-btn">Ajouter au panier</button>
                     </div>

                     <div class="product-card">
                        <img src="{{ asset('Assetsprojetweb/assets/images/porc_roti.svg')}}" alt="PORC ROTI">
                        <h3>PORC ROTI</h3>
                        <P>1000 XAF</P>
                        <div class="quantity-selector">
                            <button class="quantity-btn decrement-btn">-</button>
                            <input type="number" class="quantity-input" value="1" min="1">
                            <button class="quantity-btn increment-btn">+</button>
                        </div>
                        <button class="add-to-cart-btn">Ajouter au panier</button>
                     </div>

                     <div class="product-card">
                        <img src="{{ asset('Assetsprojetweb/assets/images/pile_pomme.svg')}}" alt="Pile de pommes">
                        <h3>PILE POMMES</h3>
                        <P>1000 XAF</P>
                        <div class="quantity-selector">
                            <button class="quantity-btn decrement-btn">-</button>
                            <input type="number" class="quantity-input" value="1" min="1">
                            <button class="quantity-btn increment-btn">+</button>
                        </div>
                        <button class="add-to-cart-btn">Ajouter au panier</button>
                     </div>

                     <div class="product-card">
                        <img src="{{ asset('Assetsprojetweb/assets/images/poulet_pane.svg')}}" alt="POULET PANE">
                        <h3>POULET PANE</h3>
                        <P>1500 XAF</P>
                        <div class="quantity-selector">
                            <button class="quantity-btn decrement-btn">-</button>
                            <input type="number" class="quantity-input" value="1" min="1">
                            <button class="quantity-btn increment-btn">+</button>
                        </div>
                        <button class="add-to-cart-btn">Ajouter au panier</button>
                     </div>

                     <div class="product-card">
                        <img src="{{ asset('Assetsprojetweb/assets/images/riz_sauce_tomate.svg')}}" alt="Riz sauce tomate">
                        <h3>RIZ SAUCE TOMATE</h3>
                        <P>1000 XAF</P>
                        <p>Repas très communs, pour ne pas oublier les évènements de la maison.</p>
                        <div class="quantity-selector">
                            <button class="quantity-btn decrement-btn">-</button>
                            <input type="number" class="quantity-input" value="1" min="1">
                            <button class="quantity-btn increment-btn">+</button>
                        </div>
                        <button class="add-to-cart-btn">Ajouter au panier</button>
                     </div>
                </div>

<!-- Sidebar des filtres -->
<aside class="sidebar">
    <div class="search-box">
        <input type="text" placeholder="Search Product">
    </div>

    <div class="category-filter">
        <h4>Catégorie</h4>


        <!-- Liste déroulante pour Plats -->
        <label for="plats-dropdown">Plats</label>
        <select name="plats" id="plats-dropdown">
            <option value="">-- Plats --</option>
            <option value="cassoulet">Cassoulet</option>
            <option value="ndole">Ndolè</option>
            <option value="poulet_dg">Poulet DG</option>
            <!-- Ajoute d'autres options ici -->
        </select>

        <!-- Liste déroulante pour Compléments -->
        <label for="complements-dropdown">Compléments</label>
        <select name="complements" id="complements-dropdown">
            <option value="">--Compléments --</option>
            <option value="riz">Riz</option>
            <option value="frites">Frites</option>
            <option value="pomme_puree">Purée de pommes</option>
            <!-- Ajoute d'autres options ici -->
        </select>

        <!-- Liste déroulante pour Boissons -->
        <label for="boissons-dropdown">Boissons</label>
        <select name="boissons" id="boissons-dropdown">
            <option value="">-- Boisson --</option>
            <option value="jus">Jus naturel</option>
            <option value="soda">Soda</option>
            <option value="eau">Eau</option>
            <!-- Ajoute d'autres options ici -->
        </select>

        <!-- Liste déroulante pour Suppléments -->
        <label for="supplements-dropdown">Suppléments</label>
        <select name="supplements" id="supplements-dropdown">
            <option value="">-- Suppléments --</option>
            <option value="sauce">Sauce supplémentaire</option>
            <option value="pain">Pain</option>
            <option value="fromage">Fromage</option>
            <!-- Ajoute d'autres options ici -->
        </select>
    </div>

    <div class="price-filter">
        <img class="img" src="{{ asset('Assetsprojetweb/assets/images/filter.svg')}}" alt="filtre">
        <h4>Filter By Price</h4>
        <input type="range" min="0" max="5000" value="1000">
        <p>From 500XAF TO 5000XAF <br> Filter</p>
    </div>
 </aside>

 <!-- Fenêtre pop-up pour le panier -->
<div id="popup" class="popup">
    <div class="popup-content">
        <h3 id="popup-product-name"></h3>
        <p id="popup-product-price"></p>
        <div class="popup-buttons">
            <button id="add-to-cart-btn">Ajouter au panier</button>
            <button id="cancel-btn">Annuler</button>
        </div>
    </div>
</div>


<!-- Panier (caché par défaut) -->
<div id="cart-container" class="cart-container">
    <h2>Votre Panier</h2>
    <ul id="cart-items">
        <!-- Les éléments du panier seront ajoutés ici via JavaScript -->
    </ul>
    <button id="validate-cart">Valider</button>
</div>

</div>
</section>

    <Footer>    
        <div class="footerContainer">
          <div class="socialIcons">
              <a href=""><i class="fa-brands fa-facebook"></i></a>
              <a href=""><i class="fa-brands fa-instagram"></i></a>
              <a href=""><i class="fa-brands fa-twitter"></i></a>
              <a href=""><i class="fa-brands fa-google-plus"></i></a>
              <a href=""><i class="fa-brands fa-youtube"></i></a>
          </div>
          <div class="footerNav">
              <ul><li><a href="">Home</a></li>
                  <li><a href="">News</a></li>
                  <li><a href="">About</a></li>
                  <li><a href="">Contact</a></li>
              </ul>
          </div> 
      </div>
      <div class="footerBottom">
          <p>Copyright &copy;2023; Designed by <span class="designer">Group2</span></p>
      </div>
      </Footer>
      
    <script src="{{ asset("Assetsprojetweb/js/Menu.js") }} " defer></script> <!-- Lien vers votre script JavaScript -->
    
</body>
</html>