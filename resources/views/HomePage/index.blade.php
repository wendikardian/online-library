@extends('HomePage.layout')
@section('title', 'Home')


@section('content')
<div class="row">
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
                <div class="text-center"><a href="./detail-item.html" class="btn btn-default" role="button">Show Detail</a></div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection


@section('pagination')
<div class="text-center">
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
</div>
@endsection
