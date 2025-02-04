var swiper = new Swiper("#swiperIndividu", {
    slidesPerView: 4, 
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
        640: {
            slidesPerView: 2,
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


var swiper = new Swiper("#swiperPerusahaanStaff", {
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
        640: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        1024: {
            slidesPerView: 3, 
            spaceBetween: 10, 
        }
    }
});

var swiper = new Swiper("#swiperPerusahaanSupervisor", {
    slidesPerView: 2, 
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
        640: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        1024: {
            slidesPerView: 2, 
            spaceBetween: 10, 
        }
    }
});

var swiper = new Swiper("#swiperPendidikan", {
    slidesPerView: 4, 
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

var swiper = new Swiper("#swiperKomunitas", {
    slidesPerView: 4, 
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
        640: {
            slidesPerView: 2,
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

var swiper = new Swiper(".swiperDokumentasiMobile", {
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

var swiper = new Swiper(".swiperDokumentasiAce", {
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

var swiper = new Swiper("#swiperDokumentasi", {
    slidesPerView: 3,
    spaceBetween: 10,
    loop: true,
    mousewheel: {
        forceToAxis: true, 
        sensitivity: 0.5, 
        thresholdDelta: 30, 
        thresholdTime: 400 
    }, 
    autoplay: {
        delay: 3000,  
        disableOnInteraction: false,  
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    speed: 500, 
    breakpoints: {
        768: {
            slidesPerView: 2,
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
            slidesPerGroup: 1,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 10,
            slidesPerGroup: 1,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 10,
            slidesPerGroup: 1,
        },
        1024: {
            slidesPerView: 3, 
            spaceBetween: 10, 
            slidesPerGroup: 1,
        }
    }
});