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
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">


</head>

<body>
    <div class="background">
        <x-navbar :announcements=$announcements />

        <div class="container text-light" style="margin-top: 13rem;">
            <div data-aos="fade-up">
                <h1 class="display-3 text-light text-uppercase">
                    Welcome to <br> NCCF IMO STATE
                </h1>
                <p class="lead">Welcome to the official NCCFIMO website</p>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-4 col-12 my-4">
                <div class="card mb-4" id="intro" data-aos="fade-up" data-aos-delay="100" id="card">
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
                        <p class="text-sm text-muted mt-3">
                            NCCF Imo State, unites individuals in faith, fostering spritual growth through prayer
                            meetings, and worship services, encouraging mutual support and shared Christian values.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-4">
                <div class="card" id="intro" data-aos="fade-up" data-aos-delay="100" id="card">
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
                        <p class="text-sm text-muted mt-3">
                            As a legally registered entity with the government, NCCF operates with a structured
                            governance system, defined roles, and committees for effective management of its activities.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-4">
                <div class="card" id="intro" data-aos="fade-up" data-aos-delay="100" id="card">
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
                        <p class="text-sm text-muted mt-3">
                            NCCF provides a nurturing supportive environment where members care for each other
                            emotionally, spiritually, and creating a strong sense of community (Where members feel
                            valued and loved) and belonging
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5" style="margin-top: 10rem;" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-between align-items-center" id="about">
            <div class="col-lg-7">
                <h2 class="fw-bold gradient-text">ABOUT NCCF IMO
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
    <div class="container mb-5 d-flex justify-content-around text-center align-items-center" style="margin-top: 10rem"
        data-aos="fade-up" data-aos-delay="100">
        <div>
            <h5 style="text-transform: uppercase">Zones</h5>
            <p class="display-1 mt-3">10</p>
        </div>
        <div>
            <h5 style="text-transform: uppercase">Sub Zones</h5>
            <p class="display-1 mt-3">33</p>
        </div>
    </div>
    <div class="container mb-5 " style="margin-top: 10rem" data-aos="fade-up" data-aos-delay="100">
        <h2 class="fw-bold text-center">
            Meet Our Executives
        </h2>
        <div class="row mt-5 justify-content-around align-items-center">
            <div class="col-lg-4 col-12">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel"
                    style="max-height: 35rem">
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
                            <img src="/new-exec/8.jpg" class="d-block w-100 rounded-5" height="450px"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Gutip Meshack Emmanuel</h5>
                                <p>President</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/new-exec/4.jpg" class="d-block w-100 rounded-5" height="450px"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Adesiyan Mary Ikeoluwa</h5>
                                <p>Drama Director</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/new-exec/5.jpg" class="d-block w-100 rounded-5" height="450px" width="500px"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Ogbleba, Oseini Harry</h5>
                                <p>Bible Study Secretary</p>
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
            <div class="col-lg-4 d-none d-lg-grid">
                <div id="carouselExampleAutoplaying2" class="carousel slide" style="max-height: 35rem"
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
                            <img src="/new-exec/1.jpg" class="d-block w-100 rounded-5" height="450px"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Adegoke Leah Feranmi</h5>
                                <p>Treasurer</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/new-exec/2.jpg" class="d-block w-100 rounded-5" height="450px"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Omatise Victor</h5>
                                <p>Publicity Secretary</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/new-exec/3.jpg" class="d-block w-100 rounded-5" height="450px" width="500px"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Lawal Olalekan Samuel</h5>
                                <p>Evangelism Secretary</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/new-exec/9.jpg" class="d-block w-100 rounded-5" height="450px"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Cynthia Gift Stanley</h5>
                                <p>Music Director</p>
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
        <div class="text-center mt-5">
            <h6>You want to know more of our Executive?</h6>
            <a href="/gallery" class="fw-bold h5">Visit the Gallery</a>
        </div>
    </div>
    <div class="container-fluid mb-5" id="table" data-aos="fade-up" data-aos-delay="100">
        <h2 class="text-light text-center display-4">Our Weekly Programs</h2>
        <div class="container">
            <table class="table table-borderless table-light table-hover mt-4">
                <thead class="table-dark">
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
    <div class="container" data-aos="fade-up">
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
    <div class="container-fluid p-4 my-5" id="donations" data-aos="fade-up" data-aos-delay="100">
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
                                <a href="{{ route('soon') }}" class="btn btn-dark rounded-pill px-5">Make Payment</a>
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
                                <a href="{{ route('soon') }}" class="btn btn-dark rounded-pill px-5">Make Payment</a>
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
                                <a href="{{ route('soon') }}" class="btn btn-dark rounded-pill px-5">Make Payment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer />
</body>

</html>
