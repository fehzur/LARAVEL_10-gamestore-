<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{url('./image/title.png')}}">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <script src="js/user.js" defer></script>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <a href="index.html">
                    <img src="image/logo.png" alt="">
                </a>
            </div>
            <div class="menubar">
                <ul>
                    <li><a href="">ACCUEIL</a></li>
                    <li class="drop"><a>CATEGORIES <i class="fa fa-angle-down" id="drop"></i></a>
                    <div class="dropdown">
                        <ul>
                            <li>
                                <a href="#one">ACTION</a>
                            </li><li>
                                <a href="">AVENTURE</a>
                            </li><li>
                                <a href="">HORREUR</a>
                            </li><li>
                                <a href="">RPG</a>
                            </li><li>
                                <a href="">COURSE</a>
                            </li><li>
                                <a href="">PUZZLE</a>
                            </li><li>
                                <a href="">STRATEGIE</a>
                            </li>
                        </ul>
                    </div>
                    </li>
                    <li><a href="">RECOMMANDATION</a>
                    </li>
                    <li class="console"><a> 
                    <img src="{{Auth::user()->pdp}}" alt="logo-société" style="width:40px; border-radius:50%"><i class="fa fa-angle-down" id="drop1"></i></a>
                    <div class="consolegame">
                        <ul>
                            <li>
                                <a href="">PARAMETRES</a>
                            </li>
                                <a href="">PROFIL</a><li>
                            </li>
                            <li>
                                <a href="deconnexion">DECONNEXION</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="contents">
      <div>
        @yield('contents')
      </div>
        <footer>
            <h1>Our mission :</h1>
        <p>Merci d'avoir visité notre site de téléchargement de jeux pour PC, Xbox, PS4, et bien plus encore. Tous les jeux disponibles ici sont déjà préinstallés, vous permettant ainsi de profiter immédiatement de vos titres préférés sans attendre. Bon jeu !</p>
        </footer>
    </div>
</body>
</html>