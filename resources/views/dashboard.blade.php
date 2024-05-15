@extends('layouts.app')

@section('title', 'Bonjour ADMIN')

@section('contents')

<div class="contents">
    <p>Bonjour à vous Mr/Miss <strong>{{ ucfirst(strtolower(Auth::user()->name)) }} {{ strtoupper(Auth::user()->firstname) }}</strong></p>
    <p>En tant que ADMIN, vous avez la possibiliter d'ajouter et de modifier tous les informations des jeux telechargeables.</p>
</div>

@endsection
