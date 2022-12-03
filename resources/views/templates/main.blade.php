<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('header') Page</title>
    <link rel="icon" href="{{ asset('storage/img/logo.png') }}" />
    <link rel="stylesheet" href="http://localhost/mylibrary/resources/css/bootstrap.css" />
    <link rel="stylesheet" href="http://localhost/mylibrary/resources/css/main.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="stylesheet" href="http://localhost/mylibrary/resources/css/@yield('style').css">
    <script src="http://localhost/mylibrary/resources/js/jquery-3.6.1.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler slider" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <button type="button" class="btn btn-outline-primary">
                        Logout
                    </button>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
    <!-- Content -->
    <div class="content">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="title m-auto mt-3">
                <div class="logo m-auto">
                    <img src="{{ asset('storage/img/logo.png') }}" alt="mylibrary logo">
                </div>
                <div class="header m-auto mt-4">
                    <h4 class="text-primary">My Library App</h4>
                </div>
            </div>
            <ul class="m-auto mt-4">
                <li>
                    <span class="material-symbols-outlined">
                        home
                    </span>
                    <a href="/home">Home</a>
                </li>
                <li class="mt-4">
                    <span class="material-symbols-outlined">
                        library_books
                    </span>
                    <a href="/book">Books</a>
                </li>
                <li class="mt-4">
                    <span class="material-symbols-outlined">
                        av_timer
                    </span>
                    <a href="/rental">Rental Data</a>
                </li>
                <li class="mt-4">
                    <span class="material-symbols-outlined">
                        chat_bubble
                    </span>
                    <a href="/feedback">Feedback</a>
                </li>
            </ul>
            <button type="button" class="close-button">
                X
            </button>
        </aside>
        <!-- End Sidebar -->
        <!-- Overlay Section -->
        <div class="vh-100 overlay"></div>
        <!-- End Overlay -->
        <!-- Data Section -->
        <section class="main-content">
            @yield('content')
        </section>
        <!-- End Data Section -->
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="http://localhost/mylibrary/resources/js/jscript.js"></script>
<script src="http://localhost/mylibrary/resources/js/add-button.js"></script>
<script src="http://localhost/mylibrary/resources/js/info-button.js"></script>
<script src="http://localhost/mylibrary/resources/js/edit-button.js"></script>
<script src="http://localhost/mylibrary/resources/js/delete-button.js"></script>
<script src="http://localhost/mylibrary/resources/js/add-rental.js"></script>
<script src="http://localhost/mylibrary/resources/js/edit-rental.js"></script>
<script src="http://localhost/mylibrary/resources/js/delete-rental.js"></script>
<script src="http://localhost/mylibrary/resources/js/search-rental.js"></script>
</html>
