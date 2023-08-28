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
                <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN" {{
                    old('isbn') ? 'value=' . old('isbn') : ''

                }}>
                @error('isbn')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" maxlength="100" class="form-control" id="title" name="title" placeholder="Title" {{
                    old('title') ? 'value=' . old('title') : ''

                }}>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" maxlength="100" class="form-control" id="author" name="author" placeholder="author" {{
                    old('author') ? 'value=' . old('author') : ''

                }}>
                @error('author')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="image_path">Image Path</label>
                <input type="text" class="form-control" id="image_path" name="image_path" placeholder="Image Path" {{
                    old('image_path') ? 'value=' . old('image_path') : ''

                }}>
                @error('image_path')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="publisher">Publisher</label>
                <input type="text" maxlength="100" class="form-control" id="publisher" name="publisher" placeholder="Publisher" {{
                    old('publisher') ? 'value=' . old('publisher') : ''

                }}>
                @error('publisher')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" maxlength="100" class="form-control" id="category" name="category" placeholder="Category" {{
                    old('category') ? 'value=' . old('category') : ''

                }}>
                @error('category')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="page">Page</label>
                <input type="number" class="form-control" id="page" name="page" placeholder="Page" {{
                    old('page') ? 'value=' . old('page') : ''

                }}>
                @error('page')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="language">Language</label>
                <input type="text" maxlength="100" class="form-control" id="language" name="language" placeholder="Language" {{
                    old('language') ? 'value=' . old('language') : ''

                }}>
                @error('language')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="publish_date">Publish Date</label>
                <input type="date" class="form-control" id="publish_date" name="publish_date" placeholder="Publish Date" {{
                    old('publish_date') ? 'value=' . old('publish_date') : ''

                }}>
                @error('publish_date')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="subjects">Subjects</label>
                <!-- add value if the error message was send -->
                <input type="text" maxlength="100" class="form-control" id="subjects" name="subjects" placeholder="Subjects" {{
                    old('subjects') ? 'value=' . old('subjects') : ''

               }}>
                @error('subjects')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control" id="desc" name="desc" rows="3">{{ old('desc') ? old('desc') : '' }}</textarea>
                @error('desc')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-center mb-50">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>


        </form>
    </div>
</div>


@endsection
