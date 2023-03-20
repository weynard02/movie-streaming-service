@extends('master')
@section('content')
<div class="container">
    <h1 align=center> Add Cast </h1>
    @if(session('errormes'))
    <div class="alert alert-danger">
			{{ session('errormes') }}
		</div>
    @endif
    <form action="/admin/artist/{{$movie->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Artist</label>
            <select class="form-select form-control" name="artist_id" >
                <option selected value="">-</option>
                @foreach ($artists as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
            @error('artist_id')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br><hr>
    <form action="/admin/artist/{{$movie->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Other Artist if not on the list above</label>
            <input type="text" class="form-control" name="artist" placeholder="Make sure your cast not on the list" value="{{ old('artist')}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Birthdate</label>
            <input type="date" class="form-control" name="date"value="{{ old('date')}}">
        </div>
        <br>
        
        <a href="/admin/{{$movie->id}}" class="btn btn-danger">&lt; Back</a>
        <button type="submit" class="btn btn-success">Add New</button>
        <br>
        @error('artist')
            <div class="alert alert-danger">
                {{ $message }}
        @enderror
        @error('date')
            <div class="alert alert-danger">
                {{ $message }}
        @enderror
    </form>
</div>
@endsection