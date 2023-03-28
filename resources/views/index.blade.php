@extends('master')
@section('content')
    <div class="container-fluid">
        @if (session('pesan'))
            <div class="alert alert-success">
                {{ session('pesan') }}
            </div>
        @endif
        @if ($isSearch)
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach ($movies as $i)
                    @if (session('user') && session('user')->plan_id == 1 && $i->paid == 1)
                        @continue
                    @endif
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('storage/' . $i->image) }}" alt="{{ asset('images/alt.png') }}"
                                class="card-img-top" height=400>
                            <div class="card-body">
                                <h5 class="card-title">{{ $i->name }}</h5>
                                <p class="card-text">{{ $i->studio }}</p>
                                <a href="/movie/{{ $i->id }}" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="header my-5">
                <h2 class="heading text-dark">NEW</h2>
            </div>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach ($newMovies as $movie)
                    @if (session('user') && session('user')->plan_id == 1 && $movie->paid == 1)
                        @continue
                    @endif
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ asset('images/alt.png') }}"
                                class="card-img-top" height=400>
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->name }}</h5>
                                <p class="card-text">{{ $movie->studio }}</p>
                                <a href="/movie/{{ $movie->id }}" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @for ($i = 0; $i < count($genres); $i++)
                <div class="header my-5">
                    <h2 class="heading text-dark">{{ Str::upper($genres[$i]->name) }}</h2>
                </div>
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    @foreach ($genres[$i]->movie as $movie)
                        @if (session('user') && session('user')->plan_id == 1 && $movie->paid == 1)
                            @continue
                        @endif
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ asset('images/alt.png') }}"
                                    class="card-img-top" height=400>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $movie->name }}</h5>
                                    <p class="card-text">{{ $movie->studio }}</p>
                                    <a href="/movie/{{ $movie->id }}" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endfor
        @endif
    </div>
@endsection
