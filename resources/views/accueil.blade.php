@extends('layouts.utilisateur')

@section('title', 'Bienvenue')

@section('contents')
@if(Auth::check())


<div class="intro">
<div class="image-scroller">
    <div class="scroller-container">
      <div class="scroller-item">
      <img src="{{url('./images/scroll/image1.jpg')}}" alt="Image 1" class="carousel-image">
      </div>
      <div class="scroller-item">
      <img src="{{url('./images/scroll/image2.jpg')}}" alt="Image 1" class="carousel-image">
      </div>
      <div class="scroller-item">
      <img src="{{url('./images/scroll/image3.jpg')}}" alt="Image 1" class="carousel-image">
      </div>
      <div class="scroller-item">
      <img src="{{url('./images/scroll/image4.jpg')}}" alt="Image 1" class="carousel-image">
      </div>
      <div class="scroller-item">
      <img src="{{url('./images/scroll/image5.jpg')}}" alt="Image 1" class="carousel-image">
      </div>
      <div class="scroller-item">
      <img src="{{url('./images/scroll/image6.jpg')}}" alt="Image 1" class="carousel-image">
      </div>
      <div class="scroller-item">
      <img src="{{url('./images/scroll/image7.jpg')}}" alt="Image 1" class="carousel-image">
      </div>
      <div class="scroller-item">
      <img src="{{url('./images/scroll/image8.jpg')}}" alt="Image 1" class="carousel-image">
      </div>
      <div class="scroller-item">
      <img src="{{url('./images/scroll/image9.jpg')}}" alt="Image 1" class="carousel-image">
      </div>
      <div class="scroller-item">
      <img src="{{url('./images/scroll/image10.jpg')}}" alt="Image 1" class="carousel-image">
      </div>
    </div>
  </div>
            <div class="title">
                <h1 id="red">TELECHARGER DES JEUX GRATUIT</h1>
                <h1>PRE-INSTALLER POUR PC</h1>
                <p>Ravie de vous voir à nouveaux, <strong>{{ ucfirst(strtolower(Auth::user()->name)) }} {{ strtoupper(Auth::user()->firstname) }}</strong>               <br>
                <button>PARCOURIR</button>
            </div>
        </div>
    </header>
    <main>
        <div class="body">
            <div class="input">
                <input type="text" placeholder="Your favorite..." id="input"><br>
                    <i class="fa fa-search" id="search"></i>
                    <p id='erreur'>Veuillez entrer le nom de votre jeux!</p>
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
            <p>Aucun jeu n'a été trouvé.</p>
            @endif
            </div>
            <div class="more">
                <button id="more">MORE <i class="fa fa-angle-right"></i> </button>
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
            <p>Aucun jeu n'a été trouvé.</p>
            @endif
            </div>
            <div class="more">
                <button id="more">MORE <i class="fa fa-angle-right"></i> </button>
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
            <p>Aucun jeu n'a été trouvé.</p>
            @endif
            </div>
            </div>
            <div class="more">
                <button id="more">MORE <i class="fa fa-angle-right"></i> </button>
            </div>
        </div>

@else
<h1>VOUS DEVRIEZ CONNECTER POUR VOIR TOUS LES CONTENUE DE CE PAGE</h1>
@endif
@endsection
