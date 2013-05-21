<?php

// Shows which template the page is using when called.
// http://wordpress.org/support/topic/get-name-of-page-template-on-a-page?replies=14
function get_template_name () {
  foreach ( debug_backtrace() as $called_file ) {
    foreach ( $called_file as $index ) {
      if ( !is_array($index[0]) AND strstr($index[0],'/themes/') AND !strstr($index[0],'footer.php') ) {
        $template_file = $index[0] ;
      }
    }
  }
  $template_contents = file_get_contents($template_file) ;
  preg_match_all("(Template Name:(.*)\n)siU",$template_contents,$template_name);
  $template_name = trim($template_name[1][0]);
  if ( !$template_name ) { $template_name = '(default)' ; }
  $template_file = array_pop(explode('/themes/', basename($template_file)));
  return $template_file . ' > '. $template_name ;
}

function add_custom_js() {
  if ( !is_admin() ) {

    wp_register_script('karvel',
           '/wp-content/themes/karveldigital/js/karvel.js',
           array('jquery'),
         '1.4');
    
    // enqueue the scripts
    wp_enqueue_script('karvel', $in_footer='TRUE');
  }
} 

add_action('init', 'add_custom_js');