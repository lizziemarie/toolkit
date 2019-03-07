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
					<section class="section-one gradient" style="background-image: url(<?php echo $feature_image; ?>);">
		        <div class="hero-highlight not-desktop">
		          <h3><span class="highlight highlight-wrapping highlight-red"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/trending-up.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/trending-up.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/img/trending-up@2x.png 2x" class="inline-icon" alt="trending up icon">Policing by</span></h3>
		          <h3><span class="highlight highlight-wrapping highlight-red">The Numbers</span></h3>
		        </div>

		        <div class="hero-highlight not-mobile not-tablet">
		          <h3><span class="highlight highlight-wrapping highlight-red">You can change the way policing</span></h3>
		          <h3><span class="highlight highlight-wrapping highlight-red">happens in your community.</span></h3>
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
          <div class="">

						<div class="s2item1 secondary-page">
	            <h2 class="underline-red"><?php the_content(); ?></h2>
	          </div>

            <div>
		              <h3><?php the_field('related_topics_of_concern_header'); ?></h3>
		              <p>
										<a href="<?php the_field('related_topic_link_1'); ?>" class="btn btnTeal btnSide" target="_blank">
											<?php
				              $related_topic_icon_1 = get_field('related_topic_icon_1');
				              $size = "full";
				                if( $related_topic_icon_1 ) {
				                  echo wp_get_attachment_image( $related_topic_icon_1, $size );
				                }
				              ?>
											<?php the_field('related_topic_text_1'); ?>
										</a>
									</p>
		              <p>
										<?php
										$related_topic_icon_2 = get_field('related_topic_icon_2');
										$size = "full";
											if( $related_topic_icon_2 ) {
												echo wp_get_attachment_image( $related_topic_icon_2, $size );
											}
										?>
										<a href="<?php the_field('related_topic_link_2'); ?>" class="btn btnTeal btnSide" target="_blank">
											<?php the_field('related_topic_text_2'); ?>
										</a>
									</p>
		              <p>
										<?php
										$related_topic_icon_3 = get_field('related_topic_icon_3');
										$size = "full";
											if( $related_topic_icon_3 ) {
												echo wp_get_attachment_image( $related_topic_icon_3, $size );
											}
										?>
										<a href="<?php the_field('related_topic_link_3'); ?>" class="btn btnTeal btnSide" target="_blank">
											<?php the_field('related_topic_text_3'); ?>
										</a>
									</p>
						</div>
          </div>
					<!-- end of section 2 -->

					<!-- section 3 -->
					<section>
						<div id="pbn1">
							<p>Racial Profiling</p>
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
								<p>Black and latinx drivers are almost 3x more likely to be searched by the police then white drivers.</p>
							</div>
						</div><!-- end of div-->

						<div id="pbn2">
							<p>Lethal Force</p>
							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>Police have killed approximatley 1,000 people a year over the past four years in the United States. This number has been steadily increasing since 2000.</p>
							</div>

							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>Native Americans are the group most likely to be killed by police, followed by Black people.</p>
							</div>

							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>Police killed 1,147 people in 2017</p>
							</div>

							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>The overwhelming majority of people killed by police were killed with a gun (92%). The remaining deaths occured as a result of other uses of force such as TASERs, Physical force, and police vehicles.</p>
							</div>
						</div><!-- end of div-->

						<div id="pbn3">
							<p>Non-Lethal Force</p>
							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>Black people are 2.5 times more likely than whites and 1.7 times more likely than Latinx’s to experience the threat or use of nonfatal force during a police encounter</p>
							</div>

							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>An officer is caught in an act of sexual misconduct every 5 days on average. Appproximately 70% of sexual misconduct cases involve traffic stop, crime victims and witnesses, and young people.</p>
							</div>

							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>A national study of arrests of officers for sexual violence found that a quarter of cases involved minors.</p>
							</div>

						</div><!-- end of div-->

						<div id="pbn4">
							<p>Accountability</p>
							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>A Justice Department investigation of the Chicago Police Department found that fewer than 2% of 30,000 misconduct complaints over a 5-year period were sustained.</p>
							</div>

							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>In Baltimore, only 1 of 60 complaints of unlawful strip searches over a 5-year period was sustained. Of 1,382 allegations, only 31 or 2.2% were sustained.</p>
							</div>

							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>The Philadelphia Police Department sustained 138 misconduct complaints between 2013–2016 but none listed punitive action against the officer.</p>
							</div>

							<div class="bullet-point">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/bullet.png, <?php echo get_stylesheet_directory_uri(); ?>/img/bullet@2x.png 2x"class="inline-icon" alt="bullet point">
								<p>Grand juries rarely return indictments in officer-involved shooting cases. For example, in Dallas, grand juries reviewed 81 police shootings in a 4-year period and returned just one indictment.</p>
							</div>
						</div><!-- end of div-->



				</section>
				<!-- end of section three --->
          <?php endwhile; // end of the loop. ?>
        </section>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php


get_footer();
