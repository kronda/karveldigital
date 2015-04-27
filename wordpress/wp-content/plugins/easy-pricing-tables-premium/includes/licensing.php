<?php

/************************************
Auto Updates
Instructions: https://easydigitaldownloads.com/docs/automatic-upgrades-for-wordpress-plugins/
 ************************************* */

// this is the URL our updater / license checker pings. This should be the URL of the site with EDD installed
define( 'DH_PTP_STORE_URL', 'https://fatcatapps.com/' );

// this is the name of license package
define( 'DH_PTP_LICENSE_PACKAGE', 'Agency' );

// the name of your product. This should match the download name in EDD exactly
define( 'DH_PTP_ITEM_NAME', 'Easy Pricing Tables Premium: '.DH_PTP_LICENSE_PACKAGE );

// this is the name of lowest license package
define( 'DH_PTP_EXCLUDE_LICENSE_PACKAGE', 'Personal' );

if( !class_exists( 'EDD_SL_Plugin_Updater' ) ) {
    // load our custom updater
    include( dirname( __FILE__ ) . '/libraries/licensing/EDD_SL_Plugin_Updater.php' );
}

// retrieve our license key from the DB
$license_key = trim( get_option( 'dh_ptp_license_key' ) );

// setup the updater
$edd_updater = new EDD_SL_Plugin_Updater( DH_PTP_STORE_URL, PTP_PlUGIN_FILE, array(
        'version' 	=> '2.0.3', 				// current version number
        'license' 	=> $license_key, 		// license key (used get_option above to retrieve from DB)
        'item_name' => DH_PTP_ITEM_NAME, 	// name of this plugin
        'author' 	=> 'David Hehenberger',  // author of this plugin
        'url'       => home_url()
    )
);

/************************************
 Licensing UI
 ************************************* */


add_action( 'admin_menu', 'dh_ptp_license_menu' );

function dh_ptp_license_menu() {
    add_submenu_page( 'edit.php?post_type=easy-pricing-table', __('Settings', PTP_LOC), __('Settings', PTP_LOC), 'manage_options', 'easy-pricing-tables-license', 'dh_ptp_license_page');

}
add_action('admin_menu', 'dh_ptp_license_menu');

function dh_ptp_license_page()
{
    $license  = get_option('dh_ptp_license_key' );
    $status   = get_option('dh_ptp_license_status', 'inactive');
    $google_analytic_integrating = get_option('dh_ptp_google_analytics');
    $checking_license_level = get_option( 'dh_ptp_grandfathered' ); 
    // only track events if the user agreed
    $dh_ptp_usage_tracking = (get_option('dh_ptp_allow_tracking') == 'no' || get_option('dh_ptp_allow_tracking') === '')?false:true;
    ?>
    
    <div class="wrap">
        <h2><?php _e('Plugin Options', PTP_LOC); ?></h2>
        <form method="post" action="options.php">
            
            <?php wp_nonce_field( 'dh_ptp_license_nonce', 'dh_ptp_license_nonce' ); ?>
            
            <h3>
                <?php _e('License', PTP_LOC); ?>
                <?php if($status == 'valid' ) { ?>
                    <span style="color: #fff; background: #7ad03a; font-size: 13px; padding: 4px 6px 3px 6px; margin-left: 5px;"><?php _e('ACTIVE', PTP_LOC); ?></span>
                <?php } elseif($status == 'expired' ) { ?>
                    <span style="color: #fff; background: #dd3d36; font-size: 13px; padding: 4px 6px 3px 6px; margin-left: 5px;"><?php _e('EXPIRED', PTP_LOC); ?></span>
                <?php } else { ?>
                    <span style="color: #fff; background: #dd3d36; font-size: 13px; padding: 4px 6px 3px 6px; margin-left: 5px;"><?php _e('INACTIVE.', PTP_LOC); ?></span>
                <?php } ?>
            </h3>
            
            <table class="form-table">
                <tbody>
                    <tr valign="top">
                        <th scope="row" valign="top">
                            <?php _e('License Key', PTP_LOC); ?>
                        </th>
                        <td>
                            <input id="dh_ptp_license_key" name="dh_ptp_license_key" type="text" class="regular-text" value="<?php esc_attr_e( $license ); ?>" /><br/>
                            <label class="description" for="dh_ptp_license_key"><?php _e('Enter your license key', PTP_LOC); ?></label>
                        </td>
                    </tr>
                    <?php // if( false !== $license ) { ?>
                        <tr valign="top">
                            <th scope="row" valign="top">
                                <?php _e('Activate License', PTP_LOC); ?>
                            </th>
                            <td>
                                <?php if($status == 'valid' ) { ?>
                                    <input type="submit" class="button-secondary" name="dh_ptp_license_deactivate" value="<?php _e('Deactivate License', PTP_LOC); ?>"/>
                                <?php } elseif($status == 'expired' ) { ?>
                                    <input type="submit" class="button-secondary" name="dh_ptp_license_deactivate" value="<?php _e('Deactivate License', PTP_LOC); ?>"/>
                                <?php } else { ?>
                                    <input type="submit" class="button-secondary" name="dh_ptp_license_activate" value="<?php _e('Activate License', PTP_LOC); ?>"/>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php //} ?>
                </tbody>
            </table>
            
            <?php if (in_array('google-analytics-for-wordpress/googleanalytics.php', get_option('active_plugins')) && ( DH_PTP_LICENSE_PACKAGE != DH_PTP_EXCLUDE_LICENSE_PACKAGE || $checking_license_level !=='no' ) ) : ?>
                <h3><?php _e('Google Analytics Integration', PTP_LOC); ?></h3>
                <table class="form-table">
                    <tbody>
                        <tr valign="top">
                            <th scope="row" valign="top">
                                <?php _e('Enable tracking', PTP_LOC); ?>
                            </th>
                            <td>
                                <input id="dh_ptp_google_analytics" name="dh_ptp_google_analytics" type="checkbox" value="1" <?php echo ($google_analytic_integrating)?'checked':'';?>/>
                                <label for="dh_ptp_google_analytics" class="description"><?php _e('Track pricing table button clicks using Google Analytics events', PTP_LOC); ?></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?php else : ?>
                <input id="dh_ptp_google_analytics" name="dh_ptp_google_analytics" type="hidden" value="0"/>
            <?php endif; ?>
                
            <?php
             // Add the Mixpannel option            
            if ( $status == 'valid' ) : ?>
                <h3><?php _e('Tracking Settings', PTP_LOC); ?></h3>
                <table class="form-table">
                    <tbody>
                        <tr valign="top">
                            <th scope="row" valign="top">
                                <?php _e('Allow Usage Tracking', PTP_LOC); ?>
                            </th>
                            <td>
                                <input id="dh_ptp_mixpanel_tracking" name="dh_ptp_allow_tracking" type="checkbox" value="yes" <?php echo ($dh_ptp_usage_tracking)?'checked':'';?>/>
                                <label for="dh_ptp_mixpanel_tracking" class="description"><?php _e('Allow us to anonymously track how this plugin is used and help us make the plugin better. We will not track any personal data.', PTP_LOC); ?></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?php else : ?>
                <input id="dh_ptp_mixpanel_tracking" name="dh_ptp_allow_tracking" type="hidden" value="no"/>
            <?php endif; ?>    
                
            <?php //settings_fields('dh_ptp_tracking'); ?>
            <?php settings_fields('dh_ptp_license'); ?>
            <?php submit_button(); ?>
    
        </form>
    </div>
    <?php
}

function dh_ptp_register_option()
{
    // creates our settings in the options table
    register_setting('dh_ptp_license', 'dh_ptp_license_key', 'dh_ptp_sanitize_license');
    //register_setting('dh_ptp_license', 'dh_ptp_license_key');
    register_setting('dh_ptp_license', 'dh_ptp_google_analytics');
    register_setting('dh_ptp_license', 'dh_ptp_allow_tracking');
}
add_action('admin_init', 'dh_ptp_register_option');

function dh_ptp_sanitize_license( $new )
{
    $old = get_option( 'dh_ptp_license_key' );
    if( $old && $old != $new ) {
        delete_option( 'dh_ptp_license_status' ); // new license has been entered, so must reactivate
    }
    return $new;
}


/************************************
Activating the license
 ************************************* */

function dh_ptp_activate_license()
{
    
    // listen for our activate button to be clicked
    if( isset( $_POST['dh_ptp_license_activate'] ) && isset( $_POST['dh_ptp_license_key'] ) && $_POST['dh_ptp_license_key'] ) {
        
        // run a quick security check
        if( ! check_admin_referer( 'dh_ptp_license_nonce', 'dh_ptp_license_nonce' ) ) {
            return; // get out if we didn't click the Activate button
        }
        
        // retrieve the license from the database
//        $license = trim( get_option( 'dh_ptp_license_key' ) );    
         $license = $_POST['dh_ptp_license_key'] ;
        // data to send in our API request
        $api_params = array(
            'edd_action'=> 'activate_license',
            'license' 	=> $license,
            'item_name' => urlencode( DH_PTP_ITEM_NAME ), // the name of our product in EDD
            'url'       => home_url()
        );

        // Call the custom API.
        $response = wp_remote_get( add_query_arg( $api_params, DH_PTP_STORE_URL ) );
        
        // make sure the response came back okay
        if ( is_wp_error( $response ) )
            return false;

        // decode the license data
        $license_data = json_decode( wp_remote_retrieve_body( $response ) );

        // Expired fix
        if ($license_data->license == 'invalid' && isset($license_data->error) && $license_data->error == 'expired') {
            $license_data->license = 'expired';   
        }
                       
        $grandfathered = get_option('dh_ptp_grandfathered');        
        
        if( ( !$grandfathered || $grandfathered == '' ) && !in_array( $license_data->license, array( 'invalid' , 'expired', 'inactive', 'disabled' )) ) {
            tt_ptp_update_grandfathered_option( $license_data->expires );  
        }
        
        // $license_data->license will be either "active" or "inactive"
        update_option( 'dh_ptp_license_status', $license_data->license );

    }
}
add_action('admin_init', 'dh_ptp_activate_license');


/************************************
Deactivating the license
 ************************************* */
function dh_ptp_deactivate_license()
{

    // listen for our activate button to be clicked
    if( isset( $_POST['dh_ptp_license_deactivate'] )  ) {
        
        // run a quick security check 
        if( ! check_admin_referer( 'dh_ptp_license_nonce', 'dh_ptp_license_nonce' ) ) {
            return; // get out if we didn't click the Activate button
        }

        // retrieve the license from the database
        $license = trim( get_option( 'dh_ptp_license_key' ) );

        // data to send in our API request
        $api_params = array( 
            'edd_action'=> 'deactivate_license', 
            'license'   => $license, 
            'item_name' => urlencode( DH_PTP_ITEM_NAME ), // the name of our product in EDD
            'url'       => home_url()
        );
        
        // Call the custom API.
        $response = wp_remote_get( add_query_arg( $api_params, DH_PTP_STORE_URL ), array( 'timeout' => 15, 'sslverify' => false ) );

        // make sure the response came back okay
        if ( is_wp_error( $response ) ) {
            return false;
        }

        // decode the license data
        $license_data = json_decode( wp_remote_retrieve_body( $response ) );
        if( $license_data->license == 'deactivated' || $license_data->license == 'failed') {
            delete_option( 'dh_ptp_license_status' );
        }

    }
    
}
add_action('admin_init', 'dh_ptp_deactivate_license');

/* license check */
$dh_ptp_post_type = dh_ptp_get_current_post_type();
$dh_ptp_page = (isset($_REQUEST['page']) && $_REQUEST['page'] == 'easy-pricing-tables-license')?true:false;
$dh_ptp_license_status = get_option('dh_ptp_license_status', 'inactive');
/*if (!in_array($dh_ptp_license_status, array('valid', 'expired')) && !$dh_ptp_page && $dh_ptp_post_type == 'easy-pricing-table') {
        add_action('admin_menu', 'dh_ptp_plugin_not_activated');
}*/

function dh_ptp_plugin_not_activated()
{
    ob_start();
    wp_redirect('edit.php?post_type=easy-pricing-table&page=easy-pricing-tables-license', 301);
    exit();
}

function dh_ptp_get_current_post_type()
{
    global $post, $typenow, $current_screen;
      
    if ( $post && $post->post_type ) {
        return $post->post_type;
    } elseif( $typenow ) {
        return $typenow;
    } elseif( $current_screen && $current_screen->post_type ) {
        return $current_screen->post_type;
    } elseif( isset( $_REQUEST['post_type'] ) ) {
        return sanitize_key( $_REQUEST['post_type'] );
    }
    
    return null;
}

/**
 * 
 * This function is used to dectect if user bought the license before 
 *  the new level package rule is released
 * 
 */
function dh_ptp_manual_detect_grandfathered () {
        
        // retrieve the license from the database
        $license = trim( get_option( 'dh_ptp_license_key' ) );
        $dh_ptp_grandfathered = get_option( 'dh_ptp_grandfathered' );
        if( $license && ( !$dh_ptp_grandfathered || $dh_ptp_grandfathered =='' ) ){
           // data to send in our API request
            $api_params = array(
                'edd_action'=> 'check_license',
                'license' 	=> $license,
                'item_name' => urlencode( DH_PTP_ITEM_NAME ), // the name of our product in EDD
                'url'       => home_url()
            );

        // Call the custom API.
        $response = wp_remote_get( add_query_arg( $api_params, DH_PTP_STORE_URL ) );
        
        // make sure the response came back okay
        if ( is_wp_error( $response ) )
            return false;
      
        // decode the license data
        $license_data = json_decode( wp_remote_retrieve_body( $response ) );
        if ( !in_array( $license_data->license, array( 'invalid' , 'expired', 'inactive' , 'disabled' )) ) {
            tt_ptp_update_grandfathered_option( $license_data->expires );
        }
            
     }
     /*
      * btw, This function is aslo used when we can activate the license normally
      * so that we have to uncomment this function to update the option
      */
     /*$dh_ptp_grandfathered = get_option( 'dh_ptp_grandfathered' );
     if( !$dh_ptp_grandfathered || $dh_ptp_grandfathered == '' ) {
         update_option( 'dh_ptp_grandfathered', 'yes' );
     }*/
}
add_action( 'admin_init', 'dh_ptp_manual_detect_grandfathered', 999 );

// decide and update the value of grandfathered option 
function tt_ptp_update_grandfathered_option ( $expiry ) {
    
        // the date user bought the license = ( the expire date - 1 year )
        $original_purchase_date = strtotime( "$expiry -1 year" );
        // the date the version which includes checking level license  is released: 2014-11-12
        $date_to_check_level_license = strtotime( "2014-11-14 00:00" );
            
        if( $original_purchase_date > $date_to_check_level_license ) {            
              update_option( 'dh_ptp_grandfathered', 'no' );
        } else {
              update_option( 'dh_ptp_grandfathered', 'yes' ); 
        }
}

?>
