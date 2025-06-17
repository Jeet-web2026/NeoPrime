<x-MainLayout subheading="Our Experts" bootstrap="active" bIcons="active" jQuery="active">
    <main class="h-100 w-100" style="padding-top: 25vh;">
        <div class="container px-5">
            @foreach($experts as $employee)
            <div class="card mb-3 border-0 shadow-sm">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $employee->employee_profile }}" class="img-fluid rounded-start w-100" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="d-flex justify-content-center mt-5">
                {{ $experts->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </main>
</x-MainLayout>