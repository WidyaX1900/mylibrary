@extends('templates.main')
@section('header', 'Feedback')
@section('style', 'visitors-feedback')
@section('content')
    <div class="container mt-4">
        <h1>Visitor's Feedback</h1>
        @foreach ($feedbacks as $feedback)
            <div class="inbox mt-3 row">
                <div class="col-lg-1">
                    <div class="frame d-flex justify-content-center align-items-center">
                        <span class="material-symbols-outlined"> person </span>
                    </div>
                </div>
                <div class="col-lg-7 mt-3 user-data">
                    <h5>{{ $feedback->user->name }}</h5>
                    <div class="feedback-message">
                        {{ $feedback->message }}
                    </div>
                </div>
                <div class="cta mt-3">
                    <div class="publish-date d-flex align-items-center">
                        <p>Publish date: {{ $feedback->created_at }}</p>
                    </div>
                    <div class="buttons d-flex flex-row-reverse">
                        <button type="button" class="btn btn-danger">
                            <span class="material-symbols-outlined">
                                delete
                            </span>
                            Hapus
                        </button>
                        <button type="button" class="btn btn-warning feedback-detail" data-id="{{ $feedback->id }}">
                            <span class="material-symbols-outlined">
                                visibility
                            </span>
                            Detail
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
