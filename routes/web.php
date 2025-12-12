<?php

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

// Landing Page / Homepage
Route::get('/', function () {
    return view('landing');
})->name('home');

// Products and Services Page
Route::get('/products', function () {
    return view('products');
})->name('products');

// About Us Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact Us Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
