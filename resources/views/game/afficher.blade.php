@extends('layouts.app')

@section('title', 'Information')

@section('contents')
<div class="body">
<h1 class="font-bold text-2xl ml-3">Detail du Jeux</h1>
<hr />

<div class="show_ensemble">
    <div class="show_image">
    <img src="{{ url('./images/games/' . ($game->game)) }}" alt="photo du jeux" class="afficher_image">
    </div>
    <div class="show_title_product">
        <div class="show_title">
            <h3>Titre</h3>
            {{ $game->title }}
        </div>
        <div class="show_categorie">
            <h3>Genre du jeux :</h3>
            {{ $game->categorie }}
        </div>
        <div class="show_date">
            <h3>Sortie le :</h3>
            {{ $game->date_sortie }}
        </div>
        <div class="show_code">
            <h3>ID du jeux :</h3>
            {{ $game->product_code }}
        </div>
        <div class="show_plateforme">
            <h3>Jouable uniquement sur :</h3>
            {{ $game->plateforme }}
        </div>
        <br>
    </div>
</div>
        <div class="show_description">
            <strong>{{ $game->description }}</strong>
        </div>
</div>

@endsection
