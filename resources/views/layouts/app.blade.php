<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('./css/admin-1.css')}}">
    <link rel="stylesheet" href="{{url('./fontawesome-free-5.15.3-web/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ url('./bootstrap/css/bootstrap.css')}}">
    <script src="{{ url('./js/app.js')}}" defer></script>
    <title>@yield('title')</title>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <a href=""><img src="{{ url('./' . (Auth::user()->pdp))}}" alt="logo-société"></a>
        </div>
        <div class="search"><strong class="nom_admin">{{ ucfirst(strtolower(Auth::user()->name)) }} {{ strtoupper(Auth::user()->firstname) }}</strong>
        </div>
        <div class="menubar">
            <ul>
                <li><a href="{{ route('admin/accueil')}}">DASHBOARD</a></li>
                <li><a href="{{ url('admin/profile')}}">PROFILE</a></li>
                <li><a href="{{ url('admin/game')}}">JEUX</a></li>
                <li><a href="{{url('deconnexion')}}" class='deconnexion'>DECONNEXION</a></li>
            </ul>
        </div>
    </div>

    <div class="accueil">
        @yield('contents')
    </div>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>À propos de nous</h5>
                    <p>Nous sommes une équipe passionnée par le développement de jeux vidéo, dédiée à offrir des expériences inoubliables aux joueurs du monde entier.</p>
                </div>
                <div class="col-md-4">
                    <h5>Liens utiles</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">À propos</a></li>
                        <li><a href="#">Jeux</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Suivez-nous</h5>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p>&copy; 2024 Nom du Jeu. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>