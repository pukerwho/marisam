<?php get_header(); ?>

<div class="flex flex-wrap xl:-mx-3">
  <div class="w-full xl:w-8/12 xl:px-3 mx-auto">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1 class="text-2xl xl:text-3xl font-medium mb-6"><?php the_title(); ?></h1>
      <div class="content">
        <?php the_content(); ?>
      </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</div>

<?php get_footer(); ?>