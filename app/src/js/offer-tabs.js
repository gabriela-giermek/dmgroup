// -----------------------------------------------------------------------------
// Scripts for offer tabs
// -----------------------------------------------------------------------------

$('.offer__nav-item').on('click', function() {
  const currentNav = $(this);
  const currentTabId = currentNav.attr('data-tab-target');

  currentNav.addClass('active');
  $(`${currentTabId}`).fadeIn(150);

  $('.offer__nav-item').not(currentNav).removeClass('active');
  $('.offer__tabs-item').not(`${currentTabId}`).hide();
});