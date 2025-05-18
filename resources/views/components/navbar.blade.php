<header class="w-100 fixed-top shadow">
    <nav class="navbar navbar-expand-lg py-0" style="background-color: #000046;">
        <div class="container-fluid px-5">
            <a class="navbar-brand text-light" href="{{ url('/') }}">
                <img src="{{ asset('essentials/images/website-logo-main.png') }}" alt="main-website-logo" class="main-web-side-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NeoCartNavbar" aria-controls="NeoCartNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="NeoCartNavbar">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item me-3">
                        <a class="nav-link active text-light" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link font-500 text-light" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About<i class="bi bi-plus ms-2"></i>
                        </a>
                        <ul class="dropdown-menu no-radius border-0 shadow-sm">
                            <li><a class="dropdown-item text-capitalize" href="{{ route('about-us-page') }}">about us</a></li>
                            <li><a class="dropdown-item text-capitalize" href="{{ route('who-we-are-page') }}">who we are</a></li>
                            <li><a class="dropdown-item text-capitalize" href="{{ route('vission-mission-page') }}">our vission & mission</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link font-500 text-light" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services<i class="bi bi-plus ms-2"></i>
                        </a>
                        <ul class="dropdown-menu no-radius border-0 shadow-sm">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link font-500 text-light" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pages<i class="bi bi-plus ms-2"></i>
                        </a>
                        <ul class="dropdown-menu no-radius border-0 shadow-sm">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link text-light" href="javascript:void(0)">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="javascript:void(0)">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex contact-section me-5">
                <a href="tel:+919163715179" class="text-light text-decoration-none">
                    <span class="d-flex justify-content-center align-items-center">
                        <i class="bi bi-telephone-fill rounded-circle me-3"></i>
                        <span>
                            <p class="text-decoration-none text-light mb-0">Make a call</p>
                            <p class="text-decoration-none text-light mb-0">+91 9163715179</p>
                        </span>
                    </span>
                </a>
            </div>
            <button class="btn border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#hamburger-menu" aria-controls="hamburger-menu">
                <i class="bi bi-list text-light fs-5"></i>
            </button>
        </div>
    </nav>
</header>