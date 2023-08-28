<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import model Books
use App\Models\Books;
use App\Http\Requests\BookPostRequest;

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

    public function index(Request $request)
    {
        // return index view with bookData response
        // return view('index', ["data" => $this->bookData]);
        $books = Books::all();

        // if has search
        if ($request->has('search')) {
            // get search value
            $search = $request->search;
            // search by title or author or publisher or category or subjects or desc
            $books = Books::where('title', 'LIKE', '%' . $search . '%')
                ->orWhere('author', 'LIKE', '%' . $search . '%')
                ->orWhere('publisher', 'LIKE', '%' . $search . '%')
                ->orWhere('category', 'LIKE', '%' . $search . '%')
                ->orWhere('subjects', 'LIKE', '%' . $search . '%')
                ->orWhere('desc', 'LIKE', '%' . $search . '%')
                ->paginate(12);
            // $books = Books::where('title', 'LIKE', '%' . $search . '%')->paginate(12);
        } else {
            // get all data
            $books = Books::paginate(12);
        }

        // change order into DESC
        // $books = Books::orderBy('id', 'ASC')->get();
        // add pagination 10 data per page
        // $books = Books::paginate(12);
        return view('HomePage/index')->with('bookData', $books);
    }

    public function show($id)
    {
        // return view('detail', ["data" => $this->bookData[$id]]);
        // get books by id
        $books = Books::find($id);
        return view('HomePage/detail', ["book" => $books]);
    }

    public function create()
    {
        return view('HomePage/create');
    }

    // public function store(Request $request)
    public function store(BookPostRequest $request)
    {
        // add data to databases using fillable
        $books = new Books;
        // filed isbn, title, author, image_path, publisher, category, page, language, publish_date, subjects, desc
        // $books->isbn = $request->isbn;
        // $books->title = $request->title;
        // $books->author = $request->author;
        // $books->image_path = $request->image_path;
        // $books->publisher = $request->publisher;
        // $books->category = $request->category;
        // $books->page = $request->page;
        // $books->language = $request->language;
        // $books->publish_date = $request->publish_date;
        // $books->subjects = $request->subjects;
        // $books->desc = $request->desc;

        $validated = $request->validated();
        // check error validated
        // dd($validated);
        $books->create($validated);
        // $books->save();
        return redirect()->route('books.index');

        // return redirect('/books');
    }


    public function edit(int $id)
    {

        $books = Books::find($id);
        return view('HomePage/edit', ["book" => $books]);
    }

    // create method update
    public function update(Request $request, int $id)
    {
        $books = Books::find($id);
        // dd([$request, $books]);
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
        return redirect()->route('book.show', $id);
    }

    public function deleteConfirm(int $id)
    {
        $books = Books::find($id);
        return view('HomePage/confirm', ["book" => $books]);
    }

    // Create destroy method for book
    public function destroy(int $id)
    {
        $books = Books::find($id);
        $books->delete();
        return redirect()->route('books.index');
    }
}
