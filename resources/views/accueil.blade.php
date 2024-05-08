@extends('layouts.utilisateur')

@section('title', 'Bienvenue "(Auth::user()->name)"')

@section('contents')
@if(Auth::check())
 <header class='bg-white'>
    <div class="Accueil mx-auto text-3xl p-5 shadow">

    <div class="image" style="width:30%">
    <img class="pdp" src="./images/toppng.com-robot-png-309x387.png" alt="photo-de-profil">
    </div>

    <div class="" style="width:70%">
        <h1 class="text-3xl font-bold text-gray-900">
            ACCUEIL
        </h1>
        <p>Ravie de vous voir à nouveaux, <strong>{{ ucfirst(strtolower(Auth::user()->name)) }} {{ strtoupper(Auth::user()->firstname) }}
 </strong></p>
    <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio rem minus recusandae deserunt! Quae tempore enim ab consequuntur nam tenetur alias quo. Tenetur alias dolore impedit ratione adipisci soluta corrupti quos quisquam voluptas qui, iusto ut. Eum enim excepturi maiores et velit, atque, placeat deserunt debitis nam tenetur distinctio obcaecati?</span>
    </div>
    </div>

    <div style="text-align:center">
        <h3>JEUX RECENTS :</h3>
    </div>
 </header>




@else
<h1>VOUS DEVRIEZ CONNECTER POUR VOIR TOUS LES CONTENUE DE CE PAGE</h1>
@endif
@endsection
