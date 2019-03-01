<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_page_theme_options' );
function crb_page_theme_options() {
  Container::make( 'post_meta', 'Info' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_reviews.php' )
    ->add_fields( array(
        Field::make( 'text', 'crb_review_1', __('1') ),
        Field::make( 'image', 'crb_review_2', __('2') )->set_value_type( 'url'),
    ) );
}

?>