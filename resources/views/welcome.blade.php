<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NCCFIMO</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    <div class="background">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">NCCFIMO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Contact us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="/login">Login</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <a class="nav-link active" href="/login">Register</a>
                        </li>
                        <a href="/register" class="btn btn-light ms-3 d-none d-lg-block">Register</a>
                    </ul>
                </div>
        </nav>

        <div class="container text-light" style="margin-top: 8rem;">
            <div class="row"
                <div class="col-6">
                    <h1 class="display-1 text-light">
                        NCCFIMO <br> Welcomes you
                    </h1>
                    <p class="lead">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet, nisi.
                    </p>
                </div>
                <div class="col-6"></div>
            </div>
        </div>
    </div>
</body>
</div>

</html>
