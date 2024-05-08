<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrivez-vous gratuitement</title>
    <!-- Lien vers votre fichier CSS -->
    <link rel="stylesheet" href="{{ asset('css/union.css') }}">
    <link rel="stylesheet" href="{{ asset('css/connexion.css') }}">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <!-- Formulaire de connexion -->
            <form action="{{route('inscription.save')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <h3 style="text-align: center;">INSCRIVEZ-VOUS !</h3>
                            <label for="email">Votre Email</label>
                            <input type="text" id="email" placeholder="exemple@gmail.com" name="email" required>
                            @error('email')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" id="name" placeholder="Votre Nom" name="name" required>
                            @error('name')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="firstname">Prenom</label>
                            <input type="text" id="firstname" placeholder="Votre Prenom" name="firstname" required>
                            @error('firstname')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Choisir une Photo de Profil</label>
                            <input type="file" id="pdp" style="border: 1px solid #ccc;border-radius: 2px;width:100%" name="pdp" required>
                            @error('email')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" id="password" name="password" placeholder="********" required>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirmer le mot de passe</label>
                            <input type="password" id="password_confirmation" placeholder="********" name="password_confirmation" required>
                            @error('password_confirmation')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn">S'inscrire</button>
                        <p>En vous inscrivant, vous acceptez nos <a href="#">termes et conditions</a> ainsi que notre <a href="#">politique de confidentialité</a>.</p>
                        <p>Vous avez déjà un compte ? <a href="connexion">Connectez-vous ici</a>.</p>
                    </form>
        </div>
        <div class="image-container">
            <!-- Image personnalisée -->
            <img src="{{ asset('images/Fonds/register.jpg') }}" alt="Image personnalisée">
        </div>
    </div>
</body>
</html>
