<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 11/15/13
 * Time: 15:48
 */


// include our HTML generators for each table
include ( PTP_PLUGIN_PATH . '/includes/table-generation/design1-table.php');
include ( PTP_PLUGIN_PATH . '/includes/table-generation/design2-table.php');
include ( PTP_PLUGIN_PATH . '/includes/table-generation/design3-table.php');
include ( PTP_PLUGIN_PATH . '/includes/table-generation/design4-table.php');
include ( PTP_PLUGIN_PATH . '/includes/table-generation/design5-table.php');
include ( PTP_PLUGIN_PATH . '/includes/table-generation/design6-table.php');
include ( PTP_PLUGIN_PATH . '/includes/table-generation/design7-table.php');
include ( PTP_PLUGIN_PATH . '/includes/table-generation/comparison1-table.php');
include ( PTP_PLUGIN_PATH . '/includes/table-generation/comparison2-table.php');
include ( PTP_PLUGIN_PATH . '/includes/table-generation/comparison3-table.php');


/**
 * Output the CSS of the pricing table
 * 
 * @param int $it the id of the easy pricing table
 * @todo track output CSS to prevent outputting it twice
 */
function dh_ptp_easy_pricing_table_dynamic_css( $id, $minified = true ) {
    global $features_metabox;
    
    // Retrieve all meta data for easy pricing tables
    $args = array(
        'post_type' => 'easy-pricing-table',
        'p' => $id,
        'post_status' => 'any'
    );
    $query = new WP_Query($args);

    ob_start();    
    echo '<style type="text/css">';
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $meta = get_post_meta(get_the_ID(), $features_metabox->get_the_id(), true);
            
            // Print css style per table
            if (isset($meta['dh-ptp-fancy-flat-template']) && $meta['dh-ptp-fancy-flat-template'] == 'selected') {
                // Print simple flat
                dh_ptp_fancy_flat_css(get_the_ID(), $meta);
            } elseif (isset($meta['dh-ptp-stylish-flat-template']) && $meta['dh-ptp-stylish-flat-template'] == 'selected') {
                // Print stylish flat
                dh_ptp_stylish_flat_css(get_the_ID(), $meta);
            } elseif (isset($meta['dh-ptp-design4-template']) && $meta['dh-ptp-design4-template'] == 'selected') {
                dh_ptp_design4_css(get_the_ID(), $meta);
            } elseif (isset($meta['dh-ptp-dg5-template']) && $meta['dh-ptp-dg5-template'] == 'selected') {
                dh_ptp_design5_css(get_the_ID(), $meta);
            } elseif (isset($meta['dh-ptp-dg6-template']) && $meta['dh-ptp-dg6-template'] == 'selected') {
                dh_ptp_design6_css(get_the_ID(), $meta);
            } elseif (isset($meta['dh-ptp-dg7-template']) && $meta['dh-ptp-dg7-template'] == 'selected') {
                dh_ptp_design7_css(get_the_ID(), $meta);
            } elseif (isset($meta['dh-ptp-comparison1-template']) && $meta['dh-ptp-comparison1-template'] == 'selected') {
                dh_ptp_comparison1_css(get_the_ID(), $meta);
            } elseif (isset($meta['dh-ptp-comparison2-template']) && $meta['dh-ptp-comparison2-template'] == 'selected') {
                dh_ptp_comparison2_css(get_the_ID(), $meta);
            } elseif (isset($meta['dh-ptp-comparison3-template']) && $meta['dh-ptp-comparison3-template'] == 'selected') {
                dh_ptp_comparison3_css(get_the_ID(), $meta);
            }else {
                // Print simple flat
                dh_ptp_simple_flat_css(get_the_ID(), $meta);
            }
            
        endwhile;
    endif;
 
    echo "</style>" . "\n";
    $css = ob_get_clean();

    wp_reset_postdata();

    if ( !empty( $minified ) ) {
        /**
         * Minify CSS (https://github.com/GaryJones/Simple-PHP-CSS-Minification/blob/master/minify.php)
         */        
        $css = preg_replace( '/\s+/', ' ', $css );
        $css = preg_replace( '/;(?=\s*})/', '', $css );
        $css = preg_replace( '/(,|:|;|\{|}|\*\/|>) /', '$1', $css );
        $css = preg_replace( '/ (,|;|\{|}|\(|\)|>)/', '$1', $css );
        $css = preg_replace( '/(:| )0\.([0-9]+)(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}.${2}${3}', $css );
        $css = preg_replace( '/(:| )(\.?)0(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}0', $css );
        $css = preg_replace( '/0 0 0 0/', '0', $css );
        $css = preg_replace( '/#([a-f0-9])\\1([a-f0-9])\\2([a-f0-9])\\3/i', '#\1\2\3', $css );
        $css = preg_replace( '/#([a-f0-9])\\1([a-f0-9])\\2([a-f0-9])\\3/i', '#\1\2\3', $css );
        // add the space between "and (" for make the responsive work
        $css = preg_replace( '/and\(/', 'and (', $css );
    }

    echo "\n$css\n\n";
}


/**
 * This function decides which table style we should create. It enqueue the appropriate CSS file and calls the appropriate function.
 *
 * @return string pricing table html
 */
function dh_ptp_generate_pricing_table($id, $hide = false)
{
    global $wp_styles;
    global $features_metabox;
    
    $meta = get_post_meta($id, $features_metabox->get_the_id(), TRUE);

    // Enqueue assets & IE Hacks
    wp_enqueue_style('ept-font-awesome');
    wp_enqueue_style('ept-foundation', PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/ui/foundation/foundation.css');
    wp_enqueue_script('ept-modernizr', PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/ui/foundation/modernizr.js', array('jquery'));
    wp_enqueue_script('ept-foundation', PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/ui/foundation/foundation.min.js', array('ept-modernizr', 'jquery'));
    wp_enqueue_script('ept-foundation-tooltip', PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/ui/foundation/foundation.tooltip.js', array('ept-modernizr', 'ept-foundation', 'jquery'));
    wp_enqueue_script('ept-ui-tooltip', PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/ui/ui-tooltip.js', array('ept-foundation-tooltip'));

    wp_enqueue_style('ept-ie-style', PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/ui/ui-ie.css');
    $wp_styles->add_data('ept-ie-style', 'conditional', 'lt IE 9');

    /**
     * Output the CSS just before the HTML to prevent showing unformatted content flash
     */
    dh_ptp_easy_pricing_table_dynamic_css($id);
    
    // Figure out which table we have here
    if (isset($meta['dh-ptp-fancy-flat-template']) && $meta['dh-ptp-fancy-flat-template'] == 'selected') {
        
        /**
         * fancy flat
         */
        
        //include css
        wp_enqueue_style( 'fancy-flat-table-style', PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/pricing-tables/fancy-flat/pricingtable.min.css'  );
     // Print stylish enable match-column-height
       if(isset($meta['match-column-height-dg2'])) {   
             wp_enqueue_script( 'matchHeight', PTP_PLUGIN_PATH_FOR_SUBDIRS.'/assets/ui/js/jquery.matchHeight-min.js', array('jquery'));
             tt_ptp_enable_column_match_height_script_dg2( $id );
        }
        //call appropriate function
        return dh_ptp_generate_fancy_flat_pricing_table_html($id, $hide);
    } elseif (isset($meta['dh-ptp-stylish-flat-template']) && $meta['dh-ptp-stylish-flat-template'] == 'selected') {
        
        /**
         * stylish flat
         */
        
        // Include dark theme by default
        wp_enqueue_style( 'stylish-flat-table-style', PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/pricing-tables/stylish-flat/css/pricingtable.min.css'  );
      // Print stylish enable match-column-height
       if(isset($meta['match-column-height-dg3'])) {   
             wp_enqueue_script( 'matchHeight', PTP_PLUGIN_PATH_FOR_SUBDIRS.'/assets/ui/js/jquery.matchHeight-min.js', array('jquery'));
             tt_ptp_enable_column_match_height_script_dg3( $id );
        }
        //call appropriate function
        return dh_ptp_generate_stylish_flat_pricing_table_html($id, $hide);
    } elseif (isset($meta['dh-ptp-design4-template']) && $meta['dh-ptp-design4-template'] == 'selected') {
        /**
         * Design 4
         */
        
        // Include default theme
        wp_enqueue_style( 'design4-table-style', PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/pricing-tables/design4/css/pricingtable.min.css'  );
      // Print stylish enable match-column-height
      /* if(isset($meta['match-column-height-dg4'])) {   
             wp_enqueue_script( 'matchHeight', PTP_PLUGIN_PATH_FOR_SUBDIRS.'/assets/ui/js/jquery.matchHeight-min.js');
             tt_ptp_enable_column_match_height_script_dg4();
        }*/
        //call appropriate function
        return dh_ptp_generate_design4_pricing_table_html($id, $hide);
    } elseif (isset($meta['dh-ptp-dg5-template']) && $meta['dh-ptp-dg5-template'] == 'selected') {
        /**
         * Design 5
         */
        
        // Include default theme
        wp_enqueue_style( 'design5-table-style', PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/pricing-tables/design5/pricingtable.min.css'  );
       // Print stylish enable match-column-height
       if(isset($meta['match-column-height-dg5'])) {   
             wp_enqueue_script( 'matchHeight', PTP_PLUGIN_PATH_FOR_SUBDIRS.'/assets/ui/js/jquery.matchHeight-min.js');
             tt_ptp_enable_column_match_height_script_dg5( $id );
        }
        //call appropriate function
        return dh_ptp_generate_design5_pricing_table_html($id, $hide);
    } elseif (isset($meta['dh-ptp-dg6-template']) && $meta['dh-ptp-dg6-template'] == 'selected') {
        /**
         * Design 6
         */
        
        // Include default theme
        wp_enqueue_style( 'design6-table-style', PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/pricing-tables/design6/pricingtable.min.css'  );
       // Print stylish enable match-column-height
       if(isset($meta['match-column-height-dg6'])) {   
             wp_enqueue_script( 'matchHeight', PTP_PLUGIN_PATH_FOR_SUBDIRS.'/assets/ui/js/jquery.matchHeight-min.js');
             tt_ptp_enable_column_match_height_script_dg6( $id );
        }
        //call appropriate function
        return dh_ptp_generate_design6_pricing_table_html($id, $hide);
    } elseif (isset($meta['dh-ptp-dg7-template']) && $meta['dh-ptp-dg7-template'] == 'selected') {
        /**
         * Design 6
         */
        
        // Include default theme
        wp_enqueue_style( 'design7-table-style', PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/pricing-tables/design7/pricingtable.min.css'  );
       // Print stylish enable match-column-height
       if(isset($meta['match-column-height-dg7'])) {   
             wp_enqueue_script( 'matchHeight', PTP_PLUGIN_PATH_FOR_SUBDIRS.'/assets/ui/js/jquery.matchHeight-min.js');
             tt_ptp_enable_column_match_height_script_dg7( $id );
        }
        //call appropriate function
        return dh_ptp_generate_design7_pricing_table_html($id, $hide);
    } elseif (isset($meta['dh-ptp-comparison1-template']) && $meta['dh-ptp-comparison1-template'] == 'selected') {
        
        /**
         * Comparison 1
         */
        
        // Enqueue CSS
        wp_enqueue_style('comparison1-table-style', PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/pricing-tables/comparison1/css/comparison1-common.min.css'  );
        
        // Print stylish enable match-column-height
       if(isset($meta['match-column-height-cp1'])) {   
             wp_enqueue_script( 'matchHeight', PTP_PLUGIN_PATH_FOR_SUBDIRS.'/assets/ui/js/jquery.matchHeight-min.js', array('jquery'));
             tt_ptp_enable_column_match_height_script_cp1( $id );
        }
        //call appropriate function
        return dh_ptp_generate_comparison1_pricing_table_html($id, $hide);
    }  elseif (isset($meta['dh-ptp-comparison2-template']) && $meta['dh-ptp-comparison2-template'] == 'selected') {
        
        /**
         * Comparison 2
         */
        
        // Enqueue CSS
        wp_enqueue_style('comparison2-table-style', PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/pricing-tables/comparison2/css/comparison2-common.min.css'  );        
        // Print stylish enable match-column-height
       if(isset($meta['match-column-height-cp2'])) {   
             wp_enqueue_script( 'matchHeight', PTP_PLUGIN_PATH_FOR_SUBDIRS.'/assets/ui/js/jquery.matchHeight-min.js', array('jquery'));
             tt_ptp_enable_column_match_height_script_cp2( $id );
        }
        //call appropriate function
        return dh_ptp_generate_comparison2_pricing_table_html($id, $hide);
    } elseif (isset($meta['dh-ptp-comparison3-template']) && $meta['dh-ptp-comparison3-template'] == 'selected') {
        
        /**
         * Comparison 3
         */
        
        // Enqueue CSS
        wp_enqueue_style('comparison3-table-style', PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/pricing-tables/comparison3/css/comparison3-common.min.css'  );
        
        // Print stylish enable match-column-height
       if(isset($meta['match-column-height-cp3'])) {   
             wp_enqueue_script( 'matchHeight', PTP_PLUGIN_PATH_FOR_SUBDIRS.'/assets/ui/js/jquery.matchHeight-min.js', array('jquery'));
             tt_ptp_enable_column_match_height_script_cp3( $id );
        }
        //call appropriate function
        return dh_ptp_generate_comparison3_pricing_table_html($id, $hide);
    } else {
        /**
         * Default: simple flat
         */
        
        //include css
        wp_enqueue_style( 'dh-ptp-design1', PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/pricing-tables/design1/pricingtable.min.css'  );
        
        // Print stylish enable match-column-height
       if(isset($meta['match-column-height-dg1'])) {   
             wp_enqueue_script( 'matchHeight', PTP_PLUGIN_PATH_FOR_SUBDIRS.'/assets/ui/js/jquery.matchHeight-min.js', array('jquery'));
         
             tt_ptp_enable_column_match_height_script_dg1( $id );
        }
        //call appropriate function
        return dh_ptp_generate_simple_flat_pricing_table_html($id, $hide);
    }
}

/**
 * This function decides which table style we should create. It enqueue the appropriate CSS file and calls the appropriate function.
 *
 * @return string pricing table html
 */
function dh_ptp_generate_ga_script( $event_category, $event_action , $event_label  )
{   
    $yst_ga = get_option('yst_ga');
    $ga_general = $yst_ga['ga_general'];
    // Check if the customer is running Universal or not (Enable in GA Settings -> Universal)
    if ( isset( $ga_general['enable_universal'] ) && $ga_general['enable_universal'] == 1 ) {
            return "onclick=\"if (__gaTracker) {__gaTracker('send', 'event', '".$event_category."', '".$event_action."', '".$event_label."');}\"";
    } else {
            return "onclick=\"if (_gaq) {_gaq.push(['_trackEvent', '".$event_category."', '".$event_action."', '".$event_label."']);}\"";
    }
}

/**
* Extract price information
* 
* Patterns of prices supported:
* - Currency then amount ($30, USD 30; €30) and possible text before and after
* - Amount then currency (30 euros) and possible text before and after
* - Amount only (30)
*/

function dh_ptp_get_price_formatted ( $planprice , $call_user_custom_func = '' ) {

        $price_formatted = '';
        $price_patterns = array(
            array(
                'id' => 'PTP_HTML',
                'format' => ':html',
                'pattern' => "/^(?P<html>.*<.*)$/",
            ),
            array(
                'id' => 'PTP_TEXT',
                'format' => ':price',
                'pattern' => "/^(?P<price>\D+)$/",
            ),
            array(
                'id' => 'PTP_CURR_PRICE',
                'format' => ':text_before:currency:price:text_after',
                'pattern' => "/^((?P<text_before>\D+)\s+)?(?P<currency>[^\d\s]+)\s*(?P<price>[\d.,']+)(\s+(?P<text_after>.+))?$/",
            ),
            array(
                'id' => 'PTP_PRICE_CURR',
                'format' => ':text_before:price:currency:text_after',
                'pattern' => "/^((?P<text_before>\D+)\s+)?(?P<price>\d[\d.,']*)\s*(?P<currency>[^\d\s]+)(\s+(?P<text_after>.+))?$/",
            ),
            array(
                'id' => 'PTP_PRICE',
                'format' => ':price:currency',
                'pattern' => '/^(?P<price>\d+)$/',
            ),
        );
        if (strlen($planprice) > 0) {
            /**
             * If we find a match, set $price and possibly $currency and break.
             * $price_pattern['format'] will help us build the price after the loop
             */
            foreach ($price_patterns as $price_pattern) {
                if ( preg_match( $price_pattern['pattern'], trim( $planprice ), $matches) ) {
                    break;
                }
            }
            
            if($call_user_custom_func) {
                $price_formatted = call_user_func( $call_user_custom_func , $matches , $price_pattern );
                
            } else {
                /**
                 * Prepare HTML
                 */
                $html = empty ( $matches[ 'html' ] ) ? '' : $matches[ 'html' ];
                $html && $html = '<div class="ptp-pricing-text">' . $html . '</div>';
                $currency = empty ( $matches[ 'currency' ] ) ? '$' : $matches[ 'currency' ];
                $currency = '<span class="sign">' . $currency . '</span>';
                $price =  (isset( $matches[ 'price' ]) && $matches[ 'price' ] !=='' )? $matches[ 'price' ]:'...';
                $text_before = empty ( $matches[ 'text_before' ] ) ? '' : '<div class="ptp-pricing-text">' . $matches[ 'text_before' ] . '</div>' ;
                $text_after = empty ( $matches[ 'text_after' ] ) ? '' : '<div class="ptp-pricing-text">' . $matches[ 'text_after' ] . '</div>' ;
                /**
                 * Replace value and produce formatted price
                 */
                $price_formatted = str_replace( 
                    array( ':html', ':price', ':currency', ':text_before', ':text_after' ),
                    array( $html, $price, $currency, $text_before, $text_after ),
                    $price_pattern['format']
                );
                
            }
        }
        
        return $price_formatted;
}