@extends('master')
@section('content')
    <div class="container">
        @if (session('pesan'))
            <div class="alert alert-success">
                {{ session('pesan') }}
            </div>
        @endif
        <div class="row my-5">
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary" href="/watchlist/create"> Add to Watchlist </a>
            </div>
        </div>
        <div class="header my-5 py-2 bg-info rounded bg-opacity-25">
            <h2 class="text-dark ms-4">{{ $user->name }}'s Watchlist</h2>
        </div>
        <div class="card-body">
            <p class="card-text">
            <div class="row">
                <ul class="list-group">
                    @foreach ($movies as $movie)
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                {{ $movie->name }}
                            </div>
                            <div class="col-2"></div>
                            <form action='/watchlist/{{ session('user')->id }}/{{ $movie->id }}' method="post" enctype="multipart/form-data">
                                @csrf
                                @method('delete')
                                <a href="/movie/{{ $movie->id }}" class="btn btn-primary btn-sm">View</a>
                                <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            </div>
            </p>
        </div>
    </div>
@endsection
