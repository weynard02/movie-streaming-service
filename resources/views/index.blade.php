@extends('master')
@section('content')
    <div class="container-fluid p-5">
        @if ($isSearch)
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach ($movies as $i)
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('storage/' . $i->image) }}" alt="{{ asset('images/alt.png') }}"
                                class="card-img-top" height=400>
                            <div class="card-body">
                                <h5 class="card-title">{{ $i->name }}</h5>
                                <p class="card-text">{{ $i->studio }}</p>
                                <form action='/admin/{{ $i->id }}' method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                    <a href="/admin/{{ $i->id }}" class="btn btn-primary">View</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="header">
                <h2 class="heading text-dark">NEW</h2>
            </div>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach ($newMovies as $movie)
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ asset('images/alt.png') }}"
                                class="card-img-top" height=400>
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->name }}</h5>
                                <p class="card-text">{{ $movie->studio }}</p>
                                <form action='/admin/{{ $movie->id }}' method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                    <a href="/admin/{{ $movie->id }}" class="btn btn-primary">View</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @for ($i = 0; $i < count($genres); $i++)
                <div class="header">
                    <h2 class="heading text-dark">{{ Str::upper($genres[$i]->name) }}</h2>
                </div>
                @foreach ($genres[$i]->movie as $movie)
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ asset('images/alt.png') }}"
                                class="card-img-top" height=400>
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->name }}</h5>
                                <p class="card-text">{{ $movie->studio }}</p>
                                <form action='/admin/{{ $movie->id }}' method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                    <a href="/admin/{{ $movie->id }}" class="btn btn-primary">View</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endfor
        @endif
    </div>
@endsection
