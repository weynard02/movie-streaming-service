<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\artist_movie;
use App\Models\Movie;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = Artist::all();
        return view('admin.artist.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $artists = Artist::all();
        $movie = Movie::findorfail($id);

        return view('admin.artist.add', compact('artists', 'movie'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        if ($request->artist_id) {
            $request->validate([
                'artist_id' => 'required|unique:artist_movies,artist_id,NULL,id,movie_id,'.$id
            ],
            [
                'artist_id.required' => 'Artist is required.',
                'artist_id.unique' => 'The selected artist is already assigned to this movie.',
            ]);
            artist_movie::create([
                'artist_id' => $request->artist_id,
                'movie_id' => $id
            ]);


            return redirect('/admin/'.$id)->with('pesan', 'Cast added');
        }

        if ($request->artist) {
            $request->validate([
                'artist' => 'required|unique:artists,name',
                'date' => 'required'
            ], 
            [
                'artist.unique' => 'The name\'s already exists',
                'date.required' => 'the birthdate is required'
            ]);

            Artist::create([
                'name' => $request->artist,
                'birthdate' => $request->date
            ]);

            $itemID = Artist::latest()->firstorFail()->id;
            artist_movie::create([
                'artist_id' => $itemID,
                'movie_id' => $id
            ]);

            return redirect('/admin/'.$id)->with('pesan', 'Cast added');
        }
        else {
            return redirect('/admin/artist/'.$id)->with('errormes', 'Cast not added!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $artist = Artist::findorfail($id);

        return view('admin.artist.edit', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required'
        ],
        [
            'name.required' => 'Name can\'t be empty',
            'date.required' => 'Birthdate can\'t be empty'
        ]);

        $artist = Artist::findorfail($id);

        $artist->update([
            'name' => $request->name,
            'birthdate' => $request->date
        ]);

        return redirect('/admin/artist')->with('pesan', 'Artist edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $artist = Artist::findorfail($id);
        $artist->movie()->detach();
        $artist->delete();

        return redirect('/admin/artist')->with('pesan', 'Artist deleted successfully');
    }

    public function destroyPivot($movie_id, $cast_id)
    {
        $data = artist_movie::where('movie_id', '=', $movie_id)->where('artist_id', '=', $cast_id);
        $data->delete();

        return redirect('/admin/'.$movie_id)->with('pesan', 'Deleted successfully');
    }
}
