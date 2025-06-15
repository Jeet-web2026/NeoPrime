<x-MainLayout subheading="Careers" bootstrap="active" bIcons="active" jQuery="active">
    <main class="h-100 w-100 pb-5" style="padding-top: 25vh;">
        <div class="container">
            <h3 class="text-center text-uppercase text-black fw-bold fs-2 mb-5">our current openings</h3>
            <div class="row">
                @forelse($openings as $opening)
                <div class="col-md-6 mb-3 {{ $loop->even ? 'ps-1' : 'pe-1' }}">
                    <div class="card shadow border">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize text-black fs-5 mb-3">{{ $opening->designation }}</h5>
                            <p class="card-text text-capitalize mb-1">salary : {{ $opening->salary_range }}</p>
                            <p class="card-text text-capitalize mb-1">expected start date : {{ $opening->start_date }}</p>
                            <p class="card-text text-capitalize mb-2">requirements : {{ $opening->requirements }}</p>
                            <p class="card-text text-capitalize mb-3">{{ Str::limit($opening->description, 100) }}</p>
                            <a href="{{ route('job-view', $opening->id) }}" class="btn btn-outline-primary px-3">View<i class="bi bi-box-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-sm-6 mb-3 mb-sm-0 pe-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0 pe-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                @endforelse
                <div class="d-flex justify-content-center align-items-center">
                    {{ $openings->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </main>
</x-MainLayout>