<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réclamations des Commandes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset ('Assetsprojetweb/css/StyleCssRéclamationEtudiant.css')}}">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        
        <div class="navdiv">
<div class="logo"> <a href="#"> <img src="{{ asset ('Assetsprojetweb/images/asset-Home-reclamation/Rectangle 4.png')}}" alt="logo"> </a></div>
        </div>
        <nav >
           <ul>
            <li>
                <a href="#" class="Acceuil"> GESTION DE RECLAMATION </a>
            </li>
            <li>
                <a href="#">STATISTIQUE GENERALE</a>
            </li>
            <li>
                <a href="#"> GESTION DES EMPLOYES </a>
            </li>
            <li>
                <a href="{{ route('commandes.index') }}"> SUPERVISION DES COMMANDES</a>
            </li>
        </ul>
      </nav> 
    </header>
   <main>
</section>
<section class="section-contact">
    <img src="{{ asset ('Assetsprojetweb/images/asset-Home-reclamation/Rectangle 4.png')}}" alt="">
    <H2>Reclamations</H2>
    <form action="" method="get" id="projet">
        <fieldset>
            <legend>Que nous reprochez vous ??</legend>
            <p>
                <div>
                    <label for="IdCommand">Id-Command :</label> <input name="IdCommand" id="IdCommand" type="text">
                </div>
                <div>
                    <label for="nom">Nom etudiant</label> <input type="text" name="nom" id="nom">
                </div>
               <div>
                <label for="date">Date</label> <input type="datetime-local" name="date" id="date">
               </div>
               
                <div>
                    <label>
                      <input type="checkbox" id="coding" name="interest" value="coding" />
                      Livraison tardive
                    </label>
                  </div>
                  <div>
                    <label>
                      <input type="checkbox" id="music" name="interest" value="music" />
                      Livraison non conforme
                    </label>
                  </div>
                  <div>
                    <label>
                      <input type="checkbox" id="art" name="interest" value="art" />
                      Probleme d'emballage
                    </label>
                  </div>
                  <div>
                    <label>
                      <input type="checkbox" id="sports" name="interest" value="sports" />
                      Livreur désagréable
                    </label>
                  </div>
                  <div>
                    <label>
                      <input type="checkbox" id="cooking" name="interest" value="cooking" />
                      Erreur de facturation
                    </label>
                  </div>
                  <div>
                <label for="Autres">Autre</label><textarea name="Autre" id="Autre"></textarea>  
            </p>
          <input class="envoieRecla" type="submit" value="Envoyer">
        </fieldset>
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
<script src="{{ asset ('Assetsprojetweb/js/RéclamationEtudiant.js')}}">  </script>

</body>
</html>
