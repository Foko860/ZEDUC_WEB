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

    <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com')}}" crossorigin>


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

    <div class="product-cards-container">
        @foreach($plats as $plat)
            <div class="product-card">
                <img src="{{ $plat->image_url }}" alt="{{ $plat->nom }}" class="product-image">
                <h2 class="product-name">{{ $plat->nom }}</h2>
                <p class="product-description">{{ $plat->description }}</p>
                <span class="product-price">{{ $plat->prix }} €</span>
                <form action="{{ route('addToCart', $plat->id_Produit) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart-button">Commander</button>
                </form>
            </div>
        @endforeach
    </div>



                <!-- Sidebar des filtres -->
<aside class="sidebar col-4">
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