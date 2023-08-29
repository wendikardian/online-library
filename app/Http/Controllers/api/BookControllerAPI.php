<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Books;
// requestpost book
use App\Http\Requests\BookPostRequest;

class BookControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // get data book paginate 15
        $books = Books::paginate(15);
        // if theres no book
        if (!$books) {
            // return response error
            return response()->json([
                'status' => 'error',
                'message' => 'No books found'
            ], 404);
        } else {
            // return response success
            return response()->json([
                'status' => 'success',
                'data' => $books
            ], 200);
        }
        // get data from Books and Response it as JSON and check if there error or not

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookPostRequest $request)
    {
        //
        // get data from request
        $data = $request->validated();
        // create new book
        $book = Books::create($data);
        // if theres no book
        if (!$book) {
            // return response error
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create book'
            ], 400);
        } else {
            // return response success
            return response()->json([
                'status' => 'success',
                'data' => $book
            ], 201);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        // get detail book by id using eugler loading
        $book = Books::with('author')->find($id);
        // if theres no book
        if (!$book) {
            // return response error
            return response()->json([
                'status' => 'error',
                'message' => 'Book not found'
            ], 404);
        } else {
            // return response success
            return response()->json([
                'status' => 'success',
                'data' => $book
            ], 200);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookPostRequest $request, string $id)
    {
        // update Book using BookPostRequest
        // ??
        // get data from request
        $data = $request->validated();
        // get book by id
        $book = Books::find($id);
        // if theres no book
        if (!$book) {
            // return response error
            return response()->json([
                'status' => 'error',
                'message' => 'Book not found'
            ], 404);
        } else {
            // update book
            $book->update($data);
            // return response success
            return response()->json([
                'status' => 'success',
                'data' => $book
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // delete book
        // get book by id
        $book = Books::find($id);
        // if theres no book
        if (!$book) {
            // return response error
            return response()->json([
                'status' => 'error',
                'message' => 'Book not found'
            ], 404);
        } else {
            // delete book
            $book->delete();
            // return response success
            return response()->json([
                'status' => 'success',
                'message' => 'Book deleted'
            ], 200);
        }
    }
}
