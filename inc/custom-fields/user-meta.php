<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_user_options' );
function crb_user_options() {
Container::make( 'user_meta', 'Доп инфа' )
    ->add_fields( array(
        Field::make( 'image', 'crb_user_ava', 'Аватарка' )->set_value_type( 'url'),
        Field::make( 'rich_text', 'crb_user_content', 'Описание' ),
    ) );
  }

?>