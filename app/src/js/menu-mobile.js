// -----------------------------------------------------------------------------
// Scripts for menu mobile
// -----------------------------------------------------------------------------

$(function () {
  $('.menu-mobile .menu-item-has-children').append('<span class="menu-mobile__collapse"></span>');

  $('body').on('click', '.menu-mobile__collapse', function() {
    const menuItemParent = $(this).parent().find('.sub-menu').first();

    menuItemParent.slideToggle(300);
    $(this).toggleClass('menu-mobile__collapse--open');
  });

  $('.navbar-toggler').on('click',function () {
    $('.menu-mobile').addClass('menu-mobile--open');
    $('body').addClass('no-scroll');
  });

  $('.menu-mobile__close').on('click', function () {
    $('.menu-mobile').removeClass('menu-mobile--open');
    $('body').removeClass('no-scroll');
  });

  $('.menu-mobile__overlay').scrollbar();

});