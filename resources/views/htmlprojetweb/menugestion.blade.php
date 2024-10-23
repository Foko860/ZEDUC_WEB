<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Zeduc-Space Order</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com')}}" crossorigin>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css')}}">
    
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css')}}" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Timmana&display=swap')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('Assetsprojetweb/css/OrderPage.css')}}">
    <style>
        body {
           /* background-image: url('ass');
            background-size: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: roboto, sans-serif;
            color: black;*/
        }

        .content {
            text-align: center;
            padding: 50px;
        }

        h1 {
            font-size: 3rem;
        }
        /* Style pour le tableau */
        .table-container {
            margin: 50px auto;
            padding: 20px;
            width: 80%;
            background-color: black; /* Fond blanc légèrement transparent */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Pour donner un peu de profondeur */
            border-radius: 10px;
        }
       

    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-brown">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('Assetsprojetweb\images\iconesmenu\logo.svg')}}" alt="Zeudc Space" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('menu') }}">MENU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">CONNEXION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">GESTION DES COMMANDES</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Gestion du Menu</h1>
            <button class="btn btn-warning">+ Ajouter un Menu</button>
        </div>

        <!-- Section de recherche -->
        <div class="search-section mt-4">
            <div>
                <select>
                    <option value="order-id">Order ID</option>
                    <option value="order-id">1</option>
                    <option value="order-id">2</option>
                    <option value="order-id">3</option>
                    <option value="order-id">4</option>
                    <option value="order-id">5</option>
                    <option value="order-id">6</option>
                </select>
                <select>
                    <option value="status">Status</option>
                    <option value="order-id">Disponible</option>
                    <option value="order-id">Indisponible</option>
                    <!-- <option value="order-id">3</option> -->
                </select>
                <!-- <input type="text" id="searchInput" placeholder="Rechercher" aria-label="Search"> -->
                <input type="text" id="searchInput" placeholder="Rechercher" aria-label="Search" pattern="[a-zA-Z0-9]+" required>
            </div>
        </div>
        <div class="table-responsive mt-4">
            <table class="table table-bordered">
                <thead class="bg-light">
                    <tr>
                        <th>Plats</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Eru</td>
                        <td>/</td>
                        <td>1000 XAF</td>
                        <td>10</td>
                        <td><button class="btn btn-sm btn-outline-secondary edit-btn"><i class="bi bi-pencil"></i></button>
                            <button class=" btn-sm btn-outline-secondary delete-btn"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Ndolé</td>
                        <td>/</td>
                        <td>1000 XAF</td>
                        <td>10</td>
                        <td><button class="btn btn-sm btn-outline-secondary edit-btn"><i class="bi bi-pencil"></i></button>
                            <button class=" btn-sm btn-outline-secondary delete-btn"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Poulet DG</td>
                        <td>/</td>
                        <td>1000 XAF</td>
                        <td>10</td>
                        <td><button class="btn btn-sm btn-outline-secondary edit-btn"><i class="bi bi-pencil"></i></button>
                            <button class=" btn-sm btn-outline-secondary delete-btn"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>OKOK</td>
                        <td>/</td>
                        <td>1000 XAF</td>
                        <td>10</td>
                        <td><button class="btn btn-sm btn-outline-secondary edit-btn"><i class="bi bi-pencil"></i></button>
                            <button class=" btn-sm btn-outline-secondary delete-btn"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Pilé Pommes</td>
                        <td>/</td>
                        <td>1000 XAF</td>
                        <td>10</td>
                        <td><button class="btn btn-sm btn-outline-secondary edit-btn"><i class="bi bi-pencil"></i></button>
                            <button class=" btn-sm btn-outline-secondary delete-btn"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Riz sauce Tomate</td>
                        <td>/</td>
                        <td>1000 XAF</td>
                        <td>10</td>
                        <td><button class="btn btn-sm btn-outline-secondary edit-btn"><i class="bi bi-pencil"></i></button>
                            <button class=" btn-sm btn-outline-secondary delete-btn"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Rôti de porc</td>
                        <td>/</td>
                        <td>1000 XAF</td>
                        <td>10</td>
                        <td><button class="btn btn-sm btn-outline-secondary edit-btn"><i class="bi bi-pencil"></i></button>
                            <button class=" btn-sm btn-outline-secondary delete-btn"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Rôti de poulet</td>
                        <td>/</td>
                        <td>1000 XAF</td>
                        <td>10</td>
                        <td><button class="btn btn-sm btn-outline-secondary edit-btn "><i class="bi bi-pencil"></i></button>
                            <button class=" btn-sm btn-outline-secondary delete-btn"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-end">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">10</a></li>
            </ul>
        </nav>
    </div>

    <!-- Modale pour créer une commande -->
<div class="modal fade" id="createOrderModal" tabindex="-1" aria-labelledby="createOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createOrderModalLabel">Créer une nouvelle commande</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="createOrderForm">
                    <div class="mb-3">
                        <label for="itemName" class="form-label">Nom du plat</label>
                        <input type="text" class="form-control" id="itemName" required>
                    </div>
                    <div class="mb-3">
                        <label for="itemDescription" class="form-label">Description</label>
                        <input type="text" class="form-control" id="itemDescription">
                    </div>
                    <div class="mb-3">
                        <label for="itemPrice" class="form-label">Prix (XAF)</label>
                        <input type="number" class="form-control" id="itemPrice" required>
                    </div>
                    <div class="mb-3">
                        <label for="itemQuantity" class="form-label">Quantité</label>
                        <input type="number" class="form-control" id="itemQuantity" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" id="submitOrder">Ajouter commande</button>
            </div>
        </div>
    </div>
</div>
<!-- Toast Notification -->
<div id="orderToast" class="toast position-fixed bottom-50 start-50 translate-middle-x p-3" role="alert" aria-live="assertive" aria-atomic="true" style="z-index: 1055;">
    <div class="toast-header">
      <strong class="me-auto">Alerte❌</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Nouvelle commande ajoutée avec succès !
    </div>
  </div>
  

    <!-- Footer -->
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
    

    <!-- Bootstrap JS -->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('Assetsprojetweb/js/OrderPage.js')}}"></script>

</body>

</html>