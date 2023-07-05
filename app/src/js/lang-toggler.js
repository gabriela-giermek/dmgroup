// -----------------------------------------------------------------------------
// Scripts for language toggler
// -----------------------------------------------------------------------------

$(function () {
  $('.lang__btn').on('click', function () {
    const langToggler = $(this).parent();
    const langList = langToggler.find('.lang__list');

    langList.fadeToggle();
  });

  $(document).on('click', function (e) {
    const list = $('.lang__list');

    if (!$('.lang__btn').is(e.target) && !$(e.target).closest('.lang__btn').length && !list.is(e.target) && list.has(e.target).length == 0) {
      list.fadeOut();
    }
  });

  $(window).on('resize', function() {
    $('.lang__list').fadeOut();
  });
});