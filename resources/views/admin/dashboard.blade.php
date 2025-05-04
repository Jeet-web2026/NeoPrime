<x-SecondLayout subheading="Admin" bootstrap="active" bIcons="active" jQuery="active">
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
                                        <i class="bi bi-house-gear me-2"></i>
                                        dashboard
                                    </li>
                                    <li class="text-capitalize fs-5 text-light shadow-sm w-100 d-flex justify-content-start align-items-center p-2 rounded-3">
                                        <i class="bi bi-gear me-2"></i>
                                        home
                                    </li>
                                </ul>
                            </div>
                        </div>
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
    @section('extrajs')
    <x-admin-js />
    @endsection
</x-SecondLayout>