<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            [
                'itimg_url' => '#',
                'item_name' => 'Turbo glasses',
                'item_basic_attack' => '13',
                'item_basic_defense' => '6',
                'item_basic_upower' => '20'
            ],
            [
                'itimg_url' => '#',
                'item_name' => 'Sun Bandana',
                'item_basic_attack' => '19',
                'item_basic_defense' => '4',
                'item_basic_upower' => '10'
            ]
        ]);
    }
}
