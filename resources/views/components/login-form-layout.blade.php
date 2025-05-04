@props(['login' => '', 'loginsubheading' => ''])
<x-SecondLayout bootstrap="active" subheading="{{ $loginsubheading }}">
    <main @if($login) id="{{ $login }}-login" @endif class="container-fluid d-flex justify-content-center align-items-center">
        @if($login == 'admin' || $login == 'partner')
        <div class="card shadow border-0 w-50 p-2" style="height: 60%;">
            <div class="card-body">
                <h2 class="text-uppercase fs-4 text-black fw-bold text-center mb-3">{{ $login }} login</h2>
                <form>
                    <div class="mb-3">
                        <label for="{{ $login }}-email" class="form-label text-black text-capitalize fw-semibold fs-5">Email address</label>
                        <input type="email" class="form-control shadow-none text-black" id="{{ $login }}-email" name="{{ $login }}-email">
                    </div>
                    <div class="mb-3">
                        <label for="{{ $login }}-password" class="form-label text-black text-capitalize fw-semibold fs-5">Password</label>
                        <input type="password" class="form-control shadow-none text-black" id="{{ $login }}-password" name="{{ $login }}-password">
                    </div>
                    <button type="submit" class="btn btn-outline-success shadow-none mt-4 w-100">Submit</button>
                </form>
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