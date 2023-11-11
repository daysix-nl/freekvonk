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
  var swipersFoto = new Swiper(".mySwiper-foto", {
    loop: true,
    lazy: false,
    slidesPerView: "auto",
    spaceBetween: 8,
    initialSlide: 2,
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
      nextEl: ".swiper-button-next-foto",
      prevEl: ".swiper-button-prev-foto",
    },
  });
} catch (error) {
  console.error(error);
}

try {
  var swipersOverFreek = new Swiper(".mySwiper-over-freek", {
    loop: true,
    slidesPerView: 1,
    pagination: {
      el: ".swiper-pagination",
    },
    navigation: {
      nextEl: ".swiper-button-next-over-freek",
      prevEl: ".swiper-button-prev-over-freek",
    },
  });
} catch (error) {}

try {
  var swipersOverFreek = new Swiper(".mySwiper-over-freek-content", {
    loop: true,
    slidesPerView: 1,
    pagination: {
      el: ".swiper-pagination-content",
    },
    navigation: {
      nextEl: ".swiper-button-next-over-freek",
      prevEl: ".swiper-button-prev-over-freek",
    },
  });
} catch (error) {}

try {
  var swipersOverFreek = new Swiper(".mySwiper-over-freek-news", {
    loop: true,
    slidesPerView: 1,
    pagination: {
      el: ".swiper-pagination-news",
    },
    // navigation: {
    //   nextEl: ".swiper-button-next-over-freek",
    //   prevEl: ".swiper-button-prev-over-freek",
    // },
  });
} catch (error) {}

try {
  var swiperFreekImage = new Swiper(".mySwiper-over-freek-image", {
    slidesPerView: "auto",
    centeredSlides: true,
    lazy: false,
    initialSlide: 1,
    spaceBetween: 8,
  });
} catch (error) {}

try {
  var swiperShopHeader = new Swiper(".mySwiper-shop-header", {
    loop: true,
    slideToClickedSlide: true,
    effect: "fade",
    slidesPerView: 1,
    centeredSlides: true,
    autoplay: {
      delay: 7000,
      disableOnInteraction: false,
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
  // Get reference to the Lottie animation element
  const elementLottie = document.querySelectorAll(".lottie-title");

  elementLottie.forEach((elementLottie) => {
    // Initialize the Lottie animation
    const animation = lottie.loadAnimation({
      container: elementLottie, // The DOM element that will contain the animation
      renderer: "svg",
      loop: false, // Don't loop the animation
      autoplay: true, // Don't start the animation immediately
      path: "/wp-content/themes/freekvonk/img/lottie/snake3.json", // The path to the animation json
    });

    // Make sure the animation's progress is at 0
    animation.goToAndStop(0, true);
  });
} catch (error) {}

try {
  // Get references to all Lottie animation elements
  const elementsLottie = document.querySelectorAll(".lottie-subtitle");

  // Loop through all elements and initialize the Lottie animation for each one
  elementsLottie.forEach((elementLottie) => {
    const animation = lottie.loadAnimation({
      container: elementLottie, // The DOM element that will contain the animation
      renderer: "svg",
      loop: true, // Don't loop the animation
      autoplay: true, // Don't start the animation immediately
      path: "/wp-content/themes/freekvonk/img/lottie/snake6(smal).json", // The path to the animation json
    });

    // Make sure the animation's progress is at 0
    animation.goToAndStop(0, true);
  });
} catch (error) {}
try {
  document.getElementById("loadMoreBtn").addEventListener("click", function () {
    const items = document.querySelectorAll(".item:not(.visible)");

    items.forEach((item) => {
      item.classList.add("visible");
      item.style.display = "block";
    });

    const newVisibleItems = document.querySelectorAll(".item.visible").length;

    if (items.length - newVisibleItems <= 0) {
      this.innerText = "Geen meer om te laden";
      this.style.display = "none";
    } else {
      this.innerText = "Laad meer";
    }
  });
} catch (error) {}

try {
  const filterButtons = document.querySelector(".filter-button-shop");
  const filterModal = document.querySelector(".filter-shop-modal");
  const filterClose = document.querySelector(".filter-close");
  const filterModalOverlay = document.querySelector(".filter-overlay");

  filterButtons.addEventListener("click", () => {
    filterModal.classList.toggle("active");
    filterModalOverlay.classList.toggle("active");
  });

  filterClose.addEventListener("click", () => {
    filterModal.classList.toggle("active");
    filterModalOverlay.classList.toggle("active");
  });

  filterModalOverlay.addEventListener("click", () => {
    filterModal.classList.toggle("active");
    filterModalOverlay.classList.toggle("active");
  });
} catch (error) {}

try {
  var swiperShop = new Swiper(".mySwiper-shop", {
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next-shop",
      prevEl: ".swiper-button-prev-shop",
    },
  });
} catch (error) {
  console.error(error);
}

try {
  const overlayShopCart = document.querySelector(".sidecart-overlay");
  const sidecart = document.querySelector("#sidecart-menu");
  const sidecartClose = document.querySelector("#sidecart-close");
  const sidecartButton = document.querySelectorAll(".sidecar");
  const closeHandler = document.querySelector("#hamburger-menu");

  for (let i = 0; i < sidecartButton.length; i++) {
    sidecartButton[i].addEventListener("click", () => {
      closeHandler.classList.add("hidden");
      overlayShopCart.classList.toggle("sidecart-overlay-active");
      sidecart.classList.toggle("sidecart-hidden");
    });
  }

  overlayShopCart.addEventListener("click", () => {
    overlayShopCart.classList.toggle("sidecart-overlay-active");
    sidecart.classList.toggle("sidecart-hidden");
  });

  sidecartClose.addEventListener("click", () => {
    overlayShopCart.classList.toggle("sidecart-overlay-active");
    sidecart.classList.toggle("sidecart-hidden");
  });
} catch (error) {
  console.error(error);
}

try {
  var swiperfreekteam = new Swiper(".mySwiper-freekteam", {
    slidesPerView: 1,
    breakpointsBase: "window",
    grabCursor: true,
    spaceBetween: 10,
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 4,
      },
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
} catch (error) {}

try {
  const menuHref = document.querySelectorAll(".menu-hover");
  const menuBackground = document.querySelectorAll(".menu-background");

  for (let i = 0; i < menuHref.length; i++) {
    menuHref[i].addEventListener("mouseover", () => {
      for (let j = 0; j < menuBackground.length; j++) {
        menuBackground[j].classList.add("hidden");
      }
      const img = document.querySelector(`#menubackground-${i}`);
      img.classList.remove("hidden");
    });
  }
} catch (error) {}

try {
  const buttonClosePopUp = document.querySelector(".closePopUp");
  const popUp = document.querySelector(".pop_up");

  const closePopupAndSetCookie = () => {
    let date = new Date();
    date.setDate(date.getDate() + 7);
    document.cookie = "popup=yes; expires=" + date.toUTCString() + ";";
    popUp.classList.add("hidden");
  };

  buttonClosePopUp.addEventListener("click", closePopupAndSetCookie);
  popUp.addEventListener("click", closePopupAndSetCookie);
} catch (error) {}

try {
  document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".custom-quantity-input").forEach((input) => {
      let timeout;

      input.addEventListener("input", () => {
        clearTimeout(timeout);
        timeout = setTimeout(() => {
          updateCartQuantity(input.dataset.cartItemKey, input.value);
        }, 1000);
      });
    });
  });

  const updateCartQuantity = async (cartItemKey, quantity) => {
    try {
      const response = await fetch("/wp-admin/admin-ajax.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body:
          "action=update_cart_quantity&cart_item_key=" +
          cartItemKey +
          "&quantity=" +
          quantity,
      });

      const data = await response.json();

      if (data.success) {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const card = urlParams.get("cart_updated");
        if (!window.location.href.includes("afrekenen") && !card) {
          window.location = window.location.href + "?cart_updated=true";
        } else {
          window.location.reload();
        }
      } else {
        console.error("Failed to update cart");
      }
    } catch (error) {
      console.error("Error:", error);
    }
  };
} catch (error) {}

try {
  window.addEventListener("load", () => {
    const overlayShopCart = document.querySelector(".sidecart-overlay");
    const sidecart = document.querySelector("#sidecart-menu");
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const card = urlParams.get("cart_updated");
    if (sidecart && card) {
      sidecart.classList.remove("sidecart-hidden");
      overlayShopCart.classList.add("sidecart-overlay-active");
    }
  });
} catch (error) {}
