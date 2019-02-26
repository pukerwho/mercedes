<!DOCTYPE html>
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
  <div class="wrapper">
  <header id="header" class="header" role="banner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="d-flex align-items-center justify-content-between">
            <div class="header__left d-flex align-items-center">
              <div class="header__logo">
                <a href="<?php echo home_url(); ?>">
                  MedExpress
                  <!-- <img src="<?php bloginfo('template_url') ?>/img/medexpress-logo1.png" alt="">  --> 
                </a>
              </div>
              <div class="header__menu">
                <?php wp_nav_menu([
                  'theme_location' => 'head_left_menu',
                  'container' => 'nav',
                  'container_class' => 'head_left_menu',
                  'menu_id' => 'ul_head_left_menu'
                ]); ?>
              </div>
            </div>
            <div class="header__logo header__center">
              <img src="<?php bloginfo('template_url') ?>/img/medexpress-logo2.png" alt="">
            </div>
            <div class="header__right d-flex align-items-center">
              <div class="header__menu">
                <?php wp_nav_menu([
                  'theme_location' => 'head_right_menu',
                  'container' => 'nav',
                  'container_class' => 'head_right_menu',
                  'menu_id' => 'ul_head_right_menu'
                ]); ?>
              </div>
              <div class="header__social">
                <li><a href="#"><i class="fab fa-vk"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              </div>
              <div class="header__contact">
                <a href="tel:8-800-800-80-80">8-800-800-80-80</a>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </header>
  <section id="content" role="main">