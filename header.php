<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo get_bloginfo(); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <header class="block hover-text-decoration">
    <div class="logo"><img src="<?php echo get_bloginfo('template_url'); ?>/img/logo-header.png" alt=""></div>
    <nav>
      <ul class="flex">
        <li><a href="shtory-plisse">Шторы плиссе</a></li>
        <li><a href="#">Шторы в рамке</a></li>
        <li><a href="#">Москитные сетки</a></li>
        <li><a href="#">Информация</a></li>
        <li><a href="#">Контакты</a></li>
      </ul>
    </nav>
    <div class="contacts flex">
      <div class="tg-icon"><a href="#"></a></div>
      <div class="wa-icon"><a href="#"></a></div>
      <a href="tel:78002223655" class="phone-number">8 800 222-36-55</a>
    </div>
  </header>