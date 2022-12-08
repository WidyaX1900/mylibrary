@extends('templates.main')
@section('header', 'Confirm delete')
@section('content')
    <div class="container mt-4">
        <h1>Are you sure want to delete this feedback?</h1>
        <form action="/feedback/destroy/{{ $feedback->id }}" method="post">
            @csrf
            @method('DELETE')
            <a href="/feedback" class="btn btn-outline-secondary">
                Cancel
            </a>
            <button type="submit" class="btn btn-danger">
                Delete
            </button>
        </form>
    </div>
@endsection