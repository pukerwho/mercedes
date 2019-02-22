<?php
/*
Template Name: Main
*/
?>

<?php get_header(); ?>

<section id="mainslider">
	<?php get_template_part('blocks/b_main-slider'); ?>
</section>

<section id="about">
	<?php get_template_part('blocks/b_about'); ?>
</section>

<section id="news">
	<?php get_template_part('blocks/news/news-grid'); ?>
</section>

<section id="contact">
	<?php get_template_part('blocks/b_contact'); ?>
</section>

<?php get_footer(); ?>