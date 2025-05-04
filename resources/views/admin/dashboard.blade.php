<x-SecondLayout subheading="Admin" bootstrap="active">
    <main id="admin-dashboard">
        <div class="row h-100">
            <div class="col-md-2">
                <div class="card border-0 bg-transparent h-100 d-flex justify-content-center align-items-center">
                    <div class="card-body">
                        <a href="{{ route('admin-dashboard') }}" class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('essentials/images/website-logo-main.png') }}" alt="web-site-main-logo" class="admin-logo">
                        </a>
                        <h5 class="text-light text-uppercase fw-semibold fs-5">admin panel</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-10 bg-primary bg-opacity-25">

            </div>
        </div>
    </main>
    @section('extracss')
    <x-admin-css />
    @endsection
</x-SecondLayout>