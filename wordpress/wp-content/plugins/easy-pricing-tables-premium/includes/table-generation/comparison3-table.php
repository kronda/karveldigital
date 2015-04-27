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
function dh_ptp_comparison3_css($id, $meta)
{
    $content = '';
    
    // Other variables
    $comparison3_shake_buttons_on_hover = isset($meta['comparison3-shake-buttons-on-hover'])?$meta['comparison3-shake-buttons-on-hover']:0;
    $comparison3_most_popular_font_size = isset($meta['comparison3-most-popular-font-size'])?$meta['comparison3-most-popular-font-size']:'18';
    $comparison3_most_popular_font_size_type = isset($meta['comparison3-most-popular-font-size-type'])?$meta['comparison3-most-popular-font-size-type']:'px';
    
    $comparison3_plan_name_font_size = isset($meta['comparison3-plan-name-font-size'])?$meta['comparison3-plan-name-font-size']:'23';
    $comparison3_plan_name_font_size_type = isset($meta['comparison3-plan-name-font-size-type'])?$meta['comparison3-plan-name-font-size-type']:'px';
    $comparison3_featured_plan_name_font_size = isset($meta['comparison3-featured-plan-name-font-size'])?$meta['comparison3-featured-plan-name-font-size']:'24';
    $comparison3_featured_plan_name_font_size_type = isset($meta['comparison3-featured-plan-name-font-size-type'])?$meta['comparison3-featured-plan-name-font-size-type']:'px';
    
    $comparison3_price_font_size = isset($meta['comparison3-price-font-size'])?$meta['comparison3-price-font-size']:'40';
    $comparison3_price_font_size_type = isset($meta['comparison3-price-font-size-type'])?$meta['comparison3-price-font-size-type']:'px';
    $comparison3_featured_price_font_size = isset($meta['comparison3-featured-price-font-size'])?$meta['comparison3-featured-price-font-size']:'48';
    $comparison3_featured_price_font_size_type = isset($meta['comparison3-featured-price-font-size-type'])?$meta['comparison3-featured-price-font-size-type']:'px';
    
    $comparison3_currency_font_size = isset($meta['comparison3-currency-font-size'])?$meta['comparison3-currency-font-size']:'40';
    $comparison3_currency_font_size_type = isset($meta['comparison3-currency-font-size-type'])?$meta['comparison3-currency-font-size-type']:'px';
    $comparison3_featured_currency_font_size = isset($meta['comparison3-featured-currency-font-size'])?$meta['comparison3-featured-currency-font-size']:'40';
    $comparison3_featured_currency_font_size_type = isset($meta['comparison3-featured-currency-font-size-type'])?$meta['comparison3-featured-currency-font-size-type']:'px';
    
    $comparison3_billing_timeframe_font_size = isset($meta['comparison3-billing-timeframe-font-size'])?$meta['comparison3-billing-timeframe-font-size']:'16';
    $comparison3_billing_timeframe_font_size_type = isset($meta['comparison3-billing-timeframe-font-size-type'])?$meta['comparison3-billing-timeframe-font-size-type']:'px';
    $comparison3_featured_billing_timeframe_font_size = isset($meta['comparison3-featured-billing-timeframe-font-size'])?$meta['comparison3-featured-billing-timeframe-font-size']:'16';
    $comparison3_featured_billing_timeframe_font_size_type = isset($meta['comparison3-featured-billing-timeframe-font-size-type'])?$meta['comparison3-featured-billing-timeframe-font-size-type']:'px';   
    
    $comparison3_bullet_item_font_size = isset($meta['comparison3-bullet-item-font-size'])?$meta['comparison3-bullet-item-font-size']:'16';
    $comparison3_bullet_item_font_size_type = isset($meta['comparison3-bullet-item-font-size-type'])?$meta['comparison3-bullet-item-font-size-type']:'px';
    $comparison3_button_font_size = isset($meta['comparison3-button-font-size'])?$meta['comparison3-button-font-size']:'14';
    $comparison3_button_font_size_type = isset($meta['comparison3-button-font-size-type'])?$meta['comparison3-button-font-size-type']:'px';
    $comparison3_raw_description_font_size = isset($meta['comparison3-raw-description-font-size'])?$meta['comparison3-raw-description-font-size']:'14';
    $comparison3_raw_description_font_size_type = isset($meta['comparison3-raw-description-font-size-type'])?$meta['comparison3-raw-description-font-size-type']:'px';
  

    // Description Column
    $comparison3_description_dark_background_color = isset($meta['comparison3-description-dark-background-color'])?$meta['comparison3-description-dark-background-color']:'#2c3e50';
    $comparison3_description_light_background_color = isset($meta['comparison3-description-light-background-color'])?$meta['comparison3-description-light-background-color']:'#34495e';
    $comparison3_description_border_color = isset($meta['comparison3-description-border-color'])?$meta['comparison3-description-border-color']:'#2c3e50';
    $comparison3_description_text_font_color = isset($meta['comparison3-description-text-font-color'])?$meta['comparison3-description-text-font-color']:'#ffffff';

    // Unfeatured Buttons
    $comparison3_button_font_color = isset($meta['comparison3-button-font-color'])?$meta['comparison3-button-font-color']:'#ffffff';
    $comparison3_button_background_color = isset($meta['comparison3-button-background-color'])?$meta['comparison3-button-background-color']:'#e74c3c';
    $comparison3_button_hover_font_color = isset($meta['comparison3-button-hover-font-color'])?$meta['comparison3-button-hover-font-color']:'#ffffff';
    $comparison3_button_hover_background_color = isset($meta['comparison3-button-hover-background-color'])?$meta['comparison3-button-hover-background-color']:'#c0392b';
    $comparison3_button_boder_color = isset($meta['comparison3-button-boder-color'])?$meta['comparison3-button-boder-color']:'#c0392b';

    // Featured Buttons
    $comparison3_featured_button_font_color = isset($meta['comparison3-featured-button-font-color'])?$meta['comparison3-featured-button-font-color']:'#ffffff';
    $comparison3_featured_button_background_color = isset($meta['comparison3-featured-button-background-color'])?$meta['comparison3-featured-button-background-color']:'#e74c3c';
    $comparison3_featured_button_hover_font_color = isset($meta['comparison3-featured-button-hover-font-color'])?$meta['comparison3-featured-button-hover-font-color']:'#ffffff';
    $comparison3_featured_button_hover_background_color = isset($meta['comparison3-featured-button-hover-background-color'])?$meta['comparison3-featured-button-hover-background-color']:'#c0392b';
    $comparison3_featured_button_boder_color = isset($meta['comparison3-featured-button-boder-color'])?$meta['comparison3-featured-button-boder-color']:'#c0392b';

    // Unfeatered Column Colors
    $comparison3_column_light_color = isset($meta['comparison3-column-light-color'])?$meta['comparison3-column-light-color']:'#f4fafb';
    $comparison3_column_dark_color = isset($meta['comparison3-column-dark-color'])?$meta['comparison3-column-dark-color']:'#e8f4f7';
    $comparison3_unfeatured_row_font_color = isset($meta['comparison3-unfeatured-row-font-color'])?$meta['comparison3-unfeatured-row-font-color']:'#ffffff';        
    // Featered Column Colors
    $comparison3_featured_column_light_color = isset($meta['comparison3-featured-column-light-color'])?$meta['comparison3-featured-column-light-color']:'#2D3F51';
    $comparison3_featured_column_dark_color = isset($meta['comparison3-featured-column-dark-color'])?$meta['comparison3-featured-column-dark-color']:'#34495E';
    $comparison3_featured_row_font_color = isset($meta['comparison3-featured-row-font-color'])?$meta['comparison3-featured-row-font-color']:'#ffffff';        

    // Unfeatured columns
    $comparison3_unfeatured_plan_title_font_color = isset($meta['comparison3-unfeatured-plan-title-font-color'])?$meta['comparison3-unfeatured-plan-title-font-color']:'#537597';
    $comparison3_unfeatured_plan_title_background_color = isset($meta['comparison3-unfeatured-plan-title-background-color'])?$meta['comparison3-unfeatured-plan-title-background-color']:'#34495e';
    $comparison3_unfeatured_column_border_background_color = isset($meta['comparison3-unfeatured-column-border-background-color'])?$meta['comparison3-unfeatured-column-border-background-color']:'#2c3e50';

    // Featured
    $comparison3_featured_plan_title_font_color = isset($meta['comparison3-featured-plan-title-font-color'])?$meta['comparison3-featured-plan-title-font-color']:'#952e22';
    $comparison3_featured_plan_title_background_color = isset($meta['comparison3-featured-plan-title-background-color'])?$meta['comparison3-featured-plan-title-background-color']:'#e74c3c';
    $comparison3_featured_column_border_background_color = isset($meta['comparison3-featured-column-border-background-color'])?$meta['comparison3-featured-column-border-background-color']:'#c0392b';

    // Print stylish custom css setting
      if(isset($meta['ept-custom-css-setting-cp3'])) {    
              echo $meta['ept-custom-css-setting-cp3'];
        }
    ?>
    
    /* comparison3 #<?php echo $id;?> */
    
    <?php
    $lines = explode("\n", $content);
    if (count($lines) > 0) :
        foreach ($lines as $line) :
            echo "#ptp-".$id.' '.$line."\n    "; 
        endforeach;
    endif;
    ?>

    <?php if ($comparison3_shake_buttons_on_hover) : ?>
        #ptp-<?php echo $id; ?> .ptp-cp3-data-holder .cp3-btn:hover{
            margin-top: 3px;
            border-bottom-width: 2px;
        }
    <?php endif; ?>
    
    <?php // !important replacements  ?>
    #ptp-<?php echo $id;?> a {outline: none; }
    #ptp-<?php echo $id;?> .ptp-cp3-price-table-holder [class*="ptp-cp3-span"] { margin-left:0px; }
    #ptp-<?php echo $id;?> .row-fluid-cp3 [class*="ptp-cp3-span"] { margin-left: -2.2px; margin-right: -2.2px;}
    
    #ptp-<?php echo $id;?> .head-tooltip {
        font-size: <?php echo $comparison3_most_popular_font_size.$comparison3_most_popular_font_size_type;?>;
    }
    #ptp-<?php echo $id;?> .ptp-cp3-plan-title h2 {
        font-size: <?php echo $comparison3_plan_name_font_size.$comparison3_plan_name_font_size_type;?>;
        font-weight: bold;
        margin: 0px;
    }
    #ptp-<?php echo $id;?> .special .ptp-cp3-plan-title h2 {
        font-size: <?php echo $comparison3_featured_plan_name_font_size.$comparison3_featured_plan_name_font_size_type;?>;
    }

    #ptp-<?php echo $id;?> .ptp-cp3-price-holder .cp3-ptp-price {

        font-size: <?php echo $comparison3_price_font_size.$comparison3_price_font_size_type;?>;
        line-height: 1.5em;
    }
    #ptp-<?php echo $id;?> .special .ptp-cp3-price-holder .cp3-ptp-price {
        font-size: <?php echo $comparison3_featured_price_font_size.$comparison3_featured_price_font_size_type;?>;
    }
    
    #ptp-<?php echo $id;?> .special .ptp-cp3-price-holder .sign {
        font-size: <?php echo $comparison3_featured_currency_font_size.$comparison3_featured_currency_font_size_type;?>;
    }
    #ptp-<?php echo $id;?> .ptp-cp3-price-holder .sign {
        font-size: <?php echo $comparison3_currency_font_size.$comparison3_currency_font_size_type;?>;
    }
    
    #ptp-<?php echo $id;?> .ptp-cp3-pay-duration {
        font-size: <?php echo $comparison3_billing_timeframe_font_size.$comparison3_billing_timeframe_font_size_type;?>;
        color: <?php echo $comparison3_unfeatured_plan_title_font_color;?>;
    }
    #ptp-<?php echo $id;?> .special.ptp-cp3-price-table .ptp-cp3-pay-duration {
        font-size: <?php echo $comparison3_featured_billing_timeframe_font_size.$comparison3_featured_billing_timeframe_font_size_type;?>;
        color: <?php echo $comparison3_featured_plan_title_font_color;?>;
    }
    
    #ptp-<?php echo $id;?> .ptp-cp3-data-holder, #ptp-<?php echo $id;?> .ptp-cp3-data-holder .fa-times, #ptp-<?php echo $id;?> .ptp-cp3-data-holder .fa-check {
        font-size: <?php echo $comparison3_bullet_item_font_size.$comparison3_bullet_item_font_size_type;?>;
    }
    #ptp-<?php echo $id;?> .ptp-comparison3-row .has-tip, #ptp-<?php echo $id;?> .ptp-comparison3-row .has-tip:hover {
        color: #333;
        border-bottom: dotted 1px #333;
    }
    #ptp-<?php echo $id;?> .ptp-comparison3-row .has-tip:hover {
        border-bottom: dotted 1px #333;
    }
    #ptp-<?php echo $id;?> .ptp-cp3-data-holder .cp3-btn {
        font-size: <?php echo $comparison3_button_font_size.$comparison3_button_font_size_type;?>;
    }
    #ptp-<?php echo $id;?> .cp3-desc-table .ptp-cp3-data-holder {
        font-size: <?php echo $comparison3_raw_description_font_size.$comparison3_raw_description_font_size_type;?>;
    }
    

    /* Description column */
    #ptp-<?php echo $id;?> .cp3-desc-table {
        border: 1px solid <?php echo $comparison3_description_border_color; ?>;
        border-right: 0px;
    }
    #ptp-<?php echo $id;?> .cp3-desc-table .ptp-cp3-data-holder:nth-child(2n+1) {
        background: <?php echo  $comparison3_description_light_background_color;?>;
        color: <?php echo $comparison3_description_text_font_color; ?>;
    }
    #ptp-<?php echo $id;?> .cp3-desc-table .ptp-cp3-data-holder:nth-child(2n) {
        background: <?php echo $comparison3_description_dark_background_color ?>;
        color: <?php echo $comparison3_description_text_font_color; ?>;
    }
    #ptp-<?php echo $id;?> .cp3-desc-table .ptp-cp3-data-holder:nth-child(2n+1) .has-tip,
    #ptp-<?php echo $id;?> .cp3-desc-table .ptp-cp3-data-holder:nth-child(2n) .has-tip,
    #ptp-<?php echo $id;?> .cp3-desc-table .ptp-cp3-data-holder:hover .has-tip
    {
        color: <?php echo $comparison3_description_text_font_color; ?>;
        border-bottom: dotted 1px <?php echo $comparison3_description_text_font_color; ?>;
    }

    /* Unfeared Buttons */
    #ptp-<?php echo $id; ?> .ptp-comparison3-unfeatured .ptp-cp3-data-holder .cp3-btn {
        background: <?php echo $comparison3_button_background_color; ?>;
        color: <?php echo $comparison3_button_font_color;?>;
        border-color: <?php echo $comparison3_button_boder_color ?>; 
        -moz-box-shadow: 0px 4px 0px 0px <?php echo $comparison3_button_boder_color ?>, inset 0px 2px 0px 0px rgba(255,255,255,0.60);
        box-shadow: 0px 4px 0px 0px <?php echo $comparison3_button_boder_color ?>;
    }
    #ptp-<?php echo $id; ?> .ptp-comparison3-unfeatured .ptp-cp3-data-holder .cp3-btn .has-tip {
        color: <?php echo $comparison3_button_font_color;?>;
        border-bottom: dotted 1px <?php echo $comparison3_button_font_color; ?>;
    }
    #ptp-<?php echo $id; ?> .ptp-comparison3-unfeatured .ptp-cp3-data-holder .cp3-btn:hover {
        background: <?php echo $comparison3_button_hover_background_color; ?>;
        color: <?php echo $comparison3_button_hover_font_color;?>;
    }
    #ptp-<?php echo $id; ?> .ptp-comparison3-unfeatured .ptp-cp3-data-holder .cp3-btn:hover .has-tip {
        color: <?php echo $comparison3_button_hover_font_color;?>;
        border-bottom: dotted 1px <?php echo $comparison3_button_hover_font_color; ?>;
    }
    /* Featured Buttons */
    #ptp-<?php echo $id; ?> .special .ptp-cp3-data-holder .cp3-btn {
        background: <?php echo $comparison3_featured_button_background_color; ?>;
        color: <?php echo $comparison3_featured_button_font_color;?>;
        border-color: <?php echo $comparison3_featured_button_boder_color ?>;
        -moz-box-shadow: 0px 3px 0px 0px <?php echo $comparison3_featured_button_boder_color ?>, inset 0px 2px 0px 0px rgba(255,255,255,0.60);
        box-shadow: 0px 3px 0px 0px <?php echo $comparison3_featured_button_boder_color ?>;
    }
    #ptp-<?php echo $id; ?> .special .ptp-cp3-data-holder .cp3-btn .has-tip {
        color: <?php echo $comparison3_featured_button_font_color;?>;
        border-bottom: dotted 1px <?php echo $comparison3_featured_button_font_color; ?>;
    }
    #ptp-<?php echo $id; ?> .special .ptp-cp3-data-holder .cp3-btn:hover {
        background: <?php echo $comparison3_featured_button_hover_background_color; ?>;
        color: <?php echo $comparison3_featured_button_hover_font_color;?>;
    }
    #ptp-<?php echo $id; ?> .special .ptp-cp3-data-holder .cp3-btn:hover .has-tip {
        color: <?php echo $comparison3_featured_button_hover_font_color;?>;
        border-bottom: dotted 1px <?php echo $comparison3_featured_button_hover_font_color; ?>;
    }

    /* Unfeatured Column */
    #ptp-<?php echo $id; ?> .ptp-comparison3-unfeatured.ptp-cp3-price-table  {
        border: 1px solid <?php echo $comparison3_unfeatured_column_border_background_color; ?>;
        box-shadow: 0 0 1px <?php echo $comparison3_unfeatured_column_border_background_color; ?>;
        -webkit-box-shadow: 0 0 1px <?php echo $comparison3_unfeatured_column_border_background_color; ?>;
    }
    #ptp-<?php echo $id; ?> .ptp-comparison3-unfeatured .ptp-cp3-plan-title h2 {
        color: <?php echo $comparison3_unfeatured_plan_title_font_color;?>;
    }
    #ptp-<?php echo $id; ?> .ptp-comparison3-unfeatured .ptp-cp3-plan-title h2 .has-tip{
        color: <?php echo $comparison3_unfeatured_plan_title_font_color;?>;
        border-bottom: dotted 1px <?php echo $comparison3_unfeatured_plan_title_font_color; ?>;
    }
    #ptp-<?php echo $id; ?> .ptp-comparison3-unfeatured .ptp-cp3-price-holder {
        background: <?php echo $comparison3_unfeatured_plan_title_background_color; ?>;
        color: <?php echo $comparison3_unfeatured_plan_title_font_color;?>;
        border-bottom: 1px solid <?php echo $comparison3_unfeatured_column_border_background_color; ?>;
    }
    #ptp-<?php echo $id; ?> .ptp-comparison3-unfeatured .ptp-cp3-price-holder .has-tip{
        color: <?php echo $comparison3_unfeatured_plan_title_font_color;?>;
        border-bottom: dotted 1px <?php echo $comparison3_unfeatured_plan_title_font_color;?>;
    }
    
    #ptp-<?php echo $id; ?> .ptp-comparison3-unfeatured .ptp-cp3-data-holder-cp3-btn {
        border-top: 1px solid <?php echo $comparison3_unfeatured_column_border_background_color; ?>;
    }

    /* Featured Column */
    #ptp-<?php echo $id; ?> .special.ptp-cp3-price-table  {
        border: 1px solid <?php echo $comparison3_featured_column_border_background_color; ?>;
        box-shadow: 0 0 1px <?php echo $comparison3_featured_column_border_background_color; ?>;
        -webkit-box-shadow: 0 0 1px <?php echo $comparison3_featured_column_border_background_color; ?>;
    }
    #ptp-<?php echo $id; ?> .special.ptp-cp3-price-table .ptp-cp3-plan-title h2 {
        color: <?php echo $comparison3_featured_plan_title_font_color;?>;
    }
    #ptp-<?php echo $id; ?> .special.ptp-cp3-price-table .ptp-cp3-plan-title h2 .has-tip{
        color: <?php echo $comparison3_featured_plan_title_font_color;?>;
        border-bottom: dotted 1px <?php echo $comparison3_featured_plan_title_font_color; ?>;
    }
    #ptp-<?php echo $id; ?> .special.ptp-cp3-price-table .ptp-cp3-price-holder {
        background: <?php echo $comparison3_featured_plan_title_background_color; ?>;
        color: <?php echo $comparison3_featured_plan_title_font_color;?>;
        border-bottom: 1px solid <?php echo $comparison3_featured_column_border_background_color; ?>;
    }
    #ptp-<?php echo $id; ?> .special.ptp-cp3-price-table .ptp-cp3-price-holder .has-tip{
        color: <?php echo $comparison3_featured_plan_title_font_color;?>;
        border-bottom: dotted 1px <?php echo $comparison3_featured_plan_title_font_color; ?>;
    }
    
    #ptp-<?php echo $id; ?> .special.ptp-cp3-price-table .ptp-cp3-data-holder-cp3-btn {
        border-top: 1px solid <?php echo $comparison3_featured_column_border_background_color; ?>;
    }

    /* Column Colors */        
    #ptp-<?php echo $id; ?> .ptp-comparison3-unfeatured .ptp-cp3-data-holder{
         color: <?php echo $comparison3_unfeatured_row_font_color;?>;
    }
    #ptp-<?php echo $id; ?> .ptp-comparison3-unfeatured .ptp-cp3-data-holder:nth-child(2n+1) {
        background: <?php echo $comparison3_column_light_color;?>;
    }
    #ptp-<?php echo $id; ?> .ptp-comparison3-unfeatured .ptp-cp3-data-holder:nth-child(2n) {
        background: <?php echo $comparison3_column_dark_color; ?>;
    }

    /* Featured Column Colors */
    #ptp-<?php echo $id; ?> .special .ptp-cp3-data-holder{
         color: <?php echo $comparison3_featured_row_font_color;?>;
    }
    #ptp-<?php echo $id; ?> .special .ptp-cp3-data-holder:nth-child(2n+1) {
        background: <?php echo $comparison3_featured_column_light_color;?>;
    }
    #ptp-<?php echo $id; ?> .special .ptp-cp3-data-holder:nth-child(2n) {
        background: <?php echo $comparison3_featured_column_dark_color; ?>;
    }


    @media handheld, only screen and (max-width: 767px) { 
       #ptp-<?php echo $id; ?> .ptp-cp3-data-holder {
        background: <?php echo $comparison3_column_dark_color; ?>!important;
        border-bottom: solid <?php echo $comparison3_unfeatured_column_border_background_color; ?> 1px !important;
      }
      
      #ptp-<?php echo $id; ?> .special .ptp-cp3-data-holder {
        background: <?php echo $comparison3_featured_column_light_color; ?>!important;
        border-bottom: solid <?php echo $comparison3_featured_column_border_background_color; ?> 1px !important;
      }
    }
        
    /* end of comparison3 #<?php echo $id;?> */
    
    <?php
}

/**
 * Generate our simple flat pricing table HTML
 * @return [type]
 */
function dh_ptp_generate_comparison3_pricing_table_html ($id, $hide = false) {
    global $features_metabox;
    global $meta;    
    $meta = get_post_meta($id, $features_metabox->get_the_id(), TRUE);
    $post = get_post($id);
    $max_number_of_features = dh_ptp_comparison3_max_number_of_features();
    $loop_index = 0;
    $col_cnt = (int)(count($meta['column'])+1);
    $col_cnt = ($col_cnt == 2) ? 3 : $col_cnt;
    $columns = floor(12/((int)$col_cnt));  // responsive column count
    $hide_text = 'style="display:none"';
    $hide_table = ($hide)? $hide_text : '';
    $pricing_table_html =
        '<div id="ptp-'. $id .'" class="ptp-comparison3-pricingtable" '.$hide_table.'>' .
            '<div class="ptp-cp3-price-table-holder ptp-cp3-columns-'.$col_cnt.'">' .
                '<div class="row-fluid-cp3">';
      
    $comparison3_table_features_html_arr = array();
    // Row descriptions
    $comparison3_table_features = isset($meta['comparison-table-features'])?$meta['comparison-table-features']:'';
    if ($comparison3_table_features) {
        $pricing_table_html .= '<div class="ptp-cp3-span'.$columns.' desc-column ptp-cp3-desc-span'.$columns.'">'.
                                    '<div class="head">'.                        
                                        '<div class="ptp-cp3-price-holder ptp-cp3-price-holder-invisible">'.
                                            '<div class="ptp-cp3-plan-title"><h2>&nbsp;</h2></div>'.

                                            '<div class="cp3-ptp-price">&nbsp;<span class="sign">&nbsp;</span><div style="clear:both"></div></div>'.

                                            '<div class="ptp-cp3-pay-duration ptp-cp3-pay-duration-invisible">&nbsp;</div>'.
                                        '</div>'.
                                    '</div>'.
                                    '<div class="cp3-desc-table">';
        
        $feature_list = explode("\n", $comparison3_table_features);
        
        for($feature_list_index = 0; $feature_list_index <$max_number_of_features ; $feature_list_index++ ) {
            $item = isset($feature_list[$feature_list_index])?$feature_list[$feature_list_index]:'';
            $pricing_table_html .= '<div class="ptp-cp3-data-holder ptp-row-id-'.$feature_list_index.'">' . dh_ptp_fa_icons($item) . '</div>';
            if(trim( $item )) {
               $comparison3_table_features_html_arr[] = '<span class="ptp-cp3-resposive-data ptp-cp3-resposive-id-'.$feature_list_index.'">' . dh_ptp_fa_icons($item) . '</span>';  
            } else {
                $comparison3_table_features_html_arr[] = '' ;
            }
        }
        
        if (isset($meta['comparison3-hide-call-to-action-buttons']) && $meta['comparison3-hide-call-to-action-buttons']) {
            $call_to_action_button = '';
        } else {
            $call_to_action_button = '<div class="ptp-cp3-data-holder ptp-cp3-data-holder-cp3-btn"><a class="cp3-btn sign-up">&nbsp;</a></div>';
        }
        $pricing_table_html .= "</div>$call_to_action_button</div>";
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
            $feature_class = ($column['feature'] == 'featured')?'special':'ptp-comparison3-unfeatured';
        } else {
            $feature_class = 'ptp-comparison3-unfeatured';
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
        $open_in_new_tab = (isset($meta['comparison3-open-link-in-new-tab']) && $meta['comparison3-open-link-in-new-tab'])?'target="_blank"':'';
        //$right_arrow_icon = (isset($meta['comparison3-btn-icon']) && $meta['comparison3-btn-icon'])?' <i class="fa fa-arrow-right"></i>':''; 
        $call_to_action_button =
            '<div class="ptp-cp3-data-holder ptp-cp3-data-holder-cp3-btn">'.
                (($custom_button)?$custom_button:'<a href="'.$column['buttonurl'].'" class="cp3-btn sign-up" id="ptp-'.$id.'-cta-'.$loop_index.'" ' . $open_in_new_tab . ' '.$onclick.'>' . dh_ptp_fa_icons($column['buttontext']) . '</a>') .
            '</div>';
        
        if (isset($meta['comparison3-hide-call-to-action-buttons']) && $meta['comparison3-hide-call-to-action-buttons']) {
            $call_to_action_button = '';
        }
    
        // Hide empty rows
        $hide_empty_rows = isset($meta['comparison3-hide-empty-rows'])?true:false;
    
        // create the html code
        $pricing_table_html .= '
            <div class="ptp-cp3-span'.$columns.'">
                <div class="ptp-cp3-price-table '.$feature_class.'">
                    <div class="head">
                        <div class="ptp-cp3-price-holder">
                            <div class="ptp-cp3-plan-title"><h2>'.dh_ptp_fa_icons($planname).'</h2></div>

                            <div class="cp3-ptp-price">' . $price_formatted . '<div style="clear:both"></div></div>

                            <div class="ptp-cp3-pay-duration" ' . (($billingtimeframe === '')?$hide_text:"") . '  >' . dh_ptp_fa_icons($billingtimeframe) . '</div>
                        </div>
                    </div>
                    <div class="ptp-cp3-tabled-data">' .
                        dh_ptp_features_to_html_comparison3($planfeatures, $max_number_of_features, $hide_empty_rows, $comparison3_table_features_html_arr) .
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

function dh_ptp_comparison3_max_number_of_features()
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

function dh_ptp_features_to_html_comparison3($features, $max_number_of_features, $hide_empty_rows, $comparison3_table_features_html_arr)
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
            $comparison3_table_features_plan_html = isset($comparison3_table_features_html_arr[$i])?$comparison3_table_features_html_arr[$i]:'';
            
            if( trim($dh_ptp_features[$i]) ==='[y]'  ||trim($dh_ptp_features[$i]) === '[n]' ) {               
                $output .= '<div class="ptp-cp3-data-holder ptp-comparison3-row ptp-row-id-'.$i.'">' . dh_ptp_fa_icons($dh_ptp_features[$i], true, 'no-circle') . $comparison3_table_features_plan_html . '</div>';
            } else {
                $tt_colon_sign = (trim($comparison3_table_features_plan_html)!=='')?'<span class="ptp-cp3-resposive-data ptp-cp3-resposive-dot  ptp-cp3-resposive-id-'.$i.'">' . ': ' . '</span>':'';
                $comparison3_table_features_plan_html = $comparison3_table_features_plan_html.$tt_colon_sign;
                $output .= '<div class="ptp-cp3-data-holder ptp-comparison3-row ptp-row-id-'.$i.'">' . $comparison3_table_features_plan_html . dh_ptp_fa_icons($dh_ptp_features[$i], true, 'no-circle') . '</div>';
            }
           
            
        } else {
            if (!$hide_empty_rows) {
                $output .= '<div class="ptp-cp3-data-holder ptp-comparison3-row ptp-row-id-'.$i.' tt-ptp-empty-row">&nbsp;</div>';
            }
        }
    }

    // return the features html
    return $output;
}

function tt_ptp_enable_column_match_height_script_cp3( $id ) {
    $name_of_called_matchheight_func = "call_match_height_$id";
    ?>
        <script type="text/javascript">
         jQuery(document).ready(function($) {
            jQuery.<?php echo $name_of_called_matchheight_func; ?> = function call_match_height_comparison3(ptp_id) {            
                                $( ptp_id+' .ptp-cp3-data-holder-cp3-btn' ).matchHeight(false);
                                $( ptp_id+' .ptp-comparison3-row' ).each(function( index ){
                                    $( ptp_id+' .ptp-row-id-'+index ).matchHeight(false);
                                });  
                         }
            var ptp_id = '#ptp-'+<?php echo $id; ?> ;
            $.<?php echo $name_of_called_matchheight_func; ?> ( ptp_id );              
         });
      </script>
      
        <?php
      
}