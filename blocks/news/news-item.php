<div class="news__item">
	<div class="news__block">
		<div class="news__item__photo">
			<div class="parallax-window" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="<?php echo get_the_post_thumbnail_url(); ?>"></div>
		</div>
		<div class="news__item__content">
			<div class="news__item__title">
				<?php the_title(); ?>
			</div>
			<div class="news__item__text">
				<?php echo carbon_get_the_post_meta('crb_news_description'); ?>
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