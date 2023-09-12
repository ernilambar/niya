<?php
/**
 * Functions and definitions
 *
 * @package Niya
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

define( 'NIYA_VERSION', '1.0.0' );
define( 'NIYA_DIR', rtrim( get_template_directory(), '/' ) );
define( 'NIYA_URL', rtrim( get_template_directory_uri(), '/' ) );

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 */
function niya_scripts() {
	wp_enqueue_style( 'niya-style', NIYA_URL . '/style.css', array(), NIYA_VERSION );
	wp_style_add_data( 'niya-style', 'rtl', 'replace' );
}

add_action( 'wp_enqueue_scripts', 'niya_scripts' );
