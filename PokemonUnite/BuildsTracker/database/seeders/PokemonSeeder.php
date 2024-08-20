<?php

namespace Database\Seeders;

use Illuminate\Container\Attributes\Database;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pokemon')->insert([
            [
                'pokeimg_link' => '#',
                'pokemon_name' => 'Charizard',
                'pokemon_role' => 'All-rounder',
                'pokemon_style' => 'Melee'
            ],
            [
                'pokeimg_link' => '#',
                'pokemon_name' => 'Miraidon',
                'pokemon_role' => 'Attacker',
                'pokemon_style' => 'Ranged'
            ],
            [
                'pokeimg_link' => '#',
                'pokemon_name' => 'Mimikyu',
                'pokemon_role' => 'Attacker',
                'pokemon_style' => 'Ranged'
            ]
        ]);
    }
}
