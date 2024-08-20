<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonController extends Controller
{
    // display a list of the data
    public function index() {
        $pokemon = Pokemon::all();
        return view('pokemon.index', ['pokemon' => $pokemon]);
    }

    // show the form to create a new data
    public function create() {
        return view('pokemon.create');
    }

    //store a newly created data in the database
    public function store(Request $request) {
        $request -> validate([
            'pokeimg_link' => 'required',
            'pokemon_name' => 'required',
            'pokemon_role' => 'required',
            'pokemon_style' => 'required'
        ]);

        Pokemon::create($request -> all());

        return redirect() -> route('pokemon.index')
                          -> with('success', 'Pokemon added successfulyl!');
    }

    // display the selected pokemon
    public function show($id) {
        $pokemon = Pokemon::find($id);

        if(!$pokemon) {
            return redirect() -> route('pokemon.index') -> with('error', 'Pokemon not found.');
        }
        return view('pokemon.show', ['pokemon' => $pokemon]);
    }

    //show form to edit specific pokemon details
    public function edit(Pokemon $pokemon) {
        return view('pokemon.edit', ['pokemon' => $pokemon]);
    }

    //update specific pokemon details
    public function update(Request $request, Pokemon $pokemon) {
        $request -> validate([
            'pokeimg_link' => 'required',
            'pokemon_name' => 'required',
            'pokemon_role' => 'required',
            'pokemon_style' => 'required',
        ]);

        $pokemon -> update($request -> all());

        return redirect() -> route('pokemon.index')
                          -> with('success', 'Pokemon updated successfully!');
    }

    //delete a pokemon
    public function destroy(Pokemon $pokemon) {
        $pokemon -> delete();

        return redirect() -> route('pokemon.index')
                          -> with ('success', 'Pokemon deleted successfully!');
    }
}
