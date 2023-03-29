/**
 * @file
 * Contain code for header elements
 */

(function ($, Drupal) {

  // Configure header Category block.
  Drupal.behaviors.ceremaiHeaderCategoryMenu = {
    attach: function (context) {
      var $categoryMenu = $('header.navbar .category-menu', context);
      $('.block-title', $categoryMenu).on('click', function () {
        $('ul.menu', $categoryMenu).slideToggle('slow');
        $(this).toggleClass('active');
        return FALSE;
      });
    }
  };

  // Configure header search block.
  Drupal.behaviors.ceremaiHeaderSearchBlock = {
    attach: function (context) {
      // var $searchBlock = $('header.navbar .block-search-navigation', context);
      var $searchBlock = $('header.navbar .search-block-form', context);
      $('.search-icon', $searchBlock).on('click', function () {
        $('.search-contents', $searchBlock).toggle();
        $(this).toggleClass('active');
        return FALSE;
      });
    }
  };

  // Configure main menu for mobile screen.
  Drupal.behaviors.ceremaiHeaderMainMenu = {
    attach: function (context) {
      var $mainMenuWrapp = $('nav.main-menu', context);
      var $toggleEl = $('.toggle', $mainMenuWrapp);
      var $mainMenu = $('ul.menu', $mainMenuWrapp);
      $toggleEl.on('click', function () {
        $mainMenu.slideToggle('slow');
      });

    }
  };

})(window.jQuery, window.Drupal);
