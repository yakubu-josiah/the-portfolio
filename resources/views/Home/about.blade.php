@extends('layouts.Layout')
@section('title', 'About Us')

@section('content')
    <div class="  my-0">
        <img src="{{ $about->image }}" alt="construction on" class="abtImg shadow-lg mb-4">
        <div class="container">
            <div class="container">
                <h1 class="text-center mt-3 mb-5 fw-bold">{{ $about->head}}</h1>
                <div class="container overflow-hidden mt-4 ">
                    <div class="row g-3 container px-3 text-center fw-light pb-3">
                        <div class="col w-50">
                            <img src="{{ $about->images }}" alt="construction" class="d-inline img-fluid h-100 rounded">
                        </div>
                        <div class="col p-5 bg-light ">
                            <p class=" fs-6">{{ $about->text }}</p>
                            <p class=" fs-6">{{ $about->text }}</p>  
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="container overflow-hidden text-center my-5">
                <div class="row g-2 container px-5 text-center pb-3">
                    <div class="input-group col mx-2 mb-md-3 mb-sm-3 ">
                        <input type="text" class="form-control col-auto" placeholder="you@email.com" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-sm btn-secondary" type="button" id="button-addon2">Subscribe to our Newsletter</button>
                    </div>
                    <div class="input-group col mx-2 mb-md-3 mb-sm-3 d-block">
                        <a href="{{ route('Contact.create') }}"><input type="submit" class="btn btn-secondary col-auto w-100" value="Request For A Form"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
@endsection