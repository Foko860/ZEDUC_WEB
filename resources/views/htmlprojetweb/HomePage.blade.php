<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ZEDUC-SPACE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset ('Assetsprojetweb/css/StyleCssHomePage.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Londrina+Sketch&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Timmana&display=swap" rel="stylesheet">
</head>
<body class="showCart">
    <header>
        
        <div class="navdiv">
<div class="logo"> <a href="#"> <img src="{{ asset ('Assetsprojetweb/images/asset-Home-reclamation/Rectangle 4.png')}}" alt="logo"> </a></div>
        </div>
        <nav >
           <ul>
            <li>
                <a href="/" class="Acceuil"> ACCEUIL </a>
            </li>
            <li>
                <a href="{{ route('login') }}">CONNEXION</a>
            </li>
            <li>
                <a href="{{ route('menu') }}"> MENU </a>
            </li>
            <li>
                <a href="{{ route('parrainages.index') }}"> PARAINAGE </a>
            </li>
        </ul>
      </nav>
        <div id="cart">
          <a href="#" id="view-cart">
              <i class="fas fa-shopping-cart"></i> <span id="cart-count">0</span>
          </a>
      </div>  
        </nav>
    </div>
    </header>
    <main class="containerer">
<div >
 
<Section class="Section_photo">
  
<!--<img src="{{ asset ('Assetsprojetweb/images/asset-Home-reclamation/Frame 40.png')}}" alt="Poulet DG" class="product-image"> -->
  <p>
      Bienvenue a Zeduc-sp@ce, votre restaurant en ligne <br>
      Pour un voyage gastronomique unique
  </p>
  </Section>
  <Section id="products" class="card-container">
     <div class="card">
    <div class="cardImage">
      <img src="{{ asset ('Assetsprojetweb/images/asset-Home-reclamation/Frame 40.png')}}" alt="Poulet DG" class="product-image">
    </div> 
    <div class="card-content">
      <h2>Poulet DG</h2>
      <p>Prix : 1000FCFA</p>
      <button class="add-to-cart" data-id="1" data-name="Poulet DG" data-price="1000">Ajouter au panier</button>
    </div>  
    </div>

    <div class="card">
      <div class="cardImage">
        <img src="{{ asset ('Assetsprojetweb/images/asset-Home-reclamation/Frame 40.png')}}" alt="ndolet" class="product-image">
      </div> 
      <div class="card-content">
        <h2>Ndolet</h2>
        <p>Prix : 1000FCFA</p>
        <button class="add-to-cart" data-id="2" data-name="ndolet" data-price="1000">Ajouter au panier</button>
      </div>  
      </div>
      <div class="card">
        <div class="cardImage">
          <img src="{{ asset ('Assetsprojetweb/images/asset-Home-reclamation/Rectangle 336.png')}}" alt="cassoulet" class="product-image">
        </div> 
        <div class="card-content">
          <h2>cassoulet</h2>
          <p>Prix : 1000FCFA</p>
          <button class="add-to-cart" data-id="3" data-name="cassoulet" data-price="1000">Ajouter au panier</button>
        </div>  
        </div>
  </Section>
  
  <Section class="service_Home">
    <p class="divertissement">
      Pour une expérience culinaire et ludique inégalée profité d’une ambiance <br>
   convivial avec des divertissements variés
    </p>
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-12, col-md-4, col-lg-4">
          <div class="card" style="width: 18rem;">
              <img src="{{ asset ('Assetsprojetweb/images/asset-Home-reclamation/bille.png')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">billard</h5>
                <a href="#" class="btn btn-warning">jouer</a>
              </div>
            </div>
        </div>
        <div class="col-sm-12, col-md-4, col-lg-4">
          <div class="card" style="width: 18rem;">
              <img src="{{ asset ('Assetsprojetweb/images/asset-Home-reclamation/barbec.png')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Barbecue</h5>
                
                <a href="#" class="btn btn-warning">Commander</a>
              </div>
            </div>
        </div>
        <div class="col-sm-12, col-md-4, col-lg-4">
          <div class="card" style="width: 18rem;">
              <img src="{{ asset ('Assetsprojetweb/images/asset-Home-reclamation/bille.png')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">billard</h5>
                <a href="#" class="btn btn-warning">jouer</a>
              </div>
            </div>
        </div>
      </div>
    </div>
    <p class="Abonnement">
      Abonnez-vous à des saveurs uniques ! Avec notre service d'abonnement, <br>
                   savourez chaque semaine des plats gourmands, <br>
      frais et livrés directement à votre domicile  sans effort, juste du plaisir
    </p>
   <section class="sectionCentrer">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Abonnement_1</th>
          <th scope="col">Abonnement_2</th>
          <th scope="col">Abonnement_3</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>30000 FCFA</td>
          <td>15000 FCFA</td>
          <td>45000 FCFA</td>
        </tr>
        <tr>
          <td>
            30 plats dont <br>
            5 Plats de 2000FCFA <br>
            20 plats de 1000FCFA <br>
            5 plats de2500FCFA <br>
          </td>
          <td>
            30 plats dont <br>
            5 Plats de 2000FCFA <br>
            22 plats de 1000FCFA <br>
            3 plats de2500FCFA <br>
          </td>
          <td>
            30 plats dont <br>
            10 Plats de 2000FCFA <br>
            10 plats de 1000FCFA <br>
            10 plats de2500FCFA <br>
          </td>
        </tr>
  
      </tbody>
    </table>
   </section>
  </Section>
<!-- Le panneau du panier (caché au départ) -->
<div id="cart-panel" class="cart-panel">
  <h2>Votre Panier</h2>
  <div id="items"></div>
  <p>Total : <span id="total-price">0</span> FCFA</p>
  <button id="checkout">Passer à la caisse</button>
  <button id="close-cart">Fermer</button>
</div>

    </main>
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
        <p>Copyright &copy;2023; Designed by <span class="designer">Group6</span></p>
    </div>
    </Footer>
    <script src="{{ asset ('Assetsprojetweb/js/scriptHomeP.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>