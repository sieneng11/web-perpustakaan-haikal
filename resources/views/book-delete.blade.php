@extends('layouts.mainlayouts')

@section('title', 'Delete Book')

@section('content')

    <h2>are you sure to delete book {{$book->title}}</h2>
    <div class="mt-5">
        <a href="/book-destroy/{{$book->slug}}" class="btn btn-danger me-3">Sure</a>
        <a href="/books" class="btn btn-primary">Cancel</a>
    </div>

@endsection
