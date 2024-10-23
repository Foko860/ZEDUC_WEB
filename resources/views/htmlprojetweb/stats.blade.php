<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques Générales</title>
    <link rel="stylesheet" href="{{ asset('/public/Assetsprojetweb/css/stylesstats.css')}}">
    <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com')}}">
<link rel="preconnect" href="{{ asset('https://fonts.gstatic.com')}}" crossorigin>
<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css')}} integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="{{ asset('https://fonts.googleapis.com/css2?family=Timmana&display=swap')}}" rel="stylesheet">
</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="navbar">
            <a href="#">SUPERVISION DES COMMANDES</a>
            <a href="#">GESTION DES EMPLOYÉS</a>
            <a href="#" class="active">STATISTIQUES GÉNÉRALES</a>
            <a href="#">GESTION DES RÉCLAMATIONS</a>
        </div>
    </header>

    <!-- Statistiques Générales Section -->
    <section class="statistics-section">
        <h1>STATISTIQUES GÉNÉRALES</h1>

        <!-- Statistiques des ventes -->
        <h2>Statistiques des ventes</h2>
        <table class="statistics-table">
            <thead>
                <tr>
                    <th>Jour</th>
                    <th>Total de plats</th>
                    <th>Plats vendus</th>
                    <th>Plats réservés</th>
                    <th>Autres</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Plus de lignes à ajouter selon les besoins -->
            </tbody>
        </table>

        <!-- Statistiques de parrainage -->
        <h2>Statistiques de parrainage</h2>
        <table class="statistics-table">
            <thead>
                <tr>
                    <th>Jour</th>
                    <th>Total de parrainage</th>
                    <th>Total filleul</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Plus de lignes à ajouter selon les besoins -->
            </tbody>
        </table>
    </section>

    <!-- Footer Section -->
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
    

</body>
<script src="/public/Assetsprojetweb/js/stats.js"></script>
</html>
