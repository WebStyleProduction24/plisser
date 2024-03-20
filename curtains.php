<?php
/*
Template Name: Шаблон страниы шторы asdas
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
                    <h6 class="p-b-16">Полотно шторы</h6>
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
                <div class="profile"></div>
            </div>
        </div>
        <div class="curtains-photo">

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