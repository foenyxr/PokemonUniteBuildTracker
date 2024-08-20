<!--
    POKEMON UNITE BUILD TRACKER

    This web app can
    - CRUD(1) -> "Pokemon" => a web page that displays a gallery view of all pokemon in the database
        - Add, Remove, Modify and See the pokemon they enter in the data.
    - CRUD(2) -> "Build Tracker" => a webpage that will calculate pokemon's strengths (attack, defense, power) when 1-3 items are added

-->

<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;



Route::get('/', [DashboardController::class, 'index']);

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/pokemon', function () {
    return view('pokemon');
});


















// // Route::get('/tracker', function () {
// //     return view('tracker');
// // });

// // Route::get('/profile', function () {
// //     return view('users.profile');
// // });
