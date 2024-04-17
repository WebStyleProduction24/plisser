jQuery(document).ready(function($){ 
    
    $(window).on('load resize', function() {
      if ($(window).width() < 992) {
        $('.items-slick:not(.slick-initialized)').slick({
          dots: false,
          infinite: true,
          speed: 500,
          centerMode: true,
          autoplay: 5000,
          variableWidth: true,
          slidesToShow: 1,
          slide:'.slide',
          prevArrow: $('.control-prev'),
          nextArrow: $('.control-next'),
          responsive: [
            {
              breakpoint: 465, // размер экрана 465
              settings: {
                centerMode: false,
                variableWidth: false,
              }
            }
          ]
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
    

// Итерация по каждому элементу слайдера
$('.slider-line-1').each(function() {
  // Для текущего слайдера в цикле находим его собственные элементы управления prev/next
  var prevArrow = $(this).siblings('.controls-1').find('.control-prev-1');
  var nextArrow = $(this).siblings('.controls-1').find('.control-next-1');

  // Инициализация slick на текущем слайдере
  $(this).slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow: prevArrow,
    nextArrow: nextArrow,
  });
});

$('.slider-line-2').each(function() {
  // Для текущего слайдера в цикле находим его собственные элементы управления prev/next
  var prevArrow = $(this).siblings('.controls-2').find('.control-prev-2');
  var nextArrow = $(this).siblings('.controls-2').find('.control-next-2');

  // Инициализация slick на текущем слайдере
  $(this).slick({
      dots:false,
      infinite: true,
      speed: 150,
      slidesToShow: 1,
      centerMode: true,
      variableWidth: true,
      autoplay: true,
      autoplaySpeed: 2000,
      reverse: true,
      prevArrow: prevArrow,
      nextArrow: nextArrow,
    });
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
      slide:'.slide',
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
      prevArrow: $('.control-prev-4'),
      nextArrow: $('.control-next-4') 
    });
 
});