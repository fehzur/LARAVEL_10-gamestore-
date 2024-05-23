@extends('layouts.app')
@section('title', 'Tous les jeux dispo')
@section('contents')
<div class="parent">
    <div class="d-flex align-items-center mb-3">
        <h1 class="font-weight-bold text-2xl mb-0 mr-3">Tous les jeux disponibles</h1>
        <form action="{{ route('admin.game.search') }}" style="width:50%" method="GET">
        <input type="text" class="form-control w-50" style='margin:0 25px' name="query" placeholder="Veuillez taper l'Id, titre, genre, etc... de jeux à rechercher">
        </form>
    </div>
    <a href="{{ route('admin/game/ajout')}}" style="text-decoration:none; padding: 5px 15px; background: blue;color:white; border-radius:2px;float: right;">AJOUTEZ JEUX</a>
    <hr />
    
    <div class="ensemble">
    @if($games->count() > 0)
            @foreach($games as $rs)
        <div class='foreach-admin'>
            <div class="numero">
            <p>Numéro: {{ $loop->iteration }}</p>
            </div>
            <div class="titre">
            {{ $rs->title }}
            </div>
            <div class="image">
            <img src="{{url('./images/games/'. $rs->game ) }}" style="width:100%; max-height:250px;">
            </div>
            <div>
                        <a href="{{ url('admin/game/afficher', $rs->id) }}" class="text-blue-800">Detail</a> |
                        <a href="{{ url('admin/game/modifier', $rs->id)}}" class="text-green-800 pl-2">Modifier</a> |
                        <form action="{{ url('admin/game/destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment effacer cette jeux de votre liste ?')">
                            @csrf
                            @method('DELETE')
                            <button class="delete">Effacer</button>
                        </form>
            </div>
        </div>
            @endforeach
            @else
            <tr>
                <td class="text-center text-danger" colspan="5">Vous n'avez pas encore de Jeux dans votre repertoire</td>
            </tr>
            @endif
    </div>
</div>
@endsection