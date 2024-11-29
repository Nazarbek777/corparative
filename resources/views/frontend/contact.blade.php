@extends('layouts.frontend2')
@section('content')
<main id="content" class="wrapper layout-page">
    <section>

        <div class="bg-body-secondary py-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-site py-0 d-flex justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none text-body" href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Contact Us
                    </li>
                </ol>
            </nav>
        </div>
        <div class="container pt-13">
            <div class="text-center">
                <div class="text-center">
                    <h2 class="fs-36px mb-9">Keep In Touch with Us</h2>
                    <p class="fs-18px mb-14 w-lg-60 w-xl-50 mx-md-12 mx-lg-auto">We’re talking about clean beauty
                        gift sets, of course – and we’ve got a bouquet of beauties for yourself or someone you love.
                    </p>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4 mb-12 mb-md-0">
                    <div class="d-flex align-items-start">
                        <div class="pe-lg-9 pe-8 text-primary">
                            <svg class="icon fs-2">
                                <use xlink:href="#icon-box-07"></use>
                            </svg>
                        </div>
                        <div>
                            <h3 class="fs-5 mb-6">Address</h3>
                            <div class="fs-6">
                                <p class="mb-2 pb-4 fs-6">3245 Abbot Kinney BLVD – <br> PH Venice, CA 124</p>
                                <p>76 East Houston Street <br> PH Venice, CA 124</p>
                            </div>
                            <a href="#"
                               class="text-decoration-none border-bottom border-currentColor fw-semibold fs-6">Get
                                Direction</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 mb-12 mb-md-0">
                    <div class="d-flex align-items-start">
                        <div class="pe-lg-9 pe-8 text-primary">
                            <svg class="icon fs-2">
                                <use xlink:href="#icon-box-05"></use>
                            </svg>
                        </div>
                        <div>
                            <h3 class="fs-5 mb-6">Contact</h3>
                            <div class="fs-6">
                                <p class="mb-3 fs-6">Mobile:<span class="text-body-emphasis"> 068 26589 996</span>
                                </p>
                                <p class="mb-3 fs-6">Hotline:<span class="text-body-emphasis"> 1900 26886</span></p>
                                <p class="mb-0 fs-6">E-mail: hello@grace.com</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 mb-12 mb-md-0">
                    <div class="d-flex align-items-start">
                        <div class="pe-lg-9 pe-8 text-primary">
                            <svg class="icon fs-2">
                                <use xlink:href="#icon-box-06"></use>
                            </svg>
                        </div>
                        <div>
                            <h3 class="fs-5 mb-6">Hour of operation</h3>
                            <div class="fs-6">
                                <dl class="d-flex mb-0">
                                    <dt class="pe-3 fs-6 text-body-emphasis fw-500" style="width: 110px">Mon – Fri:
                                    </dt>
                                    <dd class="mb-0"> 08:30 – 20:00</dd>
                                </dl>
                                <dl class="d-flex mb-0">
                                    <dt class="pe-3 fs-6 text-body-emphasis fw-500" style="width: 110px">Sat & Sun:
                                    </dt>
                                    <dd class="mb-0"> 09:30 – 21:30</dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="pt-9 pt-md-16 pt-lg-18">
        <div class="container">
            <div id="map" class="mapbox-gl map-point-animate map-box-has-effect " style="height:530px"
                 data-mapbox-access-token="pk.eyJ1IjoiZzVvbmxpbmUiLCJhIjoiY2t1bWY4NzBiMWNycDMzbzZwMnI5ZThpaiJ9.ZifefVtp4anluFUbAMxAXg"
                 data-mapbox-options='{&#34;center&#34;:[-106.53671888774004,35.12362056187368],&#34;setLngLat&#34;:[-106.53671888774004,35.12362056187368],&#34;style&#34;:&#34;mapbox://styles/mapbox/light-v10&#34;,&#34;zoom&#34;:5}'
                 data-mapbox-marker='[{&#34;backgroundImage&#34;:&#34;/assets/images/others/marker.png&#34;,&#34;backgroundRepeat&#34;:&#34;no-repeat&#34;,&#34;className&#34;:&#34;marker&#34;,&#34;height&#34;:&#34;70px&#34;,&#34;position&#34;:[-102.53671888774004,38.12362056187368],&#34;width&#34;:&#34;70px&#34;},{&#34;backgroundImage&#34;:&#34;/assets/images/others/marker.png&#34;,&#34;backgroundRepeat&#34;:&#34;no-repeat&#34;,&#34;className&#34;:&#34;marker&#34;,&#34;height&#34;:&#34;70px&#34;,&#34;position&#34;:[-109.03671888774004,33.02362056187368],&#34;width&#34;:&#34;70px&#34;}]'>
            </div>
        </div>
    </section>

    <section class="pt-15 pb-16 pt-lg-17 pb-lg-18 mx-auto" style="max-width: 750px">
        <div class="container text-center">
            <h2 class="mb-10 fs-3">Sent A Message</h2>
            <form class="contact-form" method="post" action="#">
                <div class="row mb-8 mb-md-10">
                    <div class="col-md-6 col-12 mb-8 mb-md-0">
                        <input type="text" class="form-control input-focus" placeholder="Name">
                    </div>
                    <div class="col-md-6 col-12">
                        <input type="email" class="form-control input-focus" placeholder="Email">
                    </div>
                </div>
                <textarea class="form-control mb-6 input-focus" placeholder="Messenger" rows="7"></textarea>
                <div class="form-check mb-9 text-start">
                    <input class="form-check-input rounded-0" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Save my name, email in this browse for the next time I comment
                    </label>
                </div>
                <button type="submit"
                        class=" btn btn-dark btn-hover-bg-primary btn-hover-border-primary px-11">Submit</button>
            </form>

        </div>
    </section>

</main>
@endsection
