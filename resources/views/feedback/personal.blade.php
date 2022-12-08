@extends('templates.main')
@section('header', 'Your feedback')
@section('style', 'your-feedback')
@section('content')
    <div class="container mt-4">
        <h1>Your Feedbacks</h1>
        <div class="add-feedback mt-3 mb-4">
            <button type="button" class="btn btn-primary p-3">Give Feedback</button>
        </div>
        <h4>History Feedback</h4>
        @foreach ($feedbacks as $feedback)
            <div class="inbox mt-3 row">
                <div class="col-lg-1">
                    <div class="frame d-flex justify-content-center align-items-center">
                        <span class="material-symbols-outlined"> person </span>
                    </div>
                </div>
                <div class="col-lg-7 mt-3 user-data">
                    <div class="feedback-message">
                        {{ $feedback->message }}
                    </div>
                </div>
                <div class="cta mt-3">
                    <div class="publish-date d-flex align-items-center">
                        <p>Publish date: {{ $feedback->created_at }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
