<x-MainLayout subheading="All Services" bootstrap="active" bIcons="active" jQuery="active">
    <main class="w-100 h-100" style="padding-top: 22vh;">
        <div class="container">
            @forelse($datas as $data)
            <div class="card mb-3 border-0 shadow">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $data->image }}" class="img-fluid rounded-start h-100" alt="{{ $data->name }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize text-black">{{ $data->name }}</h5>
                            <p class="card-text">{!! Str::limit($data->description, 300) !!}</p>
                            <a href="{{ route('view-service', $data->id) }}" class="btn btn-primary px-4 py-2 text-capitalize card-btn">see more</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="card border-0 shadow">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Default</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </main>
</x-MainLayout>