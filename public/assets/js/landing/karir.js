// const swiper = new Swiper('.testimoni-swiper', {
//     loop: true,
//     centeredSlides: true,
//     initialSlide: 0,
//     slidesPerView: 3,
//     spaceBetween: 12, // Space between slides
//     autoplay: {
//         delay: 3000,
//         disableOnInteraction: false
//     },
//     mousewheel: {
//         forceToAxis: true,
//         sensitivity: 0.5,
//         thresholdDelta: 30,
//         thresholdTime: 400
//     },
//     breakpoints: {
//         0: {
//             slidesPerView: 2,
//             spaceBetween: 12,
//         },
//         640: {
//             slidesPerView: 2,
//             spaceBetween: 12,
//         },
//         768: {
//             slidesPerView: 3,
//             spaceBetween: 12,
//         },
//         1024: {
//             slidesPerView: 3,
//             spaceBetween: 12,
//         }
//     }
// });

var swiper = new Swiper("#swiperTestimoni", {
    slidesPerView: 3,
    spaceBetween: 10,
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
        768: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 10,
        }
    }
});

