<?php
/*
Template Name: Отзывы
*/
?>

<?php get_header(); ?>

<div class="p_reviews">
	<!-- Слайдер -->
	<?php get_template_part('blocks/b_main-slider'); ?>
	<!-- Комменты -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Комментарии</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php comments_template(); ?> 
			</div>
		</div>
	</div>
	<!-- Видео отзывы -->
	<div class="container py-3">
		<div class="row mb-5">
			<div class="col-md-12">
				<div class="swiper-container swiper-review-video">
			    <div class="swiper-wrapper">
			    	<?php 
					  $custom_query_video_review = new WP_Query( array( 'post_type' => 'reviews', 'posts_per_page' => -1) );
					  if ($custom_query_video_review->have_posts()) : while ($custom_query_video_review->have_posts()) : $custom_query_video_review->the_post(); ?>
					  	<?php if(carbon_get_the_post_meta('crb_review_video')): ?>
					  	<div class="swiper-slide">
	          		<div class="youtube-player" data-id="<?php echo carbon_get_the_post_meta('crb_review_video') ?>"></div>
	          	</div>
	          	<?php endif ?>
					  <?php endwhile; endif; ?>
				  </div>
				</div>
				<div class="swiper-button-next swiper-review-video-button-next"></div>
	      <div class="swiper-button-prev swiper-review-video-button-prev"></div>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-md-12 text-center">
				<a href="#">
					<div class="my-btn-more">
						Смотреть больше
					</div>
				</a>
			</div>
		</div>
	</div>

	<!-- Фото отзывы --> 
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-12">
				<div class="swiper-container swiper-review-photo">
			    <div class="swiper-wrapper">
			    	<?php 
					  $custom_query_photo_reviews = new WP_Query( array( 'post_type' => 'reviews', 'posts_per_page' => -1, 'nopaging' => true ) );
					  if ($custom_query_photo_reviews->have_posts()) : while ($custom_query_photo_reviews->have_posts()) : $custom_query_photo_reviews->the_post(); ?>
					  	<?php if(carbon_get_the_post_meta('crb_review_photo')): ?>
					  	<div class="swiper-slide">
					  		<a href="<?php echo carbon_get_the_post_meta('crb_review_photo') ?>" data-lightbox="review" data-title="Отзывы">
									<img src="<?php echo carbon_get_the_post_meta('crb_review_photo') ?>" alt="">
								</a>
	          	</div>
	          	<?php endif ?>
					  <?php endwhile; endif; ?>
				  </div>
				</div>
				<div class="swiper-button-next swiper-review-photo-button-next"></div>
      	<div class="swiper-button-prev swiper-review-photo-button-prev"></div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>