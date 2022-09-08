<?php
/**
 * hackathon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hackathon
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Implement the Setup
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Implement the Custom Function.
 */
require get_template_directory() . '/inc/custom-functions.php';

/**
 * Implement the Custom Post Type
 */
require get_template_directory() . '/inc/custom-post-type.php';


/**
 * function to output page builder blocks or only return list of blocks
 */
function acf_display_pb_blocks(){
	$blocks = array(
	  'two_column_layout',
	  'team_layout',
	  'cta_registration',
	  'two_columns_with_heading',
	  'random_blog_post',
	  'countdown_timer',
	);
  
	if( have_rows('blocks') ):
		while ( have_rows('blocks') ) : the_row();
			$layout = get_row_layout();
	
			if( in_array( get_row_layout(), $blocks ) ){
			get_template_part( 'components/block', $layout );
			}
		endwhile;
	endif;
}

function wra_theme_menu_classes($classes, $item, $args) {
	if($args->theme_location == 'secondary') {
		$classes[] = 'nav-item';
	}

	elseif ($args->theme_location == 'primary') {
		$classes[] = 'nav-item';
	}
	return $classes;
}
add_filter('nav_menu_css_class','wra_theme_menu_classes',1,3);


/*
* Adds a class 
* @link https://codex.wordpress.org/Plugin_API/Filter_Reference/nav_menu_link_attributes
*
*/

function add_specific_menu_location_atts( $atts, $item, $args ) {
    // check if the item is in the primary menu
    if( $args->theme_location == 'primary' ) {
      // add the desired attributes:
      $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );
