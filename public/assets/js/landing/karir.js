var swiper = new Swiper("#swiperTestimoniKarir", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    speed: 300,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    mousewheel: {
        forceToAxis: true,
        sensitivity: 0.5,
        thresholdDelta: 30,
        thresholdTime: 400
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 15,
        },
        1280: {
            slidesPerView: 3,
            spaceBetween: 15,
        }
    }
});

