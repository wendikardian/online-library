<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\BookControllerAPI;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/books', [BookControllerAPI::class, 'index']);
Route::post('/books', [BookControllerAPI::class, 'store']);
Route::get('/books/{id}', [BookControllerAPI::class, 'show']);
Route::put('/books/{id}', [BookControllerAPI::class, 'update']);
Route::delete('/books/{id}', [BookControllerAPI::class, 'destroy']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



