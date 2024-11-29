@extends('layouts.frontend2')
@section('content')
    <main id="content" class="wrapper layout-page">
        <section class="z-index-2 position-relative pb-2 mb-12">

            <div class="bg-body-secondary mb-3">
                <div class="container">
                    <nav class="py-4 lh-30px" aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center py-1 mb-0">
                            <li class="breadcrumb-item"><a title="Home" href="../index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Update</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>


        <section class="pt-10 pb-16 pb-lg-18">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="position-sticky top-0">




                            <aside class="primary-sidebar mt-12 pt-2 mt-lg-0 pt-lg-0 pe-xl-9 me-xl-2">
                                <div class="widget widget-search">
                                    <h4 class="widget-title fs-5 mb-6">Search</h4>
                                    <form action="#">
                                        <div class="input-group">
                                            <button type="submit"
                                                    class="input-group-text bg-transparent px-4 border-0 position-absolute z-index-4 text-body-emphasis fs-5 start-0 top-0 bottom-0 m-auto"><svg
                                                    class="icon icon-magnifying-glass-light">
                                                    <use xlink:href="#icon-magnifying-glass-light"></use>
                                                </svg></button>
                                            <input type="search" name="search" class="form-control ps-11"
                                                   placeholder="Search">
                                        </div>
                                    </form>
                                </div>
                                <div class="widget widget-category">
                                    <h4 class="widget-title fs-5 mb-6">Category</h4>
                                    <ul class="navbar-nav navbar-nav-cate" id="widget_category">
                                        <li class="nav-item">
                                            <a href="#" title="Make up"
                                               class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                    class="text-hover-underline">Make up</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" title="Skin care"
                                               class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center active"><span
                                                    class="text-hover-underline">Skin care</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" title="How to’s"
                                               class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                    class="text-hover-underline">How to’s</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" title="Tips"
                                               class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                    class="text-hover-underline">Tips</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" title="Hair &amp; body"
                                               class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                    class="text-hover-underline">Hair &amp; body</span></a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="widget widget-post">
                                    <h4 class="widget-title fs-5 mb-6">Recent posts</h4>
                                    <ul class="list-unstyled mb-0 row gy-7 gx-0">

                                        <li class="col-12">
                                            <div class="card border-0 flex-row">
                                                <figure class="flex-shrink-0 mb-0 me-7">
                                                    <a href="#" class="d-block"
                                                       title="Why You Should Try an Overnight Balm">
                                                        <img data-src="/assets/images/blog/post-12-60x80.jpg"
                                                             class="img-fluid lazy-image"
                                                             alt="Why You Should Try an Overnight Balm" width="60"
                                                             height="80" src="#">
                                                    </a>
                                                </figure>
                                                <div class="card-body p-0">
                                                    <h5
                                                        class="card-text fw-semibold ls-1 text-uppercase fs-13px mb-3 text-body text-primary-hover">
                                                        <a class="text-decoration-none text-reset" href="#"
                                                           title="Skin care">Skin care</a></h5>
                                                    <h4
                                                        class="card-title mb-0 text-body-emphasis fs-15px lh-base text-primary-hover">
                                                        <a class="text-decoration-none text-reset"
                                                           href="details-01.html"
                                                           title="Why You Should Try an Overnight Balm">Why You Should
                                                            Try an Overnight Balm</a></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-12">
                                            <div class="card border-0 flex-row">
                                                <figure class="flex-shrink-0 mb-0 me-7">
                                                    <a href="#" class="d-block"
                                                       title="How to Plop Hair for Bouncy, Beautiful Curls">
                                                        <img data-src="/assets/images/blog/post-14-60x80.jpg"
                                                             class="img-fluid lazy-image"
                                                             alt="How to Plop Hair for Bouncy, Beautiful Curls"
                                                             width="60" height="80" src="#">
                                                    </a>
                                                </figure>
                                                <div class="card-body p-0">
                                                    <h5
                                                        class="card-text fw-semibold ls-1 text-uppercase fs-13px mb-3 text-body text-primary-hover">
                                                        <a class="text-decoration-none text-reset" href="#"
                                                           title="Skin care">Skin care</a></h5>
                                                    <h4
                                                        class="card-title mb-0 text-body-emphasis fs-15px lh-base text-primary-hover">
                                                        <a class="text-decoration-none text-reset"
                                                           href="details-01.html"
                                                           title="How to Plop Hair for Bouncy, Beautiful Curls">How to
                                                            Plop Hair for Bouncy, Beautiful Curls</a></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-12">
                                            <div class="card border-0 flex-row">
                                                <figure class="flex-shrink-0 mb-0 me-7">
                                                    <a href="#" class="d-block"
                                                       title="Which foundation formula is right for your skin?">
                                                        <img data-src="/assets/images/blog/post-11-60x80.jpg"
                                                             class="img-fluid lazy-image"
                                                             alt="Which foundation formula is right for your skin?"
                                                             width="60" height="80" src="#">
                                                    </a>
                                                </figure>
                                                <div class="card-body p-0">
                                                    <h5
                                                        class="card-text fw-semibold ls-1 text-uppercase fs-13px mb-3 text-body text-primary-hover">
                                                        <a class="text-decoration-none text-reset" href="#"
                                                           title="Skin care">Skin care</a></h5>
                                                    <h4
                                                        class="card-title mb-0 text-body-emphasis fs-15px lh-base text-primary-hover">
                                                        <a class="text-decoration-none text-reset"
                                                           href="details-01.html"
                                                           title="Which foundation formula is right for your skin?">Which
                                                            foundation formula is right for your skin?</a></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-12">
                                            <div class="card border-0 flex-row">
                                                <figure class="flex-shrink-0 mb-0 me-7">
                                                    <a href="#" class="d-block"
                                                       title="A User-Friendly Guide to Natural Cleansers">
                                                        <img data-src="/assets/images/blog/post-15-60x80.jpg"
                                                             class="img-fluid lazy-image"
                                                             alt="A User-Friendly Guide to Natural Cleansers" width="60"
                                                             height="80" src="#">
                                                    </a>
                                                </figure>
                                                <div class="card-body p-0">
                                                    <h5
                                                        class="card-text fw-semibold ls-1 text-uppercase fs-13px mb-3 text-body text-primary-hover">
                                                        <a class="text-decoration-none text-reset" href="#"
                                                           title="Skin care">Skin care</a></h5>
                                                    <h4
                                                        class="card-title mb-0 text-body-emphasis fs-15px lh-base text-primary-hover">
                                                        <a class="text-decoration-none text-reset"
                                                           href="details-01.html"
                                                           title="A User-Friendly Guide to Natural Cleansers">A
                                                            User-Friendly Guide to Natural Cleansers</a></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget widget-banner">
                                    <div class="card border-0">
                                        <img class="card-img img-fluid lazy-image"
                                             data-src="/assets/images/blog/widget-banner-img.jpg"
                                             alt="Be your kind of beauty" width="340" height="343" src="#">
                                        <div
                                            class="card-img-overlay pt-8 pb-7 px-xl-14 d-flex flex-column align-items-center justify-content-between">
                                            <h2 class="fw-semibold text-uppercase fs-30px lh-12 text-white text-center">
                                                Be your kind of beauty</h2>
                                            <a href="" target="_blank" class="btn btn-white shadow-none">
                                                Explore More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget widget-tags">
                                    <h4 class="widget-title fs-5 mb-6">Tags</h4>
                                    <ul class="w-100 mt-n4 list-unstyled d-flex flex-wrap mb-0">
                                        <li class="me-6 mt-4">
                                            <a href="#" title="Cleansing"
                                               class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">Cleansing</a>
                                        </li>
                                        <li class="me-6 mt-4">
                                            <a href="#" title="Make up"
                                               class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">Make
                                                up</a>
                                        </li>
                                        <li class="me-6 mt-4">
                                            <a href="#" title="eye cream"
                                               class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">eye
                                                cream</a>
                                        </li>
                                        <li class="me-6 mt-4">
                                            <a href="#" title="nail"
                                               class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">nail</a>
                                        </li>
                                        <li class="me-6 mt-4">
                                            <a href="#" title="shampoo"
                                               class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">shampoo</a>
                                        </li>
                                        <li class="me-6 mt-4">
                                            <a href="#" title="coffee bean"
                                               class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">coffee
                                                bean</a>
                                        </li>
                                        <li class="me-6 mt-4">
                                            <a href="#" title="healthy"
                                               class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">healthy</a>
                                        </li>
                                        <li class="me-6 mt-4">
                                            <a href="#" title="skin care"
                                               class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">skin
                                                care</a>
                                        </li>
                                        <li class="me-6 mt-4">
                                            <a href="#" title="sale"
                                               class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">sale</a>
                                        </li>
                                        <li class="me-6 mt-4">
                                            <a href="#" title="Cosmetics"
                                               class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">Cosmetics</a>
                                        </li>
                                        <li class="me-6 mt-4">
                                            <a href="#" title="Natural cleansers"
                                               class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">Natural
                                                cleansers</a>
                                        </li>
                                        <li class="me-6 mt-4">
                                            <a href="#" title="Organic"
                                               class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">Organic</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget widget-instagram">
                                    <div class="d-flex align-items-baseline justify-content-between">
                                        <h4 class="widget-title fs-5 mb-6">Follow us</h4><a href="#"
                                                                                            class="text-primary text-hover-underline">@GRACE</a>
                                    </div>
                                    <div class="row g-10px">
                                        <div class="col-4">
                                            <a class="card-img-overlay-hover hover-zoom-in d-block"
                                               href="/assets/images/instagram/instagram-01.jpg" title="instagram-01"
                                               data-gallery="widget_instagram">
                                                <img class="lazy-image img-fluid w-100" width="106" height="106"
                                                     data-src="/assets/images/instagram/instagram-01-106x106.jpg"
                                                     alt="instagram-01" src="#">
                                                <span class="card-img-overlay bg-dark bg-opacity-30"></span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a class="card-img-overlay-hover hover-zoom-in d-block"
                                               href="/assets/images/instagram/instagram-02.jpg" title="instagram-02"
                                               data-gallery="widget_instagram">
                                                <img class="lazy-image img-fluid w-100" width="106" height="106"
                                                     data-src="/assets/images/instagram/instagram-02-106x106.jpg"
                                                     alt="instagram-02" src="#">
                                                <span class="card-img-overlay bg-dark bg-opacity-30"></span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a class="card-img-overlay-hover hover-zoom-in d-block"
                                               href="/assets/images/instagram/instagram-03.jpg" title="instagram-03"
                                               data-gallery="widget_instagram">
                                                <img class="lazy-image img-fluid w-100" width="106" height="106"
                                                     data-src="/assets/images/instagram/instagram-03-106x106.jpg"
                                                     alt="instagram-03" src="#">
                                                <span class="card-img-overlay bg-dark bg-opacity-30"></span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a class="card-img-overlay-hover hover-zoom-in d-block"
                                               href="/assets/images/instagram/instagram-04.jpg" title="instagram-04"
                                               data-gallery="widget_instagram">
                                                <img class="lazy-image img-fluid w-100" width="106" height="106"
                                                     data-src="/assets/images/instagram/instagram-04-106x106.jpg"
                                                     alt="instagram-04" src="#">
                                                <span class="card-img-overlay bg-dark bg-opacity-30"></span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a class="card-img-overlay-hover hover-zoom-in d-block"
                                               href="/assets/images/instagram/instagram-05.jpg" title="instagram-05"
                                               data-gallery="widget_instagram">
                                                <img class="lazy-image img-fluid w-100" width="106" height="106"
                                                     data-src="/assets/images/instagram/instagram-05-106x106.jpg"
                                                     alt="instagram-05" src="#">
                                                <span class="card-img-overlay bg-dark bg-opacity-30"></span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a class="card-img-overlay-hover hover-zoom-in d-block"
                                               href="/assets/images/instagram/instagram-06.jpg" title="instagram-06"
                                               data-gallery="widget_instagram">
                                                <img class="lazy-image img-fluid w-100" width="106" height="106"
                                                     data-src="/assets/images/instagram/instagram-06-106x106.jpg"
                                                     alt="instagram-06" src="#">
                                                <span class="card-img-overlay bg-dark bg-opacity-30"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class=" text-center mb-13">
                            <a href="#"
                               class="btn btn-light btn-hover-bg-dark btn-hover-border-dark btn-hover-text-light shadow-none py-0 px-6 mb-6">
                                Life Style
                            </a>
                            <h2 class=" px-6 text-body-emphasis border-0 fw-500 mb-4 fs-3 ">
                                Are You Washing Your Face Properly?
                            </h2>
                            <ul
                                class="list-inline fs-15px fw-semibold letter-spacing-01 d-flex justify-content-center align-items-center">
                                <li><img data-src="/assets/images/blog/post-detail-header-img.png" alt="Grace"
                                         class="lazy-image img-fluid" src="#"></li>
                                <li class="border-end px-6 text-body-emphasis border-0 text-body">
                                    By
                                    <a href="#">Admin</a>
                                </li>
                                <li class="list-inline-item px-6">Jan 19, 2021</li>
                                <li class="ms-5 list-style-disc">134 views</li>
                            </ul>
                        </div>
                        <div class="post-content">
                            <img data-src="/assets/images/blog/post-style-4-img-1.jpg" width="770" height="470" alt=""
                                 class="lazy-image mb-12 img-fluid" src="#">
                            <p class=" mb-6">
                                Awkwardness gives me great comfort. I’ve never been cool, but I’ve felt cool. I’ve been
                                in the cool place, but I wasn’t really cool – I was trying to pass for hip or cool. It’s
                                the awkwardness that’s nice. We look our best in subdued colors, sophisticated cuts, and
                                a general air of sleek understatement. I like the body. I like to design everything to
                                do with the body.
                            </p>
                            <h4 class="text-center pb-11 ps-lg-10 pe-lg-13 px-0 pt-9">
                                "I try as much as possible to give you a great basic product and what comes out, I feel,
                                is really amazing."
                            </h4>
                            <p>If I fell in love with a woman for an artistic reason, or from the point of view of my
                                work, I think it would rob her of something. We live in an era of globalization and the
                                era of the woman. Never in the history of the world have women <span
                                    class="text-body-emphasis">been more in control of their destiny.</span></p>
                            <p class=" fs-18px text-body-emphasis mt-5 mb-4 fw-500">
                                Your imagination, our creation</p>
                            <p class="mb-12 mb-6">
                                Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                                vitamins, and other skin-nourishing nutrients. Creamy liquid formula sets with a
                                pristine matte finish for soft, velvety smooth skin. Made using clean, non-toxic
                                ingredients, our products are designed for everyone...
                            </p>
                            <div class="text-center">
                                <img class="img-fluid mx-auto lazy-image" src="#"
                                     data-src="/assets/images/blog/post-content-img-2.jpg" alt="" width="570"
                                     height="350">
                            </div>
                            <p class="fs-14px text-center mt-7">
                                Producing the highest quality products
                            </p>
                            <p class="mt-lg-12 mt-8">
                                Awkwardness gives me great comfort. I’ve never been cool, but I’ve felt cool. I’ve been
                                in the cool place, but I wasn’t really cool – I was trying to pass for hip or cool. It’s
                                the awkwardness that’s nice. We look our best in subdued colors, sophisticated cuts, and
                                a general air of sleek understatement. I like the body. I like to design everything to
                                do with the body.
                            </p>
                        </div>


                        <div class="row no-gutters pt-11 justify-content-sm-between">
                            <div class="col-sm-6 mb-4 mb-sm-0">
                                <ul class="list-inline fw-semibold">
                                    <li class="list-inline-item me-3">
                                        <a href=""
                                           class="text-body text-body-emphasis-hover text-decoration-none">#happy</a>
                                    </li>
                                    <li class="list-inline-item me-3">
                                        <a href=""
                                           class="text-body text-body-emphasis-hover text-decoration-none">#lifestyle</a>
                                    </li>
                                    <li class="list-inline-item me-3">
                                        <a href=""
                                           class="text-body text-body-emphasis-hover text-decoration-none">#gifts</a>
                                    </li>
                                    <li class="list-inline-item me-3">
                                        <a href=""
                                           class="text-body text-body-emphasis-hover text-decoration-none">#watercolor</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6 d-flex justify-content-sm-end">
                                <label class="text-secondary fw-semibold me-7 mb-0">Share:</label>
                                <ul class="list-inline mb-0 lh-1">
                                    <li class="list-inline-item me-7">
                                        <a href="" class="fs-18px lh-14 fw-normal">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item me-7">
                                        <a href="" class="fs-18px lh-14 fw-normal">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item me-7">
                                        <a href="" class="fs-18px lh-14 fw-normal">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item me-7">
                                        <a href="" class="fs-18px lh-14 fw-normal">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 mt-5 mb-7">
                                <div class="border-bottom"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="ml-8">
                                    <p class="fs-13px ls-1 text-uppercase mb-5 fw-semibold px-8">
                                        Videos
                                    </p>
                                    <a href="#" class="fs-15px fw-semibold position-relative px-8">
                                        <i class="far fa-chevron-left mt-2 position-absolute start-0 top-0"></i>How to
                                        Plop Hair for Bouncy, Beautiful Curls
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 d-flex justify-content-sm-end">
                                <div class="mr-8 text-right">
                                    <p class="fs-13px text-start text-sm-end ls-1 text-uppercase mb-5 fw-semibold px-8">
                                        Life style
                                    </p>
                                    <a href="#"
                                       class="fs-15px text-start text-sm-end fw-semibold position-relative px-8">
                                        <i class="far fa-chevron-right mt-2 position-absolute end-0 top-0"></i>Our
                                        Favorite Multitasking Products
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="pt-14 pb-13 pb-lg-15 pt-lg-18 mx-n5" id="post_related">
                            <div class="container">
                                <div class="text-center">
                                    <h2 class="mb-6 fs-3">Related Posts</h2>
                                </div>

                            </div>
                            <div class="container container-xxl mt-10 pt-3">
                                <div class="slick-slider"
                                     data-slick-options='{&#34;arrows&#34;:false,&#34;dots&#34;:false,&#34;responsive&#34;:[{&#34;breakpoint&#34;:1200,&#34;settings&#34;:{&#34;slidesToShow&#34;:3}},{&#34;breakpoint&#34;:992,&#34;settings&#34;:{&#34;dots&#34;:true,&#34;slidesToShow&#34;:2}},{&#34;breakpoint&#34;:768,&#34;settings&#34;:{&#34;dots&#34;:true,&#34;slidesToShow&#34;:1}}],&#34;slidesToShow&#34;:3}'>
                                    <div>
                                        <article class="card card-post-grid-3 bg-transparent border-0"
                                                 data-animate="fadeInUp">
                                            <figure class="card-img-top mb-8 position-relative"><a href="#"
                                                                                                   class="hover-shine hover-zoom-in d-block"
                                                                                                   title="Our Favorite Multitasking Products">
                                                    <img data-src="/assets/images/blog/post-12-237x288.jpg"
                                                         class="img-fluid lazy-image w-100"
                                                         alt="Our Favorite Multitasking Products" width="237"
                                                         height="288" src="#">
                                                </a></figure>
                                            <div class="card-body p-0">
                                                <ul
                                                    class="post-meta list-inline lh-1 d-flex flex-wrap fs-13px text-uppercase ls-1 fw-semibold m-0">
                                                    <li class="list-inline-item"><a
                                                            class="text-reset text-decoration-none text-primary-hover"
                                                            href="#" title="Videos">Videos</a></li>
                                                </ul>
                                                <h4 class="card-title fs-6 lh-base mt-5 pt-2 mb-0">
                                                    <a class="text-decoration-none" href="details-01.html"
                                                       title="Our Favorite Multitasking Products">Our Favorite
                                                        Multitasking Products</a>
                                                </h4>
                                            </div>
                                        </article>
                                    </div>
                                    <div>
                                        <article class="card card-post-grid-3 bg-transparent border-0"
                                                 data-animate="fadeInUp">
                                            <figure class="card-img-top mb-8 position-relative"><a href="#"
                                                                                                   class="hover-shine hover-zoom-in d-block"
                                                                                                   title="How to Plop Hair for Bouncy, Beautiful Curls">
                                                    <img data-src="/assets/images/blog/post-05-237x288.jpg"
                                                         class="img-fluid lazy-image w-100"
                                                         alt="How to Plop Hair for Bouncy, Beautiful Curls" width="237"
                                                         height="288" src="#">
                                                </a></figure>
                                            <div class="card-body p-0">
                                                <ul
                                                    class="post-meta list-inline lh-1 d-flex flex-wrap fs-13px text-uppercase ls-1 fw-semibold m-0">
                                                    <li class="list-inline-item"><a
                                                            class="text-reset text-decoration-none text-primary-hover"
                                                            href="#" title="Videos">Videos</a></li>
                                                </ul>
                                                <h4 class="card-title fs-6 lh-base mt-5 pt-2 mb-0">
                                                    <a class="text-decoration-none" href="details-01.html"
                                                       title="How to Plop Hair for Bouncy, Beautiful Curls">How to Plop
                                                        Hair for Bouncy, Beautiful Curls</a>
                                                </h4>
                                            </div>
                                        </article>
                                    </div>
                                    <div>
                                        <article class="card card-post-grid-3 bg-transparent border-0"
                                                 data-animate="fadeInUp">
                                            <figure class="card-img-top mb-8 position-relative"><a href="#"
                                                                                                   class="hover-shine hover-zoom-in d-block"
                                                                                                   title="Are You Washing Your Face Properly?">
                                                    <img data-src="/assets/images/blog/post-03-237x288.jpg"
                                                         class="img-fluid lazy-image w-100"
                                                         alt="Are You Washing Your Face Properly?" width="237"
                                                         height="288" src="#">
                                                </a></figure>
                                            <div class="card-body p-0">
                                                <ul
                                                    class="post-meta list-inline lh-1 d-flex flex-wrap fs-13px text-uppercase ls-1 fw-semibold m-0">
                                                    <li class="list-inline-item"><a
                                                            class="text-reset text-decoration-none text-primary-hover"
                                                            href="#" title="Videos">Videos</a></li>
                                                </ul>
                                                <h4 class="card-title fs-6 lh-base mt-5 pt-2 mb-0">
                                                    <a class="text-decoration-none" href="details-01.html"
                                                       title="Are You Washing Your Face Properly?">Are You Washing Your
                                                        Face Properly?</a>
                                                </h4>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-5 mb-7">
                            <div class="border-bottom"></div>
                        </div>

                        <div class="pt-lg-12 pt-10">
                            <h2 class=" fw-semibold fs-3 text-center mb-10">5 Comments</h2>
                            <div class="pb-9 mb-9 border-bottom">
                                <div class="d-flex">
                                    <div class="avatar-cmt me-9 bg-image"
                                         data-bg-src="/assets/images/blog/post-comment-list-avatar.png">
                                    </div>
                                    <div class="Cmt-content">
                                        <h2 class=" fw-semibold text-uppercase fs-14px mb-3">elizabeth</h2>
                                        <p class=" body-color fs-15px mb-6">This skin care gift set is made with potent
                                            vitamins, stimulating caffeine, and natural acids. It’s designed to
                                            rejuvenate your complexion without the use of harsh chemicals or bleaching
                                            agents.</p>
                                        <div class="d-flex">
                                            <p class="mb-0 text-muted fs-15px pe-4 border-end">02 Dec, 2020 at 2:29 PM
                                            </p>
                                            <a href="#" title="reply"
                                               class="ps-4 fw-semibold text-body-emphasis">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mt-10 ms-17 ps-7 border-start reply-comment">
                                    <div class="avatar-cmt me-9 bg-image"
                                         data-bg-src="/assets/images/blog/post-comment-avatar-02.png">
                                    </div>
                                    <div class="cmt-content">
                                        <h2 class=" fw-semibold text-uppercase fs-14px mb-3">admin</h2>
                                        <p class=" body-color fs-15px mb-6">Vitamin C promotes healthy collagen levels,
                                            while 3 types of caffeine awaken and rejuvenate the skin and eyes.</p>
                                        <div class="d-flex">
                                            <p class="mb-0 text-muted fs-15px pe-4 border-end">02 Dec, 2020 at 2:29 PM
                                            </p>
                                            <a href="#" title="reply"
                                               class="ps-4 fw-semibold text-body-emphasis">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mt-10 ms-17 ps-7 border-start reply-comment">
                                    <div class="avatar-cmt me-9 bg-image"
                                         data-bg-src="/assets/images/blog/post-comment-avatar-03.png">
                                    </div>
                                    <div class="cmt-content">
                                        <h2 class=" fw-semibold text-uppercase fs-14px mb-3">Jennifer. c</h2>
                                        <p class=" body-color fs-15px mb-6">Vitamin C promotes healthy collagen levels,
                                            while 3 types of caffeine awaken and rejuvenate the skin and eyes.</p>
                                        <div class="d-flex">
                                            <p class="mb-0 text-muted fs-15px pe-4 border-end">02 Dec, 2020 at 2:29 PM
                                            </p>
                                            <a href="#" title="reply"
                                               class="ps-4 fw-semibold text-body-emphasis">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-9 mb-9 border-bottom">
                                <div class="d-flex">
                                    <div class="avatar-cmt me-9 bg-image"
                                         data-bg-src="/assets/images/blog/post-comment-avatar-04.png">
                                    </div>
                                    <div class="Cmt-content">
                                        <h2 class=" fw-semibold text-uppercase fs-14px mb-3">Lucille D</h2>
                                        <p class=" body-color fs-15px mb-6">We may not be doing the whole ‘get up and
                                            go’ thing like we used to, especially if the only place we’re going is our
                                            couch. But to get up and glow? </p>
                                        <div class="d-flex">
                                            <p class="mb-0 text-muted fs-15px pe-4 border-end">02 Dec, 2020 at 2:29 PM
                                            </p>
                                            <a href="#" title="reply"
                                               class="ps-4 fw-semibold text-body-emphasis">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-9 mb-9 border-bottom">
                                <div class="d-flex">
                                    <div class="avatar-cmt me-9 bg-image"
                                         data-bg-src="/assets/images/blog/post-comment-avatar-05.png">
                                    </div>
                                    <div class="Cmt-content">
                                        <h2 class=" fw-semibold text-uppercase fs-14px mb-3">Jennifer. c</h2>
                                        <p class=" body-color fs-15px mb-6">This skin care gift set is made with potent
                                            vitamins, stimulating caffeine, and natural acids. It’s designed to
                                            rejuvenate your complexion without the use of harsh chemicals or bleaching
                                            agents. </p>
                                        <div class="d-flex">
                                            <p class="mb-0 text-muted fs-15px pe-4 border-end">02 Dec, 2020 at 2:29 PM
                                            </p>
                                            <a href="#" title="reply"
                                               class="ps-4 fw-semibold text-body-emphasis">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-lg-12 pt-10">
                            <h3 class="text-center mb-11">Leave a Comment</h3>
                            <form class="row gy-30px">
                                <div class="col-sm-6">
                                    <label for="input_comment_name" class="visually-hidden">Name</label>
                                    <input type="text" class="form-control" id="input_comment_name"
                                           name="input_comment_name" placeholder="Name">
                                </div>
                                <div class="col-sm-6">
                                    <label for="input_comment_email" class="visually-hidden">Email</label>
                                    <input type="email" class="form-control" id="input_comment_email"
                                           name="input_comment_email" placeholder="Email">
                                </div>
                                <div class="col-12">
                                    <label for="input_comment_message" class="visually-hidden">Email</label>
                                    <textarea class="form-control" name="input_comment_message"
                                              id="input_comment_message" placeholder="Message" rows="6"></textarea>
                                </div>
                                <div class="col-12 mt-8">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="input_comment_remember">
                                        <label class="form-check-label" for="input_comment_remember">Save my name, email
                                            in this browse for the next time I comment</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit"
                                            class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
