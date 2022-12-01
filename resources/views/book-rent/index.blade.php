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
                    <tr>
                        <td>1</td>
                        <td>I Putu Gde Rangga W.S.</td>
                        <td>Perahu Kertas</td>
                        <td>2022-12-01</td>
                        <td>2022-12-08</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning">
                                <span class="material-symbols-outlined">
                                    edit
                                </span>
                                Edit
                            </button>
                            <button type="button" class="btn btn-sm btn-danger">
                                <span class="material-symbols-outlined">
                                    delete
                                </span>
                                Hapus
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
