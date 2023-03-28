<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Watchlist;
use App\Models\Movie;
use Illuminate\Http\Request;

class WatchlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::findorfail(session('user')->id);
        $watchlist = Watchlist::where('user_id', '=', session('user')->id)->get();
        $movies = $user->movie;
        return view('watchlist.index', compact('user', 'watchlist', 'movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (session('user')->plan_id == 1) {
            $movies = Movie::where('paid', '=', 0)->get();
        } else {
            $movies = Movie::all();
        }
        
        return view('watchlist.create', compact('movies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'movie_id' => 'required',
        ],
        [
            'movie_id.required' => 'Movie can\'t be empty',
        ]);
        
        Watchlist::create([
            'movie_id' => $request->movie_id,
            'user_id' => session('user')->id,
            'order' => count(Watchlist::where('user_id', '=', session('user')->id)->get()) + 1,
        ]);

        return redirect('/watchlist')->with('pesan', 'New movie successfully added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(watchlist $watchlist)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, watchlist $watchlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(watchlist $watchlist)
    {
        Watchlist::where('user_id', '=', session('user')->id)->delete();
    }
}
