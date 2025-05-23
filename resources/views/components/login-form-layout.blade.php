@props(['login' => '', 'loginsubheading' => ''])
<x-SecondLayout bootstrap="active" subheading="{{ $loginsubheading }}">
    <main @if($login) id="{{ $login }}-login" @endif class="container-fluid d-flex justify-content-center align-items-center">
        @if($login == 'admin' || $login == 'partner')
        <div class="card shadow border-0 w-50 p-2">
            <div class="card-body">
                @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="card mb-3 border-0 bg-transparent mt-3">
                    <div class="row g-0 w-100 align-items-center">
                        <div class="col-md-4 pe-2">
                            <img src="https://img.freepik.com/free-vector/my-password-concept-illustration_114360-3864.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid&w=740" alt="{{ $login }}-image" style="height: 14rem; width: auto;">
                            <h2 class="text-center fs-3 text-black text-uppercase mt-2">{{ $login }}</h2>
                        </div>
                        <div class="col-md-8 ps-2">
                            <div class="card-body pe-0">
                                <form action="{{ route($login . '-verify') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="{{ $login }}-email" class="form-label text-black text-capitalize fw-semibold fs-5">Email address</label>
                                        <input type="email" class="form-control shadow-none text-black" id="{{ $login }}-email" name="{{ $login }}-email" value="{{ old($login . '-email') }}">
                                        @error($login . '-email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="{{ $login }}-password" class="form-label text-black text-capitalize fw-semibold fs-5">Password</label>
                                        <input type="password" class="form-control shadow-none text-black" id="{{ $login }}-password" name="{{ $login }}-password">
                                        @error($login . '-password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pe-1">
                                            <button type="submit" class="btn btn-outline-success shadow-none mt-4 w-100">Submit</button>
                                        </div>
                                        <div class="col-md-6 ps-1">
                                            <a href="{{ url('/') }}" class="btn btn-outline-secondary shadow-none mt-4 w-100">Back</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @elseif($login == 'client')
        <div class="card shadow border-0 w-75 h-75">
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
        @endif
    </main>
    @section('extracss')
    @yield('formcss')
    @endsection
</x-SecondLayout>