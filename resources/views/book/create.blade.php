@extends('templates.main')
@section('header', 'Add Book')
@section('style', 'add-form')
@section('content')
    <div class="container mt-4">
        <h1>Add Book</h1>
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
        <div class="col-lg-8 border rounded p-3 mt-4 create">
            <form action="/book/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author">
                </div>
                <div class="mb-3">
                    <label for="publisher" class="form-label">Publisher</label>
                    <input type="text" class="form-control" id="publisher" name="publisher">
                </div>
                <div class="mb-3">
                    <label for="release_date" class="form-label">Release date</label>
                    <input type="date" class="form-control" id="release_date" name="release_date">
                </div>
                <div class="mb-3">
                    <label for="cover" class="form-label">Cover File</label>
                    <input type="file" class="form-control" id="cover" name="cover">
                </div>
                <button type="submit" class="btn btn-primary">Add book</button>
            </form>
        </div>
    </div>
@endsection
