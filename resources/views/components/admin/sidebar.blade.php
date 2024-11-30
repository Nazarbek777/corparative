<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="/dashboard" class="b-brand">
                <h3 class="logo logo-lg">Robes</h3>
                <h6 class="logo logo-sm"> </h6>
            </a>
        </div>
        <div class="navbar-content ps">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Навигация</label>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a @if(auth()->user()->role == '2')
                           href="{{ route('superAdmin.dashboard') }}"
                       @elseif(auth()->user()->role == '1')
                           href="{{ route('admins.dashboard') }}"
                       @endif class="nxl-link">
                        <span class="nxl-micon"><i class="feather-home"></i></span> <!-- Dashboard icon -->
                        <span class="nxl-mtext">Панель управления</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('abouts.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-info"></i></span> <!-- About icon -->
                        <span class="nxl-mtext">О нас</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('news.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-globe"></i></span> <!-- News icon -->
                        <span class="nxl-mtext">Новости</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('categories.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-box"></i></span>
                        <span class="nxl-mtext">Category</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('products.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-box"></i></span> <!-- Products icon -->
                        <span class="nxl-mtext">Продукты</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('faqs.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-help-circle"></i></span> <!-- FAQ icon -->
                        <span class="nxl-mtext">FAQ</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('teams.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-users"></i></span> <!-- Team icon -->
                        <span class="nxl-mtext">Команда</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('partners.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-users"></i></span> <!-- Partners icon -->
                        <span class="nxl-mtext">Партнеры</span>
                    </a>
                </li>
{{--                <li class="nxl-item nxl-hasmenu">--}}
{{--                    <a href="{{ route('settings.index') }}" class="nxl-link">--}}
{{--                        <span class="nxl-micon"><i class="feather-settings"></i></span> <!-- Settings icon -->--}}
{{--                        <span class="nxl-mtext">Настройки</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('testimonials.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-message-circle"></i></span> <!-- Testimonials icon -->
                        <span class="nxl-mtext">Отзывы</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('contacts.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-phone"></i></span> <!-- Contacts icon -->
                        <span class="nxl-mtext">Контакты</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('vacancies.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-briefcase"></i></span> <!-- Vacancies icon -->
                        <span class="nxl-mtext">Вакансии</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('candidants.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-user-check"></i></span> <!-- Candidants icon -->
                        <span class="nxl-mtext">Кандидаты</span>
                    </a>
                </li>
            </ul>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 598px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
        </div>
    </div>
</nav>
