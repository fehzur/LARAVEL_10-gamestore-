<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('./css/inscription.css') }}">
    <title>INSCRIVEZ-VOUS GRATUITEMENT</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="navmenu">
                <!-- Ajoutez ici vos liens de navigation -->
            </div>
        </nav>
    </header>

    <main>
        <section class="body">
            <h1>VOULEZ VOUS NOUS SUIVRE ?</h1>
            <p>Alors, inscris-toi gratuitement</p>
            <p>Remplis tous les champs avec votre réelle information</p>

            <form action="{{ route('inscription.save') }}" method="POST" enctype="multipart/form-data" class="registration-form">
                @csrf
                <div class="form-group form">
                    <label for="pdp">Veuillez telecharger votre Image de profil :</label>
                    <input type="file" id="pdp" name="pdp" required>
                </div>
                <div class="form-group">
                    <input type="email" id="email" placeholder="Merci d'entrer votre e-mail" name="email" required>
                </div>
                <div class="form-group">
                    <input type="text" id="name" placeholder="Comment vous-appelez-vous ?" name="name" required>
                </div>
                <div class="form-group">
                    <input type="text" id="firstname" placeholder="Votre Nom de Famille ?" name="firstname" required>
                </div>
                <div class="form-group">
                    <input type="password" id="password" placeholder="Entrez votre mot de passe" name="password" required>
                </div>
                <div class="form-group">
                    <input type="password" id="password_confirmation" placeholder="Veuillez ré-entrer votre mot de passe" name="password_confirmation" required>
                </div>
                <div class="check">
                    <input type="checkbox" required id="check">
                    <p>Je suis d'accord avec les conditions et la confidentialité de ce site.</p>
                </div>
                <button type="submit" class="btn">S'inscrire</button>
            </form>

            <div class="login-link">
                <p>Avez-vous déjà un compte ?</p>
                <p>Veuillez vous connecter à votre compte en cliquant <a href="/">ici</a></p>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <!-- Ajoutez ici votre contenu de pied de page -->
        </div>
    </footer>
</body>
</html>