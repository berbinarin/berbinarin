var swiper = new Swiper(".swiperProdukBerbinar", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true, 
    autoplay: {
        delay: 2000,  
        disableOnInteraction: false,  
    },
    speed: 1000, 
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 1,
        },
        1024: {
            slidesPerView: 1,
        }
    }
});
