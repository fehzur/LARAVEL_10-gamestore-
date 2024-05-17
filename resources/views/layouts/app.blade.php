<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('./css/admin-1.css')}}">
    <link rel="stylesheet" href="{{url('./fontawesome-free-5.15.3-web/css/fontawesome.css')}}">
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
</body>
</html>