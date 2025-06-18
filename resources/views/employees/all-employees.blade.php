<x-MainLayout subheading="Our Experts" bootstrap="active" bIcons="active" jQuery="active">
    <main class="h-100 w-100" style="padding-top: 25vh;">
        <div class="container px-5">
            <h2 class="text-center text-uppercase mb-2 fw-bold fs-1">our experts</h2>
            <div class="d-flex justify-content-center align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-capitalize" aria-current="page">our experts</li>
                    </ol>
                </nav>
            </div>
            <div class="row mb-3">
                @foreach($experts as $expert)
                <div class="col-md-4 p-2">
                    <div class="card shadow-sm">
                        <img src="{{ $expert->employee_profile }}" class="card-img-top" alt="{{ $expert->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $expert->name }}</h5>
                            <p class="card-text">{{ $expert->designation }}</p>
                            <a href="#" class="btn btn-primary shadow-none w-100 text-capitalize">know more</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center align-items-center">
                {{ $experts->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </main>
    @section('extracss')
    <style>
        .card-img-top {
            height: 15rem;
            object-fit: cover;
        }
    </style>
    @endsection
</x-MainLayout>