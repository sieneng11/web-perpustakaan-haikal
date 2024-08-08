@extends('layouts.mainlayouts')

@section('title', 'Dashboard')

@section('content')

    <h1>
        Books List
    </h1>


    <div class="my-5 d-flex justify-content-end">
        <a href="book-add" class="btn btn-primary me-3">Add Data</a>
        <a href="book-deleted" class="btn btn-secondary">View Delete Category</a>
    </div>


    <div class="my-5">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status')}}
            </div>
        @endif
    </div>

    <div class="my-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Code</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $item)
                <tr>

                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->book_code}}</td>
                    <td>{{$item->title}}</td>
                    <td>
                        @foreach ($item->categories as $category)
                        {{$category->name}} <br>
                        @endforeach
                    </td>
                    <td>{{$item->status}}</td>

                    <td>
                        <a href="/book-edit/{{$item->slug}}">edit</a>
                        <a href="/book-delete/{{$item->slug}}">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

