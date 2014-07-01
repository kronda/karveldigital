<?php
/**
 * @package   wp-bitly
 * @author    Mark Waterous <mark@watero.us>
 * @license   GPL-2.0+
 * @link      http://wordpress.org/plugins/wp-bitly
 * @copyright 2014 Mark Waterous
 */

if ( !defined( 'WP_UNINSTALL_PLUGIN' ) )
	die;


/**
 * Some people just don't know how cool this plugin is. When they realize
 * it and come back later, let's make sure they have to start all over.
 */
function wpbitly_uninstall() {

	delete_option( 'wpbitly-options' );

	// Grab all posts with an attached shortlink
	$posts = get_posts( 'numberposts=-1&post_type=any&meta_key=_wpbitly' );

	// And remove our meta information from them
	foreach ( $posts as $post )
		delete_post_meta( $post->ID, '_wpbitly' );
}

wpbitly_uninstall();
