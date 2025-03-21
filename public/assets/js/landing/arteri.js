var swiper = new Swiper("#swiperArteriHero", {
    loop: true,
    speed: 1000,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
});

window.handleSwipeTo = (index) => {
    swiper.slideTo(index, 1000);
};

window.handleDetailArticle = (index) => {
    alert(`redirect to detail artikel page id: ${index}`);
};
