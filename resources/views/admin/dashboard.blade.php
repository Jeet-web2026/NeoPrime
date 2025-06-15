<x-SecondLayout subheading="Admin Dashboard" bootstrap="active" bIcons="active" jQuery="active" slickcarousel="active">
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
                                        <i class="bi bi-boxes me-2"></i>
                                        dashboard
                                    </li>
                                    <li class="text-capitalize fs-5 text-light shadow-sm w-100 d-flex justify-content-start align-items-center p-2 rounded-3">
                                        <i class="bi bi-house-gear me-2"></i>
                                        home
                                    </li>
                                    <li class="text-capitalize fs-5 text-light shadow-sm w-100 d-flex justify-content-start align-items-center p-2 rounded-3">
                                        <i class="bi bi-gear me-2"></i>
                                        services
                                    </li>
                                    <li class="text-capitalize fs-5 text-light shadow-sm w-100 d-flex justify-content-start align-items-center p-2 rounded-3">
                                        <i class="bi bi-clipboard2-data-fill me-2"></i>
                                        career
                                    </li>
                                    <li class="text-capitalize fs-5 text-light shadow-sm w-100 d-flex justify-content-start align-items-center p-2 rounded-3">
                                        <i class="bi bi-person-badge me-2"></i>
                                        employee
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 bg-primary bg-opacity-25 position-relative">
                <nav class="navbar navbar-expand-lg position-absolute w-100 top-0 z-1" style="background-color: #000046;">
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
                                <li class="nav-item dropdown-center mx-3">
                                    <a class="nav-link text-capitalize text-light" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        profile<i class="bi bi-plus ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu rounded-0 mt-2 shadow-sm border-0">
                                        <li><a class="dropdown-item text-capitalize" href="#">manage profile</a></li>
                                        <li class="dropdown-item text-capitalize">
                                            <form action="{{ route('admin-logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn shadow-none border-0 ps-0">logout</button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2 shadow-none" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-success shadow-none" type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="card border-0 pt-5 bg-transparent overflow-auto" style="height: 100vh;">
                    <div class="card-body">
                        <div class="card border-0 shadow h-100 mt-1">
                            <div class="card-body admin-components">
                                <div class="card border-0 bg-transparent component">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-md-4 pe-2">
                                                <div class="card shadow border-0">
                                                    <div class="card-body">
                                                        <h2 class="fs-2 text-black fw-semibold text-center">15</h2>
                                                        <p class="text-uppercase mb-0 text-center text-black">pending projects</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 px-2">
                                                <div class="card shadow border-0">
                                                    <div class="card-body">
                                                        <h2 class="fs-2 text-black fw-semibold text-center">{{ $NewCallBack }}</h2>
                                                        <p class="text-uppercase mb-0 text-center text-black">new callback request</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 ps-2">
                                                <div class="card shadow border-0">
                                                    <div class="card-body">
                                                        <h2 class="fs-2 text-black fw-semibold text-center">15</h2>
                                                        <p class="text-uppercase mb-0 text-center text-black">ongoing projects</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-2 pe-2">
                                                <div class="card bg-transparent shadow border-0">
                                                    <div class="card-body">
                                                        <img src="https://quickchart.io/chart?c={type:'pie',data:{labels:['January','February','March','April','May'],datasets:[{data:[50,60,70,180,190]}]}}" class="chart-img" alt="chart">
                                                        <h3 class="fs-5 text-center text-capitalize mt-2">last 5 months data</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 mt-2 ps-2">
                                                <div class="card bg-transparent shadow border-0">
                                                    <div class="card-body">
                                                        <h5 class="text-capitalize text-black fs-5 mb-3">current updates</h5>
                                                        <marquee behavior="scroll" direction="up" onmouseenter="this.stop()" onmouseleave="this.start()" style="height: 12.3rem;">
                                                            <ul class="list-group">
                                                                <li class="list-group-item">An item</li>
                                                                <li class="list-group-item">A second item</li>
                                                                <li class="list-group-item">A third item</li>
                                                                <li class="list-group-item">A fourth item</li>
                                                                <li class="list-group-item">And a fifth one</li>
                                                                <li class="list-group-item">A third item</li>
                                                                <li class="list-group-item">A fourth item</li>
                                                                <li class="list-group-item">And a fifth one</li>
                                                            </ul>
                                                        </marquee>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <div class="card bg-transparnt shadow border-0">
                                                    <div class="card-body px-5">
                                                        <h5 class="text-capitalize fs-5 text-center mb-3">today's plan</h5>
                                                        <div class="row plan">
                                                            <div class="col px-2">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        This is some text within a card body.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col px-2">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        This is some text within a card body.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col px-2">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        This is some text within a card body.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col px-2">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        This is some text within a card body.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col px-2">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        This is some text within a card body.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col px-2">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        This is some text within a card body.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 bg-transparent component">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Landing Content</button>
                                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Callback Request</button>
                                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Our Offer</button>
                                            <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false">About Us</button>
                                            <button class="nav-link" id="nav-services-tab" data-bs-toggle="tab" data-bs-target="#nav-services" type="button" role="tab" aria-controls="nav-services" aria-selected="false">Services</button>
                                            <button class="nav-link" id="nav-videos-tab" data-bs-toggle="tab" data-bs-target="#nav-videos" type="button" role="tab" aria-controls="nav-videos" aria-selected="false">Videos</button>
                                            <button class="nav-link" id="nav-blogs-tab" data-bs-toggle="tab" data-bs-target="#nav-blogs" type="button" role="tab" aria-controls="nav-blogs" aria-selected="false">Blogs</button>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                            <x-admin-landing-content-tab />
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                                            <x-admin-callback-request />
                                        </div>
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                                            <x-what-we-offer />
                                        </div>
                                        <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">
                                            <x-about-us />
                                        </div>
                                        <div class="tab-pane fade" id="nav-services" role="tabpanel" aria-labelledby="nav-services-tab" tabindex="0">
                                            <x-our-services />
                                        </div>
                                        <div class="tab-pane fade" id="nav-videos" role="tabpanel" aria-labelledby="nav-videos-tab" tabindex="0">
                                            <x-latest-videos />
                                        </div>
                                        <div class="tab-pane fade" id="nav-blogs" role="tabpanel" aria-labelledby="nav-blogs-tab" tabindex="0">
                                            <x-blogs />
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 bg-transparent component">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-our-services-tab" data-bs-toggle="tab" data-bs-target="#nav-our-services" type="button" role="tab" aria-controls="nav-our-services" aria-selected="true">Services</button>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-our-services" role="tabpanel" aria-labelledby="nav-our-services-tab" tabindex="0">
                                            <x-admin-services-tab />
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 bg-transparent component">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-add-employees-tab" data-bs-toggle="tab" data-bs-target="#nav-add-employees" type="button" role="tab" aria-controls="nav-add-employees" aria-selected="true">Current Vaccancy</button>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-add-employees" role="tabpanel" aria-labelledby="nav-add-employees-tab" tabindex="0">
                                            <x-admin-career-management />
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 bg-transparent component">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-add-employees-tab" data-bs-toggle="tab" data-bs-target="#nav-add-employees" type="button" role="tab" aria-controls="nav-add-employees" aria-selected="true">Add Employee</button>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-add-employees" role="tabpanel" aria-labelledby="nav-add-employees-tab" tabindex="0">
                                            <x-admin-employee-management />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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