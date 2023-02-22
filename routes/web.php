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
    $welcome = 'HELLO WORLD!';
    $places = ['mountain', 'sea', 'vulcan'];

    return view('home', compact('welcome', 'places'));
})->name('home');

Route::get('/mountain', function () {

    return view('mountain');
})->name('mountain');

Route::get('/sea', function () {

    return view('sea');
})->name('sea');

Route::get('/vulcan', function () {

    return view('vulcan');
})->name('vulcan');

Route::get('/climbing', function () {

    return view('climbing');
})->name('climbing');

Route::get('/diving', function () {

    return view('diving');
})->name('diving');

Route::get('/danger', function () {

    return view('danger');
})->name('danger');
