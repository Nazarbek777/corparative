@extends('layouts.frontend')

@section('content')
    <main id="content" class="wrapper layout-page">
        <section class="overflow-hidden">

            <div class="hero vh-100 position-relative d-flex align-items-end">
                <div class="video-cover">
                    <iframe class="border-0" id="existing-iframe-example"
                            src="https://www.youtube.com/embed/U5DhkJrtUjM?autoplay=1&rel=0&playsinline=1&mute=1&controls=0&loop=1&playlist=U5DhkJrtUjM"></iframe>
                    <div class="card-img-overlay"></div>
                </div>
                <div data-animate="fadeInDown" class="container container-wide pb-15 p-xl-15 position-relative">

                    <div class="hero-content">
                        <div data-animate="fadeInDown">
                            <p class="text-white mb-8 fw-semibold fs-4">Sizni kutayotgan kiyimlar</p>
                            <h1 class="text-white fw-semibold mb-8 hero-title-2">Ayollar Uchun <br> Tibbiy Kiyimlar</h1>
                        </div>
                        <a href="#" data-animate="fadeInUp"
                           class="pb-2 bg-transparent fw-semibold text-decoration-none hero-link pb-2 bg-transparent fw-semibold text-decoration-none hero-link p-0 text-white">
                            Endi xarid qiling
                            <svg class="icon">
                                <use xlink:href="#icon-arrow-right"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section class="pt-10">

            <div class="container-fluid px-9">
                <div class="row gy-30px gx-30px px-2">
                    <div class="col-12 col-md-4" data-animate="fadeInUp">
                        <div class="card border-0 rounded-0 banner-05 hover-zoom-in hover-shine">

                            <img class="lazy-image card-img object-fit-cover light-mode-img" src="#"
                                 data-src="./assets/images/new/products/category-01.jpg" width="468" height="400"
                                 alt="Essenstial Items">
                            <img class="lazy-image dark-mode-img card-img object-fit-cover" src="#"
                                 data-src="./assets/images/new/products/category-01.jpg" width="468" height="400"
                                 alt="Essenstial Items">
                            <div
                                class="card-img-overlay d-inline-flex flex-column justify-content-end px-11 pt-11 pb-9 mb-2">
                                <div><a href="#"
                                        class="btn btn-link text-decoration-none p-0 fw-semibold text-logo-color">Buy 1
                                        Get
                                        1
                                        <svg class="icon">
                                            <use xlink:href="#icon-arrow-right"></use>
                                        </svg>
                                    </a></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-4" data-animate="fadeInUp">
                        <div class="card border-0 rounded-0 banner-05 hover-zoom-in hover-shine">

                            <img class="lazy-image card-img object-fit-cover light-mode-img" src="#"
                                 data-src="./assets/images/new/products/category-02.jpg" width="468" height="400"
                                 alt="Save on Sets">
                            <img class="lazy-image dark-mode-img card-img object-fit-cover" src="#"
                                 data-src="./assets/images/new/products/category-02.jpg" width="468" height="400"
                                 alt="Save on Sets">
                            <div
                                class="card-img-overlay d-inline-flex flex-column justify-content-end px-11 pt-11 pb-9 mb-2">
                                <div><a href="#"
                                        class="btn btn-link text-decoration-none p-0 fw-semibold text-logo-color">Save
                                        $15.99
                                        <svg class="icon">
                                            <use xlink:href="#icon-arrow-right"></use>
                                        </svg>
                                    </a></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-4" data-animate="fadeInUp">
                        <div class="card border-0 rounded-0 banner-05 hover-zoom-in hover-shine">

                            <img class="lazy-image card-img object-fit-cover light-mode-img" src="#"
                                 data-src="./assets/images/new/products/category-03.jpg" width="468" height="400"
                                 alt="25% off Everything">
                            <img class="lazy-image dark-mode-img card-img object-fit-cover" src="#"
                                 data-src="./assets/images/new/products/category-03.jpg" width="468" height="400"
                                 alt="25% off Everything">
                            <div
                                class="card-img-overlay d-inline-flex flex-column justify-content-end px-11 pt-11 pb-9 mb-2">
                                <div><a href="#"
                                        class="btn btn-link text-decoration-none p-0 fw-semibold text-logo-color">Shop
                                        Sale
                                        <svg
                                            class="icon">
                                            <use xlink:href="#icon-arrow-right"></use>
                                        </svg>
                                    </a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        {{--        product section start--}}
        <section id="because_you_need_time_for_yourself_2">
            <div class="container pt-13 pt-lg-15 my-4 pb-15 pb-lg-20">
                <div class="mb-13 text-center pb-3" data-animate="fadeInUp">
                    <img data-src="./assets/images/shop/single-image-01.png" width="140" height="138"
                         class="mb-5 img-fluid lazy-image d-inline-block" alt="..." src="#">
                    <h2 class="h3 mb-0">Because You Need Time for Yourself.<br>Blend Beauty in You</h2>
                </div>
                <div class="row gy-50px">
                    @if($products->count())
                        @foreach($products as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="card card-product grid-1 bg-transparent border-0" data-animate="fadeInUp">
                                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                                           title="Shield Conditioner">
                                            <img src="#" data-src="./assets/images/new/products/category-01.jpg"
                                                 class="img-fluid lazy-image w-100" alt="Shield Conditioner" width="330"
                                                 height="440">
                                        </a>
                                    </figure>
                                    <div class="card-body text-center p-0">
                                <span
                                    class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
									<del class=" text-body fw-500 me-4 fs-13px">$40.00</del>
									<ins class="text-decoration-none">$30.00</ins></span>

                                        <h4
                                            class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                            <a class="text-decoration-none text-reset"
                                               href="shop/product-details-v1.html">Shield Conditioner</a></h4>
                                        <div class="d-flex align-items-center fs-12px justify-content-center">
                                            <div class="rating">
                                                <div class="empty-stars">
											<span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                                    <span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                                    <span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                                    <span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                                    <span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                                </div>
                                                <div class="filled-stars" style="width: 80%">
											<span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                                    <span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                                    <span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                                    <span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                                    <span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                                </div>
                                            </div>
                                            <span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class=" col-md-4 col-sm-6 col-12">
                            <div class="card card-product grid-1 bg-transparent border-0" data-animate="fadeInUp">
                                <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                    <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                                       title="Shield Conditioner">
                                        <img src="#" data-src="./assets/images/new/products/category-01.jpg"
                                             class="img-fluid lazy-image w-100" alt="Shield Conditioner" width="330"
                                             height="440">
                                    </a>
                                </figure>
                                <div class="card-body text-center p-0">
                                <span
                                    class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
									<del class=" text-body fw-500 me-4 fs-13px">$40.00</del>
									<ins class="text-decoration-none">$30.00</ins></span>

                                    <h4
                                        class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                        <a class="text-decoration-none text-reset"
                                           href="shop/product-details-v1.html">Shield Conditioner</a></h4>
                                    <div class="d-flex align-items-center fs-12px justify-content-center">
                                        <div class="rating">
                                            <div class="empty-stars">
											<span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                            </div>
                                            <div class="filled-stars" style="width: 80%">
											<span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                            </div>
                                        </div>
                                        <span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="card card-product grid-1 bg-transparent border-0" data-animate="fadeInUp">
                                <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                    <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                                       title="Shield Conditioner">
                                        <img src="#" data-src="./assets/images/new/products/category-01.jpg"
                                             class="img-fluid lazy-image w-100" alt="Shield Conditioner" width="330"
                                             height="440">
                                    </a>
                                </figure>
                                <div class="card-body text-center p-0">
                                <span
                                    class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
									<del class=" text-body fw-500 me-4 fs-13px">$40.00</del>
									<ins class="text-decoration-none">$30.00</ins></span>

                                    <h4
                                        class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                        <a class="text-decoration-none text-reset"
                                           href="shop/product-details-v1.html">Shield Conditioner</a></h4>
                                    <div class="d-flex align-items-center fs-12px justify-content-center">
                                        <div class="rating">
                                            <div class="empty-stars">
											<span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                            </div>
                                            <div class="filled-stars" style="width: 80%">
											<span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                            </div>
                                        </div>
                                        <span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-md-4 col-sm-6 col-12">
                            <div class="card card-product grid-1 bg-transparent border-0" data-animate="fadeInUp">
                                <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                    <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                                       title="Shield Conditioner">
                                        <img src="#" data-src="./assets/images/new/products/category-01.jpg"
                                             class="img-fluid lazy-image w-100" alt="Shield Conditioner" width="330"
                                             height="440">
                                    </a>
                                </figure>
                                <div class="card-body text-center p-0">
                                <span
                                    class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
									<del class=" text-body fw-500 me-4 fs-13px">$40.00</del>
									<ins class="text-decoration-none">$30.00</ins></span>

                                    <h4
                                        class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                        <a class="text-decoration-none text-reset"
                                           href="shop/product-details-v1.html">Shield Conditioner</a></h4>
                                    <div class="d-flex align-items-center fs-12px justify-content-center">
                                        <div class="rating">
                                            <div class="empty-stars">
											<span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                            </div>
                                            <div class="filled-stars" style="width: 80%">
											<span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                            </div>
                                        </div>
                                        <span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="card card-product grid-1 bg-transparent border-0" data-animate="fadeInUp">
                                <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                    <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                                       title="Shield Conditioner">
                                        <img src="#" data-src="./assets/images/new/products/category-01.jpg"
                                             class="img-fluid lazy-image w-100" alt="Shield Conditioner" width="330"
                                             height="440">
                                    </a>
                                </figure>
                                <div class="card-body text-center p-0">
                                <span
                                    class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
									<del class=" text-body fw-500 me-4 fs-13px">$40.00</del>
									<ins class="text-decoration-none">$30.00</ins></span>

                                    <h4
                                        class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                        <a class="text-decoration-none text-reset"
                                           href="shop/product-details-v1.html">Shield Conditioner</a></h4>
                                    <div class="d-flex align-items-center fs-12px justify-content-center">
                                        <div class="rating">
                                            <div class="empty-stars">
											<span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star-o">
													<use xlink:href="#star-o"></use>
												</svg>
											</span>
                                            </div>
                                            <div class="filled-stars" style="width: 80%">
											<span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                                <span class="star">
												<svg class="icon star text-primary">
													<use xlink:href="#star"></use>
												</svg>
											</span>
                                            </div>
                                        </div>
                                        <span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="text-center mt-12" data-animate="fadeInUp">
                    <a href="#" class="btn btn-outline-dark">
                        Shop All Product
                    </a>
                </div>
            </div>
        </section>
        {{--        product section end--}}
        {{--        banner video link start--}}
        <section class="bg-section-5 overflow-hidden" id="specia_offer_beauty_inspired_by_real_life_2">

            <div class="container">
                <div class="row call-to-action-2">
                    <div class="col-lg-6 bg-image py-25 py-lg-0 order-lg-1 bg-col-lg-half-screen-right lazy-bg"
                         data-bg-src="./assets/images/new/products/category-01.jpg" data-animate="fadeInUp">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center w-lg-half-screen">
                            <a href="https://www.youtube.com/watch?v=6v2L2UGZJAM"
                               class="square view-video rounded-circle z-index-1 bg-body text-body-emphasis fs-2 bg-dark-hover text-light-hover"
                               style="--square-size:115px;">
                                <svg class="icon">
                                    <use xlink:href="#icon-play-fill"></use>
                                </svg>
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-6 ps-6" data-animate="fadeInUp">
                        <div class="py-lg-23 py-16 mt-lg-3 mb-lg-5 ms-lg-auto text-white content-wrap">
                            <div class="text-left">
                                <p class="fs-15px mb-7 ls-1  fw-semibold text-uppercase">Special offer</p>
                                <h2 class="mb-6 mw-lg-60 pt-1 text-reset">Beauty Inspired by Real Life</h2>
                                <p class="fs-18px mb-0 mw-lg-75">Made using clean, non-toxic ingredients, our products
                                    are designed for everyone.</p>
                            </div>

                            <a href="#" class="btn btn-white mt-10 mb-2">Discover Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--        banner video link end--}}
        {{--        news  start--}}
        <section id="from_our_blog_2" class="pt-14 pb-16 py-lg-18 mt-1">
            <div class="container">
                <div class="text-center" data-animate="fadeInUp">
                    <h2 class="mb-6">From Our Blog</h2>
                    <p class="fs-18px mb-0 mw-xl-50 mw-lg-75 ms-auto me-auto">Our bundles were designed to conveniently
                        package your tanning essentials while saving you money.</p>
                </div>
            </div>
            <div class="container mt-12 pt-3">
                <div class="slick-slider"
                     data-slick-options='{&#34;arrows&#34;:false,&#34;dots&#34;:false,&#34;responsive&#34;:[{&#34;breakpoint&#34;:1200,&#34;settings&#34;:{&#34;slidesToShow&#34;:3}},{&#34;breakpoint&#34;:992,&#34;settings&#34;:{&#34;dots&#34;:true,&#34;slidesToShow&#34;:2}},{&#34;breakpoint&#34;:768,&#34;settings&#34;:{&#34;dots&#34;:true,&#34;slidesToShow&#34;:1}}],&#34;slidesToShow&#34;:3}'>
                    @if($news->count())
                        @foreach($news as $new)
                                <div>
                                    <article class="card card-post-grid-1 bg-transparent border-0" data-animate="fadeInUp">
                                        <figure class="card-img-top position-relative mb-10"><a href="#"
                                                                                                class="hover-shine hover-zoom-in d-block"
                                                                                                title="A User-Friendly Guide to Natural Cleansers">
                                                <img data-src="./assets/images/blog/post-04-370x450.jpg"
                                                     class="img-fluid lazy-image w-100"
                                                     alt="A User-Friendly Guide to Natural Cleansers" width="370"
                                                     height="450"
                                                     src="#">
                                            </a><a href="#"
                                                   class="post-item-cate btn btn-light btn-text-light-body-emphasis btn-hover-bg-dark btn-hover-text-light fw-500 post-cat position-absolute top-100 start-50 translate-middle py-2 px-7 border-0"
                                                   title="Life style">Life style</a>
                                        </figure>
                                        <div class="card-body text-center px-md-9 py-0">
                                            <h4 class="card-title lh-base mb-9"><a class="text-decoration-none"
                                                                                   href="../blog/details-01.html"
                                                                                   title="A User-Friendly Guide to Natural Cleansers">A
                                                    User-Friendly Guide to
                                                    Natural Cleansers</a></h4>
                                            <ul class="post-meta list-inline lh-1 d-flex flex-wrap justify-content-center m-0">
                                                <li class="list-inline-item border-end pe-5 me-5">By <a href="#"
                                                                                                        title="Admin">Admin</a>
                                                </li>
                                                <li class="list-inline-item">Jan 19th, 2021</li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                        @endforeach
                    @else
                        <div>
                            <article class="card card-post-grid-1 bg-transparent border-0" data-animate="fadeInUp">
                                <figure class="card-img-top position-relative mb-10"><a href="#"
                                                                                        class="hover-shine hover-zoom-in d-block"
                                                                                        title="A User-Friendly Guide to Natural Cleansers">
                                        <img data-src="./assets/images/blog/post-04-370x450.jpg"
                                             class="img-fluid lazy-image w-100"
                                             alt="A User-Friendly Guide to Natural Cleansers" width="370"
                                             height="450"
                                             src="#">
                                    </a><a href="#"
                                           class="post-item-cate btn btn-light btn-text-light-body-emphasis btn-hover-bg-dark btn-hover-text-light fw-500 post-cat position-absolute top-100 start-50 translate-middle py-2 px-7 border-0"
                                           title="Life style">Life style</a>
                                </figure>
                                <div class="card-body text-center px-md-9 py-0">
                                    <h4 class="card-title lh-base mb-9"><a class="text-decoration-none"
                                                                           href="../blog/details-01.html"
                                                                           title="A User-Friendly Guide to Natural Cleansers">A
                                            User-Friendly Guide to
                                            Natural Cleansers</a></h4>
                                    <ul class="post-meta list-inline lh-1 d-flex flex-wrap justify-content-center m-0">
                                        <li class="list-inline-item border-end pe-5 me-5">By <a href="#"
                                                                                                title="Admin">Admin</a>
                                        </li>
                                        <li class="list-inline-item">Jan 19th, 2021</li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="card card-post-grid-1 bg-transparent border-0" data-animate="fadeInUp">
                                <figure class="card-img-top position-relative mb-10"><a href="#"
                                                                                        class="hover-shine hover-zoom-in d-block"
                                                                                        title="Our Favorite Multitasking Products">
                                        <img data-src="./assets/images/blog/post-05-370x450.jpg"
                                             class="img-fluid lazy-image w-100" alt="Our Favorite Multitasking Products"
                                             width="370" height="450" src="#">
                                    </a><a href="#"
                                           class="post-item-cate btn btn-light btn-text-light-body-emphasis btn-hover-bg-dark btn-hover-text-light fw-500 post-cat position-absolute top-100 start-50 translate-middle py-2 px-7 border-0"
                                           title="Life style">Life style</a>
                                </figure>
                                <div class="card-body text-center px-md-9 py-0">
                                    <h4 class="card-title lh-base mb-9"><a class="text-decoration-none"
                                                                           href="../blog/details-01.html"
                                                                           title="Our Favorite Multitasking Products">Our
                                            Favorite Multitasking Products</a></h4>
                                    <ul class="post-meta list-inline lh-1 d-flex flex-wrap justify-content-center m-0">
                                        <li class="list-inline-item border-end pe-5 me-5">By <a href="#"
                                                                                                title="Admin">Admin</a>
                                        </li>
                                        <li class="list-inline-item">Jan 19th, 2021</li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="card card-post-grid-1 bg-transparent border-0" data-animate="fadeInUp">
                                <figure class="card-img-top position-relative mb-10"><a href="#"
                                                                                        class="hover-shine hover-zoom-in d-block"
                                                                                        title="How To Choose The Right Sofa for your home">
                                        <img data-src="./assets/images/blog/post-06-370x450.jpg"
                                             class="img-fluid lazy-image w-100"
                                             alt="How To Choose The Right Sofa for your home" width="370" height="450"
                                             src="#">
                                    </a><a href="#"
                                           class="post-item-cate btn btn-light btn-text-light-body-emphasis btn-hover-bg-dark btn-hover-text-light fw-500 post-cat position-absolute top-100 start-50 translate-middle py-2 px-7 border-0"
                                           title="Life style">Life style</a>
                                </figure>
                                <div class="card-body text-center px-md-9 py-0">
                                    <h4 class="card-title lh-base mb-9"><a class="text-decoration-none"
                                                                           href="../blog/details-01.html"
                                                                           title="How To Choose The Right Sofa for your home">How
                                            To Choose The Right Sofa
                                            for your home</a></h4>
                                    <ul class="post-meta list-inline lh-1 d-flex flex-wrap justify-content-center m-0">
                                        <li class="list-inline-item border-end pe-5 me-5">By <a href="#"
                                                                                                title="Admin">Admin</a>
                                        </li>
                                        <li class="list-inline-item">Jan 19th, 2021</li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    @endif
                </div>
            </div>
        </section>
        {{--        news  end--}}
        <section class="position-relative  lazy-bg bg-image pt-lg-17 pb-lg-17 pt-15 pb-15">

            <div class="container text-center position-relative z-index-2">
                <div class="mx-auto mb-11 text-center" style="max-width:509px" data-animate="fadeInUp">
                    <h3 class="mb-6">Stay Up to Date with All News and Exclusive Offers</h3>
                </div>

                <form class="mx-auto up-to-date-form" style="max-width: 546px" data-animate="fadeInUp">
                    <div class="text-center">
                        <div class="input-group position-relative mb-11 form-border-transparent">
                            <!-- Telefon raqam uchun input -->
                            <input type="tel" class="form-control bg-body rounded-left"
                                   placeholder="Enter your phone number"
                                   pattern="^\+?[0-9]{1,4}?[-.\s]?(\(?[0-9]{1,3}?\)?[-.\s]?)[0-9]{1,4}[-.\s]?[0-9]{1,9}$"
                                   title="Please enter a valid phone number (e.g., +998901234567)">
                            <button type="submit"
                                    class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary rounded ms-0">
                                Subscribe
                            </button>
                        </div>
                        <div class="form-check d-flex justify-content-center">
                            <input class="form-check-input me-4 rounded" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-body fs-14px" for="flexCheckDefault">
                                I accept the <a href="#" class="text-decoration-none border-bottom">terms &
                                    conditions</a> and <a href="#" class="text-decoration-none border-bottom">the data
                                    protection</a>
                            </label>
                        </div>
                    </div>
                </form>

            </div>

            <div class="lazy-bg bg-overlay position-absolute z-index-1 w-100 h-100   light-mode-img"
                 data-bg-src="./assets/images/others/news-letter-background.jpg">
            </div>
            <div class="lazy-bg bg-overlay dark-mode-img position-absolute z-index-1 w-100 h-100"
                 data-bg-src="./assets/images/others/news-letter-background-white-02.jpg">
            </div>
        </section>
    </main>
@endsection
