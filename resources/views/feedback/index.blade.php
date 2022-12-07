@extends('templates.main')
@section('header', 'Feedback')
@section('style', 'visitors-feedback')
@section('content')
    <div class="container mt-4">
        <h1>Visitor's Feedback</h1>
        <div class="inbox mt-3 row">
            <div class="col-lg-1">
                <div class="frame d-flex justify-content-center align-items-center">
                    <span class="material-symbols-outlined"> person </span>
                </div>
            </div>
            <div class="col-lg-7 mt-3 user-data">
                <h5>Visitor's Username</h5>
                <div class="feedback-message">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore assumenda nemo laudantium veritatis
                    perspiciatis laboriosam, asperiores maxime, voluptatem officiis quibusdam placeat ullam veniam officia
                    impedit adipisci cum eos, magni tenetur repellendus nisi voluptatum mollitia debitis totam aliquid. Cum
                    quisquam quis ea laudantium nulla magnam, dolorem numquam. Nostrum aspernatur blanditiis nesciunt,
                    eligendi architecto ullam eveniet cum sequi illum optio dicta facilis perspiciatis molestias quam vitae
                    recusandae officia ipsa natus ad repellat alias saepe culpa quod. Inventore harum, fuga, dolorum quaerat
                    minima laudantium atque nam tempora aspernatur a cum facilis hic quo molestias placeat culpa, porro
                    perferendis quasi doloribus ratione vitae facere?
                </div>
            </div>
            <div class="cta mt-3">
                <div class="publish-date d-flex align-items-center">
                    <p>Publish date: 11/17/2022</p>
                </div>
                <div class="buttons d-flex flex-row-reverse">
                    <button type="button" class="btn btn-danger">
                        <span class="material-symbols-outlined">
                            delete
                        </span>
                        Hapus
                    </button>
                    <button type="button" class="btn btn-warning">
                        <span class="material-symbols-outlined">
                            visibility
                        </span>
                        Detail
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
