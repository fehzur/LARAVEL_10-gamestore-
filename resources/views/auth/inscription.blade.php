<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('./css/inscription.css') }}">
    <title>INSCRIVEZ-VOUS GRATUITEMENT</title>
    <style>
        
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navmenu">
        </div>
    </div>

    <div class="body"><h1>VOULEZ VOUS NOUS SUIVRE ?</h1>
    <p>Alors, inscris-toi gratuitement</p>
        <p>Remplis tous les champs avec votre réelle information</p>
        <br>
        <br>
        <br>
        <form action="{{route('inscription.save')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="pdp">Tout d'abord, telecharger une image de votre profile
        </label>
            <input type="file" id="pdp" name="pdp" required>
            <input type="text" id="name" placeholder="Comment vous-appellez vous ?"  name="name" required><br>
            <input type="text" id="firstname" placeholder="Votre Nom de Famille ?" name="firstname" required><br>
            <input type="email" id="email" placeholder="Merci d' entrer votre e-mail"  name="email" required><br>
            <input type="password" id="password" placeholder="Entrez votre mots de passe"  name="password" required><br>
            <input type="password" id="password_confirmation" placeholder="Veuillez ré-entrez votre mots de passe ci-dessus" name="password_confirmation" required>
            <br>
            <div class="check">
            <input type="checkbox" required id="check">
            <p>Je suis d'accords avec la condition et les confidentialité de ce site.</p>
            </div><br>
            <button type="submit" class="btn">S'inscrire</button>
        </form>
            <p>Avez-vous déjà un compte ?</p>
            <p>Veuillez vous connecter à votre compte en cliquant <a href="/">ici</a></p>
    </div>
    <footer>
    <div class="premier">
    <div class="deuxieme">
    </div>
    </div>
    </footer>
</body>
</html>