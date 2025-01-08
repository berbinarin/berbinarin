// Swiper Produk Berbinar
var swiper = new Swiper("#swiperPsikolog", {
    slidesPerView: 4, 
    spaceBetween: 10, 
    loop: true,
    mousewheel: {
        forceToAxis: true, 
        sensitivity: 1, 
        thresholdDelta: 50, 
        thresholdTime: 300 
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

// Swiper Peer Counselor Berbinar
var swiper = new Swiper("#swiperPeer", {
    slidesPerView: 3, 
    spaceBetween: 10, 
    loop: true,
    mousewheel: {
        forceToAxis: true, 
        sensitivity: 1, 
        thresholdDelta: 50, 
        thresholdTime: 300 
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
            slidesPerView: 3,
            spaceBetween: 10,
        },
        1024: {
            slidesPerView: 4, 
            spaceBetween: 10, 
        }
    }
});

// Swiper Testimoni Berbinar
var swiper = new Swiper(".swiperTestimoni", {
    slidesPerView: 3,  
    spaceBetween: 10, 
    pagination: {
        el: ".swiper-pagination.testimoni",
        clickable: true,
    },
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
    slidesPerGroup: 1, 
    speed: 1000, 
    loop: true, 
    breakpoints: {
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
        },
        // 1280: {
        //     slidesPerView: 3,
        //     spaceBetween: 30,
        // },
        // 1536: {
        //     slidesPerView: 4,
        //     spaceBetween: 30,
        // }
    }
});

