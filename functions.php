<?php

if ( ! defined( 'TREBAWP_VERSION' ) ) {
	define( 'TREBAWP_VERSION', '1.0.0' );
}

if ( ! function_exists( 'treba_wp_setup' ) ) :
	function treba_wp_setup() {
		load_theme_textdomain( 'treba-wp', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		// add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'header' => esc_html__( 'Header', 'treba-wp' ),
        'footer' => esc_html__( 'Footer', 'treba-wp' ),
        'mobile' => esc_html__( 'Mobile', 'treba-wp' ),
        
			)
		);

		add_theme_support(
			'html5',
			array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script')
		);
	}
endif;
add_action( 'after_setup_theme', 'treba_wp_setup' );

include('inc/enqueues.php');
include('inc/share-social.php');
include('inc/comments-functions.php');
// include('inc/create-custom-posts.php');
// include('inc/create-custom-taxonomy.php');
include('inc/super-links/super-functions.php');


require_once get_template_directory() . '/inc/custom-fields/settings-meta.php';
require_once get_template_directory() . '/inc/custom-fields/post-meta.php';
require_once get_template_directory() . '/inc/custom-fields/term-meta.php';

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function itsme_disable_feed() {
 wp_die( __( 'No feed available, please visit the <a href="'. esc_url( home_url( '/' ) ) .'">homepage</a>!' ) );
}

add_action('do_feed', 'itsme_disable_feed', 1);
add_action('do_feed_rdf', 'itsme_disable_feed', 1);
add_action('do_feed_rss', 'itsme_disable_feed', 1);
add_action('do_feed_rss2', 'itsme_disable_feed', 1);
add_action('do_feed_atom', 'itsme_disable_feed', 1);
add_action('do_feed_rss2_comments', 'itsme_disable_feed', 1);
add_action('do_feed_atom_comments', 'itsme_disable_feed', 1);
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );

/**
 * Enqueue scripts and styles.
 */
function trebawp_scripts() {
	wp_enqueue_style( 'tailwind', get_stylesheet_directory_uri() . '/build/tailwind.css', false, time() );
	wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/build/style.css', false, time() );
	
	wp_enqueue_script( 'all-scripts', get_template_directory_uri() . '/build/scripts.js', '','',true);

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'trebawp_scripts' );

function get_page_url($template_name) {
  $pages = get_posts([
    'post_type' => 'page',
    'post_status' => 'publish',
    'meta_query' => [
      [
        'key' => '_wp_page_template',
        'value' => $template_name.'.php',
        'compare' => '='
      ]
    ]
  ]);
  if(!empty($pages))
  {
    foreach($pages as $pages__value)
    {
      return get_permalink($pages__value->ID);
    }
  }
  return get_bloginfo('url');
}

//Add Ajax
add_action('wp_head', 'myplugin_ajaxurl');
function myplugin_ajaxurl() {
  echo '<script type="text/javascript">
    var ajaxurl = "' . admin_url('admin-ajax.php') . '";
  </script>';
}

//Update TimeToRead 
function update_time_read( ) {
  //Get data
  $post_id = stripslashes_deep($_POST['post_id']);
  $time_var = stripslashes_deep($_POST['time_var']);
  update_post_meta( $post_id, 'post_time_read', $time_var );
  wp_die();
}
add_action( 'wp_ajax_nopriv_update_time_read_action', 'update_time_read' );
add_action( 'wp_ajax_update_time_read_action', 'update_time_read' );

add_filter('get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_author()) {
    $title = '<span class="vcard">' . get_the_author() . '</span>';
  } elseif (is_tax()) { //for custom post types
    $title = sprintf(__('%1$s'), single_term_title('', false));
  } elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
  }
  return $title;
});

function wpa_course_post_link( $post_link, $id = 0 ){
    $post = get_post($id);  
    if ( is_object( $post ) ){
        $terms = wp_get_object_terms( $post->ID, 'board' );
        if( $terms ){
          return str_replace( '%board%' , $terms[0]->slug , $post_link );
        }
    }
    return $post_link;  
}
add_filter( 'post_type_link', 'wpa_course_post_link', 1, 3 );

function tutCount($id) {
  if ( metadata_exists( 'post', $id, 'post_count' ) ) {
    $count_value = get_post_meta( $id, 'post_count', true );
    $count_value = $count_value + 1;
    update_post_meta( $id, 'post_count', $count_value );
  } else {
    $rand_item_count = mt_rand(50, 144);
    add_post_meta( $id, 'post_count', $rand_item_count, true);
  }
  $post_count = get_post_meta( $id, 'post_count', true );
  return $post_count;
}

function getMeta($id) {
  // Количество оценок
  $meta_rating_count = 'rating_count_'.$id;
  $random_rating_count = mt_rand(5, 30);
  if ( ! metadata_exists( 'post', $id, $meta_rating_count ) ) {
    add_post_meta( $id, $meta_rating_count, $random_rating_count, true);
  }

  // Рейтинг объявления
  $meta_rating_item = 'rating_item_'.$id;
  $random_rating_item = mt_rand(0, 99);
  $value_rating_item = '4.'.$random_rating_item;
  if ( ! metadata_exists( 'post', $id, $meta_rating_item ) ) {
    add_post_meta( $id, $meta_rating_item, $value_rating_item, true);
  }

  // Успешных продаж
  $meta_success_item = 'success_item_'.$id;
  $random_success_item = mt_rand(0, 15);
  if ( ! metadata_exists( 'post', $id, $meta_success_item ) ) {
    add_post_meta( $id, $meta_success_item, $random_success_item, true);
  }
}

// хвилин читання
function getTimeReading($post_id) {
  $content = get_post_field( 'post_content', $post_id );
  $count_words = str_word_count($content);
  $time = floor($count_words / 110);
  return $time;
}