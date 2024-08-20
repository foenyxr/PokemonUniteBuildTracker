@extends('shared.layout')

@section('pokemon')
    <p> this is pokemon gallery </p>
    @foreach ($pokemon as $pokemon)
        <h1> {{ $poke['pokeimg_link'] }} </h1>
        <h2> {{ $poke['pokemon_name'] }} </h2>
        <h2> {{ $poke['pokemon_role'] }} </h2>
        <h2> {{ $poke['pokemon_style'] }} </h2>
    @endforeach
@endsection

