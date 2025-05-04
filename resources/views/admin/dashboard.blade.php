<x-SecondLayout subheading="Admin" bootstrap="active" bIcons="active" jQuery="active">
    <main id="admin-dashboard">
        <div class="row h-100">
            <div class="col-md-2">
                <div class="card border-0 bg-transparent h-100">
                    <div class="card-body">
                        <a href="{{ route('admin-dashboard') }}" class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('essentials/images/website-logo-main.png') }}" alt="web-site-main-logo" class="admin-logo">
                        </a>
                        <h5 class="text-light text-uppercase fw-semibold fs-5 text-center">super admin</h5>
                        <div class="card border-0 bg-transparent d-flex justify-content-center align-items-center">
                            <div class="card-body w-100 px-0 admin-side-navigation">
                                <ul class="ps-0 w-100">
                                    <li class="text-capitalize fs-5 shadow-sm w-100 d-flex justify-content-start align-items-center p-2 rounded-3 mb-2 cursor-pointer">
                                        <i class="bi bi-house-gear me-2"></i>
                                        dashboard
                                    </li>
                                    <li class="text-capitalize fs-5 text-light shadow-sm w-100 d-flex justify-content-start align-items-center p-2 rounded-3">
                                        <i class="bi bi-gear me-2"></i>
                                        home
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 bg-primary bg-opacity-25 position-relative">
                <nav class="navbar navbar-expand-lg position-absolute w-100 top-0" style="background-color: #000046;">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link text-capitalize text-light" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-bell"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown mx-3">
                                    <a class="nav-link text-capitalize text-light" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        profile<i class="bi bi-plus ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu rounded-0 mt-2 shadow-sm border-0">
                                        <li><a class="dropdown-item text-capitalize" href="#">manage profile</a></li>
                                        <li>
                                            <form action="{{ route('admin-logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn shadow-none border-0">logout</button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2 shadow-none" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success shadow-none" type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </main>
    @section('extracss')
    <x-admin-css />
    @endsection
    @section('extrajs')
    <x-admin-js />
    @endsection
</x-SecondLayout>