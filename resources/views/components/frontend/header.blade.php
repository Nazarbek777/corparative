<header id="header"
        class="header header-sticky header-transparent header-sticky-smart disable-transition-all position-absolute start-0 end-0 z-index-5">
    <div class="sticky-area">
        <div class="main-header nav navbar navbar-dark navbar-expand-xl transition-all-1 py-6 py-xl-0">
            <div class="container-wide container">
                <div class="d-flex d-xl-none w-100">

                    <div class="w-72px d-flex d-xl-none">
                        <button
                            class="navbar-toggler align-self-center  border-0 shadow-none px-0 canvas-toggle p-4"
                            type="button" data-bs-toggle="offcanvas" data-bs-target="#offCanvasNavBar"
                            aria-controls="offCanvasNavBar" aria-expanded="false" aria-label="Toggle Navigation">
                            <span class="fs-24 toggle-icon"></span>
                        </button>
                    </div>

                    <div class="d-flex mx-auto">



                        <a href="index.html" class="navbar-brand has-sticky-logo px-8 py-4 mx-auto">
                            <img class="light-mode-img" src="assets/images/new/logo-white.svg" width="179"
                                 height="26" alt="DORA® - Bootstrap 5 HTML Templates">
                            <img class="dark-mode-img" src="assets/images/new/logo-white.svg" width="179"
                                 height="26" alt="DORA® - Bootstrap 5 HTML Templates">
                            <img class="sticky-logo sticky-logo-light" src="assets/images/new/logo.svg"
                                 width="179" height="26" alt="DORA® - Bootstrap 5 HTML Templates">
                            <img class="sticky-logo sticky-logo-dark" src="assets/images/new/logo-white.svg"
                                 width="179" height="26" alt="DORA® - Bootstrap 5 HTML Templates"></a>

                    </div>
                    <div class="icons-actions d-flex d-xl-none justify-content-start fs-28px text-white">
                        <div class="px-xl-5 d-inline-block">
                            <a class="lh-1 color-inherit text-decoration-none" href="#" data-bs-toggle="offcanvas"
                               data-bs-target="#searchModal" aria-controls="searchModal" aria-expanded="false">
                                <svg class="icon icon-magnifying-glass-light">
                                    <use xlink:href="#icon-magnifying-glass-light"></use>
                                </svg>
                            </a>
                        </div>

                        <div class="color-modes position-relative ps-5">
                            <a class="bd-theme btn btn-link nav-link dropdown-toggle d-inline-flex align-items-center justify-content-center color-inherit p-0 position-relative rounded-circle"
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
                <div class="d-none d-xl-flex flex-column flex-xl-row w-100">
                    <div class="w-auto w-xl-50 d-flex align-items-center">
                        <div class="icons-actions d-flex justify-content-start me-auto fs-28px text-white">
                            <div class="pe-10">
                                <a class="lh-1 color-inherit text-decoration-none" href="#"
                                   data-bs-toggle="offcanvas" data-bs-target="#searchModal"
                                   aria-controls="searchModal" aria-expanded="false">
                                    <svg class="icon icon-magnifying-glass-light fs-5">
                                        <use xlink:href="#icon-magnifying-glass-light"></use>
                                    </svg>
                                    <span class="fs-15px">Search</span>
                                </a>
                            </div>
                        </div>

                        <ul class="navbar-nav w-100 w-xl-auto">

                            <li
                                class="nav-item transition-all-xl-1 py-xl-11 py-0 px-xxl-8 px-xl-6">
                                <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px"
                                   href="/">Home</a>
                            </li>
                            <li
                                class="nav-item transition-all-xl-1 py-xl-11 py-0 px-xxl-8 px-xl-6 position-static">
                                <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px"
                                   href="{{route('product')}}">Shop</a>
                            </li>
                            <li
                                class="nav-item transition-all-xl-1 py-xl-11 py-0 px-xxl-8 px-xl-6">
                                <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px"
                                   href="{{route('blog')}}">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div class="px-10 d-flex align-items-center ">
                        <a href="/" class="navbar-brand has-sticky-logo px-8 py-4 mx-auto">
                            <img class="light-mode-img" src="assets/images/new/logo-white.svg" width="179"
                                 height="26" alt="DORA® - Bootstrap 5 HTML Templates">
                            <img class="dark-mode-img" src="assets/images/new/logo-white.svg" width="179"
                                 height="26" alt="DORA® - Bootstrap 5 HTML Templates">
                            <img class="sticky-logo sticky-logo-light" src="assets/images/new/logo.svg"
                                 width="179" height="26" alt="DORA® - Bootstrap 5 HTML Templates">
                            <img class="sticky-logo sticky-logo-dark" src="assets/images/new/logo-white.svg"
                                 width="179" height="26" alt="DORA® - Bootstrap 5 HTML Templates"></a>

                    </div>
                    <div class="w-auto w-xl-50 d-flex align-items-center">
                        <ul class="navbar-nav w-100 w-xl-auto">
                            <li
                                class="nav-item transition-all-xl-1 py-xl-11 py-0 px-xxl-8 px-xl-6">
                                <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px"
                                   href="{{route('about')}}">About</a>
                            </li>
                            <li
                                class="nav-item transition-all-xl-1 py-xl-11 py-0 px-xxl-8 px-xl-6">
                                <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px"
                                   href="{{route('contact')}}">Contact</a>
                            </li>
                            <li class="nav-item transition-all-xl-1 py-xl-11 py-0 px-xxl-8 px-xl-6">
                                <select class="form-select form-select-sm text-uppercase fw-semibold" onchange="changeLanguage(this.value)" style="max-width: 100px !important;">
                                    <option value="uz" {{ app()->getLocale() == 'uz' ? 'selected' : '' }}>Uz</option>
                                    <option value="ru" {{ app()->getLocale() == 'ru' ? 'selected' : '' }}>Ru</option>
                                    <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>En</option>
                                </select>
                            </li>


                        </ul>
                        <div class="icons-actions d-flex justify-content-end ms-auto fs-28px text-white">
                            <div class="px-5 d-none d-xl-inline-block">
                                <a class="position-relative lh-1 color-inherit text-decoration-none"
                                   href="shop/wishlist.html">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                    <span
                                        class="badge bg-white text-dark position-absolute top-0 start-100 translate-middle mt-4 rounded-circle fs-13px p-0 square"
                                        style="--square-size: 18px">3</span>
                                </a>
                            </div>
                            <div class="px-5 d-none d-xl-inline-block">
                                <a class="position-relative lh-1 color-inherit text-decoration-none" href="#"
                                   data-bs-toggle="offcanvas" data-bs-target="#shoppingCart"
                                   aria-controls="shoppingCart" aria-expanded="false">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-shopping-bag-open-light"></use>
                                    </svg>
                                    <span
                                        class="badge bg-white text-dark position-absolute top-0 start-100 translate-middle mt-4 rounded-circle fs-13px p-0 square"
                                        style="--square-size: 18px">3</span>
                                </a>
                            </div>

                            <div class="color-modes position-relative ps-5">
                                <a class="bd-theme btn btn-link nav-link dropdown-toggle d-inline-flex align-items-center justify-content-center color-inherit p-0 position-relative rounded-circle"
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
        </div>
    </div>
</header>
<script>
    function changeLanguage(locale) {
        window.location.href = `/locale/${locale}`;
    }

</script>

<style>
    .custom-select-container {
        position: relative;
        display: inline-block;
        max-width: 150px;
        width: 100%;
    }

    .custom-select {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 0.5rem 1rem;
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        width: 100%;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .custom-select:hover {
        border-color: #007bff;
        background-color: #f8f9fa;
    }

    .custom-select:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .custom-select-container::after {
        content: '▼';
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        pointer-events: none;
        font-size: 12px;
        color: #888;
    }

    .custom-select:hover + .custom-select-container::after {
        color: #007bff;
    }
    .form-select-sm {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
        padding-left: 0.5rem !important;
        font-size: 0.775rem;
        border-radius: .1875rem;
    }


</style>
