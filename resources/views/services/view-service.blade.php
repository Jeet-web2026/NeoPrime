<x-MainLayout subheading="View Services" bootstrap="active" bIcons="active">
    <main class="h-100 w-100" style="padding-top: 22vh;">
        <div class="container">
            <h2 class="text-center text-black fs-3 fw-bold text-uppercase">{{ $data->services->name }}</h2>
            <nav aria-label="breadcrumb my-3w-100">
                <ol class="breadcrumb d-flex justify-content-center align-items-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('all-services') }}" class="text-decoration-none text-capitalize">Services</a></li>
                    <li class="breadcrumb-item active text-capitalize" aria-current="page">{{ $data->services->name }}</li>
                </ol>
            </nav>
            <div class="card border-0 shadow bg-white mb-5">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-3 col-sm-6 overflow-hidden pe-2">
                            <img src="{{ $data->services->image }}" alt="{{ $data->services->name }}" style="height: 15rem; width: 100%;" class="rounded-2">
                        </div>
                        <div class="col-md-9 ps-2">
                            <h6 class="text-secondary">{!! Str::limit($data->services->description, 1000) !!}</h6>
                        </div>
                        <div class="col-md-12 mt-4">
                            {!!$data->services_description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-MainLayout>