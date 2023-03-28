@extends('master')
@section('content')
<h1 align=center> Edit Movie </h1>
<form action="/admin/{{$movie->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="name" placeholder="Your title movie" value="{{$movie->name}}">
        @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Studio</label>
        <input type="text" class="form-control" name="studio" placeholder="Universal Studio..." value="{{$movie->studio}}">
        @error('studio')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Link</label>
        <input type="text" class="form-control" name="link" placeholder="Youtube link (blm punya server besar :( )" value="{{$movie->link}}">
        @error('link')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Release Date</label>
            <input type="date" class="form-control" name="release_date" value="{{$movie->release_date}}">
            @error('release_date')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label">Thumbnail</label>
            <input type="file" class="form-control" name="image" value="{{$movie->image}}">
            @error('image')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <br>
    <div class="mb-3 form-check">
        <input type="hidden" name="paid" value='0'>
        <input type="checkbox" class="form-check-input" name="paid" value="{{$movie->paid}}">
        <label class="form-check-label">Paid Movie?</label>
        @error('paid')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Tags</label>
        <input type="text" class="form-control" name="tags" placeholder="hello,my,world" value="{{$movie->tags}}">
    </div>
    <br>
    <a href="./" class="btn btn-danger">&lt; Back</a>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection