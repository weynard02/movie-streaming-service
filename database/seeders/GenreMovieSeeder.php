<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genre = array(1,2,3,4,7,1,2,3,4);
        $movie = array(1,1,1,1,1,2,2,2,2);

        $len = count($genre);
        for($i=0;$i<$len;$i++) {
            \App\Models\genre_movie::create([
                'genre_id' => $genre[$i],
                'movie_id' => $movie[$i]
            ]);
        }
    }
}
