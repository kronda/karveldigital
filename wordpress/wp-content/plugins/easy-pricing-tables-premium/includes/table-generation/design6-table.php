<?php
/**
 * Read all custom styling from our database
 */
function dh_ptp_design6_css($id, $meta)
{

    // General Settings: Design
    $design6_rounded_corner_width = isset($meta['design6-rounded-corners'])?$meta['design6-rounded-corners']:'0px';
    $design6_hover_effects = isset($meta['design6-hover-effects'])?$meta['design6-hover-effects']:0;
    
    
    // General Settings: Font Sizes
    $design6_plan_name_font_size = isset($meta['design6-plan-name-font-size'])?$meta['design6-plan-name-font-size']:20;
    $design6_plan_name_font_size_type = isset($meta['design6-plan-name-font-size-type'])?$meta['design6-plan-name-font-size-type']:"px";
    $design6_featured_plan_name_font_size = isset($meta['design6-featured-plan-name-font-size'])?$meta['design6-featured-plan-name-font-size']:24;
    $design6_featured_plan_name_font_size_type = isset($meta['design6-featured-plan-name-font-size-type'])?$meta['design6-featured-plan-name-font-size-type']:"px";
    $design6_price_font_size = isset($meta['design6-price-font-size'])?$meta['design6-price-font-size']:36;
    $design6_price_font_size_type = isset($meta['design6-price-font-size-type'])?$meta['design6-price-font-size-type']:"px";
    $design6_featured_price_font_size = isset($meta['design6-featured-price-font-size'])?$meta['design6-featured-price-font-size']:40;
    $design6_featured_price_font_size_type = isset($meta['design6-featured-price-font-size-type'])?$meta['design6-featured-price-font-size-type']:"px";
    $design6_currency_font_size = isset($meta['design6-currency-font-size'])?$meta['design6-currency-font-size']:40;
    $design6_currency_font_size_type = isset($meta['design6-currency-font-size-type'])?$meta['design6-currency-font-size-type']:"px";
    $design6_bullet_item_font_size = isset($meta['design6-bullet-item-font-size'])?$meta['design6-bullet-item-font-size']:0.875;
    $design6_bullet_item_font_size_type = isset($meta['design6-bullet-item-font-size-type'])?$meta['design6-bullet-item-font-size-type']:"px";
    $design6_button_font_size = isset($meta['design6-button-font-size'])?$meta['design6-button-font-size']:1;
    $design6_button_font_size_type = isset($meta['design6-button-font-size-type'])?$meta['design6-button-font-size-type']:"px";
    $design6_billing_timeframe_font_size = isset($meta['design6-billing-timeframe-font-size'])?$meta['design6-billing-timeframe-font-size']:"px";
    $design6_billing_timeframe_font_size_type = isset($meta['design6-billing-timeframe-font-size-type'])?$meta['design6-billing-timeframe-font-size-type']:"px";
    
    
    
    // Unfeatured Columns: Background Colors
    $design6_unfeatured_border_color = isset($meta['design6-unfeatured-border-color'])?$meta['design6-unfeatured-border-color']:'#E4E4E4';
    $design6_title_area_background_color = isset($meta['design6-title-area-background-color'])?$meta['design6-title-area-background-color']:'#dddddd';
    $design6_unfeatured_background_column_color = isset($meta['design6-column-background-color'])?$meta['design6-column-background-color']:'#ffffff';
    
    // Unfeatured Columns: Font Colors
    $design6_title_area_font_color = isset($meta['design6-title-area-font-color'])?$meta['design6-title-area-font-color']:'#333333';
    $design6_pricing_area_font_color = isset($meta['design6-pricing-area-font-color'])?$meta['design6-pricing-area-font-color']:'#333333';
    $design6_featured_font_color = isset($meta['design6-featured-font-color'])?$meta['design6-featured-font-color']:'#333333';
    $design6_duration_font_color = isset($meta['design6-duration-font-color'])?$meta['design6-duration-font-color']:'#818181';
    $design6_currency_font_color = isset($meta['design6-currency-font-color'])?$meta['design6-currency-font-color']:'#818181';
    $design6_uneven_background_color = isset($meta['design6-uneven-background-color'])?$meta['design6-uneven-background-color']:'#818181';
    $design6_even_background_color = isset($meta['design6-even-background-color'])?$meta['design6-even-background-color']:'#818181';
 
    // Unfeatured Columns: Button Colors
    $design6_button_color = isset($meta['design6-button-color'])?$meta['design6-button-color']:'#e74c3c';
    $design6_button_hover_color = isset($meta['design6-button-hover-color'])?$meta['design6-button-hover-color']:'#c0392b';
    $design6_button_font_color = isset($meta['design6-button-font-color'])?$meta['design6-button-font-color']:'#ffffff';
    
    // Featured Column: Background Colors
    $design6_featured_border_color = isset($meta['design6-featured-border-color'])?$meta['design6-featured-border-color']:'#E4E4E4';
    $design6_featured_title_area_background_color = isset($meta['design6-featured-title-area-background-color'])?$meta['design6-featured-title-area-background-color']:'#dddddd';
    
    $design6_featured_feature_background_color = isset($meta['design6-column-featured-background-color'])?$meta['design6-column-featured-background-color']:'#ffffff';

    // Featured Column: Font Colors
    $design6_featured_title_font_color = isset($meta['design6-featured-title-area-font-color'])?$meta['design6-featured-title-area-font-color']:'#333333';
    $design6_featured_pricing_font_color = isset($meta['design6-featured-pricing-area-font-color'])?$meta['design6-featured-pricing-area-font-color']:'#333333';
    $design6_featured_feature_color = isset($meta['design6-featured-feature-font-color'])?$meta['design6-featured-feature-font-color']:'#333333';
    $design6_featured_duration_font_color = isset($meta['design6-featured-duration-font-color'])?$meta['design6-featured-duration-font-color']:'#818181';
    $design6_featured_currency_font_color = isset($meta['design6-featured-currency-font-color'])?$meta['design6-featured-currency-font-color']:'#818181';
    $design6_featured_uneven_background_color = isset($meta['design6-featured-uneven-background-color'])?$meta['design6-featured-uneven-background-color']:'#818181';
    $design6_featured_even_background_color = isset($meta['design6-featured-even-background-color'])?$meta['design6-featured-even-background-color']:'#818181';
    
    // Featured Column: Button Colors
    $design6_featured_button_color = isset($meta['design6-featured-button-color'])?$meta['design6-featured-button-color']:'#3498db';
    $design6_featured_button_hover_color = isset($meta['design6-featured-button-hover-color'])?$meta['design6-featured-button-hover-color']:'#2980b9';
    $design6_featured_button_font_color = isset($meta['design6-featured-button-font-color'])?$meta['design6-featured-button-font-color']:'#ffffff';
    $design6_hide_call_to_action_buttons = isset($meta['design6-hide-call-to-action-buttons'])?true:false;
    
    
    // Print stylish custom css setting
      if(isset($meta['ept-custom-css-setting-dg6'])) {    
              echo $meta['ept-custom-css-setting-dg6'];
        }
  
    ?>
    
    /* design 5 #<?php echo $id;?> */
    #ptp-<?php echo $id ?> div.ptp-dg6-col:not(.ptp-dg6-highlight) {
        box-shadow:  0 0 0 1px <?php echo $design6_unfeatured_border_color; ?>;        
        background-color: <?php echo $design6_unfeatured_background_column_color; ?>;
        margin: 0 1px;
    }
    #ptp-<?php echo $id ?> div.ptp-dg6-highlight {
        box-shadow:  0 0 0 3px <?php echo $design6_featured_border_color; ?>;
        background-color: <?php echo $design6_featured_feature_background_color; ?>;
        margin: 0 3px;
        position: relative;
    }
       
    #ptp-<?php echo $id ?> div.ptp-dg6-item-container {
        padding: 0px;
        margin-left: 0px;
        margin-right: 0px;
    } 
       
    #ptp-<?php echo $id ?> div.ptp-dg6-item-container div {
        margin: 0px; 
    }
    
    #ptp-<?php echo $id ?> header.ptp-dg6-pricing-header {
        background-color: <?php echo $design6_title_area_background_color; ?>;
    }
    #ptp-<?php echo $id ?> div.ptp-dg6-highlight header.ptp-dg6-pricing-header{
        background-color: <?php echo $design6_featured_title_area_background_color; ?>;
    }
    
    
    #ptp-<?php echo $id ?> header.ptp-dg6-pricing-header h2 {
        font-size: <?php echo $design6_plan_name_font_size . $design6_plan_name_font_size_type; ?>;
        color: <?php echo $design6_title_area_font_color; ?>;
        margin: 0 0 3px 0;
    }
    #ptp-<?php echo $id ?> div.ptp-dg6-highlight header.ptp-dg6-pricing-header h2{
        font-size: <?php echo $design6_featured_plan_name_font_size . $design6_featured_plan_name_font_size_type; ?>;
        color: <?php echo $design6_featured_title_font_color; ?>;
        margin: 0 0 3px 0;
    }
    
    #ptp-<?php echo $id ?> header.ptp-dg6-pricing-header h2 .has-tip {
        color: <?php echo $design6_title_area_font_color; ?>;
    }
    #ptp-<?php echo $id ?> div.ptp-dg6-highlight header.ptp-dg6-pricing-header h2 .has-tip {
        border-bottom: dotted 1px <?php echo $design6_featured_title_font_color; ?>;
        color: <?php echo $design6_featured_title_font_color; ?>;
    }
    #ptp-<?php echo $id ?> span.ptp-dg6-price{
        font-size: <?php echo $design6_price_font_size . $design6_price_font_size_type; ?>;        
        color: <?php echo $design6_pricing_area_font_color; ?>;
    }
    #ptp-<?php echo $id ?> div.ptp-dg6-highlight span.ptp-dg6-price{
        font-size: <?php echo $design6_featured_price_font_size . $design6_featured_price_font_size_type; ?>;
    }
    #ptp-<?php echo $id ?> span.ptp-dg6-price .has-tip {
        border-bottom: dotted 1px <?php echo $design6_pricing_area_font_color; ?>;
        color: <?php echo $design6_pricing_area_font_color; ?>;
    }
    #ptp-<?php echo $id ?> div.ptp-dg6-highlight span.ptp-dg6-price{        
        color: <?php echo $design6_featured_pricing_font_color; ?>;
    }
    #ptp-<?php echo $id ?> div.ptp-dg6-highlight span.ptp-dg6-price .has-tip {
        border-bottom: dotted 1px <?php echo $design6_featured_pricing_font_color; ?>;
        color: <?php echo $design6_featured_pricing_font_color; ?>;
    }
    
    #ptp-<?php echo $id ?> div.ptp-dg6-highlight span.ptp-dg6-cd-currency{
        font-size: <?php echo $design6_currency_font_size . $design6_currency_font_size_type; ?>;
        color: <?php echo $design6_featured_currency_font_color; ?>;
    }
    #ptp-<?php echo $id ?>  .ptp-dg6-cd-currency {        
        color: <?php echo $design6_currency_font_color; ?>;
        font-size: <?php echo $design6_currency_font_size . $design6_currency_font_size_type; ?>;
    }
    
    #ptp-<?php echo $id ?>  .ptp-dg6-pay-duration{        
        color: <?php echo $design6_duration_font_color; ?>;
        font-size : <?php echo $design6_billing_timeframe_font_size . $design6_billing_timeframe_font_size_type ; ?>;
    }
    #ptp-<?php echo $id ?> div.ptp-dg6-highlight .ptp-dg6-pay-duration{        
        color: <?php echo $design6_featured_duration_font_color; ?>;
    }
    
    #ptp-<?php echo $id ?> div.ptp-dg6-cta{
        border-bottom-right-radius: <?php echo $design6_rounded_corner_width; ?>;
        border-bottom-left-radius: <?php echo $design6_rounded_corner_width; ?>;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    #ptp-<?php echo $id ?> a.ptp-dg6-button{
        border-radius: <?php echo $design6_rounded_corner_width; ?>;
        font-size: <?php echo $design6_button_font_size . $design6_button_font_size_type; ?>;
        color: <?php echo $design6_button_font_color; ?>;
        background-color: <?php echo $design6_button_color; ?>;
        margin: 0px;
    }
    #ptp-<?php echo $id ?> a.ptp-dg6-button .has-tip, #ptp-<?php echo $id ?> a.ptp-dg6-button:hover .has-tip {
        border-bottom: dotted 1px <?php echo $design6_button_font_color; ?>;
        color: <?php echo $design6_button_font_color; ?>;
    }
    #ptp-<?php echo $id ?> a.ptp-dg6-button:hover{        
            background-color: <?php echo $design6_button_hover_color; ?>;
    }
    #ptp-<?php echo $id; ?> .ptp-dg6-bullet-item {
        color: <?php echo $design6_featured_font_color; ?>;
        font-size: <?php echo $design6_bullet_item_font_size . $design6_bullet_item_font_size_type; ?>;
        padding: 1em;
    }
    #ptp-<?php echo $id; ?> div.ptp-dg6-bullet-item:nth-of-type(2n+1) {
        background-color: <?php echo $design6_uneven_background_color; ?>;
    }
    #ptp-<?php echo $id; ?> div.ptp-dg6-bullet-item:nth-of-type(2n) {
        background-color: <?php echo $design6_even_background_color; ?>;
    }
    
    #ptp-<?php echo $id; ?> div.ptp-dg6-bullet-item .has-tip, #ptp-<?php echo $id; ?> .ptp-dg6-bullet-item .has-tip:hover {
        color: <?php echo $design6_featured_font_color; ?>;
        border-bottom: dotted 1px <?php echo $design6_featured_font_color; ?>;
    }
    #ptp-<?php echo $id; ?> div.ptp-dg6-bullet-item .has-tip:hover {
        border-bottom: dotted 1px <?php echo $design6_featured_font_color; ?>;
    }
    #ptp-<?php echo $id; ?> .ptp-dg6-highlight .ptp-dg6-bullet-item {
        color: <?php echo $design6_featured_feature_color; ?>;        
    }
    #ptp-<?php echo $id; ?> .ptp-dg6-highlight a.ptp-dg6-button{
        color: <?php echo $design6_featured_button_font_color; ?>;
        background-color: <?php echo $design6_featured_button_color; ?>;
    }
    #ptp-<?php echo $id ?> .ptp-dg6-highlight a.ptp-dg6-button:hover{
            background-color: <?php echo $design6_featured_button_hover_color; ?>;
    }
    #ptp-<?php echo $id; ?> .ptp-dg6-highlight a.ptp-dg6-button .has-tip {
        border-bottom: dotted 1px <?php echo $design6_featured_button_font_color; ?>;
        color: <?php echo $design6_featured_button_font_color; ?>;
    }    
    
    #ptp-<?php echo $id; ?> .ptp-dg6-highlight div.ptp-dg6-bullet-item:nth-of-type(2n+1) {
        background-color: <?php echo $design6_featured_uneven_background_color; ?>;
    }
    #ptp-<?php echo $id; ?> .ptp-dg6-highlight div.ptp-dg6-bullet-item:nth-of-type(2n) {
        background-color: <?php echo $design6_featured_even_background_color; ?>;
    }
    
    <?php if ($design6_hover_effects) : ?>
        #ptp-<?php echo $id; ?> .ptp-dg6-table-holder {
            margin-top: 20px;
        }
        #ptp-<?php echo $id; ?>.ptp-dg6-pricing-table div.ptp-dg6-col {
            -moz-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            -webkit-transition: all 0.2s linear;
            transition: all 0.2s linear;            
        }
        #ptp-<?php echo $id; ?>.ptp-dg6-pricing-table div.ptp-dg6-col .ptp-dg6-cta {
            -moz-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            -webkit-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
        
        #ptp-<?php echo $id; ?>.ptp-dg6-pricing-table div.ptp-dg6-col:not(.ptp-dg6-highlight):hover {
            z-index:999;
            position: relative;
            -moz-box-shadow: 0 0 20px -2px rgba(0,0,0,0.25);
            -webkit-box-shadow: 0 0 20px -2px rgba(0,0,0,0.25);
            box-shadow: 0 0 20px -2px rgba(0,0,0,0.25);
            transform:scale(1.05) rotate(0deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
        }
        
        #ptp-<?php echo $id; ?>.ptp-dg6-pricing-table div.ptp-dg6-highlight:hover {
            z-index:999;
            position: relative;
            -moz-box-shadow: 0 0 20px -2px <?php echo $design6_featured_border_color; ?>;;
            -webkit-box-shadow: 0 0 20px 3px <?php echo $design6_featured_border_color; ?>;;
            box-shadow: 0 0 20px 3px <?php echo $design6_featured_border_color; ?>;;
            transform:scale(1.05) rotate(0deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
        }
        
    <?php endif; ?>
        
      <?php if ( $design6_hide_call_to_action_buttons && $design6_hover_effects ) : ?>
        
        #ptp-<?php echo $id; ?>.ptp-dg6-pricing-table .ptp-dg6-col .ptp-dg6-item-container {
            -moz-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            -webkit-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
        #ptp-<?php echo $id; ?>.ptp-dg6-pricing-table .ptp-dg6-col:hover .ptp-dg6-item-container {
            padding-top: 20px !important;
            padding-bottom: 20px !important;
        }
        
    <?php endif; ?>
        
    /* smart phones */
    @media only screen and (max-width: 767px) {
       #ptp-<?php echo $id ?> header.ptp-dg6-pricing-header {
         background-color: <?php echo $design6_button_color; ?>;
         color: <?php echo $design6_button_font_color; ?>!important;
       }
       
       #ptp-<?php echo $id ?> .ptp-dg6-col,#ptp-<?php echo $id ?> .ptp-dg6-bullet-item{
         background-color: <?php echo $design6_even_background_color; ?>!important;
       }
       
       #ptp-<?php echo $id ?>  header.ptp-dg6-pricing-header h2,#ptp-<?php echo $id ?>  header.ptp-dg6-pricing-header span {
        color: <?php echo $design6_featured_button_font_color; ?>!important;
      }
    
      #ptp-<?php echo $id ?> div.ptp-dg6-highlight header.ptp-dg6-pricing-header{
        background-color: <?php echo $design6_featured_button_color; ?>;
        color: <?php echo $design6_featured_button_font_color; ?>!important;
      }
      #ptp-<?php echo $id ?> div.ptp-dg6-highlight header.ptp-dg6-pricing-header h2,#ptp-<?php echo $id ?> div.ptp-dg6-highlight header.ptp-dg6-pricing-header span {
        color: <?php echo $design6_featured_button_font_color; ?>!important;
      }
      #ptp-<?php echo $id ?> div.ptp-dg6-highlight .ptp-dg6-col,#ptp-<?php echo $id ?> div.ptp-dg6-highlight  .ptp-dg6-bullet-item{
         background-color: <?php echo $design6_featured_even_background_color; ?>!important;
       }
    }
        
        
    /* end of design 5 #<?php echo $id;?> */
    
    <?php
}


/**
 * Generate our simple flat pricing table HTML
 * @return [type]
 */
function dh_ptp_generate_design6_pricing_table_html ($id, $hide = false)
{
    global $features_metabox;
    global $meta;

    $meta = get_post_meta($id, $features_metabox->get_the_id(), TRUE);
    $post = get_post($id);
    $count_num_col = (count($meta['column'])<=4)?count($meta['column']):5;
    $loop_index = 0;
    $hide_table = ($hide)?'style="display:none"':'';
    $pricing_table_html = '<div id="ptp-'. $id .'" class="ptp-dg6-pricing-table cd-pricing-container  ptp-dg6-'. $count_num_col .'-cols " '.$hide_table.'>';
    $pricing_table_html .= '<div class="ptp-dg6-table-holder cd-pricing-list">'; 
    foreach ($meta['column'] as $column) {
        
        // Column details
        $plan_name = isset($column['planname'])?$column['planname']:'';
        $plan_price = isset($column['planprice'])?$column['planprice']:'';
        $plan_features = isset($column['planfeatures'])?$column['planfeatures']:'';
        $button_text = isset($column['buttontext'])?$column['buttontext']:'';
        $button_url = isset($column['buttonurl'])?$column['buttonurl']:'';
        $billingtimeframe = isset($column['billingtimeframe'])?'<span class="ptp-dg6-pay-duration">' . $column['billingtimeframe'] . '</span>':''; 
                /**
         * Extract price information
         * 
         * Patterns of prices supported:
         * - Currency then amount ($30, USD 30; €30) and possible text before and after
         * - Amount then currency (30 euros) and possible text before and after
         * - Amount only (30)
         */
        $price_formatted = dh_ptp_get_price_formatted( $plan_price, 'tt_dg6_custom_price_formatted' );
        
        // get custom shortcode button if any
        $custom_button = false;
        $shortcode_pattern = '|^\[shortcode\](?P<custom_button>.*)\[/shortcode\]$|';
        if ( 
            preg_match( $shortcode_pattern, $button_text, $matches) 
            ||
            preg_match( $shortcode_pattern, $button_url, $matches) 
        ) {
            $custom_button = $matches[ 'custom_button' ];
        }
        
        // Featured column
        $feature = '';
        if(isset($column['feature']) && $column['feature'] == "featured") {
            $feature = "ptp-dg6-highlight";
        }

        // Call to action buttons
        $call_to_action = '';
        $tracking = get_option('dh_ptp_google_analytics');
        $table_name = addslashes($post->post_title)?addslashes($post->post_title):'untitled pricing table';
        $onclick = ($tracking == 1)?dh_ptp_generate_ga_script( $table_name, 'Button clicked' , addslashes($column['planname']) ):"";
        if (!isset($meta['design6-hide-call-to-action-buttons']) || !$meta['design6-hide-call-to-action-buttons']) {
            $open_in_new_tab = (isset($meta['design6-open-link-in-new-tab']) && $meta['design6-open-link-in-new-tab'])?'target="_blank"':'';
            
            $call_to_action =
                '<div class="ptp-dg6-cta">' .
                    (($custom_button)?$custom_button:'<a class="ptp-dg6-button" id="ptp-'.$id.'-cta-'.$loop_index.'"  href="' . $button_url . '" ' . $open_in_new_tab . ' '.$onclick.'>' . dh_ptp_fa_icons($button_text) . '</a>') .
	  			'</div>';
        }
        
        // Hide empty rows
        $hide_empty_rows = isset($meta['design6-hide-empty-rows'])?true:false;
        
        // create the html code
        $pricing_table_html .=
            '<div class="ptp-dg6-col  ptp-bounce-invert ' . dh_ptp_dg6_get_number_of_columns() . ' '. $feature . ' ptp-dg6-col-id-' . $loop_index . '">'.            
                '<header class="ptp-dg6-pricing-header">'.
                    '<h2>' . dh_ptp_fa_icons($plan_name) . '</h2>' . 
                    '<div class="cd-price">'.
                        $price_formatted  .
                        $billingtimeframe .
                    '</div>' .
                '</header>' .
                '<div class="ptp-dg6-cd-pricing-body">'.
                   '<div class="ptp-dg6-pricing-features">'.
                     dh_ptp_features_to_html_design6($plan_features, dh_ptp_dg6_get_max_number_of_features(), $hide_empty_rows) .
                   '</div>'. 
                '</div>' .                
                    $call_to_action .
            '</div>';
 
        $loop_index++;
    }

    $pricing_table_html .= '</div></div>';

    
    
    return $pricing_table_html;
}

/**
 * Returns the appropriate HTML class depending on how many columns our pricing table has
 * @return string
 */
function dh_ptp_dg6_get_number_of_columns()
{
    global $meta;

    $number_to_text = array(
        '1'=>'one', '2'=>'two', '3'=>'three', '4'=>'four', '5'=>'five',
        '6'=>'six', '7'=> 'seven', '8'=>'eight', '9'=>'nine', '10'=>'ten'
    );
    
    $count = count($meta['column']);
    if ($count > 0 && $count <= 10) {
        return sprintf('ptp-dg6-%s-col', $number_to_text[$count]);
    }
    
    return 'ptp-dg6-more-col';
}

/**
 * Returns the highest number of features that one of our columns uses (needed to create blank rows)
 * @return int
 */
function dh_ptp_dg6_get_max_number_of_features()
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


/**
 * Generate HTML code for our features
 * @param $dh_ptp_plan_features - this is an array containing all features
 * @param $dh_ptp_max_number_of_features - the highest number of features that one of our columns uses
 * @return string - the html string containing all features
 */
function dh_ptp_features_to_html_design6 ($plan_features, $max_number_of_features, $hide_empty_rows)
{
    // the string to be returned
    $html = "";

    // explode string into a useable array
    $features = explode("\n", $plan_features);

    //how many features does this column have?
    $this_columns_number_of_features = count($features);

    //add each feature to $dh_ptp_feature_html
    for ($i=0; $i<$max_number_of_features; $i++) {
        if ($i < $this_columns_number_of_features &&  trim($features[$i]) != '') {
            $html .= '<div class="ptp-dg6-bullet-item ptp-dg6-row-id-'.$i.'">' . dh_ptp_fa_icons($features[$i]) . '</div>';
        } else {
            if (!$hide_empty_rows) {
                $html .= '<div class="ptp-dg6-bullet-item ptp-dg6-row-id-'.$i.' tt-ptp-empty-row ">&nbsp;</div>';
            }
        }
    }

    return $html;
}

/*
 * Custom the format of price and currency
 */
function tt_dg6_custom_price_formatted( $matches , $price_pattern  ) {
            $price_formatted = '';
            /**
             * Prepare HTML
             */
            $html = empty ( $matches[ 'html' ] ) ? '' : $matches[ 'html' ];
            $html && $html = '<div class="ptp-pricing-text">' . $html . '</div>';
            $currency = empty ( $matches[ 'currency' ] ) ? '' : '<span class="ptp-dg6-cd-currency">' . $matches[ 'currency' ] . '</span>';
            $price =  (isset( $matches[ 'price' ]) && $matches[ 'price' ] !=='' )? $matches[ 'price' ]:'...';
            $price = '<span class="ptp-dg6-price">' . $price . '</span>';
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
         return $price_formatted;
};

function tt_ptp_enable_column_match_height_script_dg6( $id ) {
    $name_of_called_matchheight_func = "call_match_height_$id";
    ?>
        <script type="text/javascript">
         jQuery(document).ready(function($) {
            jQuery.<?php echo $name_of_called_matchheight_func; ?> = function call_match_height_design6(ptp_id) {
                                $( ptp_id+' .ptp-dg6-pricing-header' ).matchHeight(false);
                                $( ptp_id+' .ptp-dg6-cta' ).matchHeight(false);                                
                                $( ptp_id+' .ptp-dg6-bullet-item' ).each(function( index ){
                                    $( ptp_id+' .ptp-dg6-row-id-'+index ).matchHeight(false);
             
                                });  
                         }
            var ptp_id = '#ptp-'+<?php echo $id; ?> ;
            $.<?php echo $name_of_called_matchheight_func; ?> ( ptp_id );              
         });
      </script>
      
        <?php
      
}