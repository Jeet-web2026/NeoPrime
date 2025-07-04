<x-SecondLayout subheading="Client Login" bootstrap="active">
    <main class="vh-100 w-100">
        <div class="container-fluid h-100 d-flex justify-content-center align-items-center">
            <div class="card border-0 shadow w-50 p-3">
                <div class="card-body">
                    <h2 class="text-center fs-3 text-uppercase fw-bold mb-5">client login</h2>
                    <form action="{{ route('client-verify-login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none" id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none" id="password" name="password">
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input shadow-none" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary px-4 py-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-SecondLayout>