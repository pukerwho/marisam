</div>

<footer class="footer bg-black/90 text-gray-200 py-12 lg:py-20">
  <div class="container mx-auto px-2 lg:px-16">
    <div class="flex flex-col-reverse lg:flex-row flex-wrap lg:-mx-4">
      <div class="w-full lg:w-1/2 lg:px-4">
        <div class="text-3xl font-bold mb-4"><a href="<?php echo home_url(); ?>"><span class="text-purple-600">M</span>arisam<span class="text-purple-600">.</span></a></div>
        <div class="text-lg opacity-75 mb-4">
          Креативні ідеї та корисні поради на кожен день. Ми намагаємося надати вам більше яскравих вражень 🫶❤️
        </div>
        <div class="mb-4">
          <div class="font-semibold mb-4"><?php _e("Друзі", "treba-wp"); ?></div>
          <div>
            <a href="https://kryazh.com.ua/"><img src="https://marisam.com.ua/wp-content/uploads/2025/01/kryazh-favicon.png" alt="Kryazh" width="24"></a>
          </div>
        </div>
        <div class="text-sm opacity-75"><?php echo date("Y"); ?>.</div>
      </div>
      <div class="w-full lg:w-1/4 lg:px-4 mb-6 lg:mb-0">
        <div class="font-semibold mb-4"><?php _e("Навігація", "treba-wp"); ?></div>
        <?php wp_nav_menu([
          'theme_location' => 'footer',
          'container' => 'div',
          'menu_class' => 'footer-menu'
        ]); ?> 
      </div>
      <div class="w-full lg:w-1/4 lg:px-4 mb-6 lg:mb-0">
        <div class="font-semibold mb-4"><?php _e("Зв'язок з нами", "treba-wp"); ?></div>
        <div class="flex items-center">
          <div class="mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-5 h-5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
            </svg>
          </div>
          <div class="font-light">info@marisam.com.ua</div>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="mobile-menu w-full h-full fixed top-0 left-0 bg-white hidden z-1">
  <div class="container px-2">
    <div class="flex items-center justify-between py-4 mb-4">
      <div class="text-3xl font-bold"><a href="<?php echo home_url(); ?>"><span class="text-purple-600">M</span>arisam<span class="text-purple-600">.</span></a></div>
      <div class="flex items-center lg:hidden bg-purple-600 text-white rounded px-2 py-1 menu-close-js">
        <div class="mr-2"><?php _e("Закрити", "treba-wp"); ?></div>
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </div>
      </div>
    </div>
    <div class="mobile-nav mb-6">
      <?php wp_nav_menu([
        'theme_location' => 'header',
        'container' => 'div',
        'menu_class' => 'flex flex-col',
      ]); ?> 
    </div>
    <div class="w-full mb-4">
      <div class="divider"></div>
    </div>
    
    <div class="flex items-center">
      
      <form role="search" method="get" class="w-full search-form flex items-center relative" action="<?php echo home_url( '/' ); ?>">
        <div class="absolute left-3 top-3 text-gray-400">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
          </svg>  
        </div>
        <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" class="w-full border border-gray-200 text-gray-700 shadow-sm rounded-lg px-4 pl-10 py-2" placeholder="Пошук" />
        <input type="hidden" name="post_type" value="places" />
        <input type="submit" class="search-submit hidden" value="<?php echo esc_attr_x( 'Найти', 'submit button' ) ?>" />
      </form>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>