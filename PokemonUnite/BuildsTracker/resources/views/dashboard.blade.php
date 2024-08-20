@extends('shared.layout')

@section('content')

<header class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Welcome to the Pokémon Unite Build Tracker!</h1>
        <p class="lead">Your ultimate tool for optimizing your Pokémon builds and strategies.</p>
    </div>
</header>
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">About This Project</h2>
        <p class="text-center mb-5">The Pokémon Unite Build Tracker is designed to help players experiment with different item combinations and optimize their Pokémon builds. Whether you're a seasoned player or just getting started, this tool will help you make informed decisions and dominate the battlefield.</p>

        <div class="row">
            <div class="col-md-4 text-center">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Explore Pokémon</h5>
                        <p class="card-text">View the complete list of Pokémon and their roles, styles, and difficulties.</p>
                        <a href="#" class="btn btn-primary">View Pokémon List</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Add New Pokémon</h5>
                        <p class="card-text">Add new Pokémon to the tracker with their details and start building strategies.</p>
                        <a href="#" class="btn btn-primary">Add Pokémon</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Optimize Builds</h5>
                        <p class="card-text">Experiment with different item combinations and find the best builds for your Pokémon.</p>
                        <a href="#" class="btn btn-primary">Optimize Builds</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
