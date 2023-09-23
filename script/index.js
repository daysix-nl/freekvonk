try {
  var swiperHero = new Swiper(".swiperhero", {
    spaceBetween: 10,
    lazy: false,
    freeMode: true,
    loop: true,
    speed: 5000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    slidesPerView: "auto",
  });
} catch (error) {}
