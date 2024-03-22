<?php
/*
Template Name: Шаблон страниы шторы
*/
?>

<?php get_header(); ?>

<main class="p-t-30 curtains">

    <div id="main-block" class="block flex p-b curtains-main">
        <div class="curtains-home shadow flex ">
            <h1 class="txt-center">Шторы плиссе</h1>
            <div class="txt-grey">
                <div>
                Шторы плиссе — яркий элемент дизайна вашего интерьера, а также надёжная защита дома от солнечного света.
                Шторы плиссе открываются как снизу-вверх, так и сверху вниз, при этом могут быть зафиксированы в выбранном положении.
                Это дает широкий диапазон для регулировки потока солнечных лучей в помещении.
                Шторы плиссе являются альтернативой классическим жалюзи.
                Шторы плиссе также идеально подходят для мансардных окон.
                </div>
            </div>
            <div class="color-curtains flex">
                <h5 class="p-b-16">Подбери свой цвет штор</h5>
                <div class="textile">
                    <h6 class="p-b-16 weight">Полотно шторы</h6>
                        <div class="color-ul">
                            <div class="color-li">
                                <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/white-color.svg";>
                                <h6>Белый Ral 9016</h6>
                            </div>
                            <div class="color-li">
                                <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/beige-color.svg";>
                                <h6>Бежевый Ral 1013</h6>
                            </div>
                            <div class="color-li">
                                <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/blue-green-color.svg";>
                                <h6>Сине-зеленый</h6>
                            </div>
                            <div class="color-li">
                                <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/black-grey-color.svg";>
                                <h6>Антрацитово-кремовый</h6>
                            </div>
                            <div class="color-li">
                                <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/cream-color.svg";>
                                <h6>Кремовый Ral 8017</h6>
                            </div>
                            <div class="color-li">
                                <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/mokko-color.svg";>
                                <h6>Мокко</h6>
                            </div>
                            <div class="color-li">
                                <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/olive-color.svg";>
                                <h6>Оливковый</h6>
                            </div>
                            <div class="color-li">
                                <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/grey-color.svg";>
                                <h6>Серый Ral 7040</h6>
                            </div>
                            <div class="color-li">
                                <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/black-grey-color.svg";>
                                <h6>Антрацитово-кремовый</h6>
                            </div>
                            <div class="color-li">
                                <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/black-grey-color.svg";>
                                <h6>Антрацитово-кремовый</h6>
                            </div>
                        </div>
                </div>
                <div class="textile profile">
                  <h6 class="p-b-16 weight">Профиль</h6>
                  <div class="color-ul">
                    <div class="color-li">
                        <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/black-pr.png";>
                        <h6>Черный</h6>
                    </div>
                    <div class="color-li">
                        <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/white-pr.png";>
                        <h6>Белый</h6>
                    </div>
                    <div class="color-li">
                        <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/beige-pr.png";>
                        <h6>Бежевый</h6>
                    </div>
                    <div class="color-li">
                        <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/grey-pr.png";>
                        <h6>Серый</h6>
                    </div>
                    <div class="color-li">
                        <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/black-grey-pr.png";>
                        <h6>Антрацитовый</h6>
                    </div>
                    <div class="color-li">
                        <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/brown-pr.png";>
                        <h6>Коричневый</h6>
                    </div>
                    <div class="color-li">
                        <img class="icon-color" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/alumin-pr.png";>
                        <h6>Алюминиевый</h6>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="curtains-photo">
          <img class="main-photo" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/main-photo.png";>
          <img class="log" src="<?php echo get_bloginfo('template_url'); ?>/img/logo.png" alt="Plisser">
        </div>
    </div>

  <div id="form-order-calculation" class="block m-b-60 bcg-dark curve txt-center">
    <div>
      <h3>Закажите замер и рассчитайте стоимость</h3>
      <form action="">
        <input type="text" placeholder="Имя" id="name" name="name" required>
        <input type="tel" placeholder="+7 (999) 999-99-99"id="phone" name="phone" pattern="^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$" required>
        <input type="submit" value="Отправить">
      </form>
    </div>
  </div>

  <div id="curtains-direction" class="block flex">
    <div class="curtains-direction-photo">
      <img class="photo-youtube" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/photo-youtube.png";>
    </div>
    <div class="curtains-direction-text shadow border-c p-24">
      <h1 class="txt-center p-b-16">Замер</h1>
      <div>
        <div class="txt-grey txt">
          <p>Для точности измерений, пользуйтесь стальной металлической рулеткой;</p>
          <p>будьте внимательны и всегда перепроверяйте себя!</p>
          <p>для заказа штор плиссе необходимо, чтобы точки замера в точности соответствовали представленной выше схеме.</p>
        </div>
      </div>
    </div>
  </div>
  <div id="curtains-direction" class="block flex">
  <div class="curtains-direction-text shadow border-c p-24">
    <h1 class="txt-center p-b-16">Монтаж</h1>
      <div>
        <div class="txt-grey txt">
          <p>Шторы плиссе могут быть установлены внахлёст на створку окна;</p>
          <p>шторы плиссе можно установить в световой проём окна. При этом, штапик должен быть прямым или слегка скошенным и быть глубиной не менее 18 мм;</p>
          <p>шторы плиссе можно установить на мансардное окно.</p>
        </div>
      </div>
    </div>
    <div class="curtains-direction-photo">
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
                <h3>Оставьте заявку</h3>
                <form action="">
                    <input type="text" placeholder="Имя" id="name" name="name" required>
                    <input type="tel" placeholder="+7 (999) 999-99-99"id="phone" name="phone" pattern="^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$" required>
                    <input type="submit" value="Отправить">
                </form>
            </div>
        </div>
    </div>

  <div id="curtain-care" class="block text-grey-1">
    <h1 class="p-b-16">Уход за шторами плиссе</h1>
    <div class="curtain-care-info flex">
      <div class="photo-curtains-sm">
        <img class="" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/photo-curtains-sm.png";>
        <div class="photo-curtains-sm-txt m-t-16">
          <p>Не рекомендуется сушить шторы плиссе на отопительных приборах у источника высокой температуры и гладить утюгом.</p>
        </div>
      </div>
      <div class="curtain-care-info-txt p-8">
        <p class="weight">Шторы Plisser достаточно чистить мягкой щеткой пылесоса вдоль складок или протирать влажной губкой.</p>
        <p class="p-t-8">При необходимости можно легко помыть шторы вручную:</p>
        <div class="p-8 cont">
          <p>Сдвиньте зажимы нитей с крепления и снимите шторы</p>
          <p>Добавьте в теплую воду (t не более 30) моющее средство с нейтральным значением Ph</p>
          <p>Штору в сложенном виду опустите в воду. Аккуратно распрямляйте плиссированную ткань в воде, стараясь не деформировать материал, промывая складки (при необходимости замочите штору на 15 минут)</p>
          <p>Промойте штору чистой водой (можно использовать душ).</p>
          <p>Сложите штору, удалив остатки воды из ткани и профиля.</p>
          <p>Установите зажимы нитей обратно на крепления и оставьте шторы в сложенном виду на 12 часов.</p>
        </div>
      </div>
    </div>
  </div>

  <div id="color-solutions" class="block">
    <div class="slider-line-1">
      <div>
        <img src="<?php echo get_bloginfo('template_url'); ?>/img/slider/white-slider.png" alt="">
        <div class="color-solutions-txt p-t-16">
          <p>Белый RAL 9016</p>
        </div>
      </div>
      <div>
        <img src="<?php echo get_bloginfo('template_url'); ?>/img/slider/grey-slider.png" alt="">
        <div class="color-solutions-txt p-t-16">
          <p>Серый RAL 9016</p>
        </div>
      </div>
      <div>
        <img src="<?php echo get_bloginfo('template_url'); ?>/img/slider/mokko-slider.png" alt="">
        <div class="color-solutions-txt p-t-16">
          <p>Мокко</p>
        </div>
      </div>
      <div>
        <img src="<?php echo get_bloginfo('template_url'); ?>/img/slider/beige-slider.png" alt="">
        <div class="color-solutions-txt p-t-16">
          <p>Бежевый</p>
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

  <div id="contacts" class="block">
    <div class="contacts curve shadow txt-white">
      <h2>Контакты</h2>
      <div>
        <p class="lh-1-5">Главный офис</p>
        <p class="adress"><a href="https://yandex.ru/maps/-/CDF1BJY1" target="_blank">ул. Димитрова, д. 112<br>г. Воронеж<br>394028</a></p>
      </div>
    </div>
    <div id="map-container" class="map shadow">
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8ae9a1c4cc9b4fa79d12b3501ec530e120cbaab8475765ff7967f55f97adb624&amp;width=100%25&amp;height=360&amp;lang=ru_RU&amp;scroll=true"></script>

    </div>
    
  </div>
</main>

<?php get_footer(); ?>