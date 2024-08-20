<!DOCTYPE html>
<html>
<head>
    <title>Show Pokémon</title>
</head>
<body>
    <h1>{{ $pokemon->pokemon_name }}</h1>
    <p>Role: {{ $pokemon->pokemon_role }}</p>
    <p>Style: {{ $pokemon->pokemon_style }}</p>
    <p>Difficulty: {{ $pokemon->pokemon_difficulty }}</p>
    <a href="{{ route('pokemon.index') }}">Back</a>
</body>
</html>
