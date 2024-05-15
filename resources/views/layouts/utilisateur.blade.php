<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <li><a href="">CONTACTER-L'ADMIN</a></li>
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
                    <li><a href="">FAQ</a></li>
                    <li><a href="">RECOMMANDATION</a>
                    </li><li class="console"><a> <i class="fa fa-angle-down" id="drop1"></i></a>
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid porro exercitationem nobis necessitatibus, facere in suscipit ratione id voluptatum veniam autem veritatis nihil beatae soluta aperiam, tenetur incidunt voluptate. Deserunt? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur ducimus nesciunt necessitatibus eaque, quisquam saepe reiciendis vero quia placeat facere mollitia voluptatibus alias debitis deserunt, amet qui? Numquam, quis aperiam.</p>
        </footer>
    </div>
</body>
</html>