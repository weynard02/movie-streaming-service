<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    // id
    // name
    // link
    // studio
    // release_date
    // image
    // paid
        $movie = array("Spider-Man: Homecoming", "The Avengers");
        $link = array("https://www.youtube.com/watch?v=rk-dF1lIbIg", "https://www.youtube.com/watch?v=eOrNdBpGMv8");
        $studio = array("SONY", "Marvel Studios");
        $release_date = array("2017-07-07", "2012-05-04");
        $image = array("images/homecoming.jpg", "images/avengers.jpg");
        $paid = array(0, 1);
        $tags = array("marvel,action,spiderman,tom holland,mcu", "marvel,action,avengers,mcu,robert,rdj");
        $len = count($movie);
        for($i=0;$i<$len;$i++) {
            \App\Models\Movie::create([
                'name' => $movie[$i],
                'link' => $link[$i],
                'studio' => $studio[$i],
                'release_date' => $release_date[$i],
                'image' => $image[$i],
                'paid' => $paid[$i],
                'tags' => $tags[$i]
            ]);
        }
    }
}
