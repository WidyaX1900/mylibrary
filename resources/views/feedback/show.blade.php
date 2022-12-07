@extends('templates.main')
@section('header', 'Feedback Details')
@section('style', 'feedback-show')
@section('content')
    <div class="container mt-4">
        <div class="inbox mt-3 row border rounded">
            <div class="col-lg-1">
                <div class="frame d-flex justify-content-center align-items-center">
                    <span class="material-symbols-outlined"> person </span>
                </div>
            </div>
            <div class="col-lg-10 mt-3 user-data">
                <h5>{{ $feedback->user->name }}</h5>
                <div class="publish-date d-flex align-items-center">
                    <p>Publish date: {{ $feedback->created_at }}</p>
                </div>
                <div class="feedback-message">
                    <p>
                        {{ $feedback->message }}
                    </p>
                </div>
            </div>
            <div class="cta mt-3">

            </div>
        </div>
    </div>
@endsection
