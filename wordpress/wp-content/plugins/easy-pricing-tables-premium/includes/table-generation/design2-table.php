<?php

function dh_ptp_fancy_flat_css($id, $meta)
{
    // Font sizes
    $design2_most_popular_font_size = (isset($meta['fancy-flat-most-popular-font-size']))?$meta['fancy-flat-most-popular-font-size']:'0.9';
    $design2_most_popular_font_size_type = (isset($meta['fancy-flat-most-popular-font-size-type']))?$meta['fancy-flat-most-popular-font-size-type']:'em';
    $design2_featured_ribbon_font_size = isset($meta['design2-featured-ribbon-font-size'])?$meta['design2-featured-ribbon-font-size']:17;
    $design2_featured_ribbon_font_size_type = isset($meta['design2-featured-ribbon-font-size-type'])?$meta['design2-featured-ribbon-font-size-type']:'px';
    
    $design2_plan_name_font_size = (isset($meta['fancy-flat-plan-name-font-size']))?$meta['fancy-flat-plan-name-font-size']:'1';
    $design2_plan_name_font_size_type = (isset($meta['fancy-flat-plan-name-font-size-type']))?$meta['fancy-flat-plan-name-font-size-type']:'em';
    $design2_price_font_size = (isset($meta['fancy-flat-price-font-size']))?$meta['fancy-flat-price-font-size']:'1.25';
    $design2_price_font_size_type = (isset($meta['fancy-flat-price-font-size-type']))?$meta['fancy-flat-price-font-size-type']:'em';
    $design2_bullet_item_font_size = (isset($meta['fancy-flat-bullet-item-font-size']))?$meta['fancy-flat-bullet-item-font-size']:'0.875';
    $design2_bullet_item_font_size_type = (isset($meta['fancy-flat-bullet-item-font-size-type']))?$meta['fancy-flat-bullet-item-font-size-type']:'em';
    $design2_button_font_size = (isset($meta['fancy-flat-button-font-size']))?$meta['fancy-flat-button-font-size']:'1';
    $design2_button_font_size_type = (isset($meta['fancy-flat-button-font-size-type']))?$meta['fancy-flat-button-font-size-type']:'em';
    
    // Design settings
    $design2_display_most_popular_label = isset($meta['fancy-flat-display-most-popular-label'])?$meta['fancy-flat-display-most-popular-label']:0;
    $design2_fancy_display_featured_ribbon = isset($meta['fancy-flat-display-featured-ribbon'])?$meta['fancy-flat-display-featured-ribbon']:0;
    $design2_choose_your_colors = isset($meta['design2-choose-your-colors'])?$meta['design2-choose-your-colors']:1;

    // Colors, fetch only when option selected
    if ($design2_choose_your_colors == 2) {
        $design2_unfeatured_plan_title_font_color = isset($meta['design2-unfeatured-plan-title-font-color'])?$meta['design2-unfeatured-plan-title-font-color']:'2a3856';
        $design2_unfeatured_plan_title_background_color = isset($meta['design2-unfeatured-plan-title-background-color'])?$meta['design2-unfeatured-plan-title-background-color']:'#6b89c9';
        $design2_unfeatured_plan_border_background_color = isset($meta['design2-unfeatured-plan-border-background-color'])?$meta['design2-unfeatured-plan-border-background-color']:'#898f97';
        $design2_unfeatured_plan_price_font_color = isset($meta['design2-unfeatured-plan-price-font-color'])?$meta['design2-unfeatured-plan-price-font-color']:'#ffffff';
        $design2_unfeatured_button_hover_font_color = isset($meta['design2-unfeatured-button-hover-font-color'])?$meta['design2-unfeatured-button-hover-font-color']:'#ffffff';
        $design2_unfeatured_button_hover_color = isset($meta['design2-unfeatured-button-hover-color'])?$meta['design2-unfeatured-button-hover-color']:'#4c5ab2';
    
        $design2_featured_plan_title_font_color = isset($meta['design2-featured-plan-title-font-color'])?$meta['design2-featured-plan-title-font-color']:'#57120c';
        $design2_featured_plan_title_background_color = isset($meta['design2-featured-plan-title-background-color'])?$meta['design2-featured-plan-title-background-color']:'#ef5f54';
        $design2_featured_plan_border_background_color = isset($meta['design2-featured-plan-border-background-color'])?$meta['design2-featured-plan-border-background-color']:'#898f97';
        $design2_featured_plan_price_font_color = isset($meta['design2-featured-plan-price-font-color'])?$meta['design2-featured-plan-price-font-color']:'#ffffff';
        $design2_featured_button_hover_font_color = isset($meta['design2-featured-button-hover-font-color'])?$meta['design2-featured-button-hover-font-color']:'#ffffff';
        $design2_featured_button_hover_color = isset($meta['design2-featured-button-hover-color'])?$meta['design2-featured-button-hover-color']:'#d54b23';
    }
      $design2_featured_most_popular_label_background_color = isset($meta['design2-featured-most-popular-label-background-color'])?$meta['design2-featured-most-popular-label-background-color']:'#f1b3ae';
      $design2_featured_most_popular_label_font_color = isset($meta['design2-featured-most-popular-label-font-color'])?$meta['design2-featured-most-popular-label-font-color']:'#67332f';
      $design2_featured_ribbon_background_color = isset($meta['design2-featured-ribbon-background-color'])?$meta['design2-featured-ribbon-background-color']:'#a64137';
   
    // Print stylish custom css setting
      if(isset($meta['ept-custom-css-setting-dg2'])) {    
              echo $meta['ept-custom-css-setting-dg2'];
        }
    ?>
    
    /* fancy flat #<?php echo $id;?> */
    #ptp-<?php echo $id; ?>.pricing_container .pricing_item.red .pt_description {
        font-size: <?php echo $design2_most_popular_font_size . $design2_most_popular_font_size_type; ?>;
    }
    #ptp-<?php echo $id; ?>.pricing_container .pricing_title_block .name {
        font-size: <?php echo $design2_plan_name_font_size . $design2_plan_name_font_size_type; ?>;
    }
    #ptp-<?php echo $id; ?>.pricing_container .pricing_title_block .price {
        font-size: <?php echo $design2_price_font_size . $design2_price_font_size_type; ?>;
    }
    #ptp-<?php echo $id; ?>.pricing_container .pricing_content_block .pt_table .pt_table_td {
        font-size: <?php echo $design2_bullet_item_font_size . $design2_bullet_item_font_size_type; ?>;
    }
    #ptp-<?php echo $id; ?>.pricing_container .pricing_footer .ptp-fancy-button {
        font-size: <?php echo $design2_button_font_size . $design2_button_font_size_type; ?>;
        color: #666;
        border: 1px solid #ccc;
    }
    #ptp-<?php echo $id; ?>.pricing_container .pricing_footer .ptp-fancy-button:hover {
        color: #fff;
    }
    #ptp-<?php echo $id; ?>.pricing_container .pricing_footer .ptp-fancy-button .has-tip {
        border-bottom: dotted 1px #666;
        color: #666;
    }
    #ptp-<?php echo $id; ?>.pricing_container .pricing_footer .ptp-fancy-button:hover .has-tip {
        border-bottom: dotted 1px #fff;
        color: #fff;
    }
    <?php if ($design2_display_most_popular_label != 1) : ?>
        #ptp-<?php echo $id; ?> .ptp-fancy-unfeatured {
            margin-top: 0px;
        }
    <?php endif; ?>
    
    <?php if ($design2_fancy_display_featured_ribbon) : ?>
        #ptp-<?php echo $id; ?>.pricing_container .pricing_title_block .ribbon span {
            font-size: <?php echo $design2_featured_ribbon_font_size.$design2_featured_ribbon_font_size_type; ?>;
        }
    <?php endif ; ?>
    
    <?php if ($design2_choose_your_colors == 2) : ?>
        #ptp-<?php echo $id; ?>.pricing_container .pricing_item.ptp-fancy-unfeatured .pricing_title_block .name {
            color: <?php echo $design2_unfeatured_plan_title_font_color; ?>;
        }
        #ptp-<?php echo $id; ?>.pricing_container .pricing_item.ptp-fancy-unfeatured .pricing_title_block .name .has-tip{
            color: <?php echo $design2_unfeatured_plan_title_font_color; ?>;
            border-bottom: dotted 1px <?php echo $design2_unfeatured_plan_title_font_color; ?>;
        }
        #ptp-<?php echo $id; ?> .ptp-fancy-unfeatured .pricing_title_block {
            background: <?php echo $design2_unfeatured_plan_title_background_color;?>;
            border: 1px solid <?php echo $design2_unfeatured_plan_border_background_color; ?>;
        }
        #ptp-<?php echo $id; ?>.pricing_container .ptp-fancy-unfeatured .pricing_title_block .price {
            color: <?php echo $design2_unfeatured_plan_price_font_color; ?>;
        }
        #ptp-<?php echo $id; ?>.pricing_container .ptp-fancy-unfeatured .pricing_title_block .price .has-tip{
            color: <?php echo $design2_unfeatured_plan_price_font_color; ?>;
            border-bottom: dotted 1px <?php echo $design2_unfeatured_plan_price_font_color; ?>;
        }
        #ptp-<?php echo $id; ?>.pricing_container .ptp-fancy-unfeatured .pricing_footer .ptp-fancy-button:hover {
            background: <?php echo $design2_unfeatured_button_hover_color; ?>;
            color: <?php echo $design2_unfeatured_button_hover_font_color; ?>;
        }
        #ptp-<?php echo $id; ?>.pricing_container .ptp-fancy-unfeatured .pricing_footer .ptp-fancy-button:hover .has-tip{
            color: <?php echo $design2_unfeatured_button_hover_font_color; ?>;
            border-bottom: dotted 1px <?php echo $design2_unfeatured_button_hover_font_color; ?>;
        }
        #ptp-<?php echo $id; ?>.pricing_container .pricing_item.ptp-fancy-featured .pricing_title_block .name {
            color: <?php echo $design2_featured_plan_title_font_color; ?>;
        }
        #ptp-<?php echo $id; ?>.pricing_container .pricing_item.ptp-fancy-featured .pricing_title_block .name .has-tip{
            color: <?php echo $design2_featured_plan_title_font_color; ?>;
            border-bottom: dotted 1px <?php echo $design2_featured_plan_title_font_color; ?>;
        }
        #ptp-<?php echo $id; ?>.pricing_container .pricing_item.ptp-fancy-featured .pricing_title_block {
            background: <?php echo $design2_featured_plan_title_background_color; ?>;
            border: 1px solid <?php echo $design2_featured_plan_border_background_color; ?>;
        }
        #ptp-<?php echo $id; ?>.pricing_container .ptp-fancy-featured .pricing_title_block .price {
            color: <?php echo $design2_featured_plan_price_font_color; ?>;
        }
        #ptp-<?php echo $id; ?>.pricing_container .ptp-fancy-featured .pricing_footer .ptp-fancy-button:hover {
            background: <?php echo $design2_featured_button_hover_color; ?>;
            color: <?php echo $design2_featured_button_hover_font_color; ?>;
        }
        #ptp-<?php echo $id; ?>.pricing_container .ptp-fancy-featured .pricing_title_block .price .has-tip{
            color: <?php echo $design2_featured_plan_price_font_color; ?>;
            border-bottom: dotted 1px <?php echo $design2_featured_plan_price_font_color; ?>;
        }
        #ptp-<?php echo $id; ?>.pricing_container .ptp-fancy-featured .pricing_title_block .ribbon {
            background: <?php echo $design2_featured_ribbon_background_color;?>;
        }
        #ptp-<?php echo $id; ?>.pricing_container .ptp-fancy-featured .pt_description {
            color: <?php echo $design2_featured_most_popular_label_font_color; ?>;
        }
        #ptp-<?php echo $id; ?>.pricing_container .ptp-fancy-featured .pt_description,
        #ptp-<?php echo $id; ?>.pricing_container .ptp-fancy-featured .pricing_item .pt_description {
            background: <?php echo $design2_featured_most_popular_label_background_color; ?>;
        }
        #ptp-<?php echo $id; ?>.pricing_container .ptp-fancy-featured .pricing_footer .ptp-fancy-button:hover .has-tip
        {
            border-bottom: dotted 1px <?php echo $design2_featured_button_hover_font_color; ?>;
            color: <?php echo $design2_featured_button_hover_font_color; ?>;
        }
    <?php endif; ?>
    
    <?php if ($design2_choose_your_colors == 1  ) : ?>
        <?php if ($design2_featured_most_popular_label_background_color != '#f1b3ae' ) : ?>
        
       <!-- #design2-featured-most-popular-label-text {
           background: <?php // echo $design2_featured_most_popular_label_background_color; ?>;
        } -->
        <?php endif; ?>
        
        <?php if ($design2_featured_most_popular_label_font_color != '#67332f' ) : ?>
       
         #ptp-<?php echo $id; ?>.pricing_container .ptp-fancy-featured .pt_description {
            color: <?php echo $design2_featured_most_popular_label_font_color; ?>;
        }
        <?php endif; ?>
        
         <?php if ($design2_featured_ribbon_background_color != '#a64137' ) : ?>
       
        #ptp-<?php echo $id; ?>.pricing_container .ptp-fancy-featured .pricing_title_block .ribbon {
            background: <?php echo $design2_featured_ribbon_background_color;?>;
        }
        <?php endif; ?>
        
       
        <?php endif; ?> 
    /* tooltip styles */
    #ptp-<?php echo $id; ?>.pricing_container .pricing_content_block .pt_table .pt_table_td .has-tip,
    #ptp-<?php echo $id; ?>.pricing_container .pricing_content_block .pt_table .pt_table_td .has-tip:hover
    {
        color: #333;
        border-bottom: dotted 1px #333;
    }
    
    /* end of fancy flat #<?php echo $id;?> */
    
    <?php
}

/**
 * Generate our fancy flat pricing table HTML
 * @return [type]                          [description]
 */
function dh_ptp_generate_fancy_flat_pricing_table_html ($id, $hide = false)
{
    global $features_metabox;
    
    $meta = get_post_meta($id, $features_metabox->get_the_id(), TRUE);
    $post = get_post($id);
    $design2_choose_your_colors = isset($meta['design2-choose-your-colors'])?$meta['design2-choose-your-colors']:1;
    
    $color_db = array(
        'f77fa8' => 'pink',
        'ef5f54' => 'red',
        'f15477' => 'carmin',
        'a176c3' => 'violet',
        '6b89c9' => 'cobalt',
        '49a9d3' => 'blue',
        '59b7b7' => 'turquoise',
        '9ca46b' => 'asparagus',
        '92d590' => 'emerald',
        'b9c869' => 'green',
        '79714c' => 'olive',
        '9d7d60' => 'brown',
        'dca562' => 'ochre',
        'ffa14f' => 'orange',
        'ffe177' => 'yellow'
    );

    // set number of columns
    $cols = array(
        '1' => 'onecols', '2' => 'twocols', '3' => 'threecols', '4' => 'fourcols',
        '5' =>'fivecols', '6' => 'sixcols', '7' => 'sevencols', '8' => 'eightcols'
    );
    
    $number_of_columns = 'eightcols';
    $tmp_columns = count($meta['column']);
    if ($tmp_columns > 0 && $tmp_columns < 8) {
        $number_of_columns = $cols[$tmp_columns];
    }

    // Expand Featured Item
    $expand = (isset($meta['fancy-flat-expand-item-when-hovering']))?' hexpand ':'';
    // No Spacing Between Columns
    $nospacing = (isset($meta['fancy-flat-no-spacing-between-columns']))?' nospacing ':'';
    
    $hide_table = ($hide)?'style="display:none"':'';
    $pricing_table_html = '<div id="ptp-' . $id .'" class="pricing_container ' . $number_of_columns . $expand . $nospacing .'" '.$hide_table.'>';

    // set max number of features
    $dh_ptp_max_number_of_features = 0;

    // get plan features
    foreach ($meta['column'] as $column) {
        if(isset($column['planfeatures'])) {
            $col_number_of_features = count( explode( "\n", $column['planfeatures'] ) );
            if ($col_number_of_features > $dh_ptp_max_number_of_features) {
                $dh_ptp_max_number_of_features = $col_number_of_features;
            }
        }
    }

    $loop_index = 0;
    foreach ($meta['column'] as $column) {
        $planfeatures = '';
        if(isset($column['planfeatures'])) {
            $planfeatures = $column['planfeatures'];
        }

        // is plan featured
        $description = '';
        $featured_ribbon = '';
        if(isset($column['feature'])) {
            if ($column['feature'] == "featured") {
                if (isset($meta['fancy-flat-expand-featured-item'])) {
                    $feature = " ptp-fancy-featured expanded";
                } else {
                    $feature = " ptp-fancy-featured";
                }
                
                $color_scheme = $meta['fancy-flat-featured-column-color-scheme'];

                // most popular label
                if (isset($meta['fancy-flat-display-most-popular-label']) && $meta['fancy-flat-display-most-popular-label']) {
                    $most_popular_text = isset($meta['fancy-flat-most-popular-label-text'])?$meta['fancy-flat-most-popular-label-text']:__('Most Popular', PTP_LOC);
                    
                    $description = '<div class="pt_description" id="design2-featured-most-popular-label-text" >' . dh_ptp_fa_icons($most_popular_text) . '</div>';
                }
                
                // Featured ribbon
                if (isset($meta['fancy-flat-display-featured-ribbon']) && $meta['fancy-flat-display-featured-ribbon']) {
                    $featured_ribbon_text = isset($meta['fancy-flat-featured-ribbon-text'])?$meta['fancy-flat-featured-ribbon-text']:__('Featured', PTP_LOC);
                    
                    $featured_ribbon = '<div class="ribbon"><span>' . dh_ptp_fa_icons($featured_ribbon_text) . '</span></div>';
                }
                
            } else  {
                $feature = ' ptp-fancy-unfeatured';
                $color_scheme = $meta['fancy-flat-column-color-scheme'];
            } 
        } else {
            $feature = ' ptp-fancy-unfeatured';
            $color_scheme = $meta['fancy-flat-column-color-scheme'];
        }

        // Get button text
        $button_text = isset($column['buttontext'])?$column['buttontext']:'';

        // Get button url
        $button_url = isset($column['buttonurl'])?$column['buttonurl']:'';

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
        
        // Call to action buttons
        $tracking = get_option('dh_ptp_google_analytics');
        $table_name = addslashes($post->post_title)?addslashes($post->post_title):'untitled pricing table';
        $onclick = ($tracking == true)?dh_ptp_generate_ga_script( $table_name, 'Button clicked' , addslashes($column['planname']) ):"";
        if (isset($meta['fancy-flat-hide-call-to-action-buttons']) && $meta['fancy-flat-hide-call-to-action-buttons']) {
           $call_to_action = ''; 
        } else {
            $open_in_new_tab = (isset($meta['design3-open-link-in-new-tab']) && $meta['design3-open-link-in-new-tab'])?'target="_blank"':'';
            
            $call_to_action =
                '<div class="pricing_footer">'.
                    (($custom_button)?$custom_button:'<a href="' . $column['buttonurl'] .'" class="ptp-fancy-button pricing" id="ptp-'.$id.'-cta-'.$loop_index.'" ' . $open_in_new_tab . ' '.$onclick.'>' . dh_ptp_fa_icons($column['buttontext']) . '</a>') .
				'</div>';
        }

        // Translate color scheme
        $color_scheme = (isset($color_db[substr($color_scheme, 1)])?$color_db[substr($color_scheme, 1)]:'cobalt');
        if ($design2_choose_your_colors == 2) {
            $color_scheme = '';
        }
        
        // Hide empty rows
        $hide_empty_rows = isset($meta['design2-hide-empty-rows'])?true:false;
        
        $pricing_table_html .= '
		<div class="pricing_item ' . $color_scheme . $feature . ' dh-ptp-col-id-' . $loop_index . '">
			<div class="pricing_item_container">
				<div class="pricing_title_block">' .
                    $featured_ribbon .
					'<span class="name">' . dh_ptp_fa_icons($column['planname']) .'</span>
					<span class="price">' . dh_ptp_fa_icons($column['planprice']) . '</span>
				</div>
				<div class="pricing_content_block">
					' . $description . '
					<div class="pt_table">'. dh_ptp_features_to_html_fancy_flat($planfeatures, $dh_ptp_max_number_of_features, '', $hide_empty_rows) .'</div>
				</div>' .
				$call_to_action .
			'</div>
		</div>
		';
        
        $loop_index++;
    }
    $pricing_table_html .= '</div>';

    return $pricing_table_html;
}

/**
 * Generate HTML code for our features
 * @param  [type] $dh_ptp_plan_features [description]
 * @return [type]                       [description]
 */
function dh_ptp_features_to_html_fancy_flat ($dh_ptp_plan_features, $dh_ptp_max_number_of_features, $bullet_item_style, $hide_empty_rows){

    // the string to be returned
    $dh_ptp_feature_html = "";

    // explode string into a useable array
    $dh_ptp_features = explode("\n", $dh_ptp_plan_features);

    //how many features does this column have?
    $this_columns_number_of_features = count($dh_ptp_features);

    //add each feature to $dh_ptp_feature_html
    for ($iterator=0; $iterator<$dh_ptp_max_number_of_features; $iterator++) {
        
        if ($iterator < $this_columns_number_of_features && trim($dh_ptp_features[$iterator]) != "") {
            $dh_ptp_feature_html .= '<div class="pt_table_td ptp-row-id-'.$iterator.'" style="' . $bullet_item_style . '">' . dh_ptp_fa_icons($dh_ptp_features[$iterator]) . '</div>';
        } else {
            if (!$hide_empty_rows) {
                $dh_ptp_feature_html .= '<div class="pt_table_td ptp-row-id-'.$iterator.' tt-ptp-empty-row ">&nbsp;</div>';
            }
        }
    }

    // return the features html
    return $dh_ptp_feature_html;
}

function tt_ptp_enable_column_match_height_script_dg2( $id ) {
    $name_of_called_matchheight_func = "call_match_height_$id";
    ?>
        <script type="text/javascript">
         jQuery(document).ready(function($) {
            jQuery.<?php echo $name_of_called_matchheight_func; ?> = function call_match_height_design2(ptp_id) {
                                $( ptp_id+' .price' ).matchHeight(false);
                                $( ptp_id+' .name' ).matchHeight(false);
                                $( ptp_id+' .ptp-fancy-button pricing' ).matchHeight(false);

                                $( ptp_id+' .pt_table_td' ).each(function( index ){
                                    $( ptp_id+' .ptp-row-id-'+index ).matchHeight(false);

                                  });  
                         }
            var ptp_id = '#ptp-'+<?php echo $id; ?> ;
            $.<?php echo $name_of_called_matchheight_func; ?> ( ptp_id );              
         });
      </script>
      
        <?php
      
}