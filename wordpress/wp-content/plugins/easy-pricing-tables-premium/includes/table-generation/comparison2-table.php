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
function dh_ptp_comparison2_css($id, $meta)
{
       
    // Other variables
    $comparison2_shake_buttons_on_hover = isset($meta['comparison2-shake-buttons-on-hover'])?$meta['comparison2-shake-buttons-on-hover']:0;
    $comparison2_plan_name_font_size = isset($meta['comparison2-plan-name-font-size'])?$meta['comparison2-plan-name-font-size']:'20';
    $comparison2_plan_name_font_size_type = isset($meta['comparison2-plan-name-font-size-type'])?$meta['comparison2-plan-name-font-size-type']:'px';    
    $comparison2_bullet_item_font_size = isset($meta['comparison2-bullet-item-font-size'])?$meta['comparison2-bullet-item-font-size']:'16';
    $comparison2_bullet_item_font_size_type = isset($meta['comparison2-bullet-item-font-size-type'])?$meta['comparison2-bullet-item-font-size-type']:'px';
    $comparison2_button_font_size = isset($meta['comparison2-button-font-size'])?$meta['comparison2-button-font-size']:'14';
    $comparison2_button_font_size_type = isset($meta['comparison2-button-font-size-type'])?$meta['comparison2-button-font-size-type']:'px';

    // Description Column
    $comparison2_description_dark_background_color = isset($meta['comparison2-description-dark-background-color'])?$meta['comparison2-description-dark-background-color']:'#2c3e50';
    $comparison2_description_light_background_color = isset($meta['comparison2-description-light-background-color'])?$meta['comparison2-description-light-background-color']:'#34495e';
    //$comparison2_description_hover_background_color = isset($meta['comparison2-description-hover-background-color'])?$meta['comparison2-description-hover-background-color']:'#18232e';
    $comparison2_description_border_color = isset($meta['comparison2-description-border-color'])?$meta['comparison2-description-border-color']:'#2c3e50';
    $comparison2_description_text_font_color = isset($meta['comparison2-description-text-font-color'])?$meta['comparison2-description-text-font-color']:'#ffffff';
        
    // Buttons
    $comparison2_button_font_color = isset($meta['comparison2-button-font-color'])?$meta['comparison2-button-font-color']:'#ffffff';
    $comparison2_button_background_color = isset($meta['comparison2-button-background-color'])?$meta['comparison2-button-background-color']:'#e74c3c';
    $comparison2_button_hover_font_color = isset($meta['comparison2-button-hover-font-color'])?$meta['comparison2-button-hover-font-color']:'#ffffff';
    $comparison2_button_hover_background_color = isset($meta['comparison2-button-hover-background-color'])?$meta['comparison2-button-hover-background-color']:'#019E9E';
    $comparison2_button_bottom_color = isset($meta['comparison2-button-bottom-color'])?$meta['comparison2-button-bottom-color']:'#019E9E';
    
    // Featured Buttons
    $comparison2_featured_button_font_color = isset($meta['comparison2-featured-button-font-color'])?$meta['comparison2-featured-button-font-color']:'#ffffff';
    $comparison2_featured_button_background_color = isset($meta['comparison2-featured-button-background-color'])?$meta['comparison2-featured-button-background-color']:'#e74c3c';
    $comparison2_featured_button_hover_font_color = isset($meta['comparison2-featured-button-hover-font-color'])?$meta['comparison2-featured-button-hover-font-color']:'#ffffff';
    $comparison2_featured_button_hover_background_color = isset($meta['comparison2-featured-button-hover-background-color'])?$meta['comparison2-featured-button-hover-background-color']:'#019E9E';
    $comparison2_featured_button_bottom_color = isset($meta['comparison2-featured-button-bottom-color'])?$meta['comparison2-featured-button-bottom-color']:'#019E9E';
       
    // Column Colors
    $comparison2_column_light_color = isset($meta['comparison2-column-light-color'])?$meta['comparison2-column-light-color']:'#f4fafb';
    $comparison2_column_dark_color = isset($meta['comparison2-column-dark-color'])?$meta['comparison2-column-dark-color']:'#e8f4f7';
    //$comparison2_column_hover_color = isset($meta['comparison2-column-hover-color'])?$meta['comparison2-column-hover-color']:'#cccccc';
    $comparison2_column_row_border_color = isset($meta['comparison2-column-row-border-color'])?$meta['comparison2-column-row-border-color']:'#e9e9e9';
        
    // Unfeatured columns
    $comparison2_unfeatured_plan_title_font_color = isset($meta['comparison2-unfeatured-plan-title-font-color'])?$meta['comparison2-unfeatured-plan-title-font-color']:'#537597';
    $comparison2_unfeatured_plan_title_background_color = isset($meta['comparison2-unfeatured-plan-title-background-color'])?$meta['comparison2-unfeatured-plan-title-background-color']:'#34495e';
    $comparison2_unfeatured_plan_title_hover_background_color = isset($meta['comparison2-unfeatured-plan-title-hover-background-color'])?$meta['comparison2-unfeatured-plan-title-hover-background-color']:'#2c3e50';
    $comparison2_unfeatured_plan_border_background_color = isset($meta['comparison2-unfeatured-plan-border-background-color'])?$meta['comparison2-unfeatured-plan-border-background-color']:'#2c3e50';
    $comparison2_unfeatured_plan_price_font_color = isset($meta['comparison2-unfeatured-plan-price-font-color'])?$meta['comparison2-unfeatured-plan-price-font-color']:'#f1f1f1'; 
    $comparison2_unfeatured_row_font_color = isset($meta['comparison2-unfeatured-row-font-color'])?$meta['comparison2-unfeatured-row-font-color']:'#333333';
     
    // Featured
    $comparison2_featured_plan_title_font_color = isset($meta['comparison2-featured-plan-title-font-color'])?$meta['comparison2-featured-plan-title-font-color']:'#952e22';
    $comparison2_featured_plan_title_background_color = isset($meta['comparison2-featured-plan-title-background-color'])?$meta['comparison2-featured-plan-title-background-color']:'#e74c3c';
    $comparison2_featured_plan_border_background_color = isset($meta['comparison2-featured-plan-border-background-color'])?$meta['comparison2-featured-plan-border-background-color']:'#c0392b';
    $comparison2_featured_plan_price_font_color = isset($meta['comparison2-featured-plan-price-font-color'])?$meta['comparison2-featured-plan-price-font-color']:'#f1f1f1';
    $comparison2_featured_plan_title_hover_background_color = isset($meta['comparison2-featured-plan-title-hover-background-color'])?$meta['comparison2-featured-plan-title-hover-background-color']:'#c0392b';
    $comparison2_featured_row_font_color = isset($meta['comparison2-featured-row-font-color'])?$meta['comparison2-featured-row-font-color']:'#333333';
    
    // Print stylish custom css setting
      if(isset($meta['ept-custom-css-setting-cp2'])) {    
              echo $meta['ept-custom-css-setting-cp2'];
        }
    ?>
    
    /* comparison2 #<?php echo $id;?> */

    <?php if ($comparison2_shake_buttons_on_hover) : ?>
        #ptp-<?php echo $id; ?> .ptp-cp2-data-holder .btn:hover{
            margin-top: 3px;
            border-bottom-width: 2px;
        }
    <?php endif; ?>
    
    <?php // !important replacements  ?>
    #ptp-<?php echo $id;?> a {outline: none; }
    #ptp-<?php echo $id;?> .ptp-cp2-price-table-holder [class*="ptp-cp2-span"] { margin-left:0px; }
    /* #ptp-<?php echo $id;?> .ptp-cp2-price-table .ptp-cp2-data-holder:hover{ background-color:#ffffff;} */
    #ptp-<?php echo $id;?> .row-fluid-cp2 [class*="ptp-cp2-span"] { margin-left: -2.5px; margin-right: -2.5px;}
    #ptp-<?php echo $id;?> .ptp-cp2-data-holder, #ptp-<?php echo $id;?> .ptp-cp2-data-holder .fa-times-circle, #ptp-<?php echo $id;?> .ptp-cp2-data-holder .fa-chevron-circle-down {
        font-size: <?php echo $comparison2_bullet_item_font_size.$comparison2_bullet_item_font_size_type;?>;
    }
    #ptp-<?php echo $id;?> .ptp-comparison2-row {
        color: <?php echo $comparison2_unfeatured_row_font_color;?>;
    }
    #ptp-<?php echo $id;?> .special .ptp-comparison2-row {
        color: <?php echo $comparison2_featured_row_font_color;?>;
    }
    #ptp-<?php echo $id;?> .ptp-comparison2-row .has-tip, #ptp-<?php echo $id;?> .ptp-comparison2-row .has-tip:hover {
        color: #333;
        border-bottom: dotted 1px #333;
    }
    #ptp-<?php echo $id;?> .ptp-comparison2-row .has-tip:hover {
        border-bottom: dotted 1px #333;
    }
    #ptp-<?php echo $id;?> .ptp-cp2-data-holder .btn, #ptp-<?php echo $id;?> .cp2-button-on-top .btn {
        font-size: <?php echo $comparison2_button_font_size.$comparison2_button_font_size_type;?>;
        text-decoration: none; 
    }

    
    /* Description column */
    #ptp-<?php echo $id;?> .cp2-desc-table {
        border: 1px solid <?php echo $comparison2_description_border_color; ?>;        
        border-top: 1px solid <?php echo $comparison2_description_border_color; ?>;
        border-bottom: 1px solid <?php echo $comparison2_description_border_color; ?>;
    }
    #ptp-<?php echo $id;?> .cp2-desc-table .ptp-cp2-data-holder:nth-child(2n+1) {
         background: <?php echo $comparison2_description_dark_background_color;?>;
         color: <?php echo $comparison2_description_text_font_color; ?>;
    }
    #ptp-<?php echo $id;?> .cp2-desc-table .ptp-cp2-data-holder:nth-child(2n) {
         background: <?php echo $comparison2_description_light_background_color; ?>;
         color: <?php echo $comparison2_description_text_font_color; ?>;
    }
    /*
    #ptp-<?php echo $id;?> .cp2-desc-table .ptp-cp2-data-holder:hover {
         background: <?php echo $comparison2_description_hover_background_color; ?> !important ;
         color: <?php echo $comparison2_description_text_font_color; ?>;
     }
       */  
    #ptp-<?php echo $id;?> .cp2-desc-table .ptp-cp2-data-holder:nth-child(2n+1) .has-tip,
    #ptp-<?php echo $id;?> .cp2-desc-table .ptp-cp2-data-holder:nth-child(2n) .has-tip,
    #ptp-<?php echo $id;?> .cp2-desc-table .ptp-cp2-data-holder:hover .has-tip
     {
        color: <?php echo $comparison2_description_text_font_color; ?>;
        border-bottom: dotted 1px <?php echo $comparison2_description_text_font_color; ?>;
     }
        
    /* Buttons */
    #ptp-<?php echo $id; ?> .ptp-cp2-data-holder .btn ,#ptp-<?php echo $id;?> .cp2-button-on-top .btn {
        background: <?php echo $comparison2_button_background_color; ?>;
        color: <?php echo $comparison2_button_font_color;?>;
        border-bottom: 4px solid <?php echo $comparison2_button_bottom_color;?>; 
    }
    #ptp-<?php echo $id; ?> .ptp-cp2-data-holder .btn .has-tip , #ptp-<?php echo $id;?> .cp2-button-on-top .btn .has-tip {
        color: <?php echo $comparison2_button_font_color;?>;
        border-bottom: dotted 1px <?php echo $comparison2_button_font_color; ?>;
    }
    #ptp-<?php echo $id; ?> .ptp-cp2-data-holder .btn:hover ,#ptp-<?php echo $id;?> .cp2-button-on-top .btn:hover {
        background: <?php echo $comparison2_button_hover_background_color; ?>;
        color: <?php echo $comparison2_button_hover_font_color;?>;
    }
    #ptp-<?php echo $id; ?> .ptp-cp2-data-holder .btn:hover .has-tip , #ptp-<?php echo $id;?> .cp2-button-on-top .btn:hover .has-tip {
        color: <?php echo $comparison2_button_hover_font_color;?>;
        border-bottom: dotted 1px <?php echo $comparison2_button_hover_font_color; ?>;
    }

    /* Featured Buttons */
    #ptp-<?php echo $id; ?>  .special .ptp-cp2-data-holder .btn ,#ptp-<?php echo $id;?> .special .cp2-button-on-top .btn {
        background: <?php echo $comparison2_featured_button_background_color; ?>;
        color: <?php echo $comparison2_featured_button_font_color;?>;
        border-bottom: 4px solid <?php echo $comparison2_featured_button_bottom_color;?>; 
    }
    #ptp-<?php echo $id; ?> .special .ptp-cp2-data-holder .btn .has-tip , #ptp-<?php echo $id;?> .special .cp2-button-on-top .btn .has-tip {
        color: <?php echo $comparison2_featured_button_font_color;?>;
        border-bottom: dotted 1px <?php echo $comparison2_featured_button_font_color; ?>;
    }
    #ptp-<?php echo $id; ?> .special .ptp-cp2-data-holder .btn:hover ,#ptp-<?php echo $id;?> .special .cp2-button-on-top .btn:hover {
        background: <?php echo $comparison2_featured_button_hover_background_color; ?>;
        color: <?php echo $comparison2_featured_button_hover_font_color;?>;
    }
    #ptp-<?php echo $id; ?> .special .ptp-cp2-data-holder .btn:hover .has-tip , #ptp-<?php echo $id;?> .special .cp2-button-on-top .btn:hover .has-tip {
        color: <?php echo $comparison2_featured_button_hover_font_color;?>;
        border-bottom: dotted 1px <?php echo $comparison2_featured_button_hover_font_color; ?>;
    }
    
    /* Unfeatured Column */
    #ptp-<?php echo $id; ?> .ptp-cp2-plan-title h2 {
        font-size: <?php echo $comparison2_plan_name_font_size.$comparison2_plan_name_font_size_type;?>;
    }
    #ptp-<?php echo $id; ?> .ptp-comparison2-unfeatured .ptp-cp2-plan-title h2 {
        color: <?php echo $comparison2_unfeatured_plan_title_font_color;?>;
    }
    #ptp-<?php echo $id; ?> .ptp-comparison2-unfeatured .ptp-cp2-plan-title h2 .has-tip{
        color: <?php echo $comparison2_unfeatured_plan_title_font_color;?>;
        border-bottom: dotted 1px <?php echo $comparison2_unfeatured_plan_title_font_color; ?>;
    }
    #ptp-<?php echo $id; ?> .ptp-comparison2-unfeatured .ptp-cp2-price-holder {
        background: <?php echo $comparison2_unfeatured_plan_title_background_color; ?>;
        border: 1px solid <?php echo $comparison2_unfeatured_plan_border_background_color; ?>;
    }
      
    /* Featured Column */
    #ptp-<?php echo $id; ?> .special.ptp-cp2-price-table .ptp-cp2-plan-title h2 {
        color: <?php echo $comparison2_featured_plan_title_font_color;?>;
    }
    #ptp-<?php echo $id; ?> .special.ptp-cp2-price-table .ptp-cp2-plan-title h2 .has-tip{
        color: <?php echo $comparison2_featured_plan_title_font_color;?>;
        border-bottom: dotted 1px <?php echo $comparison2_featured_plan_title_font_color; ?>;
    }
    #ptp-<?php echo $id; ?> .special.ptp-cp2-price-table .ptp-cp2-price-holder {
        background: <?php echo $comparison2_featured_plan_title_background_color; ?>;
        border: 1px solid <?php echo $comparison2_featured_plan_border_background_color; ?>;
        color: <?php echo $comparison2_featured_plan_price_font_color;?>;
    }
    #ptp-<?php echo $id; ?> .special.ptp-cp2-price-table .ptp-cp2-price-holder .has-tip{
        color: <?php echo $comparison2_featured_plan_price_font_color;?>;
        border-bottom: dotted 1px <?php echo $comparison2_featured_plan_price_font_color; ?>;
    }

    /* Column Colors */
    #ptp-<?php echo $id; ?> .ptp-cp2-data-holder:nth-child(2n+1) {
        background: <?php echo $comparison2_column_light_color;?>;
        border-top: 1px solid <?php echo $comparison2_column_row_border_color; ?>;
    }
    #ptp-<?php echo $id; ?> .ptp-cp2-data-holder:nth-child(2n) {
        background: <?php echo $comparison2_column_dark_color; ?>;
        border-top: 1px solid <?php echo $comparison2_column_row_border_color; ?>;        
    }
    /*
    #ptp-<?php echo $id; ?> .ptp-cp2-data-holder:hover {
        background: <?php echo $comparison2_column_hover_color; ?>;
    }*/

    @media handheld, only screen and (max-width: 767px) { 
       #ptp-<?php echo $id; ?> .ptp-cp2-data-holder {
        background: <?php echo $comparison2_column_dark_color; ?>!important;
        border-bottom: solid <?php echo $comparison2_column_light_color; ?> 1px !important;
    }

    }
        
    /* end of comparison2 #<?php echo $id;?> */
    
    <?php
}

/**
 * Generate our simple flat pricing table HTML
 * @return [type]
 */
function dh_ptp_generate_comparison2_pricing_table_html ($id, $hide = false) {
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
        '<div id="ptp-'. $id .'" class="ptp-comparison2-pricingtable" '.$hide_table.'>' .
            '<div class="ptp-cp2-price-table-holder ptp-cp2-columns-'.$col_cnt.'">' .
                '<div class="row-fluid-cp2">';
      
    $comparison2_table_features_html_arr = array();
    // Row descriptions
    $comparison2_table_features = isset($meta['comparison-table-features'])?$meta['comparison-table-features']:'';
    if ($comparison2_table_features) {
        $have_price_or_duration = false;
        /* foreach ($meta['column'] as $column)
           { 
             $have_price_or_duration = ( (isset($column['planprice']) && $column['planprice'] ) ||  ( isset($column['billingtimeframe']) && $column['billingtimeframe'] ) )?true:false;
             if( $have_price_or_duration ) break;
             
           }
        */
        $pricing_table_html .= '<div class="ptp-cp2-span'.$columns.' ptp-cp2-desc-span'.$columns.'">'.
                                    '<div class="head">'.                        
                                        '<div class="ptp-cp2-price-holder ptp-cp2-price-holder-invisible">'.
                                            '<div class="ptp-cp2-plan-title"><h2>&nbsp;</h2></div>'.                                           
                                            (isset($meta['comparison2-show-action-buttons-on-top'])?'<div class="cp2-button-on-top ptp-button-on-top-invisible"><a class="btn sign-u" >&nbsp;</a></div>':'').
                                        '</div>'.
                                    '</div>'.
                                    '<div class="cp2-desc-table">';
        
        $feature_list = explode("\n", $comparison2_table_features);
        $feature_list_index = 0;
        foreach($feature_list as $item) {
            $pricing_table_html .= '<div class="ptp-cp2-data-holder ptp-cp2-row-id-'.$feature_list_index.'">' . dh_ptp_fa_icons($item) . '</div>';
            if(trim( $item )) {
               $comparison2_table_features_html_arr[] = '<span class="ptp-cp2-resposive-data ptp-cp2-resposive-id-'.$feature_list_index.'">' . dh_ptp_fa_icons($item) . '</span>';  
            } else {
                $comparison2_table_features_html_arr[] = '' ;
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
        $planprice = '';//isset($column['planprice'])?$column['planprice']:'';
        $planfeatures = isset($column['planfeatures'])?$column['planfeatures']:'';
        $buttontext = isset($column['buttontext'])?$column['buttontext']:'';
        $buttonurl = isset($column['buttonurl'])?$column['buttonurl']:'';
        $billingtimeframe = '';//(isset( $column['billingtimeframe'] ) && trim( $column['billingtimeframe'] ) )?'<p class="ptp-pay-duration" >'.$column['billingtimeframe'].'</p>':'';
        
        // featured column
        if (isset($column['feature'])){
            $feature_class = ($column['feature'] == 'featured')?'special':'ptp-comparison2-unfeatured';
        } else {
            $feature_class = 'ptp-comparison2-unfeatured';
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
        //$price_formatted = ($price_formatted)?'<p class="cp2-ptp-price">' . $price_formatted . '</p>':'';
    
        // Hide call to action button
        $tracking = get_option('dh_ptp_google_analytics');
        $table_name = addslashes($post->post_title)?addslashes($post->post_title):'untitled pricing table';
        $onclick = ($tracking == 1)?dh_ptp_generate_ga_script( $table_name, 'Button clicked' , addslashes($column['planname']) ):"";
        $open_in_new_tab = (isset($meta['comparison2-open-link-in-new-tab']) && $meta['comparison2-open-link-in-new-tab'])?'target="_blank"':'';
        
        $call_to_action_button = ($custom_button)?$custom_button:'<a href="'.$column['buttonurl'].'" class="btn sign-up ptp-'.$id.'-cta-'.$loop_index.'" ' . $open_in_new_tab . ' '.$onclick.'>' . dh_ptp_fa_icons($column['buttontext']) . '</a>';
        $call_to_action_button_bottom = 
            '<div class="ptp-cp2-data-holder">'.
                 $call_to_action_button .
            '</div>';
        
        if (isset($meta['comparison2-hide-call-to-action-buttons']) && $meta['comparison2-hide-call-to-action-buttons']) {
            $call_to_action_button_bottom = '';
        }
    
        // Hide empty rows
        $hide_empty_rows = isset($meta['comparison2-hide-empty-rows'])?true:false;
        // html for cp2-price-duration 
        $cp2_price_duration = '';
        if( $price_formatted!=='' || $billingtimeframe !=='' ){
            
            $cp2_price_duration = '<p class="cp2-ptp-price">' . (( $price_formatted !=='' )? $price_formatted : '&nbsp;') . '</p>' . $billingtimeframe . '<div style="clear:both"></div>';
               
        }
        
        //show action button on top
        $cp2_action_button_on_top = isset($meta['comparison2-show-action-buttons-on-top'])?'<div class="cp2-button-on-top">' . $call_to_action_button . '</div>':'';
       
        // create the html code
        $pricing_table_html .= '
            <div class="ptp-cp2-span'.$columns.'">
                <div class="ptp-cp2-price-table '.$feature_class.'">
                    <div class="head">
                        <div class="ptp-cp2-price-holder">
                            <div class="ptp-cp2-plan-title"><h2>'.dh_ptp_fa_icons($planname).'</h2></div>'

                            . $cp2_action_button_on_top . 
                        '</div>
                    </div>
                    <div class="ptp-cp2-tabled-data">' .
                        dh_ptp_features_to_html_comparison2($planfeatures, dh_ptp_comparison2_max_number_of_features(), $hide_empty_rows, $comparison2_table_features_html_arr) .
                        $call_to_action_button_bottom .
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

function dh_ptp_comparison2_max_number_of_features()
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

function dh_ptp_features_to_html_comparison2($features, $max_number_of_features, $hide_empty_rows, $comparison2_table_features_html_arr)
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
            $comparison2_table_features_plan_html = isset($comparison2_table_features_html_arr[$i])?$comparison2_table_features_html_arr[$i]:'';
            
            if( trim($dh_ptp_features[$i]) ==='[y]'  ||trim($dh_ptp_features[$i]) === '[n]' ) {               
                $output .= '<div class="ptp-cp2-data-holder ptp-comparison2-row ptp-cp2-row-id-'.$i.'">' . dh_ptp_fa_icons($dh_ptp_features[$i], true , 'no-circle' ) . $comparison2_table_features_plan_html . '</div>';
            } else {
                $tt_colon_sign = (trim($comparison2_table_features_plan_html)!=='')?'<span class="ptp-cp2-resposive-data ptp-cp2-resposive-dot  ptp-cp2-resposive-id-'.$i.'">' . ': ' . '</span>':'';
                $comparison2_table_features_plan_html = $comparison2_table_features_plan_html.$tt_colon_sign;
                $output .= '<div class="ptp-cp2-data-holder ptp-comparison2-row ptp-cp2-row-id-'.$i.'">' . $comparison2_table_features_plan_html . dh_ptp_fa_icons($dh_ptp_features[$i], true , 'no-circle' ) . '</div>';
            }
           
            
        } else {
            if (!$hide_empty_rows) {
                $output .= '<div class="ptp-cp2-data-holder ptp-comparison2-row ptp-cp2-row-id-'.$i.' tt-ptp-empty-row">&nbsp;</div>';
            }
        }
    }

    // return the features html
    return $output;
}

function tt_ptp_enable_column_match_height_script_cp2( $id ) {
    $name_of_call_matchheight_func = "call_match_height_$id";
    ?>
        <script type="text/javascript">
         jQuery(document).ready(function($) {
            jQuery.<?php echo $name_of_call_matchheight_func; ?> = function call_match_height_comparison2(ptp_id) {
                                $( ptp_id+' .ptp-cp2-plan-title' ).matchHeight(false);  
                                $( ptp_id+' .cp2-ptp-price' ).matchHeight(false);
                                $( ptp_id+' .cp2-button-on-top' ).matchHeight(false);
                                $( ptp_id+' .ptp-comparison2-row' ).each(function( index ){
                                    $( ptp_id+' .ptp-cp2-row-id-'+index ).matchHeight(false);
                                });  
                         }
            var ptp_id = '#ptp-'+<?php echo $id; ?> ;
            $.<?php echo $name_of_call_matchheight_func; ?> ( ptp_id );              
         });
      </script>
      
        <?php
      
}
