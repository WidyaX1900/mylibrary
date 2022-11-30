@extends('templates.main')
@section('header', 'Book Info')
@section('style', 'book-info')
@section('content')
    <div class="container mt-4">
        <h1>{{ $book->title }}</h1>
        <div class="row mt-3 info">
            <div class="col-lg-3">
                @if ($book->cover === null)
                    <img src="{{ asset('storage/img/logo.png') }}" alt="book cover" width="250px">
                @else
                    <img src="{{ asset('storage/covers/'.$book->cover) }}" alt="book cover" width="250px">
                @endif
            </div>
            <div class="col-lg-5 list">
                <ul>
                    <li class="mb-3">
                        <strong>Input date: {{ $book->input_date }}</strong>
                    </li>
                    <li><strong>Title:</strong> {{ $book->title }}</li>
                    <li><strong>Author:</strong> {{ $book->author }}</li>
                    <li><strong>Publisher:</strong> {{ $book->publisher }}</li>
                    <li><strong>Release date:</strong> {{ $book->release_date }}</li>
                    <li>
                        <strong>Status:</strong>
                        @if ($book->status > 0)
                            <span class="text-success">
                                <strong>Available</strong>
                            </span>
                        @else
                            <span class="text-danger">
                                <strong>Borrowed</strong>
                            </span>
                        @endif 
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
