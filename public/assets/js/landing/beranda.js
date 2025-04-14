let valueDisplays = document.querySelectorAll(".num");
let interval = 5000;

valueDisplays.forEach((valueDisplay) => {
  let startValue = 0;
  let endValue = parseFloat(valueDisplay.getAttribute("data-val"));
  let suffixElement = valueDisplay.querySelector("span");
  let suffixText = suffixElement ? suffixElement.outerHTML : "";
  let duration = Math.floor(interval / endValue);

  let counter = setInterval(function () {
    startValue += 1;
    if (startValue >= endValue) {
      startValue = endValue;
      clearInterval(counter);
    }
    valueDisplay.innerHTML = startValue + suffixText;
  }, duration);
});



var swiper = new Swiper("#swiperProduk", {
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
            slidesPerGroup: 2,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 10,
            slidesPerGroup: 3,
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
            slidesPerGroup: 2,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 10,
            slidesPerGroup: 2,
        }
    }
});
