<?php
/**
 * @package Meteor Child Theme
 */

/**
 * Load the parent and child theme styles
 */
function meteor_parent_theme_style() {

	// Parent theme styles
	wp_enqueue_style( 'meteor-style', get_template_directory_uri(). '/style.css' );

	// Child theme styles
	wp_enqueue_style( 'meteor-child-style', get_stylesheet_directory_uri(). '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'meteor_parent_theme_style' );

/**
 * Add additional functions below
 */
