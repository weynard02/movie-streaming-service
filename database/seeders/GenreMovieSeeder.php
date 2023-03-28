<?php

namespace Database\Seeders;

use App\Models\genre_movie;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genre = array(1,2,3,4,7,1,2,3,4,1,2,6,8,1,2,4,6,1,2,6,8);
        $movie = array(1,1,1,1,1,2,2,2,2,3,3,3,3,4,4,4,4,5,5,5,5);

        $len = count($genre);
        for($i=0;$i<$len;$i++) {
            genre_movie::create([
                'genre_id' => $genre[$i],
                'movie_id' => $movie[$i]
            ]);
        }
    }
}
