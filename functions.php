<?php
/**
 * Photovia theme setup.
 *
 * @package Photovia
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'PHOTOVIA_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function photovia_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	add_theme_support( 'custom-logo' );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'photovia' ),
			'footer'  => esc_html__( 'Footer', 'photovia' ),
		)
	);

	load_theme_textdomain( 'photovia', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'photovia_setup' );

/**
 * Footer widget area.
 */
function photovia_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'photovia' ),
			'id'            => 'sidebar-footer',
			'description'   => esc_html__( 'Widgets shown in the footer area.', 'photovia' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'photovia_widgets_init' );

/**
 * Enqueue front-end assets.
 */
function photovia_enqueue_assets() {
	wp_enqueue_style( 'photovia-style', get_stylesheet_uri(), array(), PHOTOVIA_VERSION );
	wp_enqueue_script( 'photovia-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), PHOTOVIA_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'photovia_enqueue_assets' );

/**
 * Enqueue editor assets.
 */
function photovia_enqueue_editor_assets() {
	wp_enqueue_style( 'photovia-editor', get_template_directory_uri() . '/assets/css/editor.css', array(), PHOTOVIA_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'photovia_enqueue_editor_assets' );

/**
 * Register the Photovia pattern category.
 */
function photovia_register_pattern_category() {
	register_block_pattern_category(
		'photovia',
		array( 'label' => esc_html__( 'Photovia', 'photovia' ) )
	);
}
add_action( 'init', 'photovia_register_pattern_category' );

/**
 * Custom block styles.
 */
function photovia_register_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'amber-outline', 'label' => esc_html__( 'Amber Outline', 'photovia' ) ) );
	register_block_style( 'core/group', array( 'name' => 'gallery-card', 'label' => esc_html__( 'Gallery Card', 'photovia' ) ) );
	register_block_style( 'core/image', array( 'name' => 'soft-frame', 'label' => esc_html__( 'Soft Frame', 'photovia' ) ) );
	register_block_style( 'core/heading', array( 'name' => 'amber-rule', 'label' => esc_html__( 'Amber Rule', 'photovia' ) ) );
}
add_action( 'init', 'photovia_register_block_styles' );

/**
 * Custom excerpt length.
 */
function photovia_excerpt_length( $length ) {
	return 24;
}
add_filter( 'excerpt_length', 'photovia_excerpt_length' );

/**
 * Simple inline SVG icon helper.
 *
 * @param string $name Icon name.
 * @return string SVG markup.
 */
function photovia_icon( $name ) {
	$icons = array(
		'camera'   => '<path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/>',
		'aperture' => '<circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83M16.62 12l-5.74 9.94"/>',
		'heart'    => '<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>',
		'star'     => '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>',
		'check'    => '<path d="M20 6L9 17l-5-5"/>',
		'clock'    => '<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>',
		'pin'      => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/>',
		'phone'    => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.13.96.36 1.9.7 2.8a2 2 0 0 1-.45 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.25a2 2 0 0 1 2.1-.45c.9.34 1.84.57 2.8.7A2 2 0 0 1 22 16.9z"/>',
		'mail'     => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 7l-10 6L2 7"/>',
		'image'    => '<rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/>',
		'users'    => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>',
		'sparkle'  => '<path d="M12 3l1.9 5.8a2 2 0 0 0 1.3 1.3L21 12l-5.8 1.9a2 2 0 0 0-1.3 1.3L12 21l-1.9-5.8a2 2 0 0 0-1.3-1.3L3 12l5.8-1.9a2 2 0 0 0 1.3-1.3L12 3z"/>',
		'quote'    => '<path d="M3 21c3 0 7-1 7-8V5c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h3v5c-3 1-5 2-7 2zM14 21c3 0 7-1 7-8V5c0-1.1-.9-2-2-2h-4c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h3v5c-3 1-5 2-7 2z"/>',
	);
	if ( ! isset( $icons[ $name ] ) ) {
		return '';
	}
	return '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $icons[ $name ] . '</svg>';
}
