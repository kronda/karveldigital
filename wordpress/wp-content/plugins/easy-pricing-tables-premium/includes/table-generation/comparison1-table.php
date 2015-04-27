<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 11/15/13
 * Time: 15:28
 */


/**
 * Read all custom styling from our database
 */
function dh_ptp_comparison1_css($id, $meta)
{
    $content = '';
    $themes = array('#34495e/#e74c3c', '#16a085/#ce3306', '#66317d/#0a8bb0', '#08a7bd/#a81818', '#138f6b/#46b527', '#417d83/#ee4c7e', '#27b18f/#ecce44', '#b97a68/#f37e5d', '#114d68/#9e0165', '#444588/#ee1367');
    
    // Custom theme templates
    $comparison1_choose_a_theme = isset($meta['comparison1-choose-a-theme'])?$meta['comparison1-choose-a-theme']:'#34495e/#c0392b';
    // Fetch theme styles
    $key = array_search($comparison1_choose_a_theme, $themes);
    if ($key || $key == 0) {
        $current_path = plugin_dir_path(__FILE__);
        $theme_path = $current_path.'../../assets/pricing-tables/comparison1/css/theme'.($key+1).'.css'; 
        if (file_exists($theme_path)) {
            $content = file_get_contents($theme_path);
        }
    }
        
    // Other variables
    $comparison1_shake_buttons_on_hover = isset($meta['comparison1-shake-buttons-on-hover'])?$meta['comparison1-shake-buttons-on-hover']:0;
    $comparison1_most_popular_font_size = isset($meta['comparison1-most-popular-font-size'])?$meta['comparison1-most-popular-font-size']:'18';
    $comparison1_most_popular_font_size_type = isset($meta['comparison1-most-popular-font-size-type'])?$meta['comparison1-most-popular-font-size-type']:'px';
    $comparison1_plan_name_font_size = isset($meta['comparison1-plan-name-font-size'])?$meta['comparison1-plan-name-font-size']:'25';
    $comparison1_plan_name_font_size_type = isset($meta['comparison1-plan-name-font-size-type'])?$meta['comparison1-plan-name-font-size-type']:'px';
    $comparison1_price_font_size = isset($meta['comparison1-price-font-size'])?$meta['comparison1-price-font-size']:'90';
    $comparison1_price_font_size_type = isset($meta['comparison1-price-font-size-type'])?$meta['comparison1-price-font-size-type']:'px';
    $comparison1_currency_font_size = isset($meta['comparison1-currency-font-size'])?$meta['comparison1-currency-font-size']:'40';
    $comparison1_currency_font_size_type = isset($meta['comparison1-currency-font-size-type'])?$meta['comparison1-currency-font-size-type']:'px';
    $comparison1_billing_timeframe_font_size = isset($meta['comparison1-billing-timeframe-font-size'])?$meta['comparison1-billing-timeframe-font-size']:'16';
    $comparison1_billing_timeframe_font_size_type = isset($meta['comparison1-billing-timeframe-font-size-type'])?$meta['comparison1-billing-timeframe-font-size-type']:'px';
    $comparison1_bullet_item_font_size = isset($meta['comparison1-bullet-item-font-size'])?$meta['comparison1-bullet-item-font-size']:'16';
    $comparison1_bullet_item_font_size_type = isset($meta['comparison1-bullet-item-font-size-type'])?$meta['comparison1-bullet-item-font-size-type']:'px';
    $comparison1_button_font_size = isset($meta['comparison1-button-font-size'])?$meta['comparison1-button-font-size']:'14';
    $comparison1_button_font_size_type = isset($meta['comparison1-button-font-size-type'])?$meta['comparison1-button-font-size-type']:'px';
    $comparison1_raw_description_font_size = isset($meta['comparison1-raw-description-font-size'])?$meta['comparison1-raw-description-font-size']:'14';
    $comparison1_raw_description_font_size_type = isset($meta['comparison1-raw-description-font-size-type'])?$meta['comparison1-raw-description-font-size-type']:'px';
    $comparison1_row_line_height = isset($meta['comparison1-row-line-height'])?$meta['comparison1-row-line-height']:'20';
    
    // Colors, fetch only when option selected
    $comparison1_choose_your_colors = isset($meta['comparison1-choose-your-colors'])?$meta['comparison1-choose-your-colors']:1;
    if ($comparison1_choose_your_colors == 2) {
        // Description Column
        $comparison1_description_dark_background_color = isset($meta['comparison1-description-dark-background-color'])?$meta['comparison1-description-dark-background-color']:'#2c3e50';
        $comparison1_description_light_background_color = isset($meta['comparison1-description-light-background-color'])?$meta['comparison1-description-light-background-color']:'#34495e';
        $comparison1_description_hover_background_color = isset($meta['comparison1-description-hover-background-color'])?$meta['comparison1-description-hover-background-color']:'#18232e';
        $comparison1_description_border_color = isset($meta['comparison1-description-border-color'])?$meta['comparison1-description-border-color']:'#2c3e50';
        $comparison1_description_text_font_color = isset($meta['comparison1-description-text-font-color'])?$meta['comparison1-description-text-font-color']:'#ffffff';
        
        // Buttons
        $comparison1_button_font_color = isset($meta['comparison1-button-font-color'])?$meta['comparison1-button-font-color']:'#ffffff';
        $comparison1_button_background_color = isset($meta['comparison1-button-background-color'])?$meta['comparison1-button-background-color']:'#e74c3c';
        $comparison1_button_hover_font_color = isset($meta['comparison1-button-hover-font-color'])?$meta['comparison1-button-hover-font-color']:'#ffffff';
        $comparison1_button_hover_background_color = isset($meta['comparison1-button-hover-background-color'])?$meta['comparison1-button-hover-background-color']:'#c0392b';
        
        // Column Colors
        $comparison1_column_light_color = isset($meta['comparison1-column-light-color'])?$meta['comparison1-column-light-color']:'#f4fafb';
        $comparison1_column_dark_color = isset($meta['comparison1-column-dark-color'])?$meta['comparison1-column-dark-color']:'#e8f4f7';
        $comparison1_column_hover_color = isset($meta['comparison1-column-hover-color'])?$meta['comparison1-column-hover-color']:'#ffffff';
        
        // Unfeatured columns
        $comparison1_unfeatured_plan_title_font_color = isset($meta['comparison1-unfeatured-plan-title-font-color'])?$meta['comparison1-unfeatured-plan-title-font-color']:'#537597';
        $comparison1_unfeatured_plan_title_background_color = isset($meta['comparison1-unfeatured-plan-title-background-color'])?$meta['comparison1-unfeatured-plan-title-background-color']:'#34495e';
        $comparison1_unfeatured_plan_title_hover_background_color = isset($meta['comparison1-unfeatured-plan-title-hover-background-color'])?$meta['comparison1-unfeatured-plan-title-hover-background-color']:'#2c3e50';
        $comparison1_unfeatured_plan_border_background_color = isset($meta['comparison1-unfeatured-plan-border-background-color'])?$meta['comparison1-unfeatured-plan-border-background-color']:'#2c3e50';
        $comparison1_unfeatured_plan_price_font_color = isset($meta['comparison1-unfeatured-plan-price-font-color'])?$meta['comparison1-unfeatured-plan-price-font-color']:'#f1f1f1';
        $comparison1_unfeatured_pay_duration_background_color = isset($meta['comparison1-unfeatured-pay-duration-background-color'])?$meta['comparison1-unfeatured-pay-duration-background-color']:'#2c3e50';
        
        // Featured
        $comparison1_featured_plan_title_font_color = isset($meta['comparison1-featured-plan-title-font-color'])?$meta['comparison1-featured-plan-title-font-color']:'#952e22';
        $comparison1_featured_plan_title_background_color = isset($meta['comparison1-featured-plan-title-background-color'])?$meta['comparison1-featured-plan-title-background-color']:'#e74c3c';
        $comparison1_featured_plan_border_background_color = isset($meta['comparison1-featured-plan-border-background-color'])?$meta['comparison1-featured-plan-border-background-color']:'#c0392b';
        $comparison1_featured_plan_price_font_color = isset($meta['comparison1-featured-plan-price-font-color'])?$meta['comparison1-featured-plan-price-font-color']:'#f1f1f1';
        $comparison1_featured_plan_title_hover_background_color = isset($meta['comparison1-featured-plan-title-hover-background-color'])?$meta['comparison1-featured-plan-title-hover-background-color']:'#c0392b';
        $comparison1_featured_pay_duration_background_color = isset($meta['comparison1-featured-pay-duration-background-color'])?$meta['comparison1-featured-pay-duration-background-color']:'#c0392b';
    }
    // Print stylish custom css setting
      if(isset($meta['ept-custom-css-setting-cp1'])) {    
              echo $meta['ept-custom-css-setting-cp1'];
        }
    ?>
    
    /* comparison1 #<?php echo $id;?> */
    
    <?php
    $lines = explode("\n", $content);
    if (count($lines) > 0) :
        foreach ($lines as $line) :
            echo "#ptp-".$id.' '.$line."\n    "; 
        endforeach;
    endif;
    ?>

    <?php if ($comparison1_shake_buttons_on_hover) : ?>
        #ptp-<?php echo $id; ?> .ptp-data-holder .btn:hover{
            margin-top: 3px;
            border-bottom-width: 2px;
        }
    <?php endif; ?>
    
    <?php // !important replacements  ?>
    #ptp-<?php echo $id;?> a {outline: none; }
    #ptp-<?php echo $id;?> .ptp-price-table-holder [class*="ptp-span"] { margin-left:0px; }
    #ptp-<?php echo $id;?> .ptp-price-table .ptp-data-holder:hover{ background-color:#ffffff;}
    #ptp-<?php echo $id;?> .row-fluid-cp1 [class*="ptp-span"] { margin-left: -1.5px; margin-right: -1.5px;}
    
    #ptp-<?php echo $id;?> .head-tooltip {
        font-size: <?php echo $comparison1_most_popular_font_size.$comparison1_most_popular_font_size_type;?>;
    }
    #ptp-<?php echo $id;?> .ptp-plan-title h2 {
        font-size: <?php echo $comparison1_plan_name_font_size.$comparison1_plan_name_font_size_type;?>;
        font-weight: bold;
        margin: 0px;
    }

    #ptp-<?php echo $id;?> .ptp-price-holder .cp1-ptp-price {

        font-size: <?php echo $comparison1_price_font_size.$comparison1_price_font_size_type;?>;
        line-height: 1;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    #ptp-<?php echo $id;?> .ptp-price-holder .sign {
        font-size: <?php echo $comparison1_currency_font_size.$comparison1_currency_font_size_type;?>;
    }
    #ptp-<?php echo $id;?> .ptp-pay-duration {
        font-size: <?php echo $comparison1_billing_timeframe_font_size.$comparison1_billing_timeframe_font_size_type;?>;
    }
    #ptp-<?php echo $id;?> .ptp-data-holder {
        line-height: <?php echo $comparison1_row_line_height;?>px;
    }
    #ptp-<?php echo $id;?> .ptp-data-holder, #ptp-<?php echo $id;?> .ptp-data-holder .fa-times-circle, #ptp-<?php echo $id;?> .ptp-data-holder .fa-chevron-circle-down {
        font-size: <?php echo $comparison1_bullet_item_font_size.$comparison1_bullet_item_font_size_type;?>;
    }
    #ptp-<?php echo $id;?> .ptp-comparison1-row .has-tip, #ptp-<?php echo $id;?> .ptp-comparison1-row .has-tip:hover {
        color: #333;
        border-bottom: dotted 1px #333;
    }
    #ptp-<?php echo $id;?> .ptp-comparison1-row .has-tip:hover {
        border-bottom: dotted 1px #333;
    }
    #ptp-<?php echo $id;?> .ptp-data-holder .btn {
        font-size: <?php echo $comparison1_button_font_size.$comparison1_button_font_size_type;?>;
    }
    #ptp-<?php echo $id;?> .desc-table {
        margin-top: 0px;
    }
    #ptp-<?php echo $id;?> .desc-table .ptp-data-holder {
        font-size: <?php echo $comparison1_raw_description_font_size.$comparison1_raw_description_font_size_type;?>;
    }
    
    <?php if ($comparison1_choose_your_colors == 2) : ?>
        /* Description column */
        #ptp-<?php echo $id;?> .desc-table {
            border: 1px solid <?php echo $comparison1_description_border_color; ?>;
        }
        #ptp-<?php echo $id;?> .desc-table .ptp-data-holder:nth-child(2n+1) {
            background: <?php echo $comparison1_description_dark_background_color;?>;
            color: <?php echo $comparison1_description_text_font_color; ?>;
        }
        #ptp-<?php echo $id;?> .desc-table .ptp-data-holder:nth-child(2n) {
            background: <?php echo $comparison1_description_light_background_color; ?>;
            color: <?php echo $comparison1_description_text_font_color; ?>;
        }
        #ptp-<?php echo $id;?> .desc-table .ptp-data-holder:hover {
            background: <?php echo $comparison1_description_hover_background_color; ?> !important ;
            color: <?php echo $comparison1_description_text_font_color; ?>;
        }
        #ptp-<?php echo $id;?> .desc-table .ptp-data-holder:nth-child(2n+1) .has-tip,
        #ptp-<?php echo $id;?> .desc-table .ptp-data-holder:nth-child(2n) .has-tip,
        #ptp-<?php echo $id;?> .desc-table .ptp-data-holder:hover .has-tip
        {
            color: <?php echo $comparison1_description_text_font_color; ?>;
            border-bottom: dotted 1px <?php echo $comparison1_description_text_font_color; ?>;
        }
        
        /* Buttons */
        #ptp-<?php echo $id; ?> .ptp-data-holder .btn {
            background: <?php echo $comparison1_button_background_color; ?>;
            color: <?php echo $comparison1_button_font_color;?>;
            border-color: rgba(0, 0, 0, 0.3); 
        }
        #ptp-<?php echo $id; ?> .ptp-data-holder .btn .has-tip {
            color: <?php echo $comparison1_button_font_color;?>;
            border-bottom: dotted 1px <?php echo $comparison1_button_font_color; ?>;
        }
        #ptp-<?php echo $id; ?> .ptp-data-holder .btn:hover {
            background: <?php echo $comparison1_button_hover_background_color; ?>;
            color: <?php echo $comparison1_button_hover_font_color;?>;
            border-color: rgba(0, 0, 0, 0.5); 
        }
        #ptp-<?php echo $id; ?> .ptp-data-holder .btn:hover .has-tip {
            color: <?php echo $comparison1_button_hover_font_color;?>;
            border-bottom: dotted 1px <?php echo $comparison1_button_hover_font_color; ?>;
        }
        
        /* Unfeatured Column */
        #ptp-<?php echo $id; ?> .ptp-comparison1-unfeatured .ptp-plan-title h2 {
            color: <?php echo $comparison1_unfeatured_plan_title_font_color;?>;
            text-shadow: 0 2px 0 rgba(0, 0, 0, 0.7);
        }
        #ptp-<?php echo $id; ?> .ptp-comparison1-unfeatured .ptp-plan-title h2 .has-tip{
            color: <?php echo $comparison1_unfeatured_plan_title_font_color;?>;
            border-bottom: dotted 1px <?php echo $comparison1_unfeatured_plan_title_font_color; ?>;
        }
        #ptp-<?php echo $id; ?> .ptp-comparison1-unfeatured .ptp-price-holder {
            background: <?php echo $comparison1_unfeatured_plan_title_background_color; ?>;
            border: 1px solid <?php echo $comparison1_unfeatured_plan_border_background_color; ?>;
            color: <?php echo $comparison1_unfeatured_plan_price_font_color;?>;
        }
        #ptp-<?php echo $id; ?> .ptp-comparison1-unfeatured .ptp-price-holder .has-tip{
            color: <?php echo $comparison1_unfeatured_plan_price_font_color;?>;
            border-bottom: dotted 1px <?php echo $comparison1_unfeatured_plan_price_font_color;?>;
        }
        #ptp-<?php echo $id; ?> .ptp-comparison1-unfeatured:hover .ptp-price-holder {
            background: <?php echo $comparison1_unfeatured_plan_title_hover_background_color; ?> !important;
        }
        
        #ptp-<?php echo $id; ?> .ptp-comparison1-unfeatured .ptp-pay-duration,
        #ptp-<?php echo $id; ?> .ptp-comparison1-unfeatured:hover .ptp-pay-duration {
            background: <?php echo $comparison1_unfeatured_pay_duration_background_color; ?>;
        }
        
        /* Featured Column */
        #ptp-<?php echo $id; ?> .special.ptp-price-table .ptp-plan-title h2 {
            color: <?php echo $comparison1_featured_plan_title_font_color;?>;
            text-shadow: 0 2px 0 rgba(0, 0, 0, 0.7);
        }
        #ptp-<?php echo $id; ?> .special.ptp-price-table .ptp-plan-title h2 .has-tip{
            color: <?php echo $comparison1_featured_plan_title_font_color;?>;
            border-bottom: dotted 1px <?php echo $comparison1_featured_plan_title_font_color; ?>;
        }
        #ptp-<?php echo $id; ?> .special.ptp-price-table .ptp-price-holder {
            background: <?php echo $comparison1_featured_plan_title_background_color; ?>;
            border: 1px solid <?php echo $comparison1_featured_plan_border_background_color; ?>;
            color: <?php echo $comparison1_featured_plan_price_font_color;?>;
        }
        #ptp-<?php echo $id; ?> .special.ptp-price-table .ptp-price-holder .has-tip{
            color: <?php echo $comparison1_featured_plan_price_font_color;?>;
            border-bottom: dotted 1px <?php echo $comparison1_featured_plan_price_font_color; ?>;
        }
        #ptp-<?php echo $id; ?> .special.ptp-price-table:hover .ptp-price-holder {
            background: <?php echo $comparison1_featured_plan_title_hover_background_color; ?> !important;
        }
        #ptp-<?php echo $id; ?> .special.ptp-price-table .ptp-pay-duration,
        #ptp-<?php echo $id; ?> .special.ptp-price-table:hover .ptp-pay-duration {
            background: <?php echo $comparison1_featured_pay_duration_background_color; ?>;
        }
        
        /* Column Colors */
        #ptp-<?php echo $id; ?> .ptp-data-holder:nth-child(2n+1) {
            background: <?php echo $comparison1_column_light_color;?>;
        }
        #ptp-<?php echo $id; ?> .ptp-data-holder:nth-child(2n) {
            background: <?php echo $comparison1_column_dark_color; ?>;
        }
        #ptp-<?php echo $id; ?> .ptp-data-holder:hover {
            background: <?php echo $comparison1_column_hover_color; ?>;
        }
        
        @media handheld, only screen and (max-width: 767px) { 
           #ptp-<?php echo $id; ?> .ptp-data-holder {
            background: <?php echo $comparison1_column_dark_color; ?>!important;
            border-bottom: solid <?php echo $comparison1_column_light_color; ?> 1px !important;
        }
        
        }
        
    <?php endif; ?>
    /* end of comparison1 #<?php echo $id;?> */
    
    <?php
}

/**
 * Generate our simple flat pricing table HTML
 * @return [type]
 */
function dh_ptp_generate_comparison1_pricing_table_html ($id, $hide = false) {
    global $features_metabox;
    global $meta;

    $meta = get_post_meta($id, $features_metabox->get_the_id(), TRUE);
    $post = get_post($id);
    
    $loop_index = 0;
    $col_cnt = (int)(count($meta['column'])+1);
    $col_cnt = ($col_cnt == 2) ? 3 : $col_cnt;
    $columns = floor(12/((int)$col_cnt));  // responsive column count
    $hide_table = ($hide)?'style="display:none"':'';
    $pricing_table_html =
        '<div id="ptp-'. $id .'" class="ptp-comparison1-pricingtable" '.$hide_table.'>' .
            '<div class="ptp-price-table-holder ptp-columns-'.$col_cnt.'">' .
                '<div class="row-fluid-cp1">';
      
    $comparison1_table_features_html_arr = array();
    // Row descriptions
    $comparison1_table_features = isset($meta['comparison-table-features'])?$meta['comparison-table-features']:'';
    if ($comparison1_table_features) {
        $pricing_table_html .= '<div class="ptp-span'.$columns.'">'.
                                    '<div class="head">'.                        
                                        '<div class="ptp-price-holder ptp-price-holder-invisible">'.
                                            '<div class="ptp-plan-title"><h2>&nbsp;</h2></div>'.

                                            '<div class="cp1-ptp-price">&nbsp;<span class="sign">&nbsp;</span><div style="clear:both"></div></div>'.

                                            '<div class="ptp-pay-duration ptp-pay-duration-invisible">&nbsp;</div>'.
                                        '</div>'.
                                    '</div>'.
                                    '<div class="desc-table">';
        
        $feature_list = explode("\n", $comparison1_table_features);
        $feature_list_index = 0;
        foreach($feature_list as $item) {
            $pricing_table_html .= '<div class="ptp-data-holder ptp-row-id-'.$feature_list_index.'">' . dh_ptp_fa_icons($item) . '</div>';
            if(trim( $item )) {
               $comparison1_table_features_html_arr[] = '<span class="ptp-cp1-resposive-data ptp-cp1-resposive-id-'.$feature_list_index.'">' . dh_ptp_fa_icons($item) . '</span>';  
            } else {
                $comparison1_table_features_html_arr[] = '' ;
            }
            
            $feature_list_index++;
            }
        
        $pricing_table_html .= '</div></div>'; 
    }
    
    // Data columns
    foreach ($meta['column'] as $column)
    {        
        // Note: beneath ifs are to prevent 'undefined variable notice'. It wasn't possible to put this code into a function since the passing argument might be undefined.      
        $planname = isset($column['planname'])?$column['planname']:'';
        $planprice = isset($column['planprice'])?$column['planprice']:'';
        $planfeatures = isset($column['planfeatures'])?$column['planfeatures']:'';
        $buttontext = isset($column['buttontext'])?$column['buttontext']:'';
        $buttonurl = isset($column['buttonurl'])?$column['buttonurl']:'';
        $billingtimeframe = isset($column['billingtimeframe'])?$column['billingtimeframe']:'';
        
        // featured column
        if (isset($column['feature'])){
            $feature_text = (isset($meta['comparison1-most-popular-label-text']))?$meta['comparison1-most-popular-label-text']:__('Most Popular', PTP_LOC);
            $feature = ($column['feature'] == 'featured')?'<div class="head-tooltip">' . dh_ptp_fa_icons($feature_text) . '</div>':'';
            $feature_class = ($column['feature'] == 'featured')?'special':'ptp-comparison1-unfeatured';
        } else {
            $feature = '';
            $feature_class = '';
        }

        /**
         * Extract price information
         * 
         * Patterns of prices supported:
         * - Currency then amount ($30, USD 30; €30) and possible text before and after
         * - Amount then currency (30 euros) and possible text before and after
         * - Amount only (30)
         */
        $price_formatted = dh_ptp_get_price_formatted( $planprice );
            
        // Get button text
        $button_text = isset($column['buttontext'])?$column['buttontext']:'';

        // Get button url
        $button_url = isset($column['buttonurl'])?$column['buttonurl']:'';

        // Get custom shortcode button if any
        $custom_button = false;
        $shortcode_pattern = '|^\[shortcode\](?P<custom_button>.*)\[/shortcode\]$|';
        if ( 
            preg_match( $shortcode_pattern, $button_text, $matches) 
            ||
            preg_match( $shortcode_pattern, $button_url, $matches) 
        ) {
            $custom_button = $matches[ 'custom_button' ];
        }
    
        // Hide call to action button
        $tracking = get_option('dh_ptp_google_analytics');
        $table_name = addslashes($post->post_title)?addslashes($post->post_title):'untitled pricing table';
        $onclick = ($tracking == 1)?dh_ptp_generate_ga_script( $table_name, 'Button clicked' , addslashes($column['planname']) ):"";
        $open_in_new_tab = (isset($meta['comparison1-open-link-in-new-tab']) && $meta['comparison1-open-link-in-new-tab'])?'target="_blank"':'';
        $call_to_action_button =
            '<div class="ptp-data-holder">'.
                (($custom_button)?$custom_button:'<a href="'.$column['buttonurl'].'" class="btn sign-up" id="ptp-'.$id.'-cta-'.$loop_index.'" ' . $open_in_new_tab . ' '.$onclick.'>' . dh_ptp_fa_icons($column['buttontext']) . '</a>') .
            '</div>';
        
        if (isset($meta['comparison1-hide-call-to-action-buttons']) && $meta['comparison1-hide-call-to-action-buttons']) {
            $call_to_action_button = '';
        }
    
        // Hide empty rows
        $hide_empty_rows = isset($meta['comparison1-hide-empty-rows'])?true:false;
    
        // create the html code
        $pricing_table_html .= '
            <div class="ptp-span'.$columns.'">
                <div class="ptp-price-table '.$feature_class.'">
                    <div class="head">
                        '.$feature.'
                        <div class="ptp-price-holder">
                            <div class="ptp-plan-title"><h2>'.dh_ptp_fa_icons($planname).'</h2></div>

                            <div class="cp1-ptp-price">' . $price_formatted . '<div style="clear:both"></div></div>

                            <div class="ptp-pay-duration">' . dh_ptp_fa_icons($billingtimeframe) . '</div>
                        </div>
                    </div>
                    <div class="ptp-tabled-data">' .
                        dh_ptp_features_to_html_comparison1($planfeatures, dh_ptp_comparison1_max_number_of_features(), $hide_empty_rows, $comparison1_table_features_html_arr) .
                        $call_to_action_button .
                    '</div>
                </div>
            </div>
        ';
    
        $loop_index++;
    }
    
    $pricing_table_html .=
                '</div>'.
            '</div>'.
        '</div>';
   
    return $pricing_table_html;
}

function dh_ptp_comparison1_max_number_of_features()
{
    global $meta;

    $max = 0;
    foreach ($meta['column'] as $column) {
        if(isset($column['planfeatures'])) {
            // get number of features
            $col_number_of_features = count( explode( "\n", $column['planfeatures'] ) );

            if ($col_number_of_features > $max) {
                $max = $col_number_of_features;
            }
        }
    }

    return $max;
}

function dh_ptp_features_to_html_comparison1($features, $max_number_of_features, $hide_empty_rows, $comparison1_table_features_html_arr)
{
    // the string to be returned
    $output = '';

    // explode string into a useable array
    $dh_ptp_features = explode("\n", $features);
    
    // how many features does this column have?
    $total_features = count($dh_ptp_features);
    
    // add each feature to $dh_ptp_feature_html
    for ($i=0; $i<$max_number_of_features; $i++) {
        if ($i < $total_features && trim($dh_ptp_features[$i]) != '') {
            $comparison1_table_features_plan_html = isset($comparison1_table_features_html_arr[$i])?$comparison1_table_features_html_arr[$i]:'';
            
            if( trim($dh_ptp_features[$i]) ==='[y]'  ||trim($dh_ptp_features[$i]) === '[n]' ) {               
                $output .= '<div class="ptp-data-holder ptp-comparison1-row ptp-row-id-'.$i.'">' . dh_ptp_fa_icons($dh_ptp_features[$i], true) . $comparison1_table_features_plan_html . '</div>';
            } else {
                $tt_colon_sign = (trim($comparison1_table_features_plan_html)!=='')?'<span class="ptp-cp1-resposive-data ptp-cp1-resposive-dot  ptp-cp1-resposive-id-'.$i.'">' . ': ' . '</span>':'';
                $comparison1_table_features_plan_html = $comparison1_table_features_plan_html.$tt_colon_sign;
                $output .= '<div class="ptp-data-holder ptp-comparison1-row ptp-row-id-'.$i.'">' . $comparison1_table_features_plan_html . dh_ptp_fa_icons($dh_ptp_features[$i], true) . '</div>';
            }
           
            
        } else {
            if (!$hide_empty_rows) {
                $output .= '<div class="ptp-data-holder ptp-comparison1-row ptp-row-id-'.$i.' tt-ptp-empty-row">&nbsp;</div>';
            }
        }
    }

    // return the features html
    return $output;
}

function tt_ptp_enable_column_match_height_script_cp1( $id ) {
    $name_of_called_matchheight_func = "call_match_height_$id";
    ?>
        <script type="text/javascript">
         jQuery(document).ready(function($) {
            jQuery.<?php echo $name_of_called_matchheight_func; ?> = function call_match_height_comparison1(ptp_id) {
                               $( ptp_id+' .ptp-comparison1-row' ).each(function( index ){
                                    $( ptp_id+' .ptp-row-id-'+index ).matchHeight(false);
                               });  
                         }
            var ptp_id = '#ptp-'+<?php echo $id; ?> ;
            $.<?php echo $name_of_called_matchheight_func; ?> ( ptp_id );              
         });
      </script>
      
        <?php
      
}