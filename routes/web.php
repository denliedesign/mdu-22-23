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
    return view('welcome-combo');
});

Route::get('/summit', function () {
    return view('/summit');
});

Route::get('/welcome', function () {
    return view('/welcome');
});

Route::get('/aboutus', function () {
    return view('/aboutus');
});
Route::get('/fall', function () {
    return view('/fall');
});
Route::get('/alumni', function () {
    return view('/alumni');
});
