@extends('layouts.frontend2')
@section('content')
    <main id="content" class="wrapper layout-blocks">
        <section class="page-title z-index-2 position-relative">

            <div class="bg-body-secondary">
                <div class="container">
                    <nav class="py-4 lh-30px" aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center py-1">
                            <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blocks - Product Tabs</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="text-center py-13">
                <div class="container">
                    <h2 class="mb-0">Blocks - Product Tabs</h2>
                    <p class="fs-18px mw-xl-50 mw-lg-75 ms-auto me-auto mt-7 mb-3 pb-2">Copy any custom block snippet
                        below and paste it on your page to build your website easily.</p>
                </div>
            </div>
        </section>
        <section class="border-bottom pb-16 pb-lg-21 mt-lg-n12">
            <div class="card doc-example ">
                <div class="card-body">
                    <div class="doc-example-preview">
                        <section id="feature_products_1" class="container container-xxl pt-lg-18 pt-14 pb-lg-21 pb-15">
                            <h2 class="text-center mb-10 pb-3" data-animate="fadeInUp">Feature Products</h2>
                            <ul class="nav nav-tabs border-0 d-flex justify-content-center mb-14" role="tablist">
                                <li class="nav-item" role="presentation" data-animate="fadeInUp">
                                    <h5 class="mb-0 px-sm-7 px-5 py-2">
                                        <button
                                            class="nav-link text-hover-underline p-0 border-0 text-body-emphasis opacity-50 active"
                                            data-bs-toggle="tab" data-bs-target="#skincare-tab-pane" type="button"
                                            role="tab" aria-controls="skincare-tab-pane"
                                            aria-selected="true">Skincare</button>
                                    </h5>
                                </li>
                                <li class="nav-item" role="presentation" data-animate="fadeInUp">
                                    <h5 class="mb-0 px-sm-7 px-5 py-2">
                                        <button
                                            class="nav-link text-hover-underline p-0 border-0 text-body-emphasis opacity-50"
                                            data-bs-toggle="tab" data-bs-target="#bodycare-tab-pane" type="button"
                                            role="tab" aria-controls="bodycare-tab-pane"
                                            aria-selected="false">Bodycare</button>
                                    </h5>
                                </li>
                                <li class="nav-item" role="presentation" data-animate="fadeInUp">
                                    <h5 class="mb-0 px-sm-7 px-5 py-2">
                                        <button
                                            class="nav-link text-hover-underline p-0 border-0 text-body-emphasis opacity-50"
                                            data-bs-toggle="tab" data-bs-target="#haircare-tab-pane" type="button"
                                            role="tab" aria-controls="haircare-tab-pane"
                                            aria-selected="false">Haircare</button>
                                    </h5>
                                </li>
                                <li class="nav-item" role="presentation" data-animate="fadeInUp">
                                    <h5 class="mb-0 px-sm-7 px-5 py-2">
                                        <button
                                            class="nav-link text-hover-underline p-0 border-0 text-body-emphasis opacity-50"
                                            data-bs-toggle="tab" data-bs-target="#accessories-tab-pane" type="button"
                                            role="tab" aria-controls="accessories-tab-pane"
                                            aria-selected="false">Accessories</button>
                                    </h5>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="skincare-tab-pane" role="tabpanel"
                                     tabindex="0">
                                    <div class="row gy-50px">
                                        <div class="col-lg-4 col-xl-3 col-sm-6">
                                            <div class="card card-product grid-1 bg-transparent border-0"
                                                 data-animate="fadeInUp">
                                                <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                                    <a href="../shop/product-details-v1.html"
                                                       class="hover-zoom-in d-block" title="Shield Conditioner">
                                                        <img src="#"
                                                             data-src="/assets/images/products/product-15-330x440.jpg"
                                                             class="img-fluid lazy-image w-100" alt="Shield Conditioner"
                                                             width="330" height="440">
                                                    </a>

                                                    <div class="position-absolute product-flash z-index-2 "><span
                                                            class="badge badge-product-flash on-sale bg-primary">-25%</span>
                                                    </div>
                                                    <div
                                                        class="position-absolute d-flex z-index-2 product-actions  horizontal">
                                                        <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                                           href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                           data-bs-title="Add To Cart">
                                                            <svg class="icon icon-shopping-bag-open-light">
                                                                <use xlink:href="#icon-shopping-bag-open-light"></use>
                                                            </svg>
                                                        </a><a
                                                            class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                                            href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Quick View">
															<span data-bs-toggle="modal"
                                                                  data-bs-target="#quickViewModal"
                                                                  class="d-flex align-items-center justify-content-center">
																<svg class="icon icon-eye-light">
																	<use xlink:href="#icon-eye-light"></use>
																</svg>
															</span>
                                                        </a>
                                                        <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                                           href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                           data-bs-title="Add To Wishlist">
                                                            <svg class="icon icon-star-light">
                                                                <use xlink:href="#icon-star-light"></use>
                                                            </svg>
                                                        </a>
                                                        <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                                           href="../shop/compare.html" data-bs-toggle="tooltip"
                                                           data-bs-placement="top" data-bs-title="Compare">
                                                            <svg class="icon icon-arrows-left-right-light">
                                                                <use xlink:href="#icon-arrows-left-right-light"></use>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </figure>
                                                <div class="card-body text-center p-0">






													<span
                                                        class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
														<del class=" text-body fw-500 me-4 fs-13px">$40.00</del>
														<ins class="text-decoration-none">$30.00</ins></span>

                                                    <h4
                                                        class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                                        <a class="text-decoration-none text-reset"
                                                           href="../shop/product-details-v1.html">Shield
                                                            Conditioner</a></h4>
                                                    <div
                                                        class="d-flex align-items-center fs-12px justify-content-center">
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
                                                        </div><span class="reviews ms-4 pt-3 fs-14px">2947
															reviews</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="bodycare-tab-pane" role="tabpanel" tabindex="0">
                                    <div class="row gy-50px">
                                        <div class="col-lg-4 col-xl-3 col-sm-6">
                                            <div class="card card-product grid-1 bg-transparent border-0"
                                                 data-animate="fadeInUp">
                                                <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                                    <a href="../shop/product-details-v1.html"
                                                       class="hover-zoom-in d-block" title="Supreme Moisture Mask">
                                                        <img src="#"
                                                             data-src="/assets/images/products/product-09-330x440.jpg"
                                                             class="img-fluid lazy-image w-100"
                                                             alt="Supreme Moisture Mask" width="330" height="440">
                                                    </a>

                                                    <div class="position-absolute product-flash z-index-2 "><span
                                                            class="badge badge-product-flash on-sale bg-primary">-26%</span>
                                                    </div>
                                                    <div
                                                        class="position-absolute d-flex z-index-2 product-actions  horizontal">
                                                        <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                                           href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                           data-bs-title="Add To Cart">
                                                            <svg class="icon icon-shopping-bag-open-light">
                                                                <use xlink:href="#icon-shopping-bag-open-light"></use>
                                                            </svg>
                                                        </a><a
                                                            class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                                            href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Quick View">
															<span data-bs-toggle="modal"
                                                                  data-bs-target="#quickViewModal"
                                                                  class="d-flex align-items-center justify-content-center">
																<svg class="icon icon-eye-light">
																	<use xlink:href="#icon-eye-light"></use>
																</svg>
															</span>
                                                        </a>
                                                        <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                                           href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                           data-bs-title="Add To Wishlist">
                                                            <svg class="icon icon-star-light">
                                                                <use xlink:href="#icon-star-light"></use>
                                                            </svg>
                                                        </a>
                                                        <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                                           href="../shop/compare.html" data-bs-toggle="tooltip"
                                                           data-bs-placement="top" data-bs-title="Compare">
                                                            <svg class="icon icon-arrows-left-right-light">
                                                                <use xlink:href="#icon-arrows-left-right-light"></use>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </figure>
                                                <div class="card-body text-center p-0">






													<span
                                                        class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
														<del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
														<ins class="text-decoration-none">$29.00</ins></span>

                                                    <h4
                                                        class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                                        <a class="text-decoration-none text-reset"
                                                           href="../shop/product-details-v1.html">Supreme Moisture
                                                            Mask</a></h4>
                                                    <div
                                                        class="d-flex align-items-center fs-12px justify-content-center">
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
                                                        </div><span class="reviews ms-4 pt-3 fs-14px">2947
															reviews</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xl-3 col-sm-6">
                                            <div class="card card-product grid-1 bg-transparent border-0"
                                                 data-animate="fadeInUp">
                                                <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                                    <a href="../shop/product-details-v1.html"
                                                       class="hover-zoom-in d-block"
                                                       title="Supreme Polishing Treatment">
                                                        <img src="#"
                                                             data-src="/assets/images/products/product-10-330x440.jpg"
                                                             class="img-fluid lazy-image w-100"
                                                             alt="Supreme Polishing Treatment" width="330" height="440">
                                                    </a>

                                                    <div
                                                        class="position-absolute d-flex z-index-2 product-actions  horizontal">
                                                        <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                                           href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                           data-bs-title="Add To Cart">
                                                            <svg class="icon icon-shopping-bag-open-light">
                                                                <use xlink:href="#icon-shopping-bag-open-light"></use>
                                                            </svg>
                                                        </a><a
                                                            class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                                            href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Quick View">
															<span data-bs-toggle="modal"
                                                                  data-bs-target="#quickViewModal"
                                                                  class="d-flex align-items-center justify-content-center">
																<svg class="icon icon-eye-light">
																	<use xlink:href="#icon-eye-light"></use>
																</svg>
															</span>
                                                        </a>
                                                        <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                                           href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                           data-bs-title="Add To Wishlist">
                                                            <svg class="icon icon-star-light">
                                                                <use xlink:href="#icon-star-light"></use>
                                                            </svg>
                                                        </a>
                                                        <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                                           href="../shop/compare.html" data-bs-toggle="tooltip"
                                                           data-bs-placement="top" data-bs-title="Compare">
                                                            <svg class="icon icon-arrows-left-right-light">
                                                                <use xlink:href="#icon-arrows-left-right-light"></use>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </figure>
                                                <div class="card-body text-center p-0">






													<span
                                                        class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>

                                                    <h4
                                                        class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                                        <a class="text-decoration-none text-reset"
                                                           href="../shop/product-details-v1.html">Supreme Polishing
                                                            Treatment</a></h4>
                                                    <div
                                                        class="d-flex align-items-center fs-12px justify-content-center">
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
                                                        </div><span class="reviews ms-4 pt-3 fs-14px">2947
															reviews</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="haircare-tab-pane" role="tabpanel" tabindex="0">
                                    <div class="row gy-50px">
                                        <div class="col-lg-4 col-xl-3 col-sm-6">
                                            <div class="card card-product grid-1 bg-transparent border-0"
                                                 data-animate="fadeInUp">
                                                <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                                    <a href="../shop/product-details-v1.html"
                                                       class="hover-zoom-in d-block"
                                                       title="Natural Coconut Cleansing Oil">
                                                        <img src="#"
                                                             data-src="/assets/images/products/product-12-330x440.jpg"
                                                             class="img-fluid lazy-image w-100"
                                                             alt="Natural Coconut Cleansing Oil" width="330"
                                                             height="440">
                                                    </a>

                                                    <div class="position-absolute product-flash z-index-2 "><span
                                                            class="badge badge-product-flash on-sale bg-primary">-26%</span>
                                                    </div>
                                                    <div
                                                        class="position-absolute d-flex z-index-2 product-actions  horizontal">
                                                        <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                                           href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                           data-bs-title="Add To Cart">
                                                            <svg class="icon icon-shopping-bag-open-light">
                                                                <use xlink:href="#icon-shopping-bag-open-light"></use>
                                                            </svg>
                                                        </a><a
                                                            class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                                            href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Quick View">
															<span data-bs-toggle="modal"
                                                                  data-bs-target="#quickViewModal"
                                                                  class="d-flex align-items-center justify-content-center">
																<svg class="icon icon-eye-light">
																	<use xlink:href="#icon-eye-light"></use>
																</svg>
															</span>
                                                        </a>
                                                        <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                                           href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                           data-bs-title="Add To Wishlist">
                                                            <svg class="icon icon-star-light">
                                                                <use xlink:href="#icon-star-light"></use>
                                                            </svg>
                                                        </a>
                                                        <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                                           href="../shop/compare.html" data-bs-toggle="tooltip"
                                                           data-bs-placement="top" data-bs-title="Compare">
                                                            <svg class="icon icon-arrows-left-right-light">
                                                                <use xlink:href="#icon-arrows-left-right-light"></use>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </figure>
                                                <div class="card-body text-center p-0">






													<span
                                                        class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
														<del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
														<ins class="text-decoration-none">$29.00</ins></span>

                                                    <h4
                                                        class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                                        <a class="text-decoration-none text-reset"
                                                           href="../shop/product-details-v1.html">Natural Coconut
                                                            Cleansing Oil</a></h4>
                                                    <div
                                                        class="d-flex align-items-center fs-12px justify-content-center">
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
                                                        </div><span class="reviews ms-4 pt-3 fs-14px">2947
															reviews</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="accessories-tab-pane" role="tabpanel" tabindex="0">
                                    <div class="row gy-50px">
                                        <div class="col-lg-4 col-xl-3 col-sm-6">
                                            <div class="card card-product grid-1 bg-transparent border-0"
                                                 data-animate="fadeInUp">
                                                <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                                    <a href="../shop/product-details-v1.html"
                                                       class="hover-zoom-in d-block" title="Shield Conditioner">
                                                        <img src="#"
                                                             data-src="/assets/images/products/product-01-330x440.jpg"
                                                             class="img-fluid lazy-image w-100" alt="Shield Conditioner"
                                                             width="330" height="440">
                                                    </a>

                                                    <div class="position-absolute product-flash z-index-2 "><span
                                                            class="badge badge-product-flash on-sale bg-primary">-25%</span>
                                                    </div>
                                                    <div
                                                        class="position-absolute d-flex z-index-2 product-actions  horizontal">
                                                        <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                                           href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                           data-bs-title="Add To Cart">
                                                            <svg class="icon icon-shopping-bag-open-light">
                                                                <use xlink:href="#icon-shopping-bag-open-light"></use>
                                                            </svg>
                                                        </a><a
                                                            class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                                            href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Quick View">
															<span data-bs-toggle="modal"
                                                                  data-bs-target="#quickViewModal"
                                                                  class="d-flex align-items-center justify-content-center">
																<svg class="icon icon-eye-light">
																	<use xlink:href="#icon-eye-light"></use>
																</svg>
															</span>
                                                        </a>
                                                        <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                                           href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                           data-bs-title="Add To Wishlist">
                                                            <svg class="icon icon-star-light">
                                                                <use xlink:href="#icon-star-light"></use>
                                                            </svg>
                                                        </a>
                                                        <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                                           href="../shop/compare.html" data-bs-toggle="tooltip"
                                                           data-bs-placement="top" data-bs-title="Compare">
                                                            <svg class="icon icon-arrows-left-right-light">
                                                                <use xlink:href="#icon-arrows-left-right-light"></use>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </figure>
                                                <div class="card-body text-center p-0">






													<span
                                                        class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
														<del class=" text-body fw-500 me-4 fs-13px">$40.00</del>
														<ins class="text-decoration-none">$30.00</ins></span>

                                                    <h4
                                                        class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                                        <a class="text-decoration-none text-reset"
                                                           href="../shop/product-details-v1.html">Shield
                                                            Conditioner</a></h4>
                                                    <div
                                                        class="d-flex align-items-center fs-12px justify-content-center">
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
                                                        </div><span class="reviews ms-4 pt-3 fs-14px">2947
															reviews</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
