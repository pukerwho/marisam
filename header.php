<?php 
$current_title = wp_get_document_title();
$current_year = date("Y");
// FOR POSTs
if ( is_singular( 'post' ) ) {
  $current_title = get_the_title();
  $post_title = carbon_get_the_post_meta('crb_post_title');
  $post_description = carbon_get_the_post_meta('crb_post_description');
  if ($post_title) {
    $current_title = $post_title;
  }
  if ($post_description) {
    $current_description = $post_description;
  }
}
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php echo $current_title; ?></title>
  <?php if ($current_description): ?>
    <meta name="description" content="<?php echo $current_description; ?>"/>
  <?php endif; ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#1D1E22" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <?php echo carbon_get_theme_option('crb_google_analytics'); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <header class="bg-[#0a0a29] text-white">
    <div class="container mx-auto px-2 lg:px-16 py-4 flex items-center justify-between">
      <div class="flex items-center space-x-8">
        <div class="text-3xl font-bold"><a href="<?php echo home_url(); ?>"><span class="text-purple-600">M</span>arisam<span class="text-purple-600">.</span></a></div>
        <nav class="hidden lg:block">
          <?php wp_nav_menu([
            'theme_location' => 'header',
            'container' => 'ul',
            'menu_class' => 'header-menu flex space-x-4'
          ]); ?> 
        </nav>
      </div>
      <div class="flex items-center space-x-4">
        <div class="hidden lg:block">
          <form role="search" method="get" class="search-form flex items-center relative" action="<?php echo home_url( '/' ); ?>">
            <div class="absolute left-3 top-3 text-gray-400">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
              </svg>  
            </div>
            <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" class="w-auto border border-gray-200 text-gray-700 shadow-sm rounded-lg px-4 pl-10 py-2" placeholder="Пошук" />
            <input type="hidden" name="post_type" value="places" />
            <input type="submit" class="search-submit hidden" value="<?php echo esc_attr_x( 'Найти', 'submit button' ) ?>" />
          </form>
        </div>
        <div class="flex items-center lg:hidden bg-purple-600 text-white rounded px-2 py-1 menu-open-js">
          <div class="mr-2"><?php _e("Меню", "treba-wp"); ?></div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="container mx-auto px-2 lg:px-16 py-8">