var swiper = new Swiper("#swiperConsulting", {
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
    slidesPerGroup: 1, 
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
            spaceBetween: 20, 
        }
    }
});