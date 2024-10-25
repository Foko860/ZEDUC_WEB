<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZEDUC-SP@CE-Parrainage</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('Assetsprojetweb/css/stylesparrainage.css') }}">
</head>
<body class="bg-light">

    <!-- Header -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container" style="height: 60px;">
            <a class="navbar-brand logo-left" href="#">
                <img src="{{asset('Assetsprojetweb\images\zeduc logo.jpg')}}" alt="Logo" style="max-height: 70px; max-width: 100px;" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <img src="{{asset('Assetsprojetweb\images\hamburger icon.jpg')}}" alt="Hamburger menu">
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('parrainages.index') }}">PARRAINAGE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('menu') }}">MENU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PROMO & EVENEMENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link cart-icon" href="#"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container text-center my-5">
        <img src="{{asset('Assetsprojetweb\images\imageparrainage.jpg')}}" alt="Rejoignez la bande de gourmands!" class="img-fluid">
    
        <div class="button mt-3">
            <!-- Bouton pour déclencher le modal -->
            <button class="btn btn-secondary btn-block mb-2" data-toggle="modal" data-target="#parrainageModal">Partager mon lien</button>
            <button class="btn btn-secondary btn-block">Points de fidélité</button>
        </div>
    </div>

    <!-- Modal pour partager le lien de parrainage -->
    <div class="modal fade" id="parrainageModal" tabindex="-1" role="dialog" aria-labelledby="parrainageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="parrainageModalLabel">Code parrainage</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="{{asset('Assetsprojetweb\images\QR_code_example.png')}}" alt="QR Code" class="img-fluid mb-3">
                    <p>Votre code de parrainage est le suivant :</p>
                    <div id="qrcode"></div> <!-- Zone pour le QR code --> <!-- Le code apparaîtra ici -->
                    <p id="parrainageCode" style="font-weight: bold;"></p>
                    
                    <button id="copyButton" class="btn btn-secondary btn-block">Copier</button>
                </div>
            </div>
        </div>
    </div>

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
          <p>Copyright &copy;2024; Designed by <span class="designer">Group2</span></p>
      </div>
      </Footer>
   
    <!-- Inclusion du fichier JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script src="{{asset('Assetsprojetweb/js/scriptsparrainage.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
