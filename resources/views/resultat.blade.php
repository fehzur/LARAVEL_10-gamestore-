@extends('layouts.utilisateur')
@section('title')
    {{ 'Résultats pour '. ucfirst(strtolower($query)) }}
@endsection
@section('contents')

<div class="input">
                <form action="{{ url('resultat') }}" method="GET">
                <input type="text" placeholder="Your favorite..." id="input" name="query"><br>
                    <i class="fa fa-search" id="search"></i>
                    <button type="submit" style="display:none;">Rechercher</button>
                    </form>
</div>
<div class="R_Added" id="one">
                @if(isset($query))
                <h1>Résultats pour "{{ $query }}"</h1>
                @endif
            </div>
            <div class="Added">
                @if(isset($games) && $games->count() > 0)
                <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    @foreach($games as $game)
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

@endsection