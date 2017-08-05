
<div class="mobile-menu">
  <div class="header-search mobile-search">
    <?php get_search_form(); ?>
  </div>
  <button class="hamburger"></button>
  <button class="cross"></button>
</div>
<div class="primary-nav">
<div class="blue-box"></div>
<?php 
      wp_nav_menu (
        array(
          'theme_location'  =>  'primary'
        )
      );
?>
</div>
