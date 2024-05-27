<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$games->title}}</title>
    <script src="{{url('./js/gameUser.js')}}" defer></script>
    <link rel="stylesheet" href="{{url('./css/gameUser.css')}}">
    <link rel="icon" href="{{ url('./images/games/' . $games->game) }}">
</head>
<body>
    <div class="back-to-home" onclick="goToHome()">
        &#8592;
    </div>
    <div class="container">
        <div class="game-info">
            <h1 class="game-title">{{$games->title}}</h1>
            <p class="game-date">Date de sortie: {{$games->date_sortie}}</p>
            <p class="game-description">{{$games->description}}</p>
            <div class="game-image-container">
                <img src="{{ url('./images/games/' . $games->game) }}" alt="{{$games->title}}" class="game-image">
            </div>
        </div>
        <div class="game-actions">
            <h2>Fonctionnalités</h2>
            <ul>
                <li><a href="#">Télécharger</a></li>
                <li><a href="#">Partager</a></li>
                <li><a href="#">Ajouter aux favoris</a></li>
            </ul>
            <div class="comment-section">
                <h2>Commentaires</h2>
                <div class="comment">
                    <textarea placeholder="Ajouter un commentaire..."></textarea>
                    <button onclick="addComment()">Commenter</button>
                </div>
                <div class="existing-comments">
                    <div class="comment-item">
                        <p>Super jeu! J'ai adoré y jouer.</p>
                    </div>
                    <div class="comment-item">
                        <p>Très bon graphisme et histoire captivante.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
