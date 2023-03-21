@extends('master')
@section('content')
<div class="container">
    <h1 align=center> Edit Artist </h1>
    <form action="/admin/artist/{{$artist->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name"  value="{{ $artist->name }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Birthdate</label>
            <input type="date" class="form-control" name="date" value="{{ $artist->birthdate }}">
        </div>
        <br>
        
        <a href="/admin/artist" class="btn btn-danger">&lt; Back</a>
        <button type="submit" class="btn btn-success">Update</button>
        @error('artist')
            <div class="alert alert-danger">
                {{ $message }}
        @enderror
        @error('birthdate')
            <div class="alert alert-danger">
                {{ $message }}
        @enderror
    </form>
</div>
@endsection