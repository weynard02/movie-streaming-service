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
    <br><br>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($movies as $i)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/'.$i->image) }}" class="card-img-top" height=400>
                <div class="card-body">
                    <h5 class="card-title">{{ $i->name }}</h5>
                    <p class="card-text">{{ $i->studio }}</p>
                    <form action='/admin/{{$i->id}}' method="post" enctype="multipart/form-data">
                        @csrf
                        @method('delete')
                        <a href="#" class="btn btn-primary">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection