<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Zeduc-Space</title>
    <link rel="stylesheet" href="/public/Assetsprojetweb/css/stylesconnect.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Timmana&display=swap" rel="stylesheet"> 
</head>
<body>

    
    <header>
        <div class="logo">
            <img src="/public/Assetsprojetweb/assets/icones/IMG-20241007-WA0086 1.png" alt="Logo Zeduc-Space">
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a class="active" href="#">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">MENU</a></li>
                <li><a href="#">PARRAINAGE</a></li>
            </ul>
            <div class="cart-icon">
            
            </div>
        </nav>
    </header>

    <!-- Section Profil -->
    <section class="profile-section">
        <h2>PROFIL</h2>
        <div class="profile-container">
            <div class="profile-avatar">
                
            </div>
            <button class="edit-button">modifier profil</button>
            <form class="profile-form">
                <label for="pseudo">Pseudo</label>
                <input type="text" id="pseudo" placeholder="Pseudo">
                
                <label for="email">Adresse e-mail</label>
                <input type="email" id="email" placeholder="Adresse e-mail">
                
                <label for="phone">Numéro de téléphone</label>
                <input type="tel" id="phone" placeholder="Numéro de téléphone">
                
                <label for="address">Adresse de Livraison</label>
                <input type="text" id="address" placeholder="Adresse de Livraison">
                
                <button type="submit" class="save-button">Enregistrer</button>
            </form>
        </div>
    </section>

    <!-- Pied de page -->
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
    
    
      <script src="/public/Assetsprojetweb/js/conect.js"></script>
</body>

</html>
