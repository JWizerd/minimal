<main class="container content-wrapper">
  <div class="row">
    <div class="col-md-6 col-md-offset-3 post">

      <div class="post-details text-center">
        <h2 class="post-title"><?php the_title(); ?></h2>
        <p class="post-meta">
          Words by <strong><?php the_author(); ?></strong>
          on <strong><?php the_date(); ?></strong>
        </p>
        <hr class="post-divider">
      </div>

      <?php the_content(); ?>
      
      <?php// comments_template(); ?>

    </div><!-- col -->
  </div><!-- row -->
</main>
