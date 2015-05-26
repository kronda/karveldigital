<?php
/*
	Plugin Name: Easy Pricing Tables Premium
	Plugin URI: https://fatcatapps.com/easypricingtables
	Description: Create a Beautiful, Responsive and Highly Converting Pricing Table in Less Than 5 Minutes with Easy Pricing Tables for WordPress. No Coding Required.
	Author: Fatcat Apps
	Version: 2.0.3
	Author URI: https://fatcatapps.com
 */

add_action( 'admin_init', 'ptp_deactivate_free' );
function ptp_deactivate_free() {
  deactivate_plugins( 'easy-pricing-tables-free/pricing-table-plugin.php' );
}

if( ! defined( 'PTP_PLUGIN_PATH' ) ) {

  // define a constant to always include the absolute path
  define('PTP_PLUGIN_PATH', plugin_dir_path( __FILE__ ));
  define('PTP_PLUGIN_PATH_FOR_SUBDIRS', plugins_url(str_replace(dirname(dirname(__FILE__)), '', dirname(__FILE__))));
  define('PTP_PlUGIN_FILE', __FILE__);
  define('PTP_LOC', 'easy-pricing-tables');

  // include post types
  include ( PTP_PLUGIN_PATH . 'includes/post-types.php');

  // include media button
  include ( PTP_PLUGIN_PATH . 'includes/media-button.php');

  // Include clone table
  include ( PTP_PLUGIN_PATH . 'includes/clone-table.php');

  // Font Awesome
  include (PTP_PLUGIN_PATH . 'includes/font-awesome-icons.php');

  //include shortcodes
  include ( PTP_PLUGIN_PATH . 'includes/shortcodes.php');

  //inclue presstrends analytics
  include ( PTP_PLUGIN_PATH . 'includes/analytics.php');
  
  //inclue mixpanel tracking
  include_once PTP_PLUGIN_PATH . 'includes/tracking.php';
  
  //include WPAlchemy
  if(!class_exists('WPAlchemy_MetaBox')) {
    include_once ( PTP_PLUGIN_PATH . 'includes/libraries/wpalchemy/MetaBox.php');
  }

  include_once ( PTP_PLUGIN_PATH . 'includes/metaboxes/spec.php');

  if(is_admin()) {
    // include WPAlchemy scripts
    include_once ( PTP_PLUGIN_PATH . 'includes/metaboxes/setup.php');
  }

  /**
   * Enqueue Admin Javascript in Pricing Tables create/edit pages
   */
  add_action( 'admin_enqueue_scripts', 'dh_ptp_admin_js_enqueue');
  function dh_ptp_admin_js_enqueue() {
    $screen = get_current_screen();
    if ( 'easy-pricing-table' != $screen->id ) {
      return;
    }
    wp_register_script( 'easy-palette', plugins_url( '/assets/ui/js/easy-palette.js', __FILE__ ) );
    wp_register_script( 'color-palettes', plugins_url( '/assets/ui/js/color-palettes.js', __FILE__ ) );
    wp_enqueue_script( 'easy-palette' );
    wp_enqueue_script( 'color-palettes');
    wp_enqueue_script( 'codemirror', PTP_PLUGIN_PATH_FOR_SUBDIRS.'/assets/ui/js/codemirror.js');
    wp_enqueue_script( 'css', PTP_PLUGIN_PATH_FOR_SUBDIRS.'/assets/ui/js/addon-codemirror/css.js');
    wp_enqueue_style( 'codemirror-style', PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/ui/codemirror.css' );
  }

  // Add settings link on plugin page
  function dh_ptp_plugin_settings_link($links)
  {
    // Remove Edit link
    unset($links['edit']);
    
    // Add Easy Pricing Tables links
    $add_new_link = '<a href="post-new.php?post_type=easy-pricing-table">'. __('Add New', PTP_LOC) . '</a>'; 
    $support_link   = '<a href="http://easypricingtables.com/kb/" target="_blank">' . __('Support', PTP_LOC) . '</a>';
    
    array_push($links, $add_new_link);
    array_push($links, $support_link);
    
    return $links; 
  }

  $plugin = plugin_basename(__FILE__); 
  add_filter("plugin_action_links_$plugin", 'dh_ptp_plugin_settings_link' );

  //include licensing script
  include ( PTP_PLUGIN_PATH . 'includes/licensing.php');
  
  // Localization
  function dh_ptp_localization()
  {   
    $locale = apply_filters( 'plugin_locale', get_locale(), PTP_LOC );
    
    load_textdomain( PTP_LOC, trailingslashit( WP_LANG_DIR ) . PTP_LOC . '/' . PTP_LOC . '-' . $locale . '.mo' );
    load_plugin_textdomain( PTP_LOC, FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
     
  }
  add_action('init', 'dh_ptp_localization');
}
