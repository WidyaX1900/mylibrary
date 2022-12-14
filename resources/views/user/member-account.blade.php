<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Account</title>
    <link rel="icon" href="{{ asset('storage/img/logo.png') }}" />
    <link rel="stylesheet" href="http://localhost/mylibrary/resources/css/bootstrap.css" />
    <link rel="stylesheet" href="http://localhost/mylibrary/resources/css/create-account.css" />
</head>
<body>
    <div class="container mt-5">
        <h1>Create Account</h1>
        <div class="col-lg-7 border p-3 rounded mt-3 forms">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                </div>                
                <div class="mb-3">
                    <label class="form-label" for="member_code">Member Code</label>
                    <input type="text" class="form-control" id="member_code" name="member_code" required/>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
