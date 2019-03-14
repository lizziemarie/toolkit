<?php
/**
 * The template for displaying the header.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,800" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php generate_do_microdata( 'body' ); ?>>

<div class="site-header">
<div class="site-logo">
	<!-- generate logo form -->
	<a href="#">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Logo_Mobile_Final.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/Logo_Mobile_Final.png, <?php echo get_stylesheet_directory_uri(); ?>/img/Logo_Mobile_Final@2x.png 2x"class="inline-icon mobile-tablet-only" alt="Policing Campaign Logo">
	</a>
	<a href="#">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Logo_Desktop_Final_white.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/Logo_Desktop_Final_white.png, <?php echo get_stylesheet_directory_uri(); ?>/img/Logo_Desktop_Final_white@2x.png 2x"class="inline-icon desktop-only" alt="Policing Campaign Logo">
	</a>
</div>
<div class="site-nav">
	<!-- generate menu link -->
	<a href="#" class="toggle-nav">
  	<div class="desktop-only"> Menu </div>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Icon-hamburger-mobile.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/Icon-hamburger-mobile.png, <?php echo get_stylesheet_directory_uri(); ?>/img/Icon-hamburger-mobile@2x.png 2x"class="inline-icon mobile-tablet-only" alt="Menu Icon">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Icon-hamburger-desktop.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/Icon-hamburger-desktop.png, <?php echo get_stylesheet_directory_uri(); ?>/img/Icon-hamburger-desktop@2x.png 2x"class="inline-icon desktop-only" alt="Menu Icon">
  </a>
</div>
	<!-- generate search form -->
	<?php get_search_form(); ?>

</div><!-- end of site header -->
	<div id="page" class="hfeed site grid-container container grid-parent">
		<a id="skip-to-content" href="#content">skip to main content</a>
    <div id="content" class="site-content">
			<?php
			/**
			 * generate_inside_container hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_inside_container' );
