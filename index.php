<?php get_header(); ?>

<main class="p-t-30">

  <div id="main-block" class="block flex p-b txt-grey">
  
    <div class="product flex curve">
      <a href="#">
        <div class="img-product">
          <img src="<?php echo get_bloginfo('template_url'); ?>/img/products-main/shtori-plisser.png" alt="Шторы плиссе">
          <div class="discont"></div>
        </div>
        <div class="description-product">
          <h4>Шторы плиссе</h4>
          <p>Лёгкая установка</p>
          <p>Регулировка светового потока</p>
          <p>Эстетичный дизайн</p> 
        </div>
      </a>
    </div>
      
    <div class="product flex curve">
      <a href="#">
        <div class="description-product">
          <h4>Москитные сетки</h4>
          <p>Устанавливаются на любые проемы</p>
          <p>Закрывает проемы до 6 метров</p>
          <p>Минимум места в собранном виде</p>
        </div>
        <div class="img-product">
          <img src="<?php echo get_bloginfo('template_url'); ?>/img/products-main/moskits.png" alt="Москитные сетки">
          <div class="discont"></div>
        </div>
      </a>
    </div>
      
    <div class="product flex curve">
      <a href="#">
        <div class="img-product">
          <img src="<?php echo get_bloginfo('template_url'); ?>/img/products-main/shtori-v-ramke.png" alt="Шторы в рамке">
          <div class="discont"></div>
        </div>
        <div class="description-product">
          <h4>Шторы в рамке</h4>
          <p>Оптимально для мансардных окон</p>
          <p>Возможность комбинирования</p>
          <p>с москитной сеткой</p>
        </div>
      </a>
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

  <div id="about" class="block m-b-60 txt-center">
    <div class="curve shadow">
      <h2>Почему PLISSER?</h2>
      <div class="logo"><img src="<?php echo get_bloginfo('template_url'); ?>/img/logo.png" alt="Plisser"></div>
      <div class="content">
        <p>Plisser (гл. французский) — плиссировать, делать складки.</p>
        <p>Полотно у систем PLISSER состоит из материала с волнообразными складками, позволяющими им легко и компактно собираться по принципу гармошки при открытии и закрытии систем, легко освобождая проём.</p>
        <p>Шторы плиссе обеспечивают широкий диапазон регулировки потока солнечных лучей в помещении и фиксируются в выбранном положении, являясь при этом ярким элементом дизайна вашего интерьера.</p>
        <p>Москитные сетки плиссе универсальны и устанавливаются на окна, двери, беседки, террасы и другие проемы.</p>
        <p>Создайте свой мир комфорта и уюта вместе с PLISSER, совершенствуя внешний вид Вашего дома и улучшая качество жизни.</p>
      </div>
    </div>
    <div class="girl"><img src="<?php echo get_bloginfo('template_url'); ?>/img/girl.png" alt=""></div>
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

  <div id="dilers" class="txt-white flex block">
    <div class="welcome block curve lh-1-5">
      <div class="curve shadow">
        <h2 class="txt-center">Приглашаем к сотрудничеству</h2>
        <p class="p-0">Партнерам мы предлагаем:
          <ul>
            <li>Качественную продукцию</li>
            <li>Широкий ассортимент</li>
            <li>Техническую поддержку</li>
            <li>Гибкую ценовую политику</li>
            <li>Индивидуальный подход</li>
          </ul>
        </p>
        <p>Сотрудничество с нами — это возможность расширить горизонты Вашего бизнеса и получить дополнительные источники дохода.</p>
      </div>
    </div>
    <div class="for-dilers block bcg-dark curve shadow txt-center">
      <h2 class="lh-1-5">Дилерам</h2>
      <p>Для вашего удобства разработана система управления заказами и рассчета стоимости <a href="//plisser.pro" class="link-orange-1 underline">plisser.pro</a></p>
      <p>
        <a href="#" class="font-size-16 link-orange-2 link-orange-2">
          <div><img src="<?php echo get_bloginfo('template_url'); ?>/img/plisser-pro.png" alt=""></div>
          <div>Войти в личный кабинет</div>
        </a>
      </p>
      <p><a href="#"><img src="<?php echo get_bloginfo('template_url'); ?>/img/googleplay.png" alt=""></a></p>
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