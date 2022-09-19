@extends('layouts.Layout')
@section('title', 'Contact Us')


@section('content')

<div class="imgdiv  justify-content-center">
    <img src="{{ asset('Images/istockphoto-1350717417-170667a.jpg') }}" alt="Operator on call" class="cntImg shadow-lg ">
    <div class="container mt-5 my-5">
        <div class="form form-control align-items-center bg-light py-5 rounded justify-content-between mb-5">
            <h1 class="text-center font-weight-bold text-primary">How to Find Us</h1>
            <p class="mx-5 form-control-lg w-70 fs-6">If you have any questions, just fill in the contact form, and we will answer you shortly. 
                If you are living nearby, come visit <span class="badge bg-primary ">ME</span> in a comfortable office. We are the industry 
                standard for data recovery. We also have a no-data, no-charge guarantee, so we stand behind the work we do. When you're 
                ready to experience the best, feel free to fill out the form below to get started on your free, customized quote.
            </p>
            

            <div class="container overflow-hidden text-center">
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

            <div class="container overflow-hidden text-center">
                <h1 class="text-center font-weight-bold text-primary pb-3">Help & Support Center</h1>
                <div class="row g-3 container px-3 text-center pb-3">
                    <div class="col form-control mx-2">
                        <h3 class="mx-3 formGroupExampleInput mb-0 pt-2 text-primary">Headquarters</h3>
                        <p class="mx-2 form-control-sm ">9863 - 9867 MILL ROAD, CEMENT, MG09 99HT.<br/>
                            Telephone <span class="text-decoration-underline">+1 800 603 6035</span><br/>
                            E-mail: <span class="text-info">mail@demolink.org</span> 
                        </p>
                    </div>
                    <div class="col form-control mx-2">
                        <h3 class="mx-3 formGroupExampleInput mb-0 pt-2 text-primary">Support Centre</h3>
                        <p class="mx-2 form-control-sm ">9863 - 9867 MILL ROAD, CEMENT, MG09 99HT.<br/>
                            Telephone <span class="text-decoration-underline">+1 800 603 6035</span><br/>
                            E-mail: <span class="text-info">mail@demolink.org</span> 
                        </p>
                    </div>
                </div>
            </div>
        </div>

</div>
<div class="imgdiv  justify-content-center iiip">
    <div class="container mt-5 my-5 pt-3">
        <h1 class="text-center font-weight-bold text-primary py-4">Develop Experiences</h1>
        <div class="container row pb-3 g-3 align-items-center pb-5">
            <div class="align-item-center col mx-4 pt-3 ">
                <div class="card cntCrd h-100" style="width: 18rem;">
                    <img src="{{ asset('Images/formSvg.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Submitted A Form?</h5>
                    <p class="card-text">If you would like to edit the form you sent to The-Portfolio Support Team, click the button</p>
                    <a href="#" class="btn btn-secondary">It's here</a>
                    </div>
                </div>
                
            </div>
            <div class="align-item-center col mx-4 ">
                <div class="card cntCrd h-100" style="width: 18rem;">
                    <img src="{{ asset('Images/pipusvg.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">What others said</h5>
                    <p class="card-text">Lot's of forms have been recieved from our clients around the world. Read through their experiences.</p>
                    <a href="{{ route('Contact.display') }}" class="btn btn-secondary">See More</a>
                    </div>
                </div>
            </div>
            <div class="align-item-center col mx-4 ">
                <div class="card cntCrd h-75" style="width: 18rem;">
                    <img src="{{ asset('Images/editsvg (copy).jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Learn More</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit readylorem binance  minima deserunt neque.</p>
                    <a href="{{ route('home.about') }}" class="btn btn-secondary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>      
</div>
       
            
    

    
@endsection