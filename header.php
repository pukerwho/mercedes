<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <base href="/">
  <link rel="alternate" hreflang="x-default" href="<?php echo home_url(); ?>">
  <link rel="alternate" hreflang="en" href="<?php echo home_url(); ?>/en">
  <link rel="alternate" hreflang="ru" href="<?php echo home_url(); ?>/ru">
  <link rel="alternate" hreflang="ua" href="<?php echo home_url(); ?>/ua">
  <?php
  // ENQUEUE your css and js in inc/enqueues.php

    wp_head();
	?>
</head>
<body <?php echo body_class(); ?>>
  <!-- <div class="preloader"></div> -->
  
  <header id="header" class="header" role="banner">
    <div class="container">
      
      <div class="row">
        <div class="col-md-12">
          <div class="d-flex justify-content-center align-items-center">
            <div class="header__logo">
              <a href="<?php echo home_url(); ?>">
                <img src="<?php echo carbon_get_theme_option('crb_header_logo'); ?>" alt="">  
              </a>
            </div>
            <div class="header__menu">
              <?php wp_nav_menu([
                'theme-location' => 'head_menu',
                'container' => 'nav',
                'container_class' => 'head_menu',
                'menu_id' => 'ul_head_menu'
              ]); ?>
            </div>
            <div class="header__social">
              <li><a href="#"><i class="fab fa-vk"></i></a></li>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </div>
            <div class="header__contact">
              <a href="tel:12345678">12345678</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section id="content" role="main">