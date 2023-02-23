<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Admin\AdminController;




Route::group(['prefix' => 'contact'], function(){
    Route::controller(SupportController::class)->group(function(){
        Route::get('/contact/display', 'contactList')->name('contact.display');
        Route::get('/contact/details/{id}', 'contactDetail')->name('contact.details');
    });
});
Route::group(['prefix' => 'admin'], function(){
    Route::controller(AdminController::class)->group(function(){
        Route::get('', 'index')->name('admin.index');
        Route::get('/add', 'add')->name('admin.add');
        Route::post('/banner/submit-add', 'create')->name('admin.create');
        Route::get('/edit/{id}', 'edit')->name('admin.edit');
        Route::put('/update/{id}', 'update')->name('admin.update');
        Route::delete('/{id}', 'destroy')->name('admin.delete');
        Route::get('/Aboutpage', 'addAboutPage')->name('admin.add-about');
        Route::post('/About/about-add-feature', 'createAboutPage')->name('admin-about.create');
        Route::get('/Aboutpage/about-add-feature/edit/{id}', 'editAboutPage')->name('admin-about.edit'); 
        Route::put('/Aboutpage/about-add-feature/edit/update/{id}', 'updateAboutPage')->name('admin-about.update');
        Route::delete('/destroy-feature/{id}', 'destroyAboutPage')->name('admin-about.delete');

    });
});


