@props(['login' => '', 'loginsubheading' => ''])
<x-SecondLayout bootstrap="active" subheading="{{ $loginsubheading }}" jQuery="true">
    <main @if($login) id="{{ $login }}-login" @endif class="container-fluid vh-100 d-flex justify-content-center align-items-center">
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
        <div class="card shadow border-0 w-75 p-3">
            <div class="card-body">
                @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <h2 class="text-uppercase fw-semibold text-center mb-4 mt-2">client's register portal</h2>
                <form action="{{ route($login .'-verify') }}" class="row g-3" method="POST">
                    @csrf
                    <div class="col-md-6 pe-1">
                        <label for="{{ $login }}-email" class="form-label text-black">Email</label>
                        <input type="email" class="form-control shadow-none text-black" id="{{ $login }}-email" name="{{ $login }}-email" placeholder="e.g. example@gmail.com" value="{{ old($login . '-email') }}">
                        @error($login . '-email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 ps-1">
                        <label for="{{ $login }}-name" class="form-label text-black">Name</label>
                        <input type="text" class="form-control shadow-none text-black" id="{{ $login }}-name" name="{{ $login }}-name" placeholder="e.g. xyz organisation" value="{{ old($login . '-name') }}">
                        @error($login . '-name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="{{ $login }}-address" class="form-label text-black">Address</label>
                        <input type="text" class="form-control shadow-none text-black" id="{{ $login }}-address" name="{{ $login }}-address" placeholder="1234 Main St" value="{{ old($login . '-address') }}">
                        @error($login . '-address')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="{{ $login }}-address-second" class="form-label text-black">Address 2</label>
                        <input type="text" class="form-control shadow-none text-black" id="{{ $login }}-address-second" name="{{ $login }}-address-second" placeholder="Apartment, studio, or floor" value="{{ old($login . '-address-second') }}">
                        @error($login . '-address-second')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="{{ $login }}-country" class="form-label text-black">Country</label>
                        <select id="{{ $login }}-country" name="{{ $login }}-country" class="form-select shadow-none text-black">
                        </select>
                        @error($login . '-country')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 ps-2">
                        <label for="{{ $login }}-state" class="form-label text-black">State</label>
                        <select id="{{ $login }}-state" name="{{ $login }}-state" class="form-select shadow-none text-black">
                            <option value="">Choose State</option>
                        </select>
                        @error($login . '-state')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 px-2">
                        <label for="{{ $login }}-city" class="form-label text-black">City</label>
                        <select id="{{ $login }}-city" name="{{ $login }}-city" class="form-select shadow-none text-black">
                            <option value="">Choose city</option>
                        </select>
                        @error($login . '-city')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <label for="{{ $login }}-zip" class="form-label text-black">Zip</label>
                        <input type="text" class="form-control shadow-none text-black" id="{{ $login }}-zip" name="{{ $login }}-zip" value="{{ old($login . '-zip') }}">
                        @error($login . '-zip')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-primary shadow-none border-0 px-4 py-2">Register</button>
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