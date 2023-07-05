<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage DM Group
 * @since DM Group 1.0
 */


if ( ! function_exists( 'dmgroup_support' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since DM Group 1.0
	 *
	 * @return void
	 */

	function dmgroup_support() {
		// The document title
		add_theme_support( 'title-tag' );

		// Post-formats
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		// Enable support for Post Thumbnails on posts and pages
		add_theme_support( 'post-thumbnails' );

		// Custom image sizes
  	add_image_size( 'offer-box-img', 520, 460, array( 'center', 'center' ) );
  	add_image_size( 'offer-gallery-img', 1200, 840, array( 'center', 'center' ) );
  	add_image_size( 'gallery-thumbnail', 640, 850, array( 'center', 'center' ) );
  	add_image_size( 'person-img', 430, 510, array( 'center', 'center' ) );

		// Navigation Menus
		register_nav_menus( array(
			'primary' => __( 'Menu główne', 'dmgroup' ),
			'footer' => __( 'Menu w stopce', 'dmgroup' ),
			'offer-menu' => __( 'Menu z ofertą', 'dmgroup' )
		));
	}
}
add_action( 'after_setup_theme', 'dmgroup_support' );


if ( ! function_exists( 'dmgroup_scripts' ) ) {
	/**
	 * Enqueue styles and scripts.
	 *
	 * @since DM Group 1.0
	 *
	 * @return void
	 */

	function dmgroup_scripts() {
		wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/css/style.css', false, time(), 'all' );
		wp_enqueue_style( 'default', get_stylesheet_uri(), false, time(), 'all' );

		wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/js/main.js', false, time(), true );
	}
}
add_action( 'wp_enqueue_scripts', 'dmgroup_scripts' );


/** Template parts */
require_once( 'template-parts/theme-settings/functions.php' );


/** Custom functions for the theme */
require get_template_directory() . '/inc/acf-blocks.php';
require get_template_directory() . '/inc/custom-post.php';
require get_template_directory() . '/inc/breadcrumbs.php';
require get_template_directory() . '/inc/pll-strings.php';


/** Allow SVG **/
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


/** Register widget area **/
function dmgroup_widgets_init() {
	if ( function_exists('register_sidebar') ) {
		register_sidebar(
			array(
				'name'          => __( 'Slider logo', 'dmgroup' ),
				'id'            => 'sidebar-1',
				'description'   => '',
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Zapytanie ofertowe - formularz kontaktowy', 'dmgroup' ),
				'id'            => 'sidebar-2',
				'description'   => '',
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}
 }
 add_action( 'widgets_init', 'dmgroup_widgets_init' );