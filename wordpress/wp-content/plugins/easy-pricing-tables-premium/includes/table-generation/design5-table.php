<?php
/**
 * Read all custom styling from our database
 */
function dh_ptp_design5_css($id, $meta)
{

    // General Settings: Design
    $design5_spacing_between_columns = isset($meta['design5-spacing-between-columns'])?$meta['design5-spacing-between-columns']:'-1';
    $design5_shake_buttons_on_hover = isset($meta['design5-shake-buttons-on-hover'])?$meta['design5-shake-buttons-on-hover']:0;
    $design5_rounded_corner_width = isset($meta['design5-rounded-corners'])?$meta['design5-rounded-corners']:'0px';
    $design5_hover_effects = isset($meta['design5-hover-effects'])?$meta['design5-hover-effects']:0;
    $design5_thickness_middle_line = isset($meta['design5-thickness-middle-line'])?$meta['design5-thickness-middle-line']:'1px';
    
    
    // General Settings: Font Sizes
    $design5_plan_name_font_size = isset($meta['design5-plan-name-font-size'])?$meta['design5-plan-name-font-size']:20;
    $design5_plan_name_font_size_type = isset($meta['design5-plan-name-font-size-type'])?$meta['design5-plan-name-font-size-type']:"px";
    $design5_featured_plan_name_font_size = isset($meta['design5-featured-plan-name-font-size'])?$meta['design5-featured-plan-name-font-size']:24;
    $design5_featured_plan_name_font_size_type = isset($meta['design5-featured-plan-name-font-size-type'])?$meta['design5-featured-plan-name-font-size-type']:"px";
    $design5_price_font_size = isset($meta['design5-price-font-size'])?$meta['design5-price-font-size']:36;
    $design5_price_font_size_type = isset($meta['design5-price-font-size-type'])?$meta['design5-price-font-size-type']:"px";
    $design5_featured_price_font_size = isset($meta['design5-featured-price-font-size'])?$meta['design5-featured-price-font-size']:40;
    $design5_featured_price_font_size_type = isset($meta['design5-featured-price-font-size-type'])?$meta['design5-featured-price-font-size-type']:"px";
    $design5_bullet_item_font_size = isset($meta['design5-bullet-item-font-size'])?$meta['design5-bullet-item-font-size']:0.875;
    $design5_bullet_item_font_size_type = isset($meta['design5-bullet-item-font-size-type'])?$meta['design5-bullet-item-font-size-type']:"px";
    $design5_button_font_size = isset($meta['design5-button-font-size'])?$meta['design5-button-font-size']:1;
    $design5_button_font_size_type = isset($meta['design5-button-font-size-type'])?$meta['design5-button-font-size-type']:"px";
    $design5_billing_timeframe_font_size = isset($meta['design5-billing-timeframe-font-size'])?$meta['design5-billing-timeframe-font-size']:"px";
    $design5_billing_timeframe_font_size_type = isset($meta['design5-billing-timeframe-font-size-type'])?$meta['design5-billing-timeframe-font-size-type']:"px";
    
    
    
    // Unfeatured Columns: Background Colors
    $design5_unfeatured_border_color = isset($meta['design5-unfeatured-border-color'])?$meta['design5-unfeatured-border-color']:'#E4E4E4';
    $design5_unfeatured_background_column_color = isset($meta['design5-column-background-color'])?$meta['design5-column-background-color']:'#ffffff';
    $design5_middle_line_color = (isset($meta['design5-middle-line-color']))?$meta['design5-middle-line-color']:'#818181';
    
    // Unfeatured Columns: Font Colors
    $design5_title_area_font_color = isset($meta['design5-title-area-font-color'])?$meta['design5-title-area-font-color']:'#333333';
    $design5_pricing_area_font_color = isset($meta['design5-pricing-area-font-color'])?$meta['design5-pricing-area-font-color']:'#333333';
    $design5_featured_font_color = isset($meta['design5-featured-font-color'])?$meta['design5-featured-font-color']:'#333333';
    $design5_duration_font_color = isset($meta['design5-duration-font-color'])?$meta['design5-duration-font-color']:'#818181';

    // Unfeatured Columns: Button Colors
    $design5_button_color = isset($meta['design5-button-color'])?$meta['design5-button-color']:'#e74c3c';
    $design5_button_border_color = isset($meta['design5-button-border-color'])?$meta['design5-button-border-color']:'#c0392b';
    $design5_button_hover_color = isset($meta['design5-button-hover-color'])?$meta['design5-button-hover-color']:'#c0392b';
    $design5_button_font_color = isset($meta['design5-button-font-color'])?$meta['design5-button-font-color']:'#ffffff';
    
    // Featured Column: Background Colors
    $design5_featured_border_color = isset($meta['design5-featured-border-color'])?$meta['design5-featured-border-color']:'#E4E4E4';
    $design5_featured_feature_background_color = isset($meta['design5-column-featured-background-color'])?$meta['design5-column-featured-background-color']:'#ffffff';
    $design5_featured_middle_line_color = (isset($meta['design5-featured-middle-line-color']))?$meta['design5-featured-middle-line-color']:'#818181';

    // Featured Column: Font Colors
    $design5_featured_title_font_color = isset($meta['design5-featured-title-area-font-color'])?$meta['design5-featured-title-area-font-color']:'#333333';
    $design5_featured_pricing_font_color = isset($meta['design5-featured-pricing-area-font-color'])?$meta['design5-featured-pricing-area-font-color']:'#333333';
    $design5_featured_feature_color = isset($meta['design5-featured-feature-font-color'])?$meta['design5-featured-feature-font-color']:'#333333';
    $design5_featured_duration_font_color = isset($meta['design5-featured-duration-font-color'])?$meta['design5-featured-duration-font-color']:'#818181';

    // Featured Column: Button Colors
    $design5_featured_button_color = isset($meta['design5-featured-button-color'])?$meta['design5-featured-button-color']:'#3498db';
    $design5_featured_button_border_color = isset($meta['design5-featured-button-border-color'])?$meta['design5-featured-button-border-color']:'#2980b9';
    $design5_featured_button_hover_color = isset($meta['design5-featured-button-hover-color'])?$meta['design5-featured-button-hover-color']:'#2980b9';
    $design5_featured_button_font_color = isset($meta['design5-featured-button-font-color'])?$meta['design5-featured-button-font-color']:'#ffffff';
    $design5_hide_call_to_action_buttons = isset($meta['design5-hide-call-to-action-buttons'])?true:false;
    
    
    // Print stylish custom css setting
      if(isset($meta['ept-custom-css-setting-dg5'])) {    
              echo $meta['ept-custom-css-setting-dg5'];
        }
  
    ?>
    
    /* design 5 #<?php echo $id;?> */
    #ptp-<?php echo $id ?> div.ptp-dg5-col:not(.ptp-dg5-highlight) {
        border-color: <?php echo $design5_unfeatured_border_color; ?>;        
        background-color: <?php echo $design5_unfeatured_background_column_color; ?>;
    }
    #ptp-<?php echo $id ?> .ptp-dg5-highlight {
        border-color: <?php echo $design5_featured_border_color; ?>;
        background-color: <?php echo $design5_featured_feature_background_color; ?>;
        position: relative;
    }
       
    #ptp-<?php echo $id ?> div.ptp-dg5-item-container {
        padding: 0px;
        margin-left: 0px;
        margin-right: 0px;
    }
    
    #ptp-<?php echo $id ?> div.ptp-dg5-middle-line {
        height: <?php echo $design5_thickness_middle_line ?> ;
        background:<?php echo $design5_middle_line_color ?>;
        border-radius : 3px;
    }
    
    
    
    #ptp-<?php echo $id ?> div.ptp-dg5-item-container div {
        margin: 0px; 
    }

    #ptp-<?php echo $id ?> .ptp-dg5-highlight div.ptp-dg5-middle-line {
        height: <?php echo $design5_thickness_middle_line ?> ;
        background:<?php echo $design5_featured_middle_line_color ?>;
        border-radius : 3px;
    }
    
    #ptp-<?php echo $id ?> div.ptp-dg5-plan {
        font-size: <?php echo $design5_plan_name_font_size . $design5_plan_name_font_size_type; ?>;
        color: <?php echo $design5_title_area_font_color; ?>;
    }
    #ptp-<?php echo $id ?> .ptp-dg5-highlight div.ptp-dg5-plan {
        font-size: <?php echo $design5_featured_plan_name_font_size . $design5_featured_plan_name_font_size_type; ?>;
        margin: 15px 0 10px 0;
    }
    
    #ptp-<?php echo $id ?> div.ptp-dg5-plan .has-tip {
        color: <?php echo $design5_title_area_font_color; ?>;
    }
    #ptp-<?php echo $id ?> .ptp-dg5-highlight div.ptp-dg5-plan{
        color: <?php echo $design5_featured_title_font_color; ?>;
    }
    #ptp-<?php echo $id ?> .ptp-dg5-highlight div.ptp-dg5-plan .has-tip {
        border-bottom: dotted 1px <?php echo $design5_featured_title_font_color; ?>;
        color: <?php echo $design5_featured_title_font_color; ?>;
    }
    #ptp-<?php echo $id ?> div.ptp-dg5-price{
        font-size: <?php echo $design5_price_font_size . $design5_price_font_size_type; ?>;        
        color: <?php echo $design5_pricing_area_font_color; ?>;
    }
    #ptp-<?php echo $id ?> .ptp-dg5-highlight div.ptp-dg5-price{
        font-size: <?php echo $design5_featured_price_font_size . $design5_featured_price_font_size_type; ?>;
    }
    #ptp-<?php echo $id ?> div.ptp-dg5-price .has-tip {
        border-bottom: dotted 1px <?php echo $design5_pricing_area_font_color; ?>;
        color: <?php echo $design5_pricing_area_font_color; ?>;
    }
    #ptp-<?php echo $id ?> .ptp-dg5-highlight div.ptp-dg5-price{        
        color: <?php echo $design5_featured_pricing_font_color; ?>;
    }
    #ptp-<?php echo $id ?> .ptp-dg5-highlight div.ptp-dg5-price .has-tip {
        border-bottom: dotted 1px <?php echo $design5_featured_pricing_font_color; ?>;
        color: <?php echo $design5_featured_pricing_font_color; ?>;
    }
    
    #ptp-<?php echo $id ?>  div.ptp-dg5-pay-duration{        
        color: <?php echo $design5_duration_font_color; ?>;
        font-size : <?php echo $design5_billing_timeframe_font_size . $design5_billing_timeframe_font_size_type ; ?>;
    }
    #ptp-<?php echo $id ?> .ptp-dg5-highlight div.ptp-dg5-pay-duration{        
        color: <?php echo $design5_featured_duration_font_color; ?>;
    }    
    #ptp-<?php echo $id ?> .ptp-dg5-col {
        border-radius: <?php echo $design5_rounded_corner_width; ?>;
    }
    
    #ptp-<?php echo $id ?> div.ptp-dg5-cta{
        border-bottom-right-radius: <?php echo $design5_rounded_corner_width; ?>;
        border-bottom-left-radius: <?php echo $design5_rounded_corner_width; ?>;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    #ptp-<?php echo $id ?> a.ptp-dg5-button{
        border-radius: <?php echo $design5_rounded_corner_width; ?>;
        font-size: <?php echo $design5_button_font_size . $design5_button_font_size_type; ?>;
        color: <?php echo $design5_button_font_color; ?>;
        background-color: <?php echo $design5_button_color; ?>;
        border-bottom: <?php echo $design5_button_border_color; ?> 4px solid;
        margin: 0px;
    }
    #ptp-<?php echo $id ?> a.ptp-dg5-button .has-tip, #ptp-<?php echo $id ?> a.ptp-dg5-button:hover .has-tip {
        border-bottom: dotted 1px <?php echo $design5_button_font_color; ?>;
        color: <?php echo $design5_button_font_color; ?>;
    }
    #ptp-<?php echo $id ?> a.ptp-dg5-button:hover{
        <?php if ($design5_shake_buttons_on_hover) : ?>
            margin-top: 2px;
            border-bottom: <?php echo $design5_button_border_color; ?> 2px solid;
        <?php else : ?>
            background-color: <?php echo $design5_button_hover_color; ?>;
        <?php endif; ?>
    }
    #ptp-<?php echo $id; ?> div.ptp-dg5-bullet-item {
        color: <?php echo $design5_featured_font_color; ?>;
        font-size: <?php echo $design5_bullet_item_font_size . $design5_bullet_item_font_size_type; ?>;
        padding: 10px 0.5em 0em 0.5em;
    }
    #ptp-<?php echo $id; ?> div.ptp-dg5-bullet-item .has-tip, #ptp-<?php echo $id; ?> .ptp-dg5-bullet-item .has-tip:hover {
        color: <?php echo $design5_featured_font_color; ?>;
        border-bottom: dotted 1px <?php echo $design5_featured_font_color; ?>;
    }
    #ptp-<?php echo $id; ?> div.ptp-dg5-bullet-item .has-tip:hover {
        border-bottom: dotted 1px <?php echo $design5_featured_font_color; ?>;
    }
    #ptp-<?php echo $id; ?> .ptp-dg5-highlight .ptp-dg5-bullet-item {
        color: <?php echo $design5_featured_feature_color; ?>;        
    }
    #ptp-<?php echo $id; ?> .ptp-dg5-highlight a.ptp-dg5-button{
        color: <?php echo $design5_featured_button_font_color; ?>;
        background-color: <?php echo $design5_featured_button_color; ?>;
        border-bottom: <?php echo $design5_featured_button_border_color;?> 4px solid;
    }
    #ptp-<?php echo $id ?> .ptp-dg5-highlight a.ptp-dg5-button:hover{
        <?php if ($design5_shake_buttons_on_hover) : ?>
            margin-top: 2px;
            border-bottom: <?php echo $design5_featured_button_border_color; ?> 2px solid;
        <?php else : ?>
            background-color: <?php echo $design5_featured_button_hover_color; ?>;
        <?php endif; ?>
    }
    #ptp-<?php echo $id; ?> .ptp-dg5-highlight a.ptp-dg5-button .has-tip {
        border-bottom: dotted 1px <?php echo $design5_featured_button_font_color; ?>;
        color: <?php echo $design5_featured_button_font_color; ?>;
    }
    
    <?php if ($design5_spacing_between_columns !== '-1' ) :               
              $half_spacing_between_columns_val = intval($design5_spacing_between_columns)/2;        
        ?>        
        #ptp-<?php echo $id ?> .ptp-dg5-col{ margin-left: <?php echo $half_spacing_between_columns_val ?>px;margin-right: <?php echo $half_spacing_between_columns_val ?>px; }
    <?php endif;?>
    
    <?php if ($design5_hover_effects) : ?>
        #ptp-<?php echo $id; ?> .ptp-dg5-table-holder {
            margin-top: 20px;
        }
        #ptp-<?php echo $id; ?>.ptp-dg5-pricing-table .ptp-dg5-col {
            -moz-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            -webkit-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
        #ptp-<?php echo $id; ?>.ptp-dg5-pricing-table .ptp-dg5-col .ptp-dg5-cta {
            -moz-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            -webkit-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
        #ptp-<?php echo $id; ?>.ptp-dg5-pricing-table .ptp-dg5-col:hover .ptp-dg5-cta {
            padding: 44px 2% 32px 2%;            
        }
        #ptp-<?php echo $id; ?>.ptp-dg5-pricing-table .ptp-dg5-col:hover {
            z-index:999;
            position: relative;
            -moz-box-shadow: 0 0 20px -2px rgba(0,0,0,0.25);
            -webkit-box-shadow: 0 0 20px -2px rgba(0,0,0,0.25);
            box-shadow: 0 0 20px -2px rgba(0,0,0,0.25);
        }
        
    <?php endif; ?>
        
      <?php if ( $design5_hide_call_to_action_buttons && $design5_hover_effects ) : ?>
        
        #ptp-<?php echo $id; ?>.ptp-dg5-pricing-table .ptp-dg5-col .ptp-dg5-item-container {
            -moz-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            -webkit-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
        #ptp-<?php echo $id; ?>.ptp-dg5-pricing-table .ptp-dg5-col:hover .ptp-dg5-item-container {
            padding-top: 20px !important;
            padding-bottom: 20px !important;
        }
        
    <?php endif; ?>
        
    
    /* end of design 5 #<?php echo $id;?> */
    
    <?php
}


/**
 * Generate our simple flat pricing table HTML
 * @return [type]
 */
function dh_ptp_generate_design5_pricing_table_html ($id, $hide = false)
{
    global $features_metabox;
    global $meta;

    $meta = get_post_meta($id, $features_metabox->get_the_id(), TRUE);
    $post = get_post($id);
    $count_num_col = (count($meta['column'])<=4)?count($meta['column']):5;
    $loop_index = 0;
    $hide_table = ($hide)?'style="display:none"':'';
    $pricing_table_html = '<div id="ptp-'. $id .'" class="ptp-dg5-pricing-table ptp-dg5-'. $count_num_col .'-cols " '.$hide_table.'>';
    $pricing_table_html .= '<div class="ptp-dg5-table-holder">'; 
    foreach ($meta['column'] as $column) {
        
        // Column details
        $plan_name = isset($column['planname'])?$column['planname']:'';
        $plan_price = isset($column['planprice'])?$column['planprice']:'';
        $plan_features = isset($column['planfeatures'])?$column['planfeatures']:'';
        $button_text = isset($column['buttontext'])?$column['buttontext']:'';
        $button_url = isset($column['buttonurl'])?$column['buttonurl']:'';
        $billingtimeframe = isset($column['billingtimeframe'])?$column['billingtimeframe']:''; 
        
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
            $feature = "ptp-dg5-highlight";
        }

        // Call to action buttons
        $call_to_action = '';
        $tracking = get_option('dh_ptp_google_analytics');
        $table_name = addslashes($post->post_title)?addslashes($post->post_title):'untitled pricing table';
        $onclick = ($tracking == 1)?dh_ptp_generate_ga_script( $table_name, 'Button clicked' , addslashes($column['planname']) ):"";
        if (!isset($meta['design5-hide-call-to-action-buttons']) || !$meta['design5-hide-call-to-action-buttons']) {
            $open_in_new_tab = (isset($meta['design5-open-link-in-new-tab']) && $meta['design5-open-link-in-new-tab'])?'target="_blank"':'';
            
            $call_to_action =
                '<div class="ptp-dg5-cta">' .
                    (($custom_button)?$custom_button:'<a class="ptp-dg5-button" id="ptp-'.$id.'-cta-'.$loop_index.'"  href="' . $button_url . '" ' . $open_in_new_tab . ' '.$onclick.'>' . dh_ptp_fa_icons($button_text) . '</a>') .
	  			'</div>';
        }
        
        // Hide empty rows
        $hide_empty_rows = isset($meta['design5-hide-empty-rows'])?true:false;
        
        // create the html code
        $pricing_table_html .=            
            '<div class="ptp-dg5-col ' . dh_ptp_dg5_get_number_of_columns() . ' '. $feature . ' ptp-dg5-col-id-' . $loop_index . '">' .                
                '<div class="ptp-dg5-price-holder">'.
                    '<div class="ptp-dg5-plan">' . dh_ptp_fa_icons($plan_name) . '</div>' . 
                    '<div class="ptp-dg5-price">' . dh_ptp_fa_icons($plan_price) . '</div>' .
                    '<div class="ptp-dg5-pay-duration">' . dh_ptp_fa_icons($billingtimeframe) . '</div>' .
                '</div>' .
                '<div class="ptp-dg5-middle-line"></div>'.
                '<div class="ptp-dg5-item-container">'.
                    dh_ptp_features_to_html_design5($plan_features, dh_ptp_dg5_get_max_number_of_features(), $hide_empty_rows) . 
                    $call_to_action .
                '</div>' .
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
function dh_ptp_dg5_get_number_of_columns()
{
    global $meta;

    $number_to_text = array(
        '1'=>'one', '2'=>'two', '3'=>'three', '4'=>'four', '5'=>'five',
        '6'=>'six', '7'=> 'seven', '8'=>'eight', '9'=>'nine', '10'=>'ten'
    );
    
    $count = count($meta['column']);
    if ($count > 0 && $count <= 10) {
        return sprintf('ptp-dg5-%s-col', $number_to_text[$count]);
    }
    
    return 'ptp-dg5-more-col';
}

/**
 * Returns the highest number of features that one of our columns uses (needed to create blank rows)
 * @return int
 */
function dh_ptp_dg5_get_max_number_of_features()
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
function dh_ptp_features_to_html_design5 ($plan_features, $max_number_of_features, $hide_empty_rows)
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
            $html .= '<div class="ptp-dg5-bullet-item ptp-dg5-row-id-'.$i.'">' . dh_ptp_fa_icons($features[$i]) . '</div>';
        } else {
            if (!$hide_empty_rows) {
                $html .= '<div class="ptp-dg5-bullet-item ptp-dg5-row-id-'.$i.' tt-ptp-empty-row ">&nbsp;</div>';
            }
        }
    }

    return $html;
}

function tt_ptp_enable_column_match_height_script_dg5( $id ) {
    $name_of_called_matchheight_func = "call_match_height_$id";
    ?>
        <script type="text/javascript">
         jQuery(document).ready(function($) {
            jQuery.<?php echo $name_of_called_matchheight_func; ?> = function call_match_height_design5(ptp_id) {
                                $( ptp_id+' .ptp-dg5-cta' ).matchHeight(false);
                                $( ptp_id+' .ptp-dg5-bullet-item' ).each(function( index ){
                                    $( ptp_id+' .ptp-dg5-row-id-'+index ).matchHeight(false);
             
                                });  
                         }
            var ptp_id = '#ptp-'+<?php echo $id; ?> ;
            $.<?php echo $name_of_called_matchheight_func; ?> ( ptp_id );              
         });
      </script>
      
        <?php
      
}