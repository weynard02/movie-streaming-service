<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke() {
        $user = session('user');
        if (request('search')) {
            $isSearch = true;
            $movies = Movie::where('name', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%')
                ->get();
            return view('index', compact('isSearch', 'movies', 'user'));
        } else {
            $isSearch = false;
            $headers = ['New', 'Action', 'Adventure', 'Marvel', 'Sci-Fi', 'DC', 'Romance', 'Comedy'];
            $genres = Genre::all();
            $newMovies = Movie::where('release_date', 'like', date('Y') . '%')->get();
            return view('index', compact('isSearch', 'headers', 'genres', 'newMovies', 'user'));
        }
    }
}
