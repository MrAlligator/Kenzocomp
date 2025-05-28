<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Dashboard - KenzoComp</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icon-css/css/flag-icon.min.css">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <style>
        body.dark-theme {
            background-color: #121212;
            color: #ffffff;
        }

        body.dark-theme a {
            color: #90caf9;
        }

        body.dark-theme .card,
        body.dark-theme .dropdown-menu {
            background-color: #1e1e1e;
            color: #ffffff;
        }

        .theme-settings .btn.theme-btn {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .theme-settings .dropdown-menu {
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .theme-option.active {
            border-bottom: 2px solid #0d6efd;
            font-weight: bold;
        }

        .lang-option.active {
            border-bottom: 2px solid #0d6efd;
            font-weight: bold;
        }
    </style>
</head>

<body class="index-page">

    @include('partials.header')

    <main id="main" class="main">
        @yield('content')
    </main>

    @include('partials.footer')

    <div class="dropdown theme-settings position-fixed end-0 m-3" style="z-index: 9999; bottom: 50px;">
        <button class="btn btn-light border-0 bg-transparent p-2 theme-btn" type="button" data-bs-toggle="dropdown"
            aria-expanded="false" title="Pengaturan">
            <i class="bi bi-gear-fill fs-4"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end p-3" style="min-width: 200px;">
            <li>
                <h6 class="dropdown-header">{{ __('general.themes') }}</h6>
                <div class="d-flex gap-3 px-2" style="align-content: center">
                    <a class="theme-option text-dark fs-4" data-theme="light" href="#" title="Tema Terang">
                        <i class="bi bi-brightness-high"></i>
                    </a>
                    <a class="theme-option text-dark fs-4" data-theme="dark" href="#" title="Tema Gelap">
                        <i class="bi bi-moon"></i>
                    </a>
                </div>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <h6 class="dropdown-header">{{ __('general.language') }}</h6>
                <div class="d-flex px-3">
                    <a class="lang-option {{ session('lang') == 'id' ? 'active' : '' }} p-2" data-lang="id"
                        href="#" title="Bahasa Indonesia">
                        <i class="flag-icon flag-icon-id"></i>
                    </a>
                    <a class="lang-option {{ session('lang') == 'en' ? 'active' : '' }} p-2 ms-2" data-lang="en"
                        href="#" title="English">
                        <i class="flag-icon flag-icon-gb"></i>
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    {{-- Additional JS --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            const savedTheme = localStorage.getItem('theme');

            if (savedTheme) {
                $('body').addClass(savedTheme + '-background');

                // Tandai tombol tema aktif
                $('.theme-option').removeClass('active');
                $(`.theme-option[data-theme="${savedTheme}"]`).addClass('active');
            } else {
                localStorage.setItem('theme', 'light');
                const defaultTheme = 'light';
                $('body').addClass(defaultTheme + '-background');

                // Tandai tombol tema default
                $('.theme-option').removeClass('active');
                $(`.theme-option[data-theme="${defaultTheme}"]`).addClass('active');
            }

            $('.nav-link').on('click', function(e) {
                e.preventDefault();
                let url = $(this).data('url');

                $('.nav-link').removeClass('active');
                $(this).addClass('active');

                $('#main').html(`
                    <section id="loading" class="loading section text-center py-5" style="margin-top: 10%">
                        <div class="container" data-aos="fade-up" data-aos-delay="100">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-auto">
                                    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <p class="mt-3">Loading, please wait...</p>
                                </div>
                            </div>
                        </div>
                    </section>
                `);

                $.get(url, function(data) {
                    let sectionOnly = $('<div>').html(data).find('section').prop('outerHTML');
                    $('#main').html(sectionOnly);
                });
            });

            // Change theme on click
            $('.theme-option').on('click', function(e) {
                e.preventDefault();
                const selectedTheme = $(this).data('theme');
                $('body').removeClass('light-background dark-background');
                $('body').addClass(selectedTheme + '-background');
                localStorage.setItem('theme', selectedTheme);

                $('.theme-option').removeClass('active');
                $(this).addClass('active');
            });

            document.querySelectorAll('.lang-option').forEach(option => {
                option.addEventListener('click', function(e) {
                    e.preventDefault();
                    const lang = this.dataset.lang;
                    fetch("{{ route('set.language') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        },
                        body: JSON.stringify({
                            lang
                        })
                    }).then(() => location.reload());
                });
            });
        });
    </script>

</body>

</html>
