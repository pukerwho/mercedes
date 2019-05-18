<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="yandex-verification" content="2e74ade1769c9996" />
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
  <script charset="UTF-8" src="//cdn.sendpulse.com/js/push/31a684b537becfe7051f87dc2c5c822f_0.js" async></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140429702-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-140429702-1');
  </script>
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
     (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
     m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
     (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

     ym(53702755, "init", {
          clickmap:true,
          trackLinks:true,
          accurateTrackBounce:true,
          webvisor:true
     });
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/53702755" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->
</head>

<body <?php echo body_class(); ?>>
  <!-- <div class="preloader"></div> -->
  <div class="wrapper">
  <header id="header" class="header" role="banner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="header__cover">
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
            <div class="mobile-show">
              <div class="mobile-menu">
                <span></span>
                <span></span>
              </div>
              <div class="mobile-cover">
                <?php wp_nav_menu([
                  'theme_location' => 'mobile_menu',
                  'container' => 'div',
                  'container_class' => 'mobile_menu',
                  'menu_class' => 'mobile__link'
                ]); ?>
              </div>
            </div>
            <div class="header__logo header__center">
              <a href="<?php echo home_url(); ?>">
                <img src="<?php bloginfo('template_url') ?>/img/medexpress-logo2.png" alt="">
              </a>
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
                <li><a href="https://vk.com/club182018126" target="_blank"><i class="fab fa-vk"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCgTBwZhoLSXSU7FPd6NYCAg" target="_blank"><i class="fab fa-youtube"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
              </div>
              <div class="header__contact">
                <a href="tel:88005053732">8-800-505-37-32</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section id="content" role="main">