@extends('layouts.Layout')
@section('title', 'About Page')


@section('content')
<div class="container">
    <h1>Hello edit!!</h1>
    <form action="{{ route('admin-about.create') }}" method="POST" class="form-group">
        @csrf
        <div class="form-group">  
            <label for="Header" class="form-label fs-5">Header</label>
            <input type="text" name="head" class="form-control" id="Header" >
        </div>
        <div class="form-group">
            <label for="Text" class="form-label fs-5">Text on Page</label>
            <textarea type="text" rows="5" name="text" class="form-control" id="Text"></textarea>
        </div>
        <div class="form-group">
            <label for="Img" class="form-label fs-5">Change Head Image</label>
            <input type="url" name="image" class="form-control" id="Img">
        </div>
        <div class="form-group">
            <label for="Imgs" class="form-label fs-5">Change Body Image </label>
            <input type="url" name="images" class="form-control" id="Imgs">
        </div>
        <div class="form-group">
            <input type="submit" value="Save Changes" class="form-control btn btn-primary btn-block my-3 btn-lg">
        </div>
    </form>
</div>
   
@endsection