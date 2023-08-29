@extends('HomePage.layout')
@section('title', 'Home')


@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{session('status')}}
</div>
@endif
<div class="row">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <div class="thumbnail">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="{{$book['image_path']}}" class="pt-10 pb-10 pl-10" width="250px">
                        <div class="text-center">
                            <a href="#" class="btn btn-default mt-10 mb-10" role="button">Borrow</a>
                            <!-- <a href="#" class="btn btn-default" role="button">Buy</a> -->
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-8">

                        <h2><b>{{$book['title']}}</b></h2>
                        <p><small>by</small> <a href="#" class="h-link"> {{$book['author']['name']}} </a></p>
                        <div class="pt-20">
                            <p>Publisher <a href="#" class="h-link">{{$book['publisher']}}</a></p>
                            <p>Category <a href="#" class="h-link">{{$book['category']}}</a></p>
                            <p>Pages <b>{{$book['page']}}</b></p>
                            <p>Language <a href="#" class="h-link">{{$book['language']}}</a></p>
                            <p>Publish Date <a href="#" class="h-link">{{$book['publish_date']}}</a></p>
                            <p>Subjects <a href="#" class="h-link">{{$book['subjects']}}</a> </p>
                            <p id="synopsis">{{$book['desc']}}</span></p>
                            <p class="h-link" id="read-btn" onclick="showCompleteText()">Read more</p>
                            <p>ISBN <b>{{$book['isbn']}}</b></p>
                        </div>
                        <!-- add button to edit and delete -->
                        <div class="text-center">
                            <!-- <a href="{{route('book.edit', $book['id'])}}" class="btn btn-default mt-10 mb-10" role="button">Edit</a>
                            <a href="{{route('book_confirm_delete', $book['id'])}}" class="btn btn-default mt-10 mb-10" role="button">Delete</a> -->
                            <!-- show it only when the user is already loggin, and if the user_id same with id user the button is not disabled -->
                            @if (Auth::check())
                            @if (Auth::user()->id == $book['user_id'])
                            <a href="{{route('book.edit', $book['id'])}}" class="btn btn-default mt-10 mb-10" role="button">Edit</a>
                            <a href="{{route('book_confirm_delete', $book['id'])}}" class="btn btn-default mt-10 mb-10" role="button">Delete</a>
                            @endif
                            <!-- if the user_id is not same, the button still exist but disabled -->
                            @if (Auth::user()->id != $book['user_id'])
                            <a href="" class="btn btn-default mt-10 mb-10" role="button" disabled>Edit</a>
                            <a href="" class="btn btn-default mt-10 mb-10" role="button" disabled>Delete</a>

                            @endif
                            @endif

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
