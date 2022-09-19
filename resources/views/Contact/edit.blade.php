@extends('layouts.Layout')
@section('title', 'EEE')



@section('content')
<div class="container d-flex flex-column flex-md-row align-items-center w-75 my-4">
    <div class="row gx-5">
        <div class="Cntc container mt-5 form-control bg-light w-75 mh-70 mb-5 col-2 shadow-lg p-3 mb-5 bg-body rounded">
            <h2 class="text-center mb-5 h2 text-danger pt-5">CONTACT US</h2>
            <form action="{{ route('Contact.update', [$form->id]) }}" method="POST" class="row g-3 mb-3 w-60 px-5">
                @csrf
                @method('PUT')
                <div class="col-md-6">  
                    <label for="inputFirstName" class="form-label fs-5">First Name</label>
                    <input type="name" name="name" class="form-control" id="inputFirstName" placeholder="Jane" value="{{ $form->name }}">
                </div>
                <div class="col-md-6">
                    <label for="inputLastName" class="form-label fs-5">Username</label>
                    <input type="name" name="user" class="form-control" id="inputLastName" placeholder="Jane001"  value="{{ $form->user }}">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label fs-5">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="your@email.com" value="{{ $form->email }}">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label fs-5">Your city</label>
                    <input type="text" name="city" class="form-control" id="inputCity" placeholder="Lagos" value="{{ $form->city }}">
                </div>
                <div class="col-12">
                    <label for="inputSubject" class="form-label fs-5">Subject</label>
                    <input type="text" name="subject" class="form-control" id="inputSubject" value="{{ $form->subject }}">
                </div>
                <div class="form-group">
                    <label for="content" class="form-label fs-5">Description</label>
                    <div><textarea rows="5" class="form-control" name="message" placeholder="Write here...">{{ $form->message }}</textarea></div>
                </div>
                <div class="form-group justify-content-center">
                    <input type="submit" value="Submit" class="btn btn-sm w-50 my-2 align-items-center btn-danger p-2 rounded fs-5">
                </div>
            </form>
        </div>
@endsection