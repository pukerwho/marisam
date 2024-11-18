<?php 

include('golovolomki-links.php');
include('scast-links.php');
include('treba-links.php');
include('priazovka-links.php');
include('tarakan-links.php');
include('sdam-links.php');
include('autofuture-links.php');
include('leopets-links.php');

function links_activated() {
  global $wpdb;

  $charset_collate = $wpdb->get_charset_collate();

  if($wpdb->get_var("SHOW TABLES LIKE 'super_seo_links'") != 'super_seo_links') {
    $sql = "CREATE TABLE `super_seo_links` (
        `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        `post_URL` varchar(255) NOT NULL,
        `top_links` varchar(255) NOT NULL,
        `q_links` varchar(255) NOT NULL,
        `date_create` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
        PRIMARY KEY (`ID`),
        KEY `post_URL` (`post_URL`),
        KEY `top_links` (`top_links`)
      ) $charset_collate;";

    $wpdb->query( $sql );

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);

    return true;
  }
}

links_activated();

// Check url 
function check_links($post_URL) {
  global $wpdb;
  $check_super_links = $wpdb->get_results(
    "
      SELECT ID
      FROM super_seo_links
      WHERE post_URL = '$post_URL'
    "
  );
  return $check_super_links;
}

// Save new links
function save_links($id) {
  global $wpdb;
  $links = prepare_links();
  foreach($links as $link) {
    $wpdb->query( $wpdb->prepare( 
      "
        INSERT INTO super_seo_links
        ( post_URL, top_links )
        VALUES ( %s, %s)
      ",
      array(
        $id, 
        $link, 
      )
    ) );
  }
}

// Get links
function get_super_links($id) {
  global $wpdb;
  $current_top_links = $wpdb->get_results("SELECT top_links FROM super_seo_links WHERE post_URL = '$id'");
  return $current_top_links;
}

// Get new links 
function prepare_links() {
  $all_links = array();
  $webg = webg_create_link();
  $treba = treba_create_link();
  $sdam = sdam_create_link();
  $tarakan = tarakan_create_link();
  $priazovka = priazovka_create_link();

  $rand_i = mt_rand(1, 3);
  switch ($rand_i) {
    case 1:
      $client = scast_create_link();
      break;
    case 2:
      $client = autofuture_create_link();
      break;
    case 3:
      $client = leopets_create_link();
      break;
  }

  array_push($all_links, $webg, $treba, $sdam, $tarakan, $priazovka, $client); 
  shuffle($all_links);
  return $all_links;
}

// Main function
function super_links($id) {
  $has_links = check_links($id);
	if ( empty( $has_links ) ) {
    save_links($id);
  } 
  $get_links = get_super_links($id);
  return $get_links;
}

?>