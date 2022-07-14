jQuery(function() {
  jQuery('.js-slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: false,
    fade: true,
    prevArrow: '<button class="p-slider-prev-arrow"></button>',
    nextArrow: '<button class="p-slider-next-arrow"></button>'
  });
  jQuery('.js-staff-slider').slick({
    autoplay: true,
    autoplaySpeed: 0,
    speed: 5000,
    cssEase: "linear",
    slidesToShow: 4,
    swipe: false,
    arrows: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    centerMode: true,
    centerPadding: "20px",
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3, // 画面幅750px以下でスライド3枚表示
        }
      }
    ]
  });
});
