<?php
/**
 * The template for displaying the glossary page
 *
 *
 * @package GeneratePress Child
 */

get_header(); ?>

	<div id="primary">
		<main id="main">
      <?php while ( have_posts() ) : the_post();
        $feature_image = get_field('feature_image');
        $size = "full";
        ?>
        <section>

					<div>
						<h3><span class="highlight highlight-wrapping highlight-red"><?php the_title(); ?></span></h3>
					</div>

          <div class="grid content-container content-grid-2">
            <div class="glossary-page-content">
              <?php the_content(); ?>
            </div>

          </div>

          <?php endwhile; // end of the loop. ?>
        </section>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php


get_footer();
