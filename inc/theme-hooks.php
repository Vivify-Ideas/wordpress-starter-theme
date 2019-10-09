<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package vivify_theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function vivify_theme_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'vivify_theme_body_classes' );


/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function vivify_theme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'vivify_theme_pingback_header' );


/**
 * Modify WP Login
 */
// change error message
function vivify_theme_error_message() {
	return 'Wrong username or password.';
}
add_filter( 'login_errors', 'vivify_theme_error_message' );

// remove error shaking
function vivify_theme_remove_login_shake() {
	remove_action( 'login_head', 'wp_shake_js', 12 );
}
add_action( 'login_head', 'vivify_theme_remove_login_shake' );

// add custom stylesheet
function vivify_theme_add_login_styles() {
	wp_enqueue_style('vivify_theme-login-style', get_template_directory_uri() . '/assets/config/customize-login/login.css' );
}
add_action( 'login_enqueue_scripts', 'vivify_theme_add_login_styles' );

// add login title
function vivify_theme_add_login_title() {
	echo '<span class="login-title">vivify_theme login</span>';
}
add_action( 'login_form', 'vivify_theme_add_login_title' );

// change logo url
function vivify_theme_loginlogo_url($url) {
	$url = esc_url( home_url( '/' ) );
	return $url;
}
add_filter( 'login_headerurl', 'vivify_theme_loginlogo_url' );


/**
 * Plugin dependencies
 */
function vivify_theme_dependencies() {
	if( ! function_exists('get_field') ) {
		echo '<div class="error"><p>' . __( 'Warning: The theme needs ACF Pro plugin to function', 'vivify_theme' ) . '</p></div>';
	}
}
add_action( 'admin_notices', 'vivify_theme_dependencies' );
