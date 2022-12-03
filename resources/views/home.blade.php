@extends('templates.main')
@section('header', 'Home')
@section('style', 'admin-content')
@section('content')
    <div class="container mt-5">
        <h1>Hello, Rangga</h1>
    </div>
    <div class="row data-container">
        <div class="col-lg-4 box shadow">
            <div class="desc">
                <span class="material-symbols-outlined">
                    library_books
                </span>
                <h3>Book Total</h3>
            </div>
            <div class="values">
                <h2>{{ $books }}</h2>
                <p>books</p>
            </div>
        </div>
        <div class="col-lg-4 box shadow">
            <div class="desc">
                <span class="material-symbols-outlined">
                    library_books
                </span>
                <h3>Available</h3>
            </div>
            <div class="values">
                <h2>{{ $available }}</h2>
                <p>books</p>
            </div>
        </div>
        <div class="col-lg-4 box shadow">
            <div class="desc">
                <span class="material-symbols-outlined">
                    library_books
                </span>
                <h3>Borrowed</h3>
            </div>
            <div class="values">
                <h2>{{ $borrowed }}</h2>
                <p>books</p>
            </div>
        </div>
    </div>
@endsection
