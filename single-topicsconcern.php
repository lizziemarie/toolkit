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
				$related_topic_icon_1 = get_field('related_topic_icon_1');
				$related_topic_icon_2 = get_field('related_topic_icon_2');
				$related_topic_icon_3 = get_field('related_topic_icon_3');
        $related_reports_title = get_field('related_reports_title');
        $related_reports_content = get_field('related_reports_content');
				$related_reports_link = get_field('related_reports_link');
				$tertiary_page_intro = get_field('tertiary_page_intro');
				$key_issues_content = get_field('key_issues_content');
        $size = "full";
      ?>
        <section>

					<section class="toc-single">
		        <div class="page-title">
		          <h3><span class="highlight highlight-wrapping highlight-red"><?php the_title(); ?></span></h3>
		        </div>

		        <div class="return-toc">
		            <a href="#" class="" target="_blank">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red.png, <?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red@2x.png 2x"class="inline-icon" alt="download">
									Topics of Concern
		            </a>
		        </div>

		      </section>
		      <!-- end of section 1 -->

          <section class="content">
						<div>
							<h2 class="content-intro"><?php the_field('tertiary_page_intro'); ?></h2>
						</div>

          	<p class="tertiary-download-button">
								<a href="<?php the_field('download_file_1'); ?>" class="" target="_blank">
									<?php the_title(); ?>
									DOWNLOAD SECTION
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/download.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/download.png, <?php echo get_stylesheet_directory_uri(); ?>/img/download@2x.png 2x"class="inline-icon" alt="download">
								</a>
						</p>

						<div class="accordion-container">

						  <div class="set" id="accordion-item-1">
						    <a href="#accordion-item-1">
										Key Issues
						      <i class="fa fa-angle-down"></i>
						    </a>
						    <div class="accordion-content">
									<?php the_field('key-issues-content'); ?>
						      <h5>lalaal</h5>
						      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
						      <h5>lalaal</h5>
						      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
						    </div>
						  </div>

						  <div class="set" id="accordion-item-2">
						    <a href="#accordion-item-2">
						      Elements of Change
						      <i class="fa fa-angle-down"></i>
						    </a>
						    <div class="accordion-content">
						      <p> Aliquam cursus vitae nulla non rhoncus. Nunc condimentum erat nec dictum tempus. Suspendisse aliquam erat hendrerit vehicula vestibulum.</p>
						    </div>
						  </div>

						  <div class="set" id="accordion-item-3">
						    <a href="#accordion-item-3">
						      Talking Points
						      <i class="fa fa-angle-down"></i>
						    </a>
						    <div class="accordion-content">
						      <p>Pellentesque aliquam ligula libero, vitae imperdiet diam porta vitae. sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
						    </div>
						  </div>

						  <div class="set" id="accordion-item-4">
						    <a href="#accordion-item-4">
						      Overcoming Opposition
						      <i class="fa fa-angle-down"></i>
						    </a>
						    <div class="accordion-content">
						      <p> Donec tincidunt consectetur orci at dignissim. Proin auctor aliquam justo, vitae luctus odio pretium scelerisque. </p>
						    </div>
						  </div>

							<div class="set" id="accordion-item-5">
						    <a href="#accordion-item-5">
						      How to Make Change
						      <i class="fa fa-angle-down"></i>
						    </a>
						    <div class="accordion-content">
						      <p> Donec tincidunt consectetur orci at dignissim. Proin auctor aliquam justo, vitae luctus odio pretium scelerisque. </p>
						    </div>
						  </div>

							<div class="set" id="accordion-item-6">
						    <a href="#accordion-item-6">
						      External Resources
						      <i class="fa fa-angle-down"></i>
						    </a>
						    <div class="accordion-content">
						      <p> Donec tincidunt consectetur orci at dignissim. Proin auctor aliquam justo, vitae luctus odio pretium scelerisque. </p>
						    </div>
						  </div>

						</div>



          <?php endwhile; // end of the loop. ?>
        </section>



		</main><!-- #main -->
	</div><!-- #primary -->
	<script src="/js/accordions.js"></script>

	<?php


get_footer();
