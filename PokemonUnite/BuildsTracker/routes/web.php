<!--
    POKEMON UNITE BUILD TRACKER

    This web app can
    - CRUD(1) -> "Pokemon" => a web page that displays a gallery view of all pokemon in the database
        - Add, Remove, Modify and See the pokemon they enter in the data.
    - CRUD(2) -> "Build Tracker" => a webpage that will calculate pokemon's strengths (attack, defense, power) when 1-3 items are added

-->

<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;



Route::get('/', [DashboardController::class, 'index']);

// Route::get('/terms', function () {
//     return view('terms');
// });

Route::resource('pokemon', PokemonController::class);

Route::get('/pokemon', [PokemonController::class, 'index']);

// Route to display all Pokémon
Route::get('/pokemon', [PokemonController::class, 'index'])->name('pokemon.index');

// Route to show the form for creating a new Pokémon
Route::get('/pokemon/create', [PokemonController::class, 'create'])->name('pokemon.create');

// Route to store a newly created Pokémon
Route::post('/pokemon', [PokemonController::class, 'store'])->name('pokemon.store');

// Route to show a specific Pokémon
Route::get('/pokemon/{pokemon}', [PokemonController::class, 'show'])->name('pokemon.show');

// Route to show the form for editing a Pokémon
Route::get('/pokemon/{pokemon}/edit', [PokemonController::class, 'edit'])->name('pokemon.edit');

// Route to update a specific Pokémon
Route::put('/pokemons/{pokemon}', [PokemonController::class, 'update'])->name('pokemons.update');

// Route to delete a specific Pokémon
Route::delete('/pokemons/{pokemon}', [PokemonController::class, 'destroy'])->name('pokemon.destroy');

















// // Route::get('/tracker', function () {
// //     return view('tracker');
// // });

// // Route::get('/profile', function () {
// //     return view('users.profile');
// // });
