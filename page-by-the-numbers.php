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
				$related_topic_icon_1 = get_field('related_topic_icon_1');
        $related_topic_icon_2 = get_field('related_topic_icon_2');
        $related_topic_icon_3 = get_field('related_topic_icon_3');
        $related_topics_of_concern_header = get_field('related_topics_of_concern_header');
        $size = "full";
        ?>
        <section>
					<section class="pbn section-one gradient secondary-page" style="background-image: url(<?php echo $feature_image; ?>);">
		        <div class="hero-highlight">
		          <h3><span class="highlight highlight-wrapping highlight-red"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Header-mobile-icon-PolicingbyNumbers.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/Header-mobile-icon-PolicingbyNumbers.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/img/Header-mobile-icon-PolicingbyNumbers@2x.png 2x" class="inline-icon" alt="trending up icon">Policing by</span></h3>
		          <h3><span class="highlight highlight-wrapping highlight-red">The Numbers</span></h3>
		        </div>

		        <div class="s1content">
		          <div class="homepage-subtitle">
		            Find information about key issues, elements of change, talking points and strategies for overcoming opposition.
		          </div>
		          <p class="download-button click">
		            <a href="<?php the_field('download'); ?>" class="" target="_blank">Download Topics of Concern
		              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/download.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/download.png, <?php echo get_stylesheet_directory_uri(); ?>/img/download@2x.png 2x"class="inline-icon" alt="download">
		            </a>
		          </p>
		        </div>

		        <div class="scrollarrow">
		          <a href="#sectiontwo">
		            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/scrollarrow.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/scrollarrow.png, <?php echo get_stylesheet_directory_uri(); ?>/img/scrollarrow@2x.png 2x"class="inline-icon" alt="scroll">
		          </a>
		        </div>

		      </section>
		      <!-- end of section 1 -->

					<!-- section 2 -->
          <section class="secondary-page section-two">

						<div class="s2item1">
	            <h2 class="underline-red">With over 2 million people behind bars, 9 million more ensnared in the criminal legal system, and 10 million arrests every year - the vast majority Black and other people of color - we have reached a
								crisis point.</h2>
	          </div>

            <div class="related-topics-div">
		              <h4><?php the_field('related_topics_of_concern_header'); ?></h4>

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
						</div>
          </div>
					<!-- end of section 2 -->

					<!-- section 3 -->
					<section id="pbn-facts-section">
						<div class="pbn-dark pbn-item" id="pbn1" style="background-color: #091C27;">
							<h3><span class="highlight highlight-wrapping highlight-red">Racial Profiling</span></h3>
							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>Police stop black drivers at higher rates than white drivers.</p>
							</div>

							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>Officers ticket, search, and arrest Black and Latinx drivers more often than whites.</p>
							</div>

							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>Police are more likely to search Black and Latinx drivers than whites on less evidence, and are less likely to find contraband on Black and Latinx drivers.</p>
							</div>

							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>Black and latinx drivers are almost <span class="highlight highlight-wrapping highlight-teal">3x more likely</span> to be searched by the police then white drivers.</p>
							</div>
						</div><!-- end of div-->

						<div id="pbn1-img" class="desktop-only">
						</div>

						<div class="pbn-light pbn-item" id="pbn2">
							<h3><span class="highlight highlight-wrapping highlight-red">Lethal Force</span></h3>
							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>Police have killed approximatley <span class="highlight highlight-wrapping highlight-teal">1,000 people</span> a year over the past four years in the United States. This number has been steadily increasing since 2000.</p>
							</div>

							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>Native Americans are the group most likely to be killed by police, followed by Black people.</p>
							</div>

							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>Police <span class="highlight highlight-wrapping highlight-teal">killed 1,147 people</span> in 2017</p>
							</div>

							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>The overwhelming majority of people killed by police were killed with a gun <span class="highlight highlight-wrapping highlight-teal">(92%)</span>. The remaining deaths occured as a result of other uses of force such as TASERs, Physical force, and police vehicles.</p>
							</div>
						</div><!-- end of div-->

						<div id="pbn2-img" class="desktop-only">
						</div>

						<div class="pbn-dark pbn-item" id="pbn3" style="background-color: #091C27;">
							<h3><span class="highlight highlight-wrapping highlight-red">Non-Lethal Force</span></h3>
							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>Black people are <span class="highlight highlight-wrapping highlight-teal">2.5 times</span> more likely than whites and <span class="highlight highlight-wrapping highlight-teal">1.7 times</span> more likely than Latinx’s to experience the threat or use of nonfatal force during a police encounter</p>
							</div>

							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>An officer is caught in an act of sexual misconduct every 5 days on average. Appproximately <span class="highlight highlight-wrapping highlight-teal">70% of sexual misconduct</span> cases involve traffic stop, crime victims and witnesses, and young people.</p>
							</div>

							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>A national study of arrests of officers for sexual violence found that a quarter of cases involved minors.</p>
							</div>

						</div><!-- end of div-->

						<div id="pbn3-img" class="desktop-only">
						</div>

						<div class="pbn-light pbn-item" id="pbn4">
							<h3><span class="highlight highlight-wrapping highlight-red">Accountability</span></h3>
							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>A Justice Department investigation of the Chicago Police Department found that fewer than <span class="highlight highlight-wrapping highlight-teal">2% of 30,000 misconduct</span> complaints over a 5-year period were sustained.</p>
							</div>

							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>In Baltimore, only <span class="highlight highlight-wrapping highlight-teal">1 of 60 complaints</span> of unlawful strip searches over a 5-year period was sustained. Of 1,382 allegations, only 31 or 2.2% were sustained.</p>
							</div>

							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>The Philadelphia Police Department sustained <span class="highlight highlight-wrapping highlight-teal">138 misconduct</span> complaints between 2013–2016 but none listed punitive action against the officer.</p>
							</div>

							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>Grand juries rarely return indictments in officer-involved shooting cases. For example, in Dallas, grand juries reviewed <span class="highlight highlight-wrapping highlight-teal">81 police shootings</span> in a 4-year period and returned just one indictment.</p>
							</div>
						</div><!-- end of div-->

						<div id="pbn4-img" class="desktop-only">
						</div>

				</section>
				<!-- end of section three --->
          <?php endwhile; // end of the loop. ?>
        </section>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php


get_footer();
