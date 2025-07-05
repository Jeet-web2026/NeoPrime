<x-SecondLayout subheading="{{ ucwords($servicedata->name) }}" bootstrap="active" bIcons="active" jQuery="active">
    <main class="container-fluid h-100 p-5 w-100 d-flex justify-content-center align-items-center">
        <div class="row px-5">
            <div class="col-md-12">
                <div class="card shadow border-0 p-3">
                    <div class="card-body position-relative">
                        <h3 class="text-start mb-4 text-uppercase fs-2 fw-semibold">{{ $servicedata->name }}</h3>
                        <img src="{{ $servicedata->image }}" alt="{{ $servicedata->name }}" style="width: 100%; height: 250px; object-fit: cover; object-position: top;" class="mb-4">
                        <p class="mb-4">{{ $servicedata->description }}</p>
                        @php
                        $alreadyOrdered = $orderData->contains(function ($data) use ($servicedata) {
                        return $data->client_id == auth()->user()->id && $data->product_id == $servicedata->id;
                        });
                        @endphp
                        @if(!$alreadyOrdered)
                        <a href="{{ route('client-product-order', $servicedata->id) }}" class="btn btn-primary px-4 py-2 shadow-none border-0 order-now">Order Now</a>
                        @else
                        <p class="text-primary text-decoration-underline">You have already ordered this item, please check your checkout list.</p>
                        @endif
                        <a href="" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Add to wishlist" class="btn btn-outline-primary shadow-none position-absolute top-0 end-0"><i class="bi bi-heart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @section('extrajs')
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        $(document).ready(function() {
            $(this).on('click', '.order-now', function(e) {
                e.preventDefault();
                let btn = $(this);
                let route = $(this).attr('href');
                $.post({
                    url: route,
                    data: {
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        btn.remove();
                    }
                });
            });
        });
    </script>
    @endsection
</x-SecondLayout>