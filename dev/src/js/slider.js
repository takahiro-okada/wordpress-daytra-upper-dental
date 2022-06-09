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
});
