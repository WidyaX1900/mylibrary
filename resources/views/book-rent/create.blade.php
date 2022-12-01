@extends('templates.main')
@section('header', 'Add Rental')
@section('style', 'add-rental')
@section('content')
    <div class="container mt-4">
        <h1>Tambah Data Peminjaman</h1>
        <div class="forms col-lg-8 mt-3 border p-3 rounded">
            <form action="" method="">
                <div class="mb-3">
                    <label for="book_id">Judul Buku</label>
                    <select class="form-select" id="book_id" name="book_id">
                        <option value="1">Motivasi Pengusaha</option>
                        <option value="2">Cara menjadi Developer Pro</option>
                        <option value="3">Rahasia Jago Coding</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="visitors_id">Nama Peminjam</label>
                    <select class="form-select" id="visitors_id" name="visitors_id">
                        <option value="1">Rangga Widya</option>
                        <option value="2">Kadek Wijaya</option>
                        <option value="3">Tri Wiguna</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="rent_date">Tanggal Peminjaman</label>
                    <input type="date" class="form-control" id="rent_date" name="rent_date">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="return_date">Tanggal Dikembalikan</label>
                    <input type="date" class="form-control" id="return_date" name="return_date">
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
@endsection
