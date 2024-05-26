<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="{{ asset('css/connexion.css') }}">
</head>
<body>
    <div class="container">
        <div class="image-container">
            <img src="{{ asset('images/Fonds/login.jpg') }}" alt="Image personnalisée">
        </div>
        <div class="form-container">
            <form action="{{ route('connexion.action') }}" method="POST">
                @csrf
                <h2>Connexion</h2>
                <div class="form-group">
                    <label for="email">Adresse e-mail :</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe :</label>
                    <input type="password" id="password" name="password" required>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <button type="submit" class="btn btn-primary">Se connecter</button>
                <div class="form-footer">
                    <a href="{{ url('password.request') }}">Mot de passe oublié ?</a>
                    <p>Vous êtes nouveau sur ce site ? <a href="{{route('inscription')}}">Inscrivez-vous</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>