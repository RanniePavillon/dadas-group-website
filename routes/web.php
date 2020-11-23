<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;

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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/companies', function () {
    return view('companies');
});
Route::get('/career', function () {
    return view('career');
});
Route::get('/blogs', function () {
    return view('blogs');
});
Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/gallery-LagunaBranch', function () {
    return view('gallery-LagunaBranch');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/contact-us', 'App\Http\Controllers\ContactController@contact');


Route::post('/contact-us', 'App\Http\Controllers\ContactController@contactSubmit')->name('contact.submit');

/* administrator */
Route::get('/administrator', function () {
    return view('administrator');
});


Route::get('/adminDashboard', function () {
    return view('adminDashboard');
});

Route::get('/adminUserAccount', function () {
    return view('adminUserAccount');
});

Route::get('/adminGallery-LagunaBranch', function () {
    return view('adminGallery-LagunaBranch');
});

Route::get('/adminGallery-PangasinanBranch', function () {
    return view('adminGallery-PangasinanBranch');
});

Route::get('/adminGallery-ParañaqueBranch', function () {
    return view('adminGallery-ParañaqueBranch');
});

Route::get('/adminGallery-Phase4Branch', function () {
    return view('adminGallery-Phase4Branch');
});

Route::get('/adminGallery-PasigBranch', function () {
    return view('adminGallery-PasigBranch');
});

Route::get('/adminGallery-TaguigBranch', function () {
    return view('adminGallery-TaguigBranch');
});

Route::get('/adminGallery-videos', function () {
    return view('adminGallery-videos');
});

/* administrator */

//LOGIN
Route::post('/get/login/user', 'App\Http\Controllers\LoginController@login');



