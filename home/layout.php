<?php 

// the query
$args = [
  'post_type' => 'post',
  'posts_per_page' => 1
];

$the_query = new WP_Query( $args ); ?>

  <!-- pagination here -->

  <div class="container">
    <div class="content-wrapper home-content-wrapper">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">

          <?php if ( $the_query->have_posts() ) : ?>
        
            <!-- the loop -->
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="well post-snippet post">
                <p class="text-center post-thumbnail">
                  <a class="thumbnail-post-link" href="<?php the_permalink(); ?>">
                    <img class="img-responsive featured-post-thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="">
                  </a>
                </p>
                <h2>
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <p class="post-meta">
                  Words by <strong><?php the_author(); ?></strong>
                  on <strong><?php the_date(); ?></strong>
                </p>
                <hr class="post-divider">
                <?php the_content(); ?>
              </div>
            <?php endwhile; ?>
            <!-- end of the loop -->
            <!-- pagination here -->
            <?php the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( 'Back', 'textdomain' ),
                'next_text' => __( 'Onward', 'textdomain' ),
            ) ); ?>

            <?php wp_reset_postdata(); ?>

          <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>

        </div><!-- col -->
      </div><!-- row -->
    </div><!-- wrapper -->
  </div>

  <div class="container-fluid">
    <div class="row">
      <?php  
      // the query
      $args = [
        'post_type' => 'post',
        'posts_per_page' => 1
      ];

      $other_posts = new WP_Query( $args ); 
      ?>
      <?php if ($other_posts->have_posts()) : ?>
        <?php while ($other_posts->have_posts()) : $other_posts->the_post(); ?>
          <div class="col-sm-2">
            <div class="well post-snippet post">
              <p class="text-center post-thumbnail">
                <a class="thumbnail-post-link" href="<?php the_permalink(); ?>">
                  <img class="img-responsive featured-post-thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="">
                </a>
              </p>
              <h2>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <p class="post-meta">
                Words by <strong><?php the_author(); ?></strong>
                on <strong><?php the_date(); ?></strong>
              </p>
              <hr class="post-divider">
              <?php the_excerpt(20); ?>
              <a href="<?php the_permalink(); ?>" class="btn btn-black">Read Thoughts</a>
            </div>
          </div><!-- <col> -->
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>