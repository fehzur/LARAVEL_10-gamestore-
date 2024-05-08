<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar avec Bootstrap</title>
    <link href="{{ url('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <script src="{{ url('bootstrap/js/bootstrap.js')}}" defer></script>
    <style>
        /* Style pour la barre de navigation */
        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
        }
        /* Style pour les liens de la barre de navigation */
        .navbar-nav .nav-link {
            color: #ffffff; /* Texte blanc */
        }
        .navbar-nav .nav-link.active {
            font-weight: bold;
        }
        /* Style pour les boutons de la barre de navigation */
        .navbar-toggler {
            border-color: #ffffff; /* Bordure blanche */
        }
        /* Style pour le formulaire de recherche */
        .form-control {
            border-color: #ffffff; /* Bordure blanche */
            color: #000000; /* Texte noir */
        }
        /* Style pour les boutons de notification et de message */
        .btn-outline-primary {
            border-color: #ffffff; /* Bordure blanche */
            color: #ffffff; /* Texte blanc */
        }
        .btn-outline-primary:hover {
            background-color: #ffffff; /* Fond blanc */
            color: #000000; /* Texte noir */
        }
        /* Style pour l'image de profil et la dropdown */
        .dropdown-toggle::after {
            display: none;
        }
        .dropdown-menu {
            border-color: #ffffff; /* Bordure blanche */
            background-color: #000000; /* Fond noir */
            max-width: 200px; /* Limite la largeur de la dropdown */
        }
        .dropdown-item {
            color: #ffffff; /* Texte blanc */
        }
        .dropdown-item:hover {
            background-color: #ffffff; /* Fond blanc */
            color: #000000; /* Texte noir */
        }
        .dropdown ul li:hover{
            background: black;
        }
        .dropdown ul li a{
            color: white;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
      </ul>
      <form class="d-flex mx-auto"> <!-- Ajout de la classe mx-auto pour centrer le formulaire -->
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-search text-white" type="submit">Search</button>
      </form>
    </div>
    <div class="d-flex">
      <button class="btn btn-outline-primary me-2">
        <i class="bi bi-bell"></i>
      </button>
      <button class="btn btn-outline-primary me-2">
        <i class="bi bi-chat"></i>
      </button>
      <div class="dropdown">
        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{ url('./' . (Auth::user()->pdp)) }}" alt="Utilisateur" class="rounded-circle" style="width: 32px; height: 32px;">
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"> <!-- Utilisation de la classe dropdown-menu-end -->
          <li><a class="dropdown-item" href="{{ url('/deconnexion')}}">Déconnexion</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

@yield('contents')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
