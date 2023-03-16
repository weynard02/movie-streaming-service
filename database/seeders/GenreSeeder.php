<?php

namespace Database\Seeders;

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
        $genre = array("action", "adventure", "marvel", "sci-fi", "dc", "romance", "comedy");
        $len = count($genre);
        for($i=0;$i<$len;$i++) {
            \App\Models\Genre::create([
                'name' => $genre[$i]
            ]);
        }
    }
}
