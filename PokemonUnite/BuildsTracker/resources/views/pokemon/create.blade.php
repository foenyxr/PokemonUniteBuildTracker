<!DOCTYPE html>
<html>
<head>
    <title>Add New Pokémon</title>
</head>
<body>
    <h1>Add New Pokémon</h1>

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div>
            <strong>Whoops! Something went wrong!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form to Create a New Pokémon -->
    <form action="{{ route('pokemon.store') }}" method="POST">
        @csrf

        <div>
            <label for="pokemon_name">Name:</label>
            <input type="text" name="pokemon_name" id="pokemon_name" value="{{ old('pokemon_name') }}" required>
        </div>

        <div>
            <label for="pokeimg_link">Imagelink:</label>
            <input type="text" name="pokeimg_link" id="pokeimg_link" value="{{ old('pokeimg_link') }}" required>
        </div>

        <div>
            <label for="pokemon_role">Role:</label>
            <input type="text" name="pokemon_role" id="pokemon_role" value="{{ old('pokemon_role') }}" required>
        </div>

        <div>
            <label for="pokemon_style">Style:</label>
            <input type="text" name="pokemon_style" id="pokemon_style" value="{{ old('pokemon_style') }}" required>
        </div>

        <div>
            <button type="submit">Save</button>
            <a href="{{ route('pokemon.index') }}">Cancel</a>
        </div>
    </form>
</body>
</html>
