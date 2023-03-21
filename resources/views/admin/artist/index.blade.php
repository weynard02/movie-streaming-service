@extends('master')
@section('content')
<div class="container">
    @if (session('pesan'))
		<div class="alert alert-success">
			{{ session('pesan') }}
		</div>
	@endif
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach($artists as $item)
        <div class="col">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $item->name }}</h5>
                <p class="card-text">Birthdate: {{ $item->birthdate }}</p>
                <form action='/admin/artist/{{$item->id}}' method="post" enctype="multipart/form-data">
                    @csrf
                    @method('delete')
                    <a href="/admin/artist/{{$item->id}}/edit" class="btn btn-primary">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
            </div>
        </div>
        @endforeach
    </div>
    <br>
    <a href="./" class="btn btn-outline-secondary">&lt;&lt; Back</a>
</div>
@endsection