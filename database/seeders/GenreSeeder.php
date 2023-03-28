<?php

namespace Database\Seeders;

use App\Models\Genre;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // genres
        // id
        // name
        $genre = array("action", "adventure", "marvel", "sci-fi", "dc", "romance", "comedy", "anime");
        $len = count($genre);
        for($i=0;$i<$len;$i++) {
            Genre::create([
                'name' => $genre[$i]
            ]);
        }
    }
}
