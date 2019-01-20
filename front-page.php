<?php
/**
 * The template for displaying the front page.
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
        $feature_subtitle = get_field('feature_subtitle');
        $download = get_field('download');
        $download_button_text = get_field('download_button_text');
        $profile_image_1 = get_field('profile_image_1');
        $profile_image_2 = get_field('profile_image_2');
        $profile_image_3 = get_field('profile_image_3');
        $profile_image_4 = get_field('profile_image_4');
        $profile_image_5 = get_field('profile_image_5');
        $profile_image_6 = get_field('profile_image_6');
        $profile_image_7 = get_field('profile_image_7');
        $profile_image_8 = get_field('profile_image_8');
        $profile_image_9 = get_field('profile_image_9');
        $profile_image_10 = get_field('profile_image_10');
        $profile_image_11 = get_field('profile_image_11');
        $profile_image_12 = get_field('profile_image_12');
        $box_icon_1 = get_field('box_icon_1');
        $box_icon_2 = get_field('box_icon_2');
        $box_icon_3 = get_field('box_icon_3');
        $box_icon_4 = get_field('box_icon_4');
        $box_icon_5 = get_field('box_icon_5');
        $box_icon_6 = get_field('box_icon_6');
        $box_text_1 = get_field('box_text_1');
        $box_text_2 = get_field('box_text_2');
        $box_text_3 = get_field('box_text_3');
        $box_text_4 = get_field('box_text_4');
        $box_text_5 = get_field('box_text_5');
        $box_text_6 = get_field('box_text_6');
				$box_color_1 = get_field('box_color_1');
				$box_color_2 = get_field('box_color_2');
				$box_color_3 = get_field('box_color_3');
				$box_color_4 = get_field('box_color_4');
				$box_color_5 = get_field('box_color_5');
				$box_color_6 = get_field('box_color_6');
        $size = "full";
        ?>
        <section>
          <div class="home-section hero" style="background-image: url(<?php echo $feature_image; ?>);">
            <div>
              <h2><?php the_field('feature_title'); ?></h2>
              <h3><?php the_field('feature_subtitle'); ?></h3>
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

          <div class="grid grid-profile-images">
            <?php if($profile_image_1) {
              echo wp_get_attachment_image( $profile_image_1, $size);}
            ?>
            <?php if($profile_image_2) {
              echo wp_get_attachment_image( $profile_image_2, $size);}
            ?>
            <?php if($profile_image_3) {
              echo wp_get_attachment_image( $profile_image_3, $size);}
            ?>
            <?php if($profile_image_4) {
              echo wp_get_attachment_image( $profile_image_4, $size);}
            ?>
            <?php if($profile_image_5) {
              echo wp_get_attachment_image( $profile_image_5, $size);}
            ?>
            <?php if($profile_image_6) {
              echo wp_get_attachment_image( $profile_image_6, $size);}
            ?>
            <?php if($profile_image_7) {
              echo wp_get_attachment_image( $profile_image_7, $size);}
            ?>
            <?php if($profile_image_8) {
              echo wp_get_attachment_image( $profile_image_8, $size);}
            ?>
            <?php if($profile_image_9) {
              echo wp_get_attachment_image( $profile_image_9, $size);}
            ?>
            <?php if($profile_image_10) {
              echo wp_get_attachment_image( $profile_image_10, $size);}
            ?>
            <?php if($profile_image_11) {
              echo wp_get_attachment_image( $profile_image_11, $size);}
            ?>
            <?php if($profile_image_12) {
              echo wp_get_attachment_image( $profile_image_12, $size);}
            ?>
          </div>

          <div class="grid grid-color-block">
            <a href="" target="_blank">
              <div class="" style="background-color: <?php the_field('box_color_1'); ?>;">
                <?php if($box_icon_1) {
                  echo wp_get_attachment_image( $box_icon_1, $size);}
                ?>
                <?php echo $box_text_1; ?>
              </div>
            </a>
            <a href="" target="_blank">
              <div class="" style="background-color: <?php the_field('box_color_2'); ?>;">
                <?php if($box_icon_2) {
                  echo wp_get_attachment_image( $box_icon_2, $size);}
                ?>
                <?php echo $box_text_2; ?>
              </div>
            </a>
            <a href="" target="_blank">
              <div class="" style="background-color: <?php the_field('box_color_3'); ?>;">
                <?php if($box_icon_3) {
                  echo wp_get_attachment_image( $box_icon_3, $size);}
                ?>
                <?php echo $box_text_3; ?>
              </div>
            </a>
            <a href="" target="_blank">
              <div class="" style="background-color: <?php the_field('box_color_4'); ?>;">
                <?php if($box_icon_4) {
                  echo wp_get_attachment_image( $box_icon_4, $size);}
                ?>
                <?php echo $box_text_4; ?>
              </div>
            </a>
            <a href="" target="_blank">
              <div class="" style="background-color: <?php the_field('box_color_5'); ?>;">
                <?php if($box_icon_5) {
                  echo wp_get_attachment_image( $box_icon_5, $size);}
                ?>
                <?php echo $box_text_5; ?>
              </div>
            </a>
            <a href="" target="_blank">
              <div class="" style="background-color: <?php the_field('box_color_6'); ?>;">
                <?php if($box_icon_6) {
                  echo wp_get_attachment_image( $box_icon_6, $size);}
                ?>
                <?php echo $box_text_6; ?>
              </div>
            </a>

          </div>

          <?php endwhile; // end of the loop. ?>
        </section>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php


get_footer();
