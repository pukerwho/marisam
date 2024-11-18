<div>
  <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-4">
    <div class="text-xl">⭐ <a href="<?php the_permalink(); ?>" class="hover:text-blue-500"><?php the_title(); ?></a></div>
    <?php if (carbon_get_the_post_meta('crb_items_price')): ?>
      <div class="mt-4 lg:mt-0">
        <span class="bg-green-500 text-gray-200 text-center font-bold rounded-lg px-4 py-2"><?php echo carbon_get_the_post_meta('crb_items_price'); ?> грн.</span>
      </div>
    <?php endif; ?>
  </div>
  
  <div class="flex items-center mb-2 xl:mb-3">
    <?php
    $item_categories = get_the_terms( $top_items->ID, 'board' );
    foreach ($item_categories as $item_category){ ?>
      <a href="<?php echo get_term_link($item_category->term_id, 'board') ?>" class="text-sm inline-block bg-blue-100 hover:bg-blue-200 text-black rounded px-2 py-1 mr-2 mb-2 lg:mb-0"><?php echo carbon_get_term_meta( $item_category->term_id, 'crb_category_emoji' ); ?> <?php echo $item_category->name; ?></a> 
    <?php } ?>
  </div>
  <div class="flex items-center text-sm italic text-gray-500 opacity-75">
    <div class="mr-1">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
    </div>
    <?php echo get_the_modified_time('d.m.Y') ?>
  </div>
</div>