@extends('master')
@section('content')
<div class="container">
    <div class="row">
        @foreach($movies as $i)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset($i->image) }}" class="card-img-top" height=400>
                <div class="card-body">
                    <h5 class="card-title">{{ $i->name }}</h5>
                    <p class="card-text">{{ $i->studio }}</p>
                    <ul class="list-group list-group-flush">
                        @foreach($i->artist as $a)
                        <li class="list-group-item">{{ $a->name }}</li>
                        @endforeach
                    </ul>
                    <a href="#" class="btn btn-primary">Edit</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection