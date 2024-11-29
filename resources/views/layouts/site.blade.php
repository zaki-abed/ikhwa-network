<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="google" content="notranslate">
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="keywords" content="{{ $metaKeywords }}">
    <meta name="author" content="{{ $author }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/site/small-logo.png') }}" sizes="32x32" />
    <title>{{ $pageTitle }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/site/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/site/all.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/site/master.css') }}">
    @if(app()->getLocale() === 'en' || app()->getLocale() === 'fr')
        <link rel="stylesheet" href="{{ asset('assets/css/site/style-ltr.css') }}">
    @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">

</head>
<body>
    <div id="loading">
        <div class="spinner"></div>
    </div>
    <div class="page" style="display: none">
        @include('partials.site.header')

        <main>
            @yield('content')
        </main>

        <button id="scrollToTop" class="scroll-to-top">
            <i class="fa-solid fa-arrow-up"></i>
        </button>

        @include('partials.site.footer')
    </div>
    <script src="{{ asset('assets/js/site/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/site/plugins.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';
    </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>


    <script>
$(document).ready(function () {
    $(window).on("load", function () {
        $("#loading").fadeOut(500, function () {
            $(".page").fadeIn(500);

            var section = window.location.hash;
            if (section) {
                $('html, body').animate({
                    scrollTop: $(section).offset().top
                }, 500);
            }
        });
    });
});





    // Button up-to-top
    document.addEventListener("DOMContentLoaded", function () {
        const scrollToTopBtn = document.getElementById('scrollToTop');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 200) {
                scrollToTopBtn.classList.add('show');
            } else {
                scrollToTopBtn.classList.remove('show');
            }
        });

        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });

    document.addEventListener('click', function (event) {
    const langMenu = document.querySelector('.lang-menu');
    const dropdownContent = document.querySelector('.dropdown-content');

    if (!langMenu.contains(event.target)) {
        dropdownContent.style.display = 'none';
    }
});

document.querySelector('.lang-menu p').addEventListener('click', function (event) {
    event.stopPropagation();
    const dropdownContent = document.querySelector('.dropdown-content');
    dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
});

document.addEventListener('DOMContentLoaded', function () {
    const hideNav = document.querySelector('.hide-nav');
    const navToggle = document.querySelector('.btn-show-nav');

function handleNavVisibility() {
        if (window.innerWidth <= 991) {
            hideNav.style.display = 'none';
        } else {
            hideNav.style.display = 'flex';
        }
    }

    navToggle.addEventListener('click', function (event) {
        event.stopPropagation();
        if (hideNav.style.display === 'none') {
            hideNav.style.display = 'none';
        } else {
            hideNav.style.display = 'flex';
        }
    });

    document.addEventListener('click', function (event) {
        if (window.innerWidth <= 991 && !hideNav.contains(event.target) && !navToggle.contains(event.target)) {
            hideNav.style.display = 'none';
        }
    });

    window.addEventListener('resize', handleNavVisibility);

    handleNavVisibility();
});

// $(document).ready(function () {
//     // تحقق إذا كان الـ URL يحتوي على #services
//     if (window.location.hash === "#services") {
//         // التمرير إلى العنصر #services بشكل تلقائي
//         $('html, body').animate({
//             scrollTop: $('#services').offset().top
//         }, 1000); // التمرير بسلاسة
//     }
// });

    </script>

    @stack('scripts')
</body>
</html>
