<?php
/**
 * Read all custom styling from our database
 */
function dh_ptp_design7_css($id, $meta)
{

    // General Settings: Design
    $design7_rounded_corner_width = isset($meta['design7-rounded-corners'])?$meta['design7-rounded-corners']:'0px';
    $design7_hover_effects = isset($meta['design7-hover-effects'])?$meta['design7-hover-effects']:0;
    
    
    // General Settings: Font Sizes
    $design7_plan_name_font_size = isset($meta['design7-plan-name-font-size'])?$meta['design7-plan-name-font-size']:20;
    $design7_plan_name_font_size_type = isset($meta['design7-plan-name-font-size-type'])?$meta['design7-plan-name-font-size-type']:"px";
    $design7_featured_plan_name_font_size = isset($meta['design7-featured-plan-name-font-size'])?$meta['design7-featured-plan-name-font-size']:24;
    $design7_featured_plan_name_font_size_type = isset($meta['design7-featured-plan-name-font-size-type'])?$meta['design7-featured-plan-name-font-size-type']:"px";
    $design7_price_font_size = isset($meta['design7-price-font-size'])?$meta['design7-price-font-size']:36;
    $design7_price_font_size_type = isset($meta['design7-price-font-size-type'])?$meta['design7-price-font-size-type']:"px";
    $design7_featured_price_font_size = isset($meta['design7-featured-price-font-size'])?$meta['design7-featured-price-font-size']:40;
    $design7_featured_price_font_size_type = isset($meta['design7-featured-price-font-size-type'])?$meta['design7-featured-price-font-size-type']:"px";
    $design7_currency_font_size = isset($meta['design7-currency-font-size'])?$meta['design7-currency-font-size']:40;
    $design7_currency_font_size_type = isset($meta['design7-currency-font-size-type'])?$meta['design7-currency-font-size-type']:"px";
    $design7_bullet_item_font_size = isset($meta['design7-bullet-item-font-size'])?$meta['design7-bullet-item-font-size']:0.875;
    $design7_bullet_item_font_size_type = isset($meta['design7-bullet-item-font-size-type'])?$meta['design7-bullet-item-font-size-type']:"px";
    $design7_button_font_size = isset($meta['design7-button-font-size'])?$meta['design7-button-font-size']:1;
    $design7_button_font_size_type = isset($meta['design7-button-font-size-type'])?$meta['design7-button-font-size-type']:"px";
    $design7_billing_timeframe_font_size = isset($meta['design7-billing-timeframe-font-size'])?$meta['design7-billing-timeframe-font-size']:"px";
    $design7_billing_timeframe_font_size_type = isset($meta['design7-billing-timeframe-font-size-type'])?$meta['design7-billing-timeframe-font-size-type']:"px";
    
    
    
    // Unfeatured Columns: Background Colors
    $design7_unfeatured_border_color = isset($meta['design7-unfeatured-border-color'])?$meta['design7-unfeatured-border-color']:'#E4E4E4';
    $design7_unfeatured_background_column_color_top = isset($meta['design7-column-background-color-top'])?$meta['design7-column-background-color-top']:'#ffffff';
    $design7_unfeatured_background_column_color_bottom = isset($meta['design7-column-background-color-bottom'])?$meta['design7-column-background-color-bottom']:'#ffffff';
    
    // Unfeatured Columns: Font Colors
    $design7_title_area_font_color = isset($meta['design7-title-area-font-color'])?$meta['design7-title-area-font-color']:'#333333';
    $design7_pricing_area_font_color = isset($meta['design7-pricing-area-font-color'])?$meta['design7-pricing-area-font-color']:'#333333';
    $design7_featured_font_color = isset($meta['design7-featured-font-color'])?$meta['design7-featured-font-color']:'#333333';
    $design7_duration_font_color = isset($meta['design7-duration-font-color'])?$meta['design7-duration-font-color']:'#818181';
    $design7_currency_font_color = isset($meta['design7-currency-font-color'])?$meta['design7-currency-font-color']:'#818181';
 
    // Unfeatured Columns: Button Colors
    $design7_button_color = isset($meta['design7-button-color'])?$meta['design7-button-color']:'#e74c3c';
    $design7_button_hover_color = isset($meta['design7-button-hover-color'])?$meta['design7-button-hover-color']:'#c0392b';
    $design7_button_font_color = isset($meta['design7-button-font-color'])?$meta['design7-button-font-color']:'#ffffff';
    
    // Featured Column: Background Colors
    $design7_featured_border_color = isset($meta['design7-featured-border-color'])?$meta['design7-featured-border-color']:'#E4E4E4';
    $design7_featured_background_column_color_bottom = isset($meta['design7-column-featured-background-color-bottom'])?$meta['design7-column-featured-background-color-bottom']:'#ffffff';
    $design7_featured_background_column_color_top = isset($meta['design7-column-featured-background-color-top'])?$meta['design7-column-featured-background-color-top']:'#ffffff';

    // Featured Column: Font Colors
    $design7_featured_title_font_color = isset($meta['design7-featured-title-area-font-color'])?$meta['design7-featured-title-area-font-color']:'#333333';
    $design7_featured_pricing_font_color = isset($meta['design7-featured-pricing-area-font-color'])?$meta['design7-featured-pricing-area-font-color']:'#333333';
    $design7_featured_feature_color = isset($meta['design7-featured-feature-font-color'])?$meta['design7-featured-feature-font-color']:'#333333';
    $design7_featured_duration_font_color = isset($meta['design7-featured-duration-font-color'])?$meta['design7-featured-duration-font-color']:'#818181';
    $design7_featured_currency_font_color = isset($meta['design7-featured-currency-font-color'])?$meta['design7-featured-currency-font-color']:'#818181';
    
    // Featured Column: Button Colors
    $design7_featured_button_color = isset($meta['design7-featured-button-color'])?$meta['design7-featured-button-color']:'#3498db';
    $design7_featured_button_hover_color = isset($meta['design7-featured-button-hover-color'])?$meta['design7-featured-button-hover-color']:'#2980b9';
    $design7_featured_button_font_color = isset($meta['design7-featured-button-font-color'])?$meta['design7-featured-button-font-color']:'#ffffff';
    $design7_hide_call_to_action_buttons = isset($meta['design7-hide-call-to-action-buttons'])?true:false;
    
    
    // Print stylish custom css setting
      if(isset($meta['ept-custom-css-setting-dg7'])) {    
              echo $meta['ept-custom-css-setting-dg7'];
        }
  
    ?>
    
    /* design 5 #<?php echo $id;?> */
    #ptp-<?php echo $id ?> div.ptp-dg7-col:not(.ptp-dg7-highlight) {
        box-shadow:  0 0 0 1px <?php echo $design7_unfeatured_border_color; ?>;        
        background:  linear-gradient(to top, <?php echo $design7_unfeatured_background_column_color_bottom; ?>, <?php echo $design7_unfeatured_background_column_color_top; ?>);
        background-color:  <?php echo $design7_unfeatured_background_column_color_bottom; ?>;
    }
    #ptp-<?php echo $id ?> div.ptp-dg7-highlight {
        box-shadow:  0 0 0 1px <?php echo $design7_featured_border_color; ?>;
        background:  linear-gradient(to top, <?php echo $design7_featured_background_column_color_bottom; ?>, <?php echo $design7_featured_background_column_color_top; ?>);
        background-color:  <?php echo $design7_featured_background_column_color_bottom; ?>;
        position: relative;
    }
       
    #ptp-<?php echo $id ?> div.ptp-dg7-item-container {
        padding: 0px;
        margin-left: 0px;
        margin-right: 0px;
    } 
       
    #ptp-<?php echo $id ?> div.ptp-dg7-item-container div {
        margin: 0px; 
    }    
    
    #ptp-<?php echo $id ?> header.ptp-dg7-pricing-header h2 {
        font-size: <?php echo $design7_plan_name_font_size . $design7_plan_name_font_size_type; ?>;
        color: <?php echo $design7_title_area_font_color; ?>;
        margin: 0 0 3px 0;
    }
    #ptp-<?php echo $id ?> div.ptp-dg7-highlight header.ptp-dg7-pricing-header h2{
        font-size: <?php echo $design7_featured_plan_name_font_size . $design7_featured_plan_name_font_size_type; ?>;
        color: <?php echo $design7_featured_title_font_color; ?>;
        margin: 0 0 3px 0;
    }
    
    #ptp-<?php echo $id ?> header.ptp-dg7-pricing-header h2 .has-tip {
        color: <?php echo $design7_title_area_font_color; ?>;
    }
    #ptp-<?php echo $id ?> div.ptp-dg7-highlight header.ptp-dg7-pricing-header h2 .has-tip {
        border-bottom: dotted 1px <?php echo $design7_featured_title_font_color; ?>;
        color: <?php echo $design7_featured_title_font_color; ?>;
    }
    #ptp-<?php echo $id ?> span.ptp-dg7-price{
        font-size: <?php echo $design7_price_font_size . $design7_price_font_size_type; ?>;        
        color: <?php echo $design7_pricing_area_font_color; ?>;
    }
    #ptp-<?php echo $id ?> div.ptp-dg7-highlight span.ptp-dg7-price{
        font-size: <?php echo $design7_featured_price_font_size . $design7_featured_price_font_size_type; ?>;
    }
    #ptp-<?php echo $id ?> span.ptp-dg7-price .has-tip {
        border-bottom: dotted 1px <?php echo $design7_pricing_area_font_color; ?>;
        color: <?php echo $design7_pricing_area_font_color; ?>;
    }
    #ptp-<?php echo $id ?> div.ptp-dg7-highlight span.ptp-dg7-price{        
        color: <?php echo $design7_featured_pricing_font_color; ?>;
    }
    #ptp-<?php echo $id ?> div.ptp-dg7-highlight span.ptp-dg7-price .has-tip {
        border-bottom: dotted 1px <?php echo $design7_featured_pricing_font_color; ?>;
        color: <?php echo $design7_featured_pricing_font_color; ?>;
    }
    
    #ptp-<?php echo $id ?> div.ptp-dg7-highlight span.ptp-dg7-cd-currency{
        font-size: <?php echo $design7_currency_font_size . $design7_currency_font_size_type; ?>;
        color: <?php echo $design7_featured_currency_font_color; ?>;
    }
    #ptp-<?php echo $id ?>  .ptp-dg7-cd-currency {        
        color: <?php echo $design7_currency_font_color; ?>;
        font-size: <?php echo $design7_currency_font_size . $design7_currency_font_size_type; ?>;
    }
    
    #ptp-<?php echo $id ?>  .ptp-dg7-pay-duration{        
        color: <?php echo $design7_duration_font_color; ?>;
        font-size : <?php echo $design7_billing_timeframe_font_size . $design7_billing_timeframe_font_size_type ; ?>;
    }
    #ptp-<?php echo $id ?> div.ptp-dg7-highlight .ptp-dg7-pay-duration{        
        color: <?php echo $design7_featured_duration_font_color; ?>;
    }
    
    #ptp-<?php echo $id ?> div.ptp-dg7-cta{
        border-bottom-right-radius: <?php echo $design7_rounded_corner_width; ?>;
        border-bottom-left-radius: <?php echo $design7_rounded_corner_width; ?>;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    #ptp-<?php echo $id ?> a.ptp-dg7-button{
        border-radius: <?php echo $design7_rounded_corner_width; ?>;
        font-size: <?php echo $design7_button_font_size . $design7_button_font_size_type; ?>;
        color: <?php echo $design7_button_font_color; ?>;
        background-color: <?php echo $design7_button_color; ?>;
        margin: 0px;
    }
    #ptp-<?php echo $id ?> a.ptp-dg7-button .has-tip, #ptp-<?php echo $id ?> a.ptp-dg7-button:hover .has-tip {
        border-bottom: dotted 1px <?php echo $design7_button_font_color; ?>;
        color: <?php echo $design7_button_font_color; ?>;
    }
    #ptp-<?php echo $id ?> a.ptp-dg7-button:hover{        
            background-color: <?php echo $design7_button_hover_color; ?>;
    }
    #ptp-<?php echo $id; ?> .ptp-dg7-bullet-item {
        color: <?php echo $design7_featured_font_color; ?>;
        font-size: <?php echo $design7_bullet_item_font_size . $design7_bullet_item_font_size_type; ?>;
        padding: 1em;
    }
    
    #ptp-<?php echo $id; ?> div.ptp-dg7-bullet-item .has-tip, #ptp-<?php echo $id; ?> .ptp-dg7-bullet-item .has-tip:hover {
        color: <?php echo $design7_featured_font_color; ?>;
        border-bottom: dotted 1px <?php echo $design7_featured_font_color; ?>;
    }
    #ptp-<?php echo $id; ?> div.ptp-dg7-bullet-item .has-tip:hover {
        border-bottom: dotted 1px <?php echo $design7_featured_font_color; ?>;
    }
    #ptp-<?php echo $id; ?> .ptp-dg7-highlight .ptp-dg7-bullet-item {
        color: <?php echo $design7_featured_feature_color; ?>;        
    }
    #ptp-<?php echo $id; ?> .ptp-dg7-highlight a.ptp-dg7-button{
        color: <?php echo $design7_featured_button_font_color; ?>;
        background-color: <?php echo $design7_featured_button_color; ?>;
    }
    #ptp-<?php echo $id ?> .ptp-dg7-highlight a.ptp-dg7-button:hover{
            background-color: <?php echo $design7_featured_button_hover_color; ?>;
    }
    #ptp-<?php echo $id; ?> .ptp-dg7-highlight a.ptp-dg7-button .has-tip {
        border-bottom: dotted 1px <?php echo $design7_featured_button_font_color; ?>;
        color: <?php echo $design7_featured_button_font_color; ?>;
    }    
    
    <?php if ($design7_hover_effects) : ?>
        #ptp-<?php echo $id; ?> .ptp-dg7-table-holder {
            margin-top: 20px;
        }
        #ptp-<?php echo $id; ?>.ptp-dg7-pricing-table div.ptp-dg7-col {
            -moz-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            -webkit-transition: all 0.2s linear;
            transition: all 0.2s linear;            
        }
        #ptp-<?php echo $id; ?>.ptp-dg7-pricing-table div.ptp-dg7-col .ptp-dg7-cta {
            -moz-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            -webkit-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
        
        #ptp-<?php echo $id; ?>.ptp-dg7-pricing-table div.ptp-dg7-col:not(.ptp-dg7-highlight):hover {
            z-index:999;
            position: relative;
            -moz-box-shadow: 0 0 20px -2px rgba(0,0,0,0.25);
            -webkit-box-shadow: 0 0 20px -2px rgba(0,0,0,0.25);
            box-shadow: 0 0 20px -2px rgba(0,0,0,0.25);
            transform:scale(1.05) rotate(0deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
        }
        
        #ptp-<?php echo $id; ?>.ptp-dg7-pricing-table div.ptp-dg7-highlight:hover {
            z-index:999;
            position: relative;
            -moz-box-shadow: 0 0 20px -2px <?php echo $design7_featured_border_color; ?>;;
            -webkit-box-shadow: 0 0 20px 3px <?php echo $design7_featured_border_color; ?>;;
            box-shadow: 0 0 20px 3px <?php echo $design7_featured_border_color; ?>;;
            transform:scale(1.05) rotate(0deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
        }
        
    <?php endif; ?>
        
      <?php if ( $design7_hide_call_to_action_buttons && $design7_hover_effects ) : ?>
        
        #ptp-<?php echo $id; ?>.ptp-dg7-pricing-table .ptp-dg7-col .ptp-dg7-item-container {
            -moz-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            -webkit-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
        #ptp-<?php echo $id; ?>.ptp-dg7-pricing-table .ptp-dg7-col:hover .ptp-dg7-item-container {
            padding-top: 20px !important;
            padding-bottom: 20px !important;
        }
        
    <?php endif; ?>
        
    /* smart phones */
    @media only screen and (max-width: 767px) {
       #ptp-<?php echo $id ?> header.ptp-dg7-pricing-header {
         background-color: <?php echo $design7_button_color; ?>;
         color: <?php echo $design7_button_font_color; ?>!important;
       }
       
       #ptp-<?php echo $id ?> .ptp-dg7-col,#ptp-<?php echo $id ?> .ptp-dg7-bullet-item{
         background-color: <?php echo $design7_even_background_color; ?>!important;
       }
       
       #ptp-<?php echo $id ?>  header.ptp-dg7-pricing-header h2,#ptp-<?php echo $id ?>  header.ptp-dg7-pricing-header span {
        color: <?php echo $design7_featured_button_font_color; ?>!important;
      }
    
      #ptp-<?php echo $id ?> div.ptp-dg7-highlight header.ptp-dg7-pricing-header{
        background-color: <?php echo $design7_featured_button_color; ?>;
        color: <?php echo $design7_featured_button_font_color; ?>!important;
      }
      #ptp-<?php echo $id ?> div.ptp-dg7-highlight header.ptp-dg7-pricing-header h2,#ptp-<?php echo $id ?> div.ptp-dg7-highlight header.ptp-dg7-pricing-header span {
        color: <?php echo $design7_featured_button_font_color; ?>!important;
      }
      #ptp-<?php echo $id ?> div.ptp-dg7-highlight .ptp-dg7-col,#ptp-<?php echo $id ?> div.ptp-dg7-highlight  .ptp-dg7-bullet-item{
         background-color: <?php echo $design7_featured_even_background_color; ?>!important;
       }
    }
        
        
    /* end of design 5 #<?php echo $id;?> */
    
    <?php
}


/**
 * Generate our simple flat pricing table HTML
 * @return [type]
 */
function dh_ptp_generate_design7_pricing_table_html ($id, $hide = false)
{
    global $features_metabox;
    global $meta;

    $meta = get_post_meta($id, $features_metabox->get_the_id(), TRUE);
    $post = get_post($id);
    $count_num_col = (count($meta['column'])<=4)?count($meta['column']):5;
    $loop_index = 0;
    $hide_table = ($hide)?'style="display:none"':'';
    $pricing_table_html = '<div id="ptp-'. $id .'" class="ptp-dg7-pricing-table cd-pricing-container  ptp-dg7-'. $count_num_col .'-cols " '.$hide_table.'>';
    $pricing_table_html .= '<div class="ptp-dg7-table-holder cd-pricing-list">'; 
    foreach ($meta['column'] as $column) {
        
        // Column details
        $plan_name = isset($column['planname'])?$column['planname']:'';
        $plan_price = isset($column['planprice'])?$column['planprice']:'';
        $plan_features = isset($column['planfeatures'])?$column['planfeatures']:'';
        $button_text = isset($column['buttontext'])?$column['buttontext']:'';
        $button_url = isset($column['buttonurl'])?$column['buttonurl']:'';
        $billingtimeframe = isset($column['billingtimeframe'])?'<span class="ptp-dg7-pay-duration">' . $column['billingtimeframe'] . '</span>' :''; 
                /**
         * Extract price information
         * 
         * Patterns of prices supported:
         * - Currency then amount ($30, USD 30; €30) and possible text before and after
         * - Amount then currency (30 euros) and possible text before and after
         * - Amount only (30)
         */
        $price_formatted = dh_ptp_get_price_formatted( $plan_price, 'tt_dg7_custom_price_formatted' );
        
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
            $feature = "ptp-dg7-highlight";
        }

        // Call to action buttons
        $call_to_action = '';
        $tracking = get_option('dh_ptp_google_analytics');
        $table_name = addslashes($post->post_title)?addslashes($post->post_title):'untitled pricing table';
        $onclick = ($tracking == 1)?dh_ptp_generate_ga_script( $table_name, 'Button clicked' , addslashes($column['planname']) ):"";
        if (!isset($meta['design7-hide-call-to-action-buttons']) || !$meta['design7-hide-call-to-action-buttons']) {
            $open_in_new_tab = (isset($meta['design7-open-link-in-new-tab']) && $meta['design7-open-link-in-new-tab'])?'target="_blank"':'';
            
            $call_to_action =
                '<div class="ptp-dg7-cta">' .
                    (($custom_button)?$custom_button:'<a class="ptp-dg7-button" id="ptp-'.$id.'-cta-'.$loop_index.'"  href="' . $button_url . '" ' . $open_in_new_tab . ' '.$onclick.'>' . dh_ptp_fa_icons($button_text) . '</a>') .
	  			'</div>';
        }
        
        // Hide empty rows
        $hide_empty_rows = isset($meta['design7-hide-empty-rows'])?true:false;
        
        // create the html code
        $pricing_table_html .=
            '<div class="ptp-dg7-col  ptp-bounce-invert ' . dh_ptp_dg7_get_number_of_columns() . ' '. $feature . ' ptp-dg7-col-id-' . $loop_index . '">'.            
                '<header class="ptp-dg7-pricing-header">'.
                    '<h2>' . dh_ptp_fa_icons($plan_name) . '</h2>' . 
                    '<div class="cd-price">'.
                        $price_formatted  .
                        $billingtimeframe .
                    '</div>' .
                '</header>' .
                '<div class="ptp-dg7-cd-pricing-body">'.
                   '<div class="ptp-dg7-pricing-features">'.
                     dh_ptp_features_to_html_design7($plan_features, dh_ptp_dg7_get_max_number_of_features(), $hide_empty_rows) .
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
function dh_ptp_dg7_get_number_of_columns()
{
    global $meta;

    $number_to_text = array(
        '1'=>'one', '2'=>'two', '3'=>'three', '4'=>'four', '5'=>'five',
        '6'=>'six', '7'=> 'seven', '8'=>'eight', '9'=>'nine', '10'=>'ten'
    );
    
    $count = count($meta['column']);
    if ($count > 0 && $count <= 10) {
        return sprintf('ptp-dg7-%s-col', $number_to_text[$count]);
    }
    
    return 'ptp-dg7-more-col';
}

/**
 * Returns the highest number of features that one of our columns uses (needed to create blank rows)
 * @return int
 */
function dh_ptp_dg7_get_max_number_of_features()
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
function dh_ptp_features_to_html_design7 ($plan_features, $max_number_of_features, $hide_empty_rows)
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
            $html .= '<div class="ptp-dg7-bullet-item ptp-dg7-row-id-'.$i.'">' . dh_ptp_fa_icons($features[$i]) . '</div>';
        } else {
            if (!$hide_empty_rows) {
                $html .= '<div class="ptp-dg7-bullet-item ptp-dg7-row-id-'.$i.' tt-ptp-empty-row ">&nbsp;</div>';
            }
        }
    }

    return $html;
}

/*
 * Custom the format of price and currency
 */
function tt_dg7_custom_price_formatted( $matches , $price_pattern  ) {
            $price_formatted = '';
            /**
             * Prepare HTML
             */
            $html = empty ( $matches[ 'html' ] ) ? '' : $matches[ 'html' ];
            $html && $html = '<div class="ptp-pricing-text">' . $html . '</div>';
            $currency = empty ( $matches[ 'currency' ] ) ? '' : '<span class="ptp-dg7-cd-currency">' . $matches[ 'currency' ] . '</span>';
            $price =  (isset( $matches[ 'price' ]) && $matches[ 'price' ] !=='' )? $matches[ 'price' ]:'...';
            $price = '<span class="ptp-dg7-price">' . $price . '</span>';
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

function tt_ptp_enable_column_match_height_script_dg7( $id ) {
    $name_of_called_matchheight_func = "call_match_height_$id";
    ?>
        <script type="text/javascript">
         jQuery(document).ready(function($) {
            jQuery.<?php echo $name_of_called_matchheight_func; ?> = function call_match_height_design7(ptp_id) {
                                $( ptp_id+' .ptp-dg7-pricing-header' ).matchHeight(false);
                                $( ptp_id+' .ptp-dg7-cta' ).matchHeight(false);                                
                                $( ptp_id+' .ptp-dg7-bullet-item' ).each(function( index ){
                                    $( ptp_id+' .ptp-dg7-row-id-'+index ).matchHeight(false);
             
                                });  
                         }
            var ptp_id = '#ptp-'+<?php echo $id; ?> ;
            $.<?php echo $name_of_called_matchheight_func; ?> ( ptp_id );              
         });
      </script>
      
        <?php
      
}