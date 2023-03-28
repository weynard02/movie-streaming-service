<?php

namespace Database\Seeders;

use App\Models\Movie;

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
        $movie = array("Spider-Man: Homecoming", "The Avengers", "Suzume no Tojimari", "Star Wars: Episode IV - A New Hope", "Kimi no Na wa");
        $link = array("https://www.youtube.com/watch?v=rk-dF1lIbIg", "https://www.youtube.com/watch?v=eOrNdBpGMv8", "https://www.youtube.com/watch?v=6R6q2fAp2n4", "https://www.youtube.com/watch?v=L-_xHEv0l-w", "https://youtu.be/3KR8_igDs1Y");
        $studio = array("SONY", "Marvel Studios", "CoMix Wave Films", "Lucasfilm", "CoMix Wave Films");
        $release_date = array("2017-07-07", "2012-05-04", "2023-03-08", '1977-05-25', '2016-07-03');
        $image = array("images/homecoming.jpg", "images/avengers.jpg", "images/suzume.jpg", 'images/star-wars.jpg', 'images/kimi-no-na-wa.jpg');
        $paid = array(0, 1, 1, 0, 0);
        $tags = array("marvel,action,spiderman,tom holland,mcu", "marvel,action,avengers,mcu,robert,rdj", "anime,romance,mystery,supernatural", "war,space,technology,action,retro", "anime,romance,supernatural,body-swapping,gender-bender,mystery,disaster");
        $len = count($movie);
        for($i=0;$i<$len;$i++) {
            Movie::create([
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
