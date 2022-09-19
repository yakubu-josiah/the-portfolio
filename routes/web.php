<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SupportController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class, 'home'])
    ->name('home.index');
Route::get('/about', [HomeController::class, 'about'])
    ->name('home.about');

Route::get('/Contact/display', [SupportController::class, 'contactList'])
    ->name('Contact.display');
Route::get('/Contact/details/{id}', [SupportController::class, 'contactDetail'])
    ->name('Contact.details');


Route::resource('Contact', ContactController::class);


Route::get('/Admin', [AdminController::class, 'index'])
    ->name('admin.index');
Route::get('/Admin/add', [AdminController::class, 'add'])
    ->name('admin.add');
Route::post('/Admin/banner/submit-add', [AdminController::class, 'create'])
    ->name('admin.create');
Route::get('/Admin/edit/{id}', [AdminController::class, 'edit'])
    ->name('admin.edit');
Route::put('Admin/update/{id}', [AdminController::class, 'update'])
    ->name('admin.update');
Route::delete('Admin/{id}', [AdminController::class, 'destroy'])
    ->name('admin.delete');

Route::get('/Admin/Aboutpage/', [AdminController::class, 'addAboutPage'])
    ->name('admin.add-about');
Route::post('/Admin/About/about-add-feature', [AdminController::class, 'createAboutPage'])
    ->name('admin-about.create');
Route::get('/Admin/Aboutpage/about-add-feature/edit/{id}', [AdminController::class, 'editAboutPage'])
    ->name('admin-about.edit'); 
Route::put('/Admin/Aboutpage/about-add-feature/edit/update/{id}', [AdminController::class, 'updateAboutPage'])
    ->name('admin-about.update');
Route::delete('/Admin/destroy-feature/{id}', [AdminController::class, 'destroyAboutPage'])
    ->name('admin-about.delete');

