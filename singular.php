<?php get_header(); ?>

<main class="p-t-30 pages-curt <?php class_page(); ?>">

  <div class="block calculate m-b-60 none shadow">
    <div id="calculator-widget-medium"></div>
    <div id="form-order-calculation" class="bcg-dark curve txt-center">
      <div>
        <h3 class="p-b-40">Оставьте заявку</h3>
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
      <img class="main-photo" src="<?php main_img_page(); ?>">
    </div>
  </div>

  <div class="block calculate calculate-none">
    <div id="calculator-widget-large"></div>
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