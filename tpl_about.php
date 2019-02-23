<?php
/*
Template Name: О нас
*/
?>

<?php get_header(); ?>

<div class="p_about">
	<div class="container py-5">
		<div class="row mb-4">
			<div class="col-md-12 d-flex justify-content-center">
				<div class="my-line"></div>
			</div>
		</div>
		<div class="row mb-4">
			<div class="col-md-12 d-flex justify-content-center">
				<div class="b_about__title">
					<?php the_title(); ?>
				</div>
			</div>
		</div>
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