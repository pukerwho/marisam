<?php get_header(); ?>

<div class="flex flex-wrap flex-col lg:flex-row lg:-mx-4 mb-8">
  <div class="w-full lg:w-2/3 lg:px-4 mb-12 lg:mb-0">
    <div class="mb-12">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
        <?php $countNumber = tutCount(get_the_ID()); ?>
        <!-- BREADCRUMBS -->
        <div class="breadcrumbs text-sm text-gray-800 mb-4" itemprop="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
          <ul class="flex items-center flex-wrap">
            <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem' class="breadcrumbs_item px-3 -ml-3">
              <a itemprop="item" href="<?php echo home_url(); ?>" class="">
                <span itemprop="name"><?php _e( 'Главная', 'treba-wp' ); ?></span>
              </a>                        
              <meta itemprop="position" content="1">
            </li>
            <li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem' class="breadcrumbs_item px-3">
              <a itemprop="item" href="<?php echo get_page_url('page-blog'); ?>" class="">
                <span itemprop="name"><?php _e( 'Статті', 'treba-wp' ); ?></span>
              </a>                        
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumbs_item text-gray-600 px-3">
              <span itemprop="name"><?php the_title(); ?></span>
              <meta itemprop="position" content="3" />
            </li>
          </ul>
        </div>
        <!-- CATEGORY -->
        <div class="relative inline-flex items-center mb-4">
          <?php
          $post_categories = get_the_terms( get_the_ID(), 'category' );
          foreach (array_slice($post_categories,0,1) as $post_category){ ?>
            <?php $post_category_color = carbon_get_term_meta($post_category->term_id, 'crb_category_color' ); ?>
            <a href="<?php echo get_term_link($post_category->term_id, 'category') ?>" class="w-full h-full absolute left-0 top-0"></a>
            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-bold bg-<?php echo $post_category_color; ?>-100 text-<?php echo $post_category_color; ?>-800">
              <span class="w-2 h-2 rounded-full bg-<?php echo $post_category_color; ?>-600 mr-2"></span>
              <?php echo $post_category->name; ?>
            </span>
          <?php } ?>
        </div>
        <h1 class="text-2xl lg:text-3xl lg:leading-10 font-semobild mb-4" itemprop="headline"><?php the_title(); ?></h1>
        <div class="flex flex-wrap items-center mb-6">
          <!-- AUTHOR -->
          <div class="w-1/2 lg:w-auto flex items-center mb-2 lg:mb-0">
            <div class="mr-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
              </svg>
            </div>
            <div class="font-semibold text-gray-700 opacity-75">
              <?php if (carbon_get_the_post_meta('crb_post_author')): ?>
                <span class="italic"><?php echo carbon_get_the_post_meta('crb_post_author'); ?></span>
              <?php else: ?>
                <?php echo get_the_author(); ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="hidden lg:block text-sm px-4">•</div>
          <!-- DATE -->
          <div class="w-1/2 lg:w-auto flex items-center mb-2 lg:mb-0">
            <div class="mr-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
              </svg>
            </div>
            <div class="text-gray-700 opacity-75"><?php echo get_the_date('F j, Y') ?></div>
          </div>
          <div class="hidden lg:block text-sm px-4">•</div>
          <div>
            <span class="text-gray-500"><?php echo getTimeReading(get_the_ID()); ?> хв.читання</span>
          </div>
          <div class="hidden lg:block text-sm px-4">•</div>
          <div class="w-1/2 lg:w-auto flex items-center">
            <div class="mr-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
              </svg>
            </div>
            <div class="text-gray-700 opacity-75"><?php echo $countNumber; ?></div>
          </div>
        </div>
        <div class="mb-6">
          <?php if (get_the_post_thumbnail_url()): ?>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="w-full h-full xl:h-full object-cover rounded-lg mb-6" itemprop="image">
          <?php endif; ?>
        </div>
        <div class="content mb-10" itemprop="articleBody">
          <div class="single-subjects mb-5">
            <div class="text-2xl font-bold uppercase mb-3">
              <?php if (carbon_get_the_post_meta('crb_post_moskal')): ?>
                Содержание
              <?php else: ?>
                Зміст
              <?php endif; ?>
            </div>
            <div class="single-subjects-inner"></div>
          </div>
          <?php the_content(); ?>
        </div>
        <div class="mb-8">
          <div class="text-2xl font-bold mb-6">Обговорення</div>
          <?php comments_template(); ?>
        </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
    <div class="text-2xl font-bold mb-6">
      <?php _e("Схожі статті", "treba-wp"); ?>
    </div>
    <div class="grid md:grid-cols-2 gap-6">
      <?php 
        $current_id = get_the_ID();
        $similar_posts = new WP_Query( array( 
          'post_type' => 'post', 
          'posts_per_page' => 4,
          'order' => 'DESC',
          'post__not_in' => array($current_id),
          'tax_query' => array(
            array(
              'taxonomy' => 'category',
              'terms' => $post_category,
              'field' => 'term_id',
              'include_children' => true,
              'operator' => 'IN'
            )
          ),
        ) );
        if ($similar_posts->have_posts()) : while ($similar_posts->have_posts()) : $similar_posts->the_post(); 
      ?>
        <?php get_template_part("template-parts/post-item"); ?>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>
  <div class="w-full lg:w-1/3 lg:px-4">
    <?php get_template_part('template-parts/sidebar'); ?>
  </div>
</div>

<?php get_footer(); ?>