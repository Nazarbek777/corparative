@extends('layouts.frontend2')
@section('content')
    <main id="content" class="wrapper layout-page">
        <section class="z-index-2 position-relative pb-2 mb-12">

            <div class="bg-body-secondary mb-3">
                <div class="container">
                    <nav class="py-4 lh-30px" aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center py-1 mb-0">
                            <li class="breadcrumb-item"><a title="Home" href="../index.html">Home</a></li>
                            <li class="breadcrumb-item"><a title="Shop" href="shop-layout-v2.html">Shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Natural Coconut Cleansing Oil</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <section class="container pt-6 pb-13 pb-lg-20">
            <div class="row ">
                <div class="col-md-6 pe-lg-13">
                    <div class="row">
                        <div class="col-xl-2 pe-xl-0 order-1 order-xl-0 mt-5 mt-xl-0">
                            <div id="vertical-slider-thumb"
                                 class="slick-slider slick-slider-thumb ps-1 ms-n3 me-n4 mx-xl-0"
                                 data-slick-options='{&#34;arrows&#34;:false,&#34;asNavFor&#34;:&#34;#vertical-slider-slides&#34;,&#34;dots&#34;:false,&#34;focusOnSelect&#34;:true,&#34;responsive&#34;:[{&#34;breakpoint&#34;:1260,&#34;settings&#34;:{&#34;vertical&#34;:false}}],&#34;slidesToShow&#34;:4,&#34;vertical&#34;:true}'>
                                <img src="#" data-src="/assets/images/shop/product-gallery-05-154x205.jpg"
                                     class="cursor-pointer lazy-image mx-3 mx-xl-0 px-0 mb-xl-7" width="75" height="100"
                                     title="" alt=""><img src="#"
                                                          data-src="/assets/images/shop/product-gallery-06-154x205.jpg"
                                                          class="cursor-pointer lazy-image mx-3 mx-xl-0 px-0 mb-xl-7" width="75" height="100"
                                                          title="" alt=""><img src="#"
                                                                               data-src="/assets/images/shop/product-gallery-07-154x205.jpg"
                                                                               class="cursor-pointer lazy-image mx-3 mx-xl-0 px-0 mb-xl-7" width="75" height="100"
                                                                               title="" alt="">
                                <div class="position-relative cursor-pointer mx-3 mx-xl-0 px-0 mb-xl-7">
                                    <img src="#" data-src="/assets/images/shop/product-gallery-08-154x205.jpg"
                                         class="w-100 lazy-image" alt="product gallery" width="75" height="100">
                                    <div
                                        class="card-img-overlay d-inline-flex flex-column align-items-center justify-content-center">
                                        <div
                                            class="d-flex justify-content-center align-items-center rounded-circle product-gallery-video-thumb text-body-emphasis bg-body">
                                            <i class="fas fa-play"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 ps-xl-8 pe-xl-0 order-0 order-xl-1">
                            <div id="vertical-slider-slides"
                                 class="slick-slider slick-slider-arrow-inside slick-slider-dots-inside slick-slider-dots-light g-0"
                                 data-slick-options='{&#34;arrows&#34;:false,&#34;asNavFor&#34;:&#34;#vertical-slider-thumb&#34;,&#34;dots&#34;:false,&#34;slidesToShow&#34;:1,&#34;vertical&#34;:true}'>
                                <a href="/assets/images/shop/product-gallery-05.jpg" data-gallery="product-gallery"
                                   data-thumb-src="/assets/images/shop/product-gallery-05.jpg"><img src="#"
                                                                                                    data-src="/assets/images/shop/product-gallery-05.jpg" width="540" height="720"
                                                                                                    title="" class="h-auto lazy-image" alt=""></a><a
                                    href="/assets/images/shop/product-gallery-06.jpg" data-gallery="product-gallery"
                                    data-thumb-src="/assets/images/shop/product-gallery-06.jpg"><img src="#"
                                                                                                     data-src="/assets/images/shop/product-gallery-06.jpg" width="540" height="720"
                                                                                                     title="" class="h-auto lazy-image" alt=""></a><a
                                    href="/assets/images/shop/product-gallery-07.jpg" data-gallery="product-gallery"
                                    data-thumb-src="/assets/images/shop/product-gallery-07.jpg"><img src="#"
                                                                                                     data-src="/assets/images/shop/product-gallery-07.jpg" width="540" height="720"
                                                                                                     title="" class="h-auto lazy-image" alt=""></a>
                                <div class="position-relative">
                                    <img src="#" data-src="/assets/images/shop/product-gallery-08.jpg" width="540"
                                         height="720" title="" class="h-auto lazy-image" alt="">
                                    <div
                                        class="card-img-overlay d-inline-flex flex-column align-items-center justify-content-center">
                                        <a href="https://www.youtube.com/watch?v=6v2L2UGZJAM"
                                           class="view-video d-flex justify-content-center align-items-center rounded-circle product-gallery-video btn btn-white">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pt-md-0 pt-10">
                    <p class="d-flex align-items-center mb-6">
                        <span class="text-decoration-line-through">39.00</span>
                        <span class="fs-18px text-body-emphasis ps-6 fw-bold">29.00</span>
                        <span class="badge text-bg-primary fs-6 fw-semibold ms-7 px-6 py-3">20%</span>
                    </p>
                    <h1 class="mb-4 pb-2 fs-4">Natural Coconut Cleansing Oil</h1>
                    <div class="d-flex align-items-center fs-15px mb-6">
                        <p class="mb-0 fw-semibold text-body-emphasis">4.86</p>
                        <div class="d-flex align-items-center fs-12px justify-content-center mb-0 px-6 rating-result">
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
                                <div class="filled-stars" style="width: 96%">
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
                        </div>
                        <a href="#" class="border-start ps-6 text-body">Read 2947 reviews</a>
                    </div>
                    <p class="fs-15px">Niacinamide and Vitamin C are two anti-aging superstars but not usually
                        formulated together because of their different pH levels.</p>


                    <form class="product-info-custom">
                        <div class="form-group shop-swatch mb-7 d-flex align-items-center">
                            <span class="fw-semibold text-body-emphasis me-7">Size: </span>
                            <ul class="list-inline d-flex justify-content-start mb-0">
                                <li class="list-inline-item me-4 fw-semibold">
                                    <input type="radio" id="radio1" name="radio" class="product-info-size d-none"
                                           checked="">
                                    <label for="radio1" class="fs-14px p-4 d-block rounded text-decoration-none border"
                                           data-var="full size">Full size</label>
                                </li>
                                <li class="list-inline-item me-4 fw-semibold">
                                    <input type="radio" id="radio2" name="radio" class="product-info-size d-none">
                                    <label for="radio2" class="fs-14px p-4 d-block rounded text-decoration-none border"
                                           data-var="full size">Mini size</label>
                                </li>

                            </ul>
                        </div>

                        <p class="text-body-emphasis fw-semibold mb-6">Quantity: </p>
                        <div class="form-checkmb-2 pb-4">
                            <input type="radio" id="buy1" name="quality"
                                   class="me-4 form-check-input product-info-input" checked="">
                            <label for="buy1" class="text-body-emphasis form-check-label">
                                Buy 1 -
                                <span class="text-decoration-line-through mx-3 text-body">$39.00</span>
                                <span class="fw-bold">$29.00</span>
                            </label>
                            <span class="badge badge-primary fs-12px border text-primary fw-bold ms-4">Saved 10%</span>
                        </div>
                        <div class="form-checkmb-2 pb-4">
                            <input type="radio" id="buy2" name="quality"
                                   class="me-4 form-check-input product-info-input">
                            <label for="buy2" class="text-body-emphasis form-check-label">
                                Buy 2 -
                                <span class="text-decoration-line-through mx-3 text-body">$78.00</span>
                                <span class="fw-bold">$56.00</span>
                            </label>
                            <span class="badge badge-primary fs-12px border text-primary fw-bold ms-4">Saved 15%</span>
                        </div>
                        <div class="form-checkmb-2 pb-4">
                            <input type="radio" id="buy3" name="quality"
                                   class="me-4 form-check-input product-info-input">
                            <label for="buy3" class="text-body-emphasis form-check-label">
                                Buy 3 -
                                <span class="text-decoration-line-through mx-3 text-body">$117.00</span>
                                <span class="fw-bold">$72.00</span>
                            </label>
                            <span class="badge badge-primary fs-12px border text-primary fw-bold ms-4">Saved 20%</span>
                        </div>
                        <div class="form-checkmb-2 pb-4">
                            <input type="radio" id="buy4" name="quality"
                                   class="me-4 form-check-input product-info-input">
                            <label for="buy4" class="text-body-emphasis form-check-label">
                                Buy 4 -
                                <span class="text-decoration-line-through mx-3 text-body">$195.00</span>
                                <span class="fw-bold">$99.00</span>
                            </label>
                            <span class="badge badge-primary fs-12px border text-primary fw-bold ms-4">Saved 30%</span>
                        </div>

                        <button type="submit"
                                class="btn btn-lg btn-dark mb-7 mt-7 w-100 btn-hover-bg-primary btn-hover-border-primary">Add
                            To Bag
                        </button>
                    </form>
                    <div class="d-flex align-items-center flex-wrap">
                        <a href="compare.html"
                           class="text-decoration-none fw-semibold fs-6 me-9 pe-2 d-flex align-items-center">
                            <svg class="icon fs-5">
                                <use xlink:href="#icon-arrows-left-right-light"></use>
                            </svg>
                            <span class="ms-4 ps-2">Compare</span>
                        </a>
                        <a href="#" class="text-decoration-none fw-semibold fs-6 me-9 pe-2 d-flex align-items-center">
                            <svg class="icon fs-5">
                                <use xlink:href="#icon-star-light"></use>
                            </svg>
                            <span class="ms-4 ps-2">Add to wishlist</span>
                        </a>
                    </div>

                    <ul class="single-product-meta list-unstyled border-top pt-7 mt-7">
                        <li class="d-flex mb-4 pb-2 align-items-center">
                            <span class="text-body-emphasis fw-semibold fs-14px">Sku:</span>
                            <span class="ps-4">SF09281</span>
                        </li>
                        <li class="d-flex mb-4 pb-2 align-items-center">
                            <span class="text-body-emphasis fw-semibold fs-14px">Categories:</span>
                            <span class="ps-4">Makeup, Skincare</span>
                        </li>
                        <li class="d-flex mb-4 pb-2 align-items-center">
                            <span class="text-body-emphasis fw-semibold fs-14px">Share:</span>
                            <ul class="list-inline d-flex align-items-center mb-0 col-8 col-lg-10 ps-4">
                                <li class="list-inline-item me-7">
                                    <a href="#" class="fs-14px text-body product-info-share" data-bs-toggle="tooltip"
                                       data-bs-title="Twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item me-7">
                                    <a href="#" class="fs-14px text-body product-info-share" data-bs-toggle="tooltip"
                                       data-bs-title="Facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item me-7">
                                    <a href="#" class="fs-14px text-body product-info-share" data-bs-toggle="tooltip"
                                       data-bs-title="Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="fs-14px text-body product-info-share" data-bs-toggle="tooltip"
                                       data-bs-title="Youtube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="border-top w-100"></div>

        <div class="border-top w-100 h-1px"></div>
        <section class="container pt-15 pb-15 pt-lg-17 pb-lg-20">
            <div class="text-center">
                <h3 class="mb-12">You may also like</h3>
            </div>

            <div class="slick-slider"
                 data-slick-options="{&#34;arrows&#34;:true,&#34;centerMode&#34;:true,&#34;centerPadding&#34;:&#34;calc((100% - 1440px) / 2)&#34;,&#34;dots&#34;:true,&#34;infinite&#34;:true,&#34;responsive&#34;:[{&#34;breakpoint&#34;:1200,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:false,&#34;slidesToShow&#34;:3}},{&#34;breakpoint&#34;:992,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:false,&#34;slidesToShow&#34;:2}},{&#34;breakpoint&#34;:576,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:false,&#34;slidesToShow&#34;:1}}],&#34;slidesToShow&#34;:4}">
                <div class="mb-6">
                    <div class="card card-product grid-2 bg-transparent border-0">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden">
                            <a href="product-details-v1.html" class="hover-zoom-in d-block" title="Shield Conditioner">
                                <img src="#" data-src="/assets/images/products/product-01-330x440.jpg"
                                     class="img-fluid lazy-image w-100" alt="Shield Conditioner" width="330"
                                     height="440">
                            </a>

                            <div class="position-absolute product-flash z-index-2 "><span
                                    class="badge badge-product-flash on-sale bg-primary">-25%</span></div>
                            <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Quick View">
									<span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                          class="d-flex align-items-center justify-content-center">
										<svg class="icon icon-eye-light">
											<use xlink:href="#icon-eye-light"></use>
										</svg>
									</span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist sm"
                                   href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                   data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare sm"
                                   href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                   data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div><a href="#"
                                     class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap btn-sm px-6 py-3 lh-2">Add
                                To Cart</a>
                        </figure>
                        <div class="card-body text-center p-0">

							<span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
								<del class=" text-body fw-500 me-4 fs-13px">$40.00</del>
								<ins class="text-decoration-none">$30.00</ins></span>

                            <h4
                                class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset" href="product-details-v1.html">Shield
                                    Conditioner</a></h4>
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
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="mb-6">
                    <div class="card card-product grid-2 bg-transparent border-0">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden">
                            <a href="product-details-v1.html" class="hover-zoom-in d-block"
                               title="Perfecting Facial Oil">
                                <img src="#" data-src="/assets/images/products/product-02-330x440.jpg"
                                     class="img-fluid lazy-image w-100" alt="Perfecting Facial Oil" width="330"
                                     height="440">
                            </a>

                            <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Quick View">
									<span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                          class="d-flex align-items-center justify-content-center">
										<svg class="icon icon-eye-light">
											<use xlink:href="#icon-eye-light"></use>
										</svg>
									</span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist sm"
                                   href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                   data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare sm"
                                   href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                   data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div><a href="#"
                                     class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap btn-sm px-6 py-3 lh-2">Add
                                To Cart</a>
                        </figure>
                        <div class="card-body text-center p-0">






							<span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$20.00</span>

                            <h4
                                class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset" href="product-details-v1.html">Perfecting
                                    Facial Oil</a></h4>
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
                                    <div class="filled-stars" style="width: 100%">
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
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="mb-6">
                    <div class="card card-product grid-2 bg-transparent border-0">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden">
                            <a href="product-details-v1.html" class="hover-zoom-in d-block"
                               title="Enriched Hand &amp; Body Wash">
                                <img src="#" data-src="/assets/images/products/product-03-330x440.jpg"
                                     class="img-fluid lazy-image w-100" alt="Enriched Hand &amp; Body Wash" width="330"
                                     height="440">
                            </a>

                            <div class="position-absolute product-flash z-index-2 "><span
                                    class="badge badge-product-flash on-new">New</span></div>
                            <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Quick View">
									<span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                          class="d-flex align-items-center justify-content-center">
										<svg class="icon icon-eye-light">
											<use xlink:href="#icon-eye-light"></use>
										</svg>
									</span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist sm"
                                   href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                   data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare sm"
                                   href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                   data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div><a href="#"
                                     class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap btn-sm px-6 py-3 lh-2">Add
                                To Cart</a>
                        </figure>
                        <div class="card-body text-center p-0">






							<span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>

                            <h4
                                class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset" href="product-details-v1.html">Enriched Hand
                                    &amp; Body Wash</a></h4>
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
                                    <div class="filled-stars" style="width: 100%">
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
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="mb-6">
                    <div class="card card-product grid-2 bg-transparent border-0">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden">
                            <a href="product-details-v1.html" class="hover-zoom-in d-block" title="Shield Shampoo">
                                <img src="#" data-src="/assets/images/products/product-04-330x440.jpg"
                                     class="img-fluid lazy-image w-100" alt="Shield Shampoo" width="330" height="440">
                            </a>

                            <div class="position-absolute product-flash z-index-2 "><span
                                    class="badge badge-product-flash on-sale bg-primary">-24%</span></div>
                            <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Quick View">
									<span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                          class="d-flex align-items-center justify-content-center">
										<svg class="icon icon-eye-light">
											<use xlink:href="#icon-eye-light"></use>
										</svg>
									</span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist sm"
                                   href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                   data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare sm"
                                   href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                   data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div><a href="#"
                                     class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap btn-sm px-6 py-3 lh-2">Add
                                To Cart</a>
                        </figure>
                        <div class="card-body text-center p-0">

							<span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
								<del class=" text-body fw-500 me-4 fs-13px">$25.00</del>
								<ins class="text-decoration-none">$19.00</ins></span>

                            <h4
                                class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset" href="product-details-v1.html">Shield
                                    Shampoo</a></h4>
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
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="mb-6">
                    <div class="card card-product grid-2 bg-transparent border-0">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden">
                            <a href="product-details-v1.html" class="hover-zoom-in d-block" title="Enriched Hand Wash">
                                <img src="#" data-src="/assets/images/products/product-05-330x440.jpg"
                                     class="img-fluid lazy-image w-100" alt="Enriched Hand Wash" width="330"
                                     height="440">
                            </a>

                            <div class="position-absolute product-flash z-index-2 "><span
                                    class="badge badge-product-flash on-sale bg-primary">-26%</span></div>
                            <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Quick View">
									<span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                          class="d-flex align-items-center justify-content-center">
										<svg class="icon icon-eye-light">
											<use xlink:href="#icon-eye-light"></use>
										</svg>
									</span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist sm"
                                   href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                   data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare sm"
                                   href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                   data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div><a href="#"
                                     class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap btn-sm px-6 py-3 lh-2">Add
                                To Cart</a>
                        </figure>
                        <div class="card-body text-center p-0">

							<span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
								<del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
								<ins class="text-decoration-none">$29.00</ins></span>

                            <h4
                                class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset" href="product-details-v1.html">Enriched Hand
                                    Wash</a></h4>
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
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="mb-6">
                    <div class="card card-product grid-2 bg-transparent border-0">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden">
                            <a href="product-details-v1.html" class="hover-zoom-in d-block" title="Enriched Duo">
                                <img src="#" data-src="/assets/images/products/product-06-330x440.jpg"
                                     class="img-fluid lazy-image w-100" alt="Enriched Duo" width="330" height="440">
                            </a>

                            <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Quick View">
									<span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                          class="d-flex align-items-center justify-content-center">
										<svg class="icon icon-eye-light">
											<use xlink:href="#icon-eye-light"></use>
										</svg>
									</span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist sm"
                                   href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                   data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare sm"
                                   href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                   data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div><a href="#"
                                     class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap btn-sm px-6 py-3 lh-2">Add
                                To Cart</a>
                        </figure>
                        <div class="card-body text-center p-0">

							<span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>

                            <h4
                                class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset" href="product-details-v1.html">Enriched
                                    Duo</a></h4>
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
                                    <div class="filled-stars" style="width: 100%">
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
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="mb-6">
                    <div class="card card-product grid-2 bg-transparent border-0">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden">
                            <a href="product-details-v1.html" class="hover-zoom-in d-block" title="Shield Spray">
                                <img src="#" data-src="/assets/images/products/product-07-330x440.jpg"
                                     class="img-fluid lazy-image w-100" alt="Shield Spray" width="330" height="440">
                            </a>

                            <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Quick View">
									<span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                          class="d-flex align-items-center justify-content-center">
										<svg class="icon icon-eye-light">
											<use xlink:href="#icon-eye-light"></use>
										</svg>
									</span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist sm"
                                   href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                   data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare sm"
                                   href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                   data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div><a href="#"
                                     class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap btn-sm px-6 py-3 lh-2">Add
                                To Cart</a>
                        </figure>
                        <div class="card-body text-center p-0">






							<span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>

                            <h4
                                class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset" href="product-details-v1.html">Shield
                                    Spray</a></h4>
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
                                    <div class="filled-stars" style="width: 100%">
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
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="mb-6">
                    <div class="card card-product grid-2 bg-transparent border-0">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden">
                            <a href="product-details-v1.html" class="hover-zoom-in d-block" title="Shield Spray">
                                <img src="#" data-src="/assets/images/products/product-08-330x440.jpg"
                                     class="img-fluid lazy-image w-100" alt="Shield Spray" width="330" height="440">
                            </a>

                            <div class="position-absolute product-flash z-index-2 "><span
                                    class="badge badge-product-flash on-sale bg-primary">-36%</span></div>
                            <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Quick View">
									<span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                          class="d-flex align-items-center justify-content-center">
										<svg class="icon icon-eye-light">
											<use xlink:href="#icon-eye-light"></use>
										</svg>
									</span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist sm"
                                   href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                   data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare sm"
                                   href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                   data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div><a href="#"
                                     class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap btn-sm px-6 py-3 lh-2">Add
                                To Cart</a>
                        </figure>
                        <div class="card-body text-center p-0">

							<span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
								<del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
								<ins class="text-decoration-none">$25.00</ins></span>

                            <h4
                                class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset" href="product-details-v1.html">Shield
                                    Spray</a></h4>
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
                                    <div class="filled-stars" style="width: 90%">
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
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <div class="border-top w-100"></div>

    </main>
@endsection
