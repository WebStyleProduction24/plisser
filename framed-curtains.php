<?php
/*
Template Name: Шаблон страниы шторы в рамке
*/
?>

<?php get_header(); ?>

<main class="p-t-30 framed-curtains">

    <div class="block calculate m-b-60 none">
      <div class="calc p-16">
        <h3 class="txt-center">Калькулятор</h3>
        <img src="<?php echo get_bloginfo('template_url'); ?>/img/calc-icon.svg";>
        <h5>Нажмите для рассчета</h5>
      </div>
  </div>
  
    <div id="main-block" class="block flex p-b curtains-main framed-curtains-b">
        <div class="curtains-home shadow flex ">
            <h1 class="txt-center">Шторы плиссе в рамке</h1>
            <div class="txt-grey">
                <div>
                Шторы плиссе — яркий элемент дизайна вашего интерьера, а также надёжная защита дома от солнечного света. Шторы плиссе открываются как снизу-вверх, так и сверху вниз, при этом могут быть зафиксированы в выбранном положении.Это дает широкий диапазон для регулировки потока солнечных лучей в помещении.
                </div>
            </div>
            <div class="color-curtains flex">
                <h5 class="p-b-16">Подбери свой цвет штор</h5>
                <div class="textile">
                    <h6 class="p-b-16 weight">Полотно шторы</h6>
                    <div class="color-ul items-slick-page">
                        <div class="color-li slide-page">
                            <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/white-color.svg";>
                            <h6>Белый Ral 9016</h6>
                        </div>
                        <div class="color-li slide-page">
                            <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/beige-color.svg";>
                            <h6>Бежевый Ral 1013</h6>
                        </div>
                        <div class="color-li slide-page">
                            <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/blue-green-color.svg";>
                            <h6>Сине-зеленый</h6>
                        </div>
                        <div class="color-li slide-page">
                            <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/black-grey-color.svg";>
                            <h6>Антрацитово-кремовый</h6>
                        </div>
                        <div class="color-li slide-page">
                            <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/cream-color.svg";>
                            <h6>Кремовый Ral 8017</h6>
                        </div>
                        <div class="color-li slide-page">
                            <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/mokko-color.svg";>
                            <h6>Мокко</h6>
                        </div>
                        <div class="color-li slide-page">
                            <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/olive-color.svg";>
                            <h6>Оливковый</h6>
                        </div>
                        <div class="color-li slide-page">
                            <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/grey-color.svg";>
                            <h6>Серый Ral 7040</h6>
                        </div>
                        <div class="color-li slide-page">
                            <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/black-grey-color.svg";>
                            <h6>Антрацитово-кремовый</h6>
                        </div>
                        <div class="color-li slide-page">
                            <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/black-grey-color.svg";>
                            <h6>Антрацитово-кремовый</h6>
                        </div>
                    </div>
                </div>
                <div class="textile">
                    <h6 class="p-b-16 weight">Профиль</h6>
                    <div class="color-ul items-slick-page">
                        <div class="color-li slide-page">
                            <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/black-pr.png";>
                            <h6>Черный Ral 9016</h6>
                        </div>
                        <div class="color-li slide-page">
                            <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/white-pr.png";>
                            <h6>Белый Ral 9016</h6>
                        </div>
                        <div class="color-li slide-page">
                            <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/beige-pr.png";>
                            <h6>Бежевый Ral 9016</h6>
                        </div>
                        <div class="color-li slide-page">
                            <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/mos-icon/icon.png";>
                            <h6>Любой цвет на ваш выбор</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="curtains-photo">
            <img class="main-photo" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/photo-page-3.png";>
        </div>
    </div>

    <div class="block calculate m-b-60 calculate-none">
        <div class="calc p-16">
        <h3 class="txt-center">Калькулятор</h3>
        <img src="<?php echo get_bloginfo('template_url'); ?>/img/calc-icon.svg";>
        <h5>Нажмите для рассчета</h5>
        </div>
        <div id="form-order-calculation" class="bcg-dark curve txt-center">
        <div>
            <h3 class="p-b-40">Закажите замер и рассчитайте стоимость</h3>

            <?php echo do_shortcode( '[contact-form-7 id="66f05f1" title="Контактная форма 1"]' ); ?>

        </div>
        </div>
    </div>

    <div id="curtains-direction" class="block flex">
    <div class="curtains-direction-photo">
      <img class="photo-youtube" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/photo-max.png";>
    </div>
    <div class="curtains-direction-text shadow border-c lh-130 p-24">
      <h1 class="txt-center p-b-16">Замер</h1>
      <div>
        <div class="txt-grey">
          <p>Раздвижные москитные системы устанавливаются на любые типы окон, включая мансардные, любые двери и дверные проёмы, портальные системы, системы, беседки, террасы, мангальные зоны и другие проёмы.</p>
          <p>1. Необходимо замерить ширину светового проёма в 3-х местах:</p>
          <div class="cont p-cont">
            <p>в нижней части проёма,</p>
            <p>в центре проёма,</p>
            <p>в верхней части проёма</p>
            </div>
            <p class="weight">Взять наименьший размер из полученных.</p>
            <p>2. Необходимо замерить высоту светового проёма в 3-х местах:</p>
            <div class="cont p-cont">
                <p>в левой части проёма,</p>
                <p>в центре проёма,</p>
                <p>в правой части проёма</p>
            </div>
            <p class="weight">Взять наименьший размер из полученных.</p>
            <p>3. Необходимо добавить к размерам ширины и высоты с каждой стороны по: 40 мм (Система Smart), 25 мм (Система Slim)</p>
            <p>4. Если необходимо сетку опустить максимально вниз (на пол), то нужно замерить размер от светового проёма до пола и добавить полученный результат к размеру высоты.</p>
        </div>
      </div>
    </div>
  </div>
  <div id="curtains-direction" class="block flex">
  <div class="curtains-direction-text shadow border-c p-24">
    <h1 class="txt-center p-b-16">Монтаж</h1>
      <div>
        <div class="txt-grey txt">
          <p>Готовую москитную систему совместить с изделием или проёмом, на который планируется установка</p>
          <p>При необходимости зафиксировать москитную систему</p>
          <p>Выставить москитную систему по уровню</p>
          <p>Закрутить саморезы в специальные отверстия по 4-м углам москитной системы.</p>
        </div>
      </div>
    </div>
    <div class="curtains-direction-photo reverse">
      <img class="photo-youtube" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/photo-curtains-m.png";>
    </div>
  </div>

  <div id="projects" class="block">
    <div class="slider-line-1">
      <div><img src="<?php echo get_bloginfo('template_url'); ?>/img/slider/slide-1.png" alt=""></div>
      <div><img src="<?php echo get_bloginfo('template_url'); ?>/img/slider/slide-2.png" alt=""></div>
      <div><img src="<?php echo get_bloginfo('template_url'); ?>/img/slider/slide-3.png" alt=""></div>
      <div><img src="<?php echo get_bloginfo('template_url'); ?>/img/slider/slide-4.png" alt=""></div>
    </div>
    <div class="slider-line-2">
      <div><img src="<?php echo get_bloginfo('template_url'); ?>/img/slider/slide-5.png" alt=""></div>
      <div><img src="<?php echo get_bloginfo('template_url'); ?>/img/slider/slide-6.png" alt=""></div>
      <div><img src="<?php echo get_bloginfo('template_url'); ?>/img/slider/slide-7.png" alt=""></div>
      <div><img src="<?php echo get_bloginfo('template_url'); ?>/img/slider/slide-8.png" alt=""></div>
    </div>
  </div>

  <div id="feedback">
        <div id="form-order-calculation" class="block m-b-60 bcg-dark curve txt-center">
            <div>
                <h3 class="p-b-40">Оставьте заявку</h3>

                    <?php echo do_shortcode( '[contact-form-7 id="66f05f1" title="Контактная форма 1"]' ); ?>

            </div>
        </div>
    </div>

    <div id="curtain-care" class="block text-grey-1">
    <h1 class="p-b-16">Уход за маскитными сетями плиссе</h1>
    <div class="curtain-care-info flex">
      <div class="photo-curtains-sm">
        <img class="" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/photo-curtains-m.png";>
        <div class="photo-curtains-sm-txt m-t-16">
          <p>Не рекомендуется сушить шторы плиссе на отопительных приборах у источника высокой температуры и гладить утюгом.</p>
        </div>
      </div>
      <div class="curtain-care-info-txt p-8">
        <div class="p-8 cont">
          <p class="p-t-b-11">Уберите мусор из нижней направляющей</p>
          <p class="p-t-b-11">Раскройте полотно москитной сетки плиссе</p>
          <p class="p-t-b-11">Очистите полотно москитной сетки с помощью пылесоса, используя насадку с щеткой</p>
          <p class="p-t-b-11">При необходимости используйте влажную губку или баллон с сжатым воздухом</p>
          <p class="p-t-b-11">Смажьте направляющие силиконовой смазкой</p>
        </div>
      </div>
    </div>
  </div>

    <div id="color-solutions" class="block">
        <div class="slider-line-1">
            <div>
                <img src="<?php echo get_bloginfo('template_url'); ?>/img/slider/standart.png" alt="">
                <div class="color-solutions-txt p-t-16">
                    <p>Стандарт</p>
                </div>
            </div>
            <div>
                <img src="<?php echo get_bloginfo('template_url'); ?>/img/slider/unstandart.png" alt="">
                <div class="color-solutions-txt p-t-16">
                    <p>Антикошка</p>
                </div>
            </div>
        </div>
        <div class="slider-line-2">
        <div>
            <img src="<?php echo get_bloginfo('template_url'); ?>/img/slider/white.png" alt="">
            <div class="color-solutions-txt p-t-16">
                <p>Белый</p>
            </div>
        </div>
        <div>
            <img src="<?php echo get_bloginfo('template_url'); ?>/img/slider/grey.png" alt="">
            <div class="color-solutions-txt p-t-16">
                <p>Серый</p>
            </div>
        </div>
        <div>
            <img src="<?php echo get_bloginfo('template_url'); ?>/img/slider/brown.png" alt="">
            <div class="color-solutions-txt p-t-16">
                <p>Коричневый</p>
            </div>
        </div>
        <div>
            <img src="<?php echo get_bloginfo('template_url'); ?>/img/slider/beige.png" alt="">
            <div class="color-solutions-txt p-t-16">
                <p>Бежевый</p>
            </div>
        </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>