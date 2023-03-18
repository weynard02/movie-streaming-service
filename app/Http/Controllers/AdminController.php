<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Genre;
use App\Models\genre_movie;
use App\Models\Movie;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('admin.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movies = Movie::all();
        $artists = Artist::all();
        $genres = Genre::all();
        return view('admin.create', compact('movies', 'artists', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'studio' => 'required',
            'link' => 'required|url',
            'release_date' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'genre' => 'required'
        ],
        [
            'name.required' => 'Title can\'t be empty',
            'studio.required' => 'Studio can\'t be empty',
            'link.required' => 'Link have to be included',
            'link.url' => 'Link has wrong format',
            'release_date.required' => 'Every title has a date',
            'image.required' => 'Image can\'t be empty',
            'image.image' => 'Image has wrong format',
            'genre.required' => 'Genre can\'t be empty'
        ]);

        // process the uploaded image and store it in public/images
        $imagePath = $request->file('image')->store('public/images');
        $imageUrl = str_replace('public/', '', $imagePath);
        
        Movie::create([
            'name' => $request->name,
            'studio' => $request->studio,
            'link' => $request->link,
            'release_date' => $request->release_date,
            'image' => $imageUrl,
            'paid' => $request->paid,
            'tags' => $request->tags
        ]);

        $itemID = Movie::latest()->firstorFail()->id;

        $movie = Movie::find($itemID);
        $movie->genre()->attach($request->genre);

        return redirect('/admin')->with('pesan', 'New data succesfully added, add cast or genre in edit movie');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $movies = Movie::findorfail($id);
        $movies->genre()->detach();
        $movies->delete();

        return redirect('/admin')->with('pesan', 'Data deleted successfully');
    }
}
