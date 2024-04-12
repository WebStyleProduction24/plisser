<?php

// Подключение CSS и JS
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
  wp_enqueue_style( 'style-wsp24', get_stylesheet_uri() );

  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.3.js', array(), '3.6.3', true);
  wp_script_add_data('jquery', 'integrity', 'sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=');
  wp_script_add_data('jquery', 'crossorigin', 'anonymous');

  wp_enqueue_script( 'main-wsp24', get_template_directory_uri() . '/assets/js/sticky.js', array(), '1.0.0', true );
  wp_enqueue_style( 'style-cdn-jsdelivr', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
  wp_enqueue_script( 'burger-wsp24', get_template_directory_uri() . '/assets/js/burger-menu.js', array(), '1.0.0', true );
  wp_enqueue_script( 'cdn-jsdelivr', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.8.1', true );
  wp_enqueue_script( 'slick-wsp24', get_template_directory_uri() . '/assets/slick/slick-main.js', array(), '1.0.0', true );
  wp_enqueue_script( 'main-wsp24', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );

}


// Favicon 

function wp_favicon() {
  echo '<link rel="icon" href="' . get_bloginfo('template_url') . '/favicon.ico" type="image/x-icon">' . "\n";
}
add_action( 'wp_head', 'wp_favicon' );
add_action( 'admin_head', 'wp_favicon' );


// Функция вывода блока контактов
function contacts() {
  get_template_part('contacts', 'part');
}

// Добавляем поддержку краткого описания страницы
function add_page_excerpt_support() {
    add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'add_page_excerpt_support' );

// Регистрируем метаблок краткого описания страницы в Gutenberg
function add_page_excerpt_metabox() {
    add_meta_box(
        'page-excerpt',
        __('Excerpt', 'textdomain'),
        'render_page_excerpt_metabox',
        'page',
        'side',
        'high'
    );
}
add_action( 'add_meta_boxes', 'add_page_excerpt_metabox' );

// Отображаем метаблок краткого описания страницы
function render_page_excerpt_metabox($post) {
    $excerpt = get_post_meta($post->ID, '_excerpt', true);
    wp_nonce_field(basename(__FILE__), 'page_excerpt_nonce');
    ?>
    <textarea id="page-excerpt" name="excerpt" class="widefat" rows="5"><?php echo esc_textarea($excerpt); ?></textarea>
    <?php
}

// Сохраняем краткое описание страницы
function save_page_excerpt($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!isset($_POST['page_excerpt_nonce']) || !wp_verify_nonce($_POST['page_excerpt_nonce'], basename(__FILE__))) return;
    if (!current_user_can('edit_page', $post_id)) return;

    if (isset($_POST['excerpt'])) {
        update_post_meta($post_id, '_excerpt', sanitize_text_field($_POST['excerpt']));
    }
}
add_action('save_post', 'save_page_excerpt');


// Функция вывода блока с выбором цвета и профиля
function select_color_and_profile() {
  $page_title = get_the_title();

  switch ($page_title) {
  case 'Шторы плиссе': get_template_part('select', 'curtains');
    break;
  case 'Шторы в рамке': get_template_part('select', 'framed');
      break;
  case 'Москитные сетки': get_template_part('select', 'mosquito');
    break;
  }
}

// Функция вывода слайдера выбора цветов и профилей
function slider_colors() {
  if (is_page('Шторы плиссе') || is_page('Шторы в рамке')) {
    get_template_part('slider-color', 'curtains');
  } else if (is_page('Москитные сетки')) {
    get_template_part('slider-color', 'mosquito');
  }
}

// функция вывода контента внутренних страниц
function content() {
  $page_title = get_the_title();

  switch ($page_title) {
  case 'Шторы плиссе': get_template_part('content', 'curtains');
    break;
  case 'Шторы в рамке': get_template_part('content', 'framed');
      break;
  case 'Москитные сетки': get_template_part('content', 'mosquito');
    break;
  }
}

// Функция определения и добавления класса страницы
function class_page() {
  $page_title = get_the_title();

  switch ($page_title) {
  case 'Шторы плиссе': echo 'curtains';
    break;
  case 'Шторы в рамке': echo 'framed-curtains';
      break;
  case 'Москитные сетки':  echo 'mosquito-nets';
    break;
  }

}

// Функция определения и добавления класса к первому блоку внутренней страницы
function class_page_main_block() {
  $page_title = get_the_title();

  $class = ' flex';

  switch ($page_title) {
  case 'Шторы в рамке': echo $class .= ' framed-curtains-b';
      break;
  case 'Москитные сетки': echo $class;
    break;
  }

}

// Функция вывода class=mos-home на странице москитных систем

function class_mos_home() {  
  if (is_page('Москитные сетки')) echo 'mos-home';
}