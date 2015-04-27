<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
// import Mixpanel
require ( PTP_PLUGIN_PATH . '/includes/libraries/mixpanel/Mixpanel.php');

/**
 * Tracks an event using the Mixpanel API if the user opted into tracking.
 * Example: dh_ptp_track_event("add to cart clicked", array("label" => "sign-up"));
 * 
 * @param  string $dh_ptp_event      [The name of the event that is being fired.]
 * @param  array $dh_ptp_properties  [Additional properties to track. (optional)]
 */
function dh_ptp_track_event($dh_ptp_event, $dh_ptp_properties = array())
{
    // only track events if the user agreed
    $dh_ptp_usage_tracking = get_option('dh_ptp_allow_tracking');
    if ($dh_ptp_usage_tracking == 'yes') 
    {
        // get the Mixpanel class instance
                                     
        $mp = Mixpanel::getInstance("9756ac6d74751169c32d9c752733f734");
        
        // Set user id: site url =  (url + site name) encoded
        $user_id = base64_encode(site_url().' '.get_bloginfo('name'));    
        
        // associate user to all subsequent track calls
        $mp->identify($user_id);
        
        // track the event
        $mp->track($dh_ptp_event, $dh_ptp_properties);
    }
}


// Deploy
function dh_ptp_tracking_deploy()
{
    global $features_metabox;
    
    $id = (isset($_REQUEST['id']) && preg_match('/^([0-9]+)$/', $_REQUEST['id']))?$_REQUEST['id']:false;
    $type = isset($_REQUEST['type'])?$_REQUEST['type']:'table';
    if ($id && get_option('dh_ptp_allow_tracking') == 'yes') {
        $meta = get_post_meta($id, $features_metabox->get_the_id(), TRUE);
        $columns = count($meta['column']);
        $meta_options = array(
            'dh-ptp-simple-flat-template',
            'dh-ptp-fancy-flat-template',
            'dh-ptp-stylish-flat-template',
            'dh-ptp-design4-template',
            'dh-ptp-dg5-template',
            'dh-ptp-comparison1-template',
            'dh-ptp-comparison2-template',
            'dh-ptp-comparison3-template'
        );
        $filter = '';
        foreach($meta_options as $option) {
            if (isset($meta[$option]) && $meta[$option] == 'selected') {
                $filter = $option;
                break;
            }
        }
        
        $design_name = $filter;
        if (function_exists('dh_ptp_track_event')) {
            dh_ptp_track_event('Deploy clicked', array('Number of columns' => $columns , 'Design name' => $design_name , 'type' => $type ));
        }
    }
    exit();
}
add_action('wp_ajax_dh_ptp_tracking_deploy', 'dh_ptp_tracking_deploy');

// Plugin activated
function dh_ptp_plugin_activated()
{
    if (function_exists('dh_ptp_track_event') && get_option('dh_ptp_allow_tracking') == 'yes') {
        dh_ptp_track_event('Plugin activated');
    }
}
register_activation_hook(PTP_PLUGIN_PATH.'/easy-pricing-tables-premium.php', 'dh_ptp_plugin_activated');

// Plugin deactivated
function dh_ptp_plugin_deactivated()
{
    if (function_exists('dh_ptp_track_event') && get_option('dh_ptp_allow_tracking') == 'yes') {
        dh_ptp_track_event('Plugin deactivated');
    }
}
register_deactivation_hook(PTP_PLUGIN_PATH.'/easy-pricing-tables-premium.php', 'dh_ptp_plugin_deactivated');

?>