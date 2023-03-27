<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __invoke()
    {
        if (request('search')) {
            $isSearch = true;
            $movies = Movie::where('name', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%')
                ->get();
            return view('index', compact('isSearch', 'movies'));
        } else {
            $isSearch = false;
            $headers = ['New', 'Action', 'Adventure', 'Marvel', 'Sci-Fi', 'DC', 'Romance', 'Comedy'];
            $genres = Genre::all();
            $newMovies = Movie::where('release_date', 'like', date('Y') . '%')->get();
            return view('index', compact('isSearch', 'headers', 'genres', 'newMovies'));
        }
    }
}
