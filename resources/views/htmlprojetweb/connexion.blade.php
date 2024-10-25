<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZEDUC-SP@CE</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <link href="{{ asset("https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css")}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css")}}">
    <link rel="stylesheet" href="{{ asset("Assetsprojetweb/css/stylesconnexion.css")}}">
</head>
<body class="bg-light">

    <!-- Header -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container" style=" height: 60px;">
            <a class="navbar-brand logo-left" href="#">
                <img src="{{ asset("Assetsprojetweb/images/zeduc logo.jpg")}}" alt="Logo" style="max-height: 70px ;max-width: 120px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <img src="{{ asset("Assetsprojetweb/images/hamburger icon.jpg")}}" alt="Hamburger menu">
              </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">HOME</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="{{ route('menu') }}">MENU</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link active" href="#">CONNEXION</a>
                    </li>
                    <!--<li class="nav-item">
                    <a class="nav-link" href="{{ route('employes.index') }}">GESTION DES EMPLOYES</a>-->
                    
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow" style="width: 500px;height: 500px;">
            <div class="card-body">
                <h5 class="card-title text-center">Connectez -vous</h5>
                <p class="text-center">Connectez-vous pour accéder à votre espace</p>
                <div class="form-container">
                    <form id="loginForm">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Entrez votre email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                    </form>

                    <button type="submit" class="btn btn-primary btn-block" id="Btnemployer"><a href="{{ route('employes.index') }}">Connexion en tant que Employé</a></button>
                 </div>
                <div class="text-center mt-3">
                    <p>Vous n'avez pas de compte ? <a href="{{ route('Inscription') }}" class="create-account-link">Créer un compte</a></p>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-dark text-center py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <img src="{{ asset("Assetsprojetweb/images/zeduc logo.jpg")}}" alt="Logo" style="max-height: 50px; margin-right: 15px;">
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

    <script src="{{ asset("https://code.jquery.com/jquery-3.5.1.slim.min.js")}}"></script>
    <script src="{{ asset("https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js")}}"></script>
    <script src="{{ asset("https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js")}}"></script>
    <script src="{{ asset("Assetsprojetweb/js/scriptsconnexion.js")}}"></script>
</body>
</html>