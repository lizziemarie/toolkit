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
        $download_button_text_1 = get_field('download_button_text_1');
        $related_topics_title = get_field('related_topics_title');
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
        $related_report_text = get_field('related_report_text');
				$related_report_link = get_field('related_report_link');
				$related_report_icon = get_field('related_report_icon');
				$tertiary_page_intro = get_field('tertiary_page_intro');
				$key_issues_content = get_field('key_issues_content');
				$elements_of_change_content = get_field('elements_of_change_content');
				$talking_points_content = get_field('talking_points_content');
				$overcoming_opposition_content = get_field('overcoming_opposition_content');
				$how_to_make_change_content = get_field('how_to_make_change_content');
				$external_resources_content = get_field('external_resources_content');
        $size = "full";
      ?>
        <section class="single-toc">

					<section class="toc-hero" style="background-color:#091c27;">
		        <div class="page-title">
		          <h3><span class="highlight highlight-wrapping highlight-red"><?php the_title(); ?></span></h3>
		        </div>

		        <div class="return-toc">
		            <a href="/toolkit/topics-of-concern" class="">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red.png, <?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red@2x.png 2x"class="inline-icon" alt="arrow back">
									Topics of Concern
		            </a>
		        </div>

		      </section>
		      <!-- end of section 1 -->

          <section class="toc-content">
						<div class="toc-content-item-1">
							<h2 class="content-intro"><?php the_field('tertiary_page_intro'); ?></h2>
						</div>

          	<p class="tertiary-download-button toc-content-item-2">
								<a href="<?php the_field('download_file_1'); ?>" class="" target="_blank">
									<?php the_title(); ?> <br>
									DOWNLOAD SECTION
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red.png, <?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red@2x.png 2x"class="inline-icon" alt="download">
								</a>
						</p>

						<div class="accordion-container toc-content-item-3">

						  <div class="set" id="accordion-item-1">
						    <a href="#accordion-item-1">
										Key Issues
						      <i class="fa fa-angle-down"></i>
						    </a>
						    <div class="accordion-content">
						      <?php the_field('key_issues_content'); ?>
						    </div>
						  </div>

						  <div class="set" id="accordion-item-2">
						    <a href="#accordion-item-2">
						      Elements of Change
						      <i class="fa fa-angle-down"></i>
						    </a>
						    <div class="accordion-content">
						      <?php the_field('elements_of_change_content'); ?>
						    </div>
						  </div>

						  <div class="set" id="accordion-item-3">
						    <a href="#accordion-item-3">
						      Talking Points
						      <i class="fa fa-angle-down"></i>
						    </a>
						    <div class="accordion-content">
						      <?php the_field('talking_points_content'); ?>
						    </div>
						  </div>

						  <div class="set" id="accordion-item-4">
						    <a href="#accordion-item-4">
						      Overcoming Opposition
						      <i class="fa fa-angle-down"></i>
						    </a>
						    <div class="accordion-content">
						      <?php the_field('overcoming_opposition_content'); ?>
						    </div>
						  </div>

							<div class="set" id="accordion-item-5">
						    <a href="#accordion-item-5">
						      How to Make Change
						      <i class="fa fa-angle-down"></i>
						    </a>
						    <div class="accordion-content">
						      <?php the_field('how_to_make_change_content'); ?>
						    </div>
						  </div>

							<div class="set" id="accordion-item-6">
						    <a href="#accordion-item-6">
						      External Resources
						      <i class="fa fa-angle-down"></i>
						    </a>
						    <div class="accordion-content">
						      <?php the_field('external_resources_content'); ?>
						    </div>
						  </div>

						</div> <!-- end of accordion div -->

						<!-- start of related topics div -->
						<div class="toc-topics-div toc-content-item-4">
		              <h4><?php the_field('related_topics_title'); ?></h4>

									<div class="related-topic-item">
										<a href="<?php the_field('related_topic_link_1'); ?>" target="_blank">
											<?php
												$related_topic_icon_1 = get_field('related_topic_icon_1');
												$size = "full";
												if( $related_topic_icon_1 ) {
													echo wp_get_attachment_image( $related_topic_icon_1, $size );
												}
											?>
											<?php the_field('related_topic_text_1'); ?>
										</a>
									</div>

									<div class="related-topic-item">
										<a href="<?php the_field('related_topic_link_2'); ?>" target="_blank">
											<?php
												$related_topic_icon_2 = get_field('related_topic_icon_2');
												$size = "full";
												if( $related_topic_icon_2 ) {
													echo wp_get_attachment_image( $related_topic_icon_2, $size );
												}
											?>
											<?php the_field('related_topic_text_2'); ?>
										</a>
									</div>

									<div class="related-topic-item">
										<a href="<?php the_field('related_topic_link_3'); ?>" target="_blank" id="policing-icon">
											<?php
												$related_topic_icon_3 = get_field('related_topic_icon_3');
												$size = "full";
													if( $related_topic_icon_3 ) {
														echo wp_get_attachment_image( $related_topic_icon_3, $size );
													}
											?>

											<?php the_field('related_topic_text_3'); ?>
										</a>
									</div>

						</div><!-- end of related topics div -->

						<!-- start of related report div -->
						<div class="toc-report-div toc-content-item-5">
		              <h4><?php the_field('related_reports_title'); ?></h4>

									<div class="related-topic-item">
										<a href="<?php the_field('related_report_link'); ?>" target="_blank" id="policing-icon">
											<?php
												$related_report_icon = get_field('related_report_icon');
												$size = "full";
													if( $related_report_icon ) {
														echo wp_get_attachment_image( $related_report_icon, $size );
													}
											?>

											<?php the_field('related_report_text'); ?>
										</a>
									</div>

						</div><!-- end of related link div -->

						</section> <!-- end of section two -->

						<!-- start of download div -->
						<div class="download-div">

							<h2>Download this section to find more information about how to make change, <span class="highlight highlight-wrapping highlight-teal">talking points,</span> and <span class="highlight highlight-wrapping highlight-teal">strategies</span> for overcoming opposition. </h2>

							<p class="tertiary-download-button">
									<a href="<?php the_field('download_file_1'); ?>" class="" target="_blank">
										<?php the_title(); ?><br>
										DOWNLOAD SECTION
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/download.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/download.png, <?php echo get_stylesheet_directory_uri(); ?>/img/download@2x.png 2x"class="inline-icon" alt="download">
									</a>
							</p>

						</div><!-- end of download div -->

					<?php endwhile; // end of the loop. ?>
        </section>

		</main><!-- #main -->
	</div><!-- #primary -->
	<script src="/js/accordions.js"></script>

	<?php


get_footer();
