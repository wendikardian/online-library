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
use App\Http\Controllers\BookController;


// Route::get('/', function () {
//     // return view('hello', [
//     //     'name' => 'James',
//     //     'age' => 25,
//     //     'citizenship' => 'EN',
//     //     'siblings' => ['Robert', 'Natalia']
//     // ]);

//     // other options with 'with' Helper
//     // The code above and below will gave the same results
//     return view('hello')
//         ->with('name', 'James')
//         ->with('age', 25)
//         ->with('siblings', ['Robert', 'Natalia'])
//         ->with('citizenship', 'EN');
// });

Route::get('/login', function () {
    return view('login screen');
});
Route::get('/register', function () {
    return view('Register screen');
});

Route::get('/blade', function () {
    return view('blade_example');
});

// create route to '/' to controller BookController -> index
Route::get('/', [BookController::class, 'index']);

Route::get('/layout', function () {
    return view('layouts/child');
});

// Route::get('/books', function () {
//     $bookData = [
//         [
//             'id' => 1,
//             'name' => 'Learn PHP',
//         ],
//         [
//             'id' => 2,
//             'name' => 'Introduction to machine learning',
//         ],
//     ];
//     return $bookData;
// });

Route::get('/books', [BookController::class, 'index'])->name('books');

// Route::get('/books/detail/{id}', function ($id) {
//     $bookData = [
//         [
//             'id' => 1,
//             'name' => 'Learn PHP',
//         ],
//         [
//             'id' => 2,
//             'name' => 'Introduction to machine learning',
//         ],
//     ];
//     return $bookData[$id]['name'];
// });

Route::get('/books/detail/{id}', [BookController::class, 'detail'])->name('detail-book');

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
Route::get('/user/{id}', [UserController::class, 'show'])->name('detail-user');

// optional parameters

Route::get('/username/{name?}', function ($name = 'John') {
    return 'user with name ' . $name;
});

// More complex parameters

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'post with ' . $postId . ' comment ' . $commentId;
});
