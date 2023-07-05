// -----------------------------------------------------------------------------
// Counter CTA
// -----------------------------------------------------------------------------

function counter() {
  if ($('.counter').length > 0) {
    var $element = $('.counter');
    var $elementHeight = $element.outerHeight();
    var $elementTop = $element.offset().top;
    var $window = $(window);
    var windowHeight = $window.height();
    var windowTop = $window.scrollTop();

    if ((windowHeight + windowTop) >= ($elementHeight + $elementTop)) {
      $('.counter__item-number').each(function () {
        const number = $(this);
        const countTo = number.attr('data-numb');

        if(number.text() !== countTo) {
          $({
            countNum: number.text()
          }).animate({
            countNum: countTo
          },
          {
            duration: 3000,
            easing: 'linear',
            step: function () {
              number.text(Math.floor(this.countNum));
            },
            complete: function () {
              number.text(this.countNum);
            }
          });
        }
      });
    }
  }
}

counter();
$(window).on('scroll', function () {
  counter();
});