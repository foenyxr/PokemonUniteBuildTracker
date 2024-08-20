<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $pokemon = [
            [
                'pokemon_name' => 'Charizad',
                'pokemon_type' => 'All-rounder',
            ],
            [
                'pokemon_name' => 'Mimikyu',
                'pokemon_type' => 'Melee',
            ]
        ];

        return view(
            'dashboard',
            [
                'pokemon' => $pokemon
            ]
        );
    }
}
