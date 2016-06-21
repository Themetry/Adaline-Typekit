<?php
/**
 * Adaline Typekit functions
 *
 * @package Adaline Typekit
 */

/**
 * Enqueue styles.
 */
function adaline_typekit_styles() {
	// Load the parent theme stylesheet
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
} // end function adaline_typekit_styles
add_action( 'wp_enqueue_scripts', 'adaline_typekit_styles' );

/**
 * Add Typekit embed code to head
 *
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/wp_head
 *
 */
function adaline_typekit_embed() {
	$output =  '<script src="https://use.typekit.net/nsi8rjh.js"></script>'; // Replace with your own Typekit embed URL
	$output .= '<script>try{Typekit.load({ async: true });}catch(e){}</script>'; // Be mindful of single vs. double quotes

	echo $output;
} // end function adaline_typekit_embed
add_action( 'wp_head', 'adaline_typekit_embed' );
