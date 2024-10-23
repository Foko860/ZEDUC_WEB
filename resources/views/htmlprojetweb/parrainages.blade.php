<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZEDUC-SP@CE</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('Assetsprojetweb/css/stylesparrainage.css') }}">
</head>
<body class="bg-light">

    <!-- Header -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container"  style=" height: 60px;">
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
                        <a class="nav-link" href="#">ORDER NOW</a>
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
        <button class="btn btn-secondary btn-block mb-2">Partager mon lien</button>
        <button class="btn btn-secondary btn-block">Points de fidélité</button>
    </div>
    </div>  
    <footer class="text-dark text-center py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <img src="{{asset('Assetsprojetweb\images\zeduc logo.jpg')}}"alt="Logo" style="max-height: 50px; margin-right: 15px;">
                <span>&copy; 2024 ZEDUC-SP@CE. Tous droits réservés.</span>
            </div>
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center mr-4">
                    <i class="fas fa-map-marker-alt mr-1"></i>
                    <span>Yansoki, Cité la Terasse</span>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <i class="fas fa-phone-alt mb-1"></i>
                    <span>+237 699 84 45 54</span>
                    <span>+237 693 44 37 82</span>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>