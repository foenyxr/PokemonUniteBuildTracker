<!DOCTYPE html>
<html>
<head>
    <title>Show Pokémon</title>
</head>
<body>
    <h1>{{ $pokemon->name }}</h1>
    <p>Role: {{ $pokemon->role }}</p>
    <p>Style: {{ $pokemon->style }}</p>
    <p>Difficulty: {{ $pokemon->difficulty }}</p>
    <a href="{{ route('pokemon.index') }}">Back</a>
</body>
</html>
