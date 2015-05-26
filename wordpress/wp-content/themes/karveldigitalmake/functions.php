<?php
/**
 * @package Make Karvel Digital
 */

/** Exclude Portfolio category from posts */
add_action( 'pre_get_posts', 'karvel_exclude_category_from_blog' );
function karvel_exclude_category_from_blog( $query ) {

    if( $query->is_main_query() && $query->is_home() ) {
        $query->set( 'cat', '-31' ); // cat id #s
    }
}

/**
 * Add body classes
 */
function karvel_add_body_class( $classes ) {
  global $post;
  if ( isset( $post ) ) {
      $classes[] = $post->post_type . '-' . $post->post_name;
  }
  if ( !is_front_page() ) {
  $classes[] = 'not-home';
  }
  return $classes;
}

add_filter( 'body_class', 'karvel_add_body_class' );