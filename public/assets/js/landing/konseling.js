var swiper = new Swiper("#swiperKonseling", {
    slidesPerView: 3, 
    spaceBetween: 10, 
    speed: 300,
    slidesPerGroup: 1,
    loop: true,
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

// Swiper Produk Berbinar
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

// Swiper Peer Counselor Berbinar
var swiper = new Swiper("#swiperPeer", {
    slidesPerView: 3, 
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
var swiper = new Swiper("#swiperTestimoni", {
    slidesPerView: 3, 
    spaceBetween: 10, 
    loop: true,
    speed: 300,
    autoplay: {
        delay: 4000, 
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
            spaceBetween: 10
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

