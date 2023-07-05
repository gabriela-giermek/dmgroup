// -----------------------------------------------------------------------------
// Scripts for offer gallery
// -----------------------------------------------------------------------------

$(function () {
  $('#offerGalleryFor').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '#offerGalleryNav'
  });

  $('#offerGalleryNav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '#offerGalleryFor',
    dots: false,
    arrows: true,
    centerMode: false,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 1920,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
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