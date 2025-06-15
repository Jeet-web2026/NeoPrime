<x-MainLayout subheading="Careers" bootstrap="active" bIcons="active" jQuery="active">
    <main class="h-100 w-100 pb-5" style="padding-top: 25vh;">
        <div class="container px-5">
            <h3 class="text-center text-uppercase text-black fw-bold fs-2 mb-2">job description</h3>
            <div class="d-flex justify-content-center align-items-center">
                <nav aria-label="breadcrumb" class="mb-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('career-view') }}" class="text-decoration-none">Current Openings</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $data->designation }}</li>
                    </ol>
                </nav>
            </div>
            <div class="card border-0 shadow mb-3">
                <div class="card-body">
                    <h5 class="text-black text-capitalize fs-4 text-center mb-5 mt-3">{{ $data->designation }}</h5>
                    <p class="card-text text-capitalize mb-3">{{ $data->description }}</p>
                    <div class="d-flex justify-content-center align-items-center mt-5">
                        <a href="" class="btn btn-primary px-3 text-capitalize me-2">apply</a>
                        <a href="{{ route('career-view') }}" class="btn btn-secondary px-3 text-capitalize">back</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-MainLayout>