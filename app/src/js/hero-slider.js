// -----------------------------------------------------------------------------
// Scripts for hero slider
// -----------------------------------------------------------------------------

$(function () {
  $('.hero-slider__inner').slick({
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    fade: true,
    arrows: true,
    dots: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          dots: false,
        }
      }
    ]
  });
});