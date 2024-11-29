<?php get_header(); ?>

<div class="relative overflow-hidden rounded-lg shadow-lg mb-12">
  <?php 
    $main_posts = carbon_get_theme_option('crb_main_posts');
    $rand_id = array_rand($main_posts);
    $main_id = $main_posts[$rand_id]['id'];
    $main_title = get_the_title($main_id);
    $main_content = get_post_field('post_content', $main_id);
    $main_thumb = get_the_post_thumbnail_url($main_id, 'large');
    $main_categories = get_the_category($main_id);
    $author_id = get_post_field ('post_author', $main_id);
    $display_name = get_the_author_meta( 'display_name' , $author_id ); 
    $main_link = get_the_permalink($main_id);
  ?>
  <div class="relative h-[500px] flex items-center">
    <a href="<?php echo $main_link; ?>" class="w-full h-full absolute left-0 top-0 z-1"></a>
    <div class="absolute w-full h-full left-0 top-0">
      <img src="<?php echo $main_thumb; ?>" alt="<?php echo $main_title; ?>" class="w-full h-full object-cover">
    </div>
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="w-full lg:w-2/3 relative px-8">
      <div class="mb-4">
        <?php foreach($main_categories as $main_category): ?>
          <?php $main_category_color = carbon_get_term_meta($main_category->term_id, 'crb_category_color' ); ?>
          <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-<?php echo $main_category_color; ?>-100 text-<?php echo $main_category_color; ?>-800">
            <span class="w-2 h-2 rounded-full bg-<?php echo $main_category_color; ?>-600 mr-2"></span>
            <?php echo $main_category->cat_name; ?>
          </span>
        <?php endforeach; ?>
      </div>
      <div class="text-4xl text-white font-bold mb-4"><?php echo $main_title; ?></div>
      <div class="text-white mb-4"><?php echo wp_trim_words( $main_content, 25, '...' ); ?></div>
      <div class="flex items-center text-white">
        <div class="mr-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
        </div>
        <div class="font-semibold text-sm"><?php echo $display_name; ?></div>
      </div>
    </div>
  </div>
</div>

<div class="flex justify-center mb-12">
  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
    <?php $home_categories = get_terms( array( 
      'taxonomy' => 'category', 
      'parent' => 0, 
      'hide_empty' => false,
      'meta_query' => array(
        array(
          'key'       => '_crb_category_home_show',
          'value'     => 'yes',
          'compare'   => '='
        )
      )
    ));
    shuffle($home_categories);
    foreach ( array_slice($home_categories, 0, 6) as $home_category ): ?>
      <div class="relative text-center">
        <div class="relative w-20 h-20 mx-auto mb-4">
          <img src="<?php echo carbon_get_term_meta($home_category->term_id, 'crb_category_img' ); ?>" alt="<?php echo $home_category->name ?>" class="absolute inset-0 w-full h-full object-cover rounded-full">
        </div>
        <div class="font-semibold text-lg"><a href="<?php echo get_term_link($home_category); ?>"><?php echo $home_category->name ?></a></div>
        <p class="text-gray-500 text-sm">Статей: <?php echo $home_category->count; ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<section class="mb-12">
  <div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold">Наш вибір</h2>
    <a href="#" class="text-red-500 hover:text-red-600 flex items-center">
      Більше
      <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
      </svg>
    </a>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 cut-block">
    <?php $our_posts = carbon_get_theme_option('crb_our_posts');
    foreach ($our_posts as $our_post): ?>
    <article class="bg-white overflow-hidden">
      <div class="relative">
        <img src="<?php echo get_the_post_thumbnail_url($our_post['id'], 'large'); ?>" alt="<?php echo get_the_title($our_post['id']); ?>" class="w-full h-40 object-cover rounded-t-lg">
      </div>
      <div class="border border-gray-200 rounded-b-lg p-4">
        <?php $our_categories = get_the_category($our_post['id']);
        foreach ($our_categories as $our_category): ?>
        <?php $our_category_color = carbon_get_term_meta($our_category->term_id, 'crb_category_color' ); ?>
        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-<?php echo $our_category_color; ?>-100 text-<?php echo $our_category_color; ?>-800">
          <span class="w-2 h-2 rounded-full bg-<?php echo $our_category_color; ?>-600 mr-2"></span>
          <?php echo $our_category->cat_name; ?>
        </span>
        <?php endforeach; ?>
        <div class="mt-3 text-lg font-semibold leading-tight cut-line"><a href="<?php echo get_the_permalink($our_post['id']); ?>" class="hover:text-purple-600"><?php echo get_the_title($our_post['id']); ?></a></div>
        <div class="mt-4 flex items-center justify-between">
          <div class="flex items-center">
            <div class="mr-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
            </div>
            <div class="font-medium mr-2">
              <?php 
                $author_our_id = get_post_field ('post_author', $our_post['id']);
                $display_our_name = get_the_author_meta( 'display_name' , $author_our_id ); 
                echo $display_our_name;
              ?>
            </div>
          </div>
          <a href="<?php echo get_the_permalink($main_id); ?>" class="text-gray-500 hover:text-gray-700" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" /></svg>
          </a>
        </div>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
</section>

<section class="mb-12">
  <div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold flex items-center gap-2">
      Зараз читають
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
      </svg>
    </h2>
    <a href="#" class="text-red-500 hover:text-red-600 hidden lg:flex items-center">
      Всі статті
      <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
      </svg>
    </a>
  </div>

  <div class="bg-[#FDF7E5] px-4 py-6 lg:p-8 rounded-xl">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 cut-block">
      <?php 
      $new_post = new WP_Query( array( 
        'post_type' => 'post', 
        'posts_per_page' => 9,
        'order' => 'DESC',
        'orderby' => 'rand'
      ) );
      if ($new_post->have_posts()) : while ($new_post->have_posts()) : $new_post->the_post(); ?>
      <article class="flex gap-4">
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title(); ?>" class="w-24 h-20 rounded-xl object-cover">
        <div class="flex flex-col">
          <?php $now_categories = get_the_terms( get_the_ID(), 'category' );
          foreach (array_slice($now_categories,0,1) as $now_category){ ?>
            <?php $now_category_color = carbon_get_term_meta($now_category->term_id, 'crb_category_color' ); ?>
            <span class="text-<?php echo $now_category_color; ?>-600 hover:underline text-sm font-medium flex items-center gap-1">
              <span class="w-1 h-1 rounded-full bg-<?php echo $now_category_color; ?>-600"></span>
              <?php echo $now_category->name; ?>
            </span>
          <?php } ?>
          <div class="font-bold mt-1 mb-1 leading-snug cut-line"><a href="<?php the_permalink(); ?>" class="hover:text-purple-600"><?php the_title(); ?></a></div>
          <div class="flex items-center text-sm text-gray-600">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            2 хв.читання
          </div>
        </div>
      </article>
    <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>
</section>


<div class="grid lg:grid-cols-3 gap-8">
  <!-- Blog -->
  <div class="lg:col-span-2">
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-2xl font-bold flex items-center gap-2">
        Щось новеньке
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </h2>
    </div>

    <div class="grid md:grid-cols-2 gap-6">
      <?php 
        $new_post = new WP_Query( array( 
          'post_type' => 'post', 
          'posts_per_page' => 10,
          'order' => 'DESC'
        ) );
        if ($new_post->have_posts()) : while ($new_post->have_posts()) : $new_post->the_post(); 
      ?>
        <?php get_template_part("template-parts/post-item"); ?>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>

  <!-- Сайдбар -->
  <div class="lg:col-span-1">
    <?php get_template_part("template-parts/sidebar"); ?>
  </div>
</div>

<?php get_footer(); ?>