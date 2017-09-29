<main class="container content-wrapper">
  <div class="row">
    <div class="col-md-6 col-md-offset-3 post">

      <div class="post-details text-center">
        <h2 class="post-title"><?php the_title(); ?></h2>
        <hr class="post-divider">
      </div>

      <?php the_content(); ?>
      
      <!-- show comment and allow users to leave comments. simply invoke this the comments template tag -->
      <?php comments_template(); ?>

    </div><!-- col -->
  </div><!-- row -->
</main>
