@extends('layouts.Layout')
@section('title', 'Editors View')



@section('content')
<div class="container">
    <h1>You can Edit The About Page here</h1>
    <form action="{{ route('admin-about.update', [$about->id]) }}" method="POST" class="form-group">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $about->id }}">
        <div class="form-group">  
            <label for="Head" class="form-label fs-5">Header</label>
            <input type="text" name="head" class="form-control" id="Head" value="{{ $about->head }}">
        </div>
        <div class="form-group">
            <label for="Text" class="form-label fs-5">Texts on Page</label>
            <textarea type="text" rows="5" name="text" class="form-control" id="text" >{{ $about->text }}</textarea>
        </div>
        <div class="form-group">
            <label for="Img" class="form-label fs-5">Change Head Image </label>
            <input type="url" name="image" class="form-control" id="Img" value="{{ $about->image }}">
        </div>
        <div class="form-group">
            <label for="Imgs" class="form-label fs-5">Change Body Image </label>
            <input type="url" name="images" class="form-control" id="Imgs" value="{{ $about->images }}">
        </div>
        <div class="form-group">
            <input type="submit" value="Update Changes" class="form-control btn btn-primary btn-block my-3 btn-lg">
        </div>
    </form>
</div>
@endsection