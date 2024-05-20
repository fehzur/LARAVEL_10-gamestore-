@extends('layouts.app')
@section('title', 'Resultats du recherche')
@section('contents')
@if(isset($games) && $games->count() > 0)
<div class="d-flex align-items-center mb-3">
    @if(isset($query))
    <h1 class="font-weight-bold text-2xl mb-0 mr-3">Résultats pour "{{ $query }}"</h1>
    @endif
        <form action="{{ route('admin.game.search') }}" style="width:50%" method="GET">
        <input type="text" class="form-control w-50" style='margin:0 25px' name="query" placeholder="Veuillez taper l'Id, titre, genre, etc... de jeux à rechercher">
        </form>
</div><hr />
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
            <img src="{{url('./images/games/'. $rs->game ) }}" style="width:100%">
            </div>
            <div>
                        <a href="{{ url('admin/game/afficher', $rs->id) }}" class="text-blue-800">Detail</a> |
                        <a href="{{ url('admin/game/modifier', $rs->id)}}" class="text-green-800 pl-2">Edit</a> |
                        <form action="{{ url('admin/game/destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment effacer cette jeux de votre liste ?')">
                            @csrf
                            @method('DELETE')
                            <button style="width:100%;border:none; background-color: transparent;">Delete</button>
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
@else
<div class="d-flex align-items-center mb-3">
    @if(isset($query))
    <h1 class="font-weight-bold text-2xl mb-0 mr-3">Résultats pour "{{ $query }}"</h1>
    @endif
        <form action="{{ route('admin.game.search') }}" style="width:50%" method="GET">
        <input type="text" class="form-control w-50" style='margin:0 25px' name="query" placeholder="Veuillez taper l'Id, titre, genre, etc... de jeux à rechercher">
        </form>
</div>
<div class="non_trouve">
    <p class="paragraphe">Aucun résultat trouvé.</p>
</div>
@endif
@endsection
