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
            <div class="col-md-10 position-relative pt-5 px-4">
                <nav class="navbar navbar-expand-lg z-1 shadow position-absolute top-0 start-0 w-100 bg-white">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="ms-auto d-flex align-items-center">
                                <div class="dropdown me-2">
                                    <button class="btn border-0 shadow-none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('essentials/images/client-default.jpg') }}" class="rounded-circle shadow-sm p-1 border" alt="{{ $clientName }}" style="height: 30px; width: 30px;">
                                        </div>
                                    </button>
                                    <ul class="dropdown-menu mt-2 border-0 shadow-sm">
                                        <li><a class="dropdown-item" href="#">Refer & Earn</a></li>
                                        <li><a class="dropdown-item" href="#">Logout</a></li>
                                    </ul>
                                </div>
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2 shadow-none" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">

                    </div>
                    <div class="tab-pane fade mt-4" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-8 pe-1">
                                <div class="card shadow border-0">
                                    <div class="card-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1">
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ps-1">
                                <div class="card shadow border-0">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center align-items-center mb-4">
                                            <img src="{{ asset('essentials/images/client-default.jpg') }}" class="rounded-circle shadow-sm p-3 border" alt="{{ $clientName }}" style="height: 80px; width: 80px;">
                                        </div>
                                        <ul class="list-group">
                                            <li class="list-group-item"><b>Name:</b> {{ $clientName }}</li>
                                            <li class="list-group-item"><b>Address:</b> {{ $client->address . ', ' . $client->address_second . ', ' . $client->country . ', ' . $client->state . ', ' . $client->city . ', ' . $client->pincode }}</li>
                                            <li class="list-group-item"><b>Email:</b> {{ $client->email }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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