@extends('layouts.Layout')
@section('title', 'Home Edit')


@section('content')
<div class="container">
    <h1>Hello edit!!</h1>
    <form action="{{ route('admin.create') }}" method="POST" class="form-group">
        @csrf
        <div class="form-group">  
            <label for="Title" class="form-label fs-5">Title</label>
            <input type="text" name="title" class="form-control" id="Title" >
        </div>
        <div class="form-group">
            <label for="Content" class="form-label fs-5">Content</label>
            <textarea type="text" rows="5" name="content" class="form-control" id="Content"></textarea>
        </div>
        <div class="form-group">
            <label for="Img" class="form-label fs-5">Change Image</label>
            <input type="url" name="image" class="form-control" id="Img">
        </div>
        <div class="form-group">
            <input type="submit" value="Save Changes" class="form-control btn btn-primary btn-block my-3 btn-lg">
        </div>
    </form>
</div>
   
@endsection