<?php
/**
 * Functions and definitions
 *
 * @package Niya
 */

namespace Niya;

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

define( 'NIYA_VERSION', '1.0.0' );
define( 'NIYA_DIR', rtrim( get_template_directory(), '/' ) );
define( 'NIYA_URL', rtrim( get_template_directory_uri(), '/' ) );

/**
 * Theme setup.
 *
 * @since 1.0.0
 */
add_action(
	'after_setup_theme',
	function () {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails.
		add_theme_support( 'post-thumbnails' );

		// Admin editor styles.
		add_theme_support( 'editor-styles' );

		// Switch default core markup for different forms to output valid HTML5.
		add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Enable block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style();
	}
);

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 */
add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style( 'niya-style', NIYA_URL . '/style.css', array(), NIYA_VERSION );
		wp_style_add_data( 'niya-style', 'rtl', 'replace' );
	}
);

/**
 * Custom block styles.
 *
 * @since 1.0.0
 */
add_action(
	'init',
	function () {
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'pill',
				'label' => esc_html__( 'Pill', 'niya' ),
			)
		);
	}
);
