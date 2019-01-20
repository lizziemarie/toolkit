<?php
/**
 * The template for displaying the front page.
 *
 *
 * @package GeneratePress Child
 */

get_header();

?>
<div id="primary">
  <main id="main">
    <section class="projects-section">
      <?php $args = array( 'post_type' =>'topics of concern', );
      $query = new WP_Query( $args );?>
      <?php if ( $query->have_posts()) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <!--<div class="showcase">-->

        <p>this is a test</p>

      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
      <!--</div>-->
    </section>

  </main><!-- #main -->
</div><!-- #primary -->

<?php


get_footer();
