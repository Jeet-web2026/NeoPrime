<x-MainLayout bootstrap="active" bIcons="active" jQuery="active" subheading="Blogs">
    <main class="h-100 w-100 pt-5">
        <div class="container-fluid p-5">
            <div class="mt-5 px-5">
                <h2 class="text-center text-black text-uppercase fs-2 fw-bold mb-5">our latest blogs</h2>
                @forelse($blogs as $blog)
                <div class="card mb-3 border-0 shadow">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $blog->blog_image }}" class="img-fluid rounded-start" alt="{{ $blog->blog_tittle }}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize fs-5 fw-semibold text-black">{{ $blog->blog_tittle }}</h5>
                                <p class="card-text">{{ $blog->short_description }}...</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated on {{ \Carbon\Carbon::parse($blog->created_at)->format('d.m.Y') }}</small></p>
                                <a href="{{ route('blog-full-view', $blog->id) }}" class="btn btn-primary border-0 shadow-none text-capitalize px-3 py-2">view<i class="bi bi-box-arrow-in-up-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </main>
    <x-HomePopups />
    @section('extracss')
    <style>
        .img-fluid {
            height: 15rem;
            width: 100%;
            object-fit: cover;
            object-position: top;
        }
    </style>
    @endsection
</x-MainLayout>