<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container d-flex p-5 mt-5 mr-3" style="align-self: center; display: inline-block;">
        <form action="{{ route('login') }}" method="post">
        @csrf
            <div class="login-box">
                <div class="form-icon d-flex flex-column justify-content-center align-items-center">👤</div>

                <div class="form-group">
                    <label class="label" for="username">Username</label>
                    <input id="email" name="email" type="text" placeholder="Masukkan username" />
                </div>

                <div class="form-group">
                    <label class="label" for="password">Password</label>
                    <input id="password" name="password" type="password" placeholder="Masukkan password" />
                </div>

                <button class="btn-primary rounded" type="submit">Login</button>
            </div>
        </form>
        @if(session('success'))
            <div class="alert alert-success mt-4" style="font-size: 20px; display: flex; align-items: center;">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger mt-4" style="font-size: 20px; display: flex; align-items: center;">
                {{ session('error') }}
            </div>
        @endif
    </div>

    <a href="#" class="btn-primary p-2 rounded" style="position: relative; right: 50%x;">Register</a>
    <div class="flex-box">
        <button popovertarget="up">register</button>
        <div id="up" popover="true">
            <h2>ppppp</h2>
            <button popovertarget="up">close</button>
        </div>
    </div>
    
</body>
</html>