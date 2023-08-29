@extends('HomePage.layout')
@section('title', 'Delete item')


@section('content')
<!-- create confirm before delete -->

<div class="container">
    <h1>Are you sure want to delete {{$book['title']}} by {{$book['author']['name']}} ? </h1>
    <div class="box-form">
        <div class="text-center mb-50">
            <form method="POST" action="{{ route('book.destroy', ['id' => $book['id']]) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-default">Yes</button>
            </form>
            <a href="{{route('book.show', $book['id'])}}" class="btn btn-default">No</a>
        </div>
    </div>
</div>

@endsection
