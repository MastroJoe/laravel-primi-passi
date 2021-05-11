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

// links menu
Route::get('/UNO', function () {
    return view('UNO');
});

Route::get('/DUE', function () {
    return view('DUE');
});

Route::get('/TRE', function () {
    return view('TRE');
});

Route::get('/QUATTRO', function () {
    return view('QUATTRO');
});

Route::get('/CINQUE', function () {
    return view('CINQUE');
});
