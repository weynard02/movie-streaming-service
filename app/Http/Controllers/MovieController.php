<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;
use App\Models\Artist;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $genresHashMap = [
        'action' => 1,
        'adventure' => 2,
        'marvel' => 3,
        'sci-fi' => 4,
        'dc' => 5,
        'romance' => 6,
        'comedy' => 7,
        'anime' => 8
    ];

    public function index()
    {
        if (request('search')) {
            $isSearch = true;
            $searchQuery = request('search');
            if (str_contains($searchQuery, 'genre:')) {
                $genreName = str_replace('genre:', '', $searchQuery);
                $genre = Genre::findorfail($this->genresHashMap[$genreName]);
                $movies = $genre->movie;
                return view('movie.index', compact('isSearch', 'movies', 'genreName'));
            }

            $movies = Movie::where('name', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%')
                ->get();
            return view('movie.index', compact('isSearch', 'movies'));
        } else {
            $isSearch = false;
            $movies = Movie::all();
            return view('movie.index', compact('isSearch', 'movies'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::findorfail($id);
        $genres = Genre::all();
        $artists = Artist::all();

        return view('movie.show',  compact('movie', 'artists', 'genres'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
