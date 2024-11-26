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

document.addEventListener("DOMContentLoaded", function () {
const swiper = new Swiper('.mySwiper', {
    on: {
    slideChange: function () {
        if (window.innerWidth <= 768) {
            const activeIndex = this.realIndex + 1;
            const serviceIcons = document.querySelector('.services .swiper .service-icons');

            if ([2, 3, 4].includes(activeIndex)) {
                serviceIcons.style.position = 'absolute';
                serviceIcons.style.bottom = '-20px';
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

const phoneInput = document.querySelector("#phone");
const iti = window.intlTelInput(phoneInput, {
initialCountry: "ma",
preferredCountries: ["ma", "ps"],
utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
});

phoneInput.addEventListener("countrychange", function () {
console.log(iti.getSelectedCountryData());
});

