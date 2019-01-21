<?php
/**
 * The template for displaying all checklists and templates posts
 *
 *
 */

get_header(); ?>

	<div id="primary">
		<main id="main">
      <?php while ( have_posts() ) : the_post();
        $feature_image = get_field('feature_image');
        $download_file_1 = get_field('download_file');
        $download_button_text_1 = get_field('download_button_text');
        $related_chapter_title = get_field('related_chapter_title');
        $related_chapter_button_text = get_field('related_chapter_button_text');
        $related_chapter_file = get_field('related_chapter_file');
        $related_links_title = get_field('related_links_title');
        $related_link_1 = get_field('related_link_1');
        $related_link_2 = get_field('related_link_2');
        $related_link_3 = get_field('related_link_3');
        $related_link_text_1 = get_field('related_link_text_1');
        $related_link_text_2 = get_field('related_link_text_2');
        $related_link_text_3 = get_field('related_link_text_3');
        $size = "full";
      ?>
        <section>

          <div class="grid">

            <div class="social-bar">
              <?php echo do_shortcode('[Sassy_Social_Share style="background-color:#ffffff;"]') ?>
            </div>

            <div class="page-content">
              <h2 class="intro-blurb"><?php the_title(); ?></h2>
              <?php the_content(); ?>
            </div>

            <div>

                <div>
                  <p><a href="<?php the_field('download_file'); ?>" target="_blank"><?php the_field('download_button_text'); ?></a></p>
                </div>

                <div class="related-chapter">
  		            <h3><?php the_field('related_chapter_title'); ?></h3>
  		            <p><?php the_field('related_reports_content'); ?></p>
                  <p><a href="<?php the_field('related_chapter_file'); ?>"><?php the_field('related_chapter_button_text'); ?></a></p>
  	            </div>

  							<div class="related-content">
  		            <h3><?php the_field('related_links_title'); ?></h3>
  		            <p><a href="<?php the_field('related_link_1'); ?>"><?php the_field('related_link_text_1'); ?></a></p>
  		            <p><a href="<?php the_field('related_link_2'); ?>"><?php the_field('related_link_text_2'); ?></a></p>
  		            <p><a href="<?php the_field('related_link_3'); ?>"><?php the_field('related_link_text_3'); ?></a></p>
  	            </div>

						</div>

          </div>

          <?php endwhile; // end of the loop. ?>
        </section>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php


get_footer();
