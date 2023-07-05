// -----------------------------------------------------------------------------
// Scripts forhero slider
// -----------------------------------------------------------------------------

import { Fancybox } from "./libs/fancybox.umd";

$(function () {
  $('#gallerySlider').slick({
    autoplay: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    fade: false,
    arrows: false,
    dots: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 1400,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
    ]
  });
});