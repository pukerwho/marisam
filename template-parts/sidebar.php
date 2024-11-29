<h2 class="text-2xl font-bold flex items-center gap-2 mb-6">
  Цікавеньке
  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
  </svg>
</h2>

<!-- Featured Article -->
<?php 
  $sidebar_posts = carbon_get_theme_option('crb_sitebar_posts'); 
  $rand_sidebar_id = array_rand($sidebar_posts);
  $sidebar_id = $sidebar_posts[$rand_sidebar_id]['id'];
?>
<div class="relative rounded-xl overflow-hidden mb-6">
  <a href="<?php echo get_the_permalink($sidebar_id); ?>" class="w-full h-full absolute left-0 top-0 z-1"></a>
  <img src="<?php echo get_the_post_thumbnail_url($sidebar_id, 'large'); ?>" alt="<?php echo get_the_title($sidebar_id); ?>" class="w-full h-48 object-cover">
  <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
  <div class="absolute bottom-0 p-4 text-white">
    <?php $sidebar_categories = get_the_category($sidebar_id); 
    foreach($sidebar_categories as $sidebar_category): ?>
    <?php $sidebar_category_color = carbon_get_term_meta($sidebar_category->term_id, 'crb_category_color' ); ?>
    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-<?php echo $sidebar_category_color; ?>-100 text-<?php echo $sidebar_category_color; ?>-800">
      <span class="w-1 h-1 rounded-full bg-<?php echo $sidebar_category_color; ?>-600 mr-2"></span>
      <?php echo $sidebar_category->cat_name; ?>
    </span>
    <?php endforeach; ?>
    <div class="font-bold text-xl mt-2 mb-2"><?php echo get_the_title($sidebar_id); ?></div>
    <div class="flex items-center text-white">
      <div class="mr-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
      </div>
      <div class="font-semibold text-sm"><?php $author_sidebar_id = get_post_field ('post_author', $sidebar_id); echo get_the_author_meta( 'display_name' , $author_sidebar_id );  ?></div>
    </div>
  </div>
</div>

<!-- Рандомні статті -->
<div class="space-y-4 mb-12">
  <?php 
  $sidebar_rand_posts = new WP_Query( array( 
    'post_type' => 'post', 
    'posts_per_page' => 9,
    'order' => 'DESC',
    'orderby' => 'rand'
  ) );
  if ($sidebar_rand_posts->have_posts()) : while ($sidebar_rand_posts->have_posts()) : $sidebar_rand_posts->the_post(); ?>
  <article class="flex gap-4">
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title(); ?>" class="w-24 h-24 rounded-xl object-cover">
    <div>
      <?php $sidebar_rand_categories = get_the_terms( get_the_ID(), 'category' );
      foreach (array_slice($sidebar_rand_categories,0,1) as $sidebar_rand_category){ ?>
        <?php $sidebar_rand_category_color = carbon_get_term_meta($sidebar_rand_category->term_id, 'crb_category_color' ); ?>
        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs bg-<?php echo $sidebar_rand_category_color; ?>-100 text-<?php echo $sidebar_rand_category_color; ?>-800">
          <span class="w-1 h-1 rounded-full bg-<?php echo $sidebar_rand_category_color; ?>-600 mr-1"></span>
          <?php echo $sidebar_rand_category->name; ?>
        </span>
      <?php } ?>
      <div class="font-bold mt-1"><a href="<?php the_permalink(); ?>" class="hover:text-purple-600"><?php the_title(); ?></a></div>
      <div class="flex items-center text-sm text-gray-500 mt-1">
        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        2 хв.читання
      </div>
    </div>
  </article>
  <?php endwhile; endif; wp_reset_postdata(); ?>
</div>

<h2 class="text-2xl font-bold flex items-center gap-2 mb-6">
  Категорії
  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
  </svg>
</h2>

<div>
  <?php $sidebar_categories = get_terms( array( 
      'taxonomy' => 'category', 
      'parent' => 0, 
      'hide_empty' => false,
    ));
    shuffle($sidebar_categories);
    foreach ( $sidebar_categories as $sidebar_category ): ?>
    <?php $sidebar_dream_category_color = carbon_get_term_meta($sidebar_category->term_id, 'crb_category_color' ); ?>
    <div class="relative flex flex-wrap items-center border border-gray-200 mb-1">
      <a href="<?php echo get_term_link($sidebar_category); ?>" class="w-full h-full absolute left-0 top-0"></a>
      <div class="mr-2 pl-4">
        <img src="<?php echo carbon_get_term_meta($sidebar_category->term_id, 'crb_category_img' ); ?>" alt="<?php echo $sidebar_category->name ?>" loading="lazy" class="w-[55px] h-[55px] min-w-[55px] min-h-[55px] rounded-full object-cover">
      </div>
      <div class="pr-4">
        <div class=""><?php echo $sidebar_category->name ?></div>
        <div class="text-sm text-gray-600"><?php _e("Записей", "web-g"); ?>: <?php echo $sidebar_category->count; ?></div>
      </div>
    </div>
  <?php endforeach; ?>
</div>