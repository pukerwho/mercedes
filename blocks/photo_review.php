<?php if(carbon_get_the_post_meta('crb_review_photo')): ?>
	<?php $title_img = get_the_title(); ?>
	<a href="<?php echo carbon_get_the_post_meta('crb_review_photo') ?>" data-lightbox="review" data-title="<?php $title_img ?>">
		<img src="<?php echo carbon_get_the_post_meta('crb_review_photo') ?>" alt="">
	</a>	  		
<?php endif ?>