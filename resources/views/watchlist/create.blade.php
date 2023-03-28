@extends('master')
@section('content')
    <h1 align=center> Add Playlist</h1>
    <div class="card-body">
        <form action="/watchlist" method="post" enctype="multipart/form-data">
            @csrf
            <p class="card-text">
            <div class="row">
                <ul class="list-group">
                    <h2>Movies:</h2>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <select class="form-select form-control" name="genre">
                            <option selected value="">-</option>
                            @foreach ($movies as $movie)
                                <option value="{{ $movie->id }}">{{ $movie->name }}</option>
                            @endforeach
                        </select>
                        <form action='/watchlist/movie/{{ $movie->id }}' method="post" enctype="multipart/form-data">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                        </form>
                    </li>
                    <li class="list-group-item">
                        <div class="ms-2 me-auto">
                            <a href="/watchlist/movie/{{ $movie->id }}" class="btn btn-outline-primary">&#43; Add
                                Movie</a>
                        </div>
                    </li>
                </ul>
            </div>
            </p>
        </form>
    </div>
@endsection
