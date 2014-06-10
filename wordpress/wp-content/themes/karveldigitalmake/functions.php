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