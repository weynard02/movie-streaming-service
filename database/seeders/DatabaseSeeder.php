<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MovieSeeder::class,
            ArtistSeeder::class,
            GenreSeeder::class,
            PlanSeeder::class,
            UserSeeder::class,
            ArtistMovieSeeder::class,
            GenreMovieSeeder::class
        ]);
    }
}
