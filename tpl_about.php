<?php
/*
Template Name: О нас
*/
?>

<?php get_header(); ?>

<div class="p_about">
	<div class="container py-5">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="row">
			<div class="col-md-12">
				<div class="p_about__content__img">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">	
				</div>
				<div class="p_about__content__text lead">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>