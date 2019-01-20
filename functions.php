<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

function generatepress_child_enqueue_scripts() {
	if ( is_rtl() ) {
		wp_enqueue_style( 'generatepress-rtl', trailingslashit( get_template_directory_uri() ) . 'rtl.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'generatepress_child_enqueue_scripts', 100 );

function wp_custom_new_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'wp_custom_new_menu' );

function create_custom_post_types() {
	register_post_type( 'topics concern',
		array(
			'labels' => array(
					'name' => __ ( 'Topics Concern' ),
					'singular_name' => __ ( 'Topic Concern' )
			 ),
			 'public' => true,
			 'has_archive' => false,
			 'rewrite' => array( 'slug' => 'topics-concern' ),
		)
	);
	register_post_type( 'opportunities',
		array(
			'labels' => array(
					'name' => __ ( 'Opportunities' ),
					'singular_name' => __ ( 'Opportunity' )
			 ),
			 'public' => true,
			 'has_archive' => false,
			 'rewrite' => array( 'slug' => 'opportunities-change' ),
		)
	);
	register_post_type( 'tools for action',
		array(
			'labels' => array(
					'name' => __ ( 'Tools for Action' ),
					'singular_name' => __ ( 'Tool for Action' )
			 ),
			 'public' => true,
			 'has_archive' => false,
			 'rewrite' => array( 'slug' => 'tools-for-action' ),
		)
	);
}
add_action( 'init', 'create_custom_post_types' );

/* Add Custom Color Palettes to ACF */
function klf_acf_input_admin_footer() {
		?>
		<script type="text/javascript">
			(function($) {
				acf.add_filter('color_picker_args', function( args, $field ){

				// add the hexadecimal codes here for the colors you want to appear as swatches
				args.palettes = ['#0B5770', '#34A9AC', '#FC371E', '#FCBA04', '#1F363D', '#170027']

			// return colors
			return args;

			});

			})(jQuery);
		</script>
		<?php

		}

add_action('acf/input/admin_footer', 'klf_acf_input_admin_footer');
