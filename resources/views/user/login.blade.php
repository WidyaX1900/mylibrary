<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In to System</title>
    <link rel="stylesheet" href="http://localhost/mylibrary/resources/css/bootstrap.css">
    <link rel="icon" href="{{ asset('storage/img/logo.png') }}">
    <link rel="stylesheet" href="http://localhost/mylibrary/resources/css/login.css">
</head>
<body>
    <div class="container mt-3 vh-100 mb-3 d-flex justify-content-center align-items-center">
        <section class="login-form shadow p-5">
            <div class="logo-container">
                <img src="{{ asset('storage/img/logo.png') }}" alt="mylibrary logo">
            </div>
            <header class="mt-2 mb-4">
                <h4>E-library Login</h4>
            </header>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary p-2">Login</button>
            </form>
            <div class="col-lg-10 mt-4 m-auto">
                Not have an account? <a href="">Register Here</a>
            </div>
        </section>
    </div>
</body>
</html>
