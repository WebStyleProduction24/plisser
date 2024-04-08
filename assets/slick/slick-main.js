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
      if ($(window).width() < 576) {
        $('.items-slick-page:not(.slick-initialized)').slick({
          dots: false,
          infinite: true,
          variableWidth: true,
          speed: 100,
          slidesToShow: 3,
          slide:'.slide-page',
          prevArrow: $('.control-prev'),
          nextArrow: $('.control-next')
        });
      } else {
        $(".items-slick-page.slick-initialized").slick("unslick");
      }
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
      prevArrow: $('.control-prev'),
      nextArrow: $('.control-next')
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
      arrows: false,
      prevArrow: $('.control-prev'),
      nextArrow: $('.control-next')
    });

    $('.slider-line-3').slick({
      dots:false,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      centerMode: true,
      variableWidth: true,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      prevArrow: $('.control-prev'),
      nextArrow: $('.control-next')
    });
    $('.slider-line-4').slick({
      dots:false,
      infinite: true,
      speed: 150,
      slidesToShow: 1,
      centerMode: true,
      variableWidth: true,
      autoplay: true,
      autoplaySpeed: 2000,
      reverse: true,
      arrows: false,
      prevArrow: $('.control-prev'),
      nextArrow: $('.control-next')
    });

    $('.slider-line-3').slick({
      dots:false,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      centerMode: true,
      variableWidth: true,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false
    });
    $('.slider-line-4').slick({
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

});