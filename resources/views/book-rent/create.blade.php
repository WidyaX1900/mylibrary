@extends('templates.main')
@section('header', 'Add Rental')
@section('style', 'add-rental')
@section('content')
    <div class="container mt-4">
        <h1>Tambah Data Peminjaman</h1>
        <div class="forms col-lg-8 mt-3 border p-3 rounded">
            <form action="" method="">
                <div class="mb-3">
                    <label for="book_id">Book Title</label>
                    <select class="form-select" id="book_id" name="book_id">
                        @foreach ($books as $book)
                            <option value="{{ $book->id }}">{{ $book->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="visitors_id">Borrower's name</label>
                    <select class="form-select" id="visitors_id" name="visitors_id">
                        @foreach ($visitors as $visitor)
                            <option value="{{ $visitor->id }}">{{ $visitor->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="rent_date">Tanggal Peminjaman</label>
                    <input type="date" class="form-control" id="rent_date" name="rent_date" value="{{ $rent_date }}" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="return_date">Tanggal Dikembalikan</label>
                    <input type="date" class="form-control" id="return_date" name="return_date">
                </div>
                <button type="submit" class="btn btn-primary">Add Rental</button>
            </form>
        </div>
    </div>
@endsection
