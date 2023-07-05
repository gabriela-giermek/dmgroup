// -----------------------------------------------------------------------------
// Scripts for inquiry form
// -----------------------------------------------------------------------------

$(function () {
  if($('#sendInquiryForm').length && $('#inquirySubject').length) {
    const offerTitle = $('#offerTitle').text();
    const contactTabNav = $('#contactNav');
    const contactTabContent = $('#contactContent');
    const subjectField = $('#inquirySubject');
    
    subjectField.val(offerTitle);

    $('#sendInquiryForm').on('click', function () {
      $('html, body').stop().animate({
        scrollTop: $('.single-offer__tabs').offset().top - 100
      }, 300);

      $('.tabs__nav-item').removeClass('active');
      $('.tabs__content-item').hide();

      contactTabNav.addClass('active');
      contactTabContent.fadeIn(150);

    });
  }
});