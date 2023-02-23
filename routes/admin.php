<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupportController;



Route::group(['prefix' => 'contact'], function(){
    Route::controller(SupportController::class)->group(function(){
        Route::get('/contact/display', 'contactList')->name('contact.display');
        Route::get('/contact/details/{id}', 'contactDetail')->name('contact.details');
    });
});