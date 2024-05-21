@extends('layouts.app')

@section('title', 'Information')

@section('contents')
<div class="body">
<h1 class="font-bold text-2xl ml-3">Modification du JEUX:</h1>
<hr />

<form action="{{ route('admin/game/modifier', $game->id) }}" method="POST">
            @csrf
            @method('PUT')
<div class="show_ensemble">
    <div class="show_image">
    <img src="{{ url('./images/games/' . ($game->game)) }}" alt="photo du jeux" class="afficher_image">
    </div>
    <div class="show_title_product">
        <div class="show_title">
            <h3>Titre</h3>
            <input type="text" name="title" value="{{ $game->title}}">
        </div>
        <div class="show_categorie">
            <h3>Genre du jeux :</h3>
            <input type="text" name="categorie" value="{{ $game->categorie}}">
        </div>
        <div class="show_date">
            <h3>Sortie le :</h3>
            <input type="text" name="date_sortie" value="{{ $game->date_sortie}}">
        </div>
        <div class="show_code">
            <h3>ID du jeux :</h3>
            <input type="text" name="product_code" value="{{ $game->product_code}}">
        </div>
        <div class="show_plateforme">
            <h3>Jouable uniquement sur :</h3>
            <input type="text" name="plateforme" value="{{ $game->plateforme}}">
        </div>
        <div>
            <h3>Description du JEUX :</h3>
            <textarea name="description" placeholder="Description" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    {{ $game->description }}
                    </textarea>
        </div>
<button type="submit" style="padding:0 15px; background-color:blue;color:white;font-weight:bold;">MODIFIER</button>
        <br>
    </div>
</div>
</div>
    </form>

@endsection
