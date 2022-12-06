<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Register</title>
    <link rel="icon" href="{{ asset('storage/img/logo.png') }}">
    <link rel="stylesheet" href="http://localhost/mylibrary/resources/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/mylibrary/resources/css/role.css">
</head>
<body>
    <div class="container vh-100 box">
        <section class="role-select">
            <header>
                <h2>What do you want to be?</h2>
            </header>
            <div class="role-class m-auto d-flex justify-content-between mt-4">
                <div class="role-box shadow">
                    <figure class="m-auto">
                        <img src="{{ asset('storage//img/member-illustration.png') }}" alt="member illustration">
                    </figure>
                    <div class="description m-auto">
                        <h5>Member</h5>
                    </div>
                </div>
                <div class="role-box shadow">
                    <figure class="m-auto">
                        <img src="{{ asset('storage/img/visitor-illustration.png') }}" alt="visitors illustration">
                    </figure>
                    <div class="description m-auto mt-3">
                        <h5>Visitor</h5>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
