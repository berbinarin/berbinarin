var swiper = new Swiper("#swiperProduk", {
    slidesPerView: 3, 
    spaceBetween: 10, 
    loop: true,
    speed: 300,
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
    scrollbar: {
        el: '.swiper-scrollbar',
        draggable: true,
        dragSize: 100,
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

// Swiper Testimoni Berbinar
// var swiper = new Swiper(".swiperTestimoni", {
//     slidesPerView: 3,  
//     spaceBetween: 10, 
//     pagination: {
//         el: ".swiper-pagination.testimoni",
//         clickable: true,
//     },
//     freeMode: true,
//     mousewheel: {
//         forceToAxis: true, 
//         releaseOnEdges: true, 
//     },
//     autoplay: {
//         delay: 3000,  
//         disableOnInteraction: false, 
//     },
//     speed: 1000, 
//     loop: true, 
//     breakpoints: {
//         640: {
//             slidesPerView: 2,
//             spaceBetween: 10,
//         },
//         768: {
//             slidesPerView: 3,
//             spaceBetween: 10,
//         },
//         1024: {
//             slidesPerView: 3,
//             spaceBetween: 10,
//         },
//         // 1280: {
//         //     slidesPerView: 3,
//         //     spaceBetween: 30,
//         // },
//         // 1536: {
//         //     slidesPerView: 4,
//         //     spaceBetween: 30,
//         // }
//     }
// });