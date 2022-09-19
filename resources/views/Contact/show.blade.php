@extends('layouts.Layout')
@section('title', $forms->subject)

@section('content')
    <div class="container mt-4 bg-light px-5">
        <h1 class="text-center text-primary fw-3 ">You Submitted This Form</h1>
        <h5 class="fs-3 text-secondary fw-3">{{ $forms->subject }}</h5>
        <p>{{ $forms->message }}</p>
        <p class="pt_t text-success"><i>This complaint was logged {{ $forms->created_at->diffForHumans() }}!! <span class="mx-5 px-5 text-secondary fw-light">~written by {{$forms->user}}</i></p>
        @if (now()->diffInMinutes($forms->created_at) < 5)
        <div class="alert alert-info">A New Complaint from you to The Portfolio Support Team!!</span></div>        
        @endif
    </div>
@endsection