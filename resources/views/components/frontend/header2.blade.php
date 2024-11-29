<header id="header" class="header header-sticky header-sticky-smart disable-transition-all z-index-5">
    <div class="topbar bg-primary">
        <div class="container-wide container">
            <p class="mb-0 text-white text-center p-4 fs-6 fw-semibold">Free shipping on all U.S. orders $50+</p>
        </div>
    </div>
    <div class="sticky-area">
        <div class="main-header nav navbar bg-body navbar-light navbar-expand-xl py-6 py-xl-0">
            <div class="container-wide container flex-nowrap">

                <div class="w-72px d-flex d-xl-none">
                    <button class="navbar-toggler align-self-center  border-0 shadow-none px-0 canvas-toggle p-4"
                            type="button" data-bs-toggle="offcanvas" data-bs-target="#offCanvasNavBar"
                            aria-controls="offCanvasNavBar" aria-expanded="false" aria-label="Toggle Navigation">
                        <span class="fs-24 toggle-icon"></span>
                    </button>
                </div>

                <div class="d-none d-xl-flex w-xl-50">
                    <ul class="navbar-nav">
                        <li
                            class="nav-item transition-all-xl-1 py-11 me-xxl-12 me-xl-10">
                            <a class="nav-link d-flex justify-content-between position-relative py-0 px-0 text-uppercase fw-semibold ls-1 fs-14px"
                               href="/">Home</a>
                        </li>
                        <li
                            class="nav-item transition-all-xl-1 py-11 me-xxl-12 me-xl-10">
                            <a class="nav-link d-flex justify-content-between position-relative py-0 px-0 text-uppercase fw-semibold ls-1 fs-14px"
                               href="{{route('product')}}">Shop</a>
                        </li>
                        <li class="nav-item transition-all-xl-1 py-11 me-xxl-12 me-xl-10">
                            <a class="nav-link d-flex justify-content-between position-relative py-0 px-0 text-uppercase fw-semibold ls-1 fs-14px"
                               href="{{route('blog')}}">Blog</a>
                        </li>
                        <li
                            class="nav-item transition-all-xl-1 py-11 me-xxl-12 me-xl-10">
                            <a class="nav-link d-flex justify-content-between position-relative py-0 px-0 text-uppercase fw-semibold ls-1 fs-14px"
                               href="{{route('about')}}">About</a>
                        </li>
                        <li
                            class="nav-item transition-all-xl-1 py-11 me-xxl-12 me-xl-10">
                            <a class="nav-link d-flex justify-content-between position-relative py-0 px-0 text-uppercase fw-semibold ls-1 fs-14px"
                               href="{{route('contact')}}">Contact</a>
                        </li>
                    </ul>
                </div>

                <a href="/" class="navbar-brand px-8 py-4 mx-auto">
                    <img class="light-mode-img" src="assets/images/new/logo.svg" width="179" height="26"
                         alt="DORA® - Bootstrap 5 HTML Templates">
                    <img class="dark-mode-img" src="assets/images/new/logo-white.svg" width="179" height="26"
                         alt="DORA® - Bootstrap 5 HTML Templates"></a>

                <div class="icons-actions d-flex justify-content-end w-xl-50 fs-28px text-body-emphasis">
                    <div class="px-xl-5 d-inline-block">
                        <a class="lh-1 color-inherit text-decoration-none" href="#" data-bs-toggle="offcanvas"
                           data-bs-target="#searchModal" aria-controls="searchModal" aria-expanded="false">
                            <svg class="icon icon-magnifying-glass-light">
                                <use xlink:href="#icon-magnifying-glass-light"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="px-5 d-none d-xl-inline-block">
                        <a class="position-relative lh-1 color-inherit text-decoration-none"
                           href="shop/wishlist.html">
                            <svg class="icon icon-star-light">
                                <use xlink:href="#icon-star-light"></use>
                            </svg>
                            <span
                                class="badge bg-dark text-white position-absolute top-0 start-100 translate-middle mt-4 rounded-circle fs-13px p-0 square"
                                style="--square-size: 18px">3</span>
                        </a>
                    </div>
                    <div class="px-5 d-none d-xl-inline-block">
                        <a class="position-relative lh-1 color-inherit text-decoration-none" href="#"
                           data-bs-toggle="offcanvas" data-bs-target="#shoppingCart" aria-controls="shoppingCart"
                           aria-expanded="false">
                            <svg class="icon icon-star-light">
                                <use xlink:href="#icon-shopping-bag-open-light"></use>
                            </svg>
                            <span
                                class="badge bg-dark text-white position-absolute top-0 start-100 translate-middle mt-4 rounded-circle fs-13px p-0 square"
                                style="--square-size: 18px">3</span>
                        </a>
                    </div>

                    <div class="color-modes position-relative ps-5">
                        <a class="bd-theme btn btn-link nav-link dropdown-toggle d-inline-flex align-items-center justify-content-center text-primary p-0 position-relative rounded-circle"
                           href="#" aria-expanded="true" data-bs-toggle="dropdown" data-bs-display="static"
                           aria-label="Toggle theme (light)">
                            <svg class="bi my-1 theme-icon-active">
                                <use href="#sun-fill"></use>
                            </svg>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end fs-14px" data-bs-popper="static">
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center active"
                                        data-bs-theme-value="light" aria-pressed="true">
                                    <svg class="bi me-4 opacity-50 theme-icon">
                                        <use href="#sun-fill"></use>
                                    </svg>
                                    Light
                                    <svg class="bi ms-auto d-none">
                                        <use href="#check2"></use>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="dark" aria-pressed="false">
                                    <svg class="bi me-4 opacity-50 theme-icon">
                                        <use href="#moon-stars-fill"></use>
                                    </svg>
                                    Dark
                                    <svg class="bi ms-auto d-none">
                                        <use href="#check2"></use>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="auto" aria-pressed="false">
                                    <svg class="bi me-4 opacity-50 theme-icon">
                                        <use href="#circle-half"></use>
                                    </svg>
                                    Auto
                                    <svg class="bi ms-auto d-none">
                                        <use href="#check2"></use>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
