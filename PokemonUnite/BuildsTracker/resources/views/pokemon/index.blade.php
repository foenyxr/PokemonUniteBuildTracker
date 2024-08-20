<!DOCTYPE html>
<html>
<head>
    <title>Pokémon List</title>
</head>
<body>
    <h1>Pokémon List</h1>

    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif

    <a href="{{ route('pokemon.create') }}">Add New Pokémon</a>

    <ul>
        @foreach ($pokemon as $pokemon)
            <li>{{ $pokemon->name }} - <a href="{{ route('pokemon.show', $pokemon->id) }}">View</a> | <a href="{{ route('pokemon.edit', $pokemon->id) }}">Edit</a> |
            <form action="{{ route('pokemon.destroy', $pokemon->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
