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

Route::get('/', function () {
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

Route::get('gallery', function () {
    return view('gallery');
});

Route::get('experiences', function () {
    return view('experiences');
});

Route::get('achievements', function () {
    return view('achievements');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('tampilkrs', function () {
    return view('tampilkrs');
});

Route::get('app', function () {
    return view('app');
});