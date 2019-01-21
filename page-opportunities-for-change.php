<?php
/**
 * The template for displaying the topics of concern landing page
 *
 *
 * @package GeneratePress Child
 */

get_header();

?>
<div id="primary">
  <main id="main">
    <section>
    <?php while ( have_posts() ) : the_post();
      $feature_image = get_field('feature_image');
      $size = "full";
      ?>
    <div class="home-section hero" style="background-image: url(<?php echo $feature_image; ?>);">
      <div>
        <h2><?php the_title(); ?></h2>
        <p><a href="<?php the_field('download'); ?>" target="_blank"><?php the_field('download_button_text'); ?></a></p>
      </div>
    </div>

    <div class="grid">
      <div class="social-bar">
        <?php echo do_shortcode('[Sassy_Social_Share style="background-color:#ffffff;"]') ?>
      </div>
      <div class="page-content">

        <?php the_content(); ?>

      </div>
    </div>

    <section class="projects-section">
      <?php $args = array( 'post_type' =>'opportunities', );
      $query = new WP_Query( $args );?>
      <?php if ( $query->have_posts()) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <!--<div class="showcase">-->

        <a href="<?php the_permalink(); ?>" class="">
          <div class="special-color" style="background-color: <?php the_field('color'); ?>;">
            <h2><?php the_title(); ?></h2>
          </div>
        </a>

      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
      <!--</div>-->
    </section>

    <?php endwhile; // end of the loop. ?>
  </section>

  </main><!-- #main -->
</div><!-- #primary -->

<?php


get_footer();
