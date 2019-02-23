<div class="news__item">
	<div class="news__block">
		<div class="news__item__photo">
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">	
		</div>
		<div class="news__item__content">
			<div class="news__item__title">
				<?php the_title(); ?>
			</div>
			<div class="news__item__text">
				<?php the_content(); ?>
			</div>
			<div class="news__item__more">
				<a href="<?php the_permalink(); ?>">
					<div class="my-btn-more">
						Подробнее <i class="fas fa-chevron-right"></i>	
					</div>
				</a>
			</div>
		</div>
	</div>
</div>