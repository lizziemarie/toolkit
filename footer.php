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
  <container>
    <div id="footer-social">
			<div class="footer-social-icon">
					<a href="" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/img/twitter-icon.png" alt="Facebook Link">
					</a>
			</div>
			<div class="footer-social-icon">
					<a href="" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/img/twitter-icon.png" alt="Twitter Link">
					</a>
			</div>
			<div class="footer-social-icon">
					<a href="mailto:someone@example.com?Subject=Hello%20again" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/img/twitter-icon.png" alt="Email Link">
					</a>
			</div>
		</div>

    <div>
      <p>THE LEADERSHIP CONFERENCE ON CIVIL AND HUMAN RIGHTS</p>
      <p>1620 L Street NW, Suite 1100, Washington, DC 20036 | Phone: (202) 466-3311</p>
      <?php
        wp_nav_menu( array(
            'theme_location' => 'footer-menu',
            'container_class' => 'footer-menu-class' ) );
      ?>
      <p>The Policing Campaign is a project of The Leadership Conference on Civil and Human Rights & The Leadership Conference Education Fund.</p>
      <p id="footer-final-paragraph">© 2019 The Leadership Conference on Civil and Human Rights/The Leadership Conference Education Fund. All rights reserved.</p>
    </div>

  </container>
</section>


<?php
wp_footer();
?>

</body>
</html>
