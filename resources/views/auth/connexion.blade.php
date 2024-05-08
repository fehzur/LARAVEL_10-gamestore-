<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <!-- Lien vers votre fichier CSS -->
    <link rel="stylesheet" href="{{ asset('css/connexion.css') }}">
</head>
<body>
    <div class="container">
        <div class="image-container">
            <!-- Image personnalisée -->
            <img src="{{ asset('images/Fonds/login.jpg') }}" alt="Image personnalisée">
        </div>
        <div class="form-container">
            <!-- Formulaire de connexion -->
            <form action="{{ route('connexion.action') }}" method="POST">
                @csrf
                <h2>Connexion</h2>
                <div class="form-group">
                    <label for="username">Nom d'utilisateur :</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe :</label>
                    <input type="password" id="password" name="password" required>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                <ul style="list-style-type: none;color:red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
                </div>
                @endif
                <button type="submit">Se connecter</button>
                <br>
                <br>
                <a href="{{ url('password.request') }}">Mots de passe oublier ?</a>
                <p>Vous êtes nouveau sur ce site ? inscrivez vous <a href="{{route('inscription')}}">ici</a></p>
            </form>
        </div>
    </div>
</body>
</html>
