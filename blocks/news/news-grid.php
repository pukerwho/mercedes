<div class="news">
	<div class="container">
		<div class="row news__row mb-5">
			<?php 
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		  $custom_query_news = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => 2, 'orderby' => 'menu_order' ) );
		  if ($custom_query_news->have_posts()) : while ($custom_query_news->have_posts()) : $custom_query_news->the_post(); ?>
		  	<div class="col-md-12 mb-3">
		  		<?php get_template_part('blocks/news/news-item') ?>	
		  	</div>
		  <?php endwhile; endif; ?>
		</div>
		<div class="row text-center mb-5">
			<div class="col-md-12">
				<div class="my-btn-more loadmore">
					Еще новости
				</div>	
			</div>
		</div>
	</div>
</div>