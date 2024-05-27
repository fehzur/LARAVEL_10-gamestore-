@extends('layouts.utilisateur')

@section('title', 'Bienvenue')

@section('contents')
@if(Auth::check())


    <main>
        <div class="body">
            <div class="input">
                <form action="{{ url('resultat') }}" method="GET">
                <input type="text" placeholder="Your favorite..." id="input" name="query"><br>
                    <i class="fa fa-search" id="search"></i>
                    <button type="submit" style="display:none;">Rechercher</button>
                    </form>
            </div>
            <div class="R_Added" id="one">
                <h1>Nouvellement Ajouté :</h1>
            </div>
            <div class="Added">
                @if(isset($games) && $games->count() > 0)
                <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    @foreach($games->sortByDesc('created_at')->take(12) as $game)
                    <div class="card-image">
                        <a href="{{ url('games', $game->id)}}"><img src="{{ url('./images/games/' . $game->game) }}" alt="photo de profil" class="card-img-top"></a>
                        <div class="card-image-overlay">
                            <h4 class="card-title">{{ $game->title }}</h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            </div>
            @else
            <p style="color: red; border:1px solid red; padding:10px 5px;">Aucun jeu n'a été trouvé. 🔭</p>
            @endif
            </div>
            <div class="more">
                <button id="more">VOIR PLUS <i class="fa fa-angle-right"></i> </button>
            </div>
            <div class="R_Added">
                <h1>Jeux Recents :</h1>
            </div>
            <div class="Added">
                @if(isset($games) && $games->count() > 0)
                <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    @foreach($games->sortByDesc('date_sortie')->take(12) as $game)
                    <div class="card-image">
                        <a href="{{ url('games', $game->id)}}"><img src="{{ url('./images/games/' . $game->game) }}" alt="photo de profil" class="card-img-top"></a>
                        <div class="card-image-overlay">
                            <h4 class="card-title">{{ $game->title }}</h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            </div>
            @else
            <p style="color: red; border:1px solid red; padding:10px 5px;">Aucun jeu n'a été trouvé. 🔭</p>
            @endif
            </div>
            <div class="more">
                <button id="more">VOIR PLUS <i class="fa fa-angle-right"></i> </button>
            </div>
            <div class="R_Added">
                <h1>Popular Download</h1>
            </div>
            <div class="Added">
                @if(isset($games) && $games->count() > 0)
                <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    @foreach($games->shuffle()->take(12) as $game)
                    <div class="card-image">
                        <a href="{{ url('games', $game->id)}}"><img src="{{ url('./images/games/' . $game->game) }}" alt="photo de profil" class="card-img-top"></a>
                        <div class="card-image-overlay">
                            <h4 class="card-title">{{ $game->title }}</h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @else
            <p style="color: red; border:1px solid red; padding:10px 5px;">Aucun jeu n'a été trouvé. 🔭</p>
            @endif
            </div>
            <div class="more">
                <button id="more">VOIR PLUS <i class="fa fa-angle-right"></i> </button>
            </div>
        </div>

@else
<h1>VOUS DEVRIEZ CONNECTER POUR VOIR TOUS LES CONTENUE DE CE PAGE</h1>
@endif
@endsection
