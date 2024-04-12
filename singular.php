<?php get_header(); ?>

<main class="p-t-30 <?php class_page(); ?>">

  <div class="block calculate m-b-60 none shadow">
    <div class="calc p-16">
      <h3 class="txt-center">Калькулятор</h3>
      <img src="<?php echo get_bloginfo('template_url'); ?>/img/calc-icon.svg";>
      <div></div>
      <h5>Нажмите для рассчета</h5>
    </div>
    <div id="form-order-calculation" class="bcg-dark curve txt-center">
      <div>
        <h3 class="p-b-40">Оставте заявку</h3>
        <?php echo do_shortcode( '[contact-form-7 id="66f05f1" title="Контактная форма 1"]' ); ?>
      </div>
    </div>
  </div>

  <div id="main-block" class="block p-b curtains-main<?php class_page_main_block(); ?>">
    <div class="curtains-home <?php class_mos_home(); ?> shadow flex">
      <h1 class="txt-center"><?php the_title(); ?></h1>
      <div class="txt-grey">
        <div class="lh-1-5 txt-justify"><?php if (has_excerpt()) {the_excerpt();} ?></div>
      </div>
      <div class="color-curtains flex"><?php select_color_and_profile(); ?></div>        
    </div>
    <div class="curtains-photo">
      <img class="main-photo" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-curtains/main-photo.png";>
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

  <?php content(); ?>

  <?php slider_colors(); ?>

  <?php contacts(); ?>
  
</main>

<?php get_footer(); ?>