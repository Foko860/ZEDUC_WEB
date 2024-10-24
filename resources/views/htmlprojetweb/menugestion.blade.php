<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <title>Gestion du Menu</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">

    <style>
        .content {
            padding: 50px;
        }
        h1 {
            font-size: 3rem;
            text-align: center;
            margin-bottom: 20px;
        }
        .table-container {
            margin: 20px auto;
            padding: 20px;
            width: 80%;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Gestion du Menu</h1>
            <!-- Bouton pour ajouter un plat -->
            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#addPlatModal">+ Ajouter un Plat</button>
        </div>

        <!-- Formulaire de recherche -->
        <div class="mt-4">
            <input type="text" id="searchInput" class="form-control" placeholder="Rechercher un plat..." aria-label="Search">
        </div>

        <!-- Table des plats -->
        <div class="table-responsive table-container mt-4">
            <table class="table table-bordered">
                <thead class="bg-light">
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Photo</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($plats as $plat)
                    <tr>
                        <td>{{ $plat->nom }}</td>
                        <td>{{ $plat->description }}</td>
                        <td>{{ $plat->prix }} XAF</td>
                        <td><img src="{{ $plat->photo }}" alt="{{ $plat->nom }}" width="50"></td>
                        <td>
                            <!-- Modifier -->
                            <button class="btn btn-sm btn-outline-secondary edit-btn" data-bs-toggle="modal" data-bs-target="#editPlatModal{{ $plat->id_Produit }}">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <!-- Supprimer -->
                            <form method="POST" action="{{ route('supprimer-plat', $plat->id_Produit) }}" class="d-inline">
                                @csrf
                                <button class="btn btn-sm btn-outline-danger delete-btn">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    <!-- Modale pour modifier le plat -->
                    <div class="modal fade" id="editPlatModal{{ $plat->id_Produit }}" tabindex="-1" aria-labelledby="editPlatLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editPlatLabel">Modifier le Plat</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('modifier-plat', $plat->id_Produit) }}">
                                        @csrf
                                        @method('PUT') 
                                        <div class="mb-3">
                                            <label for="nom" class="form-label">Nom du Plat</label>
                                            <input type="text" class="form-control" name="nom" value="{{ $plat->nom }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="prix" class="form-label">Prix</label>
                                            <input type="number" class="form-control" name="prix" value="{{ $plat->prix }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="photo" class="form-label">URL de la photo</label>
                                            <input type="text" class="form-control" name="photo" value="{{ $plat->photo }}" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-end">
                <!-- Pagination dynamique ici -->
            </ul>
        </nav>
    </div>

    <!-- Modale pour ajouter un plat -->
    <div class="modal fade" id="addPlatModal" tabindex="-1" aria-labelledby="addPlatModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPlatModalLabel">Ajouter un nouveau Plat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('ajouter-plat') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom du Plat</label>
                            <input type="text" class="form-control" name="nom" required>
                        </div>
                        <div class="mb-3">
                            <label for="prix" class="form-label">Prix</label>
                            <input type="number" class="form-control" name="prix" required>
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">URL de la photo</label>
                            <input type="text" class="form-control" name="photo" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
