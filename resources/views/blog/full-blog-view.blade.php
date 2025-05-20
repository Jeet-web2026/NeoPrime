<x-MainLayout subheading="Blogs" bootstrap="active" jQuery="active" metadescription="{{ $blogDetails->blog_tittle }}" metadata="{{ $blogDetails->blog_description }}" bIcons="active">
    <main class="h-100 w-100 pt-5">
        <div class="container-fluid p-5">
            <div class="card border-0 shadow-sm mt-5 overflow-hidden">
                <img src="{{ $blogDetails->blog_image }}" class="" alt="{{ $blogDetails->blog_tittle }}">
                <div class="card-body">
                    <h3 class="card-title text-capitalize">{{ $blogDetails->blog_tittle }}</h3>
                    <p class="card-text">{{ $blogDetails->blog_description }}</p>
                </div>
            </div>
        </div>
    </main>
    @section('extracss')
    <style>
        img{
            height: 70vh;
            width: 100%;
            object-fit: cover;
        }
    </style>
    @endsection
</x-MainLayout>