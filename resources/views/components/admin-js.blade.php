<script>
    $(document).ready(function() {
        $(this).find('.admin-side-navigation ul li').eq(0).addClass('text-black bg-light') && $(this).find('.admin-side-navigation ul li').css({
            'cursor': 'pointer'
        });

        $(this).find('.admin-side-navigation ul').on('click', 'li', function() {
            $(this).siblings().removeClass('text-black bg-light').addClass('text-light');
            $(this).removeClass('text-light').addClass('text-black bg-light');
        });

        $('.plan').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $('.admin-components .card').eq(0).siblings().addClass('d-none');

        function navgationSetup(NavgationNo) {
            $('.admin-side-navigation li').eq(NavgationNo).on('click', function() {
                $('.admin-components .component').eq(NavgationNo).addClass('d-block').removeClass('d-none').siblings().addClass('d-none').removeClass('d-block');
            });
        }
        navgationSetup(0);
        navgationSetup(1);

        $(document).on('submit', '#landing-content-form', function(e) {
            e.preventDefault();
            $.post({
                url: "{{ route('landing-page-content-add') }}",
                data: $(this).serialize(),
                success: function(response) {
                    $(document).find('.landing-content-form-result').html(`
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>${response.message}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    `);
                    setTimeout(() => {
                        $(document).find('.landing-content-form-result').find('.alert').remove();
                    }, 2500);
                },
                error: function(xhr, status, error) {
                    $(document).find('.landing-content-form-result').html(`
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>${xhr.responseJSON.message}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    `);
                    setTimeout(() => {
                        $(document).find('.landing-content-form-result').find('.alert').remove();
                    }, 2500);
                }
            });
        });
    });
</script>