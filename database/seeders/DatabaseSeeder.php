<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Film;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Genre::factory()->count(5)->create();
        $films = Film::factory()->count(10)->create();
        foreach ($films as $film){
            $genre_id = Genre::get()->random()->id;
            $film->genres()->attach($genre_id);
        }
    }
}
