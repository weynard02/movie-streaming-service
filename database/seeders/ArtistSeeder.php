<?php

namespace Database\Seeders;

use App\Models\Artist;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artist = array("Robert Downey Jr.", "Tom Holland", "Chris Evans", "Benedict Cumberbatch", "Scarlett Johanson", "Chris Hemsworth");
        $birthdate = array("1965-04-04", "1996-06-01", "1981-06-13", "1976-07-19", "1984-11-22", "1983-08-11");
        $len = count($artist);
        for($i=0;$i<$len;$i++) {
            Artist::create([
                'name' => $artist[$i],
                'birthdate' => $birthdate[$i]
            ]);
        }
    }
}
