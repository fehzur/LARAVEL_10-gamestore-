@extends('layouts.app')
@section('title', 'Ajouter JEUX')

@section('contents')
<div class="container mt-5">
    <h1 class="text-center text-primary mb-4">Ajouter des nouveaux Jeux</h1>
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin/game/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titre :</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="game" class="form-label">Le Jeu :</label>
                    <input id="game" name="game" type="file" accept=".jpg, .jpeg, .png, .webm" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="product_code" class="form-label">Code spécifique :</label>
                    <input id="product_code" name="product_code" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="categorie" class="form-label">Genre :</label>
                    <input id="categorie" name="categorie" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="date_sortie" class="form-label">Ce jeu est sorti le :</label>
                    <input id="date_sortie" name="date_sortie" type="date" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="plateforme" class="form-label">Plateforme :</label>
                    <input id="plateforme" name="plateforme" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description du jeu :</label>
                    <textarea id="description" name="description" rows="4" class="form-control" placeholder="Description ............" required></textarea>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">AJOUTER</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
