

$(document).ready(function () {
  $(".select .title").click(function (event) {
    if ($(this).hasClass("on")) {
      $(this).add(".list").removeClass("on");
    } else {
      $(this).add(".list").addClass("on");
    }
    event.preventDefault();
    event.stopPropagation();
    return false;
  });
  $("html").click(function () {
    $(".title a").add(".list").removeClass("on");
  });
});

var iw = window.innerWidth;
if (iw > 640) {

  $(document).ready(function () {
    $("nav").hover(function () {
      $(this).toggleClass("on");
    });
  });

} else if (iw < 641) {

  $(document).ready(function () {
    $("#menu-wrapper #hamburger-menu").click(function () {
      $("nav").toggleClass("on");
    });
  });

};

$(function() {
  function slideMenu() {
      var activeState = $("#menu-container .menu-list").hasClass("active");
      $("#menu-container .menu-list").animate({left: activeState ? "0%" : "-100%"}, 400);
  }
  $("#menu-wrapper").click(function(event) {
      event.stopPropagation();
      $("#hamburger-menu").toggleClass("open");
      $("#menu-container .menu-list").toggleClass("active");
      slideMenu();
  });

  $(".menu-list").find(".accordion-toggle").click(function() {
      $(this).next().toggleClass("open").slideToggle("fast");
      $(this).toggleClass("active-tab").find(".menu-link").toggleClass("active");

      $(".menu-list .accordion-content").not($(this).next()).slideUp("fast").removeClass("open");
      $(".menu-list .accordion-toggle").not(jQuery(this)).removeClass("active-tab").find(".menu-link").removeClass("active");
  });
}); // jQuery load