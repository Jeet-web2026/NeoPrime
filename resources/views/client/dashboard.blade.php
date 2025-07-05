<x-SecondLayout subheading="Client Dashboard" bootstrap="active" bIcons="active">
    <main class="conatiner-fluid vh-100 w-100">
        <div class="row h-100">
            <div class="col-md-2 shadow pt-4 px-3">
                @php
                $client = auth()->user();
                $clientName = $client->name;
                @endphp
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <img src="{{ asset('essentials/images/client-default.jpg') }}" class="rounded-circle shadow-sm p-3 border" alt="{{ $clientName }}" style="height: 100px; width: 100px;">
                </div>
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active text-start text-black" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="bi bi-columns-gap me-3"></i>Dashboard</button>
                    <button class="nav-link text-start text-black" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="bi bi-person-bounding-box me-3"></i>Profile Settings</button>
                    <button class="nav-link text-start text-black" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="bi bi-box-seam me-3"></i>Products</button>
                    <button class="nav-link text-start text-black" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="bi bi-flower1 me-3"></i>Offers</button>
                    <button class="nav-link text-start text-black" id="v-pills-updates-tab" data-bs-toggle="pill" data-bs-target="#v-pills-updates" type="button" role="tab" aria-controls="v-pills-updates" aria-selected="false"><i class="bi bi-capslock me-3"></i>Updates</button>
                </div>
            </div>
            <div class="col-md-10 position-relative pt-5 px-2">
                <nav class="navbar navbar-expand-lg shadow position-absolute top-0 start-0 w-100 bg-white">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled">Disabled</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="v-pills-updates" role="tabpanel" aria-labelledby="v-pills-updates-tab" tabindex="0">...</div>
                </div>
            </div>
        </div>
    </main>

    @section('extracss')
    <style>
        .nav .active {
            background-color: #000000 !important;
            color: #ffffff !important;
        }

        .nav .nav-link {
            margin-bottom: 10px;
        }
    </style>
    @endsection
</x-SecondLayout>