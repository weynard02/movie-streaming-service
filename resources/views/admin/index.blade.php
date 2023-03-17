@extends('master')
@section('content')
<div class="container">
    @foreach($movies as $i)
    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset($i->image) }}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{ $i->name }}</h5>
                <p class="card-text">{{ $i->release_date }}</p>
                <a href="#" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection