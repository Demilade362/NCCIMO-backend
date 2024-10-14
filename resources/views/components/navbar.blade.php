<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-lg-top">
    <div class="container">
        <a class="d-flex align-items-center justify-content-between text-decoration-none" href="/">
            <img src="icon.png" class="img-fluid" width="30" height="30" alt="">
            <span class="navbar-brand ms-2">NCCFIMO</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#about">About</a>
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
                    <li class="nav-item me-4">
                        <a href="#" class="nav-link active position-relative" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
                            aria-controls="offcanvasWithBothOptions">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bell-fill me-1" viewBox="0 0 16 16">
                                <path
                                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
                            </svg>
                            <span class="position-absolute top-2 start-100 translate-middle badge rounded-pill bg-danger">
                                @php
                                    echo count($announcements);
                                @endphp
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a href="{{ route('profile') }}" class="dropdown-item">Profile</a>
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

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
    aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Announcements</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        @foreach ($announcements as $announcement)
            <div class="card bg-white shadow-sm">
                <div class="card-img">
                    {{-- <img src="./storage/{{ $announcement->image }}" alt="banner" class="img-fluid"> --}}
                </div>
                <div class="card-body">
                    <h5>{{ $announcement->title }}</h5>
                    <p class="short">{{ $announcement->description }}</p>
                    <div class="text-end">
                        <a href="/" class="">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
