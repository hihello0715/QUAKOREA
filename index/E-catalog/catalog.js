var swiper = new Swiper(".mySwiper", {
    spaceBetween: 10,
    slidesPerView: 12,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".mySwiper2", {
    mousewheel: true,
    thumbs: {
      swiper: swiper,
    },
  });