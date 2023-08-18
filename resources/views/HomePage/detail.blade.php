@extends('HomePage.layout')
@section('title', 'Home')


@section('content')
<div class="row">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <div class="thumbnail">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="https://covers.openlibrary.org/b/id/13316297-L.jpg" class="pt-10 pb-10 pl-10" width="250px">
                        <div class="text-center">
                            <a href="#" class="btn btn-default mt-10 mb-10" role="button">Borrow</a>
                            <!-- <a href="#" class="btn btn-default" role="button">Buy</a> -->
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-8">
                        <h2><b>Books Title</b></h2>
                        <p><small>by</small> <a href="#" class="h-link">Humanoid</a></p>
                        <div class="pt-20">
                            <p>Publisher <a href="#" class="h-link">Penguin</a></p>
                            <p>Category <a href="#" class="h-link">Novel</a></p>
                            <p>Pages <b>650</b></p>
                            <p>Language <a href="#" class="h-link">English</a></p>
                            <p>Publish Date <a href="#" class="h-link">2020</a></p>
                            <p>Subjects <a href="#" class="h-link">Fantasy</a>, <a href="#" class="h-link">Fiction</a>, <a href="#" class="h-link">Good and Evil</a></p>
                            <p id="synopsis">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima quasi a quam quisquam temporibus, tenetur pariatur quod tempore reprehenderit debitis <span id="dots">...</span><span id="more">distinctio possimus voluptas sed. Error, quasi! Ex ipsam dignissimos ipsum? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, in deserunt quasi nihil architecto hic nobis cumque necessitatibus excepturi a?</span></p>
                            <p class="h-link" id="read-btn" onclick="showCompleteText()">Read more</p>
                            <p>ISBN <b>109128982384</b></p>
                        </div>
                    </div>
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
