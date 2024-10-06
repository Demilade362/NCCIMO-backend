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
    <div class="container">
        <div class="row mt-5 align-items-center">
            <div class="col-lg-6">
                <img src="./building.png" class="img-fluid" alt="building">
            </div>
            <div class="col-lg-6 text-center">
                <h3 class="fw-bold">Feature Coming Out Soon</h3>
                <p class="lead text-muted"> We are working on this feature, Kindly Check out the announcement page for
                    more info
                </p>
                <div>
                    <a href="{{ route('dashboard') }}" class="btn btn-outline-dark rounded-pill">Back to HomePage</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
