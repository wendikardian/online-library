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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login screen');
});
Route::get('/register', function () {
    return view('Register screen');
});

Route::get('/books', function () {
    echo 'Index';
});
Route::get('/books/detail', function () {
    echo 'Detail Book';
});


Route::get('/second', function () {
    $data = [
        1, 2, 'three', ['james', 67, 4.5], 'five', null
    ];
    return $data;
});
