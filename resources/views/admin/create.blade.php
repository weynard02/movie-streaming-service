@extends('master')
@section('content')
<h1 align=center> Add Movie </h1>
<form action="/admin" method="post" enctype="multipart/form-data">
@csrf
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="name" placeholder="Your title movie" value="{{old('name')}}">
        @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Studio</label>
        <input type="text" class="form-control" name="studio" placeholder="Universal Studio..." value="{{old('studio')}}">
        @error('studio')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Link</label>
        <input type="text" class="form-control" name="link" placeholder="Youtube link (blm punya server besar :( )" value="{{old('link')}}">
        @error('link')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Release Date</label>
            <input type="date" class="form-control" name="release_date" value="{{old('release_date')}}">
            @error('release_date')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label">Thumbnail</label>
            <input type="file" class="form-control" name="image" value="{{old('image')}}">
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
        <input type="checkbox" class="form-check-input" name="paid" value='1'>
        <label class="form-check-label">Paid Movie?</label>
        @error('paid')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Main Genre</label>
            <select class="form-select form-control" name="genre" >
                <option selected value="">-</option>
                @foreach ($genres as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
            @error('genre')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Tags</label>
        <input type="text" class="form-control" name="tags" placeholder="hello,my,world" value="{{old('tags')}}">
    </div>
    <br>
    <a href="./" class="btn btn-danger">&lt; Back</a>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection