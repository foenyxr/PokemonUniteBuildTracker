<!DOCTYPE html>
<html>
<head>
    <title>Edit Pokémon</title>
</head>
<body>
    <h1>Edit Pokémon</h1>

    <form action="{{ route('pokemon.edit', $pokemon->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $pokemon->name }}" required><br>
        <label for="role">Role:</label>
        <input type="text" name="role" value="{{ $pokemon->role }}" required><br>
        <label for="style">Style:</label>
        <input type="text" name="style" value="{{ $pokemon->style }}" required><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
