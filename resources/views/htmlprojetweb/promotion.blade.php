<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotion & Événements - Zeduc-Space</title>
    <link rel="stylesheet" href="{{ asset("Assetsprojetweb/css/promotion.css") }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Timmana&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <div class="logo">
            <img src="{{ asset('Assetsprojetweb/assets/icones/logo.svg')}}" alt="Zeduc-Space Logo">
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="#">ACCUEIL</a></li>
                <li><a href="#">MENU</a></li>
                <li><a href="#">STATISTIQUES</a></li>
                <li><a href="#">GESTION EMPLOYÉS</a></li>
                <li><a href="#">RÉCLAMATIONS</a></li>
            </ul>
            <div class="settings-icon">
                <i class="fa-solid fa-gear"></i>
                <i class="fa-solid fa-user"></i>
            </div>
        </nav>
    </header>

    <section class="promotion-section">
        <h1>PROMOTION & ÉVÉNEMENTS</h1>
        <div class="promotion-container">
            <div class="promotion-add">
                <div class="promotion-placeholder">
                    <p>Ajouter une Promotion</p>
                    <button>Ajouter une Promotion</button>
                </div>
            </div>
            <div class="promotion-history">
                <h2>Historiques des Promotions</h2>
                <div class="history-item"></div>
                <div class="history-item"></div>
                <div class="history-item"></div>
                <div class="history-item"></div>
            </div>
        </div>
    </section>

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
<script src="promotion.js"></script>
</html>
