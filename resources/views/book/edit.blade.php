@extends('templates.main')
@section('header', 'Edit Book')
@section('style', 'add-form')
@section('content')
    <div class="container mt-4">
        <h1>Edit Book</h1>
        <div class="col-lg-8 border rounded p-3 mt-4 create">
            <form action="/book/update/{{ $book->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="oldFile" value="{{ $book->cover }}">
                <div class="mb-3">
                    <label for="title" class="form-label" style="display: block">Book's cover</label>
                    @if ($book->cover === null)
                        <img src="{{ asset('storage/img/logo.png') }}" alt="book cover" width="200px">
                    @else
                        <img src="{{ asset('storage/covers/'.$book->cover) }}" alt="book cover" width="200px">
                    @endif
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}">
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}">
                </div>
                <div class="mb-3">
                    <label for="publisher" class="form-label">Publisher</label>
                    <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $book->publisher }}">
                </div>
                <div class="mb-3">
                    <label for="release_date" class="form-label">Release date</label>
                    <input type="date" class="form-control" id="release_date" name="release_date" value="{{ $book->release_date }}">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" aria-label="Default select example" name="status" id="status">
                        @if ($book->status > 0)
                            <option value="1" selected>Available</option>
                            <option value="0">Borrowed</option>
                        @else
                            <option value="1">Available</option>
                            <option value="0" selected>Borrowed</option>
                        @endif
                      </select>
                </div>
                <div class="mb-3">
                    <label for="cover" class="form-label">Cover File</label>
                    <input type="file" class="form-control" id="cover" name="cover">
                </div>
                <button type="submit" class="btn btn-primary">Update book</button>
            </form>
        </div>
    </div>
@endsection
