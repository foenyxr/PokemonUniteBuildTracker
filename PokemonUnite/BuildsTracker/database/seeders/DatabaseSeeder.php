<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        if (!User::where('email', 'unique_test@example.com')->exists()) {
            User::create([
                'name' => 'Test User',
                'email' => 'unique_test@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
            ]);
        }
    }
}
