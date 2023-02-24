<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\AboutEdit;
use App\Models\ContactForm;
use App\Models\HomeEdit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $home = HomeEdit::first();
        return view('Home.index', 
            [
                'home' => $home,
            ]
        );
    }
    public function about()
    {
        $about = AboutEdit::first();
        return view('Home.about',
            [
                'about' => $about,
            ]
        );
    }



}
