<?php
/**
 * hackathon scripts
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hackathon
 */



/**
 * Enqueue scripts and styles.
 */
function hackathon_scripts() {
	wp_enqueue_style( 'hackathon-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'hackathon-style', 'rtl', 'replace' );

	wp_enqueue_script( 'hackathon-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hackathon_scripts' );



/**
 * Load bootstrap from CDN
 * https://getbootstrap.com/
 *
 * Added functions to add the integrity and crossorigin attributes to the style and script tags.
 */
function enqueue_load_bootstrap() {
    // Add bootstrap CSS
    wp_register_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css', false, NULL, 'all' );
    wp_enqueue_style( 'bootstrap-css' );

    // Add popper js
    wp_register_script( 'popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js', ['jquery'], NULL, true );
    wp_enqueue_script( 'popper-js' );

    // Add bootstrap js
    wp_register_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js', ['jquery'], NULL, true );
    wp_enqueue_script( 'bootstrap-js' );
}

// Add integrity and cross origin attributes to the bootstrap css.
function add_bootstrap_css_attributes( $html, $handle ) {
    if ( $handle === 'bootstrap-css' ) {
        return str_replace( '/>', 'integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />', $html );
    }
    return $html;
}
add_filter( 'style_loader_tag', 'add_bootstrap_css_attributes', 10, 2 );

// Add integrity and cross origin attributes to the bootstrap script.
function add_bootstrap_script_attributes( $html, $handle ) {
    if ( $handle === 'bootstrap-js' ) {
        return str_replace( '></script>', ' integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>', $html );
    }
    return $html;
}
add_filter('script_loader_tag', 'add_bootstrap_script_attributes', 10, 2);

// Add integrity and cross origin attributes to the popper script.
function add_popper_script_attributes( $html, $handle ) {
    if ( $handle === 'popper-js' ) {
        return str_replace( '></script>', ' integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>', $html );
    }
    return $html;
}
add_filter('script_loader_tag', 'add_popper_script_attributes', 10, 2);

add_action( 'wp_enqueue_scripts', 'enqueue_load_bootstrap' );