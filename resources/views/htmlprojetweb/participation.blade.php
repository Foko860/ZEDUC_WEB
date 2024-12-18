<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participation aux Jeux et Événements</title>
    <link rel="stylesheet" href="{{ asset("Assetsprojetweb/css/participation.css") }}">>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Timmana&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        
        <nav class="navigation_pageUser">
            <div class="navdiv">
    <div class="logo"> <a href="#"> <img src="{{ asset("Assetsprojetweb/images/participation.jpg")}}" alt="logo"> </a></div>
            </div>
               <ul>
                <li>
                    <a href="#"  class="lien_entete"> Acceuil </a>
                </li>
                <li>
                    <a href="#" class="lien_entete">CONNEXION</a>
                </li>
                <li>
                    <a href="#" class="lien_entete"> MENU </a>
                </li>
                <li>
                    <a href="#" class="lien_entete"> PARAINAGE </a>
                </li>
            </ul>
            </nav>
        </div>
    </header>
    <section class="events-section">
        <h1>Participation aux jeux et événements</h1>

        <div class="events-container">
            <!-- Event 1 -->
            <div class="event-card">
                <h2>Jeu de la semaine</h2>
                <p>Participez à notre jeu hebdomadaire et gagnez des points de fidélité !</p>
                <button class="btn-participate">Participer</button>
            </div>

            <!-- Event 2 -->
            <div class="event-card">
                <h2>Tournoi de Billard</h2>
                <p>Inscrivez-vous pour le tournoi de billard et remportez un prix exclusif.</p>
                <button class="btn-participate">S'inscrire</button>
            </div>

            <!-- Event 3 -->
            <div class="event-card">
                <h2>Quiz food</h2>
                <p>Testez vos connaissances sur la food et gagnez des récompenses.</p>
                <button class="btn-participate">let's go</button>
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
</html>
