<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/site/small-logo.png') }}" sizes="32x32" />
    <title>@yield('title', 'My Website')</title>
    {{-- CSS Files --}}
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/site/normalize.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/site/all.min.css') }}">

    <!-- Splide.js -->
    <link rel="stylesheet" href="{{ asset('assets/css/site/splide.min.css') }}">

    <!-- Bootstrap (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Swiper CSS (CDN) -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Swiper JS (CDN) -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- GLightbox CSS (CDN) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/site/master.css') }}">

    <!-- AOS Animation (CDN) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- ملف CSS الإضافي للغات LTR -->
    @if(app()->getLocale() === 'en' || app()->getLocale() === 'fr')
        <link rel="stylesheet" href="{{ asset('assets/css/site/style-ltr.css') }}">
    @endif
</head>
<body>
    @include('partials.site.header')
    <main>
        @yield('content')
    </main>

    <button id="scrollToTop" class="scroll-to-top">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    @include('partials.site.footer')
    {{-- JS Files --}}
    <!-- jQuery -->
    <script src="{{ asset('assets/js/site/jquery.js') }}"></script>

    <!-- Plugins for Project -->
    <script src="{{ asset('assets/js/site/plugins.js') }}"></script>

    <!-- Bootstrap JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Swiper -->
    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';
    </script>

    <!-- GLightbox -->
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
    // {{-- Button: Up to top --}}
    document.addEventListener("DOMContentLoaded", function () {
        const scrollToTopBtn = document.getElementById('scrollToTop');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 200) {
                scrollToTopBtn.classList.add('show');
            } else {
                scrollToTopBtn.classList.remove('show');
            }
        });

        // انقر للانتقال إلى الأعلى
        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });
    </script>

    @stack('scripts')
</body>
</html>
