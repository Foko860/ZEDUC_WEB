
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Zeduc-Space</title>
  <meta name="csrf-token" content="{{ csrf_token() }}"> 
  <link rel="stylesheet" href="{{ asset('Assetsprojetweb/css/stylesinscription.css') }}">
  <link rel="stylesheet" href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css")}}" />
  <link rel="stylesheet" href="{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css")}}">
  <link rel="stylesheet" href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css")}}">
 
</head>
<body>
  <header>
    <div class="logo">
      <img src="{{asset("Assetsprojetweb/images/zeduc logo.jpg")}}" alt="Zeduc-Space Logo">

    </div>
    <nav>
      <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="{{ route('parrainages.index') }}">PARRAINAGE</a></li>
        <li><a href="{{ route('menu') }}">MENU</a></li>
        <li><a href="{{ route('login') }}">CONNEXION</a></li>
        <li><a href="#"> <i class="fas fa-shopping-cart"></i></a></li>
        
      </ul>
    </nav>
  </header>

  <div class="signup-container">
    <!-- Image Section -->
    <div class="image-container">
        <img src="{{asset("Assetsprojetweb/images/burger 1.jpg")}}" alt="Delicious Food" class="circular-image">
    </div>
    <!-- Form Section -->
    <div class="form-container">
        <h2>Inscription</h2>
        <p class="greeting-text curved-text"> Aies le miam miam que tu mérites.</p>
        <form id="signupForm" onsubmit="return validateForm()">
            <label for="username">UserName *</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Email *</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <!-- Nouveau champ pour numéro -->
            <label for="numero">Numéro *</label>
            <input type="text" id="numero" name="numero" placeholder="Enter your phone number" required>


            <label for="password">Password *</label>
            <input type="password" id="password" name="password" placeholder="Create a password" minlength="6" required>
            <small>Must be at least 6 characters.</small>
            <div class="parrainage-section">
              <p class="parrainage-text text-center">Espace Parrainage</p>
              <label for="id_parrainge">ID Parrain</label>
              <input type="text" id="id_parrain"name="id_parrain" placeholder="Identifiant du Parrain">
            </div>

            <button type="submit" class="btn-primary">Create account</button>

            <button type="button" class="btn-google">
                <img src="{{asset("Assetsprojetweb/images/googleicon.jpg")}}" alt="Google" class="google-logo">
                Sign up with Google
            </button>
        </form>
        <p>Already have an account? <a href="{{ route('login') }}" class="sign-in-link">Sign In</a></p>
    </div>
</div>

 


<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Logo section -->
            <div class="col-md-4 footer-logo text-center text-md-start">
                <img src="{{asset("Assetsprojetweb/images/zeduc logo.jpg")}}" alt="Zeduc Space Logo" class="img-fluid">
            </div>
            <!-- Contact Information -->
            <div class="col-md-4 text-center text-md-start contact-info">
                <p><i class="fas fa-map-marker-alt"></i> Citée Térasse YANSOKI, DOUALA</p>
                <p><i class="fas fa-phone"></i> (+237) 52 69 02 10</p>
                <p><i class="fas fa-phone"></i> (+237) 69 98 45 54</p>
                <p><i class="fas fa-fax"></i> (123) 456-7890</p>
            </div>
            <!-- Social Media Icons -->
            <div class="col-md-4 text-center text-md-start">
                <p>Social Media</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-google"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fas fa-rss"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="{{ asset("https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js") }}"></script>
<script src="{{ asset("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("Assetsprojetweb/js/scriptsinscription.js") }} " defer></script>
</body>
</html>
