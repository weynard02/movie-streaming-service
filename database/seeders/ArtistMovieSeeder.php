<?php

namespace Database\Seeders;

use App\Models\artist_movie;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movie = array(1,1,2,2);
        $artist = array(1,2,1,2);
        $len = count($movie);
        for($i=0;$i<$len;$i++) {
            artist_movie::create([
                'artist_id' => $artist[$i],
                'movie_id' => $movie[$i]
            ]);
        }
    }
}
