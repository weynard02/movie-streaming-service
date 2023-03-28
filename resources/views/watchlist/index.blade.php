@extends('master')
@section('content')
    <div class="container">
        @if (session('pesan'))
            <div class="alert alert-success">
                {{ session('pesan') }}
            </div>
        @endif
        <div class="row my-5">
            <div class="col-6 d-flex justify-content-center">
                <a class="btn btn-primary" href="/watchlist/create"> Add to Watchlist </a>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <a class="btn btn-primary" href="/watchlist/edit"> Edit Watchlist </a>
            </div>
        </div>
        <div class="row my-5">

        </div>
        <div class="header my-5 py-2 bg-info">
            <h2 class="text-dark">{{ $user->name }}'s Watchlist</h2>
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
                        </li>
                    @endforeach
                </ul>
            </div>
            </p>
        </div>
    </div>
@endsection
