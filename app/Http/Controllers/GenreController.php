<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\genre_movie;
use App\Models\Movie;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $genres = Genre::all();
        $movie = Movie::findorfail($id);

        return view('admin.genre.add', compact('genres', 'movie'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'genre_id' => 'required|unique:genre_movies,genre_id,NULL,id,movie_id,'.$id
        ], 
        [
            'genre_id.required' => 'The genre field is required.',
            'genre_id.unique' => 'The selected genre is already assigned to this movie.',
        ]);
        genre_movie::create([
            'genre_id' => $request->genre_id,
            'movie_id' => $id
        ]);


        return redirect('/admin/'.$id)->with('pesan', 'Genre added');
    }
    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyPivot($movie_id, $genre_id)
    {
        $data = genre_movie::where('movie_id', '=', $movie_id)->where('genre_id', '=', $genre_id);
        $data->delete();

        return redirect('/admin/'.$movie_id)->with('pesan', 'Deleted successfully');
    }
}
