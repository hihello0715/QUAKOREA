

  var iw = window.innerWidth;
if (iw < 641) {
  var swiper = new Swiper(".review", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
};