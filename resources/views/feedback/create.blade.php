@extends('templates.main')
@section('header', 'Give feedback')
@section('content')
    <div class="container mt-4">
        @if (session()->has('status'))
            <div class="alert alert-success">
                <strong>{{ session()->get('result') }}</strong> {{ session()->get('action') }}
            </div>
        @endif
        <h1>Give your Feedback</h1>
        <div class="col-lg-8 mt-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/feedback/store" method="post">
                @csrf
                <div class="mb-3">
                    <label for="message" class="form-label">Enter your feedback</label>
                    <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Masukkan Feedback"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
