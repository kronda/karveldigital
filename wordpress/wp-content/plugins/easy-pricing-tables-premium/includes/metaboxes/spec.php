<?php

/**
 * Add the features meta box
 * @var [type]
 */

$features_metabox = new WPAlchemy_MetaBox(array
(
	'id' => '1_dh_ptp_settings',
	'title' => __('Pricing Table Settings', PTP_LOC),
	'template' => PTP_PLUGIN_PATH . 'includes/metaboxes/features-metabox.php',
	'types' => array('easy-pricing-table'),
    'autosave' => TRUE,
    'priority' => 'high',
    'context' => 'normal',
    
));

   /**
    * This is a patch fix for user just move from old design 5 table to Comparison table
    * Will be removed in furture
    */
  function patch_fix_for_old_design5_table()
  {   
       $patch_fix_for_old_design5_table = get_option( 'patch_fix_for_old_design5_table' );
       if( !$patch_fix_for_old_design5_table || $patch_fix_for_old_design5_table =='' ) { 
            global $post;
            
            // Args
            $args = array(
                'post_type'=> 'easy-pricing-table',
                'post_status'=> array('publish', 'draft'),
                'posts_per_page'=> -1
            );

            // Fetch all pricing tables
            $post_clone = $post;
            $query = new WP_Query($args);
            if ( $query->have_posts() ) : 
                while ( $query->have_posts() ) : $query->the_post();
                    $meta = get_post_meta($post->ID, '1_dh_ptp_settings', true);
                     
                    if (isset($meta['dh-ptp-design5-template']) && $meta['dh-ptp-design5-template'] == 'selected') {
                       
                        $meta['dh-ptp-comparison1-template'] = 'selected';
                        $meta['comparison-table-features'] = $meta['design5-table-features'];
                        $meta['ept-custom-css-setting-cp1'] = $meta['ept-custom-css-setting-dg5'];
                        unset( $meta['ept-custom-css-setting-dg5'] );
                        unset( $meta['design5-table-features'] );
                        $_meta = $meta;
                        foreach ($_meta as $key => $value) {
                           if ( strpos( $key, 'design5' ) !== false ) {
                               
                                $new_key =  str_replace( 'design5','comparison1', $key); 
                                $meta[ $new_key ] = $value;
                          }
                            
                        }
                        update_post_meta( $post->ID, '1_dh_ptp_settings', $meta); 
                    } 
                endwhile;
            endif;

            // Restore original Post Data
            $post = $post_clone;
           update_option( 'patch_fix_for_old_design5_table', 'yes' );
      }
  }
  add_action('init', 'patch_fix_for_old_design5_table', 10 );
?>