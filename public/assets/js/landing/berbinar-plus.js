var swiper = new Swiper("#swiperPsikolog", {
    slidesPerView: 4,
    spaceBetween: 10,
    speed: 300,
    loop: true,
    mousewheel: {
        forceToAxis: true,
        sensitivity: 0.5,
        thresholdDelta: 30,
        thresholdTime: 400
    },
    slidesPerGroup: 1,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    scrollbar: {
        el: '.swiper-scrollbar',
    },
    breakpoints: {
        640: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 10,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 10,
        }
    }
});

// swiperBenefitPlus

var swiper = new Swiper("#swiperBenefitPlus", {
    slidesPerView: 3,
    speed: 300,
    loop: true,
    mousewheel: {
        forceToAxis: true,
        sensitivity: 0.5,
        thresholdDelta: 30,
        thresholdTime: 400
    },
    slidesPerGroup: 1,
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    breakpoints: {
        640: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 10,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 10,
        }
    }
});
