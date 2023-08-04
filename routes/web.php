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

// import name space from controller
use App\Http\Controllers\UserController;


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
    $bookData = [
        [
            'id' => 1,
            'name' => 'Learn PHP',
        ],
        [
            'id' => 2,
            'name' => 'Introduction to machine learning',
        ],
    ];
    return $bookData;
});

Route::get('/books/detail/{id}', function ($id) {
    $bookData = [
        [
            'id' => 1,
            'name' => 'Learn PHP',
        ],
        [
            'id' => 2,
            'name' => 'Introduction to machine learning',
        ],
    ];
    return $bookData[$id]['name'];
});


Route::get('/second', function () {
    $data = [
        1, 2, 'three', ['james', 67, 4.5], 'five', null
    ];
    return $data;
});

// THE URI MUST BE FIELD

// Route::get('/user/{id}', function ($id) {
//     return 'user with id ' . $id;
// });

// Using router with controller
Route::get('/user/{id}', [UserController::class, 'show']);

// optional parameters

Route::get('/username/{name?}', function ($name = 'John') {
    return 'user with name ' . $name;
});

// More complex parameters

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'post with ' . $postId . ' comment ' . $commentId;
});
