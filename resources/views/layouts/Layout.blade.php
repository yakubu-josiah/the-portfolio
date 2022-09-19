<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
    <title>The Portfolio Web - @yield('title')</title>
</head>
<body>
    <div class="imgHome d-flex flex-column flex-md-row align-items-center p-3 px-md-4 border-bottom shadow-sm fixed-top">
        <a class="my-0 me-auto opacity-50 mx-5"  href="{{ route('home.index') }}"><img src="{{ asset('Images/logo.png') }}" width="170" height="40" alt="My Logo"></a>
        <nav class="my-2 my-me-0 me-3 "> 
            <a href={{ route('home.index') }} >Home</a>
            <a href={{ route('Contact.index') }} >Contact</a>
            <a href={{ route('home.about') }} >About Us</a>
        </nav>
    </div>
    @if (session('status'))
        <div class="alert alert-success h-3">
            {{ session('status')}}
        </div>
    @endif
    @yield('content')

</body>
</html>