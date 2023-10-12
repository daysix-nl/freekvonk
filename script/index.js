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

try {
  var swipers = new Swiper(".mySwiper-navigatie", {
    slideToClickedSlide: true,
    effect: "fade",
    slidesPerView: 1,
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

try {
  var swipersD = new Swiper(".mySwiper-d3", {
    slidesPerView: 1,
    slidesPerView: "auto",
    loop: true,
    spaceBetween: 8,
    breakpoints: {
      768: {
        spaceBetween: 45,
      },
      1280: {
        spaceBetween: 45,
      },
      1440: {
        spaceBetween: 45,
      },
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
      clickable: true,
    },
  });
} catch (error) {
  console.error(error);
}

try {
  var swipersVideo = new Swiper(".mySwiper-video", {
    centeredSlides: true,
    spaceBetween: 8,
    loop: true,
    loopAdditionalSlides: 2, // you may tweak this as per your need
    slidesPerGroupSkip: 2, // consider this if using slidesPerGroup
    watchSlidesVisibility: true,
    breakpoints: {
      768: {
        spaceBetween: 8,
      },
      1280: {
        spaceBetween: 15,
        slidesPerView: 2,
      },
      1440: {
        spaceBetween: 15,
        slidesPerView: 2,
      },
    },
    lazy: {
      loadPrevNext: true,
      loadPrevNextAmount: 3, // load 3 slides ahead
    },
    on: {
      init: function () {
        duplicateSlides(this);
      },
      slideChangeTransitionEnd: function () {
        resetPosition(this);
      },
    },
  });
} catch (error) {
  console.error(error);
}
