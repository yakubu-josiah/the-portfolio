@extends('layouts.Layout')
@section('title', 'Homepage')


@section('content')
    <div class="wrap" style="background-image: url({{ $home->image }})">
        <div class="section">
            <h2 class="fw-bolder" style="font-family: 'Tangerine', serif; font-size: 4rem;">
                {{ $home->title }}
            </h2>
            <p class="fw-semibold fs-6 font-monospace">
                {{ $home->content }}
            </p>         
            <a href="{{ route('admin.index') }}" class="btn btn-sm align-items-center btn-light px-3 rounded fs-6">Admin Section</a>
        </div>
        
    </div>
   
@endsection