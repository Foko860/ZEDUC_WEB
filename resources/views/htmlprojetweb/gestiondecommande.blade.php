<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="{{ asset("Assetsprojetweb/css/gestiondecommande.css")}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Timmana&display=swap" rel="stylesheet">
    <!-- lien vers le fichier css -->
</head>

<body>
    <!-- header -->
    <header>
        <!-- Barre de navigation en haut -->
        <nav>
            <div class="logo">
                <img src="{{ asset("Assetsprojetweb/images/zeduc logo.jpg")}}" alt="Zeduc-space-logo">

                <div class="nav-links">
                    <ul>
                        <li><a href="#">CONNEXION</a></li>
                        <li><a href="{{ route('commandes.index') }}">GESTION DES COMMANDES</a></li>
                        <li><a href="{{ route('menu') }}">MENU</a></li>
                        <li><a href="{{ route('gestion-menu') }}">GESTION DU MENU</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="table-container">
        <h2>All (5)</h2>
        <table class="user-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Order/Quantity</th>
                    <th>Status</th>
                    <th>Create Date</th>
                    <th>Update Date</th>
                    <th>Modify</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>AURELLE</td>
                    <td>aurelle@gmail.com</td>
                    <td>ERU/2</td>
                    <td><span class="status active">Active</span></td>
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
                    <td>tony@gmail.com</td>
                    <td>POULET ROTI/1</td>
                    <td><span class="status inactive">Inactive</span></td>
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
                    <td>yacoub@gmail.com</td>
                    <td>POULET PANE/1</td>
                    <td><span class="status active">Active</span></td>
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
                    <td>gabriella@gmail.com</td>
                    <td>NDOLE/5</td>
                    <td><span class="status active">Active</span></td>
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
                    <td>elie123@gmail.com</td>
                    <td>PILE/2</td>
                    <td><span class="status active">Active</span></td>
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
    <!-- pied de page -->
    <!-- <footer>
        <div class="footer-content">
            <img src="assets/icones/logo.svg" alt="">
            <div class="address">
                <p>Citée la terrasse YANSOKI, DOUALA</p>
                <div class="contact">
                <p>(+237) 652 69 02 10 </p>
                <p>Tel: (+237) 699 84 45 54</p>
            </div>
            </div>

            <div class="social-meadia">
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">Instagram</a>

            </div>
        </div>
        
     </footer> -->

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
                <ul>
                    <li><a href="">Home</a></li>
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
    <script src="{{ asset("Assetsprojetweb/js/scriptsgestioncommande.js")}}"></script>
</body>

</html>