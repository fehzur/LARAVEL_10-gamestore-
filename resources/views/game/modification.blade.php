@extends('layouts.app')

@section('title', 'Edit Product')

@section('contents')
<style>
</style>
<div class="bodiest">
<h1 class="mb-0">Modifier les informations</h1>
<hr />

<form action="{{ route('admin/game/modifier', $game->id) }}" method="POST">
            @csrf
            @method('PUT')
<div class="edit_ensemble">
    <div class="colonne1">
        <h3>TITRE:</h3>
        <h3>GENRE DU JEUX:</h3>
        <h3>PLATEFORME:</h3>
        <h3>DATE DE SORTIE:</h3>
        <h3>ID DU JEUX:</h3>
        <h3>DESCRIPTION:</h3>
    </div>
    <div class="colonne2">
        <input type="text" name="title" value="{{ $game->title}}"><br>
        <input type="text" name="categorie" value="{{ $game->categorie}}"><br>
        <input type="text" name="plateforme" value="{{ $game->plateforme}}"><br>
        <input type="text" name="date_sortie" value="{{ $game->date_sortie}}"><br>
        <input type="text" name="product_code" value="{{ $game->product_code}}"><br>
                    <textarea name="description" placeholder="Description" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    {{ $game->description }}
                    </textarea>
    </div>
</div>
<button type="submit" style="padding:0 15px; background-color:blue;color:white;font-weight:bold;">MODIFIER</button>
    </form>
</div>

@endsection
