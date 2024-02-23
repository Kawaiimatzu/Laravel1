<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
})->name("home");

Route::get('/aboutus', function () {
    return view('aboutus');
})->name("aboutus");

Route::get('/services', function () {
    return view('services');
})->name("services");

Route::get('/contactus', function () {
    return view('contactus');
})->name("contactus");

Route::get('/login', function () {
    return view('login');
})->name("login");