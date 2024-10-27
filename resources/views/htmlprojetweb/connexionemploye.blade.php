<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ESPACE EMPLOYE</title>
    <link rel="stylesheet" href="{{ asset ('Assetsprojetweb/css/stylesemploye.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset("Assetsprojetweb/images/zeduc logo.jpg")}}" alt="Logo" class="header-logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">HOME</a>
                      
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container-fluid d-flex align-items-center">
            <div class="row no-gutters w-100">
                <div class="col-md-6 ">
                    <img src="{{ asset("Assetsprojetweb/images/employe.jpg")}}" alt="Logo" class="image-container">
                </div>
                <div class="col-md-6">
                    <div class="login-container">
                        <h2>Cher(e) Employé , BIENVENUE!</h2>
                        <h3><center>ZEDUC SP@CE!</center><center>Climate of TASTE & CHILL</center></h3>
                        <p>Connectes-toi et au boulot</p>
                        <div class="form-container">
                            <form id="loginForm">
                                <div class="form-group">
                                    <label for="nom">Nom</label>
                                    <input type="name" class="form-control" id="nom" placeholder="Entrez votre nom" required>
                                </div>
                                <div class="form-group">
                                    <label for="id">Identifiant</label>
                                    <input type="id" class="form-control" id="id_Employe" placeholder="Entrez votre identifiant" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                            </form>
                         </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p>&copy; 2024 OptinMonster. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset("Assetsprojetweb/js/employé.js") }} "></script>
</body>
</html>