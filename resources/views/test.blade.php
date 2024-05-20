<!-- resources/views/games/index.blade.php -->
<form action="{{ route('game.search') }}" method="GET">
    <input type="text" name="query" placeholder="Rechercher par ID ou Titre">
    <button type="submit">Rechercher</button>
</form>

@if(isset($games) && $games->count() > 0)
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($games as $game)
                <tr>
                    <td>{{ $game->id }}</td>
                    <td>{{ $game->title }}</td>
                    <td>{{ $game->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Aucun résultat trouvé.</p>
@endif
