<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réclamations des Commandes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset ('/public/Assetsprojetweb/css/StyleCssPageRecla.css')}}">
</head>
<body>
    <header>
        
        <div class="navdiv">
<div class="logo"> <a href="#"> <img src="{{ asset ('/public/Assetsprojetweb/images/asset-Home-reclamation/Rectangle 4.png')}}" alt="logo"> </a></div>
        </div>
        <nav>
           <ul>
            <li>
                <a href="#" class="Acceuil"> Gestion de reclamation </a>
            </li>
            <li>
                <a href="#">statistique generale</a>
            </li>
            <li>
                <a href="#"> Gestion des employés </a>
            </li>
            <li>
                <a href="#"> suppervision des commandes </a>
            </li>
        </ul>
      </nav> 
    </header>
   <main>
    <div class="titre">
        <h2>Tableau des Réclamations</h2>
    </div>

    <table id="reclamationsTable">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Noms</th>
                <th>Réclamation</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Les lignes de réclamation seront ajoutées ici -->
        </tbody>
    </table>

    <br>
<section class="tables">
    <form id="addReclamationForm">
        <h3>Ajouter une Réclamation</h3>
        <label for="orderId">Order ID:</label>
        <input type="text" id="orderId" required><br><br>

        <label for="name">Noms:</label>
        <input type="text" id="name" required><br><br>

        <label for="reclamation">Réclamation:</label>
        <input type="text" id="reclamation" required><br><br>

        <label for="statut">Statut:</label>
        <select id="statut">
            <option value="en cour">En cours</option>
            <option value="résolu">Résolu</option>
            <option value="rejeté">Rejeté</option>
        </select><br><br>

        <button type="button" onclick="addReclamation()">Ajouter</button>
    </form>
</section>
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
<script src="{{ asset ('/public/Assetsprojetweb/js/ScriptPageReclamation.js')}}">  </script>

</body>
</html>
