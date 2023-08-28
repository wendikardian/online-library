@extends('HomePage.layout')
@section('title', 'Home')


@section('content')
<div class="row">
    <!-- add button to create a new book -->
    <div class="text-center mb-50 "><a href="{{route('book.create')}}" class="btn btn-default" role="button">Create New Book</a></div>

    <!-- first item -->
    @foreach ($bookData as $book)
    <div class="col-sm-6 col-md-3 card-book">
        <div class="thumbnail">
            <img src="{{$book['image_path']}}" alt="..." width="250px" height="200">
            <div class="caption">
                <h3>{{$book['title']}}</h3>
                <p>By : {{$book['author']}}</p>
                <!-- limit desc only max 50 words -->
                <p>{{Str::limit($book['desc'], 250)}}</p>
                <!-- change the href into detail-book route and send the id of the book  -->
                <div class="text-center"><a href="{{route('book.show', ['id' => $book['id']])}}" class="btn btn-default" role="button">Show Detail</a></div>

            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection


@section('pagination')

<!-- add some custome pagination style -->
<div class="text-center">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li>
                <a href="{{$bookData->previousPageUrl()}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            @for ($i = 1; $i <= $bookData->lastPage(); $i++)
                <li><a href="{{$bookData->url($i)}}">{{$i}}</a></li>
                @endfor
                <li>
                    <a href="{{$bookData->nextPageUrl()}}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
        </ul>
    </nav>
</div>
<!-- <div class="text-center">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>  -->
<!-- change the  pagination above based data that share in the controller -->

@endsection
