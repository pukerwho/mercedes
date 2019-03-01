<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_post_reviews_theme_options' );
function crb_post_reviews_theme_options() {
  Container::make( 'post_meta', 'Info' )
    ->where( 'post_type', '=', 'reviews' )
    ->add_fields( array(
      Field::make( 'text', 'crb_review_video', __( 'Видео') ),
      Field::make( 'image', 'crb_review_photo', __('Фото') )->set_value_type( 'url'),
  ) );
}

?>