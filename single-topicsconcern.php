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
				$tertiary_page_intro = get_field('tertiary_page_intro');
				$key_issues_content = get_field('key_issues_content');
        $size = "full";
      ?>
        <section>

					<section>
		        <div>
		          <h3><span class="highlight highlight-wrapping highlight-red"><?php the_title(); ?></span></h3>
		        </div>

		        <div>
		            <a href="<?php the_field('download'); ?>" class="" target="_blank">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red.png, <?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red@2x.png 2x"class="inline-icon" alt="download">
									Topics of Concern
		            </a>
		        </div>

		      </section>
		      <!-- end of section 1 -->

          <section class="content">
						<div>
							<h2 class="page-intro"><?php the_field('tertiary_page_intro'); ?></h2>
						</div>

            <div>

							<ul class="accordion">
							  <li>
							    <input type="checkbox" checked>
							    <i></i>
							    <h2>Key Issues</h2>
									<div class="accordion-bullet-item"><?php the_field('key_issues_content'); ?></div>
							  </li>
							  <li>
							    <input type="checkbox" checked>
							    <i></i>
							    <h2>Elements of Change</h2>
							    <div class="accordion-bullet-item">Using the sibling and checked selectors, we can determine the styling of sibling elements based on the checked state of the checkbox input element. One use, as demonstrated here, is an entirely CSS and HTML accordion element. Media queries are used to make the element responsive to different screen sizes.</div>
							  </li>
							  <li>
							    <input type="checkbox" checked>
							    <i></i>
							    <h2>Third</h2>
							    <div class="accordion-bullet-item">By making the open state default for when :checked isn't detected, we can make this system accessable for browsers that don't recognize :checked. The fallback is simply an open accordion. The accordion can be manipulated with Javascript (if needed) by changing the "checked" property of the input element.</div>
							  </li>
							</ul>


            </div>

            <div class="download-buttons">
              <p>
								<a href="<?php the_field('download_file_1'); ?>" class="" target="_blank">
									<?php the_title(); ?>
									<?php the_field('download_button_text_1'); ?>
								</a>
							</p>
						</div>

						<div class="related">
  		        <h3><?php the_field('related_topics_of_concern_header'); ?></h3>
  		        <p>
								<a href="<?php the_field('related_topic_link_1'); ?>" class="btn btnTeal btnSide" target="_blank"><?php the_field('related_topic_text_1'); ?></a>
							</p>
  		        <p>
								<a href="<?php the_field('related_topic_link_2'); ?>" class="btn btnTeal btnSide" target="_blank"><?php the_field('related_topic_text_2'); ?></a>
							</p>
  		        <p>
								<a href="<?php the_field('related_topic_link_3'); ?>" class="btn btnTeal btnSide" target="_blank"><?php the_field('related_topic_text_3'); ?></a>
							</p>
  		        <h3><?php the_field('related_reports_title'); ?></h3>
  		        <p>
								<a href="<?php the_field('related_reports_link'); ?>"><?php the_field('related_reports_content'); ?></a>
							</p>
						</div>

          <?php endwhile; // end of the loop. ?>
        </section>

		</main><!-- #main -->
	</div><!-- #primary -->



	<?php


get_footer();
