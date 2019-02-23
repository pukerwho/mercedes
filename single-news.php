<?php get_header(); ?>

<div class="p_news">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container py-5">
		<div class="row justify-content-center">
			<div class="col-md-9">
				<div class="p_news__item">
					<div class="p_news__img mb-3">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
					</div>
					<div class="p_news__date px-3 mb-3">
						<?php the_date(); ?>	
					</div>
					<div class="p_news__title px-3 mb-3">
						<?php the_title(); ?>
					</div>
					<div class="p_news__content lead px-3 pb-3">
						<?php the_content(); ?>
					</div>
					<div class="p_news__other">
						<div class="row mb-3">
							<div class="col-md-12">
								<h3 class="px-3">Другие новости: </h3>
							</div>
						</div>
						<div class="row px-3 pb-5">
							<?php 
						  $custom_query_news = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => 3, 'orderby' => 'menu_order' ) );
						  if ($custom_query_news->have_posts()) : while ($custom_query_news->have_posts()) : $custom_query_news->the_post(); ?>
						  	<div class="col-md-4">
						  		<a href="<?php the_permalink(); ?>">
							  		<div class="p_news__other__img mb-3">
							  			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
							  		</div>
							  		<div class="p_news__other__title">
							  			<?php the_title(); ?>
							  		</div>
						  		</a>
						  	</div>
						  <?php endwhile; endif; ?>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>