<?php

function create_post_type() {
  register_post_type( 'dyktanty',
    array(
      'labels' => array(
          'name' => __( 'Диктанти' ),
          'singular_name' => __( 'Диктант' )
      ),
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'show_in_rest' => false,
      'menu_icon' => 'dashicons-feedback',
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'revisions', 'page-attributes' ),
    )
  );
  
}
add_action( 'init', 'create_post_type' );