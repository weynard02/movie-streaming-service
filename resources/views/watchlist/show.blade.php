<?php
	$link = $movie->link;
	$videoId = substr(parse_url($link, PHP_URL_QUERY), 2);
	$embedUrl = "https://www.youtube.com/embed/$videoId";
?>
@extends('master')
@section('content')
<div class="container">
    @if (session('pesan'))
		<div class="alert alert-success">
			{{ session('pesan') }}
		</div>
	@endif
	<div class="card-body">
		<h1 class="card-title">{{ request }}</h1>
		<p class="card-text">{{ $movie->studio }} </p>
		<?php
			$date=date('d/m/Y', strtotime($movie->release_date)); 
		?>
		<hr>
		<p class="card-text"><h5>Release Date:</h5>{{ $date }} </p>
		<hr>
		<p class="card-text"><h5>Tags: </h5>{{ $movie->tags }} </p>
		
		<form action='/admin/{{$movie->id}}' method="post" enctype="multipart/form-data">
			@csrf
			@method('delete')
			<a href="/admin/{{$movie->id}}/edit" class="btn btn-primary">Edit</a> 
			<button type="submit" class="btn btn-danger">Delete</button>
		</form>
		<p class="card-text"> 
			<div class="row">
				<ul class="list-group col-md-6">
					<h2>Casts:</h2>
					@foreach($movie->artist as $cast)
						<li class="list-group-item d-flex justify-content-between align-items-start">
							<div class="ms-2 me-auto">
							<div class="fw-bold">{{$cast->name}}</div>
							Birthdate:
							<?php
								$date=date('d/m/Y', strtotime($cast->birthdate)); 
							?>
							{{$date}}
							</div>
							<form action='/admin/artist/{{$movie->id}}/{{$cast->id}}' method="post" enctype="multipart/form-data">
								@csrf
								@method('delete')
								<button type="submit" class="btn btn-danger btn-sm">Remove</button>
							</form> 
						</li>
					@endforeach
					<li class="list-group-item d-flex justify-content-between align-items-start">
						<div class="ms-2 me-auto">
							<a href="/admin/artist/{{ $movie->id }}" class="btn btn-outline-primary">&#43; Add Cast</a>
						</div>
					</li>
				</ul>
				<ul class="list-group col-md-6">
					<h2>Genres:</h2>
					@foreach($movie->genre as $genres)
						<li class="list-group-item d-flex justify-content-between align-items-start">
							<div class="ms-2 me-auto">
							{{$genres->name}}
							</div>
							<form action='/admin/genre/{{$movie->id}}/{{$genres->id}}' method="post" enctype="multipart/form-data">
								@csrf
								@method('delete')
								<button type="submit" class="btn btn-danger btn-sm">Remove</button>
							</form>
						</li>
					@endforeach
					<li class="list-group-item">
						<div class="ms-2 me-auto">
							<a href="/admin/genre/{{ $movie->id }}" class="btn btn-outline-primary">&#43; Add Genre</a>
						</div>
					</li>
				</ul>
			</div>
		</p>
	</div>
	<a href="./" class="btn btn-outline-secondary">&lt;&lt; Back</a>
</div>
@endsection