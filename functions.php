<?php
// Подключение CSS и JS
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
  wp_enqueue_style( 'style-wsp24', get_stylesheet_uri() );


  wp_enqueue_style( 'style-cdn-jsdelivr', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );

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