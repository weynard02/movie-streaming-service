@extends('master')
@section('content')
<div class="container">
    <h1 align=center> Add Genre </h1>
    @if(session('errormes'))
    <div class="alert alert-danger">
			{{ session('errormes') }}
		</div>
    @endif
    <form action="/admin/genre/{{$movie->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Genre</label>
            <select class="form-select form-control" name="genre_id">
                <option selected value="">-</option>
                @foreach ($genres as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
            @error('genre_id')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <a href="/admin/{{$movie->id}}" class="btn btn-danger">&lt; Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection