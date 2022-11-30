@extends('templates.main')
@section('header', 'Book')
@section('style', 'book-index')
@section('content')
    <div class="container mt-4">
        @if (session()->has('status'))
            <div class="alert alert-{{ session()->get('status') }} alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('result') }}</strong> {{ session()->get('action') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h1>Daftar Buku</h1>
        <div class="add-button mt-3">
            <button type="button" class="btn btn-primary p-3">
                <span class="material-symbols-outlined"> add </span>
                Tambah Buku
            </button>
        </div>
        <div class="col-lg-7 mt-4">
            <form action="/book" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search book" name="keyword" />
                    <button class="btn btn-outline-primary" type="submit">
                        <span class="material-symbols-outlined"> search </span>
                    </button>
                </div>
            </form>
        </div>
        <div class="row mt-4">
            @foreach ($books as $book)
                <div class="col-lg-4 border book-list mt-3">
                    <figure>
                        @if ($book->cover === null)
                            <img src="{{ asset('storage/img/logo.png') }}" alt="book cover">
                        @else
                            <img src="{{ asset('storage/covers/' . $book->cover) }}" alt="book cover">
                        @endif
                    </figure>
                    <h3>{{ $book->title }}</h3>
                    <div class="info-button">
                        <button type="button" class="btn btn-info" data-id="{{ $book->id }}">
                            <span class="material-symbols-outlined">
                                info
                            </span>
                            <strong>Book info</strong>
                        </button>
                    </div>
                    <div class="edit-delete mt-3">
                        <button type="button" class="btn btn-warning edit-button" data-id="{{ $book->id }}">
                            <span class="material-symbols-outlined">
                                edit
                            </span>
                            <strong>Edit</strong>
                        </button>
                        <button type="button" class="btn btn-danger delete-button" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $book->id }}">
                            <span class="material-symbols-outlined">
                                delete
                            </span>
                            <strong>Hapus</strong>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog delete-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Confirm</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/book/destroy" method="post" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <h3>Are you sure want to delete this book?</h3>
                        <input type="hidden" name="id" id="id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
