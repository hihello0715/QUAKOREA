

var iw = window.innerWidth;
if (iw < 641) {
  var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination"
    }
  });
};


var iw = window.innerWidth;
if (iw > 640) {
  $(".btn").hover(function () {
    $(this).toggleClass("on");
  });
};