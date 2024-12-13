<article class="bg-white overflow-hidden">
  <div class="relative">
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title(); ?>" class="w-full h-48 object-cover rounded-t-xl">
  </div>
  <div class="border border-gray-200 rounded-b-xl p-4">
    <?php $now_categories = get_the_terms( get_the_ID(), 'category' );
    foreach (array_slice($now_categories,0,1) as $now_category){ ?>
      <?php $now_category_color = carbon_get_term_meta($now_category->term_id, 'crb_category_color' ); ?>
      <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-<?php echo $now_category_color; ?>-100 text-<?php echo $now_category_color; ?>-800">
        <span class="w-1 h-1 rounded-full bg-<?php echo $now_category_color; ?>-600 mr-2"></span>
        <?php echo $now_category->name; ?>
      </span>
    <?php } ?>
    
    <div class="font-bold text-xl mt-2"><a href="<?php the_permalink(); ?>" class="hover:text-purple-600"><?php the_title(); ?></a></div>
    <p class="text-gray-600 mt-2">
      <?php 
      $content_text = wp_strip_all_tags( get_the_content() );
      echo mb_strimwidth($content_text, 0, 110, '...');
      unset($content_text);
      ?>
    </p>
    <div class="flex items-center justify-between mt-4">
      <div class="flex items-center">
        <div class="mr-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
        </div>
        <div class="font-medium mr-2">
          <?php if (carbon_get_the_post_meta('crb_post_author')): ?>
            <?php echo carbon_get_the_post_meta('crb_post_author'); ?>
          <?php else: ?>
            <?php echo get_the_author(); ?>
          <?php endif; ?>
          <span class="text-gray-500 text-sm ml-2"><?php echo getTimeReading(get_the_ID()); ?> хв.читання</span>
        </div>
      </div>
      <a href="<?php the_permalink(); ?>" class="text-gray-500 hover:text-gray-700" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" /></svg>
      </a>
    </div>
  </div>
</article>