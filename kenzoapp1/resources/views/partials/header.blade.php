<style>

</style>
<header id="header" class="header d-flex align-items-center fixed-top">
    <div
        class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename"><img src="assets/img/logo.png" alt="Hero Image" style="font"></h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#" data-url="{{ route('dashboard') }}" class="nav-link" data-menu="home">{{ __('general.home') }}</a></li>
                <li><a href="#" data-url="{{ route('about') }}" class="nav-link" data-menu="about">{{ __('general.about') }}</a></li>
                <li><a href="#" data-url="{{ route('product') }}" class="nav-link" data-menu="product">{{ __('general.product') }}</a></li>
                <li><a href="#" data-url="{{ route('pricing') }}" class="nav-link" data-menu="pricing">{{ __('general.pricing') }}</a></li>
                <li><a href="#" data-url="{{ route('contact') }}" class="nav-link" data-menu="contact">{{ __('general.contact') }}</a></li>
                {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Dropdown 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li> --}}
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="index.html#about">Get Started</a>

    </div>

</header>
