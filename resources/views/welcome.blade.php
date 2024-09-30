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
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-lg-top">
            <div class="container">
                <a class="d-flex align-items-center justify-content-between text-decoration-none" href="/">
                    <img src="icon.png" class="img-fluid" width="30" height="30" alt="">
                    <span class="navbar-brand ms-2">NCCFIMO</span></a>
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
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Make Donations</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="/login">Login</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <a class="nav-link active" href="/login">Register</a>
                        </li>
                        <a href="/register" class="btn btn-dark px-4 ms-3 d-none d-lg-block">Register</a>
                    </ul>
                </div>
        </nav>

        <div class="container text-light" style="margin-top: 13rem;">
            <div>
                <h1 class="display-3 text-light text-uppercase">
                    Welcome to <br> NCCF IMO STATE
                </h1>
                <p class="lead">Welcome to the official NCCFIMO website</p>
            </div>
        </div>
    </div>
    <div class="container mt-4" id="cards">
        <div class="row">
            <div class="col-lg-4 col-sm-12 my-4">
                <div class="card mb-4" id="intro">
                    <div class="card-img-top text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="70" fill="currentColor"
                            class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path
                                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                        </svg>
                    </div>
                    <div class="card-body text-center">
                        <h4 class="fw-bold">
                            FELLOWSHIP
                        </h4>
                        <p class="lead mt-3">
                            NCCF Imo State, unites individuals in faith, fostering spritual growth through prayer
                            meetings, and worship services, encouraging mutual support and shared Christian values.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 my-4">
                <div class="card" id="intro">
                    <div class="card-img-top text-center">

                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="70" fill="currentColor"
                            class="bi bi-building-check" viewBox="0 0 16 16">
                            <path
                                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514" />
                            <path
                                d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1z" />
                            <path
                                d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                        </svg>
                    </div>
                    <div class="card-body text-center">
                        <h4 class="fw-bold">
                            ORGANIZATION
                        </h4>
                        <p class="lead mt-3">
                            As a legally registered entity with the government, NCCF operates with a structured
                            governance system, defined roles, and committees for effective management of its activities.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 my-4">
                <div class="card" id="intro">
                    <div class="card-img-top text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="70" fill="currentColor"
                            class="bi bi-person-arms-up" viewBox="0 0 16 16">
                            <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                            <path
                                d="m5.93 6.704-.846 8.451a.768.768 0 0 0 1.523.203l.81-4.865a.59.59 0 0 1 1.165 0l.81 4.865a.768.768 0 0 0 1.523-.203l-.845-8.451A1.5 1.5 0 0 1 10.5 5.5L13 2.284a.796.796 0 0 0-1.239-.998L9.634 3.84a.7.7 0 0 1-.33.235c-.23.074-.665.176-1.304.176-.64 0-1.074-.102-1.305-.176a.7.7 0 0 1-.329-.235L4.239 1.286a.796.796 0 0 0-1.24.998l2.5 3.216c.317.316.475.758.43 1.204Z" />
                        </svg>
                    </div>
                    <div class="card-body text-center">
                        <h4 class="fw-bold">
                            FAMILY
                        </h4>
                        <p class="lead mt-3">
                            NCCF provides a nurturing supportive environment where members care for each other
                            emotionally, spiritually, and creating a strong sense of community (Where members feel
                            valued and loved) and belonging
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5" style="margin-top: 10rem;">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-7">
                <h2 class="fw-bold">ABOUT NCCF IMO
                </h2>
                <p class="text-muted">
                    NCCF IMO is a chapter of the Nigeria Christian Corpers' Fellowship(NCCF). The fellowship is made up
                    of Christian Corps members and is characterized by its inter-denominational nature, meaning it
                    includes members from various Christian denominations. It is non-denominational and non-ethnic,
                    promoting unity among Christians from all background.

                    The fellowship operates independently, not being affiliated with or financially supported by any
                    individual or organization within Nigeria or internationally
                </p>
                <button class="mt-4 btn btn-dark px-4">Read More</button>
            </div>
            <div class="col-lg-4 mt-5 mt-lg-0">
                <div class="card">
                    <div class="card-body">
                        <img src="1.jpg" alt="church" class="img-fluid">
                        <h5 class="mt-4">NCCF IMO</h5>
                        <p class="text-muted">
                            Our core mission is radical Evangelism especially to the rural areas in our respective
                            states
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5 d-flex justify-content-around text-center align-items-center"
        style="margin-top: 10rem">
        <div>
            <h5 style="text-transform: uppercase">Zones</h5>
            <p class="display-1 mt-3">10</p>
        </div>
        <div>
            <h5 style="text-transform: uppercase">Sub Zones</h5>
            <p class="display-1 mt-3">33</p>
        </div>
    </div>
    <div class="container mb-5 " style="margin-top: 10rem">
        <h2 class="fw-bold text-center">
            Meet Our Executives
        </h2>
        <div class="row mt-5 justify-content-around align-items-center">
            <div class="col-lg-4">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel"
                    style="max-height: 30rem">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/executives/3.jpg" class="d-block w-100 rounded-5" height="450px"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/executives/8.jpg" class="d-block w-100 rounded-5" height="450px"
                                width="500px" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/executives/2.jpg" class="d-block w-100 rounded-5" height="450px"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-4">
                <div id="carouselExampleAutoplaying2" class="carousel slide" style="max-height: 30rem"
                    data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/executives/4.jpg" class="d-block w-100 rounded-5" height="450px"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/executives/7.jpg" class="d-block w-100 rounded-5" height="450px"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/executives/13.jpg" class="d-block w-100 rounded-5" height="450px"
                                width="500px" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button"
                        data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                        data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</body>
</div>

</html>
