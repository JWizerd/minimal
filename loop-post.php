<!-- display the post content for a single post THE MAIN WORDPRESS LOOP -->
<?php

  if (have_posts()) : while (have_posts()) : the_post();

      get_template_part('post/layout');

  endwhile;
  else: _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
  endif;

?>
