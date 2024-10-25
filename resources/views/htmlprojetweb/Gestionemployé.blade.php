<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Employés</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Timmana&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset("Assetsprojetweb/css/Gestionemployé.css")}}">
</head>
<body>
    <header>
         <!-- header -->
        <!-- Barre de navigation en haut -->
     <nav>
        <div class="logo">
            <img src="{{ asset("Assetsprojetweb/images/zeduc logo.jpg")}}"  alt="Zeduc-space-logo" style="max-height: 80px ;max-width: 120px;">
        </div>
            <!-- <div class="nav-links"> -->
            <ul class="nav-links">
                <li><a href="/">ACCEUIL</a></li>
                <li><a href="#">MENU</a></li>
                <li><a href="{{ route('stats.index') }}">STATISQUES</a></li>
                <li><a  class="active" href="{{ route('employes.index') }}">GESTION DES EMPLOYES</a></li>
                <li><a href="{{ route('reclamations.index') }}">RECLAMATIONS</a></li>
                <li><a href="#"><i class="fas fa-cog"></i></a></li>
            </ul>
     </nav>
    </header>

    <main>
        <h1>Gestion des Employés</h1>
        <div class="table-container">
            <table class="user-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOM</th>
                        <th>PRENOM</th>
                        <th>Email</th>
                        <th>Poste</th>
                        <th>Create Date</th>
                        <th>Update Date</th>
                        <th>Modify</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>AURELLE</td>
                        <td>FOKO</td>
                        <td>aurelle@gmail.com</td>
                        <td><span class="status active">Gerant</span></td>
                        <td>2023-03-12 12:34:28</td>
                        <td>2023-03-12 12:34:28</td>
                        <td>
                            <button class="edit-btn">✏️</button>
                            <button class="delete-btn">🗑️</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>TONY</td>
                        <td>AZ</td>
                        <td>tony@gmail.com</td>
                        <td><span class="status inactive">Cuisinier</span></td>
                        <td>2023-03-12 12:34:28</td>
                        <td>2023-03-12 12:34:28</td>
                        <td>
                            <button class="edit-btn">✏️</button>
                            <button class="delete-btn">🗑️</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>YACOUB</td>
                        <td>Soumounougou</td>
                        <td>yacoub@gmail.com</td>
                        <td><span class="status active">Livreur</span></td>
                        <td>2023-03-12 12:34:28</td>
                        <td>2023-03-12 12:34:28</td>
                        <td>
                            <button class="edit-btn">✏️</button>
                            <button class="delete-btn">🗑️</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>GABRIELLA</td>
                        <td>Mawamba</td>
                        <td>gabriella@gmail.com</td>
                        <td><span class="status active">Cuisiniere</span></td>
                        <td>2023-03-12 12:34:28</td>
                        <td>2023-03-12 12:34:28</td>
                        <td>
                            <button class="edit-btn">✏️</button>
                            <button class="delete-btn">🗑️</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>ELIE</td>
                        <td>Njock</td>
                        <td>elie123@gmail.com</td>
                        <td><span class="status active">Serveur</span></td>
                        <td>2023-03-12 12:34:28</td>
                        <td>2023-03-12 12:34:28</td>
                        <td>
                            <button class="edit-btn">✏️</button>
                            <button class="delete-btn">🗑️</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button type="button" class="btn btn-primary add-employee-btn" data-bs-toggle="modal" data-bs-target="#addEmployeeModal">Ajouter un Employé +</button>

    </main>

  <!-- Modal for Adding a New Employee -->
<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="addEmployeeLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addEmployeeLabel">Ajouter un Employé</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="addEmployeeForm">
            <div class="mb-3">
              <label for="newEmployeeName" class="form-label">Nom</label>
              <input type="text" class="form-control" id="newEmployeeName" required>
            </div>
            <div class="mb-3">
              <label for="newEmployeePrenom" class="form-label">Prénom</label>
              <input type="text" class="form-control" id="newEmployeePrenom" required>
            </div>
            <div class="mb-3">
              <label for="newEmployeeEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="newEmployeeEmail" required>
            </div>
            <div class="mb-3">
              <label for="newEmployeePoste" class="form-label">Poste</label>
              <select id="newEmployeePoste" class="form-select" required>
                <option value="Gerant">Gérant</option>
                <option value="Cuisinier">Cuisinier</option>
                <option value="Livreur">Livreur</option>
                <option value="Serveur">Serveur</option>
              </select>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="button" class="btn btn-primary" id="addEmployeeBtn">Ajouter</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal for Editing Employee -->
  <div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="editEmployeeLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editEmployeeLabel">Modifier Employé</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="editEmployeeForm">
            <div class="mb-3">
              <label for="editEmployeeName" class="form-label">Nom</label>
              <input type="text" class="form-control" id="editEmployeeName">
            </div>
            <div class="mb-3">
              <label for="editEmployeePrenom" class="form-label">Prénom</label>
              <input type="text" class="form-control" id="editEmployeePrenom">
            </div>
            <div class="mb-3">
              <label for="editEmployeeEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="editEmployeeEmail">
            </div>
            <div class="mb-3">
              <label for="editEmployeePoste" class="form-label">Poste</label>
              <select id="editEmployeePoste" class="form-select">
                <option value="Gerant">Gérant</option>
                <option value="Cuisinier">Cuisinier</option>
                <option value="Livreur">Livreur</option>
                <option value="Serveur">Serveur</option>
              </select>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="button" class="btn btn-primary" id="saveChangesBtn">Sauvegarder</button>
        </div>
      </div>
    </div>
  </div>
  
  
    <!-- pied de page -->
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
      <script src="{{ asset("Assetsprojetweb\js\scripts_gestionemployé.js")}}"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
      </body>
      
</html>