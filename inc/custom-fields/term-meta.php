<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_term_options' );
function crb_term_options() {
  Container::make( 'term_meta', __( 'Term Options', 'crb' ) )
  ->add_fields( array(
    Field::make( 'html', 'crb_heading_seo', __( 'SEO Heading' ) )->set_html( sprintf( '<b>SEO</b>' ) ),
    Field::make( 'text', 'crb_category_heading', 'h1' ),
    Field::make( 'text', 'crb_category_title', 'Title' ),
    
    Field::make( 'textarea', 'crb_category_keywords', 'Keywords' ),
    Field::make( 'html', 'crb_heading_info', __( 'INFO Heading' ) )->set_html( sprintf( '<b>INFO</b>' ) ),
    Field::make( 'html', 'crb_heading_settings', __( 'SETTINGS Heading' ) )->set_html( sprintf( '<b>Settings</b>' ) ),
    Field::make( 'image', 'crb_category_img', 'Заглавная картинка' )->set_value_type( 'url'),
    Field::make( 'text', 'crb_category_color', 'Колір' ),
    Field::make( 'checkbox', 'crb_category_home_show', 'Показывать на главной?' ),
  ));
}

?>
