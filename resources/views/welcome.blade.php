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
                            <a class="nav-link active" href="#donations">Make Donations</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link active" href="/login">Login</a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a class="nav-link active" href="/login">Register</a>
                            </li>
                            <a href="/register" class="btn btn-dark px-4 ms-3 d-none d-lg-block">Register</a>
                        @endguest

                        @auth
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endauth
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
    <div class="container-fluid mb-5" id="table">
        <h2 class="text-light text-center display-4">Our Weekly Programs</h2>
        <div class="container">
            <table class="table table-borderless table-dark table-hover mt-4">
                <thead class="table-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Service</th>
                        <th scope="col">Day</th>
                        <th scope="col">Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>State Sunday Service</td>
                        <td>Sunday</td>
                        <td>5:00pm</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Disciplineship Class</td>
                        <td>Monday</td>
                        <td>5:00pm</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Prayer Meeting</td>
                        <td>Tuesday</td>
                        <td>8:00pm</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Prayer Chain</td>
                        <td>Thursday</td>
                        <td>8:00pm</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Bible Study</td>
                        <td>Friday</td>
                        <td>8:00pm</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="text-center">
            <h3 class="display-5 text-decoration-underline mb-5">NCCF Core Mandate</h3>
            <h1 class="mb-4">RURAL RUGGED EVANGELISM</h1>
            <p class="lead">
                The core mandate of the Nigeria Christian Corper's Fellowship(NCCF) is known as Rural Rigged Evangelism.
                This mission is the responsibilty of every Jesus Corper withing the NCCF community.
            </p>
        </div>
        <div class="row mb-5" style="margin-top: 7rem">
            <div class="col-lg-4 text-center">
                <div class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                        <path
                            d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5" />
                        <path
                            d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z" />
                    </svg>
                </div>
                <h4>Rural Rugged</h4>
                <p>This term encapsulate the specific mission of evangelizing in rural and remote areas of Nigeria.
                    These regions often lack access to mainstream religious services and are considered unreached in
                    terms of Christian outreach.</p>
            </div>
            <div class="col-lg-4 text-center">
                <div class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                        <path
                            d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1z" />
                    </svg>
                </div>
                <h4>Responsibility</h4>
                <p>Within the NCCF community, every memeber, referred to as a Jesus Corper is entrusted with the
                    responsibility of participating in Rural Rugged Evangelism. This underscores the collective effort
                    required to fulfill the mission</p>
            </div>
            <div class="col-lg-4 text-center">
                <div class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-play-fill" viewBox="0 0 16 16">
                        <path
                            d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                    </svg>
                </div>
                <h4>Mission Objective</h4>
                <p>The primary objective of Rural Rugged Evangelism is to bring the message of God's glory and salvation
                    to souls in remote and undeserved areas. This aligns with the broader mission of NCCF to spread the
                    Chirstian faith and impact society.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid p-4 my-5" id="donations">
        <div class="container my-5">
            <div class="text-center text-light p-5">
                <h5 class="display-5">
                    Donations and Support
                </h5>
                <p class="lead">
                    Feel free to use the provided bank details for your support contributions to NCCF Imo State. Thank
                    you for your generosity and support in advancing our mission and projects.
                </p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="card-title mb-4">
                                <h2 class="fw-bold">For Regular Support (Tithe, Offering, Donations, Vows, etc.)</h2>
                            </div>
                            <p class="lead">
                            <h6>Bank Name: UBA</h6>
                            <h6> Account Number: 2002407140</h6>
                            <h6> Account Name: NCCF Imo State</h6>
                            </p>
                            <div class="mt-4 text-center">
                                <a href="#" class="btn btn-purple rounded-pill px-5">Transfer</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="card-title mb-4">
                                <h2 class="fw-bold">For Project Support (Building, Bus, and Others)</h2>
                            </div>
                            <p class="lead">
                            <h6>Bank Name: Access Bank</h6>
                            <h6>Account Number: 0021954159</h6>
                            <h6>Account Name: NCCF Imo State Project</h6>
                            </p>
                            <div class="mt-4 text-center">
                                <a href="#" class="btn btn-purple rounded-pill px-5">Transfer</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="card-title mb-4">
                                <h5 class="fw-bold">For rural rugged, pledges, outreaches, capitation, and orientation,
                                    camp mission
                                    Capitation: This is a one month federal government allowance sown as seed of faith
                                    to further the gospel</h5>
                            </div>
                            <p class="lead">
                            <h6>Bank Name: First Bank</h6>
                            <h6>Account Number: 3009411213</h6>
                            <h6>Account Name: NCCF Imo State</h6>
                            </p>
                            <div class="mt-4 text-center">
                                <a href="#" class="btn btn-purple rounded-pill px-5">Transfer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer p-3">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h4>NCCFIMO</h4>
                    <p class="text-muted">The fellowship operates independently, not being affiliated with <br> or
                        financially supported by any
                        individual</p>
                </div>
                <div class="col-lg-3" id="quick">
                    <h6 class="fw-bold text-uppercase">Quick Links</h6>
                    <p><a href="#" class="nav-link">About</a></p>
                    <p><a href="#" class="nav-link">Profile</a></p>
                    <p><a href="#" class="nav-link">Sign Up</a></p>
                </div>
                <div class="col-lg-3" id="contactus">
                    <h6 class="fw-bold text-uppercase">Contact Us</h6>
                    <p><a href="#" class="nav-link"><span class="me-3"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                </svg></span>J: 08151676347</a></p>
                    <p><a href="#" class="nav-link"><span class="me-3"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                </svg></span>B: 08037106044</a></p>
                    <p><a href="#" class="nav-link"><span class="me-3"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                </svg></span>Area V Estate, Behind Holy Rosary College,
                            Port-Harcourt Road New Owerri, Owerri Imo State.</a></p>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p class="text-muted">
                    Copyright &copy; <span id="year"></span> NCCFIMO
                </p>
            </div>
        </div>
    </footer>
    <script>
        const year = document.querySelector('#year');

        const date = new Date();

        year.innerHTML = date.getFullYear();
    </script>
</body>

</html>
