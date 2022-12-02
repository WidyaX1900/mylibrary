@extends('templates.main')
@section('header', 'Rental')
@section('style', 'rental')
@section('content')
    <div class="container mt-4">
        @if (session()->has('status'))
            <div class="alert alert-{{ session()->get('status') }}">
                <strong>{{ session()->get('result') }}</strong> {{ session()->get('action') }}
            </div>
        @endif
        <h1>Rental Report</h1>
        <div class="col-lg-4 add-rental">
            <button type="button" class="btn btn-primary p-3 mt-3">
                <span class="material-symbols-outlined">
                    add
                </span>
                Create Rental Data
            </button>
        </div>
        <div class="col-lg-6">
            <form action="" method="get">
                <div class="input-group mb-3 mt-4">
                    <input type="text" class="form-control" placeholder="Search Rental Data">
                    <button class="btn btn-primary">
                       <span class="material-symbols-outlined">
                            search
                        </span> 
                    </button>
                </div>
            </form>
        </div>
        <div class="col-lg-12 mt-4 rent-table">
            <table class="table border rounded">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Borrower's name</th>
                        <th>Borrowed Book</th>
                        <th>Rental Date</th>
                        <th>Return Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rental as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->user->name }}</td>
                            <td>{{ $data->book->title }}</td>
                            <td>{{ $data->rent_date }}</td>
                            <td>{{ $data->return_date }}</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning edit-rental"
                                    data-id="{{ $data->id }}">
                                    <span class="material-symbols-outlined">
                                        edit
                                    </span>
                                    Edit
                                </button>
                                <button type="button" class="btn btn-sm btn-danger delete-rental"
                                    data-id="{{ $data->id }}" data-bs-toggle="modal"
                                    data-bs-target="#deleteRentalModal">
                                    <span class="material-symbols-outlined">
                                        delete
                                    </span>
                                    Hapus
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="deleteRentalModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/rental/destroy" method="post" class="delete-form-rental">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <h4>Are you sure want to delete this data?</h4>
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
