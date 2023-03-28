@extends('master')
@section('content')
    @error('movie_id')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <h1 align=center> Add Movie</h1>
    <div class="card-body">
        <form action="/watchlist" method="post" enctype="multipart/form-data">
            @csrf
            <p class="card-text">
            <div class="row">
                <ul class="list-group">
                    <h2>Movie to Add:</h2>
                    <select class="form-select form-control" name="movie_id">
                        <option selected value="">Select Movie</option>
                        @foreach ($movies as $movie)
                            <option value="{{ $movie->id }}">{{ $movie->name }}</option>
                        @endforeach
                    </select>
                </ul>
            </div>
            </p>
            <a href="./" class="btn btn-danger">&lt; Back</a>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection
