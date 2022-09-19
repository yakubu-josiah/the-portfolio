<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreValidation;
use App\Models\ContactForm;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Contact.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated = $request->validated();
        $form = ContactForm::create($request->all());

        session()->flash('status', "Thanks your form is submitted!! We'll get back to you shortly!");
        return redirect()->route('Contact.show', [$form-> id]);
        // dd((int)request()->$form->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Contact.show', ['forms' => ContactForm::findOrFail($id)]);
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $form = ContactForm::findOrFail($id);
        $form->fill($request->all());
        $form->save();

        session()->flash('status', "Successfully updated!! We'll get back to you shortly.");
        return redirect()->route('Contact.display');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    

    public function __invoke()
    {
        // $form = ContactForm();
        
    }

    
}
