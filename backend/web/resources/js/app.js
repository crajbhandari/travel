$(window).on("load", function () {
   $("#status").fadeOut(), $("#preloader").delay(350).fadeOut("slow")
});

$(document).ready(function () {
   "use strict";
   $("#side-menu").metisMenu();
   $("#vertical-menu-btn").on("click", function (e) {
      e.preventDefault();
      $("body").toggleClass("sidebar-enable");
      (992 <= $(window).width()) ? $("body").toggleClass("vertical-collpsed") : $("body").removeClass("vertical-collpsed")
   });

   $(".dropdown-menu a.dropdown-toggle").on("click", function (e) {
      return $(this).next().hasClass("show") || $(this).parents(".dropdown-menu").first().find(".show").removeClass("show"), $(this).next(".dropdown-menu").toggleClass("show"), !1
   });
   $(function () {
      $('[data-toggle="tooltip"]').tooltip()
   });
   $(function () {
      $('[data-toggle="popover"]').popover()
   });
   Waves.init();
});
