<?php
/**
 * The template for displaying the policing by the numbers page
 *
 *
 * @package GeneratePress Child
 */

get_header(); ?>

	<div id="primary">
		<main id="main">
      <?php while ( have_posts() ) : the_post();
        $feature_image = get_field('feature_image');
        $feature_title = get_field('feature_title');
        $download = get_field('download');
        $download_button_text = get_field('download_button_text');
        $related_topic_text_1 = get_field('related_topic_text_1');
        $related_topic_text_2 = get_field('elated_topic_text_2');
        $related_topic_text_3 = get_field('related_topic_text_3');
        $related_topic_link_1 = get_field('related_topic_link_1');
        $related_topic_link_2 = get_field('related_topic_link_2');
        $related_topic_link_3 = get_field('related_topic_link_3');
        $related_topics_of_concern_header = get_field('related_topics_of_concern_header');
        $size = "full";
        ?>
        <section>
          <div class="home-section hero" style="background-image: url(<?php echo $feature_image; ?>);">
            <div class="hero-content grid">
              <h2><?php the_field('feature_title'); ?></h2>
              <p><a href="<?php the_field('download'); ?>" class="btn btnRed btnHero" target="_blank"><?php the_field('download_button_text'); ?></a></p>
            </div>
          </div>

          <div class="grid content-container content-grid-3">
            <div class="social-bar">
              <?php echo do_shortcode('[Sassy_Social_Share style="background-color:#ffffff;"]') ?>
            </div>
            <div class="page-content">
              <?php the_content(); ?>
            </div>
            <div>
		              <h3><?php the_field('related_topics_of_concern_header'); ?></h3>
		              <p><a href="<?php the_field('related_topic_link_1'); ?>" class="btn btnTeal btnSide" target="_blank"><?php the_field('related_topic_text_1'); ?></a></p>
		              <p><a href="<?php the_field('related_topic_link_2'); ?>" class="btn btnTeal btnSide" target="_blank"><?php the_field('related_topic_text_2'); ?></a></p>
		              <p><a href="<?php the_field('related_topic_link_3'); ?>" class="btn btnTeal btnSide" target="_blank"><?php the_field('related_topic_text_3'); ?></a></p>
						</div>
          </div>

          <?php endwhile; // end of the loop. ?>
        </section>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php


get_footer();
