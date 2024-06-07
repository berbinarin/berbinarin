class Carousel {
    constructor(element, items, options) {
        this.element = element;
        this.items = items;
        this.options = options;
    }

    init() {
        // Initialize carousel with the given options
        console.log("Carousel initialized with options:", this.options);
    }
}

const carouselElement = document.getElementById("carousel-example");

const items = [
    {
        position: 0,
        el: document.getElementById("carousel-item-1"),
    },
    {
        position: 1,
        el: document.getElementById("carousel-item-2"),
    },
    {
        position: 2,
        el: document.getElementById("carousel-item-3"),
    },
    {
        position: 3,
        el: document.getElementById("carousel-item-4"),
    },
    {
        position: 4,
        el: document.getElementById("carousel-item-5"),
    },
];

const options = {
    defaultPosition: 1,
    interval: 3000,
    indicators: {
        activeClasses: "bg-white dark:bg-cyan-500",
        inactiveClasses:
            "bg-white/50 dark:bg-cyan-500/50 hover:bg-cyan-500 dark:hover:bg-cyan-500",
        items: [
            {
                position: 0,
                el: document.getElementById("carousel-indicator-1"),
            },
            {
                position: 1,
                el: document.getElementById("carousel-indicator-2"),
            },
            {
                position: 2,
                el: document.getElementById("carousel-indicator-3"),
            },
            {
                position: 3,
                el: document.getElementById("carousel-indicator-4"),
            },
            {
                position: 4,
                el: document.getElementById("carousel-indicator-5"),
            },
        ],
    },
    onNext: () => {
        console.log("next slider item is shown");
    },
    onPrev: () => {
        console.log("previous slider item is shown");
    },
    onChange: () => {
        console.log("new slider item has been shown");
    },
};

const carousel = new Carousel(carouselElement, items, options);
carousel.init();

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    centeredSlides: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".mySwiperAsesmen", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2,
        slideShadows: true,
    },
    loop: true,
    autoplay: true,
    pagination: {
        el: ".swiper-pagination",
        type: "bullets",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

document.addEventListener("alpine:init", () => {
    Alpine.store("accordion", {
        tab: 0,
    });

    Alpine.data("accordion", (idx) => ({
        init() {
            this.idx = idx;
        },
        idx: -1,
        handleClick() {
            this.$store.accordion.tab =
                this.$store.accordion.tab === this.idx ? 0 : this.idx;
        },
        handleRotate() {
            return this.$store.accordion.tab === this.idx ? "rotate-180" : "";
        },
        handleToggle() {
            return this.$store.accordion.tab === this.idx
                ? `max-height: ${this.$refs.tab.scrollHeight}px`
                : "";
        },
    }));
});
