    // Slider Landing
    const landingSwiper = new Swiper('.landingSwiper', {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    // Slider Services
    document.addEventListener("DOMContentLoaded", function () {
        const swiper = new Swiper('.mySwiper', {
        on: {
            slideChange: function () {
                if (window.innerWidth <= 768) {
                    const activeIndex = this.realIndex + 1;
                    const serviceIcons = document.querySelector('.services .swiper .service-icons');

                    if ([2, 3, 4].includes(activeIndex)) {
                        serviceIcons.style.position = 'absolute';
                        serviceIcons.style.bottom = '-70px';
                    } else {
                        serviceIcons.style.position = '';
                        serviceIcons.style.bottom = '';
                    }
                } else {
                    const serviceIcons = document.querySelector('.services .swiper .service-icons');
                    serviceIcons.style.position = '';
                }
            },
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    const iconBoxes = document.querySelectorAll('.icon-box');

    function handleSlideEvent(index) {
        iconBoxes.forEach((box, i) => {
            const iconWrapper = box.querySelector('.icon-wrapper');

            if (iconWrapper) iconWrapper.classList.remove('active');
        });

        const activeBox = iconBoxes[index];
        if (activeBox) {
            const activeWrapper = activeBox.querySelector('.icon-wrapper');

            if (activeWrapper) activeWrapper.classList.add('active');
        }
    }
    swiper.on('slideChange', function () {
        const activeIndex = swiper.realIndex;
        handleSlideEvent(activeIndex);
    });

    handleSlideEvent(swiper.realIndex);

    });

    // Change image according to screen size
    document.addEventListener("DOMContentLoaded", function () {
        const images = document.querySelectorAll('.partner .image img');
        const alternativeImages = [
            "/assets/images/site/partners/1s.png",
            "/assets/images/site/partners/2s.png",
            "/assets/images/site/partners/3s.png",
            "/assets/images/site/partners/4s.png",
            "/assets/images/site/partners/5s.png"
        ];

        const defaultImages = [
            "/assets/images/site/partners/1.png",
            "/assets/images/site/partners/2.png",
            "/assets/images/site/partners/3.png",
            "/assets/images/site/partners/4.png",
            "/assets/images/site/partners/5.png"
        ];


        function updateImages() {
            images.forEach((img, index) => {
                if (window.innerWidth <= 768) {
                    img.src = alternativeImages[index];
                } else {
                    img.src = defaultImages[index];
                }
            });
        }
        updateImages();
        window.addEventListener('resize', updateImages);
    });

    // Phone Numbers Library
    // const phoneInput = document.querySelector("#phone");
    //     const iti = window.intlTelInput(phoneInput, {
    //     initialCountry: "ma",
    //     preferredCountries: ["ma"],
    //     utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
    // });



    // Show file name
    $('#file').on('change', function() {
        const fileName = this.files[0] ? this.files[0].name : "No file chosen";
        $('#file-name').text(fileName);
    });


    // إعداد مكتبة intl-tel-input
const phoneInput = document.querySelector("#phone");
const iti = window.intlTelInput(phoneInput, {
    initialCountry: "ma",  // الدولة الافتراضية
    preferredCountries: ["ma"], // الدول المفضلة
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // تحميل السكربت الإضافي
});

// حدث عند تغيير الدولة
phoneInput.addEventListener("countrychange", function () {
    console.log(iti.getSelectedCountryData()); // طباعة بيانات الدولة المختارة
});

// حدث عند إرسال النموذج عبر AJAX
$('#submit-btn').on('click', function() {
    // الحصول على الرقم المدخل بدون المقدمة
    const phone = phoneInput.value;

    // الحصول على مقدمة الدولة
    const dialCode = iti.getSelectedCountryData().dialCode;

    // دمج مقدمة الدولة مع الرقم المدخل
    const fullPhoneNumber = '+' + dialCode + phone;

    // إرسال البيانات عبر AJAX
    $.ajax({
        url: '/send-email',  // الرابط الذي يستقبل الطلب
        type: 'POST',
        data: {
            _token: '{{ csrf_token() }}', // CSRF Token لتأمين الطلب
            phone: fullPhoneNumber,      // الرقم مع مقدمة الدولة
        },
        success: function(response) {
            console.log(response); // عرض رسالة نجاح أو أي شيء آخر
        },
        error: function(xhr, status, error) {
            console.error("حدث خطأ:", error);
        }
    });
});

