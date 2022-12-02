@extends('templates.main')
@section('header', 'Edit Rental')
@section('style', 'add-rental')
@section('content')
    <div class="container mt-4">
        <h1>Edit Data Peminjaman</h1>
        @if ($errors->any())        
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="forms col-lg-8 mt-3 border p-3 rounded">
            <form action="/rental/update/{{ $rental->id }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="book_id">Book Title</label>
                    <select class="form-select" id="book_id" name="book_id">
                        <option value="{{ $rental->book->id }}">{{ $rental->book->title }}</option>
                        @foreach ($book as $books)
                            <option value="{{ $books->id }}">{{ $books->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="user_id">Borrower's name</label>
                    <select class="form-select" id="user_id" name="user_id" disabled>
                        <option value="{{ $rental->user->id }}">{{ $rental->user->name }}</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="rent_date">Tanggal Peminjaman</label>
                    <input type="date" class="form-control" id="rent_date" name="rent_date" value="{{ $rental->rent_date }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="return_date">Tanggal Dikembalikan</label>
                    <input type="date" class="form-control" id="return_date" name="return_date" value="{{ $rental->return_date }}">
                </div>
                <button type="submit" class="btn btn-primary">Update Rental</button>
            </form>
        </div>
    </div>
@endsection
