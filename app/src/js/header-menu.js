// -----------------------------------------------------------------------------
// Scripts for header menu
// -----------------------------------------------------------------------------

$(function () {
  $('.header-menu__list .menu-item').hover(function () {
    $(this).find('.sub-menu').fadeIn(300);
  }, function () {
    $(this).find('.sub-menu').fadeOut(300);
  });
});