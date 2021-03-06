<?php
/**
 * The template for displaying the topics of concern landing page
 *
 *
 * @package GeneratePress Child
 */

get_header();

?>
<div id="primary">
  <main id="main">
    <section>
    <?php while ( have_posts() ) : the_post();
      $feature_image = get_field('feature_image');
      $size = "full";
      ?>


      <section class="toc pbn section-one gradient secondary-page" style="background: linear-gradient(149.33deg, rgba(9,28,39,0) 0%, rgba(9,28,39,0.65) 100%), linear-gradient(38.4deg, rgba(9,28,39,0) 0%, rgba(9,28,39,0.6) 100%), url(<?php echo $feature_image; ?>) no-repeat; background-position: center center; background-size: cover;">
        <div class="hero-highlight">
          <h3><span class="highlight highlight-wrapping highlight-red"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Header-mobile-icon-TOC.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/Header-mobile-icon-TOC.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/img/Header-mobile-icon-TOC@2x.png 2x" class="inline-icon" alt="topics of concern icon">Topics</span></h3>
          <h3><span class="highlight highlight-wrapping highlight-red">of Concern</span></h3>
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

      <!-- start of section 2 -->
      <section class="secondary-page section-two">

          <div class="s2item1 secondary-page">
            <h2 class="underline-red">Download the documents relevant to the issues your are concerned about to learn more, to take to your next meeting with community members, legislators or policymakers!</h2>
          </div>

      </section>
      <!-- end of section 2 -->

      <!-- start of section 3 -->
      <section class="toc-grid">
        <div>
        <div class="toc-loop">
          <?php $args = array( 'post_type' =>'topics concern', );
          $query = new WP_Query( $args );?>
          <?php if ( $query->have_posts()) : while ( $query->have_posts() ) : $query->the_post(); ?>


            <a href="<?php the_permalink(); ?>" >
                <div class="toc-item">
                  <div class="toc-item-icon">
                    <?php
                    $topics_icon = get_field('topics_icon');
                    $size = "full";
                      if( $topics_icon ) {
                        echo wp_get_attachment_image( $topics_icon, $size );
                      }
                    ?>
                  </div>

                  <h6><?php the_title(); ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red.png, <?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red@2x.png 2x"class="inline-icon" alt="download"></h6>
                  <p><?php the_field('topics_of_concern_subtitle'); ?></p>
                </div>
            </a>

            <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
          </div> <!-- end of toc loop -->
        </div>
    <?php endwhile; // end of the loop. ?>
  </section>

  </main><!-- #main -->
</div><!-- #primary -->

<?php


get_footer();
