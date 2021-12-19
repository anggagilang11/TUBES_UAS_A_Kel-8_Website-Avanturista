(function ($) {
  "use strict";

  var digiciaApp = {
    /* ---------------------------------------------
            ## Mobile Menu
        --------------------------------------------- */
    mobile_menu: function () {
      var mobilesearch = $(
          ".site-header .navigation-area .header-navigation-right"
        )
        .clone()
        .appendTo(".mobile-menu");
      // mobile Menu
      //-------------------------------
      $(".site-navigation .mainmenu-area nav").meanmenu({
        meanMenuClose: "<i class='fas fa-times'></i>",
        meanMenuCloseSize: "18px",
        meanScreenWidth: "1199",
        meanExpandableChildren: true,
        meanMenuContainer: ".mobile-menu-area .mobile-menu"
      });
    },

    /* ---------------------------------------------
function initializ
--------------------------------------------- */
    initializ: function () {
      digiciaApp.mobile_menu();
    }
  };
  /* ---------------------------------------------
Document ready function
--------------------------------------------- */
  $(function () {
    digiciaApp.initializ();
  });
})(jQuery);