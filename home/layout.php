<?php 

// the query
$args = [
  'post_type' => 'post'
];

$the_query = new WP_Query( $args ); ?>

  <!-- pagination here -->

  <div class="container">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          
          <h2 class="strong-headline">Do You Really Want to Be Here?</h2>

          <p class="text-center">Let me ask you a question, <em>"Do you wake up in the morning and wish you had more time?"</em> or maybe I should re-phrase this... <em>"Do you believe you would be happier working a different career, living on less but having more money, OR possibly, living in another country?"</em>. The purpose of this website is to provide <strong>YOU AND MYSELF</strong> with the resources, motivation and tips on how we can escape the "Western Culture".</p>

          <?php if ( $the_query->have_posts() ) : ?>
          
          <h2 class="strong-headline">Let's Get Started</h2>

            <!-- the loop -->
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="well post-snippet">
                <h2>
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <hr>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn btn-black">Read Thoughts</a>
              </div>
            <?php endwhile; ?>
            <!-- end of the loop -->

            <!-- pagination here -->
            <?php wp_reset_postdata(); ?>

          <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>

        </div><!-- col -->
      </div><!-- row -->
    </div><!-- wrapper -->
  </div>