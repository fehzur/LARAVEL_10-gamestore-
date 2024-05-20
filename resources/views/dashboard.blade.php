@extends('layouts.app')

@section('title', 'Bonjour ADMIN')

@section('contents')
<div class="video-background">
        <video autoplay muted loop id="bgVideo">
            <source src="{{url('./video/fond/gamer.mp4')}}" type="video/mp4">
            Votre navigateur ne supporte pas les vidéos HTML5.
        </video>
</div>

<div class="contents">
    <p>Bonjour à vous Mr/Miss <strong>{{ ucfirst(strtolower(Auth::user()->name)) }} {{ strtoupper(Auth::user()->firstname) }}</strong></p>
    <p>En tant que ADMIN, vous avez la possibiliter d'ajouter et de modifier tous les informations des jeux telechargeables.</p>
</div>

@endsection
