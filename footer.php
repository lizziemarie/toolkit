<?php
/**
 * The template for displaying the footer.
 *
 * @package GeneratePress Child
 */
?>

</div><!-- #content -->
</div><!-- #page -->

<section id="footer">

    <div class="footer-item" id="footer-logo">
      <a href="" target="_blank" class="lcef-img-link">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-lcef-big@2x.png" alt="The Leadership Conference on Civil and Human Rights Logo">
      </a>
      <p>The Policing Campaign is a project of
        <a href="" class="underline-teal">The Leadership Conference on Civil and Human Rights</a>
        & The Leadership Conference Education Fund.</p>
    </div>

    <div class="footer-item" id="footer-additional-links">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-link.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-link.png, <?php echo get_stylesheet_directory_uri(); ?>/img/icon-link@2x.png 2x" alt="">
      <p class="title">Additional Links</p>
      <div id="additional-links-menu">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'footer-menu',
            'container_class' => 'footer-menu-class' ) );
        ?>
      </div>
    </div>

    <div class="footer-item" id="footer-location">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/location.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/location.png, <?php echo get_stylesheet_directory_uri(); ?>/img/location@2x.png 2x" alt="">
      <p class="title">Location</p>
      <p class="footer-text">1620 L Street NW<br>
        Suite 1100<br>
        Washington, DC 20036<br>
        (202) 466-3311</p>
    </div>

    <div class="footer-item" id="footer-email">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Icon_Email.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/Icon_Email.png, <?php echo get_stylesheet_directory_uri(); ?>/img/Icon_Email@2x.png 2x" alt="">
      <p class="footer-text">
        <a href="mailto:emailaddress@email.com">
          emailaddress@email.com
        </a>
      </p>
    </div>

    <div class="footer-item footer-download-div" id="footer-download-toolkit">
      <p>
        <a href="<?php the_field('download'); ?>" class="download-button" target="_blank">Download Entire Toolkit
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-download-red.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-download-red.png, <?php echo get_stylesheet_directory_uri(); ?>/img/icon-download-red@2x.png 2x" alt="">
        </a>
      </p>
      <p class="download-spanish">
        <a href="<?php the_field('download'); ?>" class="underline-teal" target="_blank">Descargar en Español</a>
      </p>
    </div>

    <div class="footer-item footer-download-div" id="footer-download-guidebook">
      <p>
        <a href="<?php the_field('download'); ?>" class="download-button" target="_blank">Download Guidebook
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-download-red.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-download-red.png, <?php echo get_stylesheet_directory_uri(); ?>/img/icon-download-red@2x.png 2x" alt="">
        </a>
      <p class="download-spanish">
        <a href="<?php the_field('download'); ?>" class="underline-teal" target="_blank">Descargar en Español</a>
      </p>
    </div>

    <div class="footer-item" id="footer-social">
			<a href="" target="_blank">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-facebook.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-facebook.png, <?php echo get_stylesheet_directory_uri(); ?>/img/icon-facebook@2x.png 2x" alt="Facebook Link">
			</a>
    	<a href="" target="_blank">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-twitter.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-twitter.png, <?php echo get_stylesheet_directory_uri(); ?>/img/icon-twitter@2x.png 2x" alt="Twitter Link">
			</a>
		</div>

    <div class="footer-item" id="footer-copyright">
      <p>© 2019 The Leadership Conference on Civil and Human Rights/The Leadership Conference Education Fund. All rights reserved.</p>
    </div>

</section>

<?php
wp_footer();
?>
<!-- script for loading accordions -->
<script type="text/javascript">
$(document).ready(function() {
  $(".set > a").on("click", function() {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this)
        .siblings(".accordion-content")
        .slideUp(200);
      $(".set > a i")
        .removeClass("fa-angle-up")
        .addClass("fa-angle-down");
    } else {
      $(".set > a i")
        .removeClass("fa-angle-up")
        .addClass("fa-angle-down");
      $(this)
        .find("i")
        .removeClass("fa-angle-down")
        .addClass("fa-angle-up");
      $(".set > a").removeClass("active");
      $(this).addClass("active");
      $(".accordion-content").slideUp(200);
      $(this)
        .siblings(".accordion-content")
        .slideDown(200);
    }
  });
});
</script>
</body>
</html>
