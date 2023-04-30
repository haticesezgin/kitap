<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('front.homepage');
});
Route::get('/post', function () {
    return view('front.website.post');
});
Route::get('/about', function () {
    return view('front.website.about');
});
Route::get('/category', function () {
    return view('front.website.category');
});
Route::get('/contact', function () {
    return view('front.website.contact');
});
Route::get('/yazarlar', function () {
    return view('front.website.yazarlar');
});


Route::get('/login', function () {
    return view('Login.login');
});



