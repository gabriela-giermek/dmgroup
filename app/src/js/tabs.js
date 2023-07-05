// -----------------------------------------------------------------------------
// Scripts for offer tabs
// -----------------------------------------------------------------------------

$('.tabs__nav-item').on('click', function() {
  const currentNav = $(this);
  const currentTabId = currentNav.attr('data-tab-target');

  currentNav.addClass('active');
  $(`${currentTabId}`).fadeIn(150);

  $('.tabs__nav-item').not(currentNav).removeClass('active');
  $('.tabs__content-item').not(`${currentTabId}`).hide();
});