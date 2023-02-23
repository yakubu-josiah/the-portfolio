<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    
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
