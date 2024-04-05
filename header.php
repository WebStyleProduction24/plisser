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
    <a href="/"><div class="logo"><img src="<?php echo get_bloginfo('template_url'); ?>/img/logo-header.png" alt=""></div></a>
    <nav class="d-md-none">
      <ul class="flex">
        <li><a href="/curtains-plisse">Шторы плиссе</a></li>
        <li><a href="/curtains-in-frame">Шторы в рамке</a></li>
        <li><a href="/mosquito-nets">Москитные сетки</a></li>
        <li><a href="#dilers">Информация</a></li>
        <li><a href="#contacts">Контакты</a></li>
      </ul>
    </nav>
    <div class="contacts flex">
      <div class="tg-icon"><a href="https://t.me/+79204155111" target="_blank"></a></div>
      <div class="wa-icon"><a href="https://wa.me/79204155111" target="_blank"></a></div>
      <a href="tel:78002223655" class="d-md-none phone-number">8 800 222-36-55</a>
    </div>
    
  </header>