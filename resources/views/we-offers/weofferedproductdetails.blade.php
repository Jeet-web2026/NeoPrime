<x-MainLayout subheading="Our Offers" bootstrap="active" bIcons="active" metadata="{{ $details->service_description }}" metadescription="{{ $details->service_name }}" jQuery="active">
    <main class="h-100 w-100" style="padding-top: 10vh;">
        <div class="container-fluid p-5">
            <div class="row align-items-center p-5">
                <div class="col-md-4 overflow-hidden p-3">
                    <img src="{{ $details->service_img_url }}" alt="{{ $details->service_name }}" class="product-image rounded-3 shadow">
                </div>
                <div class="col-md-8 ps-2">
                    <p class="text-black mb-0" style="font-size: 1rem;">{!! $firstPart !!}<span class="text-primary" style="cursor: pointer;">...Read more</span></p>
                    <div class="d-flex align-items-center justify-content-start mt-4 enquiry-first">
                        <a href="javascript:void(0)" style="font-size: .9rem;" class="btn btn-outline-primary shadow-none px-4 py-2 me-3">Enquire Now</a>
                        <a href="javascript:void(0)" style="font-size: .9rem;" class="btn btn-primary shadow-none px-4 py-2">Place Order</a>
                    </div>
                </div>
                <div class="col-md-12 d-none mt-3">
                    <p class="text-black mb-0" style="font-size: 1rem;">{!! $secondPart !!}</p>
                    <div class="d-flex align-items-center mt-4 justify-content-start">
                        <a href="javascript:void(0)" style="font-size: .9rem;" class="btn btn-outline-primary shadow-none px-5 py-2 me-3">Enquire Now</a>
                        <a href="javascript:void(0)" style="font-size: .9rem;" class="btn btn-primary shadow-none px-5 py-2">Place Order</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-HomePopups />
    @section('extracss')
    <style>
        img {
            height: 50vh;
            width: 100%;
            object-fit: cover;
            object-position: top;
        }
    </style>
    @endsection
    @section('extrajs')
    <script>
        $(document).ready(function() {
            $(this).on('click', '.text-primary', function() {
                $(this).hide();
                $(document).find('.enquiry-first').remove();
                $('.col-md-12').removeClass('d-none');
            })
        });
    </script>
    @endsection
</x-MainLayout>