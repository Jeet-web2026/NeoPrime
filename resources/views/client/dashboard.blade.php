<x-SecondLayout subheading="Client Dashboard" bootstrap="active" bIcons="active" jQuery="active">
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
                    <button class="nav-link text-start text-black" id="v-pills-order-checklist-tab" data-bs-toggle="pill" data-bs-target="#v-pills-check-list" type="button" role="tab" aria-controls="v-pills-check-list" aria-selected="false"><i class="bi bi-cart-check me-3"></i>Check List</button>
                    <button class="nav-link text-start text-black" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="bi bi-flower1 me-3"></i>Offers</button>
                    <button class="nav-link text-start text-black" id="v-pills-updates-tab" data-bs-toggle="pill" data-bs-target="#v-pills-updates" type="button" role="tab" aria-controls="v-pills-updates" aria-selected="false"><i class="bi bi-capslock me-3"></i>Updates</button>
                </div>
            </div>
            <div class="col-md-10 position-relative pt-5 pb-4 px-4 vh-100 overflow-auto">
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
                                <div class="card shadow border-0 p-2" style="height: 575px;">
                                    <div class="card-body">
                                        <form id="client-details-settings">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="client-email" class="form-label">Email address</label>
                                                <input type="email" class="form-control shadow-none" id="client-email" value="{{ $client->email }}" name="client-email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="client-name" class="form-label">Name</label>
                                                <input type="text" class="form-control shadow-none" id="client-name" value="{{ $clientName }}" name="client-name">
                                            </div>
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="client-address" class="form-label">Address</label>
                                                        <input type="text" class="form-control shadow-none" id="client-address" value="{{ $client->address }}" name="client-address">
                                                    </div>
                                                    <div class="col-md-4 px-2">
                                                        <label for="client-address-second" class="form-label">Address Second</label>
                                                        <input type="text" class="form-control shadow-none" id="client-address-second" value="{{ $client->address_second }}" name="client-address-second">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="client-country" class="form-label">Country</label>
                                                        <input type="text" class="form-control shadow-none" id="client-country" value="{{ $client->country }}" name="client-country">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="client-state" class="form-label">State</label>
                                                        <input type="text" class="form-control shadow-none" id="client-state" value="{{ $client->state }}" name="client-state">
                                                    </div>
                                                    <div class="col-md-4 px-2">
                                                        <label for="client-city" class="form-label">City</label>
                                                        <input type="text" class="form-control shadow-none" id="client-city" value="{{ $client->city }}" name="client-city">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="client-pincode" class="form-label">Pincode</label>
                                                        <input type="text" class="form-control shadow-none" id="client-pincode" value="{{ $client->pincode }}" name="client-pincode">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="client-profile-image" class="form-label">Profile Image</label>
                                                <input type="text" class="form-control shadow-none" id="client-profile-image" name="client-profile-image">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Password ( must be six characters long )</label>
                                                <input type="password" class="form-control shadow-none" id="exampleInputPassword1">
                                            </div>
                                            <button type="submit" class="btn btn-primary border-0 shadow-none">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ps-1">
                                <div class="card shadow border-0" style="height: 575px;">
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
                    <div class="tab-pane fade mt-4" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                        <div class="row">
                            @forelse($services as $service)
                            <div class="col-md-4 p-2">
                                <div class="card border shadow-sm p-3">
                                    <p class="mb-0 fs-5">{!! $service->icon !!}</p>
                                    <div class="card-body px-0 pb-0">
                                        <h5 class="card-title text-capitalize mb-4 fw-semibold">{{ $service->name }}</h5>
                                        <a href="{{ route('client-product-view', $service->id ) }}" target="_blank" class="btn btn-outline-primary shadow-none">View<i class="bi bi-eye ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="col-md-4 p-2">
                                <div class="card border-0 shadow-sm">

                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            @endforelse
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                    <div class="tab-pane fade mt-4" id="v-pills-check-list" role="tabpanel" aria-labelledby="v-pills-order-checklist-tab" tabindex="0">
                        <div class="row">
                            @forelse($orderlists as $order)
                            <div class="col-md-12">
                                <div class="card mb-3 shadow border-0">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="..." class="img-fluid rounded-start" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <a href="" class="btn btn-success px-3 me-1 py-2 shadow-none border-0"><i class="bi bi-check2-circle me-2"></i>Pay Now</a>
                                                <a href="" class="btn btn-secondary px-3 py-2 shadow-none"><i class="bi bi-x-lg me-2"></i>Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <h5 class="text-center fw-semibold fs-4">Checklist is empty!</h5>
                            @endforelse
                        </div>
                    </div>
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
    @section('extrajs')
    <script>
        $(document).ready(function() {
            $(this).on('submit', '#client-details-settings', function(e) {
                e.preventDefault();
            });
        });
    </script>
    @endsection
</x-SecondLayout>