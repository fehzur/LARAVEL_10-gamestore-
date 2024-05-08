<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{url('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <script src="{{ url('bootstrap/js/bootstrap.js')}}" defer></script>
    <link rel="stylesheet" href="{{url('./css/union.css')}}">
    <link rel="stylesheet" href="{{url('./css/users.css')}}">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/accueil')}}">GAMESTORE.FEH</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/accueil') }}">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">À propos de nous</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contactez-nous</a>
          </li>
        </ul>
        <div class="d-flex">
        @if (Route::has('connexion'))
          @auth
          <button class="btn btn-secondary mx-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
              <path d="M9.5 1.21a1.5 1.5 0 0 0-3 0L6.724 1.785a2 2 0 0 0-3.449 1.95L2 4v3a3 3 0 0 0 3 3v5a1 1 0 0 0 2 0v-5a3 3 0 0 0 3-3V4l-.275-.265a2 2 0 0 0-3.449-1.95L9.5 1.21zM8 14a2 2 0 1 1 4 0H8z"/>
            </svg>
          </button>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="{{ url('./' . (Auth::user()->pdp)) }}" alt="Utilisateur" class="rounded-circle" style="width: 32px; height: 32px;">
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="">Votre Profil</a></li>
              <li><a class="dropdown-item" href="#">Paramètres</a></li>
              <li><a class="dropdown-item" href="{{ url('/deconnexion')}}">Déconnexion</a></li>
            </ul>
          </div>
        @else
        <a href="{{ route('connexion') }}" class="btn btn-secondary mx-2">Connexion</a>
        @if (Route::has('inscription'))
        <a href="{{ route('inscription') }}" class="btn btn-secondary">Inscription</a>
        @endif
        @endauth
        @endif
        </div>
      </div>
    </div>
  </nav>

  <main class="mt-4">
    <div class="container">
      <div class="contenue">@yield('contents')</div>
    </div>
  </main>

</body>
</html>
