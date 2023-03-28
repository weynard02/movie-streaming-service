<?php
	$link = $movie->link;
	$videoId = substr(parse_url($link, PHP_URL_QUERY), 2);
	$embedUrl = "https://www.youtube.com/embed/$videoId";
?>
@extends('master')
@section('content')
<div class="container">
	<div class="embed-responsive embed-responsive-16by9">
		<iframe width="1280" height="720" class="embed-responsive-item" src="{{ $embedUrl }}"></iframe>
	</div>
	<div class="card-body">
		<h1 class="card-title">{{ $movie->name }}</h1>
		<p class="card-text">{{ $movie->studio }} </p>
		<?php
			$date=date('d/m/Y', strtotime($movie->release_date)); 
		?>
		<hr>
		<p class="card-text"><h5>Release Date:</h5>{{ $date }} </p>
		<hr>
		<p class="card-text"><h5>Tags: </h5>{{ $movie->tags }} </p>
		
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
						</li>
					@endforeach
				</ul>
				<ul class="list-group col-md-6">
					<h2>Genres:</h2>
					@foreach($movie->genre as $genres)
						<li class="list-group-item d-flex justify-content-between align-items-start">
							<div class="ms-2 me-auto">
							{{$genres->name}}
							</div>
						</li>
					@endforeach
				</ul>
			</div>
		</p>
	</div>
	<a href="./" class="btn btn-outline-secondary">&lt;&lt; Back</a>
</div>
@endsection