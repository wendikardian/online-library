@extends('HomePage.layout')
@section('title', 'Create a Book')


@section('content')
<!-- add form to create a book -->
<div class="container">
    <h1>Add some book</h1>

    <div class="box-form">
        <form method="POST" action="{{ route('book.store') }}">
            <!-- create input for isbn, title, author, image_path, publisher, category, page, language, publish_date, subjects, desc -->
            @csrf
            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN">
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" maxlength="100" class="form-control" id="title" name="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" maxlength="100" class="form-control" id="author" name="author" placeholder="Author">
            </div>
            <div class="form-group">
                <label for="image_path">Image Path</label>
                <input type="text" class="form-control" id="image_path" name="image_path" placeholder="Image Path">
            </div>
            <div class="form-group">
                <label for="publisher">Publisher</label>
                <input type="text" maxlength="100" class="form-control" id="publisher" name="publisher" placeholder="Publisher">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" maxlength="100" class="form-control" id="category" name="category" placeholder="Category">
            </div>
            <div class="form-group">
                <label for="page">Page</label>
                <input type="number" class="form-control" id="page" name="page" placeholder="Page">
            </div>
            <div class="form-group">
                <label for="language">Language</label>
                <input type="text" maxlength="100" class="form-control" id="language" name="language" placeholder="Language">
            </div>
            <div class="form-group">
                <label for="publish_date">Publish Date</label>
                <input type="date" class="form-control" id="publish_date" name="publish_date" placeholder="Publish Date">
            </div>
            <div class="form-group">
                <label for="subjects">Subjects</label>
                <input type="text" maxlength="100" class="form-control" id="subjects" name="subjects" placeholder="Subjects">
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
            </div>
            <div class="text-center mb-50">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>


        </form>
    </div>
</div>


@endsection
