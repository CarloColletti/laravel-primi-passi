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

    $title = "Hello Word";

    return view('home', compact('title'));
})->name('home');

Route::get('/about', function () {

    $title = "Hello Words";

    return view('about', compact('title'));
})->name('about');

Route::get('/shop', function () {

    $title = "Hello Wordss";

    return view('shop', compact('title'));
})->name('shop');

Route::get('/contacts', function () {

    $title = "Hello Wordsss";

    return view('contacts', compact('title'));
})->name('contacts');
