<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import model Books
use App\Models\Books;

class BookController extends Controller
{

    private $bookData = [
        [
            'id' => 0,
            'title' => 'Learn PHP',
            'short_description' => 'This book about guide to master PHP web programming'
        ],
        [
            'id' => 1,
            'title' => 'Introduction to machine learning',
            'short_description' => 'Mastering the machine learning framework for the expert'
        ],
        [
            'id' => 2,
            'title' => 'Gamedev with Python',
            'short_description' => 'Practical guide for game development using Pygame !'
        ]
    ];
    // create method called index that will return index view

    public function index()
    {
        // return index view with bookData response
        // return view('index', ["data" => $this->bookData]);
        $books = Books::all();
        // add pagination 10 data per page
        $books = Books::paginate(10);
        return view('HomePage/index')->with('bookData', $books);
    }

    public function show($id)
    {
        // return view('detail', ["data" => $this->bookData[$id]]);
        // get books by id
        $books = Books::find($id);
        return view('HomePage/detail', ["book" => $books]);
    }

    public function store(Request $request)
    {
        // add data to databases using fillable
        $books = new Books;
        // filed isbn, title, author, image_path, publisher, category, page, language, publish_date, subjects, desc
        $books->isbn = $request->isbn;
        $books->title = $request->title;
        $books->author = $request->author;
        $books->image_path = $request->image_path;
        $books->publisher = $request->publisher;
        $books->category = $request->category;
        $books->page = $request->page;
        $books->language = $request->language;
        $books->publish_date = $request->publish_date;
        $books->subjects = $request->subjects;
        $books->desc = $request->desc;
        $books->save();
        return redirect('/books');
    }
}
