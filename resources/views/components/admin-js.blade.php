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

        function PopupDelete(IdClass, Timing) {
            setTimeout(() => {
                $(document).find(IdClass + ' .alert').remove();
            }, Timing);
        }

        function navgationSetup(NavgationNo) {
            $('.admin-side-navigation li').eq(NavgationNo).on('click', function() {
                $('.admin-components .component').eq(NavgationNo).addClass('d-block').removeClass('d-none').siblings().addClass('d-none').removeClass('d-block');
            });
        }
        navgationSetup(0);
        navgationSetup(1);
        navgationSetup(2);

        $(document).on('submit', '#landing-content-form', function(e) {
            e.preventDefault();
            $.post({
                url: "{{ route('landing-page-content-add') }}",
                data: $(this).serialize(),
                success: function(response) {
                    if (response.status == 200) {
                        $(document).find('.landing-content-form-result').html(`
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>${response.message}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        `);
                        GetLandingContentData();
                        PopupDelete('.landing-content-form-result', 2500);
                    } else {
                        $(document).find('.landing-content-form-result').html(`
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>${response.message}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        `);
                        PopupDelete('.landing-content-form-result', 2500);
                    }

                },
                error: function(xhr, status, error) {
                    $(document).find('.landing-content-form-result').html(`
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>${xhr.responseJSON.message}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    `);
                    PopupDelete('.landing-content-form-result', 2500);
                }
            });
        });

        function GetLandingContentData() {
            $.get({
                url: "{{ route('get-admin-landing-content') }}",
                success: function(response) {
                    $(document).find('#landing-content-form #landing-main-heading').val(response.data.main_heading);
                    $(document).find('#landing-content-form #landing-main-background').val(response.data.landing_background);
                    $(document).find('#landing-content-form #landing-meta-content').val(response.data.meta_content);
                    $(document).find('#landing-content-form #landing-meta-description').val(response.data.meta_description);
                },
                error: function(xhr, status, error) {
                    $(document).find('.landing-content-form-result').html(`
                        <p class="text-capitalize text-black fs-5">No data found!</p>                    
                    `);
                }
            });
        }

        GetLandingContentData();

        function GetCalbackRequestData() {
            $.get({
                url: "{{ route('callback-requests') }}",
                success: function(response) {
                    $(document).find('.callback-request-table tbody').empty();
                    if (response.status == 200) {
                        $.each(response.data, function(index, value) {
                            $(document).find('.callback-request-table tbody').append(`
                                <tr>
                                    <th scope="row" class="text-black text-capitalize">${index + 1}</th>
                                    <td class="text-black text-capitalize">${value.name}</td>
                                    <td class="text-black text-capitalize">${value.project_type}</td>
                                    <td class="text-black text-capitalize">
                                        <a href="mailto:${value.email}" class="btn btn-outline-primary shadow-none"><i class="bi bi-envelope-at"></i></a>
                                    </td>
                                </tr>                    
                            `);
                        });
                    }
                }
            });
        }

        GetCalbackRequestData();

        $(document).on('submit', '#what-we-offer', function(e) {
            e.preventDefault();
            const $form = $(this);
            $.post({
                url: "{{ route('we-offer-add') }}",
                data: $(this).serialize(),
                success: function(response) {
                    $('.what-we-offer-result').html(`
                        <div class="alert alert-success text-capitalize" role="alert">
                            ${response.message}
                        </div>                    
                    `);
                    setTimeout(() => {
                        $('.what-we-offer-result').find('.alert').remove();
                        $form[0].reset();
                    }, 2500);
                },
                error: function(xhr) {
                    let errorMessage = 'Something went wrong!';

                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }

                    if (xhr.status === 422 && xhr.responseJSON.errors) {
                        const errors = Object.values(xhr.responseJSON.errors).flat();
                        errorMessage = errors.join('<br>');
                    }

                    $('.what-we-offer-result').html(`
                        <div class="alert alert-danger text-capitalize" role="alert">
                            ${errorMessage}
                        </div>                    
                    `);
                    setTimeout(() => {
                        $('.what-we-offer-result').find('.alert').remove();
                    }, 3000);
                }
            });
        });

        $(this).on('submit', '#about-us-content', function(e) {
            e.preventDefault();
            const $form = $(this);
            $.post({
                url: "{{ route('about-us-add') }}",
                data: $(this).serialize(),
                success: function(response) {
                    $(document).find('.about-us-add-result').html(`
                    <div class="alert alert-success" role="alert">
                        ${response.message}
                    </div>
                    `);
                    setTimeout(() => {
                        $(document).find('.about-us-add-result .alert-success').remove();
                         $form[0].reset();
                    }, 2500);
                },
                error: function(xhr) {
                    let errorMessage = 'Something went wrong!';

                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }

                    if (xhr.status === 422 && xhr.responseJSON.errors) {
                        const errors = Object.values(xhr.responseJSON.errors).flat();
                        errorMessage = errors.join('<br>');
                    }

                    $(document).find('.about-us-add-result').html(`
                        <div class="alert alert-danger text-capitalize" role="alert">
                            ${errorMessage}
                        </div>                    
                    `);
                    setTimeout(() => {
                        $(document).find('.about-us-add-result').find('.alert-danger').remove();
                    }, 3000);
                }
            });
        });

        $(this).on('submit', '#our-services-add', function(e) {
            e.preventDefault();
            const $form = $(this);
            $.post({
                url: "{{ route('our-services-add') }}",
                data: $(this).serialize(),
                success: function(response) {
                    $(document).find('.result-our-services').html(`
                    <div class="alert alert-success" role="alert">
                        ${response.message}
                    </div>
                    `);
                    setTimeout(() => {
                        $(document).find('.result-our-services .alert-success').remove();
                         $form[0].reset();
                    }, 2500);
                },
                error: function(xhr) {
                    let errorMessage = 'Something went wrong!';

                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }

                    if (xhr.status === 422 && xhr.responseJSON.errors) {
                        const errors = Object.values(xhr.responseJSON.errors).flat();
                        errorMessage = errors.join('<br>');
                    }

                    $(document).find('.result-our-services').html(`
                        <div class="alert alert-danger text-capitalize" role="alert">
                            ${errorMessage}
                        </div>                    
                    `);
                    setTimeout(() => {
                        $(document).find('.result-our-services').find('.alert-danger').remove();
                    }, 3000);
                }
            });
        });

        $(this).on('submit', '#latest-videos-add', function(e) {
            e.preventDefault();
            const $form = $(this);
            $.post({
                url: "{{ route('latest-videos-add') }}",
                data: $(this).serialize(),
                success: function(response) {
                    $(document).find('.latest-videos-add-result').html(`
                    <div class="alert alert-success" role="alert">
                        ${response.message}
                    </div>
                    `);
                    setTimeout(() => {
                        $(document).find('.latest-videos-add-result .alert-success').remove();
                         $form[0].reset();
                    }, 2500);
                },
                error: function(xhr) {
                    let errorMessage = 'Something went wrong!';

                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }

                    if (xhr.status === 422 && xhr.responseJSON.errors) {
                        const errors = Object.values(xhr.responseJSON.errors).flat();
                        errorMessage = errors.join('<br>');
                    }

                    $(document).find('.latest-videos-add-result').html(`
                        <div class="alert alert-danger text-capitalize" role="alert">
                            ${errorMessage}
                        </div>                    
                    `);
                    setTimeout(() => {
                        $(document).find('.latest-videos-add-result').find('.alert-danger').remove();
                    }, 3000);
                }
            });
        });

        $(this).on('submit', '#blog-form-add', function(e) {
            e.preventDefault();
            const $form = $(this);
            $.post({
                url: "{{ route('blogs-add') }}",
                data: $(this).serialize(),
                success: function(response) {
                    $(document).find('.blog-add-form-result').html(`
                    <div class="alert alert-success" role="alert">
                        ${response.message}
                    </div>
                    `);
                    setTimeout(() => {
                        $(document).find('.blog-add-form-result .alert-success').remove();
                         $form[0].reset();
                    }, 2500);
                },
                error: function(xhr) {
                    let errorMessage = 'Something went wrong!';

                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }

                    if (xhr.status === 422 && xhr.responseJSON.errors) {
                        const errors = Object.values(xhr.responseJSON.errors).flat();
                        errorMessage = errors.join('<br>');
                    }

                    $(document).find('.blog-add-form-result').html(`
                        <div class="alert alert-danger text-capitalize" role="alert">
                            ${errorMessage}
                        </div>                    
                    `);
                    setTimeout(() => {
                        $(document).find('.blog-add-form-result').find('.alert-danger').remove();
                    }, 3000);
                }
            });
        });

    });
</script>