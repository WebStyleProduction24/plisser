jQuery(document).ready(function($){ 
    
    $(window).on('load resize', function() {
      if ($(window).width() < 768) {
        $('.items-slick:not(.slick-initialized)').slick({
          dots: true,
          infinite: true,
          speed: 100,
          slidesToShow: 1,
          slide:'.slide'
        });
      } else {
        $(".items-slick.slick-initialized").slick("unslick");
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
      arrows: false
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