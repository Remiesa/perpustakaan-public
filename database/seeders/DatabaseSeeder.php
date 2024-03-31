<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\buku;
use App\Models\detailGenre;
use App\Models\genre;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        buku::factory(20)->create();

        genre::factory()->create([
            "name" => "Horror"
        ]);

        genre::factory()->create([
            "name" => "Fantasy"
        ]);

        genre::factory()->create([
            "name" => "Psychology"
        ]);

        genre::factory()->create([
            "name" => "Comedy"
        ]);

        genre::factory()->create([
            "name" => "Drama"
        ]);

    }
}
