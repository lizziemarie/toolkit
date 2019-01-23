<?php
/**
 * The template for displaying all single topics of concern posts
 *
 *
 */

get_header(); ?>

	<div id="primary">
		<main id="main">
      <?php while ( have_posts() ) : the_post();
        $feature_image = get_field('feature_image');
        $download_file_1 = get_field('download_file_1');
        $download_file_2 = get_field('download_file_2');
        $download_file_3 = get_field('download_file_3');
        $download_button_text_1 = get_field('download_button_text_1');
        $download_button_text_2 = get_field('download_button_text_2');
        $download_button_text_3 = get_field('download_button_text_3');
        $related_topics_of_concern_header = get_field('related_topics_of_concern_header');
        $related_topic_text_1 = get_field('related_topic_text_1');
        $related_topic_text_2 = get_field('related_topic_text_2');
        $related_topic_text_3 = get_field('related_topic_text_3');
        $related_topic_link_1 = get_field('related_topic_link_1');
        $related_topic_link_2 = get_field('related_topic_link_2');
        $related_topic_link_3 = get_field('related_topic_link_3');
        $related_reports_title = get_field('related_reports_title');
        $related_reports_content = get_field('related_reports_content');
				$related_reports_link = get_field('related_reports_link');
        $size = "full";
      ?>
        <section>
          <div class="home-section hero" style="background-image: url(<?php echo $feature_image; ?>);">
          </div>

          <div class="grid content-container content-grid-3">

            <div class="social-bar">
              <?php echo do_shortcode('[Sassy_Social_Share style="background-color:#ffffff;"]') ?>
            </div>

            <div class="page-content">
              <h2 class="intro-blurb"><?php the_title(); ?></h2>
              <?php the_content(); ?>
            </div>

            <div class="grid">

                <div class="download-files">
                  <p><a href="<?php the_field('download_file_1'); ?>" class="btn btnRed btnSide" target="_blank"><?php the_field('download_button_text_1'); ?></a></p>
                  <p><a href="<?php the_field('download_file_2'); ?>" class="btn btnRed btnSide" target="_blank"><?php the_field('download_button_text_2'); ?></a></p>
                  <p><a href="<?php the_field('download_file_3'); ?>" class="btn btnRed btnSide" target="_blank"><?php the_field('download_button_text_3'); ?></a></p>
                </div>

  							<div class="related-content">
  		            <h3><?php the_field('related_topics_of_concern_header'); ?></h3>
  		            <p><a href="<?php the_field('related_topic_link_1'); ?>" class="btn btnTeal btnSide" target="_blank"><?php the_field('related_topic_text_1'); ?></a></p>
  		            <p><a href="<?php the_field('related_topic_link_2'); ?>" class="btn btnTeal btnSide" target="_blank"><?php the_field('related_topic_text_2'); ?></a></p>
  		            <p><a href="<?php the_field('related_topic_link_3'); ?>" class="btn btnTeal btnSide" target="_blank"><?php the_field('related_topic_text_3'); ?></a></p>
  	            </div>

                <div class="related-reports">
  		            <h3><?php the_field('related_reports_title'); ?></h3>
  		            <p><a href="<?php the_field('related_reports_link'); ?>"><?php the_field('related_reports_content'); ?></a></p>
  	            </div>

						</div>

          </div>

          <?php endwhile; // end of the loop. ?>
        </section>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php


get_footer();
