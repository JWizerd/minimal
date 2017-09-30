<main class="container content-wrapper">
  <div class="row">
    <div class="col-md-6 col-md-offset-3 post">

      <div class="post-details text-center">
        <h2 class="post-title"><?php the_title(); ?></h2>
        <hr class="post-divider">
      </div>

      <ul class="archives">
        <?php 
        wp_get_archives( 
          array( 'type'  => 'monthly', 
                 'limit' => 12,
                 'order' => 'ASC'
               ) 
          ); 
        ?>
      </ul>
    </div><!-- col -->
  </div><!-- row -->
</main>