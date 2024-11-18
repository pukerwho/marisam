<?php
/*
Template Name: БЛОГ
*/
?>
<?php get_header(); ?>

<div class="container pt-6">
  <div class="flex flex-wrap flex-col lg:flex-row lg:-mx-4 mb-8">
    <div class="w-full lg:w-2/3 lg:px-4 mb-12 lg:mb-0">
      <h1 class="text-3xl font-semibold border-l-4 border-blue-500 pl-6 mb-6"><?php _e("Всі статті", "treba-wp"); ?></h1>
      <div class="flex flex-wrap lg:-mx-4">
        <?php 
          global $wp_query, $wp_rewrite;  
          $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
          $all_posts = new WP_Query( array( 
            'post_type' => 'post', 
            'paged' => $current,
            'posts_per_page' => 10,
          ) );
          if ($all_posts->have_posts()) : while ($all_posts->have_posts()) : $all_posts->the_post(); 
        ?>
          <div class="w-full lg:w-1/2 lg:px-4 mb-8">
            <?php get_template_part('template-parts/post-item'); ?>
          </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
      <div class="b_pagination text-center mb-12">
        <?php 
          $big = 9999999991; // уникальное число
          echo paginate_links( array(
            'format' => '?paged=%#%',
            'total' => $all_posts->max_num_pages,
            'current' => $current,
            'prev_next' => true,
            'next_text' => (''),
            'prev_text' => (''),
          )); 
        ?>
      </div>
    </div>
    <div class="w-full lg:w-1/3 lg:px-4">
      <?php get_template_part('template-parts/sidebar'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>