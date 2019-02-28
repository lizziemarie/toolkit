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
        $download_espanol = get_field('download_espanol');
				$s2img1 = get_field('s2img1');
				$s4img1 = get_field('s4img1');
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
				$box_link_1 = get_field('box_link_1');
				$box_link_2 = get_field('box_link_2');
				$box_link_3 = get_field('box_link_3');
				$box_link_4 = get_field('box_link_4');
				$box_link_5 = get_field('box_link_5');
				$box_link_6 = get_field('box_link_6');
        $size = "full";
        ?>
        <section>
          <div class="home-section hero" style="background-image: url(<?php echo $feature_image; ?>);">
            <div class="hero-content grid">
              <div>
								<h2><?php the_field('feature_title'); ?></h2>
              	<h6><?php the_field('feature_subtitle'); ?></h6>
							</div>
              <p><a href="<?php the_field('download'); ?>" class="btn btnRed btnHero" target="_blank"><?php the_field('download_button_text'); ?></a></p>
							<p><a href="<?php the_field('download'); ?>" class="" target="_blank">Descargar en Español</a></p>
            </div>
          </div>

					<div id="gallery">
						<figure class="slider">
							<figure>
								<?php
									$gallery_image_1 = get_field('gallery_image_1');
									if( !empty($gallery_image_1) ): ?>
										<img src="<?php echo $gallery_image_1['url']; ?>" alt="<?php echo $gallery_image_1['alt']; ?>" />
									<?php endif;
								?>
							</figure>
							<figure>
								<?php
									$gallery_image_2 = get_field('gallery_image_2');
									if( !empty($gallery_image_2) ): ?>
										<img src="<?php echo $gallery_image_2['url']; ?>" alt="<?php echo $gallery_image_2['alt']; ?>" />
									<?php endif;
								?>
							</figure>
							<figure>
								<?php
									$gallery_image_3 = get_field('gallery_image_3');
									if( !empty($gallery_image_3) ): ?>
										<img src="<?php echo $gallery_image_3['url']; ?>" alt="<?php echo $gallery_image_3['alt']; ?>" />
									<?php endif;
								?>
							</figure>
							<figure>
								<?php
									$gallery_image_3 = get_field('gallery_image_3');
									if( !empty($gallery_image_3) ): ?>
										<img src="<?php echo $gallery_image_3['url']; ?>" alt="<?php echo $gallery_image_3['alt']; ?>" />
									<?php endif;
								?>
							</figure>
						</figure>
					</div>


					<!-- start of section 2 -->
          <section class="section-two">
						<div class="s2img1">
							<?php if($s2img1) {
              echo wp_get_attachment_image( $s2img1, $size);}
            	?>
						</div>

						<div class="grid s2content">
            	<div class="s2item1">
              	<h2 class="underline underline-red">Policing, criminalization, and mass incarceration are primary civil rights issues of our time.</h2>
            	</div>

            	<div class="s2item2">
              	<h6>Now more than ever,</h6>
								<p>tackling discriminatory policing practices and the injustices they perpetuate is critical to achieving racial, gender, economic and social justice, and to bringing us closer to our vision of becoming a society that universally respects, promotes, and protects civil and human rights.</p>
            	</div>

							<div class="s2item3">
								<a href="<?php the_field('box_link_1'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/location.png" srcset="<?php echo get_template_directory_uri(); ?>/img/location.png, /img/loaction-2x.pnpg 2x" class="inline-icon">Policing by the Numbers</a>
								<a href="<?php the_field('box_link_2'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/location.png" srcset="<?php echo get_template_directory_uri(); ?>/img/location.png, /img/loaction-2x.pnpg 2x" class="inline-icon">Topics of Concern</a>
							</div>
						</div>

          </section>
					<!-- end of section 2 -->

					<!-- start of section 3 -->
					<section class="section-three">
						<div class="highlight-text-overlay">
							<h3><span class="highlight highlight-wrapping highlight-teal">We all have a role to play in</span></h3>
							<h3><span class="highlight highlight-wrapping highlight-teal">resisting infringements on civil</span></h3>
							<h3><span class="highlight highlight-wrapping highlight-teal">and human rights through</span></h3>
							<h3><span class="highlight highlight-wrapping highlight-teal">policing practices.</span></h3>
						<div>
					</section>
					<!-- end of section 3 -->

					<!-- start of section 4 -->
					<section class="section-four">
						<div class="s4img1">
							<?php if($s4img1) {
              echo wp_get_attachment_image( $s4img1, $size);
							}?>
						</div>

						<div class="s4content">
            	<div class="s4item2">
              	While politicians, police chiefs and police unions hold <span class="highlight highlight-red highlight-wrapping-inline">significant power</span> over policing, each of us also has the power, individually and collectively, to <span class="highlight highlight-red highlight-wrapping-inline">effect change</span> through grassroots organizing, policy advocacy, and civic engagement.
            	</div>

							<div class="s4item3">
								<a href="<?php the_field('box_link_3'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/location.png" srcset="<?php echo get_template_directory_uri(); ?>/img/location.png, /img/location-2x.pnpg 2x" class="inline-icon">Policing by State</a>
								<a href="<?php the_field('box_link_4'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/location.png" srcset="<?php echo get_template_directory_uri(); ?>/img/location.png, /img/location-2x.pnpg 2x" class="inline-icon">Opportunities for Change</a>
							</div>
						</div>

          </section>
					<!-- end of section 4 -->

					<!-- start of section 5 -->
					<section class="section-five">
						<div class="highlight-text-overlay">
							<h3><span class="highlight highlight-wrapping highlight-red">This Toolkit is part of <a href="">The Leadership</a></span></h3>
							<h3><span class="highlight highlight-wrapping highlight-red"><a href="">Conference’s Policing Campaign</a> project.</span></h3>
						<div>
						<div class="section-five-content">
							<div class="s5item1">
              	Visit <a href="" class="underline underline-teal">New Era of Policing:</a> A Guide for Fair, Safe, and Effective Policing for more information about the current state of policing, and recommendations for all levels of police departments to make improvements.
            	</div>
							<div class="s5item2">
								<a href="<?php the_field('box_link_5'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/location.png" srcset="<?php echo get_template_directory_uri(); ?>/img/location.png, /img/location-2x.pnpg 2x" class="inline-icon">Tools for Action</a>
								<a href="<?php the_field('box_link_6'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/location.png" srcset="<?php echo get_template_directory_uri(); ?>/img/location.png, /img/location-2x.pnpg 2x" class="inline-icon">Glossary</a>
							</div>
							<p><a href="" class="" target="_blank">Share This</a></p>

						</div>
					</section>
					<!-- end of section 5 -->

					<!-- start of section 6 -->
					<section class="section-six">
						<div id="toolkit-title">
							Toolkit Topics:
						</div>

						<div class="toolkit-item">
							<a href="<?php the_field('box_link_3'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/location.png" srcset="<?php echo get_template_directory_uri(); ?>/img/location.png, /img/location-2x.pnpg 2x" class="">
								<h6>Topics for Concern</h6>
								<img src="<?php echo get_template_directory_uri(); ?>/img/location.png" srcset="<?php echo get_template_directory_uri(); ?>/img/location.png, /img/location-2x.pnpg 2x" class="">
								<p>Find information about key issues elements of change, talking points and strategies for overcoming opposition.</p>
							</a>
						</div>

						<div class="toolkit-item">
							<a href="<?php the_field('box_link_4'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/location.png" srcset="<?php echo get_template_directory_uri(); ?>/img/location.png, /img/location-2x.pnpg 2x" class="">
								<h6>Opportunities for Change</h6>
								<img src="<?php echo get_template_directory_uri(); ?>/img/location.png" srcset="<?php echo get_template_directory_uri(); ?>/img/location.png, /img/location-2x.pnpg 2x" class="">
								<p>In order to enact lasting change to the policing in our communities, it’s important to understand the law enforcement structures already in place.</p>
							</a>

						</div>

						<div class="toolkit-item">
							<a href="<?php the_field('box_link_1'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/location.png" srcset="<?php echo get_template_directory_uri(); ?>/img/location.png, /img/location-2x.pnpg 2x" class="">
								<h6>Policing by the Numbers</h6>
								<img src="<?php echo get_template_directory_uri(); ?>/img/location.png" srcset="<?php echo get_template_directory_uri(); ?>/img/location.png, /img/location-2x.pnpg 2x" class="">
								<p>With over 2 million people behind bars, 9 million more ensnared in the criminal legal system, and 10 million arrests every year.</p>
							</a>
						</div>

						<div>
						</div>

						<div class="toolkit-item">
							<a href="<?php the_field('box_link_2'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/location.png" srcset="<?php echo get_template_directory_uri(); ?>/img/location.png, /img/location-2x.pnpg 2x" class="">
								<h6>Policing by State</h6>
								<img src="<?php echo get_template_directory_uri(); ?>/img/location.png" srcset="<?php echo get_template_directory_uri(); ?>/img/location.png, /img/location-2x.pnpg 2x" class="">
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
							</a>

						</div>

						<div class="toolkit-item">
							<a href="<?php the_field('box_link_5'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/location.png" srcset="<?php echo get_template_directory_uri(); ?>/img/location.png, /img/location-2x.pnpg 2x" class="">
								<h6>Tools for Action</h6>
								<img src="<?php echo get_template_directory_uri(); ?>/img/location.png" srcset="<?php echo get_template_directory_uri(); ?>/img/location.png, /img/location-2x.pnpg 2x" class="">
								<p>Resources that can provide direction and oversight for active community members and organizers alike.</p>
							</a>

						</div>

						<div class="toolkit-item">
							<a href="<?php the_field('box_link_6'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/location.png" srcset="<?php echo get_template_directory_uri(); ?>/img/location.png, /img/location-2x.pnpg 2x" class="">
								<h6>Glossary</h6>
								<img src="<?php echo get_template_directory_uri(); ?>/img/location.png" srcset="<?php echo get_template_directory_uri(); ?>/img/location.png, /img/location-2x.pnpg 2x" class="">
								<p>Search the glossary for key terms related to policing an reforms.</p>
							</a>
						</div>

					</section>
					<!-- end of section 6 -->

          <?php endwhile; // end of the loop. ?>
        </section>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php


get_footer();
