var swiper;

function initializeSwiper() {
    var windowWidth = window.innerWidth;

    if (windowWidth < 768) {
        if (swiper && swiper.destroy) {
            swiper.destroy();
        }

        swiper = new Swiper(".psikotesSwiper", {
            slidesPerView: "auto",
            spaceBetween: 0,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    } else {
        if (swiper && swiper.destroy) {
            swiper.destroy();
        }

        swiper = new Swiper(".psikotesSwiper", {
            slidesPerView: 3,
            spaceBetween: 0,
            initialSlide: 2,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    }
}

// Initialize on page load
initializeSwiper();

// Reinitialize on window resize
window.addEventListener("resize", function () {
    initializeSwiper();
});

var swiper = new Swiper(".psikotesSwiperAsesmen", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2,
        slideShadows: true,
    },
    loop: true,
    autoplay: true,
    pagination: {
        el: ".swiper-pagination",
        type: "bullets",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
    },
});
