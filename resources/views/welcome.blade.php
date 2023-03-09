<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="welcome.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
        <div class="main-box">
            <div class="main">
                <img src="https://casapp.us.qwasar.io/assets/logo-afaa88aa77a0d9606ca8de6858e68a5e7fb8b972505d33ef1748de97146033d3.svg"  class="welcome-logo" alt="svg">
                <h1 class="project-title">MY BASECAMP 1</h1>
                <h6 class="project-description">A project managment tool for developers</h6>
                <div class="button-container d-flex">
                    @if (Route::has('login'))
                @auth
                        <a href="{{ url('/dashboard') }}" class="dashboard-link">Go to Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="login-link btn btn-light">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="reg-link btn btn-light">Register</a>
                @endif
                @endauth
                @endif
                </div>
            </div>
        </div>
    </body>
</html>
