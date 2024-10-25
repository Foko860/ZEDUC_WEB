<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css')}}">

    <link rel="stylesheet" href="{{ asset('Assetsprojetweb/css/Paiement.css')}}">
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-brown">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('Assetsprojetweb/assets/icones/logo.svg')}}" alt="Zeduc Space" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Validation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tableau de Bord</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Logo en haut à droite -->
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="text-center">Commande</h2>
                
            </div>

            <!-- Formulaire -->
            <form class="mt-4">
                <div class="mb-3">
                    <label for="studentName" class="form-label">Nom de l'étudiant</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" id="studentName" placeholder="Entrez votre nom">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="contact" class="form-label">Contact</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                        <input type="tel" class="form-control" id="contact" placeholder="Entrez votre numéro">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="location" class="form-label">Localisation</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                        <input type="text" class="form-control" id="location" placeholder="Entrez votre localisation">
                    </div>
                </div>

                <!-- Mode de paiement -->
                <h4 class="text-center mt-5">Mode de paiement</h4>
                <div class="d-flex justify-content-between mt-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="orangeMoney" value="orange">
                        <label class="form-check-label" for="orangeMoney">
                            <img src="{{ asset('Assetsprojetweb/assets/icones/OM.svg')}}" alt="Orange Money" style="width: 100px;">
                            Orange Money
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="mobileMoney" value="mobile">
                        <label class="form-check-label" for="mobileMoney">
                            <img src="{{ asset('Assetsprojetweb/assets/icones/MOMO.svg')}}" alt="Mobile Money" style="width: 100px;">
                            Mobile Money
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="mobileMoney" value="mobile">
                        <label class="form-check-label" for="mobileMoney">
                            <img src="{{ asset('Assetsprojetweb/assets/images/pièces.jpg')}}" alt="Pieces" style="width: 100px; height: 55px;">
                            Payer en Cash
                        </label>
                    </div>
                </div>

                <!-- Bouton de confirmation -->
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-primary btn-lg">Confirmer</button>
                </div>
            </form>

            <!-- Footer -->
            <footer class="text-center mt-5">
                <p>© 2024 ZEDUC-SP@CE. All rights reserved.</p>
            </footer>
        </div>
    </div>
</div>
<script src="{{ asset('/public/Assetsprojetweb/js/Paiement.js')}}"></script>
<script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
