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
		wp_enqueue_script( 'custom-script', trailingslashit ( get_stylesheet_directory_uri() ). '/js/custom_script.js', array(), true);
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
	register_post_type( 'how to make change',
		array(
			'labels' => array(
					'name' => __ ( 'How to Make Change' ),
					'singular_name' => __ ( 'How to' )
			 ),
			 'public' => true,
			 'has_archive' => false,
			 'rewrite' => array( 'slug' => 'how-to-make-change' ),
		)
	);
	register_post_type( 'Checklists Templates',
		array(
			'labels' => array(
					'name' => __ ( 'Checklists Templates' ),
					'singular_name' => __ ( 'Checklist Template' )
			 ),
			 'public' => true,
			 'has_archive' => false,
			 'rewrite' => array( 'slug' => 'checklists-templates' ),
		)
	);
	register_post_type( 'External Resources',
		array(
			'labels' => array(
					'name' => __ ( 'External Resources' ),
					'singular_name' => __ ( 'External Resource' )
			 ),
			 'public' => true,
			 'has_archive' => false,
			 'rewrite' => array( 'slug' => 'external-resources' ),
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
