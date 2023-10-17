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
    },
  });
} catch (error) {
  console.error(error);
}

try {
  var swipersVideo = new Swiper(".mySwiper-video", {
    loop: true,
    lazy: false,
    freeMode: true,
    centeredSlides: false,
    initialSlide: 2,
    slidesPerView: "auto",
    spaceBetween: 8,
    breakpoints: {
      768: {
        spaceBetween: 8,
      },
      1280: {
        spaceBetween: 15,
        slidesPerView: "auto",
      },
      1440: {
        spaceBetween: 15,
        slidesPerView: "auto",
      },
    },
    navigation: {
      nextEl: ".swiper-button-next-video",
      prevEl: ".swiper-button-prev-video",
    },
  });
} catch (error) {
  console.error(error);
}

try {
  document.addEventListener("DOMContentLoaded", (event) => {
    const sliderWipes = document.querySelectorAll(
      ".mySwiper-video .swiper-slide"
    );
    const viewportWidth = window.innerWidth;
    const margin = viewportWidth / 2 - 1200;
    let options = {
      root: null,
      rootMargin: `0px ${margin}px 0px ${margin}px`,
      threshold: 0,
    };

    let observer = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("watched");
        } else {
          entry.target.classList.remove("watched");
        }
      });
    }, options);

    sliderWipes.forEach((sliderWipe) => {
      observer.observe(sliderWipe);
    });
  });
} catch (error) {}

try {
  var swipersFoto = new Swiper(".mySwiper-foto", {
    loop: true,
    lazy: false,
    freeMode: true,
    slidesPerView: 1,
    spaceBetween: 8,
    breakpoints: {
      768: {
        spaceBetween: 8,
      },
      1280: {
        spaceBetween: 15,
        slidesPerView: 4,
      },
      1440: {
        spaceBetween: 15,
        slidesPerView: 4,
      },
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
} catch (error) {
  console.error(error);
}

try {
  const acc = document.getElementsByClassName("accordion");

  for (let i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      const panel = this.nextElementSibling;
      this.classList.toggle("active");
      panel.style.height =
        panel.style.height === panel.scrollHeight + "px"
          ? "0"
          : panel.scrollHeight + "px";

      for (let j = 0; j < acc.length; j++) {
        if (this !== acc[j]) {
          acc[j].classList.remove("active");
          acc[j].nextElementSibling.style.height = "0";
        }
      }
    });
  }
} catch (error) {}

try {
  const forEach = (array, callback, scope) => {
    for (let i = 0; i < array.length; i++) {
      callback.call(scope, i, array[i]);
    }
  };

  const buttonpost = document.querySelectorAll(".button-posts");

  forEach(buttonpost, function (i, el) {
    el.addEventListener("click", function () {
      const buttonpostActive = document.querySelectorAll(".button-posts");
      const block = document.querySelectorAll(".container.team-block");
      // Als de button de class active heeft verwijder dan de class active en voeg een class toe
      if (this.classList.contains("active")) {
        this.classList.remove("active");
        this.innerHTML = "Laad meer";

        this.closest(".team-block").classList.add("list-b-none");
      } else {
        // Verwijder alle classes van de button
        for (let i = 0; i < buttonpostActive.length; i++) {
          buttonpostActive[i].classList.remove("active");
        }
        // Voeg class toe waar je op drukt
        this.classList.add("active");

        // Voeg toe alle classes an de blocks
        for (let i = 0; i < block.length; i++) {
          block[i].classList.add("list-b-none");
        }
        // verwijder class die dicht bij button zit
        this.closest(".team-block.list-b-none").classList.remove("list-b-none");
      }

      const buttonpostActiveClass = document.querySelector(
        ".button-posts.active"
      );
      // Bekijk welke tekst erin moet
      if (buttonpostActiveClass) {
        for (let i = 0; i < buttonpostActive.length; i++) {
          buttonpostActive[i].innerHTML = "Laad meer";
        }
        buttonpostActiveClass.innerHTML = "Laad minder";
      }
    });
  });
} catch (error) {}

try {
  const links = document.querySelectorAll("a.lottiemenu");
  const visibleClass = "visible";

  links.forEach((link) => {
    link.addEventListener("mouseenter", function () {
      const player = this.querySelector("lottie-player");
      player.classList.add(visibleClass);
      player.play();
    });

    link.addEventListener("mouseleave", function () {
      const player = this.querySelector("lottie-player");
      player.classList.remove(visibleClass);
      player.stop();
    });
  });
} catch (error) {}
