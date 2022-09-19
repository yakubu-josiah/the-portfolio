@extends('layouts.Layout')
@section('title', 'Editors View')



@section('content')
<div class="container">
    <h1>You can Edit The Homepage here</h1>
    <form action="{{ route('admin.update', [$home->id]) }}" method="POST" class="form-group">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $home->id }}">
        <div class="form-group">  
            <label for="Title" class="form-label fs-5">Title</label>
            <input type="text" name="title" class="form-control" id="Title" value="{{ $home->title }}">
        </div>
        <div class="form-group">
            <label for="Content" class="form-label fs-5">Content</label>
            <textarea type="text" rows="5" name="content" class="form-control" id="content" >{{ $home->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="Img" class="form-label fs-5">Change Image</label>
            <input type="url" name="image" class="form-control" id="Img" value="{{ $home->image }}">
        </div>
        <div class="form-group">
            <input type="submit" value="Update Changes" class="form-control btn btn-primary btn-block my-3 btn-lg">
        </div>
    </form>
</div>
@endsection