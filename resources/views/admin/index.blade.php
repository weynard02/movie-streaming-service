@extends('master')
@section('content')
<div class="container">
    @if (session('pesan'))
		<div class="alert alert-success">
			{{ session('pesan') }}
		</div>
	@endif
    <div class="row">
        <a class="btn btn-info" href="/admin/create"> Add Movie </a>
    </div>
    <br>
    <div class="row">
        <a class="btn btn-warning" href="/admin/artist"> Artists Menu </a>
    </div>
    <br><br>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($movies as $i)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/'.$i->image) }}" alt="{{ asset('images/alt.png') }}" class="card-img-top" height=400>
                <div class="card-body">
                    <h5 class="card-title">{{ $i->name }}</h5>
                    <p class="card-text">{{ $i->studio }}</p>
                    <form action='/admin/{{$i->id}}' method="post" enctype="multipart/form-data">
                        @csrf
                        @method('delete')
                        <a href="/admin/{{$i->id}}" class="btn btn-primary">View</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection