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
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\FlightController;


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

Route::get('/collection', [UserController::class, 'collection']);
Route::get('/login', function () {
    return view('login screen');
});
Route::get('/register', function () {
    return view('Register screen');
});

Route::get('/blade', function () {
    return view('blade_example');
});

Route::get('/flight', [FlightController::class, 'index']);



// create route to '/' to controller BookController -> index
Route::get('/', [BookController::class, 'index']);

Route::get('/layout', function () {
    return view('layouts/child');
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

Route::get('/community', [CommunityController::class, 'index'])->name('community');


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

Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Route::get('/books/detail/{id}', [BookController::class, 'detail'])->name('detail-book');
Route::get('/books/{id}/delete', [BookController::class, 'deleteConfirm'])->name('book_confirm_delete');

// create another action like 'create', 'store', 'show', 'edit', 'update', 'destroy' for BookController
Route::get('/books/create', [BookController::class, 'create'])->name('book.create');
// to store
Route::post('/books', [BookController::class, 'store'])->name('book.store');
// to show
Route::get('/books/{id}', [BookController::class, 'show'])->name('book.show');
// to edit
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('book.edit');
// to update
Route::put('/books/{id}', [BookController::class, 'update'])->name('book.update');
// to destroy
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('book.destroy');
// add route to book_delete_confirm


// Route::get('/second', function () {
//     $data = [
//         1, 2, 'three', ['james', 67, 4.5], 'five', null
//     ];
//     return $data;
// });

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


// Example of verb route for Flights

// Refer to 'index' action
Route::get('/flights', [FlightController::class, 'index'])->name('flights.index');

// Refer to 'create' action
Route::get('/flights/create', [FlightController::class, 'create'])->name('flights.create');

// Refer to 'store' action
Route::post('/flights', [FlightController::class, 'store'])->name('flights.store');

// Refer to 'show' action
Route::get('/flights/{flight}', [FlightController::class, 'show'])->name('flights.show');

// Refer to 'edit' action
Route::get('/flights/{flight}/edit', [FlightController::class, 'edit'])->name('flights.edit');

// Refer to 'update' action
Route::put('/flights/{flight}', [FlightController::class, 'update'])->name('flights.update');

// Refer to 'destroy' action
Route::delete('/flights/{flight}', [FlightController::class, 'destroy'])->name('flights.destroy');
