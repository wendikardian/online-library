@extends('HomePage.layout')
@section('title', 'Home')


@section('content')
<div class="row">
    <!-- first item -->
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src="https://covers.openlibrary.org/b/id/13316297-L.jpg" alt="..." width="250px">
            <div class="caption">
                <h3>Books Title</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima quasi a quam quisquam temporibus, tenetur pariatur quod tempore reprehenderit debitis distinctio possimus voluptas sed. Error, quasi! Ex ipsam dignissimos ipsum?</p>
                <div class="text-center"><a href="./detail-item.html" class="btn btn-default" role="button">Show Detail</a></div>
            </div>
        </div>
    </div>
    <!-- second item -->
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src="https://covers.openlibrary.org/b/id/13316297-L.jpg" alt="..." width="250px">
            <div class="caption">
                <h3>Books Title</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima quasi a quam quisquam temporibus, tenetur pariatur quod tempore reprehenderit debitis distinctio possimus voluptas sed. Error, quasi! Ex ipsam dignissimos ipsum?</p>
                <div class="text-center"><a href="#" class="btn btn-default" role="button">Show Detail</a></div>
            </div>
        </div>
    </div>
    <!-- third item -->
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src="https://covers.openlibrary.org/b/id/13316297-L.jpg" alt="..." width="250px">
            <div class="caption">
                <h3>Books Title</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima quasi a quam quisquam temporibus, tenetur pariatur quod tempore reprehenderit debitis distinctio possimus voluptas sed. Error, quasi! Ex ipsam dignissimos ipsum?</p>
                <div class="text-center"><a href="#" class="btn btn-default" role="button">Show Detail</a></div>
            </div>
        </div>
    </div>
    <!-- forth item -->
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src="https://covers.openlibrary.org/b/id/13316297-L.jpg" alt="..." width="250px">
            <div class="caption">
                <h3>Books Title</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima quasi a quam quisquam temporibus, tenetur pariatur quod tempore reprehenderit debitis distinctio possimus voluptas sed. Error, quasi! Ex ipsam dignissimos ipsum?</p>
                <div class="text-center"><a href="#" class="btn btn-default" role="button">Show Detail</a></div>
            </div>
        </div>
    </div>
</div>
<!-- second row of cards -->
<div class="row">
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src="https://covers.openlibrary.org/b/id/13316297-L.jpg" alt="..." width="250px">
            <div class="caption">
                <h3>Books Title</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima quasi a quam quisquam temporibus, tenetur pariatur quod tempore reprehenderit debitis distinctio possimus voluptas sed. Error, quasi! Ex ipsam dignissimos ipsum?</p>
                <div class="text-center"><a href="#" class="btn btn-default" role="button">Show Detail</a></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src="https://covers.openlibrary.org/b/id/13316297-L.jpg" alt="..." width="250px">
            <div class="caption">
                <h3>Books Title</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima quasi a quam quisquam temporibus, tenetur pariatur quod tempore reprehenderit debitis distinctio possimus voluptas sed. Error, quasi! Ex ipsam dignissimos ipsum?</p>
                <div class="text-center"><a href="#" class="btn btn-default" role="button">Show Detail</a></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src="https://covers.openlibrary.org/b/id/13316297-L.jpg" alt="..." width="250px">
            <div class="caption">
                <h3>Books Title</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima quasi a quam quisquam temporibus, tenetur pariatur quod tempore reprehenderit debitis distinctio possimus voluptas sed. Error, quasi! Ex ipsam dignissimos ipsum?</p>
                <div class="text-center"><a href="#" class="btn btn-default" role="button">Show Detail</a></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src="https://covers.openlibrary.org/b/id/13316297-L.jpg" alt="..." width="250px">
            <div class="caption">
                <h3>Books Title</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima quasi a quam quisquam temporibus, tenetur pariatur quod tempore reprehenderit debitis distinctio possimus voluptas sed. Error, quasi! Ex ipsam dignissimos ipsum?</p>
                <div class="text-center"><a href="#" class="btn btn-default" role="button">Show Detail</a></div>
            </div>
        </div>
    </div>
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
