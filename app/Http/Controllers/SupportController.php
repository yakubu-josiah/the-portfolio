<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    // public function __invoke()
    // {
        
    // }
    public function contactList(){
        $getContact = ContactForm::getForAdmin();
        return view('Contact.display', ['form' => $getContact]);
    }

    public function contactDetail($id){
        $single = ContactForm::findOrFail($id);
        $getContact = ContactForm::getForAdmin();
        return view('Contact.display-details', [
            'single' => $single,
            'form' => $getContact
        ]);
    }
}
