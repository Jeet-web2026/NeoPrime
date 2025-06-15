<x-MainLayout bootstrap="active" bIcons="active" jQuery="active" slickcarousel="active" font2nd="active">
    {{--main content start--}}
    <main id="main-content" style="background-image: url('{{ $FetchLandingContent->landing_background }}');">
        <div class="bg-overlay"></div>
        <div class="row h-100 w-100">
            <div class="col-md-6">
                <div class="card h-100 w-100 border-0 px-5 bg-transparent">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div class="mt-5">
                            <h1 class="text-capitalize fw-bold text-light lh-sm">{{ $FetchLandingContent->main_heading }}</h1>
                            <div class="d-flex justify-content-start align-items-center mt-4">
                                <a href="javascript:void(0)" class="btn shadow-sm border-0 text-light text-capitalize contact-now px-4 py-2 me-3">get contact now<i class="bi bi-phone-flip ms-2"></i></a>
                                <a href="{{ route('all-services') }}" class="text-capitalize text-decoration-none view-services btn btn-outline-light rounded px-4 py-2">view services<i class="bi bi-box-arrow-in-up-right ms-2"></i></a>
                            </div>
                            <div class="row mt-5 w-50 align-items-center">
                                <div class="col-md-6 pe-1">
                                    <div class="d-flex justify-content-start align-items-center position-relative customer-details">
                                        <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid&w=740" alt="profile-img" class="rounded-circle shadow-sm customer-info-img">
                                        <img src="https://img.freepik.com/free-photo/bohemian-man-with-his-arms-crossed_1368-3542.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid&w=740" alt="profile-img" class="rounded-circle shadow-sm customer-info-img position-absolute second-cm">
                                        <img src="https://img.freepik.com/free-photo/closeup-young-female-professional-making-eye-contact-against-colored-background_662251-651.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid&w=740" alt="profile-img" class="rounded-circle shadow-sm customer-info-img position-absolute third-cm">
                                        <img src="https://img.freepik.com/free-photo/close-up-portrait-young-bearded-man-white-shirt-jacket-posing-camera-with-broad-smile-isolated-gray_171337-629.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid&w=740" alt="profile-img" class="rounded-circle shadow-sm customer-info-img position-absolute fourth-cm">
                                    </div>
                                </div>
                                <div class="col-md-6 ps-1">
                                    <p class="text-capitalize text-light mb-0">transfer 1600+ ideas to reality</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 w-100 bg-transparent border-0 px-5">
                    <div class="card-body d-flex justify-content-end align-items-center">
                        <div class="card contact-form mt-5 shadow bg-white w-75">
                            <div class="card-body">
                                <h3 class="text-capitalize fs-4 fw-bold text-black mb-4">get callback</h3>
                                <form id="callback-request-form">
                                    @csrf
                                    <div class="callback-request-form-result"></div>
                                    <div class="mb-3">
                                        <input type="text" placeholder="Full Name" class="form-control shadow-none" id="connection-name" name="connection-name">
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" placeholder="Email Adress" class="form-control shadow-none" id="connection-email" name="connection-email">
                                    </div>
                                    <div class="mb-3">
                                        <select class="form-select shadow-none" name="connection-project-type" id="connection-project-type">
                                            <option value="0">Choose Tour Project Type</option>
                                            <option value="Learning Management System">Learning Management System</option>
                                            <option value="Custom ERP software">Custom ERP software</option>
                                            <option value="E-commerce">E-commerce</option>
                                        </select>
                                    </div>
                                    <button data-sitekey="6LcYr2ErAAAAAP5eHID-6M5D_btm3GCKylIdm1lr"
                                        data-callback='onSubmit'
                                        data-action='submit' class="btn border-0 shadow-sm enquiry-btn text-light g-recaptcha">Enquire Now<i class="bi bi-arrow-right ms-2"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    {{--main content start--}}

    {{--what we offer section--}}
    <section id="we-offer" class="p-5">
        <h4 class="text-capitalize fs-5 text-light text-center mb-5">preparing for your business success with it solution</h4>
        <div class="row px-3 we-offer-showcase">
            @forelse($FetchWhatweoffer as $offer)
            <div class="col px-2">
                <div class="card border-0 shadow">
                    <div class="card-body p-2">
                        <div class="card border-0 rounded-2 overflow-hidden">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text mb-1">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</p>
                                        <h5 class="card-title fs-5 text-capitalize text-black fw-bold">{{ $offer->service_name }}</h5>
                                        <a href="{{ route('offer-full-details', $offer->id) }}" class="text-black text-decoration-none mb-0"><i class="bi bi-arrow-up-right fs-5"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ $offer->service_img_url }}" class="we-offer-img" alt="{{ $offer->service_name }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col px-2">
                <div class="card border-0 shadow">
                    <div class="card-body p-2">
                        <div class="card border-0 rounded-2 overflow-hidden">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text mb-1">01</p>
                                        <h5 class="card-title fs-5 text-capitalize text-black fw-bold">website designing</h5>
                                        <a href="javascript:void(0)" class="text-black text-decoration-none mb-0"><i class="bi bi-arrow-up-right fs-5"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="https://img.freepik.com/free-photo/web-design_53876-167070.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid&w=740" alt="website-design" class="we-offer-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </section>
    {{--what we offer section--}}

    {{--aboutus-inshort--}}
    <section id="aboutus-inshort" class="p-5">
        <div class="row px-5 align-items-center">
            <div class="col-md-6 ps-5">
                <div class="d-flex align-items-center">
                    <img src="{{ $FetchAboutUsContent->about_first_img }}" alt="{{ $FetchAboutUsContent->about_heading }}" class="it-consulting-img rounded-2 shadow me-3">
                    <img src="{{ $FetchAboutUsContent->about_second_img }}" alt="{{ $FetchAboutUsContent->about_heading }}" class="it-consulting-img-second rounded-2 shadow">
                </div>
            </div>
            <div class="col-md-6 pe-5">
                <div class="w-25 mb-3">
                    <h5 class="text-capitalize mb-0 fs-5 py-2 px-3 shadow text-center fw-bold rounded-pill text-primary">about us</h5>
                </div>
                <h2 class="text-capitalize fs-1 text-black font-500">{{ $FetchAboutUsContent->about_heading }}</h2>
                <p class="mb-0 text-capitalize font-500 text-secondary">{{ $Part }}<span class="text-primary" style="cursor: pointer;">...read more</span></p>
                <ul class="ps-0 mt-3">
                    <li class="text-capitalize text-truncate" style="width: 485px;"><i class="bi bi-check2-square me-2 text-primary"></i>{{ $FetchAboutUsContent->about_first_point }}</li>
                    <li class="text-capitalize text-truncate" style="width: 485px;"><i class="bi bi-check2-square me-2 text-primary"></i>{{ $FetchAboutUsContent->about_second_point }}</li>
                    <li class="text-capitalize text-truncate" style="width: 485px;"><i class="bi bi-check2-square me-2 text-primary"></i>{{ $FetchAboutUsContent->about_third_point }}</li>
                </ul>
                <div class="d-flex align-items-center w-100">
                    <a href="javascript:void(0)" class="btn hire-us px-4 py-2 text-capitalize text-light me-3">hire our experts<i class="bi bi-arrow-right ms-2"></i></a>
                    <div class="row">
                        <div class="col">
                            <div class="card border-0 bg-transparent">
                                <div class="row g-0">
                                    <div class="col-md-2 d-flex justify-content-center align-items-center">
                                        <img src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid&w=740" class="experts-img rounded-circle" alt="developers-img">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body py-2">
                                            <p class="mb-0 text-capitalize text-truncate font-500">Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--aboutus-inshort--}}

    {{--popular services--}}
    <section id="populer-services">
        <div class="d-flex justify-content-center align-items-center">
            <h5 class="rounded-pill text-center text-primary fw-bold py-2 px-3 shadow text-capitalize fs-5">popular services</h5>
        </div>
        <h2 class="text-capitalize fs-1 text-black font-500 text-center my-2">we provide best quality service <br>for your business</h2>
        <div class="px-5">
            <div class="row p-5 popular-services">
                @forelse($FetchPopularServices as $service)
                <div class="col p-2">
                    <div class="card border-0 shadow-sm secondary-card p-2">
                        <div class="card-body">
                            <p class="icon mb-0">
                                {!! $service->icon !!}
                            </p>
                            <h4 class="text-capitalize text-black fs-3 mb-3 mt-2">{{ $service->name }}</h4>
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{ $service->image }}" alt="web-site-design" class="my-3">
                            </div>
                            <a href="{{ route('view-service', $service->id) }}" class="btn border-0 shadow-none text-black text-capitalize mt-3" style="font-size: 1rem;">read more<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-md-3 p-2">
                    <div class="card border-0 shadow-sm main-card p-2">
                        <div class="card-body">
                            <i class="bi bi-code-slash fs-2 text-light"></i>
                            <h4 class="text-capitalize text-light fs-3 mb-3 mt-2">software development</h4>
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="https://img.freepik.com/premium-photo/medium-shot-man-working-computer_23-2150287696.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid&w=740" alt="web-site-design" class="my-3">
                            </div>
                            <a href="javascript:void(0)" class="btn border-0 shadow-none text-light text-capitalize mt-3" style="font-size: 1rem;">read more<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>
    {{--popular services--}}

    {{--youtube videos section--}}
    <section id="youtube-videos">
        <div class="container-fluid py-3 h-100">
            <div class="card border-0 shadow-sm h-100 rounded-1">
                <div class="card-body overflow-hidden">
                    <a href="{{ $FetchLatestVideoContent->video_link }}" class="text-decoration-none position-relative">
                        <h4 class="text-capitalize text-center fs-1 text-light fw-bold mb-3 position-absolute" style="left: 34%; top: -4rem;">watch our latest videos</h4>
                        <span class="position-absolute start-50 border border-info rounded-circle shadow" style="bottom: -2.5rem; padding: 0px 8px;"><i class="bi bi-skip-start-circle fs-2 text-light"></i></span>
                        <img src="{{ $FetchLatestVideoContent->video_image }}" alt="{{ $FetchLatestVideoContent->video_content }}" class="h-100 w-100 object-fit-cover rounded-1">
                        <marquee behavior="scroll" direction="left" onmouseover="this.stop()" onmouseleave="this.start()" class="position-absolute start-0" style="bottom: -13rem;">
                            <div class="d-flex align-items-center">
                                <h2 class="text-uppercase text-light me-3 fs-1">{{ $FetchLatestVideoContent->video_content }}</h2>
                            </div>
                        </marquee>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{--youtube videos section--}}

    {{--show team members--}}
    <section id="team-members">
        <div class="container-fluid p-4">
            <div class="card border-0 bg-transparent">
                <div class="card-body">
                    <div class="row align-items-center px-3">
                        <div class="col-md-6 pe-2">
                            <div class="d-flex justify-content-start">
                                <h5 class="text-capitalize fw-bold fs-5 text-primary py-2 px-3 shadow rounded-pill">our team</h5>
                            </div>
                            <div class="card border-0 bg-transparent mt-2 pe-5">
                                <div class="card-body ps-0">
                                    <h2 class="fs-1 text-black text-capitalize font-500">meet our professional team members</h2>
                                    <p class="text-capitalize">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat repudiandae voluptas odit eligendi. Dolore beatae tempora, maxime odio nesciunt dolorum.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pe-2">
                                    <div class="card border-0 bg-transparent">
                                        <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid&w=740" class="rounded-2" alt="...">
                                        <div class="card-body px-0">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h5 class="text-capitalize fs-5 text-black mb-1 fw-semibold">example</h5>
                                                    <p class="text-capitalize text-secondary">web developer</p>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0)" class="btn shadow-none text-black fs-5 border rounded-circle"><i class="bi bi-plus-lg"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ps-2">
                                    <div class="card border-0 bg-transparent">
                                        <img src="https://img.freepik.com/free-photo/bohemian-man-with-his-arms-crossed_1368-3542.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid&w=740" class="rounded-2" alt="...">
                                        <div class="card-body px-0">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h5 class="text-capitalize fs-5 text-black mb-1 fw-semibold">example</h5>
                                                    <p class="text-capitalize text-secondary">web developer</p>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0)" class="btn shadow-none text-black fs-5 border rounded-circle"><i class="bi bi-plus-lg"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ps-2">
                            <div class="row">
                                <div class="col-md-6 pe-2">
                                    <div class="card border-0 bg-transparent">
                                        <img src="https://img.freepik.com/free-photo/bohemian-man-with-his-arms-crossed_1368-3542.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid&w=740" class="rounded-2" alt="...">
                                        <div class="card-body px-0">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h5 class="text-capitalize fs-5 text-black mb-1 fw-semibold">example</h5>
                                                    <p class="text-capitalize text-secondary">web developer</p>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0)" class="btn shadow-none text-black fs-5 border rounded-circle"><i class="bi bi-plus-lg"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ps-2">
                                    <div class="card border-0 bg-transparent">
                                        <img src="https://img.freepik.com/free-photo/bohemian-man-with-his-arms-crossed_1368-3542.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid&w=740" class="rounded-2" alt="...">
                                        <div class="card-body px-0">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h5 class="text-capitalize fs-5 text-black mb-1 fw-semibold">example</h5>
                                                    <p class="text-capitalize text-secondary">web developer</p>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0)" class="btn shadow-none text-black fs-5 border rounded-circle"><i class="bi bi-plus-lg"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pe-2">
                                    <div class="card border-0 bg-transparent">
                                        <img src="https://img.freepik.com/free-photo/bohemian-man-with-his-arms-crossed_1368-3542.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid&w=740" class="rounded-2" alt="...">
                                        <div class="card-body px-0">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h5 class="text-capitalize fs-5 text-black mb-1 fw-semibold">example</h5>
                                                    <p class="text-capitalize text-secondary">web developer</p>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0)" class="btn shadow-none text-black fs-5 border rounded-circle"><i class="bi bi-plus-lg"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card border-0 bg-transparent h-100">
                                        <div class="card-body d-flex justify-content-center align-items-center">
                                            <a href="javascript:void(0)" class="btn shadow-none text-light border-0 text-capitalize" style="background-color: #5404f5;">view more members</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--show team members--}}

    {{--calenderly--}}
    <section id="calerderly">
        <div class="container-fluid p-4">
            <div class="d-flex justify-content-center align-items-center">
                <p class="text-center text-capitalize fs-5 fw-semibold shadow text-primary px-4 py-2 rounded-pill">schedule your time</p>
            </div>
            <h2 class="text-center fs-1 text-black font-500 text-capitalize mb-0">book an appointment</h2>
            <div class="calendly-inline-widget" data-url="https://calendly.com/jeetnath2110/30min" style="min-width:320px;height:700px;"></div>
        </div>
    </section>
    {{--calenderly--}}

    {{--our blogs--}}
    <section id="our-blogs">
        <div class="container-fluid pb-5 px-5">
            <div class="d-flex justify-content-center align-items-center">
                <h5 class="fs-5 text-capitalize shadow rounded-pill px-4 py-2 text-primary fw-bold">our latest blogs</h5>
            </div>
            <h2 class="text-capitalize text-black fs-2 text-center mt-2">explore our latest blogs and events</h2>
            <div class="row mt-5 blogs px-3">
                @forelse($FetchBlog as $blog)
                <div class="col p-2">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <a href="{{ route('blog-full-view', $blog->id) }}" class="stretched-link"></a>
                            <h5 class="card-title text-capitalize text-truncate" style="width: 200px;">{{ $blog->blog_tittle }}</h5>
                            <p class="card-text">{{ $blog->short_description }}...</p>
                            <img src="{{ $blog->blog_image }}" class="rounded-2 card-img" alt="{{ $blog->blog_tittle }}">
                        </div>
                    </div>
                </div>
                @empty
                <div class="col p-2">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize text-truncate">blog title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <img src="https://www.designveloper.com/wp-content/uploads/2020/08/blog-1024x688.jpg" class="rounded-2 card-img" alt="">
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>
    {{--our blogs--}}

    <x-HomePopups />
    @section('extracss')
    <style>
        /* main content css start */
        #main-content {
            height: 100vh;
            width: 100%;
            background-repeat: no-repeat;
            background-size: 100%;
            position: relative;
            padding-top: 10vh;
        }

        #main-content .bg-overlay {
            position: absolute;
            top: 0;
            left: 0;
            background: linear-gradient(90deg, rgb(0 0 0 / 56%) 0%, rgb(9 9 121 / 56%) 34%, rgb(0 212 255 / 57%) 100%);
            ;
            height: 100%;
            width: 100%;
        }

        #main-content h1 {
            font-size: 3rem;
            text-shadow: 2px 2px #323232;
        }

        #main-content .contact-now {
            background-color: #5404f5;
        }

        #main-content .contact-form {
            width: 60%;
        }

        #main-content .enquiry-btn {
            background-color: #5404f5;
        }

        #main-content .customer-info-img {
            height: 2.5rem;
            width: 2.5rem;
            object-fit: cover;
        }

        #main-content .customer-details .second-cm {
            left: 20%;
        }

        #main-content .customer-details .third-cm {
            left: 40%;
        }

        #main-content .customer-details .fourth-cm {
            left: 60%;
        }

        /* main content css end */

        /* what we offer section css start */
        #we-offer {
            background-color: #00000c;
        }

        #we-offer .we-offer-showcase .we-offer-img {
            height: 19vh;
            width: 100%;
        }

        /* what we offer section css end */

        /* aboutus-inshort start */
        #aboutus-inshort {
            background-color: #f7f7f7;
        }

        #aboutus-inshort .it-consulting-img {
            height: 60vh;
            width: 35vh;
            object-fit: cover;
        }

        #aboutus-inshort .it-consulting-img-second {
            height: 70vh;
            width: 33vh;
            object-fit: cover;
        }

        #aboutus-inshort .hire-us {
            background-color: #5404f5;
        }

        #aboutus-inshort .experts-img {
            height: 5vh;
            width: 5vh;
        }

        /* aboutus-inshort end */

        /* populer-services start */
        #populer-services {
            background-color: #f7f7f7;
        }

        #populer-services .main-card {
            background-color: #5404f5;
        }

        #populer-services .secondary-card {
            background-color: #5404f51a;
        }

        #populer-services .card img {
            height: 13rem;
            width: 13rem;
            border-radius: 50%;
            object-fit: cover;
        }

        #populer-services .popular-services .slick-prev {
            border: 1px solid #5404f5;
            border-radius: 50%;
            height: 35px;
            width: 35px;
            left: -1%;
        }

        #populer-services .popular-services .slick-prev:before {
            font-family: normal;
            font-size: 21px;
            line-height: .6;
            color: #5404f5;
            content: '←';
        }

        #populer-services .popular-services .slick-next {
            border: 1px solid #5404f5;
            border-radius: 50%;
            height: 35px;
            width: 35px;
            right: -1%;
        }

        #populer-services .popular-services .slick-next:before {
            font-family: normal;
            font-size: 21px;
            line-height: .6;
            color: #5404f5;
            content: '→';
        }

        #populer-services .popular-services .slick-current .card {
            background-color: #5404f5 !important;
        }

        #populer-services .popular-services .slick-current h4 {
            color: #ffffff !important;
        }

        #populer-services .popular-services .slick-current p {
            color: #ffffff !important;
        }

        #populer-services .popular-services .slick-current a {
            color: #ffffff !important;
        }


        /* populer-services end */

        /* youtube-videos start */
        #youtube-videos {
            background-color: #f7f7f7;
            height: 30rem;
        }

        #youtube-videos .card-body {
            height: 30rem;
            width: 100%;
        }

        /* youtube-videos end */

        /* team-members start */
        #team-members {
            background-color: #f7f7f7;
        }

        #team-members img {
            height: 12rem;
            width: 100%;
            object-fit: cover;
            object-position: top;
        }

        /* team-members end */

        /* our-blogs start */
        #our-blogs {
            background-color: #f7f7f7;
        }

        #our-blogs .blogs .slick-prev {
            border: 1px solid #000000;
            border-radius: 50%;
            height: 35px;
            width: 35px;
        }

        #our-blogs .blogs .slick-prev::before {
            font-family: normal;
            font-size: 21px;
            line-height: .6;
            color: #000000;
        }

        #our-blogs .blogs .slick-next {
            border: 1px solid #000000;
            border-radius: 50%;
            height: 35px;
            width: 35px;
        }

        #our-blogs .blogs .slick-next::before {
            font-family: normal;
            font-size: 21px;
            line-height: .6;
            color: #000000;
        }

        #our-blogs .blogs .card-img {
            height: 9rem;
            width: 100%;
            object-fit: cover;
            object-position: top;
        }

        /* our-blogs end */

        /* calenderly start */
        #calerderly {
            background-color: #F7F7F7;
        }

        /* calemnderly end */
    </style>
    @endsection

    @section('extrajs')
    <script>
        $(document).ready(function() {
            $('.we-offer-showcase').slick({
                dots: false,
                infinite: true,
                speed: 300,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 2000,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
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
            $('.blogs').slick({
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
            $('.popular-services').slick({
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
            $(document).on('submit', '#callback-request-form', function(e) {
                e.preventDefault();
                $.post({
                    url: "{{ route('callback-request') }}",
                    data: $(this).serialize(),
                    success: function(response) {
                        $(document).find('.callback-request-form-result').html(`
                            <div class="alert alert-success" role="alert">
                                 ${response.message}
                            </div>                        
                        `);
                        $(document).find('#callback-request-form')[0].reset();
                        setTimeout(() => {
                            $(document).find('.alert').remove();
                        }, 3000);
                    }
                });
            });
            $(this).find('.popular-services .icon').addClass('fs-2');
        });
    </script>
    @endsection

    @section('extracsscdns')
    <script src="https://www.google.com/recaptcha/api.js"></script>
    @endsection
</x-MainLayout>