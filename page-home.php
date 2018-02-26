<?php
/**
 * Template Name: Home Page
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://www.studiopress.com/
 */

// Add landing page body class to the head.
add_filter( 'body_class', 'genesis_sample_add_body_class' );
function genesis_sample_add_body_class( $classes ) {

	$classes[] = 'homepage';

	return $classes;

}

// Force full width content layout.
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

// Remove the default Genesis loop
remove_action( 'genesis_loop', 'genesis_do_loop' );

// Add custom homepage content
add_action( 'genesis_loop', 'tuck_homepage_content' );


function tuck_homepage_content() {
	?>
	<h1>here</h1>;
	<?php
}

// Run the Genesis loop.
genesis();
