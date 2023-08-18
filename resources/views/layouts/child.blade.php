@extends('layouts.app')

@section('title', 'Child Page')

@section('sidebar')
@parent
<p>This is the part of the child appended to master sidebar</p>
@endsection


@section('content')
<p>This is my body content.</p>
@endsection
