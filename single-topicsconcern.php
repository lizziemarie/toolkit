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
				$key_issues_content = get_field('key_issues_content');
				$elements_of_change_content = get_field('elements_of_change_content');
				$talking_points_content = get_field('talking_points_content');
				$overcoming_opposition_content = get_field('overcoming_opposition_content');
				$how_to_make_change_content = get_field('how_to_make_change_content');
				$external_resources_content = get_field('external_resources_content');
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
							<div class="tab-container">
							  <button class="tablink" onclick="openCity('Key', this, '#38A5A9')" id="defaultOpen"><img src="http://localhost:8888/toolkit/wp-content/uploads/2019/01/key-icon.png" alt="Key" height="42" width="42"></button>
							  <button class="tablink" onclick="openCity('Puzzle', this, '#38A5A9')"><img src="http://localhost:8888/toolkit/wp-content/uploads/2019/01/puzzle-icon.png" alt="Puzzle" height="42" width="42"></button>
							  <button class="tablink" onclick="openCity('Message', this, '#38A5A9')"><img src="http://localhost:8888/toolkit/wp-content/uploads/2019/01/message-icon.png" alt="Message" height="42" width="42"></button>
							  <button class="tablink" onclick="openCity('Competition', this, '#38A5A9')"><img src="http://localhost:8888/toolkit/wp-content/uploads/2019/01/competition-icon.png" alt="Competition" height="42" width="42"></button>
							  <button class="tablink" onclick="openCity('Change', this, '#38A5A9')"><img src="http://localhost:8888/toolkit/wp-content/uploads/2019/01/change-icon.png" alt="Change" height="42" width="42"></button>
							  <button class="tablink" onclick="openCity('External', this, '#38A5A9')"><img src="http://localhost:8888/toolkit/wp-content/uploads/2019/01/external-icon.png" alt="External" height="42" width="42"></button>

							  <div id="Key" class="tabcontent">
							    <h1>Key Issues</h1>
							    <?php the_field('key_issues_content'); ?>
							  </div>

							  <div id="Puzzle" class="tabcontent">
							    <h1>Elements of Change</h1>
									<?php the_field('elements_of_change_content'); ?>
							  </div>

							  <div id="Message" class="tabcontent">
							    <h1>Talking Points</h1>
							    <?php the_field('talking_points_content'); ?>
							  </div>

							  <div id="Competition" class="tabcontent">
							    <h1>Overcoming Opposition</h1>
							    <?php the_field('overcoming_opposition_content'); ?>
							  </div>

							  <div id="Change" class="tabcontent">
							    <h1>How to Make Change</h1>
							    <?php the_field('how_to_make_change_content'); ?>
							  </div>

							  <div id="External" class="tabcontent">
							    <h1>External Resources</h1>
							    <?php the_field('how_to_make_change_content'); ?>
							  </div>
							</div>

            </div>

            <div class="grid">
                  <p><a href="<?php the_field('download_file_1'); ?>" class="btn btnRed btnSide" target="_blank"><?php the_field('download_button_text_1'); ?></a></p>
                  <p><a href="<?php the_field('download_file_2'); ?>" class="btn btnRed btnSide" target="_blank"><?php the_field('download_button_text_2'); ?></a></p>
                  <p><a href="<?php the_field('download_file_3'); ?>" class="btn btnRed btnSide" target="_blank"><?php the_field('download_button_text_3'); ?></a></p>
  		            <h3><?php the_field('related_topics_of_concern_header'); ?></h3>
  		            <p><a href="<?php the_field('related_topic_link_1'); ?>" class="btn btnTeal btnSide" target="_blank"><?php the_field('related_topic_text_1'); ?></a></p>
  		            <p><a href="<?php the_field('related_topic_link_2'); ?>" class="btn btnTeal btnSide" target="_blank"><?php the_field('related_topic_text_2'); ?></a></p>
  		            <p><a href="<?php the_field('related_topic_link_3'); ?>" class="btn btnTeal btnSide" target="_blank"><?php the_field('related_topic_text_3'); ?></a></p>
  		            <h3><?php the_field('related_reports_title'); ?></h3>
  		            <p><a href="<?php the_field('related_reports_link'); ?>"><?php the_field('related_reports_content'); ?></a></p>

						</div>

          </div>

          <?php endwhile; // end of the loop. ?>
        </section>
				<script>
				function openCity(cityName,elmnt,color) {
				  var i, tabcontent, tablinks;
				  tabcontent = document.getElementsByClassName("tabcontent");
				  for (i = 0; i < tabcontent.length; i++) {
				    tabcontent[i].style.display = "none";
				  }
				  tablinks = document.getElementsByClassName("tablink");
				  for (i = 0; i < tablinks.length; i++) {
				    tablinks[i].style.backgroundColor = "";
				  }
				  document.getElementById(cityName).style.display = "block";
				  elmnt.style.backgroundColor = color;

				}
				// Get the element with id="defaultOpen" and click on it
				document.getElementById("defaultOpen").click();
				</script>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php


get_footer();
