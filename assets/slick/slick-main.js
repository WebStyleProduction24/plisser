jQuery(document).ready(function($){ 
    
    $(window).on('load resize', function() {
      if ($(window).width() < 768) {
        $('.items-slick:not(.slick-initialized)').slick({
          dots: true,
          infinite: true,
          speed: 100,
          centerMode: true,
          variableWidth: true,
          slidesToShow: 1,
          slide:'.slide',
          prevArrow: $('.control-prev'),
          nextArrow: $('.control-next')
        });
      } else {
        $(".items-slick.slick-initialized").slick("unslick");
      }
    });

    $(window).on('load resize', function() {
      $('.items-slick-page').each(function() {
        var $slider = $(this);
        var $prevArrow = $slider.prev('.controls').find('.control-prev'); // Находим предыдущую кнопку для данного слайдера
        var $nextArrow = $slider.prev('.controls').find('.control-next'); // Находим следующую кнопку для данного слайдера
    
        if ($(window).width() < 576) {
          if (!$slider.hasClass('slick-initialized')) {
            $slider.slick({
              dots: false,
              infinite: true,
              variableWidth: true,
              speed: 500,
              slidesToShow: 3,
              slide: '.slide-page',
              prevArrow: $prevArrow,
              nextArrow: $nextArrow
            });
          }
        } else {
          if ($slider.hasClass('slick-initialized')) {
            $slider.slick('unslick');
          }
        }
      });
    });
    

    $('.slider-line-1').slick({
      dots:false,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      centerMode: true,
      variableWidth: true,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      prevArrow: $('#control-prev-s-1'),
      nextArrow: $('#control-next-s-1')
    });
    $('.slider-line-2').slick({
      dots:false,
      infinite: true,
      speed: 150,
      slidesToShow: 1,
      centerMode: true,
      variableWidth: true,
      autoplay: true,
      autoplaySpeed: 2000,
      reverse: true,
      arrows: false
    });

    $('.slider-line-3').slick({
      dots:false,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      slidesToScrloll:1,
      centerMode: false,
      variableWidth: false,
      autoplay: true,
      autoplaySpeed: 3000,
      arrows: false,
      slide:'.slide'

    });

    $('.slider-line-4').slick({
      dots:false,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      centerMode: true,
      variableWidth: true,
      adaptiveHeihgt: true,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      prevArrow: $('#control-prev-s-1'),
      nextArrow: $('#control-next-s-1')
    });
 
});