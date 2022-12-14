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
    return view('menu');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/cs', function () {
    return view('cs');
});

Route::get('/toko', function () {
    return view('toko');
});
