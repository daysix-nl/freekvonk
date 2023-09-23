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
document.addEventListener("DOMContentLoaded", function () {
  try {
    var swipers = new Swiper(".mySwiper-navigatie", {
      slideToClickedSlide: true,
      effect: "fade",
      slidesPerView: 1,
      loop: true,
      centeredSlides: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        clickable: true,
      },
    });
  } catch (error) {
    console.error(error);
  }
});
